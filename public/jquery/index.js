
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



			//************************************************************************
			//                                                                      **
			//                                                                      **
			//           verificar se o username ja esta a ser utilizado            **
			//                                                                      **
			//                                                                      **
			//************************************************************************




        $('#registar_user').bind('keyup', function() { 
          	var value_user = "register=user&user="+$(this).val();
	        $.ajax({
                type: "POST", 
				url: "/CETCAW-07/config/get_function.php",
				data: value_user,
				cache: false,
				dataType: 'json', // Choosing a JSON datatype
				success: function(data){ // Variable data contains the data we get from serverside
					$('#msg_username_text').html(''); // Clear #success_div div
					if (data == 'success') { // If clicked buttons value is all, we post every wine
						if ($("#registar_user").val() == "") {
							$("#msg_username").parent().removeClass("has-success");
							$("#msg_username").parent().addClass("has-error");
							$("#msg_username").removeClass("glyphicon-ok");
							$("#msg_username").addClass("glyphicon-remove");
							$("#msg_username_text").fadeIn(400).html("<span class='info_register'>Tem de inserir um nome de utilzador!!</span>");
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
						$("#msg_username_text").fadeIn(400).html("<span class='info_register'>Nome de utilzador já existente!!</span>");
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





		$('#registar_email').blur(function() { 
			var value_mail = "register=email&email="+$(this).val();
			if (validateEmail(value_mail)) {
				$.ajax({
					type: "POST", 
					url: "/CETCAW-07/config/get_function.php",
					data: value_mail,
					cache: false,
					dataType: 'json', // Choosing a JSON datatype
					success: function(data){ // Variable data contains the data we get from serverside
						$('#msg_email_text').html(''); // Clear #success_div div
						if (data == 'success') { // If clicked buttons value is all, we post every wine
							if ($("#registar_email").val() == "") {
								$("#msg_email").parent().removeClass("has-success");
								$("#msg_email").parent().addClass("has-error");
								$("#msg_email").removeClass("glyphicon-ok");
								$("#msg_email").addClass("glyphicon-remove");
								$("#msg_email_text").fadeIn(400).html("<span class='info_register'>Tem de inserir um email!!</span>");
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
							$("#msg_email_text").fadeIn(400).html("<span class='info_register'>Email já existente!!</span>");
						}
					}
				});
			} else {
				$("#msg_email").parent().removeClass("has-success");
				$("#msg_email").parent().addClass("has-error");
				$("#msg_email").removeClass("glyphicon-ok");
				$("#msg_email").addClass("glyphicon-remove");
				$("#msg_email_text").fadeIn(400).html("<span class='info_register'>Email não é valido!!</span>");
			}
		});



			//************************************************************************
			//                                                                      **
			//                                                                      **
			//				envia os dados para registar o utilizador				**
			//                                                                      **
			//                                                                      **
			//************************************************************************





     	var isChecked = $('#registar_agree').is(':checked');

        $("#bt_registar").click(function(e) {
        	e.preventDefault();
          	if (($('#registar_password').val() == $('#registar_pass').val()) && ($('#registar_pass').val().length > 5) && ($('#registar_nome').val().length > 3)){
	            
	            var valor_form = "register=registar&"+$('#form_registar').serialize();
	       		$.ajax({
	                type: "POST", 
					url: "/CETCAW-07/config/get_function.php",
					data: valor_form,
					cache: false,
					dataType: 'json', // Choosing a JSON datatype
					success: function(data){ // Variable data contains the data we get from serverside
		                $('#message_registar').html(''); // Clear #success_div div
						$('#message_registar').css('display','block');
						if (data == 'success') { // If clicked buttons value is all, we post every wine
							$("#message_registar").addClass("alert-success");
						
								setTimeout( function(){ 
									$('#close_register').trigger('click');
									$("#message_registar").html("");
									$("#message_registar").removeClass("alert-danger");
								}, 5000);
								if ($(location).attr('pathname') == '/CETCAW-07/account/account.php') {
									setInterval( function(){ window.location = "../"; }, 2000);
								} else {
									setInterval( function(){ 
										location.reload(); 
										$('#form_registar').find(':input:disabled').prop('disabled',false);
									}, 2000);
								}
									//limpar formulario
							$('#form_registar').find(':input:not(:disabled)').prop('disabled',true);
							$('#form_registar').trigger("reset");
							$("#msg_email").html("");
							$("#msg_email_text").html("");
							$("#msg_username").html("");
							$("#msg_username_text").html("");
							$("#msg_password").html("");
							$("#msg_password_2").html("");
							$("#msg_name").html("");
							$("#msg_agree").html("");
							$("#msg_password_text").html("");
							$("#msg_password_2_text").html("");
						} else if (data == 'erro') { 
							$("#message_registar").addClass("alert-danger");
							$("#message_registar").html("Erro ao registar-se. Tente novamente mais tarde.");
						}
					}
	            });
          	} else {
	            if ($('#registar_nome').val().length < 3){
	              $("#msg_name").fadeIn(400).html("<span class='info_register'>Tem de Escrever o seu nome!!</span>");
	            } else {
	              $("#msg_name").html(''); 
	            }
		        if(isChecked)
	        		$("#msg_agree").fadeIn(400).html("<span class='info_register'>Tem de aceitar os termos e condições de compras!</span>");
	            else
	          		$("#msg_agree").html('');

	          	if ($('#registar_password').val().length < 5){
	          		$("#msg_password_text").html("<span class='info_register'>Passwords curta!!</span>");	
	          	}
	          	if ($('#registar_password').val() != $('#registar_pass').val()){
	          		$("#msg_password_2_text").html("<span class='info_register'>Passwords diferentes!!</span>");	
	          	}
          	}
        });



			//************************************************************************
			//                                                                      **
			//                                                                      **
			//			Envia os dados de login para iniciar a sua sessao			**
			//                                                                      **
			//                                                                      **
			//************************************************************************





		var isChecked_log = $('#entrar_save').is(':checked');

        $("#bt_login").click(function(e) {
			$('#message_login').html(''); // Clear #success_div div
			$('#message_login').css('display','block');
        	if (($('#entrar_password').val().length > 5) && ($('#entrar_user').val().length > 3)){
	            e.preventDefault();
	            var form_login = "register=login&"+$('#form_login').serialize();
	       		$.ajax({
	                type: "POST", 
					url: "/CETCAW-07/config/get_function.php",
					data: form_login,
					cache: false,
					dataType: 'json', // Choosing a JSON datatype
					success: function(data){ // Variable data contains the data we get from serverside
					if (data == 'success') { // If clicked buttons value is all, we post every wine

						$("#message_login").removeClass("alert-danger");
						$("#message_login").addClass("alert-success");
						$('#message_login').html('Login feito com sucesso!!');
							//limpar formulario
						$('#form_login').trigger("reset");
						$('#form_login').find(':input:not(:disabled)').prop('disabled',true);
						if ($(location).attr('pathname') == "/CETCAW-07/account/account.php") {
							setInterval( function(){ window.location = "../"; }, 2000);
						} else {
							setInterval( function(){ location.reload(); }, 2000);
							$('#form_login').find(':input:disabled').prop('disabled',false);
						}
					}
					else if (data == 'erro') { // If clicked buttons value is red, we post only red wines
						$('#message_login').html(''); // Clear #message_login div
						$('#message_login').css('display','block');
						$("#message_login").addClass("alert-danger");
						$("#message_login").html("Algo se passou, tente novamente!");
					}
          		}
	            });
	            return false;
			} else {
				if ($('#entrar_user').val().length < 3){
					$("#message_login").addClass("alert-danger");
					$("#message_login").html('Nome de Utilizador muito curto!!<br>');
				} else {
					$("#message_login").html('');
				}
				if ($('#entrar_password').val().length < 5){
					$("#message_login").addClass("alert-danger");
					$("#message_login").append("Tem de Escrever a sua password!!");
				} else {
					$("#message_login").html(''); 
				}
			}
		});
		$(document).on('keyup keydown keypress', '#Modal_login', function(event) {
			console.log(event);
			if(event.keyCode== 13) {
				$("#bt_login").trigger('click');
			}
		});
		$(document).on('keyup keydown keypress', '#Modal_register', function(event) {
			console.log(event);
			if(event.keyCode== 13) {
				$("#bt_registar").trigger('click');
			}
		});
	});
	
	