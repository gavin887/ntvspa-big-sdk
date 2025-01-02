<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmployeeOffersType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeOffersType
 *
 * @subpackage Enumerations
 */
class EmployeeOffersType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ItaloLavoro'
     *
     * @return string 'ItaloLavoro'
     */
    const VALUE_ITALO_LAVORO = 'ItaloLavoro';
    /**
     * Constant for value 'ItaloPass'
     *
     * @return string 'ItaloPass'
     */
    const VALUE_ITALO_PASS = 'ItaloPass';
    /**
     * Constant for value 'ItaloPerTre'
     *
     * @return string 'ItaloPerTre'
     */
    const VALUE_ITALO_PER_TRE = 'ItaloPerTre';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_ITALO_PASS
     * @uses self::VALUE_ITALO_PER_TRE
     * @uses self::VALUE_ITALO_LAVORO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ITALO_LAVORO,
            self::VALUE_ITALO_PASS,
            self::VALUE_ITALO_PER_TRE,
        ];
    }
}
