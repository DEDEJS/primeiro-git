<?php
session_start();
ini_set('default_charset','UTF-8');
//include_once("classe/");
if(isset($_POST['email'])){$email_input = $_POST['email'];}else{$email_input = false;}
if(isset($_POST['senha'])){$senha_input = $_POST['senha'];}else{$senha_input = false;}
$errors_email = array("Campo Email Vázio.","Campo Email Muito Grande.","Campo Email Inválido.");
$errors_senha = array("Campo Senha Vázio.","Campo Senha Muito Grande.");
class FormLogin{
 private $email;
 private $email_value;

 private $senha;
 private $senha_value;

  public function ValidaLogin($email_input,$senha_input,$errors_email,$errors_senha){
  	 $email = $this->email = $email_input;
  	 $senha = $this->senha = $senha_input;
  	 if(!isset($email)){

  	 }else if(!isset($senha)){

  	 }else{
  	 	/*validação dos compos input*/
  	 	if(strlen($email)<=0){
  	 		$_SESSION['errors_email'] = $errors_email[0];
  	 		$_SESSION['valida_email'] = false;
  	 	}else if(strlen($email)>=30){
  	 		$_SESSION['errors_email'] = $errors_email[1];
  	 		$_SESSION['valida_email'] = false;
  	 	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  	 		$_SESSION['errors_email'] = $errors_email[2];
  	 		$_SESSION['valida_email'] = false;
  	 	} else{
            $_SESSION['errors_email'] = "";
            $_SESSION['valida_email'] = true;
  	 	}

  	 	 if(strlen($senha)<=0){
           $_SESSION['errors_senha'] = $errors_senha[0];
           $_SESSION['valida_senha'] = false;
  	 	}else if(strlen($senha)>=30){
  	 		$_SESSION['errors_senha'] = $errors_senha[1];
  	 		$_SESSION['valida_senha'] = false;
  	 	}else{
  	 		$_SESSION['errors_senha'] = "";
         $_SESSION['valida_senha'] = true;
  	 	}
  	 }
  }
  function ValueEmail($email_input){
      if(isset($_POST['email'])){
         $email_value = $this->email_value = $email_input;
         if($email_value != false){
             echo $email_value;
         }else{
         	$email_value = "";
         }
      }
  }
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
$login = new FormLogin();
$login ->ValidaLogin($email_input,$senha_input,$errors_email,$errors_senha);
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index.css"><!--responsivo-->
  <link rel="stylesheet" type="text/css" href="css/indexx.css">
</head>
<body>
 <div class="logo">
 	 <h3 class="logoo-login">Login</h3>
 </div>
 <form action="#" method="POST" name="form" class="form" >
 	<div class="email_text">
 		<p>Email</p>
 	</div>
 	<div class="error_email">
 		<!-- erro -->
 		<?php
          $login ->error_email($email_input);
 		?>
 	</div>
 	<div class="input_email">
 		<input type="text" name="email" placeholder="Seu Email" class="email_input" value="<?php $login ->ValueEmail($email_input); ?>">
 	</div>
 	<div class="senha_text">
       <p>Senha</p>
 	</div>
 	<div class="error_senha"> 
 		<!-- error -->
 		<?php  
        $login ->error_senha($senha_input);
 		?>
 	</div>
 	<div class="input_senha">
 		<input type="password" name="senha" placeholder="Senha" class="senha_input" >
 	</div>
 	<div class="submit">
 		<input type="submit" name="submit" class="submitt" value="Logar">
 	</div>
  <div class="cadastrar">
    <p>Não Tem Cadastro? <a href="cadastro.php">Cadastrar</a></p>
  </div>
 </form>
</body>
</html>