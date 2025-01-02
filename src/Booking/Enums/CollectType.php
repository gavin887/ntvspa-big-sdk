<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CollectType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CollectType
 *
 * @subpackage Enumerations
 */
class CollectType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SellerChargeable'
     *
     * @return string 'SellerChargeable'
     */
    const VALUE_SELLER_CHARGEABLE = 'SellerChargeable';
    /**
     * Constant for value 'ExternalChargeable'
     *
     * @return string 'ExternalChargeable'
     */
    const VALUE_EXTERNAL_CHARGEABLE = 'ExternalChargeable';
    /**
     * Constant for value 'SellerNonChargeable'
     *
     * @return string 'SellerNonChargeable'
     */
    const VALUE_SELLER_NON_CHARGEABLE = 'SellerNonChargeable';
    /**
     * Constant for value 'ExternalNonChargeable'
     *
     * @return string 'ExternalNonChargeable'
     */
    const VALUE_EXTERNAL_NON_CHARGEABLE = 'ExternalNonChargeable';
    /**
     * Constant for value 'ExternalChargeableImmediate'
     *
     * @return string 'ExternalChargeableImmediate'
     */
    const VALUE_EXTERNAL_CHARGEABLE_IMMEDIATE = 'ExternalChargeableImmediate';
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
     * @uses self::VALUE_EXTERNAL_CHARGEABLE
     * @uses self::VALUE_SELLER_NON_CHARGEABLE
     * @uses self::VALUE_EXTERNAL_NON_CHARGEABLE
     * @uses self::VALUE_EXTERNAL_CHARGEABLE_IMMEDIATE
     * @uses self::VALUE_UNMAPPED
     * @uses self::VALUE_SELLER_CHARGEABLE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SELLER_CHARGEABLE,
            self::VALUE_EXTERNAL_CHARGEABLE,
            self::VALUE_SELLER_NON_CHARGEABLE,
            self::VALUE_EXTERNAL_NON_CHARGEABLE,
            self::VALUE_EXTERNAL_CHARGEABLE_IMMEDIATE,
            self::VALUE_UNMAPPED,
        ];
    }
}
