<?php
/* Smarty version 3.1.30, created on 2016-12-27 16:53:51
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/client/gestaoInfoCliente.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58629c9f3cdd78_31885434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '778de3e6f6911635249e380d75c4bfae4317b584' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/client/gestaoInfoCliente.tpl',
      1 => 1482857627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_58629c9f3cdd78_31885434 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class="gestaoInformacaoCliente">
				<div class = "gestaoInfoCliente">
					<h1><?php echo $_smarty_tpl->tpl_vars['user']->value['nome'];?>
</h1>
					<h2> Gestão de Informação </h2>
				</div>
				
				<div class = "gestaoInfoForm">
					<form method="post" name="myForm" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/gestaoInfo.php">
						<p margin-top="20px" margin-bottom="20px"><label> Morada: <input type="text" name="morada" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['morada'];?>
" > </label> </p><br>
						<p margin-bottom="20px">                  <label> Telefone: <input type="text" name="telefone" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['telefone'];?>
>  </label> </p><br>
						<p margin-bottom="20px">                  <label> Email: <input type="text" name="email" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
></label> </p> <br>
						<p margin-bottom="20px">                  <label> Password: <input type="text" name="novaPass" ></label></p><br>
						<p margin-bottom="20px">          <div>   <input class="botoesNovaEncomenda" type="submit" name="cmdsubmit" value="Mudar"></input>&nbsp;</div></p><br>
						
					</form>	
					<form><input class = "botoesNovaEncomenda" type="button" value="Voltar" onClick="history.go(-1);return true;"></form>
				</div>
			</div>
		</div>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
