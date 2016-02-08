/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	$(document).ready(function(){
		$(".rslides").responsiveSlides({
			pager: true
		});
	});
} )( jQuery );
