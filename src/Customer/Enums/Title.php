<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Title Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Title
 *
 * @subpackage Enumerations
 */
class Title extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Sig'
     *
     * @return string 'Sig'
     */
    const VALUE_SIG = 'Sig';
    /**
     * Constant for value 'Sigra'
     *
     * @return string 'Sigra'
     */
    const VALUE_SIGRA = 'Sigra';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_SIGRA
     * @uses self::VALUE_SIG
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SIG,
            self::VALUE_SIGRA,
        ];
    }
}
