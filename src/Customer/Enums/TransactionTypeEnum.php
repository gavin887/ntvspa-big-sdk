<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TransactionTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TransactionTypeEnum
 *
 * @subpackage Enumerations
 */
class TransactionTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Debit'
     *
     * @return string 'Debit'
     */
    const VALUE_DEBIT = 'Debit';
    /**
     * Constant for value 'Credit'
     *
     * @return string 'Credit'
     */
    const VALUE_CREDIT = 'Credit';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_CREDIT
     * @uses self::VALUE_DEBIT
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEBIT,
            self::VALUE_CREDIT,
        ];
    }
}
