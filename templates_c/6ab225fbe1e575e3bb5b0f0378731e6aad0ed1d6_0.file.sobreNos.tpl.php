<?php
/* Smarty version 3.1.30, created on 2017-01-18 15:10:11
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/public/sobreNos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587f85532bf2e6_78268572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ab225fbe1e575e3bb5b0f0378731e6aad0ed1d6' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/public/sobreNos.tpl',
      1 => 1484752203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_587f85532bf2e6_78268572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class = "text_box">
				<br>
				<p>Somos 2 estudantes da Faculdade de Engenharia da Universidade do Porto a frequentar o curso Mestrado Integrado em Engenharia Eletrotécnica e de Computadores.</b></p>
				<p>Para o âmbito da Unidade Curricular “Sistemas de Informação Empresarial” criamos este negócio fictício de uma drogaria.</b></p>
				<p>Este site foi efetuado com o objetivo de demonstrar os nossos conhecimentos adquiridos ao longo do semestre.</p>
			</div>
			<div class="img_box_sobre_nos">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/feup.jpg" alt="Programadores do site" style="width:100%;height:100%;">
			</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
