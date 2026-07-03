<?php
/**
 * Theme application container.
 *
 * @package StarterPress
 */

declare(strict_types=1);

namespace StarterPress;

use StarterPress\Interfaces\ServiceInterface;
use StarterPress\Traits\Singleton;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Boots and registers every theme service.
 */
final class Theme {

	use Singleton;

	/**
	 * Registered services.
	 *
	 * @var array<int, ServiceInterface>
	 */
	private array $services = array();

	/**
	 * Register all theme services with WordPress.
	 *
	 * @return void
	 */
	public function register(): void {
		$this->services = $this->resolve_services();

		foreach ( $this->services as $service ) {
			$service->register();
		}
	}

	/**
	 * Build the ordered list of theme services.
	 *
	 * @return array<int, ServiceInterface>
	 */
	private function resolve_services(): array {
		return array(
			new Setup(),
			new Assets(),
			new Navigation(),
			new Accessibility(),
			new Editor(),
			new Patterns(),
			new Styles(),
			new Performance(),
			new WooCommerce(),
		);
	}
}
