<?php
/* Smarty version 3.1.30, created on 2017-01-19 14:12:01
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/public/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5880c93192e655_72342488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8391b1f850b9ae106607cbee9adf269bb76165e' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/public/home.tpl',
      1 => 1484835102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5880c93192e655_72342488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
		    <div class = "text_box">
				<br>
				<br>
					<h1>PROMOÇÃO!</h1>
					<br>
					<br>
					<h2>Os seguintes produtos encontram-se com desconto</h2>
					<br>
					
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produtcs_promo']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						
						<h2 class="produto_promo_descricao"> <?php echo $_smarty_tpl->tpl_vars['product']->value['descricao'];?>
 </h2>
						<h2 class="produto_info_promo">Promoção <?php echo $_smarty_tpl->tpl_vars['product']->value['promo'];?>
 %</h2>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					
			</div>
			<div class="img_box">
				<div class="display_img" style="max-width:800px">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produtcs_promo']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						<?php $_smarty_tpl->_assignInScope('img_src', getImagePath($_smarty_tpl->tpl_vars['product']->value['id'],$_smarty_tpl->tpl_vars['BASE_DIR']->value,$_smarty_tpl->tpl_vars['BASE_URL']->value));
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/infoProduto.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
							<img class="mySlides" src="<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
" style="width:100%; height:98%">
						</a>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<div class="section_display" style="width:100%">
							<div class="left_arrow" onclick="plusDivs(-1)">&#10094;</div>
							<div class="right_arrow" onclick="plusDivs(1)">&#10095;</div>
						</div>
					
				</div>
			</div>
		</div>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/changeImagesHome.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
