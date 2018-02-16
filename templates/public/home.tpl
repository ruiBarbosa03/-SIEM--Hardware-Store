{include file='common/header.tpl'}
		<div class="content_box">
		    <div class = "text_box">
				<br>
				<br>
					<h1>PROMOÇÃO!</h1>
					<br>
					<br>
					<h2>Os seguintes produtos encontram-se com desconto</h2>
					<br>
					
					{foreach $produtcs_promo as $product}
						
						<h2 class="produto_promo_descricao"> {$product.descricao} </h2>
						<h2 class="produto_info_promo">Promoção {$product.promo} %</h2>
					{/foreach}
					
			</div>
			<div class="img_box">
				<div class="display_img" style="max-width:800px">
					{foreach $produtcs_promo as $product}
						{$img_src = getImagePath($product.id,$BASE_DIR, $BASE_URL )}
						<a href="{$BASE_URL}pages/public/infoProduto.php?id={$product.id}">
							<img class="mySlides" src="{$img_src}" style="width:100%; height:98%">
						</a>
					{/foreach}
						<div class="section_display" style="width:100%">
							<div class="left_arrow" onclick="plusDivs(-1)">&#10094;</div>
							<div class="right_arrow" onclick="plusDivs(1)">&#10095;</div>
						</div>
					
				</div>
			</div>
		</div>
		<script src="{$BASE_URL}javascript/changeImagesHome.js"></script>
{include file='common/footer.tpl'}