$(function(){
    $('#eye').click(function(){
        $(this).toggleClass('open');/* khi click thì biến clas của id=eye  thành id có class là open*/
      $(this).children('i').toggleClass(' fa-eye-slash fa-eye');/* goi dến lớp i và thay đổi tên class */
      if($(this).hasClass('open')){
         $(this).prev().attr('type','text');
      }
      else
      $(this).prev().attr('type','password');

    });
    
});