{include file='common/header.tpl'}
		<div class="content_box">
			<div class="pesquisa_box">
				<h2>Clientes</h2>
				<form method='get' action="{$BASE_URL}pages/admin/pesquisaClientes.php">

					<p>Nome: </p><input type='text' name='name' value="{$nome}"></input><p>
					
					<p>Nome de Utilizador: </p><input type='text' name='username' value="{$user}"></input><p>

					<p>Email: </p><input type='text' name='email' value="{$email}"></input><p>
					
					<p>Telefone: </p><input type='text' name='phone' value="{$telefone}"></input><p>
					
					<p>Morada: </p><input type='text' name='morada' value="{$morada}"></input>
					
					<input type='submit' value='Pesquisar'></input>

				</form>
				<a href="{$BASE_URL}pages/admin/pesquisaClientes.php"> <button>Limpar Filtros</button></a>
			</div>
			<div class = "mostrar_produtos">
				<table>		
					<tr>
						<th>Código</th><th>Nome</th><th>Username</th><th>Morada</th><th>Telefone</th><th>Email</th>
					</tr>
					{foreach $users as $user}
						<tr>
							<td><a href="{$BASE_URL}pages/admin/infoCliente.php?id_cliente={$user.id}">{$user.id}</td><td><a href="{$BASE_URL}pages/admin/infoCliente.php?id_cliente={$user.id}">{$user.nome}</td><td><a href="{$BASE_URL}pages/admin/infoCliente.php?id_cliente={$user.id}">{$user.username}</td><td>{$user.morada}</td><td>{$user.telefone}</td><td>{$user.email}</td>
						</tr>
					{/foreach}
				</table>
				<div id="pagination">
					{if ($page != 0)}
						<a href="{$BASE_URL}pages/admin/pesquisaClientes.php?name={$nome}&username={$user}&email={$email}&phone={$telefone}&morada={$morada}&page={$page-1}"><i class="fa fa-arrow-left"></i></a> 
					{/if}
					{$page+1}/{$nr_paginas}					
					{if (($page + 1) * $page_size < $total) }
						<a href="{$BASE_URL}pages/admin/pesquisaClientes.php?name={$nome}&username={$user}&email={$email}&phone={$telefone}&morada={$morada}&page={$page+1}"><i class="fa fa-arrow-right"></i></a>
					{/if}
				</div>	
			</div>
		</div>

{include file='common/footer.tpl'}