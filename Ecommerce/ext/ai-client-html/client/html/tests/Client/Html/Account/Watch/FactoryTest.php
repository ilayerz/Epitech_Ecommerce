<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2014
 * @copyright Aimeos (aimeos.org), 2015-2018
 */


namespace Aimeos\Client\Html\Account\Watch;


class FactoryTest extends \PHPUnit\Framework\TestCase
{
	private $context;


	protected function setUp()
	{
		$this->context = \TestHelperHtml::getContext();
	}


	protected function tearDown()
	{
		unset( $this->context );
	}


	public function testCreateClient()
	{
		$client = \Aimeos\Client\Html\Account\Watch\Factory::create( $this->context );
		$this->assertInstanceOf( '\\Aimeos\\Client\\Html\\Iface', $client );
	}


	public function testCreateClientName()
	{
		$client = \Aimeos\Client\Html\Account\Watch\Factory::create( $this->context, 'Standard' );
		$this->assertInstanceOf( '\\Aimeos\\Client\\Html\\Iface', $client );
	}


	public function testCreateClientNameInvalid()
	{
		$this->setExpectedException( '\\Aimeos\\Client\\Html\\Exception' );
		\Aimeos\Client\Html\Account\Watch\Factory::create( $this->context, '$$$' );
	}


	public function testCreateClientNameNotFound()
	{
		$this->setExpectedException( '\\Aimeos\\Client\\Html\\Exception' );
		\Aimeos\Client\Html\Account\Watch\Factory::create( $this->context, 'notfound' );
	}

}
