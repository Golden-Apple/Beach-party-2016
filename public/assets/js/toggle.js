$(function () {
	var toggle = false;

	$('#toggle').click(function() {
		$('#nav-list').slideToggle();
		toggle = true;
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
		if (toggle) {
			$('#nav-list').slideUp();
			toggle = false;
		}
	});
})
