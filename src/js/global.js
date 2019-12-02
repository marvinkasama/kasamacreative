// Custom global scripts
jQuery(document).ready(function($) {
    'use strict';
    if( $( '.js-menu-button' ).length ) {
      $( '.js-menu-button' ).on( 'click', () => {
        $( '.js-mobile-menu' ).toggleClass( 'menu--active' );
        $( '.button--menu-close' ).toggleClass( 'button--menu-active' )
      } )
    }
    function fixedHeader() {
      if( $( '.header' ).length && $( '.body-wrap' ).length && ( window.innerWidth > 992 ) ) {
        $( '.body-wrap' ).css( 'paddingTop', $( '.header' ).innerHeight() );
      } else {
        $( '.body-wrap' ).css( 'paddingTop', 0 );
      }
    }
    fixedHeader();
    $( window ).on( 'resize', fixedHeader );
}(jQuery));
