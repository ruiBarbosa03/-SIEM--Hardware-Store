<?php
/* Smarty version 3.1.30, created on 2016-12-25 19:09:31
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/validacao/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860196b5325a0_01162338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5fce6ca9ca817fba534ab3bea7c685755754015' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/validacao/login.tpl',
      1 => 1481281480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_initial.tpl' => 1,
    'file:common/footer_apresentacao.tpl' => 1,
  ),
),false)) {
function content_5860196b5325a0_01162338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_initial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class = "Header" align = "left">
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/apresentacao/initial.php">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logo_normal.gif" height = 120px>
			</a>
		</div>
		<div class = "Login_Section" align = "center">
			<h2> Login </h2>
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
			<form method='post' action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php">
				<p>Nome de Utilizador </p>
					<input type='text' name='username'></input>
				<p>Password </p>          
					<input type='password' name='password'></input>
				<p></p>
				<input type='submit' value='Login'> </input>
			</form>				
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer_apresentacao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
