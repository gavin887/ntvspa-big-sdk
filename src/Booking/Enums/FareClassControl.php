<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FareClassControl Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FareClassControl
 *
 * @subpackage Enumerations
 */
class FareClassControl extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Default'
     *
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'LowestFareClass'
     *
     * @return string 'LowestFareClass'
     */
    const VALUE_LOWEST_FARE_CLASS = 'LowestFareClass';
    /**
     * Constant for value 'CompressByProductClass'
     *
     * @return string 'CompressByProductClass'
     */
    const VALUE_COMPRESS_BY_PRODUCT_CLASS = 'CompressByProductClass';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_LOWEST_FARE_CLASS
     * @uses self::VALUE_COMPRESS_BY_PRODUCT_CLASS
     * @uses self::VALUE_DEFAULT
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEFAULT,
            self::VALUE_LOWEST_FARE_CLASS,
            self::VALUE_COMPRESS_BY_PRODUCT_CLASS,
        ];
    }
}
