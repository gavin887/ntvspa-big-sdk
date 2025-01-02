<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductStatus Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductStatus
 *
 * @subpackage Enumerations
 */
class ProductStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Active'
     *
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Inactive'
     *
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_ACTIVE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACTIVE,
            self::VALUE_INACTIVE,
        ];
    }
}
