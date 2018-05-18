jQuery(document).ready(function($) {
  $('.about-plus-icon').on('click', function() {
    $(this)
      .parent()
      .parent()
      .parent()
      .addClass('show-full-container');
  });

  $('.about-close').on('click', function() {
    $(this)
      .parent()
      .parent()
      .removeClass('show-full-container');
  });
});
