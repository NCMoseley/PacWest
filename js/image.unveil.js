(function ($) {


  $(document).ready(function () {

    var menuItemName = document.querySelector('.current-menu-item');

    if (menuItemName !== null && menuItemName.textContent.includes('Investors')) {
      var currentTemplate = 'Investors';
    } else if (menuItemName !== null && menuItemName.textContent.includes('Corporate Governance')) {
      currentTemplate = 'Team';
    } else if (menuItemName !== null) {
      currentTemplate = menuItemName.textContent;
    } else {
      currentTemplate = 'Home';
    }
    var hero = new Image();
    hero.src = '/pacwest/wp-content/themes/PacWest/assets/Stock_Photos/' + currentTemplate + '-optimized.jpg';


    $(hero).load(function () {
      $('.banner-section').css('background-image', 'linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(' + $(this).attr('src') + ')').fadeIn(2000);


    });

  });


})(window.jQuery);