<?php
/**
 * Service contract.
 *
 * @package StarterPress
 */

declare(strict_types=1);

namespace StarterPress\Interfaces;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Every bootable theme service must implement this contract.
 */
interface ServiceInterface {

	/**
	 * Register the service hooks with WordPress.
	 *
	 * @return void
	 */
	public function register(): void;
}
