(function() {
	$(window).on("scroll",function() {
		if($(this).scrollTop() > 400) {
		  $('#top-menu').removeClass('hide-canvas');
		} else {
		  $('#top-menu').addClass('hide-canvas');
		}
	});

	$("a",".show-offmenu").on("click",function(e) {
		e.preventDefault();
		$("#menu-offcanvas").toggleClass('show');
	});
})();