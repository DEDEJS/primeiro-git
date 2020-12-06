<?php
/*cadastro de usuario error*/
if(isset($_POST['email_cadastro'])){$email_cadastro = $_POST['email_cadastro'];}else{$email_cadastro = false;}
if(isset($_POST['senha_cadastro'])){$senha_cadastro = $_POST['senha_cadastro'];}else{$senha_cadastro = false;}
if(isset($_POST['nome_cadastro'])){$nome_cadastro = $_POST['nome_cadastro'];}else{$nome_cadastro = false;}
if(isset($_POST['estado_cadastro'])){$estado_cadastro = $_POST['estado_cadastro'];}else{$estado_cadastro = false;}
if(isset($_POST['cidade_cadastro'])){$cidade_cadastro = $_POST['cidade_cadastro'];}else{$cidade_cadastro = false;}
if(isset($_POST['telefone_cadastro'])){$telefone_cadastro = $_POST['telefone_cadastro'];}else{$telefone_cadastro = false;}

/*mensagem de erro*/
class erros{

	public function erro_email_cadastro($email_cadastro){
        
        if(isset($_SESSION['email_cadastro'])){
           if($_SESSION['email_cadastro'] != false){
              echo $_SESSION['email_cadastro'];
           }else{
          echo  $_SESSION['email_cadastro'] = "";
           }
        }
        return true;
    }
     public function erro_senha_cadastro($senha_cadastro){
        if(isset($_SESSION['senha_cadastro'])){
           if($_SESSION['senha_cadastro'] != false ){
                echo $_SESSION['senha_cadastro'];
           }else{
              echo $_SESSION['senha_cadastro'] = "";
           }
        }
    } 

        public function erro_nome_cadastro($nome_cadastro){
        if(isset($_SESSION['nome_cadastro'])){
           if($_SESSION['nome_cadastro']){
              echo $_SESSION['nome_cadastro'];
           }else{
            echo $_SESSION['nome_cadastro'] = "";
           }
        }
    }
      public function erro_estado_cadastro($estado_cadastro){
        if(isset($_SESSION['estado_cadastro'])){
            if($_SESSION['estado_cadastro']){
                 echo $_SESSION['estado_cadastro'];
            }else{
                echo $_SESSION['estado_cadastro'] = "";
            }
        } 
    }
    public function erro_estado_cidade($cidade_cadastro){
         if(isset($_SESSION['cidade_cadastro'])){
           if($_SESSION['cidade_cadastro']){
             echo $_SESSION['cidade_cadastro'];
           }else{
             echo $_SESSION['cidade_cadastro'] = "";
           }
         }
    }
     public function erro_telefone_cadastro($telefone_cadastro){
      if(isset($_SESSION['telefone_cadastro'])){
          if($_SESSION['telefone_cadastro']){
              echo $_SESSION['telefone_cadastro'];
          }else{
            echo $_SESSION['telefone_cadastro'] = "";
          }
      }
    } 
}
$erros = new erros();
?>