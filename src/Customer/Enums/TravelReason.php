<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TravelReason Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TravelReason
 *
 * @subpackage Enumerations
 */
class TravelReason extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AffariLavoro'
     *
     * @return string 'AffariLavoro'
     */
    const VALUE_AFFARI_LAVORO = 'AffariLavoro';
    /**
     * Constant for value 'Studio'
     *
     * @return string 'Studio'
     */
    const VALUE_STUDIO = 'Studio';
    /**
     * Constant for value 'VacanzaSvago'
     *
     * @return string 'VacanzaSvago'
     */
    const VALUE_VACANZA_SVAGO = 'VacanzaSvago';
    /**
     * Constant for value 'Visitaparentiamici'
     *
     * @return string 'Visitaparentiamici'
     */
    const VALUE_VISITAPARENTIAMICI = 'Visitaparentiamici';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_STUDIO
     * @uses self::VALUE_VACANZA_SVAGO
     * @uses self::VALUE_VISITAPARENTIAMICI
     * @uses self::VALUE_AFFARI_LAVORO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AFFARI_LAVORO,
            self::VALUE_STUDIO,
            self::VALUE_VACANZA_SVAGO,
            self::VALUE_VISITAPARENTIAMICI,
        ];
    }
}
