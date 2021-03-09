 function Email(){
      var email =document.getElementById("email").value;
      var email_error = document.getElementById("error_email");
      //alert(email);
      if(email.length == null){
          email_error.innerHTML = "Campo Email vázio.";
          return false;
      }else if(email.length >=29){
          email_error.innerHTML = "Campo Email muito grandse";
      }else if(email.search("@")==-1){
          email_error.innerHTML = "nao tem @";
          return false;
      }else if(email.search(" ")==-1){
          email_error.innerHTML = " nao tem espaço";
      }else{
          email_error.innerHTML = email.length;
      }
    }