function Email_cadastro(){
   var email_cadastro = document.getElementById("email_cadastro").value;
   var email_error_cadastro = document.getElementById("error_email_cadastro");
   var background_email = document.getElementById("email_cadastro");
   if(email_cadastro.length >=31){
   	email_error_cadastro.innerHTML = "Campo Email Muito Grande.";
   	background_email.style.borderColor = 'red';
   }else if(email_cadastro.length <=5){
    email_error_cadastro.innerHTML = "Campo Email Inválido..muito pequeno";
    background_email.style.borderColor = 'red';
   }else if(email_cadastro.search("@")==-1){
    email_error_cadastro.innerHTML = "Campo Email Inválido..";
    background_email.style.borderColor = 'red';
   }else{
   	email_error_cadastro.innerHTML = 'ffs';
   	background_email.style.borderColor = 'SpringGreen';

   }
   /*else if(email_cadastro.search(".")!=-1){
     email_error_cadastro.innerHTML = "ss";
     background_email.style.borderColor = 'red';
   }*/
}
function Senha_cadastro(){
	var senha_cadastro = document.getElementById("senha_cadastro").value;
	var error_senha_cadastro = document.getElementById("error_senha");
	var background_senha = document.getElementById("senha_cadastro");

	var senha_cadastro_repete = document.getElementById("senha_cadastro_repete").value;
	var error_senha_2 = document.getElementById("error_senha_2");
	var background_senha_2 = document.getElementById("senha_cadastro_repete");

	if(senha_cadastro.length >=30){
        error_senha_cadastro.innerHTML = "Senha Muito Grande";
        background_senha.style.borderColor = 'red';
	}else if(senha_cadastro.length <=6){
        error_senha_cadastro.innerHTML = "Senha Muito Fraca.";
        background_senha.style.borderColor = 'red';
	}else{
		error_senha_cadastro.innerHTML = "";
		background_senha.style.borderColor = 'SpringGreen';
	}
}
function Repete_senha_cadastro(){
	var senha_cadastro = document.getElementById("senha_cadastro").value;
	var senha_cadastro_repete = document.getElementById("senha_cadastro_repete").value;
	var error_senha_2 = document.getElementById("error_senha_2");
	var background_senha_2 = document.getElementById("senha_cadastro_repete");

	if(senha_cadastro_repete.length >=30){
      error_senha_2.innerHTML = "Senha Inválida";
	}else if(senha_cadastro_repete.length <=6){
      error_senha_2.innerHTML = "Senha muito Fracas";
      background_senha_2.style.borderColor = "red";
	}else if(senha_cadastro_repete != senha_cadastro){
      error_senha_2.innerHTML = "Senha Inválida.";
      background_senha_2.style.borderColor = 'red';
	}else{
		background_senha_2.style.borderColor = "SpringGreen";
		error_senha_2.innerHTML = "";
		
	}
}

function nome_cadastro(){
	var nome_cadastro = document.getElementById("nome_cadastro").value;
	var background_nome = document.getElementById("nome_cadastro");
	var error_nome = document.getElementById("error_nome");
	if(nome_cadastro.length >=20){
		error_nome.innerHTML = "Nome Inválido.";
		background_nome.style.borderColor = 'red';
	}else if(nome_cadastro.length <=1){
        error_nome.innerHTML = "Nome Inválido";
        background_nome.style.borderColor = 'red';
	}else{
		error_nome.innerHTML = "";
		background_nome.style.borderColor = 'SpringGreen';
	}
}
function telefone_cadastro(){
   var telefone_cadastro = document.getElementById("telefone_cadastro").value;
   var error_telefone = document.getElementById("error_telefone");
   var background_telefone = document.getElementById("telefone_cadastro");

if(telefone_cadastro.length <12){
     error_telefone.innerHTML = "Número Inválido";
     background_telefone.style.borderColor = "red";

   } else if(isNaN(telefone_cadastro)){
         error_telefone.innerHTML = "Telefone Inválido Somente Números";
         background_telefone.style.borderColor = 'red';
   }  else{
   
   	error_telefone.innerHTML = "n";
   	background_telefone.style.borderColor = 'SpringGreen';
   }
}
function a(){
	setInterval(Email_cadastro, 1000);
	setInterval(Senha_cadastro, 1000);
 	setInterval(Repete_senha_cadastro, 1000)
    setInterval(nome_cadastro, 1000);
    setInterval(telefone_cadastro,1000);
}