jQuery( document ).ready(function($) {
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

        // $('.faq').animate({'backgroundColor': '#fff'}, 200);
        // $('.faq-answer').animate({'color' : '#333'}, 200);
        // $('.faq-header h3').animate({'color': '#333'}, 200);
      } else {
        $('.faq').css('backgroundColor', '#0a2d5d');
        $('.faq-answer').css('color', '#fff');
        $('.faq-header h3').css('color', '#fff');

        // $('.faq').animate({'backgroundColor': '#0a2d5d'}, 200);
        // $('.faq-answer').animate({'color': '#fff'}, 200);
        // $('.faq-header h3').animate({'color': '#fff'}, 200);
      }
    })
  });






  var expanded = false;

  $('.news-item-expand-link').click(function(){
    expanded = !expanded
    
    if (expanded === true) {
      $(this).prev().animate({'height':'300px'}, 200);
    } else {
      $(this).prev().animate({'height':'100px'}, 200);
    }
  })
});