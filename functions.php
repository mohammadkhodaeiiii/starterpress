<?php
/**
 * StarterPress bootstrap.
 *
 * This file intentionally contains no business logic. It defines the core
 * constants, registers the autoloader and boots the {@see \StarterPress\Theme}
 * application container, which in turn registers every theme service.
 *
 * @package StarterPress
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'STARTERPRESS_VERSION' ) ) {
	/**
	 * Theme version, used for asset cache busting.
	 */
	define( 'STARTERPRESS_VERSION', '1.0.0' );
}

if ( ! defined( 'STARTERPRESS_PATH' ) ) {
	/**
	 * Absolute filesystem path to the theme root, with a trailing slash.
	 */
	define( 'STARTERPRESS_PATH', trailingslashit( get_template_directory() ) );
}

if ( ! defined( 'STARTERPRESS_URI' ) ) {
	/**
	 * Public URL to the theme root, with a trailing slash.
	 */
	define( 'STARTERPRESS_URI', trailingslashit( get_template_directory_uri() ) );
}

require_once STARTERPRESS_PATH . 'inc/autoload.php';

/**
 * Boot the theme once all plugins are loaded so integrations (e.g. WooCommerce)
 * can be detected reliably.
 *
 * @return void
 */
function starterpress(): void {
	\StarterPress\Theme::instance()->register();
}

add_action( 'after_setup_theme', 'starterpress', 0 );
