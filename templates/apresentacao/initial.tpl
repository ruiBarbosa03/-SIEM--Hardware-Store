{include file='common/header_initial.tpl'}

		<div class = "Logo_Loja" align = "center">
			<a href="{$BASE_URL}pages/apresentacao/apresentacao.php">
				<img src="{$BASE_URL}images/Logo_empresa.png" height = 350px align = "center">
			</a>
		</div>

		<p align = "center"> A melhor solução <br> já ao virar da esquina </p>

		<div class = "Botoes_Acesso" align = "center">
			<!-- Criar lista para os vários botões e editar Login/Registo da mesma forma e Entrar de forma diferente -->
			
			<h2> <a href="{$BASE_URL}pages/public/home.php" >  Entrar  </a> 	</h2>
			
			<ul id = "Menu_Inicial">
				<li> <a href ="{$BASE_URL}pages/validacao/login.php" > Login    </a> 	</li>
				<li> <a href ="{$BASE_URL}pages/validacao/registo.php" > Registar </a>  	</li>
			</ul>
		</div> 
	
{include file='common/footer_apresentacao.tpl'}