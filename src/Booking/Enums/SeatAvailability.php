<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SeatAvailability Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatAvailability
 *
 * @subpackage Enumerations
 */
class SeatAvailability extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     *
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Reserved'
     *
     * @return string 'Reserved'
     */
    const VALUE_RESERVED = 'Reserved';
    /**
     * Constant for value 'Blocked'
     *
     * @return string 'Blocked'
     */
    const VALUE_BLOCKED = 'Blocked';
    /**
     * Constant for value 'HeldForAnotherSession'
     *
     * @return string 'HeldForAnotherSession'
     */
    const VALUE_HELD_FOR_ANOTHER_SESSION = 'HeldForAnotherSession';
    /**
     * Constant for value 'HeldForThisSession'
     *
     * @return string 'HeldForThisSession'
     */
    const VALUE_HELD_FOR_THIS_SESSION = 'HeldForThisSession';
    /**
     * Constant for value 'Open'
     *
     * @return string 'Open'
     */
    const VALUE_OPEN = 'Open';
    /**
     * Constant for value 'Missing'
     *
     * @return string 'Missing'
     */
    const VALUE_MISSING = 'Missing';
    /**
     * Constant for value 'NotVisible'
     *
     * @return string 'NotVisible'
     */
    const VALUE_NOT_VISIBLE = 'NotVisible';
    /**
     * Constant for value 'CheckedIn'
     *
     * @return string 'CheckedIn'
     */
    const VALUE_CHECKED_IN = 'CheckedIn';
    /**
     * Constant for value 'FleetBlocked'
     *
     * @return string 'FleetBlocked'
     */
    const VALUE_FLEET_BLOCKED = 'FleetBlocked';
    /**
     * Constant for value 'Restricted'
     *
     * @return string 'Restricted'
     */
    const VALUE_RESTRICTED = 'Restricted';
    /**
     * Constant for value 'Broken'
     *
     * @return string 'Broken'
     */
    const VALUE_BROKEN = 'Broken';
    /**
     * Constant for value 'ReservedForPNR'
     *
     * @return string 'ReservedForPNR'
     */
    const VALUE_RESERVED_FOR_PNR = 'ReservedForPNR';
    /**
     * Constant for value 'Unmapped'
     *
     * @return string 'Unmapped'
     */
    const VALUE_UNMAPPED = 'Unmapped';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_RESERVED
     * @uses self::VALUE_BLOCKED
     * @uses self::VALUE_HELD_FOR_ANOTHER_SESSION
     * @uses self::VALUE_HELD_FOR_THIS_SESSION
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_MISSING
     * @uses self::VALUE_NOT_VISIBLE
     * @uses self::VALUE_CHECKED_IN
     * @uses self::VALUE_FLEET_BLOCKED
     * @uses self::VALUE_RESTRICTED
     * @uses self::VALUE_BROKEN
     * @uses self::VALUE_RESERVED_FOR_PNR
     * @uses self::VALUE_UNMAPPED
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_RESERVED,
            self::VALUE_BLOCKED,
            self::VALUE_HELD_FOR_ANOTHER_SESSION,
            self::VALUE_HELD_FOR_THIS_SESSION,
            self::VALUE_OPEN,
            self::VALUE_MISSING,
            self::VALUE_NOT_VISIBLE,
            self::VALUE_CHECKED_IN,
            self::VALUE_FLEET_BLOCKED,
            self::VALUE_RESTRICTED,
            self::VALUE_BROKEN,
            self::VALUE_RESERVED_FOR_PNR,
            self::VALUE_UNMAPPED,
        ];
    }
}
