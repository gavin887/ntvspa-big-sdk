<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfPassengerSeatPreference;
use Booking\Arrays\ArrayOfSegment;
use Booking\Arrays\ArrayOfSegmentSeat;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Journey Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Journey
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Journey extends AbstractStructBase
{
    /**
     * The DepartureDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $DepartureDateTime = null;
    /**
     * The Capacity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Capacity = null;
    /**
     * The DepartureStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DepartureStation = null;
    /**
     * The ArrivalStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ArrivalStation = null;
    /**
     * The TrainNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TrainNumber = null;
    /**
     * The RFITrainNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RFITrainNumber = null;
    /**
     * The QrCodeData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $QrCodeData = null;
    /**
     * The JourneySellKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $JourneySellKey = null;
    /**
     * The Segments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfSegment|null
     */
    protected ?ArrayOfSegment $Segments = null;
    /**
     * The JourneySpecialOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var JourneySpecialOperation|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\JourneySpecialOperation $JourneySpecialOperation = null;
    /**
     * The FareSellKey
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FareSellKey = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CurrencyCode = null;
    /**
     * The PassengerSeatPreferences
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfPassengerSeatPreference|null
     */
    protected ?ArrayOfPassengerSeatPreference $PassengerSeatPreferences = null;
    /**
     * The SegmentSeats
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfSegmentSeat|null
     */
    protected ?ArrayOfSegmentSeat $SegmentSeats = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The AncillaryService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AncillaryService|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\AncillaryService $AncillaryService = null;

    /**
     * Constructor method for Journey
     *
     * @param string                                                    $departureDateTime
     * @param int                                                       $capacity
     * @param string                                                    $departureStation
     * @param string                                                    $arrivalStation
     * @param string                                                    $trainNumber
     * @param string                                                    $rFITrainNumber
     * @param string                                                    $qrCodeData
     * @param string                                                    $journeySellKey
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSegment                 $segments
     * @param JourneySpecialOperation                                   $journeySpecialOperation
     * @param string                                                    $fareSellKey
     * @param string                                                    $currencyCode
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPassengerSeatPreference $passengerSeatPreferences
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSegmentSeat             $segmentSeats
     * @param float                                                     $amount
     * @param AncillaryService                                          $ancillaryService
     *
     * @uses Journey::setDepartureDateTime()
     * @uses Journey::setCapacity()
     * @uses Journey::setDepartureStation()
     * @uses Journey::setArrivalStation()
     * @uses Journey::setTrainNumber()
     * @uses Journey::setRFITrainNumber()
     * @uses Journey::setQrCodeData()
     * @uses Journey::setJourneySellKey()
     * @uses Journey::setSegments()
     * @uses Journey::setJourneySpecialOperation()
     * @uses Journey::setFareSellKey()
     * @uses Journey::setCurrencyCode()
     * @uses Journey::setPassengerSeatPreferences()
     * @uses Journey::setSegmentSeats()
     * @uses Journey::setAmount()
     * @uses Journey::setAncillaryService()
     */
    public function __construct(?string $departureDateTime = null, ?int $capacity = null, ?string $departureStation = null, ?string $arrivalStation = null, ?string $trainNumber = null, ?string $rFITrainNumber = null, ?string $qrCodeData = null, ?string $journeySellKey = null, ?ArrayOfSegment $segments = null, ?\Ntvspa\Big\Booking\Structs\JourneySpecialOperation $journeySpecialOperation = null, ?string $fareSellKey = null, ?string $currencyCode = null, ?ArrayOfPassengerSeatPreference $passengerSeatPreferences = null, ?ArrayOfSegmentSeat $segmentSeats = null, ?float $amount = null, ?\Ntvspa\Big\Booking\Structs\AncillaryService $ancillaryService = null)
    {
        $this
            ->setDepartureDateTime($departureDateTime)
            ->setCapacity($capacity)
            ->setDepartureStation($departureStation)
            ->setArrivalStation($arrivalStation)
            ->setTrainNumber($trainNumber)
            ->setRFITrainNumber($rFITrainNumber)
            ->setQrCodeData($qrCodeData)
            ->setJourneySellKey($journeySellKey)
            ->setSegments($segments)
            ->setJourneySpecialOperation($journeySpecialOperation)
            ->setFareSellKey($fareSellKey)
            ->setCurrencyCode($currencyCode)
            ->setPassengerSeatPreferences($passengerSeatPreferences)
            ->setSegmentSeats($segmentSeats)
            ->setAmount($amount)
            ->setAncillaryService($ancillaryService);
    }

    /**
     * Get DepartureDateTime value
     *
     * @return string|null
     */
    public function getDepartureDateTime(): ?string
    {
        return $this->DepartureDateTime;
    }

    /**
     * Set DepartureDateTime value
     *
     * @param string $departureDateTime
     *
     * @return Journey
     */
    public function setDepartureDateTime(?string $departureDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDateTime) && !is_string($departureDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDateTime, true), gettype($departureDateTime)), __LINE__);
        }
        $this->DepartureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Get Capacity value
     *
     * @return int|null
     */
    public function getCapacity(): ?int
    {
        return $this->Capacity;
    }

    /**
     * Set Capacity value
     *
     * @param int $capacity
     *
     * @return Journey
     */
    public function setCapacity(?int $capacity = null): self
    {
        // validation for constraint: int
        if (!is_null($capacity) && !(is_int($capacity) || ctype_digit($capacity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($capacity, true), gettype($capacity)), __LINE__);
        }
        $this->Capacity = $capacity;

        return $this;
    }

    /**
     * Get DepartureStation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDepartureStation(): ?string
    {
        return $this->DepartureStation ?? null;
    }

    /**
     * Set DepartureStation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $departureStation
     *
     * @return Journey
     */
    public function setDepartureStation(?string $departureStation = null): self
    {
        // validation for constraint: string
        if (!is_null($departureStation) && !is_string($departureStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureStation, true), gettype($departureStation)), __LINE__);
        }
        if (is_null($departureStation) || (is_array($departureStation) && empty($departureStation))) {
            unset($this->DepartureStation);
        } else {
            $this->DepartureStation = $departureStation;
        }

        return $this;
    }

    /**
     * Get ArrivalStation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getArrivalStation(): ?string
    {
        return $this->ArrivalStation ?? null;
    }

    /**
     * Set ArrivalStation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $arrivalStation
     *
     * @return Journey
     */
    public function setArrivalStation(?string $arrivalStation = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalStation) && !is_string($arrivalStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalStation, true), gettype($arrivalStation)), __LINE__);
        }
        if (is_null($arrivalStation) || (is_array($arrivalStation) && empty($arrivalStation))) {
            unset($this->ArrivalStation);
        } else {
            $this->ArrivalStation = $arrivalStation;
        }

        return $this;
    }

    /**
     * Get TrainNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTrainNumber(): ?string
    {
        return $this->TrainNumber ?? null;
    }

    /**
     * Set TrainNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $trainNumber
     *
     * @return Journey
     */
    public function setTrainNumber(?string $trainNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($trainNumber) && !is_string($trainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainNumber, true), gettype($trainNumber)), __LINE__);
        }
        if (is_null($trainNumber) || (is_array($trainNumber) && empty($trainNumber))) {
            unset($this->TrainNumber);
        } else {
            $this->TrainNumber = $trainNumber;
        }

        return $this;
    }

    /**
     * Get RFITrainNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRFITrainNumber(): ?string
    {
        return $this->RFITrainNumber ?? null;
    }

    /**
     * Set RFITrainNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $rFITrainNumber
     *
     * @return Journey
     */
    public function setRFITrainNumber(?string $rFITrainNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($rFITrainNumber) && !is_string($rFITrainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rFITrainNumber, true), gettype($rFITrainNumber)), __LINE__);
        }
        if (is_null($rFITrainNumber) || (is_array($rFITrainNumber) && empty($rFITrainNumber))) {
            unset($this->RFITrainNumber);
        } else {
            $this->RFITrainNumber = $rFITrainNumber;
        }

        return $this;
    }

    /**
     * Get QrCodeData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getQrCodeData(): ?string
    {
        return $this->QrCodeData ?? null;
    }

    /**
     * Set QrCodeData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $qrCodeData
     *
     * @return Journey
     */
    public function setQrCodeData(?string $qrCodeData = null): self
    {
        // validation for constraint: string
        if (!is_null($qrCodeData) && !is_string($qrCodeData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qrCodeData, true), gettype($qrCodeData)), __LINE__);
        }
        if (is_null($qrCodeData) || (is_array($qrCodeData) && empty($qrCodeData))) {
            unset($this->QrCodeData);
        } else {
            $this->QrCodeData = $qrCodeData;
        }

        return $this;
    }

    /**
     * Get JourneySellKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getJourneySellKey(): ?string
    {
        return $this->JourneySellKey ?? null;
    }

    /**
     * Set JourneySellKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $journeySellKey
     *
     * @return Journey
     */
    public function setJourneySellKey(?string $journeySellKey = null): self
    {
        // validation for constraint: string
        if (!is_null($journeySellKey) && !is_string($journeySellKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($journeySellKey, true), gettype($journeySellKey)), __LINE__);
        }
        if (is_null($journeySellKey) || (is_array($journeySellKey) && empty($journeySellKey))) {
            unset($this->JourneySellKey);
        } else {
            $this->JourneySellKey = $journeySellKey;
        }

        return $this;
    }

    /**
     * Get Segments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfSegment|null
     */
    public function getSegments(): ?ArrayOfSegment
    {
        return $this->Segments ?? null;
    }

    /**
     * Set Segments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSegment $segments
     *
     * @return Journey
     */
    public function setSegments(?ArrayOfSegment $segments = null): self
    {
        if (is_null($segments) || (is_array($segments) && empty($segments))) {
            unset($this->Segments);
        } else {
            $this->Segments = $segments;
        }

        return $this;
    }

    /**
     * Get JourneySpecialOperation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return JourneySpecialOperation|null
     */
    public function getJourneySpecialOperation(): ?\Ntvspa\Big\Booking\Structs\JourneySpecialOperation
    {
        return $this->JourneySpecialOperation ?? null;
    }

    /**
     * Set JourneySpecialOperation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param JourneySpecialOperation $journeySpecialOperation
     *
     * @return Journey
     */
    public function setJourneySpecialOperation(?\Ntvspa\Big\Booking\Structs\JourneySpecialOperation $journeySpecialOperation = null): self
    {
        if (is_null($journeySpecialOperation) || (is_array($journeySpecialOperation) && empty($journeySpecialOperation))) {
            unset($this->JourneySpecialOperation);
        } else {
            $this->JourneySpecialOperation = $journeySpecialOperation;
        }

        return $this;
    }

    /**
     * Get FareSellKey value
     *
     * @return string|null
     */
    public function getFareSellKey(): ?string
    {
        return $this->FareSellKey;
    }

    /**
     * Set FareSellKey value
     *
     * @param string $fareSellKey
     *
     * @return Journey
     */
    public function setFareSellKey(?string $fareSellKey = null): self
    {
        // validation for constraint: string
        if (!is_null($fareSellKey) && !is_string($fareSellKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareSellKey, true), gettype($fareSellKey)), __LINE__);
        }
        $this->FareSellKey = $fareSellKey;

        return $this;
    }

    /**
     * Get CurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->CurrencyCode ?? null;
    }

    /**
     * Set CurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $currencyCode
     *
     * @return Journey
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        if (is_null($currencyCode) || (is_array($currencyCode) && empty($currencyCode))) {
            unset($this->CurrencyCode);
        } else {
            $this->CurrencyCode = $currencyCode;
        }

        return $this;
    }

    /**
     * Get PassengerSeatPreferences value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfPassengerSeatPreference|null
     */
    public function getPassengerSeatPreferences(): ?ArrayOfPassengerSeatPreference
    {
        return $this->PassengerSeatPreferences ?? null;
    }

    /**
     * Set PassengerSeatPreferences value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPassengerSeatPreference $passengerSeatPreferences
     *
     * @return Journey
     */
    public function setPassengerSeatPreferences(?ArrayOfPassengerSeatPreference $passengerSeatPreferences = null): self
    {
        if (is_null($passengerSeatPreferences) || (is_array($passengerSeatPreferences) && empty($passengerSeatPreferences))) {
            unset($this->PassengerSeatPreferences);
        } else {
            $this->PassengerSeatPreferences = $passengerSeatPreferences;
        }

        return $this;
    }

    /**
     * Get SegmentSeats value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfSegmentSeat|null
     */
    public function getSegmentSeats(): ?ArrayOfSegmentSeat
    {
        return $this->SegmentSeats ?? null;
    }

    /**
     * Set SegmentSeats value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSegmentSeat $segmentSeats
     *
     * @return Journey
     */
    public function setSegmentSeats(?ArrayOfSegmentSeat $segmentSeats = null): self
    {
        if (is_null($segmentSeats) || (is_array($segmentSeats) && empty($segmentSeats))) {
            unset($this->SegmentSeats);
        } else {
            $this->SegmentSeats = $segmentSeats;
        }

        return $this;
    }

    /**
     * Get Amount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount ?? null;
    }

    /**
     * Set Amount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param float $amount
     *
     * @return Journey
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        if (is_null($amount) || (is_array($amount) && empty($amount))) {
            unset($this->Amount);
        } else {
            $this->Amount = $amount;
        }

        return $this;
    }

    /**
     * Get AncillaryService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return AncillaryService|null
     */
    public function getAncillaryService(): ?\Ntvspa\Big\Booking\Structs\AncillaryService
    {
        return $this->AncillaryService ?? null;
    }

    /**
     * Set AncillaryService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param AncillaryService $ancillaryService
     *
     * @return Journey
     */
    public function setAncillaryService(?\Ntvspa\Big\Booking\Structs\AncillaryService $ancillaryService = null): self
    {
        if (is_null($ancillaryService) || (is_array($ancillaryService) && empty($ancillaryService))) {
            unset($this->AncillaryService);
        } else {
            $this->AncillaryService = $ancillaryService;
        }

        return $this;
    }
}
