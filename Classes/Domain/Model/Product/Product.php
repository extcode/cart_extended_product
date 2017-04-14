<?php

namespace Extcode\CartExtendedProduct\Domain\Model\Product;

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

/**
 * Product
 *
 * @package cart_extended_product
 * @author Daniel Lorenz <ext.cart@extco.de>
 */
class Product extends \Extcode\Cart\Domain\Model\Product\Product
{
    /**
     * Manufacturer
     *
     * @var string
     */
    protected $manufacturer = '';

    /**
     * Returns the Manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets the Manufacturer
     *
     * @param string $manufacturer
     *
     * @return void
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }
}
