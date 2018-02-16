<?php
/* Smarty version 3.1.30, created on 2016-12-25 19:20:24
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/admin/pesquisaClientes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58601bf8939de4_31083507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '490162c41b629653a2839f9026a6fe7398cda83c' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/admin/pesquisaClientes.tpl',
      1 => 1481889860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_58601bf8939de4_31083507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class="pesquisa_box">
				<h2>Clientes</h2>
				<form method='get' action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/pesquisaClientes.php">

					<p>Nome: </p><input type='text' name='name' value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
"></input><p>
					
					<p>Nome de Utilizador: </p><input type='text' name='username' value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
"></input><p>

					<p>Email: </p><input type='text' name='email' value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"></input><p>
					
					<p>Telefone: </p><input type='text' name='phone' value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value;?>
"></input><p>
					
					<p>Morada: </p><input type='text' name='morada' value="<?php echo $_smarty_tpl->tpl_vars['morada']->value;?>
"></input>
					
					<input type='submit' value='Pesquisar'></input>

				</form>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/pesquisaClientes.php"> <button>Limpar Filtros</button></a>
			</div>
			<div class = "mostrar_produtos">
				<table>		
					<tr>
						<th>Código</th><th>Nome</th><th>Username</th><th>Morada</th><th>Telefone</th><th>Email</th>
					</tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
						<tr>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/infoCliente.php?id_cliente=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['nome'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['morada'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['telefone'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
						</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>
				<div id="pagination">
					<?php if (($_smarty_tpl->tpl_vars['page']->value != 0)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/pesquisaClientes.php?name=<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
&email=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
&phone=<?php echo $_smarty_tpl->tpl_vars['telefone']->value;?>
&morada=<?php echo $_smarty_tpl->tpl_vars['morada']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><i class="fa fa-arrow-left"></i></a> 
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
					
					<?php if ((($_smarty_tpl->tpl_vars['page']->value+1)*$_smarty_tpl->tpl_vars['page_size']->value < $_smarty_tpl->tpl_vars['total']->value)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/pesquisaClientes.php?name=<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
&email=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
&phone=<?php echo $_smarty_tpl->tpl_vars['telefone']->value;?>
&morada=<?php echo $_smarty_tpl->tpl_vars['morada']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><i class="fa fa-arrow-right"></i></a>
					<?php }?>
				</div>	
			</div>
		</div>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
