<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CostType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CostType
 *
 * @subpackage Enumerations
 */
class CostType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Fixed'
     *
     * @return string 'Fixed'
     */
    const VALUE_FIXED = 'Fixed';
    /**
     * Constant for value 'Percentage'
     *
     * @return string 'Percentage'
     */
    const VALUE_PERCENTAGE = 'Percentage';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_PERCENTAGE
     * @uses self::VALUE_FIXED
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FIXED,
            self::VALUE_PERCENTAGE,
        ];
    }
}
