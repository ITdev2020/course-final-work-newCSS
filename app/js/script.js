function burgerMenuToggle() {
	var burgerMenuState = document.getElementById("burger-menu");
	if (burgerMenuState.style.display === "none") {
		burgerMenuState.style.display = "block";
	} else {
		burgerMenuState.style.display = "none";
	}
}

// When the user scrolls down 400px from the top of the document, show the button
window.onscroll = function () {
	scrollFunction();
};

function scrollFunction() {
	//Get the button:
	mybutton = document.getElementById("to-top");
	if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
		// if (document.body.scrollTop > 400) { // For Safari
		// if (document.documentElement.scrollTop > 1) {
		// For Chrome, Firefox, IE and Opera
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

// Features slider pausing
var slideItem = document.getElementsByClassName("features-cards-item");
var slideWrapper = document.getElementsByClassName("features-cards");
slideWrapper[0].addEventListener("mouseover", function (event) {
	slideItem[0].style.animationPlayState = "paused";
	slideItem[1].style.animationPlayState = "paused";
	slideItem[2].style.animationPlayState = "paused";
	slideItem[3].style.animationPlayState = "paused";
});
slideWrapper[0].addEventListener("mouseout", function (event) {
	slideItem[0].style.animationPlayState = "running";
	slideItem[1].style.animationPlayState = "running";
	slideItem[2].style.animationPlayState = "running";
	slideItem[3].style.animationPlayState = "running";
});

// tiny-slider preferences
tns({
	container: ".slider",
	// mode: gallery,
	// axis: vertical,
	gutter: 10,
	speed: 15000,
	autoplayTimeout: 15000,
	items: 1,
	autoplayHoverPause: true,
	autoplayButtonOutput: false,
	// autoHeight: true,
	mouseDrag: true,
	slideBy: "page",
	autoplay: true,
	controls: false,
	nav: false,
	gutter: 5,
	edgePadding: 400,
	fixedWidth: 265,
	autoWidth: true,
	items: 1,
	responsive: {
		640: {
			edgePadding: 20,
			gutter: 20,
			items: 2,
			fixedWidth: 265,
		},
		700: {
			gutter: 30,
			fixedWidth: 265,
		},
		900: {
			items: 3,
			fixedWidth: 265,
		},
	},

	// disable: true,
});
