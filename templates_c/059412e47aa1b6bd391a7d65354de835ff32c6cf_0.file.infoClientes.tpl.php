<?php
/* Smarty version 3.1.30, created on 2017-01-20 09:45:06
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/admin/infoClientes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5881dc22b6da84_38450863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '059412e47aa1b6bd391a7d65354de835ff32c6cf' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/admin/infoClientes.tpl',
      1 => 1484904768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5881dc22b6da84_38450863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class="clienteBox">
				<div class ="infoClientebox">
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
					<form style="margin-bottom:30px"><input class = "botoesNovaEncomenda" type="button" value="Voltar" onClick="history.go(-1);return true;" style="margin-top:20px;"></form>
					<br>	
				</div>
				<div class="clienteImgBox">
					<?php $_smarty_tpl->_assignInScope('img_src', getImagePath($_smarty_tpl->tpl_vars['user']->value['id'],$_smarty_tpl->tpl_vars['BASE_DIR']->value,$_smarty_tpl->tpl_vars['BASE_URL']->value));
?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
" />
					
				</div>
			</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
