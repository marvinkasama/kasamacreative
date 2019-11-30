// Custom global scripts
jQuery(document).ready(function($) {
    'use strict';
    if( $( '.js-menu-button' ).length ) {
      $( '.js-menu-button' ).on( 'click', () => {
        $( '.js-mobile-menu' ).toggleClass( 'menu--active' );
        $( '.button--menu-close' ).toggleClass( 'button--menu-active' )
      } )
    }
}(jQuery));
