<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PreferredClassOfService Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferredClassOfService
 *
 * @subpackage Enumerations
 */
class PreferredClassOfService extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Smart'
     *
     * @return string 'Smart'
     */
    const VALUE_SMART = 'Smart';
    /**
     * Constant for value 'Top'
     *
     * @return string 'Top'
     */
    const VALUE_TOP = 'Top';
    /**
     * Constant for value 'Club'
     *
     * @return string 'Club'
     */
    const VALUE_CLUB = 'Club';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_TOP
     * @uses self::VALUE_CLUB
     * @uses self::VALUE_SMART
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SMART,
            self::VALUE_TOP,
            self::VALUE_CLUB,
        ];
    }
}
