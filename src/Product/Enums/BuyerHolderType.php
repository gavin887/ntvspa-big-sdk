<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BuyerHolderType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BuyerHolderType
 *
 * @subpackage Enumerations
 */
class BuyerHolderType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Customer'
     *
     * @return string 'Customer'
     */
    const VALUE_CUSTOMER = 'Customer';
    /**
     * Constant for value 'Agency'
     *
     * @return string 'Agency'
     */
    const VALUE_AGENCY = 'Agency';
    /**
     * Constant for value 'Corporate'
     *
     * @return string 'Corporate'
     */
    const VALUE_CORPORATE = 'Corporate';
    /**
     * Constant for value 'Impresa'
     *
     * @return string 'Impresa'
     */
    const VALUE_IMPRESA = 'Impresa';
    /**
     * Constant for value 'ImpresaLight'
     *
     * @return string 'ImpresaLight'
     */
    const VALUE_IMPRESA_LIGHT = 'ImpresaLight';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_CORPORATE
     * @uses self::VALUE_IMPRESA
     * @uses self::VALUE_IMPRESA_LIGHT
     * @uses self::VALUE_CUSTOMER
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CUSTOMER,
            self::VALUE_AGENCY,
            self::VALUE_CORPORATE,
            self::VALUE_IMPRESA,
            self::VALUE_IMPRESA_LIGHT,
        ];
    }
}
