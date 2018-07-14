// Must write page specific js for opening modal and displaying contents

var body = $("body");
var modalCont = $(".modal-container");
var modal = $(".modal");
var modalHeader = $(".modal .header");
var modalBody = $(".modal .body");
var close = $(".modal .close");

function closeModal() {
	modalCont.removeClass("active");
	body.removeClass("no-scroll");
}

function initializeModal() {
	setSize();
}

function setSize() {
	var winHeight = $(window).outerHeight();
	var winWidth = $(window).outerWidth();
	var headHeight = modalHeader.outerHeight();
	var winPct = .9;
	
	if (winHeight > winWidth * 3 / 4) {
		// Window is tall
		var w = Math.round(winWidth * winPct);
		var h = Math.round(w * 3 / 4);
	} else {
		// Window is wide
		var h = Math.round(winHeight * winPct);
		var w = Math.round(h * 4 / 3);
	}
	
	modal.css("height", h);
	modal.css("width", w);
	modal.css("margin-top", (winHeight - h) / 2);
	modalBody.css("height", h - headHeight);
}

close.click(function() {
	closeModal();
});

$(document).click(function(e) {
	if (modalCont.hasClass("active") && e.target.id == "modal-container") {
		closeModal();
	}
});

initializeModal();
$(window).resize(setSize);