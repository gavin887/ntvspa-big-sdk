<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PartnershipTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PartnershipTypeEnum
 *
 * @subpackage Enumerations
 */
class PartnershipTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AGENZIA DI VIAGGIO'
     *
     * @return string 'AGENZIA DI VIAGGIO'
     */
    const VALUE_AGENZIA_DI_VIAGGIO = 'AGENZIA DI VIAGGIO';
    /**
     * Constant for value 'CORPORATE'
     *
     * @return string 'CORPORATE'
     */
    const VALUE_CORPORATE = 'CORPORATE';
    /**
     * Constant for value 'AGENZIA DI VIAGGIO ESTERA'
     *
     * @return string 'AGENZIA DI VIAGGIO ESTERA'
     */
    const VALUE_AGENZIA_DI_VIAGGIO_ESTERA = 'AGENZIA DI VIAGGIO ESTERA';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_CORPORATE
     * @uses self::VALUE_AGENZIA_DI_VIAGGIO_ESTERA
     * @uses self::VALUE_AGENZIA_DI_VIAGGIO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AGENZIA_DI_VIAGGIO,
            self::VALUE_CORPORATE,
            self::VALUE_AGENZIA_DI_VIAGGIO_ESTERA,
        ];
    }
}
