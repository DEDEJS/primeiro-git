<?php 
if(isset($_POST['email_cadastro'])){$email_cadastro = $_POST['email_cadastro'];}else{$email_cadastro = false;}
if(isset($_POST['senha_cadastro'])){$senha_cadastro = $_POST['senha_cadastro'];}else{$senha_cadastro = false;}
if(isset($_POST['senha_cadastro_repete'])){$senha_cadastro_repete = $_POST['senha_cadastro_repete'];}else{$senha_cadastro_repete = false;}
if(isset($_POST['nome_cadastro'])){$nome_cadastro = $_POST['nome_cadastro'];}else{$nome_cadastro = false;}
if(isset($_POST['telefone_cadastro'])){$telefone_cadastro = $_POST['telefone_cadastro'];}else{$telefone_cadastro = false;}

if(isset($_SESSION['session_email'])){$session_email = $_SESSION['session_email'];}else{$session_email = false;}
if(isset($_SESSION['session_senha'])){$session_senha = $_SESSION['session_senha'];}else{$session_senha = false;}
if(isset($_SESSION['session_senha_repete'])){$session_senha_repete = $_SESSION['session_senha_repete'];}else{$session_senha_repete = false;}
if(isset($_SESSION['session_nome'])){$session_nome = $_SESSION['session_nome'];}else{$session_nome = false;}
if(isset($_SESSION['session_telefone'])){$session_telefone = $_SESSION['session_telefone'];}else{$session_telefone = false;}
class value{
private $session_email;
private $session_senha;
private $session_senha_repete;
private $session_nome;
private $session_telefone;

private $email_cadastro;
function ValueEmail($session_email,$email_cadastro){
      if (isset($_SESSION['session_email'])) {
       $email_cadastro = $this->email_cadastro = $email_cadastro; 
      $session_email = $this->session_email = $_SESSION['session_email'];
      if(strlen($email_cadastro)<=0){
          $_SESSION['session_email'] = $this->session_email = "";
      }else{
      echo $session_email;
    }
      }else{
      	$_SESSION['session_email'] = $this->session_email ="";
      }
    }
    function ValueSenha($session_senha){
       if(isset($_SESSION['session_senha'])){
        $session_senha = $this->session_senha = $_SESSION['session_senha'];
        echo $session_senha;
       }else{
        $_SESSION['session_senha'] = $this->session_senha = "";
       }
    }
    function ValueSenhaRepete($session_senha_repete){
       if(isset($_SESSION['session_senha_repete'])){
         $session_senha_repete = $this->session_senha_repete = $_SESSION['session_senha_repete'];
         echo $session_senha_repete;
       }else{
        $_SESSION['session_senha_repete'] = $this->session_senha_repete = "";
        
       }
    }
        function ValueNome($session_nome){
        if(isset($_SESSION['session_nome'])){
           $session_nome = $this->session_nome = $_SESSION['session_nome'];
           echo $session_nome;
        }else{
        	$_SESSION['session_nome'] = $this->session_nome ='';
        }
    }

    function ValueTelefone($session_telefone){
        if(isset($_SESSION['session_telefone'])){
           $session_telefone = $this->session_nome = $_SESSION['session_telefone'];
           echo $session_telefone;
        }else{
        	$_SESSION['session_telefone'] = $this->session_telefone = "";
        }
    }
}

$value = new value();
?>