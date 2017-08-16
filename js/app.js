/*!
 * Bootstrap v4.0.0-alpha Teq Scripts
 */
 $(document).ready(function(){
   "use strict";

  /** nOw Chat Window **/
 $( "#now-instructional-support" ).click(function() {
   $( "#now-chat-window" ).animate({
     width: '770',
     height: '400'
   }, 100, function() {
     $(this).css('z-index', 10010)
   });
 });

 $( "button#now-chat-close" ).click(function() {
   $( "#now-chat-window" ).animate({
     width: '0',
     height: '0'
   }, 500, function() {
     $(this).css('z-index', 10000)
   });
 });

 /** Dropdown border-bottom on hover **/
 $(".sub-menu.dropdown-menu").hover(
  function() { // Mouse Over
   $(this).prev("a").addClass("border-bottom-blue");
  },
  function() { // Mouse Out
    $(this).prev("a").removeClass("border-bottom-blue");
  }
);

 /** Dropdown menu replace **/
 $(".dropdown-menu li a").click(function(){
   var selText = $(this).text();
      $(this).parents('div.search-menu-group').find('.dropdown-toggle').html(selText+' <span class="search-menu-item"></span>');
 });

 $(".dropdown-menu li a").click(function(){
   var selText = $(this).text();
      $(this).parents('div.profile-plan-menu').find('.dropdown-toggle').html(selText+' <span class="profile-plan-menu-item"></span>');
 });

 /** card overflow **/
 $("p.card-text").each(function() {
   var text = jQuery(this).text();
    if (text.length > 200) {
      jQuery(this).text(text.substr(0, text.lastIndexOf(' ', 200)) + '...');
    }
  });

 /** Calendar Popover on hover **/
 $(function(){
    // Enables popover
    $("[data-toggle=popover]").popover();
});

 /** Close the main Banner at the top after you scroll down the page **/
  function checkOffset() {
     if ($(".top-header-bar").offset().top < 50) {
       $("#mainBanner").slideDown(200);
       $("div.sub-menu").css('top', '9.6rem')
     }
     else if(!$(window).scrollTop()) {
       $("#mainBanner").show();
       $("div.sub-menu").css('top', '9.6rem')
     }
     else {
       $("#mainBanner").slideUp(200);
       $("div.sub-menu").css('top', '3.5rem')
     }
 }
     checkOffset();

   $(window).scroll(function() {
     checkOffset();
   });


});
