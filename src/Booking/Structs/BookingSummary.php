<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfJourney;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingSummary Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BookingSummary
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BookingSummary extends AbstractStructBase
{
    /**
     * The PNR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PNR = null;
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
     * The Journeys
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfJourney|null
     */
    protected ?ArrayOfJourney $Journeys = null;
    /**
     * The FareLockInfoData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var FareLockInfoData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\FareLockInfoData $FareLockInfoData = null;

    /**
     * Constructor method for BookingSummary
     *
     * @param string                                    $pNR
     * @param BookingSum                                $bookingSum
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourney $journeys
     * @param FareLockInfoData                          $fareLockInfoData
     *
     * @uses BookingSummary::setPNR()
     * @uses BookingSummary::setBookingSum()
     * @uses BookingSummary::setJourneys()
     * @uses BookingSummary::setFareLockInfoData()
     */
    public function __construct(?string $pNR = null, ?\Ntvspa\Big\Booking\Structs\BookingSum $bookingSum = null, ?ArrayOfJourney $journeys = null, ?\Ntvspa\Big\Booking\Structs\FareLockInfoData $fareLockInfoData = null)
    {
        $this
            ->setPNR($pNR)
            ->setBookingSum($bookingSum)
            ->setJourneys($journeys)
            ->setFareLockInfoData($fareLockInfoData);
    }

    /**
     * Get PNR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPNR(): ?string
    {
        return $this->PNR ?? null;
    }

    /**
     * Set PNR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $pNR
     *
     * @return BookingSummary
     */
    public function setPNR(?string $pNR = null): self
    {
        // validation for constraint: string
        if (!is_null($pNR) && !is_string($pNR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pNR, true), gettype($pNR)), __LINE__);
        }
        if (is_null($pNR) || (is_array($pNR) && empty($pNR))) {
            unset($this->PNR);
        } else {
            $this->PNR = $pNR;
        }

        return $this;
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
     * @return BookingSummary
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
     * Get Journeys value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfJourney|null
     */
    public function getJourneys(): ?ArrayOfJourney
    {
        return $this->Journeys ?? null;
    }

    /**
     * Set Journeys value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourney $journeys
     *
     * @return BookingSummary
     */
    public function setJourneys(?ArrayOfJourney $journeys = null): self
    {
        if (is_null($journeys) || (is_array($journeys) && empty($journeys))) {
            unset($this->Journeys);
        } else {
            $this->Journeys = $journeys;
        }

        return $this;
    }

    /**
     * Get FareLockInfoData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return FareLockInfoData|null
     */
    public function getFareLockInfoData(): ?\Ntvspa\Big\Booking\Structs\FareLockInfoData
    {
        return $this->FareLockInfoData ?? null;
    }

    /**
     * Set FareLockInfoData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param FareLockInfoData $fareLockInfoData
     *
     * @return BookingSummary
     */
    public function setFareLockInfoData(?\Ntvspa\Big\Booking\Structs\FareLockInfoData $fareLockInfoData = null): self
    {
        if (is_null($fareLockInfoData) || (is_array($fareLockInfoData) && empty($fareLockInfoData))) {
            unset($this->FareLockInfoData);
        } else {
            $this->FareLockInfoData = $fareLockInfoData;
        }

        return $this;
    }
}
