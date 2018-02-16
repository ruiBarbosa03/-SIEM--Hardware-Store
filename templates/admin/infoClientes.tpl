{include file='common/header.tpl'}
		<div class="content_box">
			<div class="clienteBox">
				<div class ="infoClientebox">
					<h1>{$user.nome}</h1>
					<p><strong>Código: </strong>{$user.id}</p>
					<p><strong>Morada: </strong>{$user.morada}</p>
					<p><strong>Telefone: </strong>{$user.telefone}</p>
					<p><strong>Email: </strong>{$user.email}</p>
					<form style="margin-bottom:30px"><input class = "botoesNovaEncomenda" type="button" value="Voltar" onClick="history.go(-1);return true;" style="margin-top:20px;"></form>
					<br>	
				</div>
				<div class="clienteImgBox">
					{$img_src = getImagePath($user.id,$BASE_DIR, $BASE_URL )}
					<img src="{$img_src}" />
					
				</div>
			</div>
		</div>
{include file='common/footer.tpl'}