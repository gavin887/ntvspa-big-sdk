<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RetrieveAgencyAccountingDocumentTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RetrieveAgencyAccountingDocumentTypeEnum
 *
 * @subpackage Enumerations
 */
class RetrieveAgencyAccountingDocumentTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Commission'
     *
     * @return string 'Commission'
     */
    const VALUE_COMMISSION = 'Commission';
    /**
     * Constant for value 'TravelAgencyInvoice'
     *
     * @return string 'TravelAgencyInvoice'
     */
    const VALUE_TRAVEL_AGENCY_INVOICE = 'TravelAgencyInvoice';
    /**
     * Constant for value 'CorporateAccountStatement'
     *
     * @return string 'CorporateAccountStatement'
     */
    const VALUE_CORPORATE_ACCOUNT_STATEMENT = 'CorporateAccountStatement';
    /**
     * Constant for value 'CorporateAccountStatementCSV'
     *
     * @return string 'CorporateAccountStatementCSV'
     */
    const VALUE_CORPORATE_ACCOUNT_STATEMENT_CSV = 'CorporateAccountStatementCSV';
    /**
     * Constant for value 'AC_AccountStatement'
     *
     * @return string 'AC_AccountStatement'
     */
    const VALUE_AC_ACCOUNT_STATEMENT = 'AC_AccountStatement';
    /**
     * Constant for value 'AC_AccountStatementCSV'
     *
     * @return string 'AC_AccountStatementCSV'
     */
    const VALUE_AC_ACCOUNT_STATEMENT_CSV = 'AC_AccountStatementCSV';
    /**
     * Constant for value 'CommissionCSV'
     *
     * @return string 'CommissionCSV'
     */
    const VALUE_COMMISSION_CSV = 'CommissionCSV';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_TRAVEL_AGENCY_INVOICE
     * @uses self::VALUE_CORPORATE_ACCOUNT_STATEMENT
     * @uses self::VALUE_CORPORATE_ACCOUNT_STATEMENT_CSV
     * @uses self::VALUE_AC_ACCOUNT_STATEMENT
     * @uses self::VALUE_AC_ACCOUNT_STATEMENT_CSV
     * @uses self::VALUE_COMMISSION_CSV
     * @uses self::VALUE_COMMISSION
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_COMMISSION,
            self::VALUE_TRAVEL_AGENCY_INVOICE,
            self::VALUE_CORPORATE_ACCOUNT_STATEMENT,
            self::VALUE_CORPORATE_ACCOUNT_STATEMENT_CSV,
            self::VALUE_AC_ACCOUNT_STATEMENT,
            self::VALUE_AC_ACCOUNT_STATEMENT_CSV,
            self::VALUE_COMMISSION_CSV,
        ];
    }
}
