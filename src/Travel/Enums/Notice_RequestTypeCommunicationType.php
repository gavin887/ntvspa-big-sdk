<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Notice_RequestTypeCommunicationType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Notice_RequestTypeCommunicationType
 *
 * @subpackage Enumerations
 */
class Notice_RequestTypeCommunicationType extends AbstractStructEnumBase
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
     * Constant for value 'ALL'
     *
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_OTM
     * @uses self::VALUE_ALL
     * @uses self::VALUE_OTO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OTO,
            self::VALUE_OTM,
            self::VALUE_ALL,
        ];
    }
}
