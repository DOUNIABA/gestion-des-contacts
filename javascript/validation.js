

function validationContact(){
    var name = document.getElementById('nom');
    var email = document.getElementById('email');
    var phone = document.getElementById('phone');
    var adresse = document.getElementById('adress');
    const mailformat = /^[a-zA-Z-\d]+@[a-zA-Z-\d]+(.[a-zA-Z-\d]+)+$/
    var regx=/^+{0,1}((212)|(0[6589]))\d{8}$/
    var regname= /^(\w{3,} ?)+$/
    if ( name.value == ""){

     document.getElementById('nomid').innerHTML=" ** Please fill the UserName field";
     document.getElementById('nomid').style.color="red";
     return false;
    } else if ((name.value.length <=2) || (name.value.length >= 20) ){
     document.getElementById('nomid').innerHTML =" ** user name should be between 2 to 20 characters ";
     document.getElementById('nomid').style.color="red";
     
     return false;
    }else if (name.match(regname)) {
      document.getElementById('phoneid').innerHTML =" ** Not a valid Username"
      document.getElementById('phoneid').style.color="red";
      return false;
    }else{
     document.getElementById('nomid').innerHTML=" ** Validé";
     document.getElementById('nomid').style.color="#0dca4c";
    }
   
    if (phone.value == "") {
      document.getElementById('phonid').innerHTML=" ** Please fill the phone field";
      document.getElementById('phonid').style.color="red";
      return false;
    }else if (!phone.match(regx)) {
      document.getElementById('phoneid').innerHTML =" ** Not a valid Phone Number"
      document.getElementById('phoneid').style.color="red";
      return false;
    }
     else{
      document.getElementById('phonid').innerHTML=" ** Validé";
      document.getElementById('phonid').style.color="#0dca4c";
    }

    if (email.value=="") {
     document.getElementById('mailid').innerHTML = " ** Enter Email ID"
     document.getElementById('mailid').style.color="red";
     return false;
    
   }else if (!email.value.match(mailformat)) {
     document.getElementById('mailid').innerHTML = " **Format  Invalid"
       document.getElementById('mailid').style.color="red";
     return false;
   }else{
     document.getElementById('emailid').innerHTML=" ** Validé";
     document.getElementById('emailid').style.color="#0dca4c";
   }
   
   if (adresse.value=="") {
    document.getElementById('addid').innerHTML = " **Please fill Address"
    document.getElementById('addid').style.color="red";
  return false;
}
   }
