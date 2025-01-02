<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductType
 *
 * @subpackage Enumerations
 */
class ProductType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Servizi Informativi'
     *
     * @return string 'Servizi Informativi'
     */
    const VALUE_SERVIZI_INFORMATIVI = 'Servizi Informativi';
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
     * Constant for value 'Business Pass'
     *
     * @return string 'Business Pass'
     */
    const VALUE_BUSINESS_PASS = 'Business Pass';
    /**
     * Constant for value 'Carnet'
     *
     * @return string 'Carnet'
     */
    const VALUE_CARNET = 'Carnet';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_PRODOTTO_ABBONAMENTO
     * @uses self::VALUE_PRODOTTO_CARNET
     * @uses self::VALUE_BUSINESS_PASS
     * @uses self::VALUE_CARNET
     * @uses self::VALUE_SERVIZI_INFORMATIVI
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SERVIZI_INFORMATIVI,
            self::VALUE_PRODOTTO_ABBONAMENTO,
            self::VALUE_PRODOTTO_CARNET,
            self::VALUE_BUSINESS_PASS,
            self::VALUE_CARNET,
        ];
    }
}
