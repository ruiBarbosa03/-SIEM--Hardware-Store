{include file='common/header.tpl'}
		<div class="content_box">
			<div class="cliente_box">
				<div class = "infoCliente">
					<h1><strong>{$user.nome}</strong></h1>
					<p><strong>Morada: </strong>{$user.morada}</p>
					<p><strong>Telefone: </strong>{$user.telefone}</p>
					<p><strong>Email: </strong>{$user.email}</p>
				</div>
				<div class = "opcoesCliente">
					<br>
					<br>
					<p><a href="{$BASE_URL}pages/client/gestaoInfoCliente.php">Gestão de Informação</a></p>
					<p><a href="{$BASE_URL}pages/client/historicoEncomendas.php">Histórico de Encomendas</a></p>
					<p><a href="{$BASE_URL}pages/client/novaEncomenda.php">Nova Encomenda</a></p>					
				</div>
			</div>
			<div class = "infoClienteTabela">
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
						<a href="{$BASE_URL}pages/client/zonaCliente.php?page={$page-1}"><i class="fa fa-arrow-left"></i></a> 
					{/if}
					{$page+1}/{$nr_paginas + 1}						
					{if (($page + 1) * $page_size < $total) }
						<a href="{$BASE_URL}pages/client/zonaCliente.php?page={$page+1}"><i class="fa fa-arrow-right"></i></a>
					{/if}
				</div>	
			</div>
		</div>
{include file='common/footer.tpl'}