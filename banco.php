<?php
ini_set('default_charset','UTF-8');
class banco{
  private $conn;
   function ConectaDB(){
   	
   	try{
      $conn = $this->conn = new PDO('mysql:host=localhost;git=git-1', "root", "root");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
}catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
   }
}
$banco = new banco();
$banco ->ConectaDB();

?>