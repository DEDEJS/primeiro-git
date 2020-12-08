<?php
ini_set('default_charset','UTF-8');
//header("location:../cadastro.php");
include_once("error.php");

/*arrays com os erros*/
$errors_email_cadastro = array("Campo Email Vázio.","Campo Email Muito Grande.","Campo Email Inválido.");
$errors_senha_cadastro = array("Campo Senha Vázio.","Campo Senha Muito Grande.","Campo Senha Tem Que Ter No Minimo 8 Caracteres.");
$errors_nome_cadastro = array("Campo Nome Vázio","Campo Nome Inválido","Proibido Numeros E Caracteres Especiais(Mesmo O Nome Contendo)");
$errors_telefone_cadastro = array("Campo Telefone Vázio","Somente Números No Campo Telefone.","Campo De Telefone Inválido.");
class FormCadastro{
    private $email_cadastro;
    private $email_cadastro_value;
    private $session_input_email;

    private $senha_cadastro;

    private $nome_cadastro;
    private $nome_cadastro_value;
    private $session_input_nome;
   

    private $telefone_cadastro;
    private $telefone_cadastro_value;
    private $session_input_telefone;
    function ValidaCadastro($email_cadastro,$senha_cadastro,$nome_cadastro,$telefone_cadastro,$errors_email_cadastro,$errors_senha_cadastro,$errors_nome_cadastro,$errors_telefone_cadastro){
        /*conteúdo dos campos inputs*/
     $email_cadastro = $this->email_cadastro = $email_cadastro;
     $senha_cadastro = $this->senha_cadastro = $senha_cadastro;
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
             $_SESSION['email_cadastro'] = $errors_email_cadastro[0];
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
         if(strlen($senha_cadastro)<=0){
            $_SESSION['senha_cadastro'] = $errors_senha_cadastro[0];
            $senha_cadastro_valida = false;
          }else if(strlen($senha_cadastro)>=31){
           $_SESSION['senha_cadastro'] = $errors_senha_cadastro[1];
            $senha_cadastro_valida = false;
          }else if(strlen($senha_cadastro)<8){
            $_SESSION['senha_cadastro'] = $errors_senha_cadastro[2];
            $senha_cadastro_valida = false;
          }else{
            $_SESSION['senha_cadastro'] = "";
            $senha_cadastro_valida = true;
          }
      } if(!isset($nome_cadastro)){
          $nome_cadastro_valida = false;
      }else{//a-zA
             $_SESSION['session_nome'] = $this->session_input_nome = "";
             if(strlen($nome_cadastro)<=0){
             $_SESSION['nome_cadastro'] = $errors_nome_cadastro[0];
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
            $_SESSION['telefone_cadastro'] = $errors_telefone_cadastro[0];
            $telefone_cadastro_valida = false;
            $_SESSION['session_telefone'] = false;
           }else if(!is_numeric($telefone_cadastro)){
            $_SESSION['telefone_cadastro'] = $errors_telefone_cadastro[1];
           $telefone_cadastro_valida = false;
           $_SESSION['session_telefone'] = false;
           }else if(strlen($telefone_cadastro)<11){
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
        }else if($nome_cadastro_valida == false){
         //  echo "3";
        }else if($telefone_cadastro_valida == false){
          //echo '4';
        }else{
          echo "tudo bem";
          include_once("./banco.php");
          $senha_cadastro = sha1($senha_cadastro);
          $sql = "INSERT INTO `git` (`email`,`senha`,`nome`,`telefone`,`categoria`) VALUES ('$email_cadastro','$senha_cadastro','$nome_cadastro','$telefone_cadastro','--')";
             if(mysqli_query($conn,$sql)){
                    echo "cadastrou";
             }else{
              echo "erro";
             }
        }

      }

    



    function valida_inputs(){
     
    }
}
$cadastro = new FormCadastro();
$cadastro ->ValidaCadastro($email_cadastro,$senha_cadastro,$nome_cadastro,$telefone_cadastro,$errors_email_cadastro,$errors_senha_cadastro,$errors_nome_cadastro,$errors_telefone_cadastro);
//$cadastro ->erro_email_cadastro($email_cadastro);
?>