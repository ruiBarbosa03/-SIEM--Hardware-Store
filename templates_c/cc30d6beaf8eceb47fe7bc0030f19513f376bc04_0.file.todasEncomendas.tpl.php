<?php
/* Smarty version 3.1.30, created on 2016-12-27 19:31:42
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/admin/todasEncomendas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5862c19ec94a30_16492328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc30d6beaf8eceb47fe7bc0030f19513f376bc04' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/admin/todasEncomendas.tpl',
      1 => 1482867102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5862c19ec94a30_16492328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class="novaEncomendabox" style="height:auto">
				<h1> Encomendas </h1>
				<table>				
					<tr>
						<th>ID Encomenda</th><th>Nome Cliente</th><th>Data</th><th>Estado</th>
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
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/infoCliente.php?id_cliente=<?php echo $_smarty_tpl->tpl_vars['encomenda']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['nome'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['data'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['encomenda']->value['estado'];?>
</td>
						</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>
			
				<div id="pagination" style="margin-top:5%">
					<?php if (($_smarty_tpl->tpl_vars['page']->value != 0)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/todasEncomendas.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><i class="fa fa-arrow-left"></i></a> 
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
					
					<?php if ((($_smarty_tpl->tpl_vars['page']->value+1)*$_smarty_tpl->tpl_vars['page_size']->value < $_smarty_tpl->tpl_vars['total']->value)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/todasEncomendas.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><i class="fa fa-arrow-right"></i></a>
					<?php }?>
				</div>					
			</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }
}
