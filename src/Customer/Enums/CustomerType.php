<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CustomerType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CustomerType
 *
 * @subpackage Enumerations
 */
class CustomerType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Light'
     *
     * @return string 'Light'
     */
    const VALUE_LIGHT = 'Light';
    /**
     * Constant for value 'Red'
     *
     * @return string 'Red'
     */
    const VALUE_RED = 'Red';
    /**
     * Constant for value 'Gold'
     *
     * @return string 'Gold'
     */
    const VALUE_GOLD = 'Gold';
    /**
     * Constant for value 'Consumer'
     *
     * @return string 'Consumer'
     */
    const VALUE_CONSUMER = 'Consumer';
    /**
     * Constant for value 'Corporate'
     *
     * @return string 'Corporate'
     */
    const VALUE_CORPORATE = 'Corporate';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_RED
     * @uses self::VALUE_GOLD
     * @uses self::VALUE_CONSUMER
     * @uses self::VALUE_CORPORATE
     * @uses self::VALUE_LIGHT
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LIGHT,
            self::VALUE_RED,
            self::VALUE_GOLD,
            self::VALUE_CONSUMER,
            self::VALUE_CORPORATE,
        ];
    }
}
