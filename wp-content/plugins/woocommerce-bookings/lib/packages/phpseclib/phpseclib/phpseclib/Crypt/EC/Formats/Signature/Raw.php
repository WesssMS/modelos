<?php

/**
 * Raw EC Signature Handler
 *
 * PHP version 5
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 *
 * Modified by woocommerce on 29-January-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Automattic\WooCommerce\Bookings\Vendor\phpseclib3\Crypt\EC\Formats\Signature;

use Automattic\WooCommerce\Bookings\Vendor\phpseclib3\Crypt\Common\Formats\Signature\Raw as Progenitor;

/**
 * Raw DSA Signature Handler
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 */
abstract class Raw extends Progenitor
{
}