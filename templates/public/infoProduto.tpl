{include file='common/header.tpl'}	
		<div class="content_box">
			<div class ="infoProdutobox">
				{if (count($product)) > 1}
				<div class="Produto_info">
					<h1>{$product.descricao}</h1>
					<p><strong>Marca: </strong>{$product.marca}</p>
					<p><strong>Tipo:  </strong>{$product.tipo}</p>
					{if ($AUTENTICADO==2) AND ({$product.display})}
						<p><strong>Stock: </strong>{$product.stock}</p>
					{elseif !{$product.display}}
						<p id = "indisponivel"><strong>Produto Indisponível</strong>
					{/if}
					{if ({$product.display})}
						{if ($product.promo > 0)}
							<p id = "preco_rasurado">{$product.preco}€</p>
							<p data-preco="{number_format((float)$product.preco*(100 - $product.promo)/100, 2, '.', '')}" id = "preco">{number_format((float)$product.preco*(100 - $product.promo)/100, 2, '.', '')}€</p>
						{else}
							<p data-preco="{number_format((float)$product.preco*(100 - $product.promo)/100, 2, '.', '')}" id = "preco">{$product.preco}€</p>
						{/if}
					{/if}
					<br>
				</div>
				<div class ="infoProduto_img">
					<img  src="{$img_src}"/>
				</div>
				{/if}
				{if (($AUTENTICADO ==1) OR ($AUTENTICADO ==0))  AND ({$product.display})}
					<form method='post' class="formulario" action="{$BASE_URL}actions/cart/adicionarCarrinho.php">
						<p><strong>Quantidade: </strong><input class="valor" type='number' min='1' value = '1' name='qt'></input></p><p>
						<input type="hidden" name='id_Produto' value ={$product.id}></input><p>
						<p>Total: <span class="total">{number_format((float)$product.preco*(100 - $product.promo)/100, 2, '.', '')}</span> €</p>
						<input style="margin-top: 5%; margin-bottom: 30px;" class="botoesNovaEncomenda" type='submit' value='Adicionar Carrinho'></input>
					</form>
				{/if}	
				{if ($AUTENTICADO == 2)}
					<form class="Alterar_botao" id="AltEl" method="post" action="{$BASE_URL}pages/admin/alterarProduto.php?id={$product.id}">
						<input class="botoesNovaEncomenda" type='submit' value='Alterar'></input>
					</form>
					<form id="AltEl" method="post" action="{$BASE_URL}actions/products/eliminarProduto.php?id={$product.id}">
						<input class="botoesNovaEncomenda" type='submit' value='Eliminar'></input>
					</form>
				{/if}
			</div> 
		</div>
		<script src="{$BASE_URL}javascript/calculaTotal.js"></script>
{include file='common/footer.tpl'}