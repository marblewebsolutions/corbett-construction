$(document).ready(function() {
	var serviceItems = $(".services-item");
	
	$(serviceItems).click(function() {
		$(serviceItems).removeClass("active");
		$(serviceItems).find(".services-dropdown").slideUp();
		
		$(this).addClass("active");
		$(this).find(".services-dropdown").slideDown();
	});
});