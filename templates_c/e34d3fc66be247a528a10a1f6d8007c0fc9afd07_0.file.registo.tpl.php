<?php
/* Smarty version 3.1.30, created on 2017-01-19 16:53:36
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/validacao/registo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5880ef10493345_09330124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e34d3fc66be247a528a10a1f6d8007c0fc9afd07' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/validacao/registo.tpl',
      1 => 1484844810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_initial.tpl' => 1,
    'file:common/footer_apresentacao.tpl' => 1,
  ),
),false)) {
function content_5880ef10493345_09330124 (Smarty_Internal_Template $_smarty_tpl) {
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
			</div>
			<h2> Registo </h2>
			<form method='get' name="myForm" id="formulario" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/registo.php" onsubmit="return validar()">
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
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/validarFormRegisto.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/checkUsernameAvailability.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer_apresentacao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
