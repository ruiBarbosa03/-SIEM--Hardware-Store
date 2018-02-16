<?php
/* Smarty version 3.1.30, created on 2017-01-19 17:52:43
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/admin/adicionarProduto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5880fcebb38471_56821952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c17baea94e9de380ccfbdac5dd4611e88fbd08e6' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/admin/adicionarProduto.tpl',
      1 => 1484848361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5880fcebb38471_56821952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="content_box">
			<div class = "infoProdutobox" style="height: auto">
				<h1>Adicionar Produto</h1>
				<div class = "formAlteracao" >	
					<form class = "search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/adicionarProduto.php"  enctype="multipart/form-data">
						<p>
							<label> Descrição: </label>
							<input type="text" name="descricao">  </input>
						</p>
						<p>
							<label> Marca: </label>
							<input type="text" name="marca" >  </input>
						</p> 
						<p> 
							<label> Tipo: </label>
							<input type="text" name="tipo">  </input> 
						</p>
						<p>
							<label> Stock: </label>
							<input type="number" min='0' name="stock" >  </input> 
						</p>
						<p>
							<label> Preço: </label>
							<input type="number" step="0.01" min="0.01" name="preco" ></input> 
						</p>
						<p>
							<label> Escolher foto: </label>
							<input type="file" name="fileToUpload" id="fileToUpload"> 
						</p>
						<input class = "botoesNovaEncomenda"  type="submit" name="cmdsubmit" value="Adicionar"></input> </br>
						<input class = "botoesNovaEncomenda2" type="button" value="Voltar" onClick="history.go(-1);return true;">
					</form>
				</div>
				<div class="formAlteracao_img" id="image-holder"><p>A imagem escolhida será mostrada nesta secção</p></div>
				
			</div>
		</div>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/displayImg.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
