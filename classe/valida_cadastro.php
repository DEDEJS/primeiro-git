<?php
ini_set('default_charset','UTF-8');
//header("location:../cadastro.php");
include_once("error.php");

/*arrays com os erros*/
$errors_email_cadastro = array("Campo Email Vázio.","Campo Email Muito Grande.","Campo Email Inválido.");
$errors_senha_cadastro = array("Campo Senha Vázio.","Campo Senha Muito Grande.");
$errors_nome_cadastro = array("Campo Nome Vázio","Campo Nome Inválido","Proibido Numeros E Caracteres Especiais");
$errors_estado_cadastro = array("Campo Estado Vázio","Campo Estado Inávido.");
$errors_telefone_cadastro = array("Campo Telefone Vázio","Somente Números No Campo Telefone.");
$errors_cidade_cadastro = array("Campo Cidade Vázio.","Campo Cidade Inválido.");
class FormCadastro{
    private $email_cadastro;

    private $senha_cadastro;

    private $nome_cadastro;
    private $nome_cadastro_value;

    private $estado_cadastro;

    private $cidade_cadastro;

    private $telefone_cadastro;
    private $telefone_cadastro_value;
    function ValidaCadastro($email_cadastro,$senha_cadastro,$nome_cadastro,$estado_cadastro,$cidade_cadastro,$telefone_cadastro,$errors_email_cadastro,$errors_senha_cadastro,$errors_nome_cadastro,$errors_estado_cadastro,$errors_telefone_cadastro,$errors_cidade_cadastro){
        /*conteúdo dos campos inputs*/
     $email_cadastro = $this->email_cadastro = $email_cadastro;
     $senha_cadastro = $this->senha_cadastro = $senha_cadastro;
     $nome_cadastro = $this->nome_cadastro = $nome_cadastro;
     $estado_cadastro = $this->estado_cadastro = $estado_cadastro;
     $cidade_cadastro = $this->cidade_cadastro = $cidade_cadastro;
     $telefone_cadastro = $this->telefone_cadastro = $telefone_cadastro;
    /*arrays com erros*/
     $errors_email_cadastro = $this->errors_email_cadastro = $errors_email_cadastro;
     $errors_senha_cadastro = $this->errors_senha_cadastro = $errors_senha_cadastro;
     $errors_nome_cadastro = $this->errors_nome_cadastro = $errors_nome_cadastro;
     /*validacao dos campos*/
      if(!isset($email_cadastro)){
        $email_cadastro_valida = false;
      }else{
         if(strlen($email_cadastro)<=0){
             $_SESSION['email_cadastro'] = $errors_email_cadastro[0];
             $email_cadastro_valida = false;
         }else if(strlen($email_cadastro)>=31){
             $_SESSION['email_cadastro'] = $errors_email_cadastro[1];
             $email_cadastro_valida = false;
         }else if(!filter_var($email_cadastro, FILTER_VALIDATE_EMAIL)){
             $_SESSION['email_cadastro'] = $errors_email_cadastro[2];
             $email_cadastro_valida = false;
         }else{
            $_SESSION['email_cadastro'] = "ok";
            $email_cadastro_valida = true;
         }
      }
      if(!isset($senha_cadastro)){
        $senha_cadastro_valida = false;
      }else{
         if(strlen($senha_cadastro)<=0){
            $_SESSION['senha_cadastro'] = $errors_senha_cadastro[0];
            $senha_cadastro_valida = false;
          }else if(strlen($senha_cadastro)>=31){
           $_SESSION['senha_cadastro'] = $errors_senha_cadastro[0];
            $senha_cadastro_valida = false;
          }else{
            $_SESSION['senha_cadastro'] = "ok";
            $senha_cadastro_valida = true;
          }
      } if(!isset($nome_cadastro)){
          $nome_cadastro_valida = false;
      }else{
             if(strlen($nome_cadastro)<=0){
             $_SESSION['nome_cadastro'] = $errors_nome_cadastro[0];
            $nome_cadastro_valida = false;
           }else if(strlen($nome_cadastro)>=21){
             $_SESSION['nome_cadastro'] = $errors_nome_cadastro[1];
             $nome_cadastro_valida = false;
           }else if((preg_match('/\d+/', $nome_cadastro)>0)){
             $_SESSION['nome_cadastro'] = $errors_nome_cadastro[2];
            $nome_cadastro_valida = false;
           }else{
            $_SESSION['nome_cadastro'] = "ok";
           $nome_cadastro_valida = true;
           }
      }
          if(!isset($estado_cadastro)){
            $estado_cadastro_valida = false;       
          }else{
             if(strlen($estado_cadastro)<=0){
             $_SESSION['estado_cadastro'] = $errors_estado_cadastro[0];
             $estado_cadastro_valida = false; 
             }else{
              $_SESSION['estado_cadastro'] = "ok";
              $estado_cadastro_valida = true; 
             }
          }
        if(!isset($cidade_cadastro)){
            $cidade_cadastro_valida = false; 
        }else{
           if(strlen($cidade_cadastro)<=0){
             $_SESSION['cidade_cadastro'] = $errors_cidade_cadastro[0];
            $cidade_cadastro_valida = false;
           }else if((preg_match('/\d+/', $cidade_cadastro)>0)){
             $_SESSION['cidade_cadastro'] = $errors_cidade_cadastro[1];
             $cidade_cadastro_valida = false;
           }else{
            $_SESSION['cidade_cadastro'] = "ok";
            $cidade_cadastro_valida = true;
           }
        }
        if(!isset($telefone_cadastro)){
            $telefone_cadastro_valida = false;
        }else{
           if(strlen($telefone_cadastro)<=0){
            $_SESSION['telefone_cadastro'] = $errors_telefone_cadastro[0];
            $telefone_cadastro_valida = false;
           }else if(!is_numeric($telefone_cadastro)){
            $_SESSION['telefone_cadastro'] = $errors_telefone_cadastro[1];
           $telefone_cadastro_valida = false;
           }else{
            $_SESSION['telefone_cadastro'] = "ok";
            $telefone_cadastro_valida = true;
           }
        }

        if($email_cadastro_valida == false){

        }else if($senha_cadastro_valida == false){

        }else if($nome_cadastro_valida == false){

        }else if($estado_cadastro_valida == false){

        }else if($cidade_cadastro_valida == false){

        }else if($telefone_cadastro_valida == false){

        }else{
          echo "tudo bem";
          include_once("banco.php");
          $sql = "INSERT INTO `git-3` (`email`,`senha`,`nome`,`estado`,`cidade`,`telefone`,`categoria`) VALUES ('kk','$senha_cadastro','$nome_cadastro','estado_cadastro','$cidade_cadastro','telefone_cadastro','--')";
             if(mysqli_query($conn,$sql)){
                    echo "cadastrou";
             }else{
              echo "erro";
             }
        }

      }

    

  /**/
    function ValueNome($nome_cadastro){
        if(isset($_POST['nome_cadastro'])){
           $nome_cadastro_value = $this->nome_cadastro_value = $nome_cadastro;
           if($nome_cadastro != false){
              echo $nome_cadastro_value;
           }else{
            $nome_cadastro_value = "";
           }
        }
    }
    function valida_inputs(){
     
    }
}
$cadastro = new FormCadastro();
$cadastro ->ValidaCadastro($email_cadastro,$senha_cadastro,$nome_cadastro,$estado_cadastro,$cidade_cadastro,$telefone_cadastro,$errors_email_cadastro,$errors_senha_cadastro,$errors_nome_cadastro,$errors_estado_cadastro,$errors_telefone_cadastro,$errors_cidade_cadastro);
//$cadastro ->erro_email_cadastro($email_cadastro);
?>