<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AuthorizationStatus Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AuthorizationStatus
 *
 * @subpackage Enumerations
 */
class AuthorizationStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     *
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Acknowledged'
     *
     * @return string 'Acknowledged'
     */
    const VALUE_ACKNOWLEDGED = 'Acknowledged';
    /**
     * Constant for value 'Pending'
     *
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'InProcess'
     *
     * @return string 'InProcess'
     */
    const VALUE_IN_PROCESS = 'InProcess';
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
     * Constant for value 'Referral'
     *
     * @return string 'Referral'
     */
    const VALUE_REFERRAL = 'Referral';
    /**
     * Constant for value 'PickUpCard'
     *
     * @return string 'PickUpCard'
     */
    const VALUE_PICK_UP_CARD = 'PickUpCard';
    /**
     * Constant for value 'HotCard'
     *
     * @return string 'HotCard'
     */
    const VALUE_HOT_CARD = 'HotCard';
    /**
     * Constant for value 'Voided'
     *
     * @return string 'Voided'
     */
    const VALUE_VOIDED = 'Voided';
    /**
     * Constant for value 'Retrieval'
     *
     * @return string 'Retrieval'
     */
    const VALUE_RETRIEVAL = 'Retrieval';
    /**
     * Constant for value 'ChargedBack'
     *
     * @return string 'ChargedBack'
     */
    const VALUE_CHARGED_BACK = 'ChargedBack';
    /**
     * Constant for value 'Error'
     *
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'ValidationFailed'
     *
     * @return string 'ValidationFailed'
     */
    const VALUE_VALIDATION_FAILED = 'ValidationFailed';
    /**
     * Constant for value 'Address'
     *
     * @return string 'Address'
     */
    const VALUE_ADDRESS = 'Address';
    /**
     * Constant for value 'VerificationCode'
     *
     * @return string 'VerificationCode'
     */
    const VALUE_VERIFICATION_CODE = 'VerificationCode';
    /**
     * Constant for value 'FraudPrevention'
     *
     * @return string 'FraudPrevention'
     */
    const VALUE_FRAUD_PREVENTION = 'FraudPrevention';
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
     * @uses self::VALUE_ACKNOWLEDGED
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_IN_PROCESS
     * @uses self::VALUE_APPROVED
     * @uses self::VALUE_DECLINED
     * @uses self::VALUE_REFERRAL
     * @uses self::VALUE_PICK_UP_CARD
     * @uses self::VALUE_HOT_CARD
     * @uses self::VALUE_VOIDED
     * @uses self::VALUE_RETRIEVAL
     * @uses self::VALUE_CHARGED_BACK
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_VALIDATION_FAILED
     * @uses self::VALUE_ADDRESS
     * @uses self::VALUE_VERIFICATION_CODE
     * @uses self::VALUE_FRAUD_PREVENTION
     * @uses self::VALUE_UNMAPPED
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_ACKNOWLEDGED,
            self::VALUE_PENDING,
            self::VALUE_IN_PROCESS,
            self::VALUE_APPROVED,
            self::VALUE_DECLINED,
            self::VALUE_REFERRAL,
            self::VALUE_PICK_UP_CARD,
            self::VALUE_HOT_CARD,
            self::VALUE_VOIDED,
            self::VALUE_RETRIEVAL,
            self::VALUE_CHARGED_BACK,
            self::VALUE_ERROR,
            self::VALUE_VALIDATION_FAILED,
            self::VALUE_ADDRESS,
            self::VALUE_VERIFICATION_CODE,
            self::VALUE_FRAUD_PREVENTION,
            self::VALUE_UNMAPPED,
        ];
    }
}
