$('[data-toggle]').on('click', function() {
	target = $('[data-toggle-name=' + $(this).data('toggle') + ']');
	target.toggleClass('is-visible');
	$(this).toggleClass('is-active');
});