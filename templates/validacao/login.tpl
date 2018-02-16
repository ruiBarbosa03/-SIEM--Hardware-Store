{include file='common/header_initial.tpl'}
		<div class = "Header" align = "left">
			<a href="{$BASE_URL}pages/apresentacao/initial.php">
				<img src="{$BASE_URL}images/logo_normal.gif" height = 120px>
			</a>
		</div>
		<div class = "Login_Section" align = "center">
			<h2> Login </h2>
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
			<form method='post' action="{$BASE_URL}actions/users/login.php">
				<p>Nome de Utilizador </p>
					<input type='text' name='username'></input>
				<p>Password </p>          
					<input type='password' name='password'></input>
				<p></p>
				<input type='submit' value='Login'> </input>
			</form>				
		</div>
{include file='common/footer_apresentacao.tpl'}