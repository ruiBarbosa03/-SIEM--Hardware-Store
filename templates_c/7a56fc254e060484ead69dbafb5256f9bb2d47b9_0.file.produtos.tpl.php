<?php
/* Smarty version 3.1.30, created on 2017-01-26 14:19:02
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/public/produtos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a05564694c6_19114228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a56fc254e060484ead69dbafb5256f9bb2d47b9' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/public/produtos.tpl',
      1 => 1485440338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_588a05564694c6_19114228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class="pesquisa_box">
				<h2>Produtos</h2>
				<form method='get' action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/produtos.php" name="FiltroPesquisa">				
					<p>Descrição: </p> <input id="descricaoSearch" type='text' name='descricao' value = "<?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>
"></input><br>					
					<p>Marca: </p>
					<select id="marca_select" name="marca">
						<option value="">--</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['brand']->value['marca'] == $_smarty_tpl->tpl_vars['marca']->value) {?>
								<option selected value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value['marca'];?>
</option>
							<?php } else { ?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value['marca'];?>
</option>
							<?php }?>
							
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
					</select>
					<p> Tipo: </p>
					<select id="tipo_select" name="tipo">
						<option value="">--</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['type']->value['tipo'] == $_smarty_tpl->tpl_vars['tipo']->value) {?>
								<option selected value="<?php echo $_smarty_tpl->tpl_vars['type']->value['tipo'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['tipo'];?>
</option>
							<?php } else { ?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['tipo'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['tipo'];?>
</option>
							<?php }?>
								
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
					</select>
					<br>
					<input type='submit' value='Pesquisar'></input>					
					<?php if (($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 2)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/adicionarProduto.php"><input type='button' value='Adicionar Produto'>  </input> </a>
					<?php }?>
				</form>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/produtos.php"> <button>Limpar Filtros</button></a>
			</div>
			<section class = "mostrar_produtos">
			<?php if ((count($_smarty_tpl->tpl_vars['products']->value) == 0)) {?>
				<p class ="produtos_notFound"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Não foram encontrados produtos para esse filtro. Tente novamente</p>
			<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
					<article>
						<div class="produto_informacao">
							<div class="produto_img">
								<?php $_smarty_tpl->_assignInScope('img_src', getImagePath($_smarty_tpl->tpl_vars['product']->value['id'],$_smarty_tpl->tpl_vars['BASE_DIR']->value,$_smarty_tpl->tpl_vars['BASE_URL']->value));
?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/infoProduto.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
'/></a>
							</div>
							<div class="produto_descricao">
								<p id = "descricao"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/infoProduto.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['descricao'];?>
</a></p>
								<p id = "marca"><?php echo $_smarty_tpl->tpl_vars['product']->value['marca'];?>
 | <?php echo $_smarty_tpl->tpl_vars['product']->value['tipo'];?>
 </p>
								<?php if (($_smarty_tpl->tpl_vars['product']->value['promo'] > 0)) {?>
									<p id = "preco_rasurado"><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
€</p>
									<p id = "preco"><?php echo number_format((float)$_smarty_tpl->tpl_vars['product']->value['preco']*(100-$_smarty_tpl->tpl_vars['product']->value['promo'])/100,2,'.','');?>
€</p>
								<?php } else { ?>
									<p id = "preco"><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
€</p>
								<?php }?>
								
								<?php if ((($_smarty_tpl->tpl_vars['AUTENTICADO']->value == 2))) {?>
									<p style="margin-bottom:20px">Stock:<?php echo $_smarty_tpl->tpl_vars['product']->value['stock'];?>
</p>
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
										<input  type='submit' value='Eliminar'></input>
									</form>
								<?php }?>
							</div>
							<div class="produto_promo">
								<?php if (($_smarty_tpl->tpl_vars['product']->value['promo'] > 0)) {?>
									<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/promo_logo.png" />
								<?php }?>
							</div>
						</div>
					</article>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<div id="pagination">
					<?php if (($_smarty_tpl->tpl_vars['page']->value != 0)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/produtos.php?descricao=<?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>
&marca=<?php echo $_smarty_tpl->tpl_vars['marca']->value;?>
&tipo=<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><i class="fa fa-arrow-left"></i></a> 
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['nr_paginas']->value;?>
					
					<?php if ((($_smarty_tpl->tpl_vars['page']->value+1)*$_smarty_tpl->tpl_vars['page_size']->value < $_smarty_tpl->tpl_vars['total']->value)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/produtos.php?descricao=<?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>
&marca=<?php echo $_smarty_tpl->tpl_vars['marca']->value;?>
&tipo=<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><i class="fa fa-arrow-right"></i></a>
					<?php }?>
				
				</div>				
			  </section>
		</div>
		<?php echo '<script'; ?>
>autenticado = <?php echo $_smarty_tpl->tpl_vars['AUTENTICADO']->value;
echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/searchProducts.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
