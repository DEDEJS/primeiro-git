<?php
ini_set('default_charset','UTF-8');

/*
   	
   	try{
      $conn = new PDO('mysql:host=localhost;test=um', "root", "root");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
}catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
   

*/
$conn = mysqli_connect("127.0.0.1", "root", "root", "git");

?>