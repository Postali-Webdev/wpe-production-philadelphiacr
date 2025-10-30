/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	$('#awards').slick({
		dots: false,
		infinite: true,
        arrows:true,
		fade: false,
		autoplay: false,
  		autoplaySpeed: 3000,
  		speed: 800,
		slidesToShow: 4,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
              breakpoint: 821,
              settings: {
                    slidesToShow: 2,
                }
            },
            {
              breakpoint: 601,
              settings: {
                    slidesToShow: 1,
                }
            }
        ]
	});

    $('#testimonial_slider').slick({
		dots: true,
		infinite: true,
        arrows:false,
		fade: false,
		autoplay: false,
  		autoplaySpeed: 3000,
  		speed: 800,
		slidesToShow: 1,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
	});

    $('#results_slider > .results_content > .recent-posts').slick({
		dots: true,
		infinite: true,
        arrows:false,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 3000,
  		speed: 800,
		slidesToShow: 1,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
	});
	
});