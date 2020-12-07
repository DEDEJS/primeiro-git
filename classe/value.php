<?php 
if(isset($_POST['email_cadastro'])){$email_cadastro = $_POST['email_cadastro'];}else{$email_cadastro = false;}
if(isset($_POST['nome_cadastro'])){$nome_cadastro = $_POST['nome_cadastro'];}else{$nome_cadastro = false;}
if(isset($_POST['telefone_cadastro'])){$telefone_cadastro = $_POST['telefone_cadastro'];}else{$telefone_cadastro = false;}
if(isset($_SESSION['session_email'])){$session_email = $_SESSION['session_email'];}else{$session_email = false;}
if(isset($_SESSION['session_nome'])){$session_nome = $_SESSION['session_nome'];}else{$session_nome = false;}
if(isset($_SESSION['session_telefone'])){$session_telefone = $_SESSION['session_telefone'];}else{$session_telefone = false;}
class value{
private $session_email;
private $session_nome;
private $session_telefone;
function ValueEmail($session_email){
      if (isset($_SESSION['session_email'])) {
      $session_email = $this->session_email = $_SESSION['session_email'];
      echo $session_email;
      }else{
      	$_SESSION['session_email'] = $this->session_email ="";
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