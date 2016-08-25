$(document).ready(function() {
	$(".group2").colorbox({rel:'group2', transition:"fade"});

	/* DISABLE COLORBOX ON MOBILE */
	$('.group2').click(function (e) {
		if ( $(window).width() < 767) {
			$('.group2').removeClass('cboxElement');
			e.preventDefault();
		} else {
			$('.group2').addClass('cboxElement');
		}
	});

	$("#video-modal").on('hidden.bs.modal', function (e) {
		$("#video-modal iframe").attr("src", $("#video-modal iframe").attr("src"));
	});

	/**
 * Listen to scroll to change header opacity class
 */
	function checkScroll(){
		var startY = $('.navbar').height(); //The point where the navbar changes in px

		if($(window).scrollTop() > startY){
			$('.navbar').addClass("scrolled");
		}else{
			$('.navbar').removeClass("scrolled");
		}
	}

	if($('.navbar').length > 0){
		$(window).on("scroll load resize", function(){
			checkScroll();
		});
	}
});

//Ajax contact form
$(function() {

	// Get the form.
	var form = $('#contact-form');
	// Get the messages div.
	var formMessages = $('#form-output');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
		$("#form-submit").text("Enviando...");

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
			.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('alert alert-danger');
			$(formMessages).addClass('alert alert-success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
			$('#phone').val('');
			$('#location').val('');
			$('#email').val('');
			$('#info').val('');
			$("#form-submit").text("Enviar");
		})
			.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('alert alert-success');
			$(formMessages).addClass('alert alert-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
				$("#form-submit").text("Enviar");
			} else {
				$(formMessages).text('Oops! Ocurrió un error no se pudo enviar la forma.');
				$("#form-submit").text("Enviar");
			}
		});

	});

});

//Ajax contact form
$(function() {

	// Get the form.
	var form2 = $('#contact-form-2');
	// Get the messages div.
	var formMessages2 = $('#form-output-2');

	// Set up an event listener for the contact form.
	$(form2).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
		$("#form-submit-2").text("Enviando...");

		// Serialize the form data.
		var formData = $(form2).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form2).attr('action'),
			data: formData
		})
			.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages2).removeClass('alert alert-danger');
			$(formMessages2).addClass('alert alert-success');

			// Set the message text.
			$(formMessages2).text(response);

			// Clear the form.
			$('#name-2').val('');
			$('#phone-2').val('');
			$('#email-2').val('');
			$("#form-submit-2").text("Enviar");
		})
			.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages2).removeClass('alert alert-success');
			$(formMessages2).addClass('alert alert-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages2).text(data.responseText);
				$("#form-submit-2").text("Enviar");
			} else {
				$(formMessages2).text('Oops! Ocurrió un error no se pudo enviar la forma.');
				$("#form-submit-2").text("Enviar");
			}
		});

	});

});