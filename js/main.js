jQuery(document).ready(function ($) {
  // FAQ DROPDOWN

  $(function () {
    var faqExpanded = false;

    $('.faq-answer').css('display', 'none');
    $('.open-close-icon').click(function () {
      faqExpanded = !faqExpanded;

      $(this)
        .parent()
        .next()
        .slideToggle('swing');
      $(this)
        .children()
        .last()
        .toggleClass('visible');
      $(this)
        .children()
        .last()
        .toggleClass('invisible');

      if (faqExpanded) {
        $(this)
          .parent()
          .parent()
          .css('backgroundColor', '#fff');
        $(this)
          .parent()
          .next()
          .css('color', '#333');
        $(this)
          .prev()
          .css('color', '#333');
        $(this)
          .parent()
          .parent()
          .prev()
          .css('height', '5rem');
        $(this)
          .parent()
          .parent()
          .next()
          .css('height', '5rem');

        // $('.faq').animate({'backgroundColor': '#fff'}, 200);
        // $('.faq-answer').animate({'color' : '#333'}, 200);
        // $('.faq-header h3').animate({'color': '#333'}, 200);
      } else {
        $('.faq').css('backgroundColor', '#0a2d5d');
        $('.faq-answer').css('color', '#fff');
        $('.faq-header h3').css('color', '#fff');
        $(this)
          .parent()
          .parent()
          .prev()
          .css('height', 'auto');
        $(this)
          .parent()
          .parent()
          .next()
          .css('height', 'auto');

        // $('.faq').animate({'backgroundColor': '#0a2d5d'}, 200);
        // $('.faq-answer').animate({'color': '#fff'}, 200);
        // $('.faq-header h3').animate({'color': '#fff'}, 200);
      }
    });
  });

  // NEWS ITEM EXPANSION

  var expanded = false;

  $('.news-item-expand-link').click(function () {
    expanded = !expanded;

    if (expanded === true) {
      $(this)
        .prev()
        .animate({
            'max-height': '1000px'
          },
          200
        );
      $(this)
        .children()
        .css('transform', 'rotate(180deg)');
    } else {
      $(this)
        .prev()
        .animate({
            'max-height': '38px'
          },
          200
        );
      $(this)
        .children()
        .css('transform', 'rotate(0)');
    }
  });

  // INVESTOR LOGIN SHOW / HIDE

  $('.login-prompt').on('click', function (e) {
    e.preventDefault();
    $(this)
      .parent()
      .css('justifyContent', 'center');
    $(this).css('display', 'none');
    $('.investor-header-wrapper').css('display', 'flex');
  });

  // NAV MENU VISIBLITY TOGGLE
  $('#toggle').change(function () {
    $('.menu-close')
      .children()
      .toggleClass('expanded');
    $('.hamburger--slider').toggleClass('is-active');
  });

  // Parallax for Banners

  // $(window).scroll(function () {
  //   parallax();
  // });

  // function parallax() {
  //   var para = $(window).scrollTop();
  //   $('.parallax').css(
  //     'background-position',
  //     'center ' + 'center ' + ',' + 'center ' + (para * -1.2 - 50) + 'px'
  //   );
  //   $('.parallax-low').css(
  //     'background-position',
  //     'center ' + 'center ' + ',' + 'center ' + para * -0.9 + 'px'
  //   );
  // }

  // parallaxToggle();
  // $(window).resize(function(){
  //   parallaxToggle();
  // })

  // function parallaxToggle() {
  //   if ($(window).width() < 750) {
  //     $('.banner-section').removeClass('parallax parallax-low');
  //     $('.banner-section').css('background-attachment', 'scroll');
  //   } else {
  //     $('.banner-section').addClass('parallax parallax-low');
  //     $('.banner-section').css('background-attachment', 'fixed');
  //   }
  // }

  // DISABLE INVESTOR LINK FOR MOBILE
  $('.menu-item-163').on('click', function () {
    $(this)
      .children()
      .last()
      .slideToggle();
    $(this)
      .children()
      .last()
      .css('display', 'flex');
  });

  // Investor Pop up modal

  $('.investor-login-desc').on('click', function () {
    $('.investor-overlay').removeClass('hidden');
    $('.portal-pop-up').removeClass('hidden');
    $('.investor-overlay').removeClass('mobile-remove');
    $('.portal-pop-up').removeClass('mobile-remove');
  });

  $('.investor-overlay').on('click', function () {
    $(this).addClass('hidden');
    $('.portal-pop-up').addClass('hidden');
    $(this).addClass('mobile-remove');
    $('.portal-pop-up').addClass('mobile-remove');
  });
  $('.nav-wrapper').on('click', function () {
    $('.investor-overlay').addClass('hidden');
    $('.portal-pop-up').addClass('hidden');
    $('.investor-overlay').addClass('mobile-remove');
    $('.portal-pop-up').addClass('mobile-remove');
  });
  $('.pop-up-close').on('click', function () {
    $('.investor-overlay').addClass('hidden');
    $('.portal-pop-up').addClass('hidden');
    $('.investor-overlay').addClass('mobile-remove');
    $('.portal-pop-up').addClass('mobile-remove');
  });

  setTimeout(function () {
    $('.portal-pop-up').css('opacity', '1');
    $('.portal-pop-up').css('max-height', '100%');
    $('.investor-overlay').css('max-height', '100%');
    $('.investor-overlay').css('opacity', '0.6');
  }, 1000);

  // LOGIN PADDING FIX

  $('.logged-in .site-header').css('top', '32px');



  // ADD MENU ITEM IN MOBILE

  function addMenuItem() {
    var link = '';
    if ($('body').hasClass('logged-in')) {
      link = '/investor-portal';
    } else {
      link = '/investors'
    }

    $('.menu-item-163 .sub-menu').append(
      '<li class="investors-link"><a href="' +
      templateLocation.template_url + link +
      '">Investors</a></li>'
    );

    investorVisbility();
    $(window).resize(function () {
      investorVisbility();
    });
  }
  addMenuItem();

  function investorVisbility() {
    if ($(window).width() < 750) {
      $('.investors-link').css('display', 'block');
    } else {
      $('.investors-link').css('display', 'none');
    }
  }


  function investorRedirect() {
    var url = templateLocation.template_url + '/investor-portal';
    if ($('body').hasClass('logged-in')) {
      $('.menu-item-163 > a').attr('href', url);
      $('.sub-footer-investor-link').attr('href', url);
    }
  }
  investorRedirect();


});