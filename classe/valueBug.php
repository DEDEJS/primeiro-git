<?php


ini_set('default_charset','UTF-8');
//if(isset($_POST['BugSelect'])){$BugSelect = $_POST['BugSelect'];}else{$BugSelect = false;}

class valueBug{
  private $valueBug;

   public function valueBugs($BugSelect){
   	if(isset($_SESSION['paginaBug'])){
   	if($_SESSION['paginaBug'] != false){
   		echo $_SESSION['paginaBug'];
   	}
   }
}

	public function ValidaAssunto($assunto){
       $assuntoTextArea = $this->assunto = $assunto;
       if($assuntoTextArea == false){

       }else{
       echo htmlspecialchars($assuntoTextArea);
	}
	}
}
$valueBugs = new valueBug();


?>