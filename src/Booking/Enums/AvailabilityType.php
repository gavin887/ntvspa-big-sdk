<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AvailabilityType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilityType
 *
 * @subpackage Enumerations
 */
class AvailabilityType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Default'
     *
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'Overbook'
     *
     * @return string 'Overbook'
     */
    const VALUE_OVERBOOK = 'Overbook';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_OVERBOOK
     * @uses self::VALUE_DEFAULT
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEFAULT,
            self::VALUE_OVERBOOK,
        ];
    }
}
