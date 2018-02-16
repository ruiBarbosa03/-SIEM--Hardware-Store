<?php
/* Smarty version 3.1.30, created on 2017-01-26 09:33:04
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/client/zonaCliente.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5889c2506d97a8_70171879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ee6636b33703a59bfd48e5d1cd9711a1b2ab1cb' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/client/zonaCliente.tpl',
      1 => 1485423165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5889c2506d97a8_70171879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class="cliente_box">
				<div class = "infoCliente">
					<h1><strong><?php echo $_smarty_tpl->tpl_vars['user']->value['nome'];?>
</strong></h1>
					<p><strong>Morada: </strong><?php echo $_smarty_tpl->tpl_vars['user']->value['morada'];?>
</p>
					<p><strong>Telefone: </strong><?php echo $_smarty_tpl->tpl_vars['user']->value['telefone'];?>
</p>
					<p><strong>Email: </strong><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
				</div>
				<div class = "opcoesCliente">
					<br>
					<br>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/client/gestaoInfoCliente.php">Gestão de Informação</a></p>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/client/historicoEncomendas.php">Histórico de Encomendas</a></p>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/client/novaEncomenda.php">Nova Encomenda</a></p>					
				</div>
			</div>
			<div class = "infoClienteTabela">
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
				<div id="pagination" style="margin-top:5%">
					<?php if (($_smarty_tpl->tpl_vars['page']->value != 0)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/client/zonaCliente.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><i class="fa fa-arrow-left"></i></a> 
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['nr_paginas']->value+1;?>
						
					<?php if ((($_smarty_tpl->tpl_vars['page']->value+1)*$_smarty_tpl->tpl_vars['page_size']->value < $_smarty_tpl->tpl_vars['total']->value)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/client/zonaCliente.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><i class="fa fa-arrow-right"></i></a>
					<?php }?>
				</div>	
			</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
