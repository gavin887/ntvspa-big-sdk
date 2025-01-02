<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BookingStatus Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BookingStatus
 *
 * @subpackage Enumerations
 */
class BookingStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Default'
     *
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'Hold'
     *
     * @return string 'Hold'
     */
    const VALUE_HOLD = 'Hold';
    /**
     * Constant for value 'Confirmed'
     *
     * @return string 'Confirmed'
     */
    const VALUE_CONFIRMED = 'Confirmed';
    /**
     * Constant for value 'Closed'
     *
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'HoldCanceled'
     *
     * @return string 'HoldCanceled'
     */
    const VALUE_HOLD_CANCELED = 'HoldCanceled';
    /**
     * Constant for value 'PendingArchive'
     *
     * @return string 'PendingArchive'
     */
    const VALUE_PENDING_ARCHIVE = 'PendingArchive';
    /**
     * Constant for value 'Archived'
     *
     * @return string 'Archived'
     */
    const VALUE_ARCHIVED = 'Archived';
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
     * @uses self::VALUE_HOLD
     * @uses self::VALUE_CONFIRMED
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_HOLD_CANCELED
     * @uses self::VALUE_PENDING_ARCHIVE
     * @uses self::VALUE_ARCHIVED
     * @uses self::VALUE_UNMAPPED
     * @uses self::VALUE_DEFAULT
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEFAULT,
            self::VALUE_HOLD,
            self::VALUE_CONFIRMED,
            self::VALUE_CLOSED,
            self::VALUE_HOLD_CANCELED,
            self::VALUE_PENDING_ARCHIVE,
            self::VALUE_ARCHIVED,
            self::VALUE_UNMAPPED,
        ];
    }
}
