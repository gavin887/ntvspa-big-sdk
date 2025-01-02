<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AddressType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddressType
 *
 * @subpackage Enumerations
 */
class AddressType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SPEDIZIONE'
     *
     * @return string 'SPEDIZIONE'
     */
    const VALUE_SPEDIZIONE = 'SPEDIZIONE';
    /**
     * Constant for value 'FATTURAZIONE'
     *
     * @return string 'FATTURAZIONE'
     */
    const VALUE_FATTURAZIONE = 'FATTURAZIONE';
    /**
     * Constant for value 'LEGALE'
     *
     * @return string 'LEGALE'
     */
    const VALUE_LEGALE = 'LEGALE';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_FATTURAZIONE
     * @uses self::VALUE_LEGALE
     * @uses self::VALUE_SPEDIZIONE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SPEDIZIONE,
            self::VALUE_FATTURAZIONE,
            self::VALUE_LEGALE,
        ];
    }
}
