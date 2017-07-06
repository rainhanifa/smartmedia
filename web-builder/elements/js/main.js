/*
 * Template name: Neumann
 * Version: 1.0.0
 * Author: Illiyin Studio
 */

'use strict';
var Main = function() {

	// Counter
	function counterHandler() {
		$('.number').counterUp({
			delay: 10,
			time: 1000
		});
	}

	// Isotope
	function isotopeHandler() {
		var $grid1 = $('.grid-1').isotope();

		$('.portfolio-filter ul li').on('click', function() {
			$('.portfolio-filter ul li').removeClass('active');

			$(this).addClass('active');
			
			var filterValue = $(this).attr('data-filter');
			$grid1.isotope({ filter: filterValue });
		});
	}

	// Lightcase
	function lightcaseHandler() {
		$('a[data-rel^=lightcase]').lightcase();
	}

	// Map
	function mapHandler() {
		$('.map-container').on('click', function() {
			$('.map-container iframe').css("pointer-events", "auto");
		});

		$(".map-container").on('mouseleave', function() {
			$('.map-container iframe').css("pointer-events", "none"); 
		});
	}

	// Search
	function searchHandler() {
		$(".nav > li.search input[type=text]").focus(function() {
			$(".nav > li:not(.search):not(.button)").fadeOut(100);

			if($(".navbar").hasClass("header-2")) {
				$(".navbar-brand").animate({"left":"-500px"});
			}
		});

		$(".nav > li.search input[type=text]").focusout(function() {
			$(".nav > li:not(.search):not(.button)").delay(300).fadeIn(100);

			if($(".navbar").hasClass("header-2")) {
				$(".navbar-brand").animate({"left":"0"});
			}
		});
	}

	// Slider
	function sliderHandler() {
		$('.slider-1 .slider-wrapper').slick({
			arrows: false,
			autoplay: true,
			dots: true
		});

		$('.slider-2 .slider-wrapper').slick({
			autoplay: true
		});

		$('.slider-3 .slider-wrapper').slick({
			autoplay: true
		});

		$('.slider-4 .slider-wrapper').slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});

		$('.portfolio .slider-wrapper').slick({
			arrows: false,
			autoplay: true,
			dots: true
		});

		$('.blog .slider-wrapper').slick({
			arrows: false,
			autoplay: true,
			dots: true
		});
	}

	return {
		init : function() {
			counterHandler();
			isotopeHandler();
			lightcaseHandler();
			mapHandler();
			searchHandler();
			sliderHandler();
		}
	};
}();