
{include file='common/header.tpl'}
		<div class="content_box">
			<div class="gestaoInformacaoCliente">
				<div class = "gestaoInfoCliente">
					<h1>{$user.nome}</h1>
					<h2> Gestão de Informação </h2>
				</div>
				<div class="clienteInfo">
					<div class = "gestaoInfoForm">
						<form method="post" name="myForm" action="{$BASE_URL}actions/users/gestaoInfo.php">
							<p margin-top="20px" margin-bottom="20px"><label> Morada: </label><input type="text" name="morada" value="{$user.morada}" >  </p><br>
							<p margin-bottom="20px">                  <label> Telefone: </label><input type="text" name="telefone" value={$user.telefone}>  </p><br>
							<p margin-bottom="20px">                  <label> Email: </label><input type="text" name="email" value={$user.email}> </p> <br>
							<p margin-bottom="20px">                  <label> Nova Password: </label><input type='password' name="novaPass" ></p><br>
							<p margin-bottom="20px">                  <label> Password: </label><input type='password' name="Pass_antiga" ></p><br>
							<p margin-bottom="20px">            <input class="botoesNovaEncomenda" type="submit" name="cmdsubmit" value="Mudar" style="float: left;margin-left: 60px;"></input>&nbsp;</p><br>
							<input class = "botoesNovaEncomenda" type="button" value="Voltar" onClick="history.go(-1);return true;" style="float: left; margin-left: 60px;">
						</form>	
					</div>
					<div class="clienteImg">
						{$img_src = getImagePath($user.id,$BASE_DIR, $BASE_URL )}
						<img src="{$img_src}" />
						<form class="alterar2" action="{$BASE_URL}actions/users/alterarClienteImg.php?idCliente={$user.id}" method="post" enctype="multipart/form-data" style="margin-top:10px;">
							<p><label>Escolher ficheiro:<label></p>
							<p>
								<input class="botaoAlterarFoto" type="file" name="fileToUpload" id="fileToUpload">
							</p>
							<p>
								<input class="botaoAlterarFoto" id="botaoFoto" type="submit" value="Alterar Imagem" name="submit" style="width: 120px;">
							</p>	
						</form>	
					</div>
				</div>
			</div>
		</div>
	
{include file='common/footer.tpl'}