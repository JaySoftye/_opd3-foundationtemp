var EventSettings = {
    loggedIn: false,
    canSeek: false,
    finished: false,
    players: [],
    playerStatus: [],
    savingProgress: false,
    currentPlayer: false,
    gotoEnd: function() {
        EventSettings.canSeek = true;
        EventSettings.currentPlayer.seekTo(9);
    }
};
$(document).ready(function(){
    var maxProgress = [];
    var lastProgress = [];
    EventSettings.loggedIn = $('body').hasClass('logged-in');
    $('.flowplayer').each(function(idx,obj){
        var currentPlayerElem = $(this);
        var videoID = currentPlayerElem.data('videoid');
        $(obj).data('playeridx',idx);
        $.ajax({
            url: '/videos/gettingstarted/'+videoID,
            success: function(response) {
                var sources = [
                    { type: "application/x-mepgurl", src:  response.video.m3u8_url },
                    { type: "video/mp4", src:  response.video.standard_url  }
                ];
                if (response.video.webm_url) {
                    sources.push({
                        type: "video/webm",
                        src: response.video.webm_url
                    });
                }
                EventSettings.players[idx] = flowplayer(currentPlayerElem[0],{
                    poster: response.video.normal_image_url,
                    key: currentPlayerElem.data('key'),
                    share: false,
                    clip: {
                        sources: sources
                    }
                });
                maxProgress[idx] = parseInt($(this).data('maxprogress'));
                lastProgress[idx] = maxProgress[idx];
                EventSettings.playerStatus[idx] = {
                    finished: false
                };
                //currentPlayerElem.data('playeridx',idx);
                EventSettings.players[idx].on('beforeseek',function(evt,fp,pos){
                    if (VideoSettings.submitFinished) {
                        if (pos > maxProgress[idx] && !EventSettings.canSeek) {
                            evt.preventDefault();
                        }
                    }
                    EventSettings.canSeek = false;
                });
                if (idx == 0) {
                    EventSettings.currentPlayer = EventSettings.players[idx];
                }
                if (currentPlayerElem.data('currentprogress')) {
                    var currentProgress = parseInt(currentPlayerElem.data('currentprogress'));
                    EventSettings.players[idx].on('ready',function(){
                        // console.log('seeking to ',currentProgress);
                        EventSettings.players[idx].seek(currentProgress);
                    });
                    lastProgress[idx] = currentProgress;
                }
                EventSettings.players[idx].on('pause',function(evt,fp) {
                    var currentProgress = Math.floor(fp.video.time);
                    if (!EventSettings.savingProgress && EventSettings.loggedIn) {
                        EventSettings.savingProgress = true;
                        var data = {
                            video_id: currentPlayerElem.data('videoid'),
                            progress: currentProgress
                        };
                        $.ajax('/gettingstarted/save-progress',{
                            data: data,
                            method: 'POST',
                            success: function() {
                                EventSettings.savingProgress = false;
                            }
                        });
                    }
                });
                EventSettings.players[idx].on('finish',function(evt,fp){
                    var parentContainer = $('.flowplayer[data-videoid="'+videoID+'"]').parents('.getting-started-category-main-videos');
                    $('.course-details .quiz-btn',parentContainer).removeClass('disabled');
                    $('.course-quiz',parentContainer).modal('show');
                    EventSettings.playerStatus[idx].finished = true;
                    EventSettings.savingProgress = true;
                    $.ajax('/gettingstarted/save-progress',{
                        data: {
                            video_id: currentPlayerElem.data('videoid'),
                            progress: Math.floor(maxProgress[idx]),
                            finished: 1
                        },
                        method: 'POST',
                        success: function() {
                            EventSettings.savingProgress = false;
                        }
                    });
                });
                EventSettings.players[idx].on('progress',function(evt,fp,pos){
                    if (Math.floor(pos) != lastProgress[idx] && Math.floor(pos) % 10 == 0) {
                        // Save progress for chapter
                        if (!EventSettings.savingProgress && EventSettings.loggedIn) {
                            EventSettings.savingProgress = true;
                            $.ajax('/gettingstarted/save-progress',{
                                data: {
                                    video_id: $('.flowplayer').data('videoid'),
                                    progress: Math.floor(pos),
                                    finished: EventSettings.playerStatus[idx].finished
                                },
                                method: 'POST',
                                success: function() {
                                    EventSettings.savingProgress = false;
                                }
                            });
                        }
                    }
                    if (pos > maxProgress[idx]) {
                        maxProgress[idx] = pos;
                    }
                    lastProgress[idx] = Math.floor(pos);
                });
            }
        });
    });

    $(document).on('show.bs.tab','a',function(evt){
        $(evt.target).parent().addClass('current-category');
    });
    $(document).on('hide.bs.tab','a',function(evt){
        $(evt.target).parent().removeClass('current-category');
    });

    $('.getting-started-category-videos-container .card').on('click',function(evt){
        var id = $(this).data('id');
        EventSettings.currentPlayer.pause();
        var playerIdx = $('#getting-started-category-video-'+id+' .flowplayer').data('playeridx');
        $('.getting-started-category-main-videos',$('#getting-started-category-video-'+id).parent()).removeClass('show').addClass('hidden');
        $('#getting-started-category-video-'+id).removeClass('hidden').addClass('show');
        EventSettings.currentPlayer = EventSettings.players[playerIdx];
        //$('.getting-started-category-videos-container.active .video-active-bar.active').removeClass('active');
        //$(this).parents('.getting-started-category-video').find('.video-active-bar').addClass('active');
        //EventSettings.attachEvents();
        //$('#getting-started-quiz').removeClass('active');
        $("html, body").animate({
            'scroll-top': ($('#getting-started-category-tabs').offset().top-$('.top-header-bar').height())+'px'
        });
        evt.preventDefault();
    });
    $(document).on('click','#getting-started-category-tabs .nav-link',function(evt){
        var id = $(this).data('id');
        $('.getting-started-category-videos-container').addClass('hidden').removeClass('active');
        $('#getting-started-category-videos-'+id).removeClass('hidden').addClass('active');
    });
    $(document).on('shown.bs.tab','#getting-started-category-tabs',function(evt){
        if (EventSettings.currentPlayer) {
            EventSettings.currentPlayer.pause();
        }
        var currVideos = $($(evt.target).attr('href'));
        var playerIdx = $('.show .flowplayer',currVideos).data('playeridx');
        EventSettings.currentPlayer = EventSettings.players[playerIdx];
    });
    /*
    $('.show-quiz-btn').on('click',function(evt){
        var id = $(this).data('id');
        $('#getting-started-quiz').addClass('active');
        $('#getting-started-quiz form input[name="video_id"]').val(id);
        $("html, body").animate({
            'scroll-top': ($('#getting-started-quiz').offset().top-$('.header-container').height())+'px'
        });
    });
    */
    $(document).on('click','.cancel-quiz-btn',function(evt){
        $("html, body").animate({
            'scroll-top': ($('#getting-started-categories').offset().top-$('.header-container').height())+'px'
        },500,function(){
            $('#getting-started-quiz').removeClass('active');
        });
    });
    $('.select-content-link').on('click',function(evt){
        $('.free-courses-btn form').submit();
        evt.preventDefault();
    });
    $(document).on('change','.course-quiz input[name="survey_question1"]',function(evt){
        $(this).parents('.satisfaction-survey-active').find('.additional-comments1 textarea').val('');
        if ($(this).val() == 0 || $(this).val() == 1) {
            $(this).parents('.satisfaction-survey-active').find('.additional-comments1').removeClass('hidden');
            $(this).parents('.satisfaction-survey-active').find('.additional-comments1 label.bad-label').removeClass('hidden');
            $(this).parents('.satisfaction-survey-active').find('.additional-comments1 label.good-label').addClass('hidden');
        }
        else if ($(this).val() == 3 || $(this).val() == 2) {
            $(this).parents('.satisfaction-survey-active').find('.additional-comments1').removeClass('hidden');
            $(this).parents('.satisfaction-survey-active').find('.additional-comments1 label.good-label').removeClass('hidden');
            $(this).parents('.satisfaction-survey-active').find('.additional-comments1 label.bad-label').addClass('hidden');
        }
    });
    $(document).on('change','.course-quiz input[name="survey_question2"]',function(evt){
        $(this).parents('.satisfaction-survey-active').find('.additional-comments2 textarea').val('');
        if ($(this).val() == 0 || $(this).val() == 1) {
            $(this).parents('.satisfaction-survey-active').find('.additional-comments2').removeClass('hidden');
            $(this).parents('.satisfaction-survey-active').find('.additional-comments2 label.bad-label').removeClass('hidden');
            $(this).parents('.satisfaction-survey-active').find('.additional-comments2 label.good-label').addClass('hidden');
        }
        else if ($(this).val() == 3 || $(this).val() == 2) {
            $(this).parents('.satisfaction-survey-active').find('.additional-comments2').removeClass('hidden');
            $(this).parents('.satisfaction-survey-active').find('.additional-comments2 label.good-label').removeClass('hidden');
            $(this).parents('.satisfaction-survey-active').find('.additional-comments2 label.bad-label').addClass('hidden');
        }
    });
    $(document).on('click','.course-quiz .quiz-submit-btn',function(evt){
        var modal = $(this).parents('.modal');
        var form = $('form',modal);
        $('.error',modal).addClass('hidden');
        var videoID = modal.data('id');
        var videoContainer = $('#getting-started-category-video-'+videoID);
        var haveErr = false;
        $('.form-group',modal).each(function(){
            $(this).removeClass('has-danger');
            if ($(this).find('input[type="radio"]').length > 0) {
                if ($(this).find('input[type="radio"]:checked').length == 0) {
                    haveErr = true;
                    $(this).addClass('has-danger');
                }
            }
        });
        if (!haveErr) {
            $.ajax(form.attr('action'),{
                method: 'POST',
                data: form.serialize(),
                success: function(response) {
                    form[0].reset();
                    if (response.success) {
                        $('.satisfaction-survey-active',modal).html('');
                        $('.satisfaction-survey-hdr',modal).addClass('hidden');
                        if (response.passed) {
                            modal.data('nextmodal','#certification-complete'+videoID);
                            var certLink = $('#certification-complete'+videoID+' .download-cert-btn').attr('href');
                            $('#certification-complete'+videoID+' .download-cert-btn').attr('href',certLink+'/'+response.certificate_id);
                            $('.course-details .download-cert-btn',videoContainer).removeClass('hidden').addClass('active');
                            $('.course-details .download-cert-btn',videoContainer).attr('href',certLink+'/'+response.certificate_id);
                            $('.course-details .quiz-btn',videoContainer).removeClass('active').addClass('hidden');
                        }
                        else {
                            modal.data('nextmodal','#course-quiz-score-modal'+videoID);
                            $('#course-quiz-score-modal'+videoID+' .quiz-score').text(response.score+'%');
                        }
                        modal.modal('hide');
                    }
                }
            });
        }
        else {
            $('.course-quiz .error').removeClass('hidden');
        }
    });
    $('.course-quiz').on('hidden.bs.modal',function(){
        var nextModal = $(this).data('nextmodal');
        if (nextModal) {
            $(nextModal).modal('show');
            $(this).data('nextmodal','');
        }
    });
    window.onblur = function() {
        if (VideoSettings.pauseInactive) {
            EventSettings.currentPlayer.pause();
        }
    }
    if (VideoSettings.submitFinished == 0) {
        $('.course-details .quiz-btn').removeClass('disabled');
    }
});
