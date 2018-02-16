<?php
/* Smarty version 3.1.30, created on 2016-12-27 19:27:20
  from "/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/admin/alterarProduto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5862c098a68983_97669835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4afbdd9f936a306f02c45c3b771d0f83f140705' => 
    array (
      0 => '/usr/users2/mieec2012/ee12014/public_html/SIEMTrabalho3/templates/admin/alterarProduto.tpl',
      1 => 1482866839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5862c098a68983_97669835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="content_box">
			<div class="infoProdutobox" style="height: auto">
					<h1>Alteração do Produto</h1>
				<div class = "formAlteracao">
					<form class = "search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/alterarProduto.php?idProduto=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
						<p>
							<label> Descrição: </label> 
							<input type="text" name="descricao" value=<?php echo $_smarty_tpl->tpl_vars['product']->value['descricao'];?>
 </input> 
						</p>         
						<p>
							<label> Marca: </label>
							<input type="text" name="marca" value =<?php echo $_smarty_tpl->tpl_vars['product']->value['marca'];?>
 >  </input> 
						</p>		        					
						<p>
							<label> Tipo: </label>
							<input type="text" name="tipo" value =<?php echo $_smarty_tpl->tpl_vars['product']->value['tipo'];?>
 >  </input>
						</p>		        					
						<p>
							<label> Stock: </label>
							<input type="number" name="stock" min='0' value = <?php echo $_smarty_tpl->tpl_vars['product']->value['stock'];?>
 >  </input> 
						</p>							
						<p>
							<label> Preço:  </label>   
							<input type="number" step="0.01" min="0.01" name="preco" value = <?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
 ></input> 
						</p>
						<br></br>
							<input class="botoesNovaEncomenda" type="submit" name="cmdsubmit" value="Mudar"></input> </br>
							<input class = "botoesNovaEncomenda2" type="button" value="Voltar" onClick="history.go(-1);return true;">
					</form>	
					<form class="search2" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/alterarProdutoImg.php?idProduto=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" method="post" enctype="multipart/form-data">
						<p>
							<label>Escolher ficheiro:<label>
							<input type="file" name="fileToUpload" id="fileToUpload">
						</p>
						<p>
							<input style="width:112px; margin-bottom: 5%" type="submit" value="Upload Image" name="submit">
						</p>
						<img src="<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
"/>
					</form>					
				</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
