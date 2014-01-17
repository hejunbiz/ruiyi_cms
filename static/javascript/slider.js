$(function() {
	window.location.hash = '';

	$(window).bind('hashchange', function() {
		var hash = window.location.hash.substr(1,1);

		$('#showroom').removeClass('open');

		if(hash != 'c' && hash != '') {
			$('#showroom').removeClass().addClass('open a'+hash);
		  $('html, body').delay(200).animate({scrollTop: $('#showroom').position().top}, 600);
		}
	});
});