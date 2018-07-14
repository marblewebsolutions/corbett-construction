$(document).ready(function() {
	that = this;
	
	body = $("body");
	this.main = $(".main");
	
	// Mobile device hover effect
    $('body').bind('touchstart', function() {});
	
	// NAVIGATION
	this.nav = $(".navigation");
	this.navRight = $(".navigation-right");
	this.mobileNav = $("#mobile-navigation");
	this.menuToggle = $(".mobile-toggle");
	
	// click outside mobile navigation to close it
    $(document).click(function(e) {
        if ($(that.mobileNav).hasClass("active") &&
				$.inArray("nav-item", e.target.classList) < 0 && 
				$.inArray("mobile-navigation", e.target.classList) < 0 &&
				$.inArray("line", e.target.classList) < 0 &&
				$.inArray("mobile-toggle", e.target.classList) < 0) {	
            toggleMobileNav(that);
        }
    });
	
	// mobile menu button pressed
    $(this.menuToggle).click(function(e) {
		e.preventDefault();
		
        toggleMobileNav();
    });
	
	// mobile navigation toggle function
	function toggleMobileNav() {
		var windowWidth = parseInt($(window).width());
		if ($(that.mobileNav).hasClass("active")) {
			// mobile nav closing
			$(that.main).css("margin-right", "0");
			body.removeClass("no-scroll");
		} else {
			// mobile nav opening
			if (windowWidth > 580) {
				$(that.main).css("margin-right", "310px");
			}
			body.addClass("no-scroll");
		}
		$(that.mobileNav).toggleClass("active");
	}
	
	// RESIZING WINDOW
	$(window).on("resize", windowResizeNav);
	windowResizeMainPad()
	$(window).on("resize", windowResizeMainPad);
	
	// navigation resize
	function windowResizeNav() {
		var windowWidth = parseInt($(window).width());
		if (windowWidth > 751 && $(that.mobileNav).hasClass("active")) {
			// mobile nav is open, screen gets too large, close it
			toggleMobileNav(that);
		} else if (windowWidth > 580 && $(that.mobileNav).hasClass("active")) {
			// mobile nav is large enough for main screen to move when mobile opens
			$(that.main).css("margin-right", "310px");
		} else {
			$(that.main).css("margin-right", "0");
		}
	}
	
	// main paddingBottom
	function windowResizeMainPad() {
		that.main.css("padding-top", that.nav.outerHeight());
	}
});