$(document).ready(function() {
	$('#formulario').on('keyup','#username',function(){
		
		var username = $(this).val();
		if(username.length > 8){
			
			$.ajax("../../actions/users/checkUsername.php", {
			
			success: function(data) {
				console.log(data);
				if(data > 0)
					$("#username_availability_result").html("<p><i class=\"fa fa-check fa-lg accepted_username\" aria-hidden=\"true\"></i></p>");
				else
					$("#username_availability_result").html("<p><i class=\"fa fa-times fa-lg denied_username\" aria-hidden=\"true\"></i></p>");
			},
			error: function(request, errorType, errorMessage){
				$("#username_availability_result").html("<p class =\"erro_username\"><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>Erro a aceder à base de dados tente mais tarde</p>");
			},
			timeout:3000,
			beforeSend:function(){
				$("#username_availability_result").html("<img class=\"loading_img\" id=\imagem_loading\" src=\""+BASE_URL+"images/loading_icon.gif\">");
			},
			data:{"username": username}
		});
			
		}else
			$("#username_availability_result").text("");
		
	});
});