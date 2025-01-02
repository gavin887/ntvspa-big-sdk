<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RequestPaymentMethodType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestPaymentMethodType
 *
 * @subpackage Enumerations
 */
class RequestPaymentMethodType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PrePaid'
     *
     * @return string 'PrePaid'
     */
    const VALUE_PRE_PAID = 'PrePaid';
    /**
     * Constant for value 'ExternalAccount'
     *
     * @return string 'ExternalAccount'
     */
    const VALUE_EXTERNAL_ACCOUNT = 'ExternalAccount';
    /**
     * Constant for value 'AgencyAccount'
     *
     * @return string 'AgencyAccount'
     */
    const VALUE_AGENCY_ACCOUNT = 'AgencyAccount';
    /**
     * Constant for value 'CreditShell'
     *
     * @return string 'CreditShell'
     */
    const VALUE_CREDIT_SHELL = 'CreditShell';
    /**
     * Constant for value 'CreditFile'
     *
     * @return string 'CreditFile'
     */
    const VALUE_CREDIT_FILE = 'CreditFile';
    /**
     * Constant for value 'Voucher'
     *
     * @return string 'Voucher'
     */
    const VALUE_VOUCHER = 'Voucher';
    /**
     * Constant for value 'Refund'
     *
     * @return string 'Refund'
     */
    const VALUE_REFUND = 'Refund';
    /**
     * Constant for value 'BusinessPass'
     *
     * @return string 'BusinessPass'
     */
    const VALUE_BUSINESS_PASS = 'BusinessPass';
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
     * @uses self::VALUE_PRE_PAID
     * @uses self::VALUE_EXTERNAL_ACCOUNT
     * @uses self::VALUE_AGENCY_ACCOUNT
     * @uses self::VALUE_CREDIT_SHELL
     * @uses self::VALUE_CREDIT_FILE
     * @uses self::VALUE_VOUCHER
     * @uses self::VALUE_REFUND
     * @uses self::VALUE_BUSINESS_PASS
     * @uses self::VALUE_UNMAPPED
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PRE_PAID,
            self::VALUE_EXTERNAL_ACCOUNT,
            self::VALUE_AGENCY_ACCOUNT,
            self::VALUE_CREDIT_SHELL,
            self::VALUE_CREDIT_FILE,
            self::VALUE_VOUCHER,
            self::VALUE_REFUND,
            self::VALUE_BUSINESS_PASS,
            self::VALUE_UNMAPPED,
        ];
    }
}
