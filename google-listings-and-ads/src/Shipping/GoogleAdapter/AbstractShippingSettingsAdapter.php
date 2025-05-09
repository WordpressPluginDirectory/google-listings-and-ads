<?php
declare( strict_types=1 );

namespace Automattic\WooCommerce\GoogleListingsAndAds\Shipping\GoogleAdapter;

use Automattic\WooCommerce\GoogleListingsAndAds\Exception\InvalidValue;
use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent\DeliveryTime;
use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent\ShippingSettings as GoogleShippingSettings;

defined( 'ABSPATH' ) || exit;

/**
 * Class AbstractShippingSettingsAdapter
 *
 * @package Automattic\WooCommerce\GoogleListingsAndAds\Shipping
 *
 * @since   2.1.0
 */
abstract class AbstractShippingSettingsAdapter extends GoogleShippingSettings {
	/**
	 * @var string
	 */
	protected $currency;

	/**
	 * @var array
	 */
	protected $delivery_times;

	/**
	 * Initialize this object's properties from an array.
	 *
	 * @param array $properties Used to seed this object's properties.
	 *
	 * @return void
	 *
	 * @throws InvalidValue When the required parameters are not provided, or they are invalid.
	 */
	public function mapTypes( $properties ) {
		$this->validate_gla_data( $properties );

		$this->currency       = $properties['currency'];
		$this->delivery_times = $properties['delivery_times'];

		$this->map_gla_data( $properties );

		$this->unset_gla_data( $properties );

		parent::mapTypes( $properties );
	}

	/**
	 * Return estimated delivery time for a given country in days.
	 *
	 * @param string $country
	 *
	 * @return DeliveryTime
	 *
	 * @throws InvalidValue If no delivery time can be found for the country.
	 */
	protected function get_delivery_time( string $country ): DeliveryTime {
		if ( ! array_key_exists( $country, $this->delivery_times ) ) {
			throw new InvalidValue( 'No estimated delivery time provided for country: ' . $country );
		}

		$time = new DeliveryTime();
		$time->setMinHandlingTimeInDays( 0 );
		$time->setMaxHandlingTimeInDays( 0 );
		$time->setMinTransitTimeInDays( (int) $this->delivery_times[ $country ]['time'] );
		$time->setMaxTransitTimeInDays( (int) $this->delivery_times[ $country ]['max_time'] );

		return $time;
	}

	/**
	 * Validates the input array provided to this class.
	 *
	 * @param array $data
	 *
	 * @throws InvalidValue When the required parameters are not provided, or they are invalid.
	 *
	 * @link AbstractShippingSettingsAdapter::mapTypes() The $data input comes from this method.
	 */
	protected function validate_gla_data( array $data ): void {
		if ( empty( $data['currency'] ) || ! is_string( $data['currency'] ) ) {
			throw new InvalidValue( 'The value of "currency" must be a non empty string.' );
		}
		if ( empty( $data['delivery_times'] ) || ! is_array( $data['delivery_times'] ) ) {
			throw new InvalidValue( 'The value of "delivery_times" must be a non empty array.' );
		}
	}

	/**
	 * Remove the extra data we added to the input array since the MC API doesn't expect them (and it will fail).
	 *
	 * @param array $data
	 */
	protected function unset_gla_data( array &$data ): void {
		unset( $data['currency'] );
		unset( $data['delivery_times'] );
	}

	/**
	 * Parses the already validated input data and maps the provided shipping rates into MC shipping settings.
	 *
	 * @param array $data Validated data.
	 */
	abstract protected function map_gla_data( array $data ): void;
}
