var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
	var i;
	var x            = document.getElementsByClassName("mySlides");
	var info_produto = document.getElementsByClassName("produto_promo_descricao");
	var info_promo   = document.getElementsByClassName("produto_info_promo");
	if (n > x.length) {slideIndex = 1}    
	if (n < 1) {slideIndex = x.length}
	for (i = 0; i < x.length; i++) {
		x[i].style.display    = "none";  
		info_produto[i].style.display = "none";
		info_promo[i].style.display = "none";
	}
	x[slideIndex-1].style.display = "block"; 
	info_produto[slideIndex-1].style.display = "block";	
	info_promo[slideIndex-1].style.display = "block";	
}