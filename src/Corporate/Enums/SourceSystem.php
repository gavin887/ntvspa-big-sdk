<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SourceSystem Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SourceSystem
 *
 * @subpackage Enumerations
 */
class SourceSystem extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AGENCY'
     *
     * @return string 'AGENCY'
     */
    const VALUE_AGENCY = 'AGENCY';
    /**
     * Constant for value 'CORPORATE'
     *
     * @return string 'CORPORATE'
     */
    const VALUE_CORPORATE = 'CORPORATE';
    /**
     * Constant for value 'ANDROID'
     *
     * @return string 'ANDROID'
     */
    const VALUE_ANDROID = 'ANDROID';
    /**
     * Constant for value 'iOS'
     *
     * @return string 'iOS'
     */
    const VALUE_I_OS = 'iOS';
    /**
     * Constant for value 'FOREIGN_AGENCY'
     *
     * @return string 'FOREIGN_AGENCY'
     */
    const VALUE_FOREIGN_AGENCY = 'FOREIGN_AGENCY';
    /**
     * Constant for value 'ITALO_TICKET'
     *
     * @return string 'ITALO_TICKET'
     */
    const VALUE_ITALO_TICKET = 'ITALO_TICKET';
    /**
     * Constant for value 'IMPRESA_ANDROID'
     *
     * @return string 'IMPRESA_ANDROID'
     */
    const VALUE_IMPRESA_ANDROID = 'IMPRESA_ANDROID';
    /**
     * Constant for value 'IMPRESA_IOS'
     *
     * @return string 'IMPRESA_IOS'
     */
    const VALUE_IMPRESA_IOS = 'IMPRESA_IOS';
    /**
     * Constant for value 'ALEXA'
     *
     * @return string 'ALEXA'
     */
    const VALUE_ALEXA = 'ALEXA';
    /**
     * Constant for value 'ITALOTRENO'
     *
     * @return string 'ITALOTRENO'
     */
    const VALUE_ITALOTRENO = 'ITALOTRENO';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_CORPORATE
     * @uses self::VALUE_ANDROID
     * @uses self::VALUE_I_OS
     * @uses self::VALUE_FOREIGN_AGENCY
     * @uses self::VALUE_ITALO_TICKET
     * @uses self::VALUE_IMPRESA_ANDROID
     * @uses self::VALUE_IMPRESA_IOS
     * @uses self::VALUE_ALEXA
     * @uses self::VALUE_ITALOTRENO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AGENCY,
            self::VALUE_CORPORATE,
            self::VALUE_ANDROID,
            self::VALUE_I_OS,
            self::VALUE_FOREIGN_AGENCY,
            self::VALUE_ITALO_TICKET,
            self::VALUE_IMPRESA_ANDROID,
            self::VALUE_IMPRESA_IOS,
            self::VALUE_ALEXA,
            self::VALUE_ITALOTRENO,
        ];
    }
}
