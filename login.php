<?php
session_start();
ini_set('default_charset','UTF-8');
include_once("classe/valida_login.php");
//session_destroy();
$login ->ValidaLogin($email_input,$senha_input,$submit,$errors_email,$errors_senha);
class valida_cadastro{
   public function valida_cadastros(){
      if(isset($_SESSION['cadastrado'])){
           $session_cadastro = $_SESSION['cadastrado'];
           if($session_cadastro == true){
            echo "Agora Só Falta Logar";
           }else{
                 unset($_SESSION['cadastrado']);

           }
      }else{
           
      }
   }
}
$cadastro_valida = new valida_cadastro();


?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<title>Logar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index.css"><!--responsivo-->
  <link rel="stylesheet" type="text/css" href="css/indexx.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <script type="text/javascript" src="js/login.js"></script>

  <style type="text/css">
   /* .rodape{
    position:fixed;
    bottom:0;
    left:0;
    background-color:#ADD8E6;
    width:100%;
    height:30%; 
    
    }
    .titulo{
      margin-left:25%; 
      color:#ffffff;
      margin-top:1%; 
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
    }*/
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
    <li><a href="a">Admin</a></li>
    <li title="Algun Erro No Site?"><a href="bug.php">Bugs?</a></li>
  </ul>
</nav>
 <div class="logo">
 	 <h1 class="logoo-login">Logar</h1>
 </div>
  <div class="logo_cad">
   <?php 
    $cadastro_valida ->valida_cadastros();
   ?>    
  </div>
  <script type="text/javascript">
   
  </script>
 <form action="#" method="POST" name="form" class="form">
 	<div class="email_text">
 		<p>Email</p>
 	</div>
 	<div class="error_email" id="error_email">
 		<!-- erro -->
 		<?php
          $erros_login ->error_email($email_input);
 		?>
 	</div>
 	<div class="input_email">
 		<input type="text" name="email" id="email" placeholder="Seu Email" class="email_input" value="<?php $value_login ->ValueEmail($session_email_login); ?>" autocomplete="off"  onKeyPress="Email()">
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
    <script>

    </script>
 		<input type="password" name="senha" id="senha" placeholder="Senha" class="senha_input"  value="<?php $value_login ->ValueSenha($session_senha_login); ?>">


 	</div>
  <div class="captcha">
    <p></p>
  </div>
 	<div class="submit">
 		<input type="submit" name="submit" class="submitt" value="Logar" onclick="valida_login()">
 	</div>
  <div class="cadastrar">
    <p>Não Tem Cadastro? <a href="cadastro.php">Cadastrar</a></p>
  </div>
  <div class="esqueceu_senha">
    <p>Esqueçeu A Senha ?  <a href="">Esqueci A Senha</a></p> 
  </div>
 </form><!--mostrar varios titulos como se fosse uma animação! -->
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
