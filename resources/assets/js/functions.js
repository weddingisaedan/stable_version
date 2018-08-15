$(document).ready(function () {
	scroll(60);
});

/**
 * 	Scrollspy to smooth scrolling on the page navigation
 */
function scroll(offset) {
	$('.scrollspy').scrollspy();
	$('.scrollspy').bind('click', function (e) {
		e.preventDefault();
		target = this.hash;
		$('html, body').animate({
			scrollTop: $(target).offset().top - offset
		}, 700);

		return false;
	});
}

// Masks
function masks() {
	var SPMaskBehavior = function (val) {
			return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		},
		spOptions = {
			onKeyPress: function (val, e, field, options) {
				field.mask(SPMaskBehavior.apply({}, arguments), options);
			}
		};
	$('.sp_celphones').mask(SPMaskBehavior, spOptions);
	$('.cep').mask('00000-000');
}