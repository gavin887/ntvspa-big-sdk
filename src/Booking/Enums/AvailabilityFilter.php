<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AvailabilityFilter Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilityFilter
 *
 * @subpackage Enumerations
 */
class AvailabilityFilter extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ExcludeUnavailable'
     *
     * @return string 'ExcludeUnavailable'
     */
    const VALUE_EXCLUDE_UNAVAILABLE = 'ExcludeUnavailable';
    /**
     * Constant for value 'Default'
     *
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'ExcludeDeparted'
     *
     * @return string 'ExcludeDeparted'
     */
    const VALUE_EXCLUDE_DEPARTED = 'ExcludeDeparted';
    /**
     * Constant for value 'ExcludeImminent'
     *
     * @return string 'ExcludeImminent'
     */
    const VALUE_EXCLUDE_IMMINENT = 'ExcludeImminent';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_EXCLUDE_DEPARTED
     * @uses self::VALUE_EXCLUDE_IMMINENT
     * @uses self::VALUE_EXCLUDE_UNAVAILABLE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EXCLUDE_UNAVAILABLE,
            self::VALUE_DEFAULT,
            self::VALUE_EXCLUDE_DEPARTED,
            self::VALUE_EXCLUDE_IMMINENT,
        ];
    }
}
