var swiper = new Swiper(".our-products-carousel", {
	slidesPerView: 3,
	spaceBetween: 30,
	loop: true,
	autoplay: {
		delay: 3000,
		disableOnInteraction: false, 
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	breakpoints: {
		// when window width is >= 320px (mobile)
		320: {
			slidesPerView: 1,
			spaceBetween: 10,
		},
		// when window width is >= 640px (tablet)
		640: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		// when window width is >= 1024px (desktop)
		1024: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
		// when window width is >= 1440px (large desktops)
		1440: {
			slidesPerView: 4,
			spaceBetween: 40,
		},
	},
});