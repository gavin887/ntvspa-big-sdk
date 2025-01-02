<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BillingCenterTypeTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BillingCenterTypeTypeEnum
 *
 * @subpackage Enumerations
 */
class BillingCenterTypeTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Base'
     *
     * @return string 'Base'
     */
    const VALUE_BASE = 'Base';
    /**
     * Constant for value 'Overcommission'
     *
     * @return string 'Overcommission'
     */
    const VALUE_OVERCOMMISSION = 'Overcommission';
    /**
     * Constant for value 'Full'
     *
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
    /**
     * Constant for value 'N/A'
     *
     * @return string 'N/A'
     */
    const VALUE_N_A = 'N/A';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_OVERCOMMISSION
     * @uses self::VALUE_FULL
     * @uses self::VALUE_N_A
     * @uses self::VALUE_BASE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BASE,
            self::VALUE_OVERCOMMISSION,
            self::VALUE_FULL,
            self::VALUE_N_A,
        ];
    }
}
