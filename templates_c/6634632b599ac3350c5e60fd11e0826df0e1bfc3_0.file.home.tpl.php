<?php
/* Smarty version 3.1.30, created on 2016-12-25 18:49:28
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/public/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586014b8e79694_03277822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6634632b599ac3350c5e60fd11e0826df0e1bfc3' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/public/home.tpl',
      1 => 1481817568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_586014b8e79694_03277822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/infoProduto.php?id=8">
		  <div class = "text_box">
				<br>
				<br>
					<h1>PROMOÇÃO!</h1>
					<br>
					<br>
					<br>
					<h2>Nova TurboCut C3000 por apenas 149.99€ </h2>
					<br>
					<h2>110 cv de potência!! </h2>
					<br>
					<h2>Cortar a relva nunca foi tão rápido! </h2>
				
			</div>
		</a>
			<div class="img_box">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/infoProduto.php?id=8">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/lawnmowercutter-lawnmower-600-42914.jpg" alt="Cortador de Relva" style="width:39.95%;height:100%;">
				</a>
			</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
