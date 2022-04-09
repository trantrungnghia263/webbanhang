$(document).ready(function(){
   $("#account").click(function(){
   $("#content").slideToggle('slow');
   })
 $('.info').animate({width: '400px'}, "slow");
 /* làm jquery cho btn_next */
  $('#btn_next').click(function() {
    var slide_next=$('.active').next();
    console.log(slide_next.length);
   $('.active').addClass('hide_left');
   
    slide_next.addClass('active').addClass("show_right");
  })

 
    // $("#search_item").focus();
  
});
/* .animate({width:'toggle'},350); */