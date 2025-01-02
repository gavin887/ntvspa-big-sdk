<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TravelAgencyStatusTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TravelAgencyStatusTypeEnum
 *
 * @subpackage Enumerations
 */
class TravelAgencyStatusTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PROSPECT'
     *
     * @return string 'PROSPECT'
     */
    const VALUE_PROSPECT = 'PROSPECT';
    /**
     * Constant for value 'ATTIVA'
     *
     * @return string 'ATTIVA'
     */
    const VALUE_ATTIVA = 'ATTIVA';
    /**
     * Constant for value 'INATTIVA'
     *
     * @return string 'INATTIVA'
     */
    const VALUE_INATTIVA = 'INATTIVA';
    /**
     * Constant for value 'SOSPESA'
     *
     * @return string 'SOSPESA'
     */
    const VALUE_SOSPESA = 'SOSPESA';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_ATTIVA
     * @uses self::VALUE_INATTIVA
     * @uses self::VALUE_SOSPESA
     * @uses self::VALUE_PROSPECT
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PROSPECT,
            self::VALUE_ATTIVA,
            self::VALUE_INATTIVA,
            self::VALUE_SOSPESA,
        ];
    }
}
