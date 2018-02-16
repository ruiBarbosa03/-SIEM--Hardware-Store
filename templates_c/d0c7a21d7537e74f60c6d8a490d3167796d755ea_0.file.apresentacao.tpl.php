<?php
/* Smarty version 3.1.30, created on 2016-11-28 12:35:10
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/apresentacao/apresentacao.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583c247ed30302_14680419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0c7a21d7537e74f60c6d8a490d3167796d755ea' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/apresentacao/apresentacao.tpl',
      1 => 1479731145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_apresentacao.tpl' => 1,
    'file:common/footer_apresentacao.tpl' => 1,
  ),
),false)) {
function content_583c247ed30302_14680419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_apresentacao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="Presentation">
		<h1> Loja do Canto </h1>
		<p> 
			<br> Este é um projeto para a UC de Sistemas de Informação Empresarial.	
			<br> Consiste numa loja virtual onde o utilizador se pode registar, consultar produtos e efetuar encomendas.
			<br> O administrador pode adicionar, modificar e eliminar produtos bem como gerir encomendas.
		</p>	
			<br>
			<br> <strong> Dados para utilizador: </strong>
			<br> Nome: amrestivo
			<br> Password: password
			<br>
			<br> <strong> Dados para administrador: </strong>
			<br> Nome: admin
			<br> Password: admin
				
			<br>
			<br> O projeto foi realizado por Francisco Ferreira e Rui Barbosa.
			
		<h2> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/apresentacao/initial.php"> Entrar </a> </h2>
		
	</div>
	<div class="Info_Autores" align="right">
		
		<div class = "Img_RB">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/RuiBarbosa.jpg"        height=150px>
			<p> Rui Barbosa         <br> ee12014@fe.up.pt </p>
		</div>
		
		<div class = "Img_FF">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/FranciscoFerreira.jpg" height=150px>
			<p> Francisco Ferreira 	<br> ee12195@fe.up.pt </p>
		</div>

		<div class = "downloads">
			<a href=#><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/html.jpg" alt="HTML" height=40px></a>
			<a href=#><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/css.png"  alt="CSS"  height=40px></a>
			<a href=#><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/pp.png"   alt="PP"   height=40px></a>
		</div>
	</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer_apresentacao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
