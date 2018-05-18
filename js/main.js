jQuery( document ).ready(function($) {
  var expanded = false;

  $('.news-item-expand-link').click(function(){
    expanded = !expanded
    
    if (expanded === true) {
      // postBody.style.height = 300;
      $(this).prev().animate({'height':'300px'}, 200);
    } else {
      // postBody.style.height = 100;
      $(this).prev().animate({'height':'100px'}, 200);
    }
  })
});