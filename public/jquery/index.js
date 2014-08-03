/*
 *      Js for the invite request
 *
 *      Miguel Cerejo aka Sr Patinhas
 *      My-note 2014
 */

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
	//           verificar se o email ja esta a ser utilizado               **
	//                                                                      **
	//************************************************************************

	$("#invite_luck").on("click", function(e) {
		e.preventDefault();
		
		$("#invite_alert").hide();
		$("#invite_warning").text('');

		if (!validateEmail($("#invite_email").val())) {
				$("#invite_alert_base").removeClass('alert-danger alert-success').addClass('alert-danger');
				$("#invite_alert").show();
				$("#invite_warning").text('Invalid Email');
				setTimeout(function() { 
					$("#invite_alert").hide();
				}, 5000);

		} else if ($("#invite_name").val().length < 3 ) {
			$("#invite_alert_base").removeClass('alert-danger alert-success').addClass('alert-danger');
			$("#invite_alert").show();
			$("#invite_warning").text('Username need to have more then 3 caracters!');
				setTimeout(function() { 
					$("#invite_alert").hide();
				}, 5000);
		} else {
			var btn = $(this);
			btn.button('loading');

			var valor_form = $('#invite_form').serialize();
			$.ajax({
				type: "POST",
				url: "config/signup/invite.php",
				data: valor_form,
				cache: false,
				dataType: 'json', 							// Choosing a JSON datatype
				success: function(data) { 					// Variable data contains the data we get from serverside
					$("#invite_alert_base").removeClass('alert-danger alert-success').addClass(data.type);
					console.log(data.type);
					$("#invite_alert").show();
					$("#invite_warning").text(data.msg);
					setTimeout(function() { 
						$("#invite_alert").hide();
					}, 5000);
				}
			}).always(function () {
				btn.button('reset')
			});
		}
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
});