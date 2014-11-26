jQuery(document).ready(function($) {
	$('#main-navigation').hide();
	$('#menu-button').on('click', function() {
		mobileMenuShown = true;
		$('#main-navigation').slideToggle(200);
	});

});
