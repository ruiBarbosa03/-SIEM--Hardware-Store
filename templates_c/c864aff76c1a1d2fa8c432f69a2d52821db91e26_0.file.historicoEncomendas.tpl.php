<?php
/* Smarty version 3.1.30, created on 2016-12-27 19:24:09
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/client/historicoEncomendas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5862bfd92ef163_68892096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c864aff76c1a1d2fa8c432f69a2d52821db91e26' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/client/historicoEncomendas.tpl',
      1 => 1482866647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5862bfd92ef163_68892096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="content_box">
		<div class="novaEncomendabox">
		<br>
		<h1>Histórico Encomendas</h1>
			<table>				
				<tr>
				<th>ID Encomenda</th><th>Data</th><th>Preço</th><th>Estado</th>
				</tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['encomendas']->value, 'encomenda');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['encomenda']->value) {
?> 
					<tr>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/client/infoEncomenda.php?id_encomenda=<?php echo $_smarty_tpl->tpl_vars['encomenda']->value['id_encomenda'];?>
"><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['id_encomenda'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['data'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['sum'];?>
 €</td><td><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['estado'];?>
</td>
					</tr> 
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</table>	
			<form><input class ="botoesNovaEncomenda" type="button" value="Voltar" onClick="history.go(-1);return true;" style="float:right; "></form>
		</div>
		
	</div>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
