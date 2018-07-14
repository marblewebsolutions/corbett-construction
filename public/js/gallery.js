// Filter functionality
var body = $("body");
var filters = $(".gallery-filter li");
var items = $(".gal-item");
var modalCont = $(".modal-container");
var modalBody = $(".modal .body");
var modalTitle = $(".modal .header .title");
var prev = $(".modal .prev");
var next = $(".modal .next");

var modalIndex = 0;
var sliding = false;
var currentFilter = null;
var currentImages = null;
var setImages = null;
var filterMap = {
	"additions" : "add",
	"baths" : "bth",
	"basement remodeling" : "bst",
	"decks" : "dck",
	"four seasons rooms" : "fsr",
	"kitchens" : "ktn",
	"other" : "otr"
};

function initializeGallery() {
	currentFilter = $(".gallery-filter .active").html().toLowerCase();
	currentImages = $(".filter-"+filterMap[currentFilter]);
	
	$(items).css("display", "none");
	$(".filter-"+filterMap[currentFilter]).css("display", "inline-block");
	
	setModalImages();
}

function openModal() {
	modalCont.addClass("active");
	body.addClass("no-scroll");
	modalTitle.html(currentFilter.toUpperCase());
}

function setModalImages() {
	// create modal html
	var modalHtml = "";
	$.each(currentImages, function(index, value) {
		modalHtml += "<img src='" + $(value).find("img").attr("src") +"' alt='" + $(value).find("img").attr("alt") + "' style='left:" + Math.round((index - modalIndex) * parseInt(modalBody.width())) + "px'>";
	})
	modalBody.html(modalHtml);
	
	setImages = modal.find("img");
}

function slideModalImages(n) {
	var shiftUnit = Math.round(modalBody.outerWidth());
	var shift = "-=" + (shiftUnit * n) + "px";
	setImages.css("left", shift);
}

function incDivs(n) {
	var inc = n
	modalIndex += n;
	
	if (modalIndex < 0) {
		inc = currentImages.length - 1;
		modalIndex = currentImages.length + n;
	} else if (modalIndex >= currentImages.length) {
		inc = 1 - currentImages.length;
		modalIndex = 0;
	}
	
	slideModalImages(inc);
}

// Clicking on a service filter
filters.click(function(event) {
	event.preventDefault();
	
	// change filter
	$(filters).removeClass("active");
	$(this).addClass("active");
	
	// set filter and images
	currentFilter = $(this).html().toLowerCase();
	currentImages = $(".filter-"+filterMap[currentFilter]);
	
	// display items from filter
	$(items).css("display", "none");
	$(".filter-"+filterMap[currentFilter]).css("display", "inline-block");
	
	setModalImages();
});

// Clicking on an image
items.click(function() {
	var desc = $(this).find("img").attr("alt");
	modalIndex = parseInt(desc.substring(desc.indexOf("-") + 1));
	setModalImages();
	openModal();
});

prev.click(function(e) {
	e.preventDefault();
	
	if (!sliding) {
		sliding = true;
		incDivs(-1);
		setTimeout(function() {
			sliding = false;
		}, 350);
	}
});

next.click(function(e) {
	e.preventDefault();
	if (!sliding) {
		sliding = true;
		incDivs(1);
		setTimeout(function() {
			sliding = false;
		}, 350);
	}
});

initializeGallery();
$(window).resize(setModalImages);