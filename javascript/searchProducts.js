$(document).ready(function() {
	$('.pesquisa_box').on('keyup','#descricaoSearch',function(){
		
		var descricao = $(this).val();
		var marca     = $(this).closest(".pesquisa_box").find("#marca_select").val();
		var tipo      = $(this).closest(".pesquisa_box").find("#tipo_select").val();
		
		$.ajax("../../actions/products/searchProductsDescricao.php", {
			success: function(data) {
				console.log();
				var texto;
				if(data.length > 2){
					$(".mostrar_produtos").html("<div id=\"pagination\"><p>text</p></div>");
					$.each(JSON.parse(data), function(i, produto){
						texto = '<article>' + 
						'<div class="produto_informacao"><div class="produto_img">'+
						'<a id="link_test'+produto.id+'" href="'+ 
						BASE_URL+
						'pages/public/infoProduto.php?id='+
						produto.id+
						'"><img src="#"/></a> </div>'+
						'<div class="produto_descricao">' +
						'<p id = "descricao"><a href="'+
						BASE_URL+
						'pages/public/infoProduto.php?id='+
						produto.id+
						'">'+
						produto.descricao+
						'</a></p>'+
						'<p id = "marca">'+ produto.marca+' | '+ produto.tipo+' </p>'
						
						if(produto.promo > 0){
							texto = texto + '<p id = "preco_rasurado">'+produto.preco+'€</p>'+
										'<p id = "preco">'+parseFloat(Math.round(produto.preco*(100 - produto.promo)) / 100).toFixed(2)+'€</p>'
						}
						else{
							texto = texto + '<p id = "preco">'+produto.preco+'€</p>'
						}
						if(autenticado == 2){
							texto = texto + '<p style="margin-bottom:20px">Stock:'+produto.stock+'</p>'+
										'<form id="AltEl" method="post" action="'+BASE_URL+'pages/admin/alterarProduto.php?id='+produto.id+'">'+
											'<input type=\'submit\' value=\'Alterar\'></input>'+
										'</form>'+
										'<form id="AltEl" method="post" action="'+BASE_URL+'actions/products/eliminarProduto.php?id='+produto.id+'">'+
											'<input  type=\'submit\' value=\'Eliminar\'></input>'+
										'</form>'
						}
						
						
						texto = texto + '</div>';
						if(produto.promo > 0){
							texto = texto + '<div class="produto_promo">'+
										'<img src="'+BASE_URL+'images/promo_logo.png" />'+
										'</div>'
						}
						texto = texto +  '</article>'
						
						$('.mostrar_produtos #pagination:first').before(texto);
						  
						  $.ajax("../../actions/products/getImgPath.php",{
								success:function(img_path){
										$(".mostrar_produtos").find("#link_test"+produto.id+"").html("<img src="+img_path+"/>");
										
								},
								error: function(request, errorType, errorMessage){
									$(".mostrar_produtos").find("#link_test"+produto.id+"").html('<img src="'+BASE_URL+'/images_produtos/notfound.jpg"/>');
								},
								timeout:3000,
								data:{"id_produto":produto.id}
						  });

					});
					
					$.ajax("../../actions/products/getProductsDescricaoTotal.php",{
						success:function(total){
							//console.log(total);
							var nr_paginas = Math.floor(total/5)
							if(total%5 != 0)
								nr_paginas = nr_paginas + 1;
							var texto_paginacao = texto_paginacao = '1/'+(nr_paginas)+''
												
						if ( 5 < total) {
							
							texto_paginacao = texto_paginacao + '<a href="'+BASE_URL+'pages/public/produtos.php?descricao='+descricao+'&marca='+marca+'&tipo='+tipo+'&page=1">'+
																'<i class="fa fa-arrow-right"></i></a>'
						}
							$(".mostrar_produtos").find("#pagination").html(texto_paginacao);	
						},
						error: function(request, errorType, errorMessage){
							
						},
						timeout:3000,
						data:{"descricao": descricao, "marca": marca, "tipo": tipo}
					});
				}
				else{
					$(".mostrar_produtos").html("<div class=\"info_not_found\"><p><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>Não foram encontrados produtos com esse filtro</p></div>");
				}
				
				
			},
			error: function(request, errorType, errorMessage){
				$(".mostrar_produtos").html("<p class =\"erro_descricao\"><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>Erro a aceder à base de dados tente mais tarde</p>");
			},
			timeout:3000,
			beforeSend:function(){
				$(".mostrar_produtos").html("<div id='apresentar_produto'><img class=\"loading_img_descricao\" id=\imagem_loading\" src=\""+BASE_URL+"images/loading_icon.gif\"></div>");
			},
			data:{"descricao": descricao, "marca": marca, "tipo": tipo}
		});
		
		
	});
});