<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentAccountType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PaymentAccountType
 *
 * @subpackage Enumerations
 */
class PaymentAccountType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unmapped'
     *
     * @return string 'Unmapped'
     */
    const VALUE_UNMAPPED = 'Unmapped';
    /**
     * Constant for value 'PNR'
     *
     * @return string 'PNR'
     */
    const VALUE_PNR = 'PNR';
    /**
     * Constant for value 'CreditShell'
     *
     * @return string 'CreditShell'
     */
    const VALUE_CREDIT_SHELL = 'CreditShell';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_PNR
     * @uses self::VALUE_CREDIT_SHELL
     * @uses self::VALUE_UNMAPPED
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNMAPPED,
            self::VALUE_PNR,
            self::VALUE_CREDIT_SHELL,
        ];
    }
}
