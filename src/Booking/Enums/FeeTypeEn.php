<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FeeTypeEn Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FeeTypeEn
 *
 * @subpackage Enumerations
 */
class FeeTypeEn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ServiceFee'
     *
     * @return string 'ServiceFee'
     */
    const VALUE_SERVICE_FEE = 'ServiceFee';
    /**
     * Constant for value 'PenaltyFee'
     *
     * @return string 'PenaltyFee'
     */
    const VALUE_PENALTY_FEE = 'PenaltyFee';
    /**
     * Constant for value 'Unmapped'
     *
     * @return string 'Unmapped'
     */
    const VALUE_UNMAPPED = 'Unmapped';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_PENALTY_FEE
     * @uses self::VALUE_UNMAPPED
     * @uses self::VALUE_SERVICE_FEE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SERVICE_FEE,
            self::VALUE_PENALTY_FEE,
            self::VALUE_UNMAPPED,
        ];
    }
}
