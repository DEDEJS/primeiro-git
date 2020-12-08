<?php
include_once("error1.php");
if(isset($_POST['email'])){$email_input = $_POST['email'];}else{$email_input = false;}
if(isset($_POST['senha'])){$senha_input = $_POST['senha'];}else{$senha_input = false;}
$errors_email = array("Campo Email Vázio.","Campo Email Muito Grande.","Campo Email Inválido.");
$errors_senha = array("Campo Senha Vázio.","Campo Senha Muito Grande.");
class formLogin{
private $email;
 private $email_value;
 private $session_input_email_login;

 private $senha;
 private $senha_value;
 private $session_input_senha_login;

  public function ValidaLogin($email_input,$senha_input,$errors_email,$errors_senha){
  	 $email = $this->email = $email_input;
  	 $senha = $this->senha = $senha_input;
  	 if(!isset($email)){

  	 }else if(!isset($senha)){

  	 }else{
      $_SESSION['session_email_login'] = $this->session_input_email_login = "";
  	 	/*validação dos compos input*/
  	 	if(strlen($email)<=0){
  	 		$_SESSION['errors_email'] = $errors_email[0];
  	 		$_SESSION['valida_email'] = false;
        $_SESSION['session_email_login'] = "";
        $email_login_valida = false;
  	 	}else if(strlen($email)>=30){
  	 		$_SESSION['errors_email'] = $errors_email[1];
  	 		$_SESSION['valida_email'] = false;
        $_SESSION['session_email_login'] = "";
        $email_login_valida = false;
  	 	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  	 		$_SESSION['errors_email'] = $errors_email[2];
  	 		$_SESSION['valida_email'] = false;
        $_SESSION['session_email_login'] = "";
        $email_login_valida = false;
  	 	} else{
            $_SESSION['errors_email'] = "";
            $_SESSION['valida_email'] = true;
            $_SESSION['session_email_login'] = $email;
            $email_login_valida = true;
  	 	}
       $_SESSION['session_senha_login'] = $this->session_input_senha_login = "";
  	 	 if(strlen($senha)<=0){
           $_SESSION['errors_senha'] = $errors_senha[0];
           $_SESSION['valida_senha'] = false;
           $_SESSION['session_senha_login'] = "";
           $senha_login_valida = false;
  	 	}else if(strlen($senha)>=30){
  	 		$_SESSION['errors_senha'] = $errors_senha[1];
  	 		$_SESSION['valida_senha'] = false;
        $_SESSION['session_senha_login'] = "";
        $senha_login_valida = false;
  	 	}else{
  	 		$_SESSION['errors_senha'] = "";
         $_SESSION['valida_senha'] = true;
         $_SESSION['session_senha_login'] = $senha;
         $senha_login_valida = true;
  	 	}
  	 }
  

     if($email_login_valida == false){

     }else if($senha_login_valida == false){

     }else{
      include_once("./banco.php");
          $senha = sha1($senha);
        //  $senha_login =  mysql_real_escape_string($senha);
          $sql_login = "SELECT email FROM git WHERE email = '$email'";
          $sql_query = mysqli_query($conn,$sql_login);
          $row = mysqli_num_rows($sql_query);
          if($row == 1){
            echo "valido";
          }else{
            echo "inválido";
          }
 }
}
}

$login = new FormLogin();

?>