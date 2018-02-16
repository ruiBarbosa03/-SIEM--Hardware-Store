{include file='common/header.tpl'}
		<div class="content_box">
			<div class="infoProdutobox" >
					<h1>Alteração do Produto</h1>
				<div class = "formAlteracao">
					<form class = "search" method="post" action="{$BASE_URL}actions/products/alterarProduto.php?idProduto={$product.id}">
						<p>
							<label> Descrição: </label> 
							<input class="input_text" type="text" name="descricao" value="{$product.descricao}" style="width: 270px"</input> 
						</p>         
						<p>
							<label> Marca: </label>
							<input type="text" name="marca" value ="{$product.marca}"  style="width: 100px" >  </input> 
						</p>		        					
						<p>
							<label> Tipo: </label>
							<input type="text" name="tipo" value ="{$product.tipo}"  style="width: 100px" >  </input>
						</p>		        					
						<p>
							<label> Stock: </label>
							<input type="number" name="stock" min='0' value = {$product.stock}  style="width: 50px">  </input> 
						</p>							
						<p>
							<label> Preço:  </label>   
							<input type="number" step="0.01" min="0.01" name="preco" value = {$product.preco}  style="width: 70px"></input> 
						</p>
						<p>
							<label> Promoção: </label>
							<input type="number" step="1" min="0" max="100" name="promo" value = {$product.promo}  style="width: 50px"></input>
						</p>
						<br></br>
							<input class="botoesNovaEncomenda" type="submit" name="cmdsubmit" value="Alterar"></input> </br>
							<input class = "botoesNovaEncomenda2" type="button" value="Voltar" onClick="history.go(-1);return true;">
					</form>	
				</div>
				<div class="img_form_produto">
					<img src="{$img_src}"/>
					<form class="alterar2" action="{$BASE_URL}actions/products/alterarProdutoImg.php?idProduto={$product.id}" method="post" enctype="multipart/form-data">
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
{include file='common/footer.tpl'}