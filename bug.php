<?php
/*
se o usuario tiver um login encaminhar ele para o login e depois retorna para a pagina logado mas com os dados do bug la 
ou ter a opção anonima

*/

ini_set('default_charset','UTF-8');

include_once("classe/bugValida.php");
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Bug</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bug.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<style type="text/css">
		#menu-h li:hover ul, #menu-h li.over ul{z-index:1; }
	</style>
</head>
<body>
  <nav>
  <ul id="menu-h">
    <li title="Home Page"><a href="index.php">Home Page</a></li>
    <li title="Logar"><a href="login.php">Logar</a></li>
    <li title="Cadastrar"><a href="cadastro.php">Cadastrar</a></li>
        <li title="Contatos"><a href=""><p>Contatos</p></a>  
          <ul>
            <li title="Iniciar Uma Competição"><a href="https://github.com/DEDEJS"><p>Git Hub</p></a></li>
            <li title="Sair De Uma Competição"><a href=""><p>Facebook</p></a></li>
          </ul>
    </li>
    <li title="Algun Erro No Site?"><a href="bug.php">Bugs?</a></li>
  </ul>
</nav>
 <form action="#" method="POST" name="BugForm" class="BugForm">
 
 <div >
 	<h2>Em Qual Página Foi O Bug?</h2>
 </div>
 <div class="error">
   <?php 
    //  $valueBug ->valuePagina($session_bugPagina);
   $bug_valida -> ValidaSelect($BugSelect,$BugSelect1,$select_array);


   ?>
 </div>
 <select name="BugSelect">
    <option name='bug1'>
    <?php
    
       $valueBugs -> valueBugs($BugSelect);
    ?>
      
    </option>

 	<option>Home Page</option>
 	<option>Logar</option>
 	<option>Cadastrar</option>
 	<option>Bugs</option>
  <option>Outra Página</option>
 </select>

<div>
   <?php
    $bug_valida -> ValidaAssunto($assunto);
 ?>
	<h2>Assunto</h2>
</div>

 <textarea  name="assunto"  class="assunto" id="assunto" maxlength="600">
   <?php
$valueBugs -> ValidaAssunto($assunto);
?>
 </textarea>
 <div class="SubmittBug">
  <input type="submit" name="" value="Enviar" class="SubmitBug">
</div>
</form>
</body>
</html>
