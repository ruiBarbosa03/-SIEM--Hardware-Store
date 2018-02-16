<?php
/* Smarty version 3.1.30, created on 2016-12-24 01:49:21
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/public/contactos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585dd42100dfb6_28856305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd599f7f3285240b8dcaa1e17de4c24adea624b29' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/public/contactos.tpl',
      1 => 1482525738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_585dd42100dfb6_28856305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class = "contactos_box">
				<h1>Contactos</h1>
				<table>
				  <tr>
					<td><i class="fa fa-phone fa-3x" aria-hidden="true"></i>/<i class="fa fa-mobile fa-3x" aria-hidden="true"></i></td>
					<td>+351 22 123 45 67/ +351 91 234 56 78</td> 
				  </tr>
				  <tr>
					<td><i class="fa fa-envelope-o fa-3x"></i> </td>
					<td>info@lojadocanto.pt</td> 
				  </tr>
				  <tr>
					<td><i class="fa fa-map-marker fa-3x"></i></td>
					<td>Rua da Beira, 123, Paranhos</td> 
				  </tr>
				</table>
			</div>
			
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
