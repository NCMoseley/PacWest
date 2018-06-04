jQuery(document).ready(function ($) {
  if ($('body').hasClass('logged-in')) {
    var headerHeight = $('div.nav-wrapper').height() + 60;
  } else {
    headerHeight = $('div.nav-wrapper').height() + 82;
  }

  if (
    $('body').hasClass('page-template-about') ||
    $('body').hasClass('page-template-corporate-governance')
  ) {
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

  function offsetAnchor() {
    if (location.hash.length !== 0) {
      window.scrollTo(window.scrollX, window.scrollY - 140);
    }
  }
  $(window).on("hashchange", offsetAnchor);

  window.setTimeout(offsetAnchor, 1);
});