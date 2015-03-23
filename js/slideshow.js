function() {

	$(document).ready(function() {
		startSlideshow;
	});

	function startSlideshow() {
		var images = $("#slideshow").children().each(function() {
			$(this).hide();
		});
	}

}();