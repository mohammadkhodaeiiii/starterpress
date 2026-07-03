<?php
/**
 * Style variation registration.
 *
 * @package StarterPress
 */

declare(strict_types=1);

namespace StarterPress;

use StarterPress\Interfaces\ServiceInterface;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers global style variations from /styles.
 */
final class Styles implements ServiceInterface {

	/**
	 * {@inheritDoc}
	 */
	public function register(): void {
		add_action( 'init', array( $this, 'register_style_variations' ) );
	}

	/**
	 * Register JSON style variations bundled with the theme.
	 *
	 * WordPress automatically discovers style variations in /styles when they
	 * follow the theme.json schema. This method adds a human-readable label
	 * filter when needed.
	 *
	 * @return void
	 */
	public function register_style_variations(): void {
		$directory = STARTERPRESS_PATH . 'styles/';

		if ( ! is_dir( $directory ) ) {
			return;
		}

		$files = glob( $directory . '*.json' );

		if ( false === $files ) {
			return;
		}

		/**
		 * Fires after StarterPress style variation files are discovered.
		 *
		 * @param array<int, string> $files Absolute paths to variation JSON files.
		 */
		do_action( 'starterpress_style_variations_loaded', $files );
	}
}
