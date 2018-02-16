{include file='common/header.tpl'}
		<div class="content_box">
			<div class="novaEncomendabox" style="height:auto">
				<h1> Encomendas </h1>
				<table>				
					<tr>
						<th>ID Encomenda</th><th>Nome Cliente</th><th>Data</th><th>Estado</th>
					</tr>
					{foreach $encomendas as $encomenda}
						<tr>
						<td><a href="{$BASE_URL}pages/client/infoEncomenda.php?id_encomenda={$encomenda.id_encomenda}">{$encomenda.id_encomenda}</td><td><a href="{$BASE_URL}pages/admin/infoCliente.php?id_cliente={$encomenda.id}">{$encomenda.nome}</td><td>{$encomenda.data}</td><td>{$encomenda.estado}</td>
						</tr>
					{/foreach}
				</table>
			
				<div id="pagination" style="margin-top:5%">
					{if ($page != 0)}
						<a href="{$BASE_URL}pages/admin/todasEncomendas.php?page={$page-1}"><i class="fa fa-arrow-left"></i></a> 
					{/if}
					{$page+1}/{$nr_paginas}					
					{if (($page + 1) * $page_size < $total) }
						<a href="{$BASE_URL}pages/admin/todasEncomendas.php?page={$page+1}"><i class="fa fa-arrow-right"></i></a>
					{/if}
				</div>					
			</div>
		</div>
{include file='common/footer.tpl'}		