
			$(document).ready(function () {
				$('.forgot-pass, #btn_signup_reset').click(function(event) {
					$("#panel_password").toggleClass("show-form");
					$("#panel_signin").toggleClass("show-form");
				});


				$('#btn_signup, #btn_signin').click(function(event) {
					$("#panel_signin").toggleClass("show-form");
					$("#panel_signup").toggleClass("show-form");
				}); 

				$('#btn_login').click(function(event) {
					
				});
				$('#btn_register').click(function(event) {
					
				});
			});
			//************************************************************************
			//                             Miguel Cerejo                            **
			//                                                                      **
			//                              Easter Egg                              **
			//                                                                      **
			//                    !!!!!- funcoes de jquery -!!!!                    **
			//                                                                      **
			//                    estas funcoes servem apenas para                  **
			//         registar e fazer o login do utilizador e com ajax   	        **
			//				  enviar os dados para paginas em php                   **
			//             para adicionar e remover na base de dados                **
			//                                                                      **
			//                                                                      **
			//************************************************************************



			//************************************************************************
			//                                                                      **
			//                                                                      **
			//					verificar se as passwords sao iguais				**
			//                                                                      **
			//                                                                      **
			//************************************************************************





		//  has-success		|| has-error  
		//  glyphicon-ok 	|| glyphicon-remove  

	$(function() {
		$('#registar_password').bind('keyup', function() { 
			var value = $(this).val();
			if ( (value.length > 5) && (value != "123456") && (value != "qwerty")){
				$(this).parent().removeClass("has-error");
				$(this).parent().addClass("has-success");
				$("#msg_password").removeClass("glyphicon-remove");
				$("#msg_password").addClass("glyphicon-ok");
				if ( $('#registar_pass').val() != value) {
					$("#msg_password_2").parent().removeClass("has-success");
					$("#msg_password_2").parent().addClass("has-error");
					$("#msg_password_2").removeClass("glyphicon-ok");
					$("#msg_password_2").addClass("glyphicon-remove");
				} else {
					$("#msg_password_2").parent().removeClass("has-error");
					$("#msg_password_2").parent().addClass("has-success");
					$("#msg_password_2").removeClass("glyphicon-remove");
					$("#msg_password_2").addClass("glyphicon-ok");
				}
			} else {
				$(this).parent().removeClass("has-success");
				$(this).parent().addClass("has-error");
				$("#msg_password").removeClass("glyphicon-ok");
				$("#msg_password").addClass("glyphicon-remove");
				if ( $('#registar_pass').val() != value) {
					$("#msg_password_2").parent().removeClass("has-success");
					$("#msg_password_2").parent().addClass("has-error");
					$("#msg_password_2").removeClass("glyphicon-ok");
					$("#msg_password_2").addClass("glyphicon-remove");
				}
			}
		});

		$('#registar_pass').bind('keyup', function() { 
			var value_password = $(this).val();
			var value_pass = $('#registar_password').val();
			if ( (value_password == value_pass) && (value_password.length > 5) ){
				$(this).parent().removeClass("has-error");
				$(this).parent().addClass("has-success");
				$("#msg_password_2").removeClass("glyphicon-remove");
				$("#msg_password_2").addClass("glyphicon-ok");
			} else {
				$(this).parent().removeClass("has-success");
				$(this).parent().addClass("has-error");
				$("#msg_password_2").removeClass("glyphicon-ok");
				$("#msg_password_2").addClass("glyphicon-remove");
			}
		});
});	


			//************************************************************************
			//                                                                      **
			//                                                                      **
			//           verificar se o username ja esta a ser utilizado            **
			//                                                                      **
			//                                                                      **
			//************************************************************************





        $('#registar_username').bind('keyup', function() { 
          	var value_user = "register=user&user="+$(this).val();
	        $.ajax({
                type: "POST", 
				url: "config/get_function.php",
				data: value_user,
				cache: false,
				dataType: 'json', // Choosing a JSON datatype
				success: function(data){ // Variable data contains the data we get from serverside
					if (data == 'success') { // If clicked buttons value is all, we post every wine
						if ($("#registar_username").val() == "") {
							$("#msg_username").parent().removeClass("has-success");
							$("#msg_username").parent().addClass("has-error");
							$("#msg_username").removeClass("glyphicon-ok");
							$("#msg_username").addClass("glyphicon-remove");
						} else{
							$("#msg_username").parent().removeClass("has-error");
							$("#msg_username").parent().addClass("has-success");
							$("#msg_username").removeClass("glyphicon-remove");
							$("#msg_username").addClass("glyphicon-ok");
						}
					} else if (data == 'erro') { // If clicked buttons value is red, we post only red wines
						$("#msg_username").parent().removeClass("has-success");
						$("#msg_username").parent().addClass("has-error");
						$("#msg_username").removeClass("glyphicon-ok");
						$("#msg_username").addClass("glyphicon-remove");
					}
				}
        	});
		});


			//************************************************************************
			//                                                                      **
			//                                                                      **
			//           verificar se o email ja esta a ser utilizado	            **
			//                                                                      **
			//                                                                      **
			//************************************************************************





			function validateEmail(email) { 
			// http://stackoverflow.com/a/46181/11236

				var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				return re.test(email);
			}




			//************************************************************************
			//                                                                      **
			//                                                                      **
			//           verificar se o email ja esta a ser utilizado	            **
			//                                                                      **
			//                                                                      **
			//************************************************************************





		$('#register_email').blur(function() { 
			var value_mail = "register=email&email="+$(this).val();
			if (validateEmail(value_mail)) {
				$.ajax({
					type: "POST", 
					url: "config/get_function.php",
					data: value_mail,
					cache: false,
					dataType: 'json', // Choosing a JSON datatype
					success: function(data){ // Variable data contains the data we get from serverside
						$('#msg_email_text').html(''); // Clear #success_div div
						if (data == 'success') { // If clicked buttons value is all, we post every wine
							if ($("#register_email").val() == "") {
								$("#msg_email").parent().removeClass("has-success");
								$("#msg_email").parent().addClass("has-error");
								$("#msg_email").removeClass("glyphicon-ok");
								$("#msg_email").addClass("glyphicon-remove");
							} else{
								$("#msg_email").parent().removeClass("has-error");
								$("#msg_email").parent().addClass("has-success");
								$("#msg_email").removeClass("glyphicon-remove");
								$("#msg_email").addClass("glyphicon-ok");
							}
						} else if (data == 'erro') { // If clicked buttons value is red, we post only red wines
							$("#msg_email").parent().removeClass("has-success");
							$("#msg_email").parent().addClass("has-error");
							$("#msg_email").removeClass("glyphicon-ok");
							$("#msg_email").addClass("glyphicon-remove");
						}
					}
				});
			} else {
				$("#msg_email").parent().removeClass("has-success");
				$("#msg_email").parent().addClass("has-error");
				$("#msg_email").removeClass("glyphicon-ok");
				$("#msg_email").addClass("glyphicon-remove");
			}
		});


			//************************************************************************
			//                                                                      **
			//                                                                      **
			//				envia os dados para registar o utilizador				**
			//                                                                      **
			//                                                                      **
			//************************************************************************



		$("#btn_register").click(function(e) {
			e.preventDefault();
			if (($('#register_password').val() == $('#register_pass').val()) && ($('#register_pass').val().length > 5) && ($('#registar_username').val().length > 3)){
				var valor_form = "register=registar&"+$('#form_register').serialize();
				$.ajax({
					type: "POST", 
					url: "config/get_function.php",
					data: valor_form,
					cache: false,
					dataType: 'json', // Choosing a JSON datatype
					success: function(data){ // Variable data contains the data we get from serverside
						if (data == 'success') { // If clicked buttons value is all, we post every wine
							$("#msg_success_registo").show();
															//limpar formulario
						} else if (data == 'erro') { 
							$("#msg_erro_registo").show();
						}
					}
				});
			} else {
				if ($('#registar_nome').val().length < 3){
					$("#msg_username").parent().removeClass("has-error");
					$("#msg_username").parent().addClass("has-success");
					$("#msg_username").removeClass("glyphicon-remove");
					$("#msg_username").addClass("glyphicon-ok");
				} else {
					$("#msg_username").parent().removeClass("has-success");
					$("#msg_username").parent().addClass("has-error");
					$("#msg_username").removeClass("glyphicon-ok");
					$("#msg_username").addClass("glyphicon-remove");
				}

				if ($('#register_password').val().length < 5){
					$("#msg_password").parent().removeClass("has-success");
					$("#msg_password").parent().addClass("has-error");
					$("#msg_password").removeClass("glyphicon-ok");
					$("#msg_password").addClass("glyphicon-remove");
				}
				if ($('#register_password').val() != $('#register_pass').val()){
					$("#msg_password_2").parent().removeClass("has-success");
					$("#msg_password_2").parent().addClass("has-error");
					$("#msg_password_2").removeClass("glyphicon-ok");
					$("#msg_password_2").addClass("glyphicon-remove");
				}
			}
		});


