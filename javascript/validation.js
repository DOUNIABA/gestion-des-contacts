var nom=document.getElementById('nom');
var phone=document.getElementById('phone').value;
var email=document.getElementById('email').value;
var Address=document.getElementById('adress').value;

function validation(){          
  
    if (nom.value=='') {
        nom.style.borderColor='red';
        nom.style.borderWidth='3px'
        img.innerHTML='<img src="images/1200px-OOjs_UI_icon_error-destructive.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
        nomid.innerHTML='fill the username Please!'
        return false
        
    }else if (nom.value!=="") {

        nom.style.borderColor='green';
        nom.style.borderWidth='3px'
        img.innerHTML='<img src="images/checked.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
        nomid.innerHTML="";
        
    }

    if ((nom.length <2) ){
        nom.style.borderColor='red';
        nom.style.borderWidth='3px'
        img.innerHTML='<img src="images/1200px-OOjs_UI_icon_error-destructive.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
        nomid.innerHTML=' the username Please!'
        return false
       }

       if (email == "") {
        email.style.borderColor='red';
        email.style.borderWidth='3px'
        email.innerHTML='<img src="images/1200px-OOjs_UI_icon_error-destructive.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
        mailid.innerHTML='fill the username Please!'
        return false
    }else if (email!=="") {
        email.style.borderColor='green';
        email.style.borderWidth='3px'
        email.innerHTML='<img src="images/checked.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
        mailid.innerHTML=""
        
    }

    else if (email.indexOf('@') <= 0) {
        email.style.borderColor='green';
        email.style.borderWidth='3px'
        email.innerHTML='<img src="images/1200px-OOjs_UI_icon_error-destructive.svg.png.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
        mailid.innerHTML=" **  @ Invalid Position!!"
        return false;
      }   

       if (Address.length>255) {
        email.style.borderColor='red';
        email.style.borderWidth='3px'
        email.innerHTML='<img src="images/1200px-OOjs_UI_icon_error-destructive.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
        mailid.innerHTML='Address should contain at most 255 characters!!**'
        return false

       }
    }