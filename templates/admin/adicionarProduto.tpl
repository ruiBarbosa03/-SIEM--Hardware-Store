{include file='common/header.tpl'}	
		<div class="content_box">
			<div class = "infoProdutobox" style="height: auto">
				<h1>Adicionar Produto</h1>
				<div class = "formAlteracao" >	
					<form class = "search" method="post" action="{$BASE_URL}actions/products/adicionarProduto.php"  enctype="multipart/form-data">
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
		<script src="{$BASE_URL}javascript/displayImg.js"></script>
{include file='common/footer.tpl'}
