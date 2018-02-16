<?php
/* Smarty version 3.1.30, created on 2017-01-26 09:18:12
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/apresentacao/initial.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5889bed43c1a17_05617607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee3af35fea381d51f56eef029638f0f0a7449859' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/apresentacao/initial.tpl',
      1 => 1485422287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_initial.tpl' => 1,
    'file:common/footer_apresentacao.tpl' => 1,
  ),
),false)) {
function content_5889bed43c1a17_05617607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_initial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<div class = "Logo_Loja" align = "center">
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/apresentacao/apresentacao.php">
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
