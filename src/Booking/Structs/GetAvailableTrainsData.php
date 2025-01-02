<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\AvailabilityFilter;
use Ntvspa\Big\Booking\Enums\AvailabilityType;
use Ntvspa\Big\Booking\Enums\Culture;
use Ntvspa\Big\Booking\Enums\FareClassControl;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableTrainsData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAvailableTrainsData
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetAvailableTrainsData extends AbstractStructBase
{
    /**
     * The RoundTrip
     *
     * @var bool|null
     */
    protected ?bool $RoundTrip = null;
    /**
     * The IntervalStartDateTime
     *
     * @var string|null
     */
    protected ?string $IntervalStartDateTime = null;
    /**
     * The IntervalEndDateTime
     *
     * @var string|null
     */
    protected ?string $IntervalEndDateTime = null;
    /**
     * The RoundTripIntervalStartDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $RoundTripIntervalStartDateTime = null;
    /**
     * The RoundTripIntervalEndDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $RoundTripIntervalEndDateTime = null;
    /**
     * The AdultNumber
     *
     * @var int|null
     */
    protected ?int $AdultNumber = null;
    /**
     * The SeniorNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $SeniorNumber = null;
    /**
     * The ChildNumber
     *
     * @var int|null
     */
    protected ?int $ChildNumber = null;
    /**
     * The YoungNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $YoungNumber = null;
    /**
     * The AvailabilityFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $AvailabilityFilter = null;
    /**
     * The FareClassControl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $FareClassControl = null;
    /**
     * The IsGuest
     *
     * @var bool|null
     */
    protected ?bool $IsGuest = null;
    /**
     * The OverrideIntervalTimeRestriction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $OverrideIntervalTimeRestriction = null;
    /**
     * The AvailabilityType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $AvailabilityType = null;
    /**
     * The Culture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Culture = null;
    /**
     * The ShowFareBasisRestrictionRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ShowFareBasisRestrictionRules = null;
    /**
     * The DepartureStation
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DepartureStation = null;
    /**
     * The ArrivalStation
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ArrivalStation = null;
    /**
     * The RoundtripDepartureStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RoundtripDepartureStation = null;
    /**
     * The RoundtripArrivalStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RoundtripArrivalStation = null;
    /**
     * The ProductClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductClass = null;
    /**
     * The RoundTripProductClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RoundTripProductClass = null;
    /**
     * The FareClassOfService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FareClassOfService = null;
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
     * The IDPartner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $IDPartner = null;
    /**
     * The Promocode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Promocode = null;
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductName = null;
    /**
     * The FareType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FareType = null;
    /**
     * The AgentPromotion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AgentPromotion|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\AgentPromotion $AgentPromotion = null;
    /**
     * The ShowNestedSSR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $ShowNestedSSR = null;
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
     * The JourneySpecialOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var JourneySpecialOperation|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\JourneySpecialOperation $JourneySpecialOperation = null;

    /**
     * Constructor method for GetAvailableTrainsData
     *
     * @param bool                    $roundTrip
     * @param string                  $intervalStartDateTime
     * @param string                  $intervalEndDateTime
     * @param string                  $roundTripIntervalStartDateTime
     * @param string                  $roundTripIntervalEndDateTime
     * @param int                     $adultNumber
     * @param int                     $seniorNumber
     * @param int                     $childNumber
     * @param int                     $youngNumber
     * @param string                  $availabilityFilter
     * @param string                  $fareClassControl
     * @param bool                    $isGuest
     * @param bool                    $overrideIntervalTimeRestriction
     * @param string                  $availabilityType
     * @param string                  $culture
     * @param bool                    $showFareBasisRestrictionRules
     * @param string                  $departureStation
     * @param string                  $arrivalStation
     * @param string                  $roundtripDepartureStation
     * @param string                  $roundtripArrivalStation
     * @param string                  $productClass
     * @param string                  $roundTripProductClass
     * @param string                  $fareClassOfService
     * @param string                  $currencyCode
     * @param string                  $iDPartner
     * @param string                  $promocode
     * @param string                  $productName
     * @param string                  $fareType
     * @param AgentPromotion          $agentPromotion
     * @param bool                    $showNestedSSR
     * @param AncillaryService        $ancillaryService
     * @param JourneySpecialOperation $journeySpecialOperation
     *
     * @uses GetAvailableTrainsData::setRoundTrip()
     * @uses GetAvailableTrainsData::setIntervalStartDateTime()
     * @uses GetAvailableTrainsData::setIntervalEndDateTime()
     * @uses GetAvailableTrainsData::setRoundTripIntervalStartDateTime()
     * @uses GetAvailableTrainsData::setRoundTripIntervalEndDateTime()
     * @uses GetAvailableTrainsData::setAdultNumber()
     * @uses GetAvailableTrainsData::setSeniorNumber()
     * @uses GetAvailableTrainsData::setChildNumber()
     * @uses GetAvailableTrainsData::setYoungNumber()
     * @uses GetAvailableTrainsData::setAvailabilityFilter()
     * @uses GetAvailableTrainsData::setFareClassControl()
     * @uses GetAvailableTrainsData::setIsGuest()
     * @uses GetAvailableTrainsData::setOverrideIntervalTimeRestriction()
     * @uses GetAvailableTrainsData::setAvailabilityType()
     * @uses GetAvailableTrainsData::setCulture()
     * @uses GetAvailableTrainsData::setShowFareBasisRestrictionRules()
     * @uses GetAvailableTrainsData::setDepartureStation()
     * @uses GetAvailableTrainsData::setArrivalStation()
     * @uses GetAvailableTrainsData::setRoundtripDepartureStation()
     * @uses GetAvailableTrainsData::setRoundtripArrivalStation()
     * @uses GetAvailableTrainsData::setProductClass()
     * @uses GetAvailableTrainsData::setRoundTripProductClass()
     * @uses GetAvailableTrainsData::setFareClassOfService()
     * @uses GetAvailableTrainsData::setCurrencyCode()
     * @uses GetAvailableTrainsData::setIDPartner()
     * @uses GetAvailableTrainsData::setPromocode()
     * @uses GetAvailableTrainsData::setProductName()
     * @uses GetAvailableTrainsData::setFareType()
     * @uses GetAvailableTrainsData::setAgentPromotion()
     * @uses GetAvailableTrainsData::setShowNestedSSR()
     * @uses GetAvailableTrainsData::setAncillaryService()
     * @uses GetAvailableTrainsData::setJourneySpecialOperation()
     */
    public function __construct(?bool $roundTrip = null, ?string $intervalStartDateTime = null, ?string $intervalEndDateTime = null, ?string $roundTripIntervalStartDateTime = null, ?string $roundTripIntervalEndDateTime = null, ?int $adultNumber = null, ?int $seniorNumber = null, ?int $childNumber = null, ?int $youngNumber = null, ?string $availabilityFilter = null, ?string $fareClassControl = null, ?bool $isGuest = null, ?bool $overrideIntervalTimeRestriction = null, ?string $availabilityType = null, ?string $culture = null, ?bool $showFareBasisRestrictionRules = null, ?string $departureStation = null, ?string $arrivalStation = null, ?string $roundtripDepartureStation = null, ?string $roundtripArrivalStation = null, ?string $productClass = null, ?string $roundTripProductClass = null, ?string $fareClassOfService = null, ?string $currencyCode = null, ?string $iDPartner = null, ?string $promocode = null, ?string $productName = null, ?string $fareType = null, ?\Ntvspa\Big\Booking\Structs\AgentPromotion $agentPromotion = null, ?bool $showNestedSSR = null, ?\Ntvspa\Big\Booking\Structs\AncillaryService $ancillaryService = null, ?\Ntvspa\Big\Booking\Structs\JourneySpecialOperation $journeySpecialOperation = null)
    {
        $this
            ->setRoundTrip($roundTrip)
            ->setIntervalStartDateTime($intervalStartDateTime)
            ->setIntervalEndDateTime($intervalEndDateTime)
            ->setRoundTripIntervalStartDateTime($roundTripIntervalStartDateTime)
            ->setRoundTripIntervalEndDateTime($roundTripIntervalEndDateTime)
            ->setAdultNumber($adultNumber)
            ->setSeniorNumber($seniorNumber)
            ->setChildNumber($childNumber)
            ->setYoungNumber($youngNumber)
            ->setAvailabilityFilter($availabilityFilter)
            ->setFareClassControl($fareClassControl)
            ->setIsGuest($isGuest)
            ->setOverrideIntervalTimeRestriction($overrideIntervalTimeRestriction)
            ->setAvailabilityType($availabilityType)
            ->setCulture($culture)
            ->setShowFareBasisRestrictionRules($showFareBasisRestrictionRules)
            ->setDepartureStation($departureStation)
            ->setArrivalStation($arrivalStation)
            ->setRoundtripDepartureStation($roundtripDepartureStation)
            ->setRoundtripArrivalStation($roundtripArrivalStation)
            ->setProductClass($productClass)
            ->setRoundTripProductClass($roundTripProductClass)
            ->setFareClassOfService($fareClassOfService)
            ->setCurrencyCode($currencyCode)
            ->setIDPartner($iDPartner)
            ->setPromocode($promocode)
            ->setProductName($productName)
            ->setFareType($fareType)
            ->setAgentPromotion($agentPromotion)
            ->setShowNestedSSR($showNestedSSR)
            ->setAncillaryService($ancillaryService)
            ->setJourneySpecialOperation($journeySpecialOperation);
    }

    /**
     * Get RoundTrip value
     *
     * @return bool|null
     */
    public function getRoundTrip(): ?bool
    {
        return $this->RoundTrip;
    }

    /**
     * Set RoundTrip value
     *
     * @param bool $roundTrip
     *
     * @return GetAvailableTrainsData
     */
    public function setRoundTrip(?bool $roundTrip = null): self
    {
        // validation for constraint: boolean
        if (!is_null($roundTrip) && !is_bool($roundTrip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($roundTrip, true), gettype($roundTrip)), __LINE__);
        }
        $this->RoundTrip = $roundTrip;

        return $this;
    }

    /**
     * Get IntervalStartDateTime value
     *
     * @return string|null
     */
    public function getIntervalStartDateTime(): ?string
    {
        return $this->IntervalStartDateTime;
    }

    /**
     * Set IntervalStartDateTime value
     *
     * @param string $intervalStartDateTime
     *
     * @return GetAvailableTrainsData
     */
    public function setIntervalStartDateTime(?string $intervalStartDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($intervalStartDateTime) && !is_string($intervalStartDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intervalStartDateTime, true), gettype($intervalStartDateTime)), __LINE__);
        }
        $this->IntervalStartDateTime = $intervalStartDateTime;

        return $this;
    }

    /**
     * Get IntervalEndDateTime value
     *
     * @return string|null
     */
    public function getIntervalEndDateTime(): ?string
    {
        return $this->IntervalEndDateTime;
    }

    /**
     * Set IntervalEndDateTime value
     *
     * @param string $intervalEndDateTime
     *
     * @return GetAvailableTrainsData
     */
    public function setIntervalEndDateTime(?string $intervalEndDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($intervalEndDateTime) && !is_string($intervalEndDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intervalEndDateTime, true), gettype($intervalEndDateTime)), __LINE__);
        }
        $this->IntervalEndDateTime = $intervalEndDateTime;

        return $this;
    }

    /**
     * Get RoundTripIntervalStartDateTime value
     *
     * @return string|null
     */
    public function getRoundTripIntervalStartDateTime(): ?string
    {
        return $this->RoundTripIntervalStartDateTime;
    }

    /**
     * Set RoundTripIntervalStartDateTime value
     *
     * @param string $roundTripIntervalStartDateTime
     *
     * @return GetAvailableTrainsData
     */
    public function setRoundTripIntervalStartDateTime(?string $roundTripIntervalStartDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($roundTripIntervalStartDateTime) && !is_string($roundTripIntervalStartDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roundTripIntervalStartDateTime, true), gettype($roundTripIntervalStartDateTime)), __LINE__);
        }
        $this->RoundTripIntervalStartDateTime = $roundTripIntervalStartDateTime;

        return $this;
    }

    /**
     * Get RoundTripIntervalEndDateTime value
     *
     * @return string|null
     */
    public function getRoundTripIntervalEndDateTime(): ?string
    {
        return $this->RoundTripIntervalEndDateTime;
    }

    /**
     * Set RoundTripIntervalEndDateTime value
     *
     * @param string $roundTripIntervalEndDateTime
     *
     * @return GetAvailableTrainsData
     */
    public function setRoundTripIntervalEndDateTime(?string $roundTripIntervalEndDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($roundTripIntervalEndDateTime) && !is_string($roundTripIntervalEndDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roundTripIntervalEndDateTime, true), gettype($roundTripIntervalEndDateTime)), __LINE__);
        }
        $this->RoundTripIntervalEndDateTime = $roundTripIntervalEndDateTime;

        return $this;
    }

    /**
     * Get AdultNumber value
     *
     * @return int|null
     */
    public function getAdultNumber(): ?int
    {
        return $this->AdultNumber;
    }

    /**
     * Set AdultNumber value
     *
     * @param int $adultNumber
     *
     * @return GetAvailableTrainsData
     */
    public function setAdultNumber(?int $adultNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($adultNumber) && !(is_int($adultNumber) || ctype_digit($adultNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adultNumber, true), gettype($adultNumber)), __LINE__);
        }
        $this->AdultNumber = $adultNumber;

        return $this;
    }

    /**
     * Get SeniorNumber value
     *
     * @return int|null
     */
    public function getSeniorNumber(): ?int
    {
        return $this->SeniorNumber;
    }

    /**
     * Set SeniorNumber value
     *
     * @param int $seniorNumber
     *
     * @return GetAvailableTrainsData
     */
    public function setSeniorNumber(?int $seniorNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($seniorNumber) && !(is_int($seniorNumber) || ctype_digit($seniorNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($seniorNumber, true), gettype($seniorNumber)), __LINE__);
        }
        $this->SeniorNumber = $seniorNumber;

        return $this;
    }

    /**
     * Get ChildNumber value
     *
     * @return int|null
     */
    public function getChildNumber(): ?int
    {
        return $this->ChildNumber;
    }

    /**
     * Set ChildNumber value
     *
     * @param int $childNumber
     *
     * @return GetAvailableTrainsData
     */
    public function setChildNumber(?int $childNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($childNumber) && !(is_int($childNumber) || ctype_digit($childNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($childNumber, true), gettype($childNumber)), __LINE__);
        }
        $this->ChildNumber = $childNumber;

        return $this;
    }

    /**
     * Get YoungNumber value
     *
     * @return int|null
     */
    public function getYoungNumber(): ?int
    {
        return $this->YoungNumber;
    }

    /**
     * Set YoungNumber value
     *
     * @param int $youngNumber
     *
     * @return GetAvailableTrainsData
     */
    public function setYoungNumber(?int $youngNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($youngNumber) && !(is_int($youngNumber) || ctype_digit($youngNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($youngNumber, true), gettype($youngNumber)), __LINE__);
        }
        $this->YoungNumber = $youngNumber;

        return $this;
    }

    /**
     * Get AvailabilityFilter value
     *
     * @return string|null
     */
    public function getAvailabilityFilter(): ?string
    {
        return $this->AvailabilityFilter;
    }

    /**
     * Set AvailabilityFilter value
     *
     * @param string $availabilityFilter
     *
     * @return GetAvailableTrainsData
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\AvailabilityFilter::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\AvailabilityFilter::valueIsValid()
     */
    public function setAvailabilityFilter(?string $availabilityFilter = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\AvailabilityFilter::valueIsValid($availabilityFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\AvailabilityFilter', is_array($availabilityFilter) ? implode(', ', $availabilityFilter) : var_export($availabilityFilter, true), implode(', ', AvailabilityFilter::getValidValues())), __LINE__);
        }
        $this->AvailabilityFilter = $availabilityFilter;

        return $this;
    }

    /**
     * Get FareClassControl value
     *
     * @return string|null
     */
    public function getFareClassControl(): ?string
    {
        return $this->FareClassControl;
    }

    /**
     * Set FareClassControl value
     *
     * @param string $fareClassControl
     *
     * @return GetAvailableTrainsData
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\FareClassControl::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\FareClassControl::valueIsValid()
     */
    public function setFareClassControl(?string $fareClassControl = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\FareClassControl::valueIsValid($fareClassControl)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\FareClassControl', is_array($fareClassControl) ? implode(', ', $fareClassControl) : var_export($fareClassControl, true), implode(', ', FareClassControl::getValidValues())), __LINE__);
        }
        $this->FareClassControl = $fareClassControl;

        return $this;
    }

    /**
     * Get IsGuest value
     *
     * @return bool|null
     */
    public function getIsGuest(): ?bool
    {
        return $this->IsGuest;
    }

    /**
     * Set IsGuest value
     *
     * @param bool $isGuest
     *
     * @return GetAvailableTrainsData
     */
    public function setIsGuest(?bool $isGuest = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGuest) && !is_bool($isGuest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGuest, true), gettype($isGuest)), __LINE__);
        }
        $this->IsGuest = $isGuest;

        return $this;
    }

    /**
     * Get OverrideIntervalTimeRestriction value
     *
     * @return bool|null
     */
    public function getOverrideIntervalTimeRestriction(): ?bool
    {
        return $this->OverrideIntervalTimeRestriction;
    }

    /**
     * Set OverrideIntervalTimeRestriction value
     *
     * @param bool $overrideIntervalTimeRestriction
     *
     * @return GetAvailableTrainsData
     */
    public function setOverrideIntervalTimeRestriction(?bool $overrideIntervalTimeRestriction = null): self
    {
        // validation for constraint: boolean
        if (!is_null($overrideIntervalTimeRestriction) && !is_bool($overrideIntervalTimeRestriction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overrideIntervalTimeRestriction, true), gettype($overrideIntervalTimeRestriction)), __LINE__);
        }
        $this->OverrideIntervalTimeRestriction = $overrideIntervalTimeRestriction;

        return $this;
    }

    /**
     * Get AvailabilityType value
     *
     * @return string|null
     */
    public function getAvailabilityType(): ?string
    {
        return $this->AvailabilityType;
    }

    /**
     * Set AvailabilityType value
     *
     * @param string $availabilityType
     *
     * @return GetAvailableTrainsData
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\AvailabilityType::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\AvailabilityType::valueIsValid()
     */
    public function setAvailabilityType(?string $availabilityType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\AvailabilityType::valueIsValid($availabilityType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\AvailabilityType', is_array($availabilityType) ? implode(', ', $availabilityType) : var_export($availabilityType, true), implode(', ', AvailabilityType::getValidValues())), __LINE__);
        }
        $this->AvailabilityType = $availabilityType;

        return $this;
    }

    /**
     * Get Culture value
     *
     * @return string|null
     */
    public function getCulture(): ?string
    {
        return $this->Culture;
    }

    /**
     * Set Culture value
     *
     * @param string $culture
     *
     * @return GetAvailableTrainsData
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\Culture::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\Culture::valueIsValid()
     */
    public function setCulture(?string $culture = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\Culture::valueIsValid($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\Culture', is_array($culture) ? implode(', ', $culture) : var_export($culture, true), implode(', ', Culture::getValidValues())), __LINE__);
        }
        $this->Culture = $culture;

        return $this;
    }

    /**
     * Get ShowFareBasisRestrictionRules value
     *
     * @return bool|null
     */
    public function getShowFareBasisRestrictionRules(): ?bool
    {
        return $this->ShowFareBasisRestrictionRules;
    }

    /**
     * Set ShowFareBasisRestrictionRules value
     *
     * @param bool $showFareBasisRestrictionRules
     *
     * @return GetAvailableTrainsData
     */
    public function setShowFareBasisRestrictionRules(?bool $showFareBasisRestrictionRules = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showFareBasisRestrictionRules) && !is_bool($showFareBasisRestrictionRules)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showFareBasisRestrictionRules, true), gettype($showFareBasisRestrictionRules)), __LINE__);
        }
        $this->ShowFareBasisRestrictionRules = $showFareBasisRestrictionRules;

        return $this;
    }

    /**
     * Get DepartureStation value
     *
     * @return string|null
     */
    public function getDepartureStation(): ?string
    {
        return $this->DepartureStation;
    }

    /**
     * Set DepartureStation value
     *
     * @param string $departureStation
     *
     * @return GetAvailableTrainsData
     */
    public function setDepartureStation(?string $departureStation = null): self
    {
        // validation for constraint: string
        if (!is_null($departureStation) && !is_string($departureStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureStation, true), gettype($departureStation)), __LINE__);
        }
        $this->DepartureStation = $departureStation;

        return $this;
    }

    /**
     * Get ArrivalStation value
     *
     * @return string|null
     */
    public function getArrivalStation(): ?string
    {
        return $this->ArrivalStation;
    }

    /**
     * Set ArrivalStation value
     *
     * @param string $arrivalStation
     *
     * @return GetAvailableTrainsData
     */
    public function setArrivalStation(?string $arrivalStation = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalStation) && !is_string($arrivalStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalStation, true), gettype($arrivalStation)), __LINE__);
        }
        $this->ArrivalStation = $arrivalStation;

        return $this;
    }

    /**
     * Get RoundtripDepartureStation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRoundtripDepartureStation(): ?string
    {
        return $this->RoundtripDepartureStation ?? null;
    }

    /**
     * Set RoundtripDepartureStation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $roundtripDepartureStation
     *
     * @return GetAvailableTrainsData
     */
    public function setRoundtripDepartureStation(?string $roundtripDepartureStation = null): self
    {
        // validation for constraint: string
        if (!is_null($roundtripDepartureStation) && !is_string($roundtripDepartureStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roundtripDepartureStation, true), gettype($roundtripDepartureStation)), __LINE__);
        }
        if (is_null($roundtripDepartureStation) || (is_array($roundtripDepartureStation) && empty($roundtripDepartureStation))) {
            unset($this->RoundtripDepartureStation);
        } else {
            $this->RoundtripDepartureStation = $roundtripDepartureStation;
        }

        return $this;
    }

    /**
     * Get RoundtripArrivalStation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRoundtripArrivalStation(): ?string
    {
        return $this->RoundtripArrivalStation ?? null;
    }

    /**
     * Set RoundtripArrivalStation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $roundtripArrivalStation
     *
     * @return GetAvailableTrainsData
     */
    public function setRoundtripArrivalStation(?string $roundtripArrivalStation = null): self
    {
        // validation for constraint: string
        if (!is_null($roundtripArrivalStation) && !is_string($roundtripArrivalStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roundtripArrivalStation, true), gettype($roundtripArrivalStation)), __LINE__);
        }
        if (is_null($roundtripArrivalStation) || (is_array($roundtripArrivalStation) && empty($roundtripArrivalStation))) {
            unset($this->RoundtripArrivalStation);
        } else {
            $this->RoundtripArrivalStation = $roundtripArrivalStation;
        }

        return $this;
    }

    /**
     * Get ProductClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductClass(): ?string
    {
        return $this->ProductClass ?? null;
    }

    /**
     * Set ProductClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productClass
     *
     * @return GetAvailableTrainsData
     */
    public function setProductClass(?string $productClass = null): self
    {
        // validation for constraint: string
        if (!is_null($productClass) && !is_string($productClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productClass, true), gettype($productClass)), __LINE__);
        }
        if (is_null($productClass) || (is_array($productClass) && empty($productClass))) {
            unset($this->ProductClass);
        } else {
            $this->ProductClass = $productClass;
        }

        return $this;
    }

    /**
     * Get RoundTripProductClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRoundTripProductClass(): ?string
    {
        return $this->RoundTripProductClass ?? null;
    }

    /**
     * Set RoundTripProductClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $roundTripProductClass
     *
     * @return GetAvailableTrainsData
     */
    public function setRoundTripProductClass(?string $roundTripProductClass = null): self
    {
        // validation for constraint: string
        if (!is_null($roundTripProductClass) && !is_string($roundTripProductClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roundTripProductClass, true), gettype($roundTripProductClass)), __LINE__);
        }
        if (is_null($roundTripProductClass) || (is_array($roundTripProductClass) && empty($roundTripProductClass))) {
            unset($this->RoundTripProductClass);
        } else {
            $this->RoundTripProductClass = $roundTripProductClass;
        }

        return $this;
    }

    /**
     * Get FareClassOfService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFareClassOfService(): ?string
    {
        return $this->FareClassOfService ?? null;
    }

    /**
     * Set FareClassOfService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fareClassOfService
     *
     * @return GetAvailableTrainsData
     */
    public function setFareClassOfService(?string $fareClassOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($fareClassOfService) && !is_string($fareClassOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareClassOfService, true), gettype($fareClassOfService)), __LINE__);
        }
        if (is_null($fareClassOfService) || (is_array($fareClassOfService) && empty($fareClassOfService))) {
            unset($this->FareClassOfService);
        } else {
            $this->FareClassOfService = $fareClassOfService;
        }

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
     * @return GetAvailableTrainsData
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
     * Get IDPartner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIDPartner(): ?string
    {
        return $this->IDPartner ?? null;
    }

    /**
     * Set IDPartner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $iDPartner
     *
     * @return GetAvailableTrainsData
     */
    public function setIDPartner(?string $iDPartner = null): self
    {
        // validation for constraint: string
        if (!is_null($iDPartner) && !is_string($iDPartner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iDPartner, true), gettype($iDPartner)), __LINE__);
        }
        if (is_null($iDPartner) || (is_array($iDPartner) && empty($iDPartner))) {
            unset($this->IDPartner);
        } else {
            $this->IDPartner = $iDPartner;
        }

        return $this;
    }

    /**
     * Get Promocode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromocode(): ?string
    {
        return $this->Promocode ?? null;
    }

    /**
     * Set Promocode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promocode
     *
     * @return GetAvailableTrainsData
     */
    public function setPromocode(?string $promocode = null): self
    {
        // validation for constraint: string
        if (!is_null($promocode) && !is_string($promocode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promocode, true), gettype($promocode)), __LINE__);
        }
        if (is_null($promocode) || (is_array($promocode) && empty($promocode))) {
            unset($this->Promocode);
        } else {
            $this->Promocode = $promocode;
        }

        return $this;
    }

    /**
     * Get ProductName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->ProductName ?? null;
    }

    /**
     * Set ProductName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productName
     *
     * @return GetAvailableTrainsData
     */
    public function setProductName(?string $productName = null): self
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productName, true), gettype($productName)), __LINE__);
        }
        if (is_null($productName) || (is_array($productName) && empty($productName))) {
            unset($this->ProductName);
        } else {
            $this->ProductName = $productName;
        }

        return $this;
    }

    /**
     * Get FareType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFareType(): ?string
    {
        return $this->FareType ?? null;
    }

    /**
     * Set FareType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fareType
     *
     * @return GetAvailableTrainsData
     */
    public function setFareType(?string $fareType = null): self
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareType, true), gettype($fareType)), __LINE__);
        }
        if (is_null($fareType) || (is_array($fareType) && empty($fareType))) {
            unset($this->FareType);
        } else {
            $this->FareType = $fareType;
        }

        return $this;
    }

    /**
     * Get AgentPromotion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return AgentPromotion|null
     */
    public function getAgentPromotion(): ?\Ntvspa\Big\Booking\Structs\AgentPromotion
    {
        return $this->AgentPromotion ?? null;
    }

    /**
     * Set AgentPromotion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param AgentPromotion $agentPromotion
     *
     * @return GetAvailableTrainsData
     */
    public function setAgentPromotion(?\Ntvspa\Big\Booking\Structs\AgentPromotion $agentPromotion = null): self
    {
        if (is_null($agentPromotion) || (is_array($agentPromotion) && empty($agentPromotion))) {
            unset($this->AgentPromotion);
        } else {
            $this->AgentPromotion = $agentPromotion;
        }

        return $this;
    }

    /**
     * Get ShowNestedSSR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getShowNestedSSR(): ?bool
    {
        return $this->ShowNestedSSR ?? null;
    }

    /**
     * Set ShowNestedSSR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $showNestedSSR
     *
     * @return GetAvailableTrainsData
     */
    public function setShowNestedSSR(?bool $showNestedSSR = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showNestedSSR) && !is_bool($showNestedSSR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showNestedSSR, true), gettype($showNestedSSR)), __LINE__);
        }
        if (is_null($showNestedSSR) || (is_array($showNestedSSR) && empty($showNestedSSR))) {
            unset($this->ShowNestedSSR);
        } else {
            $this->ShowNestedSSR = $showNestedSSR;
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
     * @return GetAvailableTrainsData
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
     * @return GetAvailableTrainsData
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
}
