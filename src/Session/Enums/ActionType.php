<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ActionType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ActionType
 *
 * @subpackage Enumerations
 */
class ActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UpgradePostAcquisto'
     *
     * @return string 'UpgradePostAcquisto'
     */
    const VALUE_UPGRADE_POST_ACQUISTO = 'UpgradePostAcquisto';
    /**
     * Constant for value 'UpgradeAcquisto'
     *
     * @return string 'UpgradeAcquisto'
     */
    const VALUE_UPGRADE_ACQUISTO = 'UpgradeAcquisto';
    /**
     * Constant for value 'OffertaDedicata'
     *
     * @return string 'OffertaDedicata'
     */
    const VALUE_OFFERTA_DEDICATA = 'OffertaDedicata';
    /**
     * Constant for value 'CreditoCBBonusPNR'
     *
     * @return string 'CreditoCBBonusPNR'
     */
    const VALUE_CREDITO_CBBONUS_PNR = 'CreditoCBBonusPNR';
    /**
     * Constant for value 'CarnetSpecial'
     *
     * @return string 'CarnetSpecial'
     */
    const VALUE_CARNET_SPECIAL = 'CarnetSpecial';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_UPGRADE_ACQUISTO
     * @uses self::VALUE_OFFERTA_DEDICATA
     * @uses self::VALUE_CREDITO_CBBONUS_PNR
     * @uses self::VALUE_CARNET_SPECIAL
     * @uses self::VALUE_UPGRADE_POST_ACQUISTO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UPGRADE_POST_ACQUISTO,
            self::VALUE_UPGRADE_ACQUISTO,
            self::VALUE_OFFERTA_DEDICATA,
            self::VALUE_CREDITO_CBBONUS_PNR,
            self::VALUE_CARNET_SPECIAL,
        ];
    }
}
