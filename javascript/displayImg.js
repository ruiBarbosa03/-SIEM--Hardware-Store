﻿$("#fileToUpload").on('change', function () {

	var imgPath = $(this)[0].value;
	var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	
	if(extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg"){	
		if (typeof (FileReader) != "undefined") {
			var image_holder = $("#image-holder");
			image_holder.empty();	
			var reader = new FileReader();
			reader.onload = function (e) {
				$("<img />", {
					"src": e.target.result,
					"class": "thumb-image"
				}).appendTo(image_holder);
			}
			image_holder.show();
			reader.readAsDataURL($(this)[0].files[0]);
		} else {
			alert("This browser does not support FileReader.");
		}
	}else{
		$(this).closest(".infoProdutobox").find(".formAlteracao_img").text("Insira imagens do tipo .jpg, .gif, .jpeg ou .gif");
	}
});