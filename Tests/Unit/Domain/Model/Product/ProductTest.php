<?php

namespace Extcode\CartExtendedProduct\Tests\Domain\Model\Product;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Product Test
 *
 * @package cart_extended Product
 * @author Daniel Lorenz <ext.cart@extco.de>
 */
class ProductTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

    /**
     * Product
     *
     * @var \Extcode\CartExtendedProduct\Domain\Model\Product\Product
     */
    protected $product = null;

    protected function setUp()
    {
        $this->product = new \Extcode\CartExtendedProduct\Domain\Model\Product\Product();
    }

    protected function tearDown()
    {
        unset($this->product);
    }

    /**
     * @test
     */
    public function getManufacturerInitiallyReturnsEmptyString()
    {
        $this->assertSame(
            '',
            $this->product->getManufacturer()
        );
    }

    /**
     * @test
     */
    public function setManufacturerSetsManufacturer()
    {
        $this->product->setManufacturer('Manufacturer');

        $this->assertSame(
            'Manufacturer',
            $this->product->getManufacturer()
        );
    }
}
