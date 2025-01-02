<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FeeOperation Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FeeOperation
 *
 * @subpackage Enumerations
 */
class FeeOperation extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Add'
     *
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Delete'
     *
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_ADD
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADD,
            self::VALUE_DELETE,
        ];
    }
}
