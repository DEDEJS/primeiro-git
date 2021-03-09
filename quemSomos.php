<?php

?>
<!DOCTYPE HTML>

<html lang="PT-BR">
<head>
	<title>Quem Somos</title>
	<meta chaset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index.css"><!--responsivo-->
  <link rel="stylesheet" type="text/css" href="css/indexx.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style type="text/css">
  	.quemSomos{
        text-align: center;
  		margin-top:2%;
  		width:40%; 
  		position:absolute;
  		margin-left:30%; 
  		z-index: -1;

  	}
  	.text{
  		text-align:justify; 
  		text-indent:13%;
  		margin-top:2%; 
  	    word-wrap: break-word;
  	    width:70%;
  	}
  	.quemSomos > p:first-of-type:first-letter{
  		color:blue;
  	}
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
    <li><a href="#">Quem Somos</a></li>
    <li title="Algun Erro No Site?"><a href="bug.php">Bugs?</a></li>
  </ul>
</nav>
<div class="quemSomos">
	<h2>Quem Somos</h2>
	<p class="text">Oi, Eu Sou O André Tenho 19 Anos, Sou Um Simples "<strong>Cara</strong>" Que Programa Por Hobby, Me <strong>Apaixonei</strong> Pela Linguagem <strong>PHP</strong> E Programa Com Ela Desde Os Meus 16 Anos, Nunca Participei De Um Projeto Com <strong>Outros</strong> Programadores Eu Diria Que Esse Seria O Meu Primeiro Projeto, E Estou Orgulhoso Dele(Sei Que O Projeto Ta Feio). <i>Minhas Redes Sociais</i><br><a href="">Git HUB</a>  </p>
</div>
</body>
</html>