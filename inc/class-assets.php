<?php
/**
 * Theme asset loading.
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
 * Enqueues frontend and editor assets conditionally.
 */
final class Assets implements ServiceInterface {

	/**
	 * {@inheritDoc}
	 */
	public function register(): void {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_frontend' ) );
	}

	/**
	 * Enqueue public-facing styles and scripts.
	 *
	 * @return void
	 */
	public function enqueue_frontend(): void {
		wp_enqueue_style(
			'starterpress-vazirmatn',
			'https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css',
			array(),
			null
		);

		$frontend_css = STARTERPRESS_PATH . 'assets/css/frontend.css';
		$version      = Helper::asset_version( $frontend_css );

		wp_enqueue_style(
			'starterpress-frontend',
			STARTERPRESS_URI . 'assets/css/frontend.css',
			array( 'starterpress-vazirmatn' ),
			$version
		);

		$navigation_js = STARTERPRESS_PATH . 'assets/js/navigation.js';
		wp_enqueue_script(
			'starterpress-navigation',
			STARTERPRESS_URI . 'assets/js/navigation.js',
			array(),
			Helper::asset_version( $navigation_js ),
			array(
				'strategy'  => 'defer',
				'in_footer' => true,
			)
		);

		$accessibility_js = STARTERPRESS_PATH . 'assets/js/accessibility.js';
		wp_enqueue_script(
			'starterpress-accessibility',
			STARTERPRESS_URI . 'assets/js/accessibility.js',
			array(),
			Helper::asset_version( $accessibility_js ),
			array(
				'strategy'  => 'defer',
				'in_footer' => true,
			)
		);
	}
}
