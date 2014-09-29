$('[data-toggle]').on('click', function() {
	target = $('[data-toggle-name=' + $(this).data('toggle') + ']');
	target.toggleClass('is-visible');
	$(this).toggleClass('is-active');
});

$('[data-dismiss]').on('click', function() {
	target = '.' + $(this).data('dismiss');
	$(this).parents(target).first().velocity('slideUp', { duration: 200 });
});

$('[data-accordion="toggle"]').on('click', function() {
	$(this).parents('[data-accordion="container"]').first().toggleClass('is-open');
});

$(document).on('ready', function() {
	
});
