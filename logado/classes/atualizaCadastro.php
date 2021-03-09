<?php
if(isset($_SESSION['email'])){$email_session = $_SESSION['email'];}else{unset($email_session);}
if(isset($_SESSION['nome'])){$nome_session = $_SESSION['nome'];}else{unset($nome_session);}
if(isset($_SESSION['telefone'])){$telefone_session = $_SESSION['telefone'];}else{unset($telefone_session);}
if(isset($_SESSION['categoria'])){$categoria_session = $_SESSION['categoria'];}else{unset($categoria_session);}
class atualiza_cadastro{
   public function AtualizarCadastroEmail(){
   	echo $_SESSION['email'];
   }
   public function AtualizarCadastronome(){
   	echo $_SESSION['nome'];

   }
   public function AtualizarCadastroTelefone(){
   	echo $_SESSION['telefone'];
   }
   public function AtualizarCadastroCategoria(){
   	echo $_SESSION['categoria'];
   }
} 
$atualiza = new atualiza_cadastro();
?>