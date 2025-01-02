<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BookingPaymentStatus Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BookingPaymentStatus
 *
 * @subpackage Enumerations
 */
class BookingPaymentStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'New'
     *
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Received'
     *
     * @return string 'Received'
     */
    const VALUE_RECEIVED = 'Received';
    /**
     * Constant for value 'Pending'
     *
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Approved'
     *
     * @return string 'Approved'
     */
    const VALUE_APPROVED = 'Approved';
    /**
     * Constant for value 'Declined'
     *
     * @return string 'Declined'
     */
    const VALUE_DECLINED = 'Declined';
    /**
     * Constant for value 'Unknown'
     *
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'PendingCustomerAction'
     *
     * @return string 'PendingCustomerAction'
     */
    const VALUE_PENDING_CUSTOMER_ACTION = 'PendingCustomerAction';
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
     * @uses self::VALUE_RECEIVED
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_APPROVED
     * @uses self::VALUE_DECLINED
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_PENDING_CUSTOMER_ACTION
     * @uses self::VALUE_UNMAPPED
     * @uses self::VALUE_NEW
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NEW,
            self::VALUE_RECEIVED,
            self::VALUE_PENDING,
            self::VALUE_APPROVED,
            self::VALUE_DECLINED,
            self::VALUE_UNKNOWN,
            self::VALUE_PENDING_CUSTOMER_ACTION,
            self::VALUE_UNMAPPED,
        ];
    }
}
