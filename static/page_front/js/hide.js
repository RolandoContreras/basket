'use strict';

(function( $ ) {
	
	function hideEmpty() {
		$( '.single-post .btArticleShareEtc' ).each( function( index ) {
			if( ( $( this ).find( '.btTagsColumn' ).html().length == 0 ) && ( $( this ).find( '.btShareColumn' ).html().length == 0 ) ) {
				$( this ).hide();
			}
		});
	}
	
	$( document ).ready(function() {
		hideEmpty();
	});
  
})( jQuery );
