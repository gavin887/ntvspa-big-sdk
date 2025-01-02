<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for ManagePaymentResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q6:ManagePaymentResponse | tns:ManagePaymentResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ManagePaymentResponse extends ResponseBase
{
    /**
     * The BookingSum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BookingSum|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\BookingSum $BookingSum = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Payment|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\Payment $Payment = null;
    /**
     * The LoyaltyTransactionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LoyaltyTransactionId = null;

    /**
     * Constructor method for ManagePaymentResponse
     *
     * @param BookingSum $bookingSum
     * @param Payment    $payment
     * @param string     $loyaltyTransactionId
     *
     * @uses ManagePaymentResponse::setBookingSum()
     * @uses ManagePaymentResponse::setPayment()
     * @uses ManagePaymentResponse::setLoyaltyTransactionId()
     */
    public function __construct(?\Ntvspa\Big\Booking\Structs\BookingSum $bookingSum = null, ?\Ntvspa\Big\Booking\Structs\Payment $payment = null, ?string $loyaltyTransactionId = null)
    {
        $this
            ->setBookingSum($bookingSum)
            ->setPayment($payment)
            ->setLoyaltyTransactionId($loyaltyTransactionId);
    }

    /**
     * Get BookingSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BookingSum|null
     */
    public function getBookingSum(): ?\Ntvspa\Big\Booking\Structs\BookingSum
    {
        return $this->BookingSum ?? null;
    }

    /**
     * Set BookingSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BookingSum $bookingSum
     *
     * @return ManagePaymentResponse
     */
    public function setBookingSum(?\Ntvspa\Big\Booking\Structs\BookingSum $bookingSum = null): self
    {
        if (is_null($bookingSum) || (is_array($bookingSum) && empty($bookingSum))) {
            unset($this->BookingSum);
        } else {
            $this->BookingSum = $bookingSum;
        }

        return $this;
    }

    /**
     * Get Payment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Payment|null
     */
    public function getPayment(): ?\Ntvspa\Big\Booking\Structs\Payment
    {
        return $this->Payment ?? null;
    }

    /**
     * Set Payment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Payment $payment
     *
     * @return ManagePaymentResponse
     */
    public function setPayment(?\Ntvspa\Big\Booking\Structs\Payment $payment = null): self
    {
        if (is_null($payment) || (is_array($payment) && empty($payment))) {
            unset($this->Payment);
        } else {
            $this->Payment = $payment;
        }

        return $this;
    }

    /**
     * Get LoyaltyTransactionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLoyaltyTransactionId(): ?string
    {
        return $this->LoyaltyTransactionId ?? null;
    }

    /**
     * Set LoyaltyTransactionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $loyaltyTransactionId
     *
     * @return ManagePaymentResponse
     */
    public function setLoyaltyTransactionId(?string $loyaltyTransactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($loyaltyTransactionId) && !is_string($loyaltyTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loyaltyTransactionId, true), gettype($loyaltyTransactionId)), __LINE__);
        }
        if (is_null($loyaltyTransactionId) || (is_array($loyaltyTransactionId) && empty($loyaltyTransactionId))) {
            unset($this->LoyaltyTransactionId);
        } else {
            $this->LoyaltyTransactionId = $loyaltyTransactionId;
        }

        return $this;
    }
}
