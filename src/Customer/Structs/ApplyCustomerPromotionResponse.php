<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;

/**
 * This class stands for ApplyCustomerPromotionResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q10:ApplyCustomerPromotionResponse | tns:ApplyCustomerPromotionResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ApplyCustomerPromotionResponse extends ResponseBase
{
    /**
     * The BookingSum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BookingSum|null
     */
    protected ?\Ntvspa\Big\Customer\Structs\BookingSum $BookingSum = null;

    /**
     * Constructor method for ApplyCustomerPromotionResponse
     *
     * @param BookingSum $bookingSum
     *
     * @uses ApplyCustomerPromotionResponse::setBookingSum()
     */
    public function __construct(?\Ntvspa\Big\Customer\Structs\BookingSum $bookingSum = null)
    {
        $this
            ->setBookingSum($bookingSum);
    }

    /**
     * Get BookingSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BookingSum|null
     */
    public function getBookingSum(): ?\Ntvspa\Big\Customer\Structs\BookingSum
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
     * @return ApplyCustomerPromotionResponse
     */
    public function setBookingSum(?\Ntvspa\Big\Customer\Structs\BookingSum $bookingSum = null): self
    {
        if (is_null($bookingSum) || (is_array($bookingSum) && empty($bookingSum))) {
            unset($this->BookingSum);
        } else {
            $this->BookingSum = $bookingSum;
        }

        return $this;
    }
}
