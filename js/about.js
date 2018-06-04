jQuery(document).ready(function($) {
  $('.team-open-close').on('click', function() {
    $(this)
      .parent()
      .parent()
      .parent()
      .toggleClass('show-full-container');
    $(this)
      .parent()
      .parent()
      .toggleClass('show-full-container');
    $(this)
      .children()
      .toggleClass('hidden-plus-minus');
  });
});
