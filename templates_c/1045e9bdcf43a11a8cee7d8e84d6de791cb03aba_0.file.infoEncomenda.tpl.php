<?php
/* Smarty version 3.1.30, created on 2016-12-27 18:07:33
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/client/infoEncomenda.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5862ade5418c30_91854169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1045e9bdcf43a11a8cee7d8e84d6de791cb03aba' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/client/infoEncomenda.tpl',
      1 => 1482862045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5862ade5418c30_91854169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class="novaEncomendabox">
				<h1>Encomenda #<?php echo $_smarty_tpl->tpl_vars['id_encomenda']->value;?>
 </h1>
				<table>				
					<tr>
					<th>ID peca</th><th>Descrição</th><th>Marca</th><th>Tipo</th><th>Quantidade</th><th>Preço</th>
					</tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['encomendas']->value, 'encomenda');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['encomenda']->value) {
?>
						<tr>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/infoProduto.php?id=<?php echo $_smarty_tpl->tpl_vars['encomenda']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['descricao'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['marca'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['tipo'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['quantidade'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['preco'];?>
</td>
						</tr> 
						<?php $_smarty_tpl->_assignInScope('estado', $_smarty_tpl->tpl_vars['encomenda']->value['estado']);
?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>
				<div class = "botoes">
					<?php if (($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 2 && $_smarty_tpl->tpl_vars['estado']->value == "A caminho")) {?>
						<form method='get' action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/alterarEncomendaInfo2.php?id_encomenda=<?php echo $_smarty_tpl->tpl_vars['encomenda']->value['id'];?>
">
							<input type="hidden" name='id_encomenda' value =<?php echo $_smarty_tpl->tpl_vars['id_encomenda']->value;?>
></input><p>
							<input type='submit' value='Entregue'></input>
						</form>
					<?php } elseif (($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 2 && $_smarty_tpl->tpl_vars['estado']->value == "Por Processar")) {?>
						<form method='get' action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/alterarEncomendaInfo1.php?id_encomenda=<?php echo $_smarty_tpl->tpl_vars['encomenda']->value['id'];?>
">
							<input type='hidden' name='id_encomenda' value =<?php echo $_smarty_tpl->tpl_vars['id_encomenda']->value;?>
></input><p>
							<input class = "botoesNovaEncomenda" type='submit' value='Aceitar'></input>
						</form>
					<?php }?>
					<form><input class = "botoesNovaEncomenda" type="button" value="Voltar" onClick="history.go(-1);return true;" style="float:right; margin-top:10px"></form>
				</div>
			</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }
}
