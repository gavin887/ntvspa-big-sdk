<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FixedPhone Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FixedPhone
 *
 * @subpackage Enumerations
 */
class FixedPhone extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Abitazione'
     *
     * @return string 'Abitazione'
     */
    const VALUE_ABITAZIONE = 'Abitazione';
    /**
     * Constant for value 'Ufficio'
     *
     * @return string 'Ufficio'
     */
    const VALUE_UFFICIO = 'Ufficio';
    /**
     * Constant for value 'Altro'
     *
     * @return string 'Altro'
     */
    const VALUE_ALTRO = 'Altro';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_UFFICIO
     * @uses self::VALUE_ALTRO
     * @uses self::VALUE_ABITAZIONE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ABITAZIONE,
            self::VALUE_UFFICIO,
            self::VALUE_ALTRO,
        ];
    }
}
