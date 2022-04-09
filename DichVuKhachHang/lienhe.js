// var phone=document.getElementById("phone").value;
// var regexPhone=/^0[0-9]{9}$/;
// btn.onclick=function(){
//     if(regexPhone.test(phone)){
//         alert("SDT hợp lệ")
//     }
// }












// function send(){
//     var arr =document.getElementsByTagName('input');
//     var phone =arr[2].value;
//     if(isNaN(phone)){
//         alert("SĐT phải là số");
//     }
// }






// var phone=document.querySelector('#phonenumber')

// function checkPhone(input){
//      var phone=document.getElementById("phone").value;
//      var regaxEmail=/  ^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
//      phone.value = phone.value.trim();
//      let isPhoneError=!regaxEmail.test(phone.value)
//      if(regaxEmail.test(phone.value)){
//          alert("SĐT hợp lệ");
//      }else{
//          alert("Số điện thoại không hợp lệ");
//      }
//      return isPhoneError;
// }

// form.addEventListener('sumbit',function(e){
//     e.prevenDefault();
//     let isPhoneError =checkPhone(phone)
// })


var hoten=document.querySelector('#name')
var email=document.querySelector('#gmail')
var phone=document.querySelector('#phone')
var noidungyeucau=document.querySelector('#noidung')
var form =document.querySelector('form')

function showError(input){
    let perent=input.perentElement;
    let small
}

function checkError(listInput){
    let isEmtyError=false;
  listInput.forEach(input => {
      input.value=input.value.trim()
      if(!input.value){
          isEmtyError=true;
          alert(input,'Không đc để trống');
      }
  });
}

form.addEventListener('submit',function(e){
   checkError([hoten,email,phone,noidungyeucau])
})

// function CheckPhone(){
//     var phone=document.getElementById("phone").value;
//     var regexPhone = /^0[0-9]{8}$/;
//     if(isNaN(phone)){
//         alert("SĐT phải là số");
//     }
//     else if(regexPhone.test(phone)){
//         alert("SĐT hợp lệ");
//     }else{
//         alert("SĐT không hợp lệ");
//     }
    
// }
