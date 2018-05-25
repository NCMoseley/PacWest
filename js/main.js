jQuery( document ).ready(function($) {

  // FAQ DROPDOWN

  $(function () {
    var faqExpanded = false;

		$('.faq-answer').css('display', 'none');
    $('.open-close-icon').click(function () {
      faqExpanded = !faqExpanded;

      $(this).parent().next().slideToggle('swing');
      $(this).children().last().toggleClass('visible');
      $(this).children().last().toggleClass('invisible');
      
      if (faqExpanded) {
        $(this).parent().parent().css('backgroundColor', '#fff');
        $(this).parent().next().css('color', '#333');
        $(this).prev().css('color', '#333');
        $(this).parent().parent().prev().css('height', '5rem');
        $(this).parent().parent().next().css('height', '5rem');

        // $('.faq').animate({'backgroundColor': '#fff'}, 200);
        // $('.faq-answer').animate({'color' : '#333'}, 200);
        // $('.faq-header h3').animate({'color': '#333'}, 200);
      } else {
        $('.faq').css('backgroundColor', '#0a2d5d');
        $('.faq-answer').css('color', '#fff');
        $('.faq-header h3').css('color', '#fff');
        $(this).parent().parent().prev().css('height', 'auto');
        $(this).parent().parent().next().css('height', 'auto');


        // $('.faq').animate({'backgroundColor': '#0a2d5d'}, 200);
        // $('.faq-answer').animate({'color': '#fff'}, 200);
        // $('.faq-header h3').animate({'color': '#fff'}, 200);
      }
    })
  });


  // NEWS ITEM EXPANSION

  var expanded = false;

  $('.news-item-expand-link').click(function(){
    expanded = !expanded
    
    if (expanded === true) {
      $(this).prev().animate({'max-height':'1000px'}, 200);
      $(this).children().css('transform', 'rotate(180deg)');
    } else {
      $(this).prev().animate({'max-height':'38px'}, 200);
      $(this).children().css('transform', 'rotate(0)');
    }
  })

  $("#toggle").change(function() {
      $('.menu-close').children().toggleClass('expanded');
  });





    // INVESTOR LOGIN SHOW / HIDE

    $('.login-prompt').on('click', function(e){
      e.preventDefault();
      $(this).parent().css('justifyContent', 'center');
      $(this).css('display', 'none');
      $('.investor-header-wrapper').css("display", "flex");
    })

});