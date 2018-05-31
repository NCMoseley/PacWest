jQuery(document).ready(function ($) {
  var headerHeight = $('div.nav-wrapper').height() + 82;

  if ($('body').hasClass('page-template-about') || $('body').hasClass('page-template-corporate-governance')) {
    $('a[href*=#]').bind('click', function (e) {
      e.preventDefault();

      var target = $(this).attr('href');
      var scrollTo = $(target).offset().top - headerHeight;

      $('html, body').animate({
          scrollTop: scrollTo
        },
        1500
      );
    });
  }
});