<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Culture Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Culture
 *
 * @subpackage Enumerations
 */
class Culture extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Italian'
     *
     * @return string 'Italian'
     */
    const VALUE_ITALIAN = 'Italian';
    /**
     * Constant for value 'English'
     *
     * @return string 'English'
     */
    const VALUE_ENGLISH = 'English';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_ENGLISH
     * @uses self::VALUE_ITALIAN
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ITALIAN,
            self::VALUE_ENGLISH,
        ];
    }
}
