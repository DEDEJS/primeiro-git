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
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script type="text/javascript" src="js/cadastro.js"></script><!-- formulario -->
      <style type="text/css">
    .rodape{
    padding:2%;
    padding-top:3%;  
    bottom:15; 
    left:0;
    background-color:#ADD8E6;
  
    }
    .titulo{
      margin-left:25%; 
      color:#ffffff;
      margin-top:-2%; 
      width:50%;

      
    }
    .titulo h2{
      color:#000000;
      margin-left:2%; 
    }
    .subtitulo{
      text-indent:13%;
      word-wrap: break-word;
      word-spacing: 6px;
      color:#000000;
    }
    .subtitulo > p:first-of-type:first-letter{
      color:blue;
    }

  </style>
  <script>

  </script>
</head>
<body onload="a();">
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
    <li><a href="quemSomos.php">Quem Somos</a></li>
    <li title="Algun Erro No Site?"><a href="bug.php">Bugs?</a></li>
  </ul>
</nav>

	<div class="logo">
		<h1 class="cadastroo-cadastro">Cadastro</h1>
	</div>


  <form method="POST" action="cadastro.php" class="form" name="form" >
  	<div class="email_text">
  		<h3>Email</h3>
  	</div>
  	<div class="error_email" id="error_email_cadastro">

  		<p>
      <?php
          $erros ->erro_email_cadastro($email_cadastro);
  		?>
        
      </p>
  	</div>
  	<div class="input_email">
  	  <input type="email" name="email_cadastro" id="email_cadastro" placeholder="Seu Melhor Email" class="email_input" autocomplete="off" value="<?php $value->ValueEmail($session_email,$email_cadastro); ?>" autocomplete="off" >
    </div>
    <div class="senha_text">
      <h3>Senha</h3>
    </div>
    <div class="error_senha" id="error_senha">
    	<p>
        <?php
         $erros ->erro_senha_cadastro($senha_cadastro); 
         ?>
        </p>
    </div>
    <div class="input_senha">
    	<input type="text" name="senha_cadastro" id="senha_cadastro" placeholder="Senha" class="senha_input" value="<?php $value->ValueSenha($session_senha); ?>" autocomplete="off">
    </div>
    <div class="senha_text_2">
      <h3>Confirmar</h3>
      <h3 class="senhaP">Senha</h3>
    </div> 
    <div class="error_senha_2" id="error_senha_2">
       <p>
       <?php 
           $erros ->erro_senha_cadastro_repete($senha_cadastro_repete);
       ?>
     </p>
    </div>
    <div class="input_senha">
      <input type="text" name="senha_cadastro_repete" id="senha_cadastro_repete" placeholder="Confirmar A Senha" class="senha_input" value="<?php $value->ValueSenhaRepete($session_senha_repete); ?>" autocomplete="off" >
    </div>
    <div class="nome_text"> 
    	<h3>Nome</h3>
    </div>
    <div class="error_nome" id="error_nome">
    	<p>
        <?php 
      $erros ->erro_nome_cadastro($nome_cadastro); 
      ?>
       </p>
    </div>
    <div class="input_nome">
    	<input type="text" name="nome_cadastro" id="nome_cadastro"  placeholder="Seu Nome " class="nome_input" value="<?php $value ->ValueNome($session_nome); ?>"  >
    </div>
    
    <div class="telefone_text">
    	<h3>Telefone</h3>
    </div>
    <div class="error_telefone" id="error_telefone">
      <p>
    	<?php 
      $erros ->erro_telefone_cadastro($telefone_cadastro); 
      ?>
    </p>
    </div>
    <div class="input_telefone">
    	<input type="text" name="telefone_cadastro" id="telefone_cadastro" class="telefone_input" placeholder="Seu Telefone Ex:1194562****" value="<?php $value->ValueTelefone($session_telefone); ?>"   >
    </div>
    <div class="submit">
    	<input type="submit" name="submit" value="Cadastrar" class="submitt" >
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
 <div class="rodape">
   <div class="titulo" title="Fonte: https://pt.wikipedia.org/wiki/Michael_Phelps#:~:text=Michael%20Fred%20Phelps%20II%20(Baltimore,China%2C%20em%20agosto%20de%202008.">
    <h2 class="">O Maior Nadador De Todos Os Tempos</h2>
     <span class="subtitulo">
       <p>Michael Fred Phelps II. È um nadador profissional americano aposentado,conquistou trinta e sete recordes mundiais e conquistou o maior número de medalhas de ouro (oito) olímpicas em uma única edição, feito este realizado nos Jogos de Pequim, na China, em agosto de 2008. </p>
     </span>
   </div>

 </div>
</body>
</html>