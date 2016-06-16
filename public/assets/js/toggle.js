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
		} else {
			$('#nav-list').hide();
		}
	});
})
