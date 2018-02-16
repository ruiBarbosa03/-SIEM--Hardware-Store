{include file='common/header.tpl'}
		<div class="content_box">
			<div class="novaEncomendabox">
				<h1>Encomenda #{$id_encomenda} </h1>
				<table>				
					<tr>
					<th>ID peca</th><th>Descrição</th><th>Marca</th><th>Tipo</th><th>Quantidade</th><th>Preço</th>
					</tr>
					{foreach $encomendas as $encomenda}
						<tr>
						<td><a href="{$BASE_URL}pages/public/infoProduto.php?id={$encomenda.id}">{$encomenda.id}</td><td>{$encomenda.descricao}</td><td>{$encomenda.marca}</td><td>{$encomenda.tipo}</td><td>{$encomenda.quantidade}</td><td>{$encomenda.preco}</td>
						</tr> 
						{$estado = $encomenda.estado}
					{/foreach}
				</table>
				<div class = "botoes">
					{if ($AUTENTICADO == 2 AND $estado == "A caminho" )}
						<form method='get' action="{$BASE_URL}actions/cart/alterarEncomendaInfo2.php?id_encomenda={$encomenda.id}">
							<input type="hidden" name='id_encomenda' value ={$id_encomenda}></input><p>
							<input class = "botoesNovaEncomenda" type='submit' value='Entregue'></input>
						</form>
					{elseif ($AUTENTICADO == 2 AND $estado == "Por Processar" )}
						<form method='get' action="{$BASE_URL}actions/cart/alterarEncomendaInfo1.php?id_encomenda={$encomenda.id}">
							<input type='hidden' name='id_encomenda' value ={$id_encomenda}></input><p>
							<input class = "botoesNovaEncomenda" type='submit' value='Aceitar'></input>
						</form>
					{/if}
					<form><input class = "botoesNovaEncomenda" type="button" value="Voltar" onClick="history.go(-1);return true;" style="float:right; margin-top:10px"></form>
				</div>
			</div>
		</div>
{include file='common/footer.tpl'}	