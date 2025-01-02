<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PromotionType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PromotionType
 *
 * @subpackage Enumerations
 */
class PromotionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Lounge'
     *
     * @return string 'Lounge'
     */
    const VALUE_LOUNGE = 'Lounge';
    /**
     * Constant for value 'MoveWithUpgrade'
     *
     * @return string 'MoveWithUpgrade'
     */
    const VALUE_MOVE_WITH_UPGRADE = 'MoveWithUpgrade';
    /**
     * Constant for value 'Upgrade'
     *
     * @return string 'Upgrade'
     */
    const VALUE_UPGRADE = 'Upgrade';
    /**
     * Constant for value 'Promocode'
     *
     * @return string 'Promocode'
     */
    const VALUE_PROMOCODE = 'Promocode';
    /**
     * Constant for value 'FareType'
     *
     * @return string 'FareType'
     */
    const VALUE_FARE_TYPE = 'FareType';
    /**
     * Constant for value 'Voucher'
     *
     * @return string 'Voucher'
     */
    const VALUE_VOUCHER = 'Voucher';
    /**
     * Constant for value 'None'
     *
     * @return string 'None'
     */
    const VALUE_NONE = 'None';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_MOVE_WITH_UPGRADE
     * @uses self::VALUE_UPGRADE
     * @uses self::VALUE_PROMOCODE
     * @uses self::VALUE_FARE_TYPE
     * @uses self::VALUE_VOUCHER
     * @uses self::VALUE_NONE
     * @uses self::VALUE_LOUNGE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LOUNGE,
            self::VALUE_MOVE_WITH_UPGRADE,
            self::VALUE_UPGRADE,
            self::VALUE_PROMOCODE,
            self::VALUE_FARE_TYPE,
            self::VALUE_VOUCHER,
            self::VALUE_NONE,
        ];
    }
}
