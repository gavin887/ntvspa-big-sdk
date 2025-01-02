<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ContactPersonType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContactPersonType
 *
 * @subpackage Enumerations
 */
class ContactPersonType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FATTURAZIONE'
     *
     * @return string 'FATTURAZIONE'
     */
    const VALUE_FATTURAZIONE = 'FATTURAZIONE';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_FATTURAZIONE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FATTURAZIONE,
        ];
    }
}
