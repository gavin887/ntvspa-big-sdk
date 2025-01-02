<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentMethod Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PaymentMethod
 *
 * @subpackage Enumerations
 */
class PaymentMethod extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CartadiCredito'
     *
     * @return string 'CartadiCredito'
     */
    const VALUE_CARTADI_CREDITO = 'CartadiCredito';
    /**
     * Constant for value 'BancoPosta'
     *
     * @return string 'BancoPosta'
     */
    const VALUE_BANCO_POSTA = 'BancoPosta';
    /**
     * Constant for value 'Bancomat'
     *
     * @return string 'Bancomat'
     */
    const VALUE_BANCOMAT = 'Bancomat';
    /**
     * Constant for value 'Voucher'
     *
     * @return string 'Voucher'
     */
    const VALUE_VOUCHER = 'Voucher';
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
     * @uses self::VALUE_BANCO_POSTA
     * @uses self::VALUE_BANCOMAT
     * @uses self::VALUE_VOUCHER
     * @uses self::VALUE_CREDIT_SHELL
     * @uses self::VALUE_CARTADI_CREDITO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CARTADI_CREDITO,
            self::VALUE_BANCO_POSTA,
            self::VALUE_BANCOMAT,
            self::VALUE_VOUCHER,
            self::VALUE_CREDIT_SHELL,
        ];
    }
}
