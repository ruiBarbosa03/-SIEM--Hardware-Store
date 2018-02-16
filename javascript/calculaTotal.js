$(document).ready(function() {
  $('.valor').on('keyup' , changePrice);
  $('.valor').on('change', changePrice);
});

function changePrice(){
	var price = +$(this).closest('.infoProdutobox').find('#preco').data('preco');
	var quantidade = +$(this).val();
	$('.total').text(Math.round(quantidade*price*100)/100); //Fiz isto porque multiplicando por exemplo 5.99*15 devia de dar 89.85 mas dava 89.85000000000001 cortando a parte desnecessária
}