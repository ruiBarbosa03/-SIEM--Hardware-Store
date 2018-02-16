{include file='common/header.tpl'}
		<div class="content_box">
			<div class="pesquisa_box">
				<h2>Produtos</h2>
				<form method='get' action="{$BASE_URL}pages/public/produtos.php" name="FiltroPesquisa">				
					<p>Descrição: </p> <input id="descricaoSearch" type='text' name='descricao' value = "{$descricao}"></input><br>					
					<p>Marca: </p>
					<select id="marca_select" name="marca">
						<option value="">--</option>
						{foreach $brands as $brand}
							{if $brand['marca'] == $marca}
								<option selected value="{$brand['marca']}">{$brand['marca']}</option>
							{else}
								<option value="{$brand['marca']}">{$brand['marca']}</option>
							{/if}
							
						{/foreach}	
					</select>
					<p> Tipo: </p>
					<select id="tipo_select" name="tipo">
						<option value="">--</option>
						{foreach $types as $type}
							{if $type['tipo'] == $tipo}
								<option selected value="{$type['tipo']}">{$type['tipo']}</option>
							{else}
								<option value="{$type['tipo']}">{$type['tipo']}</option>
							{/if}
								
						{/foreach}	
					</select>
					<br>
					<input type='submit' value='Pesquisar'></input>					
					{if ($AUTENTICADO == 2)}
						<a href="{$BASE_URL}pages/admin/adicionarProduto.php"><input type='button' value='Adicionar Produto'>  </input> </a>
					{/if}
				</form>
				<a href="{$BASE_URL}pages/public/produtos.php"> <button>Limpar Filtros</button></a>
			</div>
			<section class = "mostrar_produtos">
			{if (count($products) == 0)}
				<p class ="produtos_notFound"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Não foram encontrados produtos para esse filtro. Tente novamente</p>
			{/if}
				{foreach $products as $product}
					<article>
						<div class="produto_informacao">
							<div class="produto_img">
								{$img_src = getImagePath($product.id,$BASE_DIR, $BASE_URL )}
								<a href="{$BASE_URL}pages/public/infoProduto.php?id={$product.id}"><img src='{$img_src}'/></a>
							</div>
							<div class="produto_descricao">
								<p id = "descricao"><a href="{$BASE_URL}pages/public/infoProduto.php?id={$product.id}">{$product.descricao}</a></p>
								<p id = "marca">{$product.marca} | {$product.tipo} </p>
								{if ($product.promo > 0)}
									<p id = "preco_rasurado">{$product.preco}€</p>
									<p id = "preco">{number_format((float)$product.preco*(100 - $product.promo)/100, 2, '.', '')}€</p>
								{else}
									<p id = "preco">{$product.preco}€</p>
								{/if}
								
								{if (($AUTENTICADO == 2))}
									<p style="margin-bottom:20px">Stock:{$product.stock}</p>
								{/if}
								{if ($AUTENTICADO == 2)}
									<form id="AltEl" method="post" action="{$BASE_URL}pages/admin/alterarProduto.php?id={$product.id}">
										<input type='submit' value='Alterar'></input>
									</form>
									<form id="AltEl" method="post" action="{$BASE_URL}actions/products/eliminarProduto.php?id={$product.id}">
										<input  type='submit' value='Eliminar'></input>
									</form>
								{/if}
							</div>
							<div class="produto_promo">
								{if ($product.promo > 0)}
									<img src="{$BASE_URL}images/promo_logo.png" />
								{/if}
							</div>
						</div>
					</article>
				{/foreach}
				<div id="pagination">
					{if ($page != 0)}
						<a href="{$BASE_URL}pages/public/produtos.php?descricao={$descricao}&marca={$marca}&tipo={$tipo}&page={$page-1}"><i class="fa fa-arrow-left"></i></a> 
					{/if}
					{$page+1}/{$nr_paginas}					
					{if (($page + 1) * $page_size < $total) }
						<a href="{$BASE_URL}pages/public/produtos.php?descricao={$descricao}&marca={$marca}&tipo={$tipo}&page={$page+1}"><i class="fa fa-arrow-right"></i></a>
					{/if}
				
				</div>				
			  </section>
		</div>
		<script>autenticado = {$AUTENTICADO}</script>
		<script src="{$BASE_URL}javascript/searchProducts.js"></script>
{include file='common/footer.tpl'}