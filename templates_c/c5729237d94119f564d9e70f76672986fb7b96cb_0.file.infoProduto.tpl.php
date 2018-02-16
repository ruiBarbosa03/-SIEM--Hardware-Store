<?php
/* Smarty version 3.1.30, created on 2017-01-19 16:11:43
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/public/infoProduto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5880e53f2dc190_54805816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5729237d94119f564d9e70f76672986fb7b96cb' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/public/infoProduto.tpl',
      1 => 1484842301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5880e53f2dc190_54805816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="content_box">
			<div class ="infoProdutobox">
				<?php if ((count($_smarty_tpl->tpl_vars['product']->value)) > 1) {?>
				<div class="Produto_info">
					<h1><?php echo $_smarty_tpl->tpl_vars['product']->value['descricao'];?>
</h1>
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
						<p id = "indisponivel"><strong>Produto Indisponível</strong>
					<?php }}?>
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['display'];
$_prefixVariable3=ob_get_clean();
if (($_prefixVariable3)) {?>
						<?php if (($_smarty_tpl->tpl_vars['product']->value['promo'] > 0)) {?>
							<p id = "preco_rasurado"><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
€</p>
							<p data-preco="<?php echo number_format((float)$_smarty_tpl->tpl_vars['product']->value['preco']*(100-$_smarty_tpl->tpl_vars['product']->value['promo'])/100,2,'.','');?>
" id = "preco"><?php echo number_format((float)$_smarty_tpl->tpl_vars['product']->value['preco']*(100-$_smarty_tpl->tpl_vars['product']->value['promo'])/100,2,'.','');?>
€</p>
						<?php } else { ?>
							<p data-preco="<?php echo number_format((float)$_smarty_tpl->tpl_vars['product']->value['preco']*(100-$_smarty_tpl->tpl_vars['product']->value['promo'])/100,2,'.','');?>
" id = "preco"><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
€</p>
						<?php }?>
					<?php }?>
					<br>
				</div>
				<div class ="infoProduto_img">
					<img  src="<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
"/>
				</div>
				<?php }?>
				<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['display'];
$_prefixVariable4=ob_get_clean();
if ((($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 1) || ($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 0)) && ($_prefixVariable4)) {?>
					<form method='post' class="formulario" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/adicionarCarrinho.php">
						<p><strong>Quantidade: </strong><input class="valor" type='number' min='1' value = '1' name='qt'></input></p><p>
						<input type="hidden" name='id_Produto' value =<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
></input><p>
						<p>Total: <span class="total"><?php echo number_format((float)$_smarty_tpl->tpl_vars['product']->value['preco']*(100-$_smarty_tpl->tpl_vars['product']->value['promo'])/100,2,'.','');?>
</span> €</p>
						<input style="margin-top: 5%; margin-bottom: 30px;" class="botoesNovaEncomenda" type='submit' value='Adicionar Carrinho'></input>
					</form>
				<?php }?>	
				<?php if (($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 2)) {?>
					<form class="Alterar_botao" id="AltEl" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/alterarProduto.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
						<input class="botoesNovaEncomenda" type='submit' value='Alterar'></input>
					</form>
					<form id="AltEl" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/eliminarProduto.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
						<input class="botoesNovaEncomenda" type='submit' value='Eliminar'></input>
					</form>
				<?php }?>
			</div> 
		</div>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/calculaTotal.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
