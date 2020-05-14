<?php

use SkyVerge\WooCommerce\Facebook\Handlers\Connection;

/**
 * Tests the WC_Facebookcommerce class.
 */
class WC_Facebookcommerce_Test extends \Codeception\TestCase\WPTestCase {


	/** @var \IntegrationTester */
	protected $tester;


	/** Test methods **************************************************************************************************/


	/** @see WC_Facebookcommerce::get_connection_handler() */
	public function test_get_connection_handler() {

		$this->assertInstanceOf( Connection::class, facebook_for_woocommerce()->get_connection_handler() );
	}


}