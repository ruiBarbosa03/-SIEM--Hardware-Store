function validar()
{
	var formulario = document.myForm
	var nome = formulario.nome.value
	var morada = formulario.morada.value
	var email  = formulario.email.value
	var telefone = formulario.telefone.value
	var username = formulario.username.value
	var password = formulario.pass.value
	var submitOK="True"
	if((nome == "") || (nome == " ") || (morada  == "") || (email == "") || (telefone  == "")|| (username  == "")|| (password  == "")){
		document.getElementById("CamposError").innerHTML = "Campos em Falta"
		submitOK = "False"
	}			
	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) ){
		document.getElementById("emailError").innerHTML = "Endereco de e-mail nao é válido"
		submitOK = "False"
	}
	if (telefone.length != 9){
		document.getElementById("telefoneError").innerHTML = "O telefone tem de conter 9 dígitos";
		submitOK = "False"
	}
	else if(!(/^\d+$/.test(telefone))){
		document.getElementById("telefoneError").innerHTML = "O telefone tem de conter só dígitos";
		submitOK = "False"
	}
	if(password.length < 7){
		document.getElementById("passError").innerHTML = "A password tem que conter mais do que 7 caracteres";
		submitOK = "False"
	}
	if(nome.length< 10){
		document.getElementById("NomeError").innerHTML = "O nome tem que conter mais do que 10 caracteres";
		submitOK = "False"
	}
	if(morada.length < 10){
		document.getElementById("MoradaError").innerHTML = "A morada tem que conter mais do que 10 caracteres";
		submitOK = "False"
	}
	if(username.length < 8){
		document.getElementById("UsernameError").innerHTML = "O username tem que conter mais do que 8 caracteres";
		submitOK = "False"
	}
	if(submitOK == "False")	{
		return false
	}
	else{
		return true
	}
	
}