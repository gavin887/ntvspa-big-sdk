<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;

/**
 * This class stands for ManageUpgradeResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q60:ManageUpgradeResponse | tns:ManageUpgradeResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ManageUpgradeResponse extends ResponseBase
{
    /**
     * The Booking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Booking|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\Booking $Booking = null;

    /**
     * Constructor method for ManageUpgradeResponse
     *
     * @param Booking $booking
     *
     * @uses ManageUpgradeResponse::setBooking()
     */
    public function __construct(?\Ntvspa\Big\Booking\Structs\Booking $booking = null)
    {
        $this
            ->setBooking($booking);
    }

    /**
     * Get Booking value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Booking|null
     */
    public function getBooking(): ?\Ntvspa\Big\Booking\Structs\Booking
    {
        return $this->Booking ?? null;
    }

    /**
     * Set Booking value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Booking $booking
     *
     * @return ManageUpgradeResponse
     */
    public function setBooking(?\Ntvspa\Big\Booking\Structs\Booking $booking = null): self
    {
        if (is_null($booking) || (is_array($booking) && empty($booking))) {
            unset($this->Booking);
        } else {
            $this->Booking = $booking;
        }

        return $this;
    }
}
