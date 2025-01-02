<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Gender Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Gender
 *
 * @subpackage Enumerations
 */
class Gender extends AbstractStructEnumBase
{
    /**
     * Constant for value 'M'
     *
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'F'
     *
     * @return string 'F'
     */
    const VALUE_F = 'F';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_F
     * @uses self::VALUE_M
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_M,
            self::VALUE_F,
        ];
    }
}
