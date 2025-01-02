<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CarnetStatus Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CarnetStatus
 *
 * @subpackage Enumerations
 */
class CarnetStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NullValue'
     *
     * @return string 'NullValue'
     */
    const VALUE_NULL_VALUE = 'NullValue';
    /**
     * Constant for value 'Active'
     *
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_NULL_VALUE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NULL_VALUE,
            self::VALUE_ACTIVE,
        ];
    }
}
