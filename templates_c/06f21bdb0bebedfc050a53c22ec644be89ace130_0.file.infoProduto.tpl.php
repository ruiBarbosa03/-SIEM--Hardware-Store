<?php
/* Smarty version 3.1.30, created on 2016-12-27 19:10:03
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/public/infoProduto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5862bc8ba00ab6_29687072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06f21bdb0bebedfc050a53c22ec644be89ace130' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/public/infoProduto.tpl',
      1 => 1482865800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5862bc8ba00ab6_29687072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="content_box">
			<div class ="infoProdutobox">
				<?php if ((count($_smarty_tpl->tpl_vars['product']->value)) > 1) {?>
					<h1><?php echo $_smarty_tpl->tpl_vars['product']->value['descricao'];?>
</h1>
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
"/>
					<p><strong>Marca: </strong><?php echo $_smarty_tpl->tpl_vars['product']->value['marca'];?>
</p>
					<p><strong>Tipo:  </strong><?php echo $_smarty_tpl->tpl_vars['product']->value['tipo'];?>
</p>
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['display'];
$_prefixVariable1=ob_get_clean();
if (($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 2) && ($_prefixVariable1)) {?>
						<p><strong>Stock: </strong><?php echo $_smarty_tpl->tpl_vars['product']->value['stock'];?>
</p>
					<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['display'];
$_prefixVariable2=ob_get_clean();
if (!$_prefixVariable2) {?>
						<p id = "preco"><strong>Produto Indisponível</strong>
					<?php }}?>
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['display'];
$_prefixVariable3=ob_get_clean();
if (($_prefixVariable3)) {?>
						<p id = "preco"><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
€</p>
					<?php }?>
					<br>
				<?php }?>
				<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['display'];
$_prefixVariable4=ob_get_clean();
if ((($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 1) || ($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 0)) && ($_prefixVariable4)) {?>
					<form method='post' action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/adicionarCarrinho.php">
					<p><strong>Quantidade: </strong><input type='number' min='1' value = '1' name='qt'></input></p><p>
					<input type="hidden" name='id_Produto' value =<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
></input><p>
					<input style="margin-top: 5%" class="botoesNovaEncomenda" type='submit' value='Adicionar Carrinho'></input>
					</form>
				<?php }?>	
				<?php if (($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 2)) {?>
					<form id="AltEl" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/alterarProduto.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
						<input type='submit' value='Alterar'></input>
					</form>
					<form id="AltEl" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/eliminarProduto.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
						<input type='submit' value='Eliminar'></input>
					</form>
				<?php }?>
			</div> 
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
