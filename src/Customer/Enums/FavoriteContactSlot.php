<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FavoriteContactSlot Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FavoriteContactSlot
 *
 * @subpackage Enumerations
 */
class FavoriteContactSlot extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Mattina'
     *
     * @return string 'Mattina'
     */
    const VALUE_MATTINA = 'Mattina';
    /**
     * Constant for value 'Pomeriggio'
     *
     * @return string 'Pomeriggio'
     */
    const VALUE_POMERIGGIO = 'Pomeriggio';
    /**
     * Constant for value 'Sera'
     *
     * @return string 'Sera'
     */
    const VALUE_SERA = 'Sera';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_POMERIGGIO
     * @uses self::VALUE_SERA
     * @uses self::VALUE_MATTINA
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MATTINA,
            self::VALUE_POMERIGGIO,
            self::VALUE_SERA,
        ];
    }
}
