<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PreferredFareClass Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferredFareClass
 *
 * @subpackage Enumerations
 */
class PreferredFareClass extends AbstractStructEnumBase
{
    /**
     * Constant for value 'LowCost'
     *
     * @return string 'LowCost'
     */
    const VALUE_LOW_COST = 'LowCost';
    /**
     * Constant for value 'Discount'
     *
     * @return string 'Discount'
     */
    const VALUE_DISCOUNT = 'Discount';
    /**
     * Constant for value 'Flex'
     *
     * @return string 'Flex'
     */
    const VALUE_FLEX = 'Flex';
    /**
     * Constant for value 'Salottino'
     *
     * @return string 'Salottino'
     */
    const VALUE_SALOTTINO = 'Salottino';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_DISCOUNT
     * @uses self::VALUE_FLEX
     * @uses self::VALUE_SALOTTINO
     * @uses self::VALUE_LOW_COST
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LOW_COST,
            self::VALUE_DISCOUNT,
            self::VALUE_FLEX,
            self::VALUE_SALOTTINO,
        ];
    }
}
