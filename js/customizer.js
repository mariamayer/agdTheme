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
		$( "#toggle-view li" ).click(function() {
		  $( this ).toggleClass( "toggle" );
		});
	});
} )( jQuery );
