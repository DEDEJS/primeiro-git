<?php
ini_set('default_charset','UTF-8');
//header("location:../cadastro.php");
include_once("error.php");

/*arrays com os erros*/
$errors_email_cadastro = array("Email Vázio.","Email Muito Grande.","Email Inválido.","Esse Email Já Esta Cadastrado.");
$errors_senha_cadastro = array("Senha Vázio.","Senha Muito Grande.","Senha Tem Que Ter No Minimo 8 Caracteres.");
$errors_senha_repete = array("Repete Senha Vázio.","Repete Senha Inválido.");
$errors_nome_cadastro = array("Nome Vázio.","Nome Inválido.","Proibido Numeros E Caracteres Especiais(Mesmo O Nome Contendo).");
$errors_telefone_cadastro = array("Telefone Vázio.","Telefone Inválido, Somente Números.","Telefone Inválido.");
class FormCadastro{
    private $email_cadastro;
    private $email_cadastro_value;
    private $session_input_email;

    private $senha_cadastro;
    private $session_input_senha;
     
     private $senha_cadastro_repete;
     private $session_input_senha_repete;

    private $nome_cadastro;
    private $nome_cadastro_value;
    private $session_input_nome;
   

    private $telefone_cadastro;
    private $telefone_cadastro_value;
    private $session_input_telefone;
    function ValidaCadastro($email_cadastro,$senha_cadastro,$senha_cadastro_repete,$nome_cadastro,$telefone_cadastro,$errors_email_cadastro,$errors_senha_cadastro,$errors_senha_repete,$errors_nome_cadastro,$errors_telefone_cadastro){
        /*conteúdo dos campos inputs*/
     $email_cadastro = $this->email_cadastro = $email_cadastro;
     $senha_cadastro = $this->senha_cadastro = $senha_cadastro;
     $senha_cadastro_repete = $this->senha_cadastro_repete = $senha_cadastro_repete;
     $nome_cadastro = $this->nome_cadastro = $nome_cadastro;
    
     $telefone_cadastro = $this->telefone_cadastro = $telefone_cadastro;
    /*arrays com erros*/
     $errors_email_cadastro = $this->errors_email_cadastro = $errors_email_cadastro;
     $errors_senha_cadastro = $this->errors_senha_cadastro = $errors_senha_cadastro;
     $errors_nome_cadastro = $this->errors_nome_cadastro = $errors_nome_cadastro;

     /*inputs*/
     /*validacao dos campos*/
      if(!isset($email_cadastro)){
        $email_cadastro_valida = false;

      }else{
        $_SESSION['session_email'] = $this->session_input_email = "";
         if(strlen($email_cadastro)<=0){
             //$_SESSION['email_cadastro'] = $errors_email_cadastro[0];
             $email_cadastro = "";
             $email_cadastro_valida = false;
             $_SESSION['session_email'] = "";
         }else if(strlen($email_cadastro)>=31){
             $_SESSION['email_cadastro'] = $errors_email_cadastro[1];
             $email_cadastro_valida = false;
             $_SESSION['session_email'] = "";
         }else if(!filter_var($email_cadastro, FILTER_VALIDATE_EMAIL)){
             $_SESSION['email_cadastro'] = $errors_email_cadastro[2];
             $email_cadastro_valida = false;
             $_SESSION['session_email'] = "";
         }else{
            $_SESSION['email_cadastro'] = "";
            $email_cadastro_valida = true;
            $_SESSION['session_email'] = $email_cadastro;
         }
      }
      if(!isset($senha_cadastro)){
        $senha_cadastro_valida = false;
      }else{
        $_SESSION['session_senha'] = $this->session_input_senha = "";
         if(strlen($senha_cadastro)<=0){
            //$_SESSION['senha_cadastro'] = $errors_senha_cadastro[0];
            $senha_cadastro_valida = false;
            $_SESSION['session_senha'] = "";
          }else if(strlen($senha_cadastro)>=31){
           $_SESSION['senha_cadastro'] = $errors_senha_cadastro[1];
            $senha_cadastro_valida = false;
            $_SESSION['session_senha'] = "";
          }else if(strlen($senha_cadastro)<8){
            $_SESSION['senha_cadastro'] = $errors_senha_cadastro[2];
            $senha_cadastro_valida = false;
            $_SESSION['session_senha'] = "";
          }else{
            $_SESSION['senha_cadastro'] = "";
            $senha_cadastro_valida = true;
            $_SESSION['session_senha'] = $senha_cadastro;
          }
      } if(!isset($senha_cadastro_repete)){
             $senha_cadastro_repete_valida = false;
      }else{
        $_SESSION['session_senha_repete'] = $this->session_input_senha_repete = "";
        if(strlen($senha_cadastro_repete)<=0){
           // $_SESSION['senha_cadastro_repete'] = $errors_senha_repete[0];
            $senha_cadastro_repete_valida = false;
            $_SESSION['session_senha_repete'] = "";
        }else if(strlen($senha_cadastro_repete)>=31){
         $_SESSION['senha_cadastro_repete'] = $errors_senha_repete[1];
            $senha_cadastro_repete_valida = false;
            $_SESSION['session_senha_repete'] = "";
        }else if(strlen($senha_cadastro_repete)<8){
           $_SESSION['senha_cadastro_repete'] = $errors_senha_repete[1];
            $senha_cadastro_repete_valida = false;
            $_SESSION['session_senha_repete'] = "";
        }else if($senha_cadastro_repete != $senha_cadastro){
             $_SESSION['senha_cadastro_repete'] = $errors_senha_repete[1];
            $senha_cadastro_repete_valida = false;
            $_SESSION['session_senha_repete'] = "";
        }else{
          $_SESSION['senha_cadastro_repete'] = "";
          $senha_cadastro_repete_valida = true;
          $_SESSION['session_senha_repete'] = $senha_cadastro_repete;

        }
      }if(!isset($nome_cadastro)){
          $nome_cadastro_valida = false;
      }else{//a-zA
             $_SESSION['session_nome'] = $this->session_input_nome = "";
             if(strlen($nome_cadastro)<=0){
           //  $_SESSION['nome_cadastro'] = $errors_nome_cadastro[0];
            $nome_cadastro_valida = false;
            $_SESSION['session_nome'] = false;
           }else if(strlen($nome_cadastro)>=21){
             $_SESSION['nome_cadastro'] = $errors_nome_cadastro[1];
             $nome_cadastro_valida = false;
             $_SESSION['session_nome'] = false;
           }else if((preg_match('/\d+/', $nome_cadastro)>0)){
            $_SESSION['nome_cadastro'] = $errors_nome_cadastro[2];
            $nome_cadastro_valida = false;
            $_SESSION['session_nome'] = false;
           }else if(stristr($nome_cadastro, "!")){
            $_SESSION['nome_cadastro'] = $errors_nome_cadastro[2];
            $nome_cadastro_valida = false;
            $_SESSION['session_nome'] = false;
           }else if(!preg_match("/^[a-zA-Z0-9 ]+$/", $nome_cadastro)){
            $_SESSION['nome_cadastro'] = $errors_nome_cadastro[2];
            $nome_cadastro_valida = false;
            $_SESSION['session_nome'] = false;
           }else{
            $_SESSION['nome_cadastro'] = "";
           $nome_cadastro_valida = true;
           $_SESSION['session_nome'] = $nome_cadastro;
           }
      }

        if(!isset($telefone_cadastro)){
            $telefone_cadastro_valida = false;
        }else{
            $_SESSION['session_telefone'] = $this->session_input_telefone = "";
           if(strlen($telefone_cadastro)<=0){
          //  $_SESSION['telefone_cadastro'] = $errors_telefone_cadastro[0];
            $telefone_cadastro_valida = false;
            $_SESSION['session_telefone'] = false;
           }else if(!is_numeric($telefone_cadastro)){
            $_SESSION['telefone_cadastro'] = $errors_telefone_cadastro[1];
           $telefone_cadastro_valida = false;
           $_SESSION['session_telefone'] = false;
           }else if(strlen($telefone_cadastro)<12){
             $_SESSION['telefone_cadastro'] = $errors_telefone_cadastro[2];
           $telefone_cadastro_valida = false;
           //$_SESSION['session_telefone'] = false;
           $_SESSION['session_telefone'] = $telefone_cadastro;
           }else{
            $_SESSION['telefone_cadastro'] = "";
            $telefone_cadastro_valida = true;
            $_SESSION['session_telefone'] = $telefone_cadastro;
           }
        }

        if($email_cadastro_valida == false){
          // echo "1";
        }else if($senha_cadastro_valida == false){
          // echo "2";
        }else if($senha_cadastro_repete_valida == false){

        }else if($nome_cadastro_valida == false){
         //  echo "3";
        }else if($telefone_cadastro_valida == false){
          //echo '4';
        }else{
          include_once("./banco.php");
          $senha_cadastro = sha1($senha_cadastro);
          $sql_valida = sprintf("SELECT email FROM git WHERE email = '$email_cadastro'");//WHERE email = '$email' and senha = '$senha'
          $sql_query = mysqli_query($conn,$sql_valida);
           $linha = mysqli_fetch_assoc($sql_query);
            $row_cadastro = mysqli_num_rows($sql_query);

           if($row_cadastro >0){
              do{
                /*existe email*/
                $_SESSION['email_cadastro'] = $errors_email_cadastro[3];
              }while($linha = mysqli_fetch_assoc($sql_query));
           }else{
            /*nao existe o email*/
            $sql = "INSERT INTO `git` (`email`,`senha`,`nome`,`telefone`,`categoria`) VALUES ('$email_cadastro','$senha_cadastro','$nome_cadastro','$telefone_cadastro','--')";
             if(mysqli_query($conn,$sql)){
                    echo "cadastrou";
                    $_SESSION['cadastrado'] = true;
                    header("location:./login.php");
             }else{
              echo "erro";
             }
           }
         
        }

      }

    



    function valida_inputs(){
     
    }
}
$cadastro = new FormCadastro();
$cadastro ->ValidaCadastro($email_cadastro,$senha_cadastro,$senha_cadastro_repete,$nome_cadastro,$telefone_cadastro,$errors_email_cadastro,$errors_senha_cadastro,$errors_senha_repete,$errors_nome_cadastro,$errors_telefone_cadastro);
//$cadastro ->erro_email_cadastro($email_cadastro);
?>