<?php
/**
 * Shared helper utilities.
 *
 * @package StarterPress
 */

declare(strict_types=1);

namespace StarterPress;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Stateless helper methods used across the theme.
 */
final class Helper {

	/**
	 * Resolve a cache-busting version string for an asset file.
	 *
	 * Uses file modification time in development and the theme version in
	 * production when SCRIPT_DEBUG is disabled.
	 *
	 * @param string $file Absolute path to the asset.
	 * @return string
	 */
	public static function asset_version( string $file ): string {
		if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG && is_readable( $file ) ) {
			return (string) filemtime( $file );
		}

		return STARTERPRESS_VERSION;
	}

	/**
	 * Whether the current request is a block theme editor context.
	 *
	 * @return bool
	 */
	public static function is_editor_context(): bool {
		return is_admin() && function_exists( 'get_current_screen' ) && get_current_screen() instanceof \WP_Screen;
	}

	/**
	 * Sanitize a class list string for output.
	 *
	 * @param array<int, string> $classes Class names.
	 * @return string
	 */
	public static function class_names( array $classes ): string {
		$filtered = array_filter( array_map( 'sanitize_html_class', $classes ) );

		return implode( ' ', $filtered );
	}
}
