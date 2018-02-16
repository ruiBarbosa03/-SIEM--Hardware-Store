<?php
/* Smarty version 3.1.30, created on 2016-12-05 11:32:02
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/apresentacao/initial.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58455032afffa5_84492359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95900d9a2d620849904ee6d04267dd1ecee88c9' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/apresentacao/initial.tpl',
      1 => 1480937053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_initial.tpl' => 1,
    'file:common/footer_apresentacao.tpl' => 1,
  ),
),false)) {
function content_58455032afffa5_84492359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_initial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<div class = "Logo_Loja" align = "center">
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/apresentacao.php">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/Logo_empresa.png" height = 350px align = "center">
			</a>
		</div>

		<p align = "center"> A melhor solução <br> já ao virar da esquina </p>

		<div class = "Botoes_Acesso" align = "center">
			<!-- Criar lista para os vários botões e editar Login/Registo da mesma forma e Entrar de forma diferente -->
			
			<h2> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/public/home.php" >  Entrar  </a> 	</h2>
			
			<ul id = "Menu_Inicial">
				<li> <a href ="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/validacao/login.php" > Login    </a> 	</li>
				<li> <a href ="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/validacao/registo.php" > Registar </a>  	</li>
			</ul>
		</div> 
	
<?php $_smarty_tpl->_subTemplateRender("file:common/footer_apresentacao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
