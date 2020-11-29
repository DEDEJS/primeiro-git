<?php
ini_set('default_charset','UTF-8');

session_start();
//$categorias = array("","Infantil","Adolescente","Adulto");
     $categorias = array("","Infantil","Adolescente","Adulto");
   
   if(isset($_POST['nome'])){$nome_input = $_POST['nome'];}else{$nome_input = false;}
    if(isset($_POST['idade'])){ $idade_input = $_POST['idade'];}else{$idade_input = false;}

class form{
  private $categorias = array("Infantil");
  private $nome;
  private $nome_value;

  private $idade;
  private $idade_value;
     /**/
  function GetCategoria($categorias){
  	$categorias = $this->categorias = $categorias;
  	 //echo $categorias[2];
  }
 function GetNome($nome_input){
    if(isset($_POST['nome'])){
          $nome = $this->nome = $nome_input;
          if(strlen($nome)<=0){
          	$nome = false;
            $_SESSION['nome_input'] = false;//session que preenche o campo input do html
             echo "Preenche o Campo Nome";
          }else if(strlen($nome)>=21){
            $nome = false;
            $_SESSION['nome_input'] = false;
            echo "Campo Nome Inválido";
          }else if(preg_match('/\d+/', $nome)>0){
            $nome = false;
            $_SESSION['nome_input'] = false;
            echo "Proibido Numeros E Caracteres Especiais";
          }else{
            $_SESSION['nome_input'] = true;
            echo "ok";

          }
         // echo $nome;
    }else{
    	
    }
  }

  function GetIdade($idade_input){
  	 if(isset($_POST['idade'])){
         $idade = $this->idade = $idade_input;
         if(strlen($idade)<=0){
           $idade = false;
           $_SESSION['idade_input'] = false; //session que preenche o campo input do html
           echo "Preenche O Campo Idade";
         }else if(strlen($idade)>=4){
           $idade = false;
           $_SESSION['idade_input'] = false;
           echo "Campo Idade Inválido";
         }else if(!is_numeric($idade)){
           $idade = false;
           $_SESSION['idade_input'] = false;
           echo "Somente Números No Campo Idade";
         }else{
          echo $idade;
          $_SESSION['idade_input'] = true;
         }
         //echo $idade;
  	 }else{

  	 }
  }
    /*campo input value nome */
  function ValueNome($nome_input){
      if(isset($_POST['nome'])){
          $nome_value = $this->nome_value = $nome_input;
         if($_SESSION['nome_input'] == false){
           $nome_value = "";
         }else{
          echo $nome_value;
         }
      }
  }
  function ValueIdade($idade_input){
    if(isset($_POST['idade'])){
        $idade_value = $this->idade_value = $idade_input;
        if($_SESSION['idade_input'] == false){
          $idade_value = "";
        }else{
        echo $idade_value;
      }
    }
  }
  /*sistema de categoria*/
   function Categoria($categorias,$nome,$idade){
   	   if($nome == false){
           
   	   }else if($idade == false){

   	   }else{
   	    if($idade <=12){
          echo "Bem vindo Competidor ". $nome." Você Pertence A Categoria ". $categorias[1];
            /*$verifica = false*/
            $_SESSION['categoria'] = $categorias[1];

   	   }else if($idade >=13 && $idade <=18){
          echo "Bem Vindo Competidor ".$nome." Você Pertence A Categoria ".$categorias[2];
            $_SESSION['categoria'] = $categorias[2];
   	   }else if($idade >=19){
          echo "Bem Vindo Competidor ".$nome." Você Pertence A Categoria ".$categorias[3];
   	      $_SESSION['categoria'] = $categorias[3];
   	   }else{
   	   	/*$verifica = true*/
   	   }
   }
}

}
     $form = new form();
    
     $form ->GetCategoria($categorias);
     
    // $form ->GetIdade($idade_input);

 	 $form ->categoria($categorias,$nome_input,$idade_input);

?>
<!DOCTYPE HTML>
<html lang="pt-br">
 <head>
 	<meta charset="UTF-8">
 	<title>Sistema De Natação</title>
 </head>
 <body>
 	<form action="#" method="POST" name="form">
      <div >
      	 <h3>Sistema De Natação</h3>
      </div>
     
      <div>
      	 <p>Nome</p>
      </div>
       <div>
      	<?php  
          $form ->GetNome($nome_input);
      	?>
      </div>
      <div>
         <input type="text" name="nome" placeholder="Nome" value="<?php $form ->ValueNome($nome_input); ?>">      	
      </div>
      <div>
      	<p>Idade</p>
      </div>
       <div>
      	<?php  
          $form ->GetIdade($idade_input);
      	?>
      </div>
      <div>
      	 <input type="text" name="idade" placeholder="Idade" value="<?php $form ->ValueIdade($idade_input); ?>">
      </div>
      <div>
      	<input type="submit" name="">
      </div>
 	</form>
  <?php 
$a = "andre55";
//(!preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])) preg_match('/^[A-Za-z0-9-]+$/', 'teste-1-2-3');
if(preg_match('/\d+/', $_POST['nome'])>0){
      echo "true ".$_POST['nome'];
 }else{
  echo "false ".$_POST['nome'];
 }
 
  ?>
 </body>
</html>
