<?php
/* Smarty version 3.1.30, created on 2017-01-19 16:23:09
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/client/novaEncomenda.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5880e7eda8b921_83356336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '410dcc76bf0d8f73cc5ad0d854b3a73f78b22ef5' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/client/novaEncomenda.tpl',
      1 => 1484842987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5880e7eda8b921_83356336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class="novaEncomendabox">
			<br>
			<h1>Nova Encomenda</h1>
				<table>				
					<tr>
						<th>Descricao</th><th>Marca</th><th>Tipo</th><th>Quantidade</th><th>Preço</th><th>Eliminar</th>
					</tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produtos']->value, 'produto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->value) {
?>
						<tr>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/infoProduto.php?id=<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['produto']->value['descricao'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['produto']->value['marca'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['produto']->value['tipo'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['produto']->value['quantidade'];?>
</td><td><?php echo number_format((float)$_smarty_tpl->tpl_vars['produto']->value['preco']*(100-$_smarty_tpl->tpl_vars['produto']->value['promo'])/100,2,'.','')*$_smarty_tpl->tpl_vars['produto']->value['quantidade'];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/eliminarProdutoEncomenda.php?id_produto=<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></td>
						</tr> 
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
				</table>
				<div class="botoes_nova_encomenda">
					<form class="form_nova_encomenda" method='get' action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/finalizarEncomenda.php"  >
						<input class="botoesNovaEncomenda"  type='submit' value='Finalizar Encomenda' ></input>
					</form>	
					<form class="form_nova_encomenda" method='get' action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/eliminarEncomenda.php" >
						<input class="botoesNovaEncomenda" type='submit' value='Eliminar Encomenda' ></input>
					</form>
					<form class="form_nova_encomenda" ><input class = "botoesNovaEncomenda" type="button" value="Voltar" onClick="history.go(-1);return true;" ></form>
				</div>				
			</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
