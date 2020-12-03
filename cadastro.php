<?php
/*PHP Version 7.4.8
*/
ini_set('default_charset','UTF-8');
session_start();
if(isset($_POST['email_cadastro'])){$email_cadastro = $_POST['email_cadastro'];}else{$email_cadastro = false;}
if(isset($_POST['senha_cadastro'])){$senha_cadastro = $_POST['senha_cadastro'];}else{$senha_cadastro = false;}
if(isset($_POST['nome_cadastro'])){$nome_cadastro = $_POST['nome_cadastro'];}else{$nome_cadastro = false;}
if(isset($_POST['estado_cadastro'])){$estado_cadastro = $_POST['estado_cadastro'];}else{$estado_cadastro = false;}
if(isset($_POST['cidade_cadastro'])){$cidade_cadastro = $_POST['cidade_cadastro'];}else{$cidade_cadastro = false;}
if(isset($_POST['telefone_cadastro'])){$telefone_cadastro = $_POST['telefone_cadastro'];}else{$cidade_cadastro = false;}
/*arrays com os erros*/
$errors_email_cadastro = array("Campo Email Vázio.","Campo Email Muito Grande.","Campo Email Inválido.");
$errors_senha_cadastro = array("Campo Senha Vázio.","Campo Senha Muito Grande.");
$errors_nome_cadastro = array("Campo Nome Vázio","Campo Nome Inválido","Proibido Numeros E Caracteres Especiais");
class FormCadastro{
    private $email_cadastro;

    private $senha_cadastro;

    private $nome_cadastro;
    private $nome_cadastro_value;

    private $estado_cadastro;

    private $cidade_cadastro;

    private $telefone_cadastro;
    private $telefone_cadastro_value;
    function ValidaCadastro($email_cadastro,$senha_cadastro,$nome_cadastro,$estado_cadastro,$cidade_cadastro,$telefone_cadastro,$errors_email_cadastro,$errors_senha_cadastro,$errors_nome_cadastro){
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
        $_SESSION['email_cadastro'] = false;
      }else{
         if(strlen($email_cadastro)<=0){
             $_SESSION['email_cadastro'] = $errors_email_cadastro[0];
             $_SESSION['email_cadastro_valida'] = false;
         }else if(strlen($email_cadastro)>=31){
             $_SESSION['email_cadastro'] = $errors_email_cadastro[1];
             $_SESSION['email_cadastro_valida'] = false;
         }else if(!filter_var($email_cadastro, FILTER_VALIDATE_EMAIL)){
             $_SESSION['email_cadastro'] = $errors_email_cadastro[2];
             $_SESSION['email_cadastro_valida'] = false;
         }else{
            $_SESSION['email_cadastro'] = "";
            $_SESSION['email_cadastro_valida'] = true;
         }
      }
      if(!isset($senha_cadastro)){
         $_SESSION['senha_cadastro'] = false;
      }else{
         if(strlen($senha_cadastro)<=0){
            $_SESSION['senha_cadastro'] = $errors_senha_cadastro[0];
            $_SESSION['senha_cadastro_valida'] = false;
          }else if(strlen($senha_cadastro)>=31){
           $_SESSION['senha_cadastro'] = $errors_senha_cadastro[0];
            $_SESSION['senha_cadastro_valida'] = false;
          }else{
            $_SESSION['senha_cadastro'] = "";
            $_SESSION['senha_cadastro_valida'] = true;
          }
      } if(isset($nome_cadastro)){
           if(strlen($nome_cadastro)<=0){
                  
           }else if(strlen($nome_cadastro)>=21){

           }else if((preg_match('/\d+/', $nome_cadastro)>0)){
             
           }else{}
      }
    }

    /*mensagens de erro*/
    public function erro_email_cadastro($email_cadastro){
        
        if(isset($_SESSION['email_cadastro'])){
           if($_SESSION['email_cadastro'] != false){
              echo $_SESSION['email_cadastro'];
           }else{
          echo  $_SESSION['email_cadastro'] = "";
           }
        }
    } 
    public function erro_senha_cadastro($senha_cadastro){
        if($_SESSION['senha_cadastro']){
           if($_SESSION['senha_cadastro'] != false ){
                echo $_SESSION['senha_cadastro'];
           }else{
              echo $_SESSION['senha_cadastro'] = "";
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
}
$cadastro = new FormCadastro();
$cadastro ->ValidaCadastro($email_cadastro,$senha_cadastro,$nome_cadastro,$estado_cadastro,$cidade_cadastro,$telefone_cadastro,$errors_email_cadastro,$errors_senha_cadastro,$errors_nome_cadastro);
$cadastro ->erro_email_cadastro($email_cadastro);
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Cadastro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css"><!--responsivo-->
    <link rel="stylesheet" type="text/css" href="css/indexx.css">
</head>
<body>
	<div class="logo">
		<h3 class="logoo">Cadastro</h3>
	</div>
  <form method="POST" action="#" class="form" name="form">
  	<div class="email_text">
  		<p>Email</p>
  	</div>
  	<div class="error_email">
  		<?php
          $cadastro ->erro_email_cadastro($email_cadastro);
  		?>
  	</div>
  	<div class="input_email">
  	  <input type="text" name="email_cadastro" placeholder="Seu Melhor Email" class="email_input" autocomplete="on">
    </div>
    <div class="senha_text">
      <p>Senha</p>
    </div>
    <div class="error_senha">
    	<?php $cadastro ->erro_senha_cadastro($senha_cadastro); ?>
    </div>
    <div class="input_senha">
    	<input type="password" name="senha_cadastro" placeholder="Senha" class="senha_input">
    </div>
    <div class="nome_text"> 
    	<p>Nome</p>
    </div>
    <div class="error_nome">
    	<?php  ?>
    </div>
    <div class="input_nome">
    	<input type="text" name="nome_cadastro" placeholder="Seu Nome" class="nome_input" value="<?php $cadastro ->ValueNome($nome_cadastro); ?>">
    </div>
    <div class="estado_text">
        <p>Estado</p>
    </div>
    <div class="error_estado">
    	<?php ?>
    </div>
    <div class="input_estado">
    	<input type="text" name="estado_cadastro" class="estado_input" placeholder="Seu Estado">
    </div>
    <div class="cidade_text">
    	<p>Cidade</p>
    </div>
    <div class="error_cidade"><?php ?></div>
    <div class="input_cidade">
    	<input type="text" name="cidade_cadastro" class="cidade_input" placeholder="Sua Cidade">
    </div>
    <div class="telefone_text">
    	<p>Telefone</p>
    </div>
    <div class="error_telefone" class="">
    	<?php ?>
    </div>
    <div class="input_telefone">
    	<input type="text" name="telefone_cadastro" class="telefone_input" placeholder="Seu Telefone">
    </div>
    <div class="submit">
    	<input type="submit" name="submit" value="Cadastrar" class="submitt">
    </div>
  </form>
</body>
</html>