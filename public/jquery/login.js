/********************************************************************************
 *								Miguel Cerejo									*
 *																				*
 *								Easter Egg										*
 *																				*
 *						!!!!- funcoes de jquery -!!!!							*
 *																				*
 *						estas funcoes servem apenas para						*
 *				registar e fazer o login do utilizador e com ajax				*
 *					enviar os dados para paginas em php							*
 *					para adicionar e remover na base de dados					*
 *																				*
 *																				*
 ********************************************************************************/
$(function() {

		//************************************************************************
		//                                                                      **
		//           verificar se o email ja esta a ser utilizado               **
		//                                                                      **
		//************************************************************************

		function validateEmail(email) {
			// http://stackoverflow.com/a/46181/11236
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		}

		//************************************************************************
		//                                                                      **
		//			Envia os dados de login para iniciar a sua sessao			**
		//                                                                      **
		//************************************************************************

			$('#radioBtn_sex a').on('click', function(){
				var sel = $(this).data('title');
				var tog = $(this).data('toggle');
				$('#'+tog).prop('value', sel);

				$('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
				$('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
			})

		//************************************************************************
		//                                                                      **
		//			Envia os dados de login para iniciar a sua sessao			**
		//                                                                      **
		//************************************************************************

			$('#birthay_registration').datepicker({
				format: "dd/mm/yyyy",
				startView: 1,orientation: "bottom auto",
				autoclose: true,
				multidate: false,
				calendarWeeks: true
			});

		//************************************************************************
		//                                                                      **
		//          	 mostrar a password que esta no input            	    **
		//                                                                      **
		//************************************************************************

			$(".reveal").mousedown(function() {
				$(this).addClass('btn-default active');
				$(this).closest('.input-group').find('.pwd').attr('type', 'text');
			})
			.mouseup(function() {
			$(this).removeClass('btn-default active');
				$(this).closest('.input-group').find('.pwd').attr('type', 'password');
			})
			.mouseout(function() {
			$(this).removeClass('btn-default active');
				$(this).closest('.input-group').find('.pwd').attr('type', 'password');
			});

		//************************************************************************
		//                                                                      **
		//          	 	muda o icon do aceitar registo        	    	    **
		//                                                                      **
		//************************************************************************

			$('.button-checkbox').each(function() {
				// Settings
				var $widget = $(this),
					$button = $widget.find('button'),
					$checkbox = $widget.find('input:checkbox'),
					color = $button.data('color'),
					settings = {
						on: {
							icon: 'glyphicon glyphicon-check'
						},
						off: {
							icon: 'glyphicon glyphicon-unchecked'
						}
					};
				// Event Handlers
				$button.on('click', function() {
					$checkbox.prop('checked', !$checkbox.is(':checked'));
					$checkbox.triggerHandler('change');
					updateDisplay();
				});
				$checkbox.on('change', function() {
					updateDisplay();
				});
				// Actions
				function updateDisplay() {
					var isChecked = $checkbox.is(':checked');
					// Set the button's state
					$button.data('state', (isChecked) ? "on" : "off");
					// Set the button's icon
					$button.find('.state-icon')
						.removeClass()
						.addClass('state-icon ' + settings[$button.data('state')].icon);
					// Update the button's color
					if (isChecked) {
						$button
							.removeClass('btn-default')
							.addClass('btn-' + color + ' active');
					} else {
						$button
							.removeClass('btn-' + color + ' active')
							.addClass('btn-default');
					}
				}
				// Initialization
				function init() {
					updateDisplay();
					// Inject the icon if applicable
					if ($button.find('.state-icon').length == 0) {
						$button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
					}
				}
				init();
			});

		//************************************************************************
		//                                                                      **
		//          	 mostrar a password que esta no input            	    **
		//                                                                      **
		//************************************************************************

		$('#password').bind('keyup', function() { 
			//inputs basicos
			var pass		= $.trim($("#password").val());
			var pass_conf 	= $.trim($("#password_confirm").val());

			$('#password').tooltip({trigger: 'manual'});
			$('#password_conf').tooltip({trigger: 'manual'});

			if (pass.length > 5){

				$("#span_pass").parent().removeClass('has-error').addClass('has-success');
				$("#span_pass").removeClass('glyphicon-remove').addClass('glyphicon-ok');

				$('#password').tooltip('destroy');
				$('#password').attr('title', '');

				if (pass_conf === pass) {
					$("#span_pass_conf").parent().removeClass('has-error').addClass('has-success');
					$("#span_pass_conf").removeClass('glyphicon-remove').addClass('glyphicon-ok');

					$('#password_confirm').attr('title', '');
					$('#password_confirm').tooltip('destroy');

				} else if ((pass_conf.length > 5) && (pass_conf != pass)) {
					$("#span_pass_conf").parent().removeClass('has-success').addClass('has-error');
					$("#span_pass_conf").removeClass('glyphicon-ok').addClass('glyphicon-remove');

					$('#password_confirm').tooltip('show');
					$('#password_confirm').tooltip({title: 'Different Passwords!'});
				}
				return true;
			} else {
				$("#span_pass").parent().removeClass('has-success').addClass('has-error');
				$("#span_pass").removeClass('glyphicon-ok').addClass('glyphicon-remove');

				$("#password").focus();
				$('#password').tooltip({title: 'Choose a better Passwords!'});
				$('#password').tooltip('show');
				return true;
			}
		});

		$('#password_confirm').bind('keyup', function() { 
			//inputs basicos
			var pass		= $.trim($("#password").val());
			var pass_conf 	= $.trim($("#password_confirm").val());
				
			if (pass_conf.length <= 5) {
				$("#span_pass_conf").parent().removeClass('has-success').addClass('has-error');
				$("#span_pass_conf").removeClass('glyphicon-ok').addClass('glyphicon-remove');

				$("#password_conf").focus();
				$('#password').tooltip({title: 'Different Passwords!'});
				$('#password_confirm').tooltip({title: 'Different Passwords!'});
				$('#password').tooltip('show');
				$('#password_confirm').tooltip('show');
				return true;
			} else if (pass_conf != pass) {
				$("#span_pass_conf").parent().removeClass('has-success').addClass('has-error');
				$("#span_pass_conf").removeClass('glyphicon-ok').addClass('glyphicon-remove');

				$("#password_conf").focus();
				$('#password').tooltip({title: 'Different Passwords!'});
				$('#password_confirm').tooltip({title: 'Different Passwords!'});
				$('#password').tooltip('show');
				$('#password_confirm').tooltip('show');

				return true;
			} else {
				$("#span_pass_conf").parent().removeClass('has-error').addClass('has-success');
				$("#span_pass_conf").removeClass('glyphicon-remove').addClass('glyphicon-ok');
				$("#span_pass").parent().removeClass('has-error').addClass('has-success');
				$("#span_pass").removeClass('glyphicon-remove').addClass('glyphicon-ok');

				$('#password').tooltip('destroy');
				$('#password_confirm').tooltip('destroy');
				$('#password').attr('title', '');
				$('#password_confirm').attr('title', '');
			}
		});

	//************************************************************************************************
	//																								//
	//							Verficar se o nome de user ja esta utilizado						//
	//																								//
	//************************************************************************************************


		//attach keypress to input
		$(document).on('blur', '#display_name', function(e) {
			if ($(this).val().length > 2) {
				$.ajax({
					type: 'POST',
					url: 'config/signup/check_user.php',
					data: {
						post_type: "name",
						data: $(this).val()
					},
					success: function(data) {
						if (data != 'success') {
							$("#span_display_name").parent().addClass('has-error').removeClass('has-success');
							$("#span_display_name").addClass('glyphicon-remove').removeClass('glyphicon-ok');

							$('#display_name').attr('title', 'Username already taken');
							$('#display_name').tooltip('show');

							return false
						} else {
							$("#span_display_name").parent().removeClass('has-error').addClass('has-success');
							$("#span_display_name").removeClass('glyphicon-remove').addClass('glyphicon-ok');
							$('#display_name').attr('title', '');
							$('#display_name').tooltip('destroy');
						}
					},
					error: function(req, status, error) {
							$("#span_display_name").parent().addClass('has-error').removeClass('has-success');
							$("#span_display_name").addClass('glyphicon-remove').removeClass('glyphicon-ok');

							$('#display_name').attr('title', 'Error trying to get the unique Username');
							$('#display_name').tooltip('show');
					}
				});
			} else {
				$('#display_name').attr('title', 'Username need to have more than 3 letters');
				$('#display_name').tooltip('show');
			}
		});

	//************************************************************************************************
	//																								//
	//							Verficar se o nome de user ja esta utilizado						//
	//																								//
	//************************************************************************************************


		//attach keypress to input
		$(document).on('blur', '#email', function(e) {
			if (validateEmail($("#email").val())) {
				$.ajax({
					type: 'POST',
					url: 'config/signup/check_user.php',
					data: {
						post_type: "email",
						data: $(this).val()
					},
					success: function(data) {
						if (data != "success") {
							$("#span_email").parent().addClass('has-error').removeClass('has-success');
							$("#span_email").addClass('glyphicon-remove').removeClass('glyphicon-ok');

							$('#email').attr('title', 'Email used');
							$('#email').tooltip('show');
							$('#recover').animate({height: '20px'}, 500, function() {
														$(this).css("background", "none");
													});
						} else {
							$("#span_email").parent().removeClass('has-error').addClass('has-success');
							$("#span_email").removeClass('glyphicon-remove').addClass('glyphicon-ok');
							$('#email').tooltip('destroy');
							$('#email').attr('title', '');
						}
					},
					error: function(req, status, error) {
							$("#span_email").parent().addClass('has-error').removeClass('has-success');
							$("#span_email").addClass('glyphicon-remove').removeClass('glyphicon-ok');

							$('#email').attr('title', 'Error trying to get the unique Email');
							$('#email').tooltip('show');
					}
				});
			} else {
				$("#span_email").parent().addClass('has-error').removeClass('has-success');
				$("#span_email").addClass('glyphicon-remove').removeClass('glyphicon-ok');

				$('#email').focus();
				$('#email').attr('title', 'Invalid Email');
				$('#email').tooltip('show');
			};
		});

});