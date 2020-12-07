<?php
/*PHP Version 7.4.8
*/
ini_set('default_charset','UTF-8');
if(session_start())
{}else{}

include_once("classe/valida_cadastro.php");

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
  <form method="POST" action="cadastro.php" class="form" name="form">
  	<div class="email_text">
  		<p>Email</p>
  	</div>
  	<div class="error_email">
  		<?php
          $erros ->erro_email_cadastro($email_cadastro);
  		?>
  	</div>
  	<div class="input_email">
  	  <input type="text" name="email_cadastro" placeholder="Seu Melhor Email" class="email_input" autocomplete="on" value="<?php $value->ValueEmail($session_email); ?>">
    </div>
    <div class="senha_text">
      <p>Senha</p>
    </div>
    <div class="error_senha">
    	<?php $erros ->erro_senha_cadastro($senha_cadastro); ?>
    </div>
    <div class="input_senha">
    	<input type="password" name="senha_cadastro" placeholder="Senha" class="senha_input" value="asasasass">
    </div>
    <div class="nome_text"> 
    	<p>Nome</p>
    </div>
    <div class="error_nome">
    	<?php $erros ->erro_nome_cadastro($nome_cadastro); ?>
    </div>
    <div class="input_nome">
    	<input type="text" name="nome_cadastro" placeholder="Seu Nome " class="nome_input" value="<?php $value ->ValueNome($session_nome); ?>">
    </div>
    
    <div class="telefone_text">
    	<p>Telefone</p>
    </div>
    <div class="error_telefone" class="">
    	<?php $erros ->erro_telefone_cadastro($telefone_cadastro); ?>
    </div>
    <div class="input_telefone">
    	<input type="text" name="telefone_cadastro" class="telefone_input" placeholder="Seu Telefone " value="<?php $value->ValueTelefone($session_telefone); ?>" maxlength="11">
    </div>
    <div class="submit">
    	<input type="submit" name="submit" value="Cadastrar" class="submitt">
    </div>
    <div class="logar">
      <p> Já Tem Cadastro? <a href="login.php">Logar</a></p><br>
    </div>
    <div>
      <?php $cadastro->valida_inputs(); 
     /* $teste = "ans5>";
      if(!preg_match("/^[a-zA-Z0-9 ]+$/", $teste)){
         echo "sim";
    }else{
      echo "nao";
    }*/
    ?>
    </div>
  </form>

</body>
</html>