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

// Scrolldown
$('nav a, #down').click(function (e) {
	e.preventDefault();
	var id = $(this).attr('href');
	targetOffset = $(id).offset().top;

	$('html, body').animate({
		scrollTop: targetOffset
	}, 500);
});