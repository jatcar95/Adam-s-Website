function() {

	$(document).ready(function() {
		startSlideshow;
	});

	function startSlideshow() {
		$("#slideshow").children().each(function() {
			$(this).hide();
		});
	}

}();