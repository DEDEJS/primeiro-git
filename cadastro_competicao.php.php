<?php
ini_set('default_charset','UTF-8');
session_start();
     $categorias = array("","Infantil","Adolescente","Adulto"); // array que define a categoria
     $errors_nome = array("Campo Nome Vázio","Campo Nome Inválido","Proibido Numeros E Caracteres Especiais");//array de mensagem de erro 
     $errors_idade = array("Campo Idade Vázio","Campo Idade Inválido","Somente Números No Campo Idade");// array de mensagem de erro
   if(isset($_POST['nome'])){$nome_input = $_POST['nome'];}else{$nome_input = false;}
    if(isset($_POST['idade'])){ $idade_input = $_POST['idade'];}else{$idade_input = false;}
    
    //if(isset($_POST['submit'])){$submit_input = $_POST['submit'];}else{$submit_input = false;}

class form{
  private $categorias = array("Infantil");
  private $nome;
  private $nome_value;
  
  private $nome_true;

  private $idade;
  private $idade_value;

  private $idade_true;

  private $b;
     /**/
  public function valida_inputs($nome_input,$idade_input,$categorias,$errors_nome,$errors_idade){
  $nome = $this->nome = $nome_input;//valor do campo input nome
  $idade = $this->idade = $idade_input;
  $categorias = $this->categorias = $categorias;  

  $errors_nome = $this->errors_nome = $errors_nome;//array com os erros do campo nome
  $errors_idade = $this->errors_idade = $errors_idade;//array comos erros do campo nome
      if(!isset($nome)){
           $_SESSION['errors_nome'] = false;

      }else if(!isset($idade)){
         $_SESSION['errors_idade'] = false;
      }else{
      
        if(strlen($nome)<=0){
            $_SESSION['errors_nome'] = $errors_nome[0];
            $_SESSION['valida_nome'] = false;
            //echo $_SESSION['errors_idade'] = $errors_idade[0];
        }else if(strlen($nome)>=21){
             $_SESSION['errors_nome'] = $errors_nome[1];
             $_SESSION['valida_nome'] = false;
        }else if((preg_match('/\d+/', $nome)>0)){
             $_SESSION['errors_nome'] = $errors_nome[2];
             $_SESSION['valida_nome'] = false;
        }else{

          $_SESSION['errors_nome'] = "";
          $_SESSION['valida_nome'] = true;
          //$_SESSION['errors_idade'] = "";
        }
             /*campo idade*/
               if(strlen($idade)<=0){
             $_SESSION['errors_idade'] = $errors_idade[0];
             $_SESSION['valida_idade'] = false;
        }else if(strlen($idade)>=4){
             $_SESSION['errors_idade'] = $errors_idade[1];
             $_SESSION['valida_idade'] = false;
        }else if(!is_numeric($idade)){
             $_SESSION['errors_idade'] = $errors_idade[2];
             $_SESSION['valida_idade'] = false;
        }else{
            $_SESSION['errors_idade'] = "";
            $_SESSION['valida_idade'] = true;
        }
      }
      /*cadastro no db*/
      if(isset($_SESSION['valida_idade']) && isset($_SESSION['valida_nome'])){
          if($_SESSION['valida_nome'] == true && $_SESSION['valida_idade'] == true){
            echo "true";/*cadastrar*/
            include_once("banco.php");
            $sql = "INSERT INTO `git-1` (`nome`,`idade`,`categoria`) VALUES ('$nome_input','$idade_input','$categorias[1]')";
             if(mysqli_query($conn,$sql)){
            echo "cadastrado";
     }else{
      echo "falhou";
    }

          }else{
            
            unset($_SESSION['valida_nome']);
            unset($_SESSION['valida_idade']);
          }
      }
  }

public function error_nome($nome_input){
  if(isset($_SESSION['errors_nome'])){
  if($_SESSION['errors_nome'] != false){
   echo $_SESSION['errors_nome'];
  }else{
    $_SESSION['errors_nome'] = "";
  }
  }
}
public function error_idade($idade_input){
   if(isset($_SESSION['errors_idade'])){
     if($_SESSION['errors_idade'] != false){ 
      echo $_SESSION['errors_idade'];
 }    else{
  $_SESSION['errors_idade'] = "";
 }
}
}
  function GetCategoria($categorias){
  	$categorias = $this->categorias = $categorias;
  	 //echo $categorias[2];
  }


    /*campo input value nome */
  function ValueNome($nome_input){
      if(isset($_POST['nome'])){
          $nome_value = $this->nome_value = $nome_input;
         if($nome_input == false){
           $nome_value = "";
         }else{
          echo $nome_value; 
         }
      }else{

      }
  }
  function ValueIdade($idade_input){
    if(isset($_POST['idade'])){
        $idade_value = $this->idade_value = $idade_input;
        if($idade_input == false){
          $idade_value = "";
        }else{
        echo $idade_value;
      }
    }
  }

  /*sistema de categoria*/
 
}

     $form = new form();
      $form ->valida_inputs($nome_input,$idade_input,$categorias,$errors_nome,$errors_idade);
   

?>
<!DOCTYPE HTML>
<html lang="pt-br">
 <head>
 	<meta charset="UTF-8">
 	<title>Sistema De Natação</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/index.css"><!--responsivo-->
  <link rel="stylesheet" type="text/css" href="css/indexx.css">
 </head>
 <body>
  <div class="logo">
         <h3 class="logoo">Sistema De Natação</h3>
  </div>
 	<form action="#" method="POST" name="form" class="form">
     
      <div class="nome_text">
      	 <p class="nome_textt">Nome</p>
      </div>
       <div class="error_nome">
      	<?php  
         $form ->error_nome($nome_input);
      	?>
      </div>
      <div class="input_nome">
         <input type="text" name="nome" placeholder="Nome" value="<?php $form ->ValueNome($nome_input); ?>" class="nome_input" >      	
      </div>
      <div class="idade_text">
      	<p class="idade_textt">Idade</p>
      </div>
       <div class="error_idade">
      	<?php  
         $form ->error_idade($idade_input);
      	?>
      </div>
      <div class="input_idade">
      	 <input type="text" name="idade" placeholder="Idade" value="<?php $form->ValueIdade($idade_input); ?>" class="idade_input">
      </div>
      <div class="submit">
      	<input type="submit" value ="Cadastrar" class="submitt" name="submit">
      </div>
 	</form>
  <?php 
 //   $form ->DbCadastra();
  ?> 
 </body>
</html>
