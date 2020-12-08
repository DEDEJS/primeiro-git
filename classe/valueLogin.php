<?php
if(isset($_POST['email'])){$email_input = $_POST['email'];}else{$email_input = false;}
if(isset($_POST['senha'])){$senha_input = $_POST['senha'];}else{$senha_input = false;}

if(isset($_SESSION['session_email_login'])){$session_email_login = $_SESSION['session_email_login'];}else{$session_email_login = false;}
if(isset($_SESSION['session_senha_login'])){$session_senha_login = $_SESSION['session_senha_login'];}else{$session_senha_login = false;}
class value_login{
	private $session_email_login;
	private $session_senha_login;
	function ValueEmail($session_email_login){
      if(isset($_SESSION['session_email_login'])){
      $session_email_login = $this->session_email_login = $_SESSION['session_email_login'];
      echo $session_email_login;
  }else{
  	$_SESSION['session_email_login'] = $this->session_email_login = "";
  }
}
function ValueSenha($session_senha_login){
	 if(isset($_SESSION['session_senha_login'])){
      $session_senha_login = $this->session_senha_login = $_SESSION['session_senha_login'];
      echo $session_senha_login;
	 }else{
	 	$_SESSION['session_senha_login'] = $this->session_senha_login = "";
	 }
}
}
$value_login = new value_login();
//$value_login ->ValueEmail($session_email_login);

/*

*/
?>