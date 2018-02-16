<?php
/* Smarty version 3.1.30, created on 2017-01-19 16:06:22
  from "/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/admin/alterarProduto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5880e3fec3a379_12931500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5775d4546288719a57c6c7c3fdfb868e7cd72ccc' => 
    array (
      0 => '/usr/users2/mieec2012/ee12195/public_html/SIEMTrabalho3/templates/admin/alterarProduto.tpl',
      1 => 1484841981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5880e3fec3a379_12931500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class="infoProdutobox" >
					<h1>Alteração do Produto</h1>
				<div class = "formAlteracao">
					<form class = "search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/alterarProduto.php?idProduto=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
						<p>
							<label> Descrição: </label> 
							<input class="input_text" type="text" name="descricao" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['descricao'];?>
" style="width: 270px"</input> 
						</p>         
						<p>
							<label> Marca: </label>
							<input type="text" name="marca" value ="<?php echo $_smarty_tpl->tpl_vars['product']->value['marca'];?>
"  style="width: 100px" >  </input> 
						</p>		        					
						<p>
							<label> Tipo: </label>
							<input type="text" name="tipo" value ="<?php echo $_smarty_tpl->tpl_vars['product']->value['tipo'];?>
"  style="width: 100px" >  </input>
						</p>		        					
						<p>
							<label> Stock: </label>
							<input type="number" name="stock" min='0' value = <?php echo $_smarty_tpl->tpl_vars['product']->value['stock'];?>
  style="width: 50px">  </input> 
						</p>							
						<p>
							<label> Preço:  </label>   
							<input type="number" step="0.01" min="0.01" name="preco" value = <?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
  style="width: 70px"></input> 
						</p>
						<p>
							<label> Promoção: </label>
							<input type="number" step="1" min="0" max="100" name="promo" value = <?php echo $_smarty_tpl->tpl_vars['product']->value['promo'];?>
  style="width: 50px"></input>
						</p>
						<br></br>
							<input class="botoesNovaEncomenda" type="submit" name="cmdsubmit" value="Alterar"></input> </br>
							<input class = "botoesNovaEncomenda2" type="button" value="Voltar" onClick="history.go(-1);return true;">
					</form>	
				</div>
				<div class="img_form_produto">
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
"/>
					<form class="alterar2" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/alterarProdutoImg.php?idProduto=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" method="post" enctype="multipart/form-data">
						<p><label>Escolher ficheiro:<label></p>
						<p>
							<input class="botaoAlterarFoto" type="file" name="fileToUpload" id="fileToUpload">
						</p>
						<p>
							<input class="botaoAlterarFoto" id="botaoFoto" type="submit" value="Alterar Imagem" name="submit">
						</p>
						
					</form>					
				</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
