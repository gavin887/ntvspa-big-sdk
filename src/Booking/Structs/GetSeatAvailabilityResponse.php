<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfSeatGroupPassengerFee;

/**
 * This class stands for GetSeatAvailabilityResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q42:GetSeatAvailabilityResponse | tns:GetSeatAvailabilityResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetSeatAvailabilityResponse extends ResponseBase
{
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Equipment|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\Equipment $Equipment = null;
    /**
     * The SeatGroupPassengerFees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfSeatGroupPassengerFee|null
     */
    protected ?ArrayOfSeatGroupPassengerFee $SeatGroupPassengerFees = null;

    /**
     * Constructor method for GetSeatAvailabilityResponse
     *
     * @param Equipment                                               $equipment
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSeatGroupPassengerFee $seatGroupPassengerFees
     *
     * @uses GetSeatAvailabilityResponse::setEquipment()
     * @uses GetSeatAvailabilityResponse::setSeatGroupPassengerFees()
     */
    public function __construct(?\Ntvspa\Big\Booking\Structs\Equipment $equipment = null, ?ArrayOfSeatGroupPassengerFee $seatGroupPassengerFees = null)
    {
        $this
            ->setEquipment($equipment)
            ->setSeatGroupPassengerFees($seatGroupPassengerFees);
    }

    /**
     * Get Equipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Equipment|null
     */
    public function getEquipment(): ?\Ntvspa\Big\Booking\Structs\Equipment
    {
        return $this->Equipment ?? null;
    }

    /**
     * Set Equipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Equipment $equipment
     *
     * @return GetSeatAvailabilityResponse
     */
    public function setEquipment(?\Ntvspa\Big\Booking\Structs\Equipment $equipment = null): self
    {
        if (is_null($equipment) || (is_array($equipment) && empty($equipment))) {
            unset($this->Equipment);
        } else {
            $this->Equipment = $equipment;
        }

        return $this;
    }

    /**
     * Get SeatGroupPassengerFees value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfSeatGroupPassengerFee|null
     */
    public function getSeatGroupPassengerFees(): ?ArrayOfSeatGroupPassengerFee
    {
        return $this->SeatGroupPassengerFees ?? null;
    }

    /**
     * Set SeatGroupPassengerFees value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSeatGroupPassengerFee $seatGroupPassengerFees
     *
     * @return GetSeatAvailabilityResponse
     */
    public function setSeatGroupPassengerFees(?ArrayOfSeatGroupPassengerFee $seatGroupPassengerFees = null): self
    {
        if (is_null($seatGroupPassengerFees) || (is_array($seatGroupPassengerFees) && empty($seatGroupPassengerFees))) {
            unset($this->SeatGroupPassengerFees);
        } else {
            $this->SeatGroupPassengerFees = $seatGroupPassengerFees;
        }

        return $this;
    }
}
