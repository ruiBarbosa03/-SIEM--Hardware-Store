<?php
/* Smarty version 3.1.30, created on 2017-01-20 09:44:09
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/client/gestaoInfoCliente.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5881dbe99d1b45_47759315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69799f1c648b51780a8dcf63bf0cce5364fed396' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/client/gestaoInfoCliente.tpl',
      1 => 1484905441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5881dbe99d1b45_47759315 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class="gestaoInformacaoCliente">
				<div class = "gestaoInfoCliente">
					<h1><?php echo $_smarty_tpl->tpl_vars['user']->value['nome'];?>
</h1>
					<h2> Gestão de Informação </h2>
				</div>
				<div class="clienteInfo">
					<div class = "gestaoInfoForm">
						<form method="post" name="myForm" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/gestaoInfo.php">
							<p margin-top="20px" margin-bottom="20px"><label> Morada: </label><input type="text" name="morada" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['morada'];?>
" >  </p><br>
							<p margin-bottom="20px">                  <label> Telefone: </label><input type="text" name="telefone" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['telefone'];?>
>  </p><br>
							<p margin-bottom="20px">                  <label> Email: </label><input type="text" name="email" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
> </p> <br>
							<p margin-bottom="20px">                  <label> Nova Password: </label><input type='password' name="novaPass" ></p><br>
							<p margin-bottom="20px">                  <label> Password: </label><input type='password' name="Pass_antiga" ></p><br>
							<p margin-bottom="20px">            <input class="botoesNovaEncomenda" type="submit" name="cmdsubmit" value="Mudar" style="float: left;margin-left: 60px;"></input>&nbsp;</p><br>
							<input class = "botoesNovaEncomenda" type="button" value="Voltar" onClick="history.go(-1);return true;" style="float: left; margin-left: 60px;">
						</form>	
					</div>
					<div class="clienteImg">
						<?php $_smarty_tpl->_assignInScope('img_src', getImagePath($_smarty_tpl->tpl_vars['user']->value['id'],$_smarty_tpl->tpl_vars['BASE_DIR']->value,$_smarty_tpl->tpl_vars['BASE_URL']->value));
?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
" />
						<form class="alterar2" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/alterarClienteImg.php?idCliente=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" method="post" enctype="multipart/form-data" style="margin-top:10px;">
							<p><label>Escolher ficheiro:<label></p>
							<p>
								<input class="botaoAlterarFoto" type="file" name="fileToUpload" id="fileToUpload">
							</p>
							<p>
								<input class="botaoAlterarFoto" id="botaoFoto" type="submit" value="Alterar Imagem" name="submit" style="width: 120px;">
							</p>	
						</form>	
					</div>
				</div>
			</div>
		</div>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
