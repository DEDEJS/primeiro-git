<?php 
include_once("valueLogin.php");

if(isset($_POST['email'])){$email_input = $_POST['email'];}else{$email_input = false;}
if(isset($_POST['senha'])){$senha_input = $_POST['senha'];}else{$senha_input = false;}
class error_login{
public function error_email($email_input){
   if(isset($_SESSION['errors_email'])){
       if($_SESSION['errors_email'] != false){
           echo $_SESSION['errors_email'];
       }else{
       	$_SESSION['errors_email'] = "";
       }
   }
}

public function error_senha($senha_input){
	  if(isset($_SESSION['errors_senha'])){
           if($_SESSION['errors_senha'] != false){
              echo $_SESSION['errors_senha'];
           }else{
           	$_SESSION['errors_senha'] = "";
           }
	  }

}
}
$erros_login = new error_login();

?>