<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AccountStatementTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AccountStatementTypeEnum
 *
 * @subpackage Enumerations
 */
class AccountStatementTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotadiCredito'
     *
     * @return string 'NotadiCredito'
     */
    const VALUE_NOTADI_CREDITO = 'NotadiCredito';
    /**
     * Constant for value 'EstrattoConto'
     *
     * @return string 'EstrattoConto'
     */
    const VALUE_ESTRATTO_CONTO = 'EstrattoConto';
    /**
     * Constant for value 'NotadiCreditoAC'
     *
     * @return string 'NotadiCreditoAC'
     */
    const VALUE_NOTADI_CREDITO_AC = 'NotadiCreditoAC';
    /**
     * Constant for value 'EstrattoContoAC'
     *
     * @return string 'EstrattoContoAC'
     */
    const VALUE_ESTRATTO_CONTO_AC = 'EstrattoContoAC';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_ESTRATTO_CONTO
     * @uses self::VALUE_NOTADI_CREDITO_AC
     * @uses self::VALUE_ESTRATTO_CONTO_AC
     * @uses self::VALUE_NOTADI_CREDITO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOTADI_CREDITO,
            self::VALUE_ESTRATTO_CONTO,
            self::VALUE_NOTADI_CREDITO_AC,
            self::VALUE_ESTRATTO_CONTO_AC,
        ];
    }
}
