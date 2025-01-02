<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PreferredMeal Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferredMeal
 *
 * @subpackage Enumerations
 */
class PreferredMeal extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Pastolightnormale'
     *
     * @return string 'Pastolightnormale'
     */
    const VALUE_PASTOLIGHTNORMALE = 'Pastolightnormale';
    /**
     * Constant for value 'Pastolightvegetariano'
     *
     * @return string 'Pastolightvegetariano'
     */
    const VALUE_PASTOLIGHTVEGETARIANO = 'Pastolightvegetariano';
    /**
     * Constant for value 'Pastofullnormale'
     *
     * @return string 'Pastofullnormale'
     */
    const VALUE_PASTOFULLNORMALE = 'Pastofullnormale';
    /**
     * Constant for value 'Pastofullvegetariano'
     *
     * @return string 'Pastofullvegetariano'
     */
    const VALUE_PASTOFULLVEGETARIANO = 'Pastofullvegetariano';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_PASTOLIGHTVEGETARIANO
     * @uses self::VALUE_PASTOFULLNORMALE
     * @uses self::VALUE_PASTOFULLVEGETARIANO
     * @uses self::VALUE_PASTOLIGHTNORMALE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PASTOLIGHTNORMALE,
            self::VALUE_PASTOLIGHTVEGETARIANO,
            self::VALUE_PASTOFULLNORMALE,
            self::VALUE_PASTOFULLVEGETARIANO,
        ];
    }
}
