<script>
$(document).ready(function() {
  // HERE COME THE FRONT-END HELPER GNOMES (:|>*
  // add/remove an Ed Standards button tag from the checkboxes lists
  $('input.form-checkbox').change('click', function() {
    var checkboxValue = $(this).val();
    var checkboxBtn = '<button class="btn-tag" type="button" value="' + checkboxValue + '" id="' + checkboxValue + '-button">' + checkboxValue + '</button>';
      if(this.checked) {
        $('#education-standards-button-filters').append(checkboxBtn);
      } else {
        $('#education-standards-button-filters button.btn-tag').remove('#' + checkboxValue + '-button');
      }
      // remove the Ed Standard Button/tags and unchecks item
      $('#' + checkboxValue + '-button').click(function() {
        $(this).remove();
        $('#' + checkboxValue).prop('checked', false);
      });
  });
  // toggle/expanded collapse submenus
  $('#education-standard-filters li').click(function() {
    if($(this).hasClass("selected")) {
      $(this).removeClass("selected")
    } else {
      $(this).addClass("selected")
    }
  });
});
</script>

<ul id="education-standard-filters">
  <li class="filter-header">SEARCH ALIGNED EDUCATIONAL STANDARDS BELOW:</li>
  <li class="menu-item primary-filter" data-toggle="collapse" data-target="#common-core-learning-standards" aria-expanded="false" aria-controls="common-core-learning-standards">Common Core Learning Standards</li>
  <li class="primary-filter-submenu collapse" id="common-core-learning-standards">
    <ol class="secondary-filter">
      <li class="menu-item" data-toggle="collapse" data-target="#ela-and-literacy" aria-expanded="false" aria-controls="ela-and-literacy">ELA & Literacy</li>
      <li class="secondary-filter-submenu collapse" id="ela-and-literacy">
        <ol class="tertiary-filter">
          <li class="menu-item" data-toggle="collapse" data-target="#reading" aria-expanded="false" aria-controls="reading">Reading</li>
          <li class="tertiary-filter-submenu collapse" id="reading">
            <script>
            // LOOP through ARRAY for radio btn
            var readingArray = [ "r1", "r2", "r3", "r4", "r5" ];
            $.each(readingArray, function(i, val) {
              var radioOptions = '';
              radioOptions += '<div class="select-filter"><label for="' + val + '"><input type="checkbox" class="form-checkbox" id="' + val + '" value="' + val + '"> ' + val + '</label></div>';
              $('#reading, #reading').append(radioOptions);
            });
            </script>
          </li>
          <li class="menu-item" data-toggle="collapse" data-target="#foundational-skills" aria-expanded="false" aria-controls="foundational-skills">Foundational Skills</li>
          <li class="tertiary-filter-submenu collapse" id="foundational-skills">
            <script>
            // LOOP through ARRAY for radio btn
            var foundationalSkillsArray = [ "Fluency", "Phonics", "Printing" ];
            $.each(foundationalSkillsArray, function(i, val) {
              var radioOptions = '';
              radioOptions += '<div class="select-filter"><label for="' + val + '"><input type="checkbox" class="form-checkbox" id="' + val + '" value="' + val + '"> ' + val + '</label></div>';
              $('#foundational-skills, #foundational-skills').append(radioOptions);
            });
            </script>
          </li>
        </ol>
      </li>
      <li class="menu-item" data-toggle="collapse" data-target="#mathematics" aria-expanded="false" aria-controls="mathematics">Mathematics</li>
      <li class="secondary-filter-submenu collapse" id="mathematics">
        <ol class="tertiary-filter">
          <li class="tertiary-filter-submenu" id="mathematics-grade-menu">
            <script>
            // LOOP through ARRAY for radio btn
              var mathArray = [ "K-6", "7-12" ];

              $.each(mathArray, function(i, val) {
                var radioOptions = '';
                radioOptions += '<div class="select-filter"><label for="' + val + '"><input type="checkbox" class="form-checkbox" id="' + val + '" value="' + val + '"> ' + val + '</label></div>';
                  $('#mathematics-grade-menu, #mathematics-grade-menu').append(radioOptions);
              });
          </script>
          </li>
        </ol>
      </li>
    </ol>
  </li>
  <li class="menu-item primary-filter" data-toggle="collapse" data-target="#danielson-framework-for-teaching" aria-expanded="false" aria-controls="danielson-framework-for-teaching">Danielson Framework for Teaching</li>

  <li class="secondary-filter-submenu collapse" id="danielson-framework-for-teaching">
    <ol class="tertiary-filter">
      <li class="tertiary-filter-submenu" id="danielson-framework-for-teaching-menu">
        <script>
        // LOOP through ARRAY for radio btn
          var mathArray = [ "1a", "1b", "1c", "1d", "1e", "1f" ];

          $.each(mathArray, function(i, val) {
            var radioOptions = '';
            radioOptions += '<div class="select-filter"><label for="' + val + '"><input type="checkbox" class="form-checkbox" id="' + val + '" value="' + val + '"> ' + val + '</label></div>';
              $('#danielson-framework-for-teaching-menu, #danielson-framework-for-teaching-menu').append(radioOptions);
          });
      </script>
      </li>
    </ol>
  </li>

</ul>
