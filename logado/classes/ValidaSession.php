<?php
include_once("atualizaCadastro.php");
/*
Verifica Se o Usuário Está Logado Ou Não

*/

class sessions{
	private $email_session;

	 function ValidaSession(){
	    if(!isset($_SESSION['email']) AND !isset($_SESSION['nome'])){
             header("location:../index.php");
             // $_SESSION['error_session'] = true;
              //Usuário Não Está Logado
	    	echo "ss";
	    }else{
	   // echo "Logado ";
	    	
	    }
	}

	
private $nome_session;
	public function NomeUsuario($nome_session){
		if(isset($nome_session)){
		$nome_session = $this->nome_session = $_SESSION['nome'];
	    echo "Bem Vindo: ".$nome_session;
	}else{
		echo "s";
	}
}

}
$session = new sessions();

?>