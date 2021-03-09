<?php
include_once("error1.php");
if(isset($_POST['email'])){$email_input = $_POST['email'];}else{$email_input = false;}
if(isset($_POST['senha'])){$senha_input = $_POST['senha'];}else{$senha_input = false;}
if(isset($_POST['submit'])){$submit = $_POST['submit'];}else{$submit = false;}
$errors_email = array("Campo Email Vázio.","Campo Email Muito Grande.","Campo Email Inválido.","Campo Email Ou Senha Estão Errados.");
$errors_senha = array("Campo Senha Vázio.","Campo Senha Inválido.");
class formLogin{
private $email;
 private $email_value;
 private $session_input_email_login;
 private $session_limite;

 private $senha;
 private $senha_value;
 private $session_input_senha_login;

 private $submit;
  public function ValidaLogin($email_input,$senha_input,$submit,$errors_email,$errors_senha){
  	 htmlspecialchars($email = $this->email = $email_input);
  	 htmlspecialchars($senha = $this->senha = $senha_input);
     htmlspecialchars($submit = $this->submit = $submit);   
  	 if(!isset($email)){

  	 }else if(!isset($senha)){

  	 }else if(!isset($submit)){

     }else{

      $_SESSION['session_email_login'] = $this->session_input_email_login = "";
     
     	/*validação dos compos input*/
  	
      if(strlen($email)<=0){
  	 		//$_SESSION['errors_email'] = $errors_email[0];
  	 		$_SESSION['valida_email'] = false;
        //$_SESSION['session_email_login'] = "";
     
        $email_login_valida = false;

  	 	}else if(strlen($email)>=30){
  	 
          
        $_SESSION['errors_email'] = $errors_email[1];
  	 		$_SESSION['valida_email'] = false;
        $_SESSION['session_email_login'] = "";
        $email_login_valida = false;

        $_SESSION['cadastrado'] = false;
  	 	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  	 		$_SESSION['errors_email'] = $errors_email[2];
  	 		$_SESSION['valida_email'] = false;
        $_SESSION['session_email_login'] = "";
        $email_login_valida = false;

        $_SESSION['cadastrado'] = false;
  	 	} else{
            $_SESSION['errors_email'] = "";
            $_SESSION['valida_email'] = true;
            $_SESSION['session_email_login'] = $email;
            $email_login_valida = true;

            $_SESSION['cadastrado'] = false;
  	 	}
       $_SESSION['session_senha_login'] = $this->session_input_senha_login = "";
  	 	 if(strlen($senha)<=0){
           //$_SESSION['errors_senha'] = $errors_senha[0];
           $_SESSION['valida_senha'] = false;
          // $_SESSION['session_senha_login'] = "";
            $senha_login_valida = false;

  	 	}else if(strlen($senha)<8){
           $_SESSION['errors_senha'] = $errors_senha[1];
           $_SESSION['valida_senha'] = false;
           $_SESSION['session_senha_login'] = "";
           $senha_login_valida = false;

           $_SESSION['cadastrado'] = false;
      }else if(strlen($senha)>=30){
  	 		$_SESSION['errors_senha'] = $errors_senha[1];
  	 		$_SESSION['valida_senha'] = false;
        $_SESSION['session_senha_login'] = "";
        $senha_login_valida = false;

        $_SESSION['cadastrado'] = false;
  	 	}else if($email_login_valida == false){
       // $_SESSION['errors_senha'] = $errors_senha[1];
        $_SESSION['valida_senha'] = false;
        $_SESSION['session_senha_login'] = "";
        $senha_login_valida = false;

        $_SESSION['cadastrado'] = false;
      }else{
  	 		$_SESSION['errors_senha'] = "";
         $_SESSION['valida_senha'] = true;
         $_SESSION['session_senha_login'] = $senha;
         $senha_login_valida = true;

         $_SESSION['cadastrado'] = false;
  	 	}
  	 }
   
        


     if($email_login_valida == false){
     echo "";
     }else if($senha_login_valida == false){
       echo "";
     }else{
      include_once("./banco.php");
          $senha = sha1($senha);
        //  $senha_login =  mysql_real_escape_string($senha);
          $sql_login = sprintf("SELECT email,senha,nome,categoria,telefone FROM git WHERE email = '$email' and senha = '$senha' ");//WHERE email = '$email' and senha = '$senha'
         // $query = sprintf("SELECT identificador, nome, telefone FROM cadastro");
         $sql_query = mysqli_query($conn,$sql_login);
        $linha = mysqli_fetch_assoc($sql_query);

          $row = mysqli_num_rows($sql_query);
          if($row >0){
           do{
            /*sessions de logado*/
            $_SESSION['nome'] = $linha['nome'];
            $_SESSION['email'] = $linha['email'];
            $_SESSION['categoria'] = $linha['categoria'];
            $_SESSION['telefone'] = $linha['telefone'];
            $_SESSION['emailAndPass'] = true;
            header("location:logado/index.php");
            echo "c";
           }while($linha = mysqli_fetch_assoc($sql_query));
          }else{
            $_SESSION['errors_email'] = $errors_email[3];
        $_SESSION['valida_email'] = false;
       
         $_SESSION['session_senha_login'] = "";
        $email_login_valida = false;

        $_SESSION['cadastrado'] = false;

            session_destroy();
          }

         
        
 }
}
}

$login = new FormLogin();

?>