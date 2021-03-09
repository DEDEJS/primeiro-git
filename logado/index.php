<?php
session_start();

	include_once("classes/ValidaSession.php");

$con = mysqli_connect("127.0.0.1", "root", "root", "natacao");
$g = "c";
$session ->ValidaSession();

class competidores{
   private $competidores;
   private $conn;
   private $sql_valida_nome;
   private $email_db;
   private $nome_db;
      public function Banco($con){  
      	$conecta = $this->conn = $con;
            $sql_valida = sprintf("SELECT email,nome,categoria,idade FROM competicao");//WHERE email = '$email' and senha = '$senha' email = 'andrezao23@gmail.com'
              $this->sql_valida_nome = sprintf("SELECT nome FROM competicao limit 5");
          $sql_query = mysqli_query($conecta,$sql_valida);
           $linha = mysqli_fetch_assoc($sql_query);
            $row_cadastro = mysqli_num_rows($sql_query);
            
            if($row_cadastro >0){
              do{
                /*existe email*/
              // echo $linha['email']. "<br>";
               echo "Email: ".$linha['email'].'<br>';
               $this->email_db = $linha['email'];
               $this->nome_db = $linha['nome'];
               
               $_SESSION['email_db'] = $linha['email'];

               $_SESSION['categoria_db'] = $linha['categoria'];
               $_SESSION['idade_db'] = $linha['idade'];

              }while($linha = mysqli_fetch_assoc($sql_query));
           }else{
           echo 's';
          
           //echo $linha['email'];
           }
           mysqli_free_result($sql_query);

          
      }
      public function c(){
    // echo $a = $this->nome_db = $nome_db;
      	//$l = $this-> $Banco($con);
      	//$this->nome_db = "s";
      }
  
      public function nome_db($con){
      	$conecta = $this->conn = $con;
         // $sql_valida = sprintf("SELECT email,nome,categoria,idade FROM competicao");//WHERE email = '$email' and senha = '$senha' email = 'andrezao23@gmail.com'
         $sql_valida_nome= $this->sql_valida_nome;
          $sql_query = mysqli_query($conecta,$sql_valida_nome);
          $linha = mysqli_fetch_assoc($sql_query);
        do{
          //echo $this->email_db."<br>";
         echo $linha['nome']."<br>";        
        }while($linha = mysqli_fetch_assoc($sql_query));
         
      	}
      //$s = $this-> c();
       //echo $_SESSION['email_db'];
     // echo $this->nome_db;
      
      

}
$competicao = new competidores();
$competicao -> banco($con);
$competicao -> c();
echo $competicao -> nome_db($con);

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
	<title>Logado</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/logado.css">
    <link rel="stylesheet" type="text/css" href="css/competidores.css">
    <style type="text/css">
   /* 	.dados{
    		margin-top:2%; 
    	}
    	.dados h3{
    		display:inline;
    		 margin-left:20%;
    		 margin-top:2%;     		    
    	}
    	 h4{
    		display:inline-block;
    		margin-top:2%; 
    	}
    	.dados .h4nome{
    		margin-left:20%; 
    	}
    	.dados .h4categoria{
            margin-left:21.5%; 
    	}
    	.dados .h4idade{
    		margin-left:21.8%; 
    	}*/
       .competicao{
       	 margin-top:2%;
       	 padding:2%;
       	 background-color:red;
       	 width:50%; 
       	 color:white;
       	
       }
       .titulo{
        text-align:center; 
       }
       .nomes{
       	margin-top:2%;
       	margin-left:20%; 
       }
    </style>
</head>
<body>
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
	<h3><?php 
	
       //echo "Bem vindo: ".$_SESSION['nome'];
	 $session ->NomeUsuario($nome_session);
	?></h3>
</div>
<div class="competicao">
  <div class="titulo">
  	<h3>Competidores</h3>
  </div>
  <div class="nomes"><!-- é essa que ta certo -->
  	<h3>Nomes</h3>
  	<?php
      $competicao -> nome_db($con);
  	 ?>
  </div>
</div>	
<!--<div class="competicao">
  <h2>Competidores</h2>
  
 <div class="dados">
  <h3 class="h3nome">Nome</h3>
  <h4 class="h4nome"><?php  $competicao -> nome_db($con); ?></h4>
  <h4>a</h4>
  <!-- <h3 class="h3nome">Nome</h3>
   <h3 class="h3categoria">Categoria</h3>
   <h3 class="h3idade">Idade</h3>
   <h4 class="h4nome"><?php $competicao -> nome_db($con); ?></h4>
   <h4 class="h4categoria">categoria</h4>
   <h4 class="h4idade">idade</h4>
 </div>

</div>-->

</body>
</html>
<?php/*
INSERT INTO `competicao`(`email`, `senha`, `nome`, `idade`, `categoria`) VALUES (['andrezao23@gmail.com'],['andre071180'],['andre'],['15'],['848488484'])