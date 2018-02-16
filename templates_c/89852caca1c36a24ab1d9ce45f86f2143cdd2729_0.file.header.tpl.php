<?php
/* Smarty version 3.1.30, created on 2017-01-26 09:50:41
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/common/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5889c6716ca6d1_08038655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89852caca1c36a24ab1d9ce45f86f2143cdd2729' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/common/header.tpl',
      1 => 1485424193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5889c6716ca6d1_08038655 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

	<head>
		<title> Loja do Canto </title>
			
		<link rel="icon" 	 href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/Logo_empresa.png"  type="image\gif"/>  
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel=StyleSheet type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/stylesheetcss.css"/>
		<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/main.js"><?php echo '</script'; ?>
>	
		<meta charset="UTF-8">
		
	</head>
 
	<body>
		<div class="header">
			<div class = "logo_loja">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/home.php"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logo_normal.gif" height = 120px></a>
			</div>
			
			<div class = "login_zone">
			 
				<?php if ($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 0) {?> 
					<p id="p_nome"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/validacao/login.php">Login</a></p>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/validacao/registo.php" >Registo</a></p>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/client/novaEncomenda.php"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> (<?php echo count($_smarty_tpl->tpl_vars['CART']->value);?>
)</a>
				<?php } elseif ($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 1) {?>
					<p id="p_nome">Bem vindo cliente <?php echo $_smarty_tpl->tpl_vars['NOMEUSER']->value;?>
</p>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php" >Logout</a></p>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/client/novaEncomenda.php"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> (<?php echo count($_smarty_tpl->tpl_vars['CART']->value);?>
)</a>
				<?php } elseif ($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 2) {?>
					<p id="p_nome">Bem vindo administrador <?php echo $_smarty_tpl->tpl_vars['NOMEUSER']->value;?>
</p>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a></p>
				<?php }?> 		
			</div>
		</div>
		<div class = "menu_navbar">
			<div class="navbar">
				<ul>
				  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/sobreNos.php">Sobre Nós</a></li>
				  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/produtos.php">Produtos</a></li>
				   
					<?php if ($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 1) {?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/client/zonaCliente.php"/>Zona do Cliente</a></li> 
					<?php }?>
					
					
					<?php if ($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 2) {?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/pesquisaClientes.php">Clientes</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/todasEncomendas.php">Encomendas</a></li>
					<?php }?>
				  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/contactos.php">Contactos</a></li>
				</ul>
			</div>
		</div>
		<div id="error_messages">
			  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
					<div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#">X</a></div>
				<?php }?>
			  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
		<div id="success_messages">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value, 'success');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['success']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
				  <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#">X</a></div>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
		<div id="warning_messages">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WARNING_MESSAGES']->value, 'warning');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['warning']->value) {?>
				  <div class="warning"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
<a class="close" href="#">X</a></div>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div><?php }
}
