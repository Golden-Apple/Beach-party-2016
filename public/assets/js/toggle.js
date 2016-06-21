$(function () {
	$('#toggle').click(function() {
		$('#nav-list').slideToggle();
		return false;
	});

	$(window).resize(function(){
		var w_width = $(window).width();
		var p = 480;

		if (w_width > p) {
			$('#nav-list').show();
			$('#nav-list').css('padding', '0');
		} else {
			$('#nav-list').hide();
		}
	});

	$('#nav-list').click(function() {
		$('#nav-list').slideUp();
		return true;
	});
})
