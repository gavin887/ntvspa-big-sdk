<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LegStatus Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LegStatus
 *
 * @subpackage Enumerations
 */
class LegStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Normal'
     *
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'Closed'
     *
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'Canceled'
     *
     * @return string 'Canceled'
     */
    const VALUE_CANCELED = 'Canceled';
    /**
     * Constant for value 'Suspended'
     *
     * @return string 'Suspended'
     */
    const VALUE_SUSPENDED = 'Suspended';
    /**
     * Constant for value 'ClosedPending'
     *
     * @return string 'ClosedPending'
     */
    const VALUE_CLOSED_PENDING = 'ClosedPending';
    /**
     * Constant for value 'BlockAllActivities'
     *
     * @return string 'BlockAllActivities'
     */
    const VALUE_BLOCK_ALL_ACTIVITIES = 'BlockAllActivities';
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
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_CANCELED
     * @uses self::VALUE_SUSPENDED
     * @uses self::VALUE_CLOSED_PENDING
     * @uses self::VALUE_BLOCK_ALL_ACTIVITIES
     * @uses self::VALUE_UNMAPPED
     * @uses self::VALUE_NORMAL
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NORMAL,
            self::VALUE_CLOSED,
            self::VALUE_CANCELED,
            self::VALUE_SUSPENDED,
            self::VALUE_CLOSED_PENDING,
            self::VALUE_BLOCK_ALL_ACTIVITIES,
            self::VALUE_UNMAPPED,
        ];
    }
}
