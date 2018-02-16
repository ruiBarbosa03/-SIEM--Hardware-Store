{include file='common/header.tpl'}
		<div class="content_box">
			<div class="novaEncomendabox">
			<br>
			<h1>Nova Encomenda</h1>
				<table>				
					<tr>
						<th>Descricao</th><th>Marca</th><th>Tipo</th><th>Quantidade</th><th>Preço</th><th>Eliminar</th>
					</tr>
					{foreach $produtos as $produto}
						<tr>
							<td><a href="{$BASE_URL}pages/public/infoProduto.php?id={$produto.id}">{$produto.descricao}</td><td>{$produto.marca}</td><td>{$produto.tipo}</td><td>{$produto.quantidade}</td><td>{number_format((float)$produto.preco*(100 - $produto.promo)/100, 2, '.', '')*$produto.quantidade}</td><td><a href="{$BASE_URL}actions/cart/eliminarProdutoEncomenda.php?id_produto={$produto.id}"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></td>
						</tr> 
					{/foreach}	
				</table>
				<div class="botoes_nova_encomenda">
					<form class="form_nova_encomenda" method='get' action="{$BASE_URL}actions/cart/finalizarEncomenda.php"  >
						<input class="botoesNovaEncomenda"  type='submit' value='Finalizar Encomenda' ></input>
					</form>	
					<form class="form_nova_encomenda" method='get' action="{$BASE_URL}actions/cart/eliminarEncomenda.php" >
						<input class="botoesNovaEncomenda" type='submit' value='Eliminar Encomenda' ></input>
					</form>
					<form class="form_nova_encomenda" ><input class = "botoesNovaEncomenda" type="button" value="Voltar" onClick="history.go(-1);return true;" ></form>
				</div>				
			</div>
		</div>
{include file='common/footer.tpl'}