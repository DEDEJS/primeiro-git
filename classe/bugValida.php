<?php
ini_set('default_charset','UTF-8');
session_start();
include_once("valueBug.php");
if(isset($_POST['BugSelect'])){$BugSelect = $_POST['BugSelect'];}else{$BugSelect = false;}
if(isset($_POST['bug1'])){$BugSelect1 = $_POST['bug1'];}else{$BugSelect1 = false;}
if(isset($_POST['assunto'])){$assunto = $_POST['assunto'];}else{$assunto = false;}

$select_array = array("Home Page","Logar","Cadastrar","Bugs","Outra Página");
class validaBug{
	private $select;
    private $select1;

    private $assunto;
    private $select_array;
	public function ValidaSelect($BugSelect,$BugSelect1,$select_array){
       $select = $this->select = $BugSelect;
       $select_array = $this->select_array = $select_array;


      
      if($select == false){
        echo "a";
      }else{
      	$valida_array = str_replace($select_array, "", $select);
        if($valida_array == ""){
        	echo "true";
        	/*tudo certo*/
        	$_SESSION['paginaBug'] = $select;
        }else{
        	echo 'false';
        	$_SESSION['paginaBug'] = false;
        }
      }
   
	}
  public function ValidaAssunto($assunto){
            $assunto = $this->assunto = $assunto;
            if($assunto == false ){
              
            } else{
               if(strlen($assunto)<=0){
                 echo "Preenche O Campo Assunto";
               }else if(strlen($assunto)>=601){
                 echo "Muitos Caracteres No Campo Assunto";
               }else if(stristr($assunto,"<") or stristr($assunto,">")){
                 echo "Sem Caracteres Especiais 0";
               }else if(stristr($assunto,"'") or stristr($assunto,'"')){
                 echo "sem Caracteres 1";
               }else{
                echo "ok";
               }

            }
  }
  /**/
	

}
$bug_valida = new validaBug();
?>