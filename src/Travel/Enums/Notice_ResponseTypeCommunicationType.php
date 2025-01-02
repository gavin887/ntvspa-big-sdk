<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Notice_ResponseTypeCommunicationType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Notice_ResponseTypeCommunicationType
 *
 * @subpackage Enumerations
 */
class Notice_ResponseTypeCommunicationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OTO'
     *
     * @return string 'OTO'
     */
    const VALUE_OTO = 'OTO';
    /**
     * Constant for value 'OTM'
     *
     * @return string 'OTM'
     */
    const VALUE_OTM = 'OTM';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_OTM
     * @uses self::VALUE_OTO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OTO,
            self::VALUE_OTM,
        ];
    }
}
