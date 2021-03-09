<?php
session_start();

	include_once("classes/ValidaSession.php");


$session ->ValidaSession();

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Logado</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/logado.css">
    <link rel="stylesheet" type="text/css" href="css/atualizaCadastro.css">

</head>
<body>
<div>
  	<nav>
	<ul id="menu-h">
		<li title="Ir Para O Inicio"><a href="index.php">Inicio</a></li>
		<li title="Alterar O Seu Cadastro"><a href="atualizarCadastro.php">Alterar Cadastro</a></li>
		<li title="Alterações Da Competição"><a href="">Competição</a>
          <ul>
          	<li title="Iniciar Uma Competição"><a href=""><p>Competir</p></a></li>
          	<li title="Sair De Uma Competição"><a href=""><p>Sair Da Competição</p></a></li>
          </ul>
		</li>
		<li title="Sair"><a href="deslogar.php">Deslogar</a></li>
	</ul>
</nav>
<div class="nome">
	<h3>
		<?php 
        $session ->NomeUsuario($nome_session);
		?>
	</h3>
</div>
<div class="alterarDados">
 <div class="altera_email">
  
  	<h3>Email</h3>
  	<h4 title="Seu Email">
  		<?php
      $atualiza ->AtualizarCadastroEmail();
  	    ?>
  		
  	</h4>
    <p>
     <a href="">Alterar Email</a>

    </p>
 </div>
<div class="alterar_nome">
	<h3>Nome:</h3>
	<h4 title="Seu Nome">
		<?php 
       $atualiza ->AtualizarCadastronome();
	?>
    </h4>
	<p>
		<a href="">Alterar Nome</a>
	</p>
    
</div>
<div class="alterar_telefone">
<h3 > Telefone:</h3>
	<h4 title="Seu Telefone">
	 <?php
       $atualiza ->AtualizarCadastroTelefone();
	?>
   </h4>
   <p>
   	<a href="">alterar Telefone</a>
   </p>

</div>
<div class="alterar_categoria">
	<h3>
		Categoria:
	</h3>
	<h4 title="Sua Categoria">
		<?php
           $atualiza ->AtualizarCadastroCategoria();
		?>
	</h4>
      <p>
      	<a href="">Alterar Categoria</a>
      </p>
	
 </div>
</div>
</body>
</html>
<?php 

?>