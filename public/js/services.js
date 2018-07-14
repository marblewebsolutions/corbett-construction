$(document).ready(function() {
	var serviceItems = $(".service-item");
	
	$(serviceItems).click(function() {
		$(this).toggleClass("active");
	});
});