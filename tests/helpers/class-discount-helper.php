<?php

/**
 * Class EDD_Helper_Discount.
 *
 * Helper class to create and delete a discount easily.
 */
class EDD_Helper_Discount extends WP_UnitTestCase {

	/**
	 * Delete a discount.
	 *
	 * @since 2.3
	 *
	 * @param int $discount_id ID of the discount to delete.
	 */
	public static function delete_discount( $discount_id ) {

		// Delete the post
		wp_delete_post( $discount_id, true );

	}

	/**
	 * Create a simple percentage discount.
	 *
	 * @since 2.3
	 */
	public static function create_simple_percent_discount() {

		$post = array(
			'code'              => '20OFF',
			'uses'              => 0,
			'max'               => 10,
			'name'              => '20 Percent Off',
			'type'              => 'percent',
			'amount'            => '20',
			'start'             => '13/01/2015 00:00:00',
			'expiration'        => '12/01/2050 00:00:00',
			'min_price'         => 100,
			'status'            => 'active',
			'product_condition' => 'all'
		);
		$discount_id = edd_store_discount( $post );

		return $discount_id;

	}

	/**
	 * Create a simple flat discount.
	 *
	 * @since 2.3
	 */
	public static function create_simple_flat_discount() {

		$post = array(
			'code'              => '10FLAT',
			'uses'              => 0,
			'max'               => 10,
			'name'              => '$10 Off',
			'type'              => 'flat',
			'amount'            => '10',
			'start'             => '13/01/2015 00:00:00',
			'expiration'        => '12/01/2050 00:00:00',
			'min_price'         => 100,
			'status'            => 'active',
			'product_condition' => 'all'
		);
		$discount_id = edd_store_discount( $post );

		return $discount_id;

	}

}