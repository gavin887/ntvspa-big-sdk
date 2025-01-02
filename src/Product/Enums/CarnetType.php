<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CarnetType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CarnetType
 *
 * @subpackage Enumerations
 */
class CarnetType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Prodotto Abbonamento'
     *
     * @return string 'Prodotto Abbonamento'
     */
    const VALUE_PRODOTTO_ABBONAMENTO = 'Prodotto Abbonamento';
    /**
     * Constant for value 'Prodotto Carnet'
     *
     * @return string 'Prodotto Carnet'
     */
    const VALUE_PRODOTTO_CARNET = 'Prodotto Carnet';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_PRODOTTO_CARNET
     * @uses self::VALUE_PRODOTTO_ABBONAMENTO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PRODOTTO_ABBONAMENTO,
            self::VALUE_PRODOTTO_CARNET,
        ];
    }
}
