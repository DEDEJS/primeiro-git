<?php
session_start();
ini_set('default_charset','UTF-8');
include_once("classe/valida_login.php");


$login ->ValidaLogin($email_input,$senha_input,$errors_email,$errors_senha);
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index.css"><!--responsivo-->
  <link rel="stylesheet" type="text/css" href="css/indexx.css">
</head>
<body>
 <div class="logo">
 	 <h3 class="logoo-login">Login</h3>
 </div>
 <form action="#" method="POST" name="form" class="form" >
 	<div class="email_text">
 		<p>Email</p>
 	</div>
 	<div class="error_email">
 		<!-- erro -->
 		<?php
          $erros_login ->error_email($email_input);
 		?>
 	</div>
 	<div class="input_email">
 		<input type="text" name="email" id="email" placeholder="Seu Email" class="email_input" value="<?php $value_login ->ValueEmail($session_email_login); ?>">
 	</div>
 	<div class="senha_text">
       <p>Senha</p>
 	</div>
 	<div class="error_senha"> 
 		<!-- error -->
 		<?php  
        $erros_login ->error_senha($senha_input);
 		?>
 	</div>
 	<div class="input_senha">
 		<input type="password" name="senha" placeholder="Senha" class="senha_input" value="<?php $value_login ->ValueSenha($session_senha_login); ?>">
 	</div>
 	<div class="submit">
 		<input type="submit" name="submit" class="submitt" value="Logar">
 	</div>
  <div class="cadastrar">
    <p>Não Tem Cadastro? <a href="cadastro.php">Cadastrar</a></p>
  </div>
 </form>
</body>
</html>