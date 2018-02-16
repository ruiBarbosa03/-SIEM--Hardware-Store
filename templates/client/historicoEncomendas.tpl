{include file='common/header.tpl'}
	<div class="content_box">
		<div class="novaEncomendabox">
		<br>
		<h1>Histórico Encomendas</h1>
			<table>				
				<tr>
				<th>ID Encomenda</th><th>Data</th><th>Preço</th><th>Estado</th>
				</tr>
				{foreach $encomendas as $encomenda} 
					<tr>
						<td><a href="{$BASE_URL}pages/client/infoEncomenda.php?id_encomenda={$encomenda.id_encomenda}">{$encomenda.id_encomenda}</td><td>{$encomenda.data}</td><td>{$encomenda.sum} €</td><td>{$encomenda.estado}</td>
					</tr> 
				{/foreach}
			</table>
				<div id="pagination" style="margin-top:5%">
					{if ($page != 0)}
						<a href="{$BASE_URL}pages/client/historicoEncomendas.php?page={$page-1}"><i class="fa fa-arrow-left"></i></a> 
					{/if}
					{$page+1}/{$nr_paginas + 1}					
					{if (($page + 1) * $page_size < $total) }
						<a href="{$BASE_URL}pages/client/historicoEncomendas.php?page={$page+1}"><i class="fa fa-arrow-right"></i></a>
					{/if}
				</div>				
			<a href="{$BASE_URL}pages/client/zonaCliente.php"><input class ="botoesNovaEncomenda" type="button" value="Voltar" style="margin-bottom:20px; "></a>
		</div>
		
	</div>
	
{include file='common/footer.tpl'}