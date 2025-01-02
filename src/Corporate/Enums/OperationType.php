<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OperationType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OperationType
 *
 * @subpackage Enumerations
 */
class OperationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Add'
     *
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Modify'
     *
     * @return string 'Modify'
     */
    const VALUE_MODIFY = 'Modify';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_MODIFY
     * @uses self::VALUE_ADD
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADD,
            self::VALUE_MODIFY,
        ];
    }
}
