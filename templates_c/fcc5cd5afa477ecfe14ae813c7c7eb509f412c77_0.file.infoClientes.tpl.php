<?php
/* Smarty version 3.1.30, created on 2016-12-27 18:11:54
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/admin/infoClientes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5862aeea7d3cf2_96094774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc5cd5afa477ecfe14ae813c7c7eb509f412c77' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/admin/infoClientes.tpl',
      1 => 1482862310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5862aeea7d3cf2_96094774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class ="infoProdutobox">
				<h1><?php echo $_smarty_tpl->tpl_vars['user']->value['nome'];?>
</h1>
				<p><strong>Código: </strong><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</p>
				<p><strong>Morada: </strong><?php echo $_smarty_tpl->tpl_vars['user']->value['morada'];?>
</p>
				<p><strong>Telefone: </strong><?php echo $_smarty_tpl->tpl_vars['user']->value['telefone'];?>
</p>
				<p><strong>Email: </strong><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
				<form style="margin-bottom:30px"><input class = "botoesNovaEncomenda" type="button" value="Voltar" onClick="history.go(-1);return true;" style="float:right"></form>
				<br>	
			</div>			
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
