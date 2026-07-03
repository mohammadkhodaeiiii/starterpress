<?php
/**
 * Block editor integration.
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
 * Registers editor-only assets and block style variations.
 */
final class Editor implements ServiceInterface {

	/**
	 * {@inheritDoc}
	 */
	public function register(): void {
		add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_editor_assets' ) );
		add_action( 'init', array( $this, 'register_block_styles' ) );
	}

	/**
	 * Enqueue editor-only stylesheet.
	 *
	 * @return void
	 */
	public function enqueue_editor_assets(): void {
		$editor_css = STARTERPRESS_PATH . 'assets/css/editor.css';

		wp_enqueue_style(
			'starterpress-editor',
			STARTERPRESS_URI . 'assets/css/editor.css',
			array(),
			Helper::asset_version( $editor_css )
		);
	}

	/**
	 * Register custom block style variations.
	 *
	 * @return void
	 */
	public function register_block_styles(): void {
		register_block_style(
			'core/button',
			array(
				'name'  => 'outline',
				'label' => __( 'حاشیه‌دار', 'starterpress' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'card',
				'label' => __( 'کارت', 'starterpress' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'rounded',
				'label' => __( 'گرد', 'starterpress' ),
			)
		);
	}
}
