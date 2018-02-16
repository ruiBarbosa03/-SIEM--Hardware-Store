<html>

	<head>
		<title> Loja do Canto </title>
			
		<link rel="icon" 	 href="{$BASE_URL}images/Logo_empresa.png"  type="image\gif"/>  
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel=StyleSheet type="text/css" href="{$BASE_URL}css/stylesheetcss.css"/>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script src="{$BASE_URL}javascript/main.js"></script>	
		<meta charset="UTF-8">
		
	</head>
 
	<body>
		<div class="header">
			<div class = "logo_loja">
				<a href="{$BASE_URL}pages/public/home.php"><img src="{$BASE_URL}images/logo_normal.gif" height = 120px></a>
			</div>
			
			<div class = "login_zone">
			 
				{if $AUTENTICADO == 0 } 
					<p id="p_nome"><a href="{$BASE_URL}pages/validacao/login.php">Login</a></p>
					<p><a href="{$BASE_URL}pages/validacao/registo.php" >Registo</a></p>
					<a href="{$BASE_URL}pages/client/novaEncomenda.php"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> ({count($CART)})</a>
				{elseif $AUTENTICADO == 1}
					<p id="p_nome">Bem vindo cliente {$NOMEUSER}</p>
					<p><a href="{$BASE_URL}actions/users/logout.php" >Logout</a></p>
					<a href="{$BASE_URL}pages/client/novaEncomenda.php"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> ({count($CART)})</a>
				{elseif $AUTENTICADO == 2}
					<p id="p_nome">Bem vindo administrador {$NOMEUSER}</p>
					<p><a href="{$BASE_URL}actions/users/logout.php">Logout</a></p>
				{/if} 		
			</div>
		</div>
		<div class = "menu_navbar">
			<div class="navbar">
				<ul>
				  <li><a href="{$BASE_URL}pages/public/sobreNos.php">Sobre Nós</a></li>
				  <li><a href="{$BASE_URL}pages/public/produtos.php">Produtos</a></li>
				   
					{if $AUTENTICADO == 1}
						<li><a href="{$BASE_URL}pages/client/zonaCliente.php"/>Zona do Cliente</a></li> 
					{/if}
					
					
					{if $AUTENTICADO == 2}
						<li><a href="{$BASE_URL}pages/admin/pesquisaClientes.php">Clientes</a></li>
						<li><a href="{$BASE_URL}pages/admin/todasEncomendas.php">Encomendas</a></li>
					{/if}
				  <li><a href="{$BASE_URL}pages/public/contactos.php">Contactos</a></li>
				</ul>
			</div>
		</div>
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
		<div id="warning_messages">
			{foreach $WARNING_MESSAGES as $warning}
				{if $warning}
				  <div class="warning">{$warning}<a class="close" href="#">X</a></div>
				{/if}
			{/foreach}
		</div>