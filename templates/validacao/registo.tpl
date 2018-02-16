{include file='common/header_initial.tpl'}
		<div class = "Header" align = "left">
			<a href="{$BASE_URL}pages/apresentacao/initial.php">
				<img src="{$BASE_URL}images/logo_normal.gif" height = 120px>
			</a>
		</div>
		<div class = "Login_Section" align = "center">
			<div id="error_messages">
				{foreach $ERROR_MESSAGES as $error}
					{if $error}
						<div class="error">{$error}<a class="close" href="#">X</a></div>
					{/if}
				{/foreach}
			</div>
			<div id="success_messages">
				{foreach $SUCCESS_MESSAGES as $success}
					{if $success}
					  <div class="success">{$success}<a class="close" href="#">X</a></div>
					{/if}
				{/foreach}
			</div>
			</div>
			<h2> Registo </h2>
			<form method='get' name="myForm" id="formulario" action="{$BASE_URL}actions/users/registo.php" onsubmit="return validar()">
				<span style="color:red; font-size: 14px; margin-left: 250px" id="CamposError"></span>
				<p> Nome: </p> <input type='text' name='nome'></input> <span style="color:red; font-size: 14px; margin-left: 150px " id="NomeError"></span>
				<p> Morada: </p> <input type='text' name='morada'></input> <span style="color:red; font-size: 14px; margin-left: 150px" id="MoradaError"></span>
				<p> Email: </p> <input type='email' name='email'></input> <span style="color:red; font-size: 14px; margin-left: 200px" id="emailError"></span>
				<p> Telefone: </p> <input type='text' name='telefone'></input> <span style="color:red; font-size: 14px; margin-left: 200px" id="telefoneError"></span>
				<p> Nome de Utilizador: </p> <input id="username" type='text' name='username'></input> <span style="color:red; font-size: 14px; margin-left: 150px" id="UsernameError"></span><div id='username_availability_result'></div> 
				<p> Password: </p> <input type='password' name='pass'></input> <span style="color:red; font-size: 14px; margin-left: 150px" id="passError"></span>
				<p></p>
				<input type='submit' value='Registar' id="submitButton"></input>
			</form>
		</div>
		<script src="{$BASE_URL}javascript/validarFormRegisto.js"></script>
		<script src="{$BASE_URL}javascript/checkUsernameAvailability.js"></script>
{include file='common/footer_apresentacao.tpl'}