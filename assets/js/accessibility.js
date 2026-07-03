/**
 * Accessibility helpers.
 *
 * @package StarterPress
 */
( function () {
	'use strict';

	/**
	 * Move focus to the main content landmark when the skip link is used.
	 *
	 * @return {void}
	 */
	function bindSkipLink() {
		var skipLink = document.querySelector( '.skip-link' );
		var main = document.getElementById( 'main-content' );

		if ( ! skipLink || ! main ) {
			return;
		}

		skipLink.addEventListener( 'click', function ( event ) {
			event.preventDefault();

			if ( ! main.hasAttribute( 'tabindex' ) ) {
				main.setAttribute( 'tabindex', '-1' );
			}

			main.focus( { preventScroll: false } );
		} );
	}

	/**
	 * Add a no-js class removal to signal JavaScript availability.
	 *
	 * @return {void}
	 */
	function removeNoJsClass() {
		document.documentElement.classList.remove( 'no-js' );
		document.documentElement.classList.add( 'js' );
	}

	document.addEventListener( 'DOMContentLoaded', function () {
		removeNoJsClass();
		bindSkipLink();
	} );
} )();
