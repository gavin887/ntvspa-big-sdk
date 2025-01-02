<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfstring;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLowFareTripData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetLowFareTripData
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetLowFareTripData extends AbstractStructBase
{
    /**
     * The RoundTrip
     *
     * @var bool|null
     */
    protected ?bool $RoundTrip = null;
    /**
     * The IntervalStartDate
     *
     * @var string|null
     */
    protected ?string $IntervalStartDate = null;
    /**
     * The IntervalEndDate
     *
     * @var string|null
     */
    protected ?string $IntervalEndDate = null;
    /**
     * The RoundTripIntervalStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $RoundTripIntervalStartDate = null;
    /**
     * The RoundTripIntervalEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $RoundTripIntervalEndDate = null;
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
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfstring|null
     */
    protected ?ArrayOfstring $ProductClass = null;
    /**
     * The FareType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfstring|null
     */
    protected ?ArrayOfstring $FareType = null;
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
     * The Promocode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Promocode = null;

    /**
     * Constructor method for GetLowFareTripData
     *
     * @param bool                                     $roundTrip
     * @param string                                   $intervalStartDate
     * @param string                                   $intervalEndDate
     * @param string                                   $roundTripIntervalStartDate
     * @param string                                   $roundTripIntervalEndDate
     * @param int                                      $adultNumber
     * @param int                                      $seniorNumber
     * @param int                                      $childNumber
     * @param int                                      $youngNumber
     * @param string                                   $departureStation
     * @param string                                   $arrivalStation
     * @param string                                   $roundtripDepartureStation
     * @param string                                   $roundtripArrivalStation
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfstring $productClass
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfstring $fareType
     * @param string                                   $currencyCode
     * @param string                                   $promocode
     *
     * @uses GetLowFareTripData::setRoundTrip()
     * @uses GetLowFareTripData::setIntervalStartDate()
     * @uses GetLowFareTripData::setIntervalEndDate()
     * @uses GetLowFareTripData::setRoundTripIntervalStartDate()
     * @uses GetLowFareTripData::setRoundTripIntervalEndDate()
     * @uses GetLowFareTripData::setAdultNumber()
     * @uses GetLowFareTripData::setSeniorNumber()
     * @uses GetLowFareTripData::setChildNumber()
     * @uses GetLowFareTripData::setYoungNumber()
     * @uses GetLowFareTripData::setDepartureStation()
     * @uses GetLowFareTripData::setArrivalStation()
     * @uses GetLowFareTripData::setRoundtripDepartureStation()
     * @uses GetLowFareTripData::setRoundtripArrivalStation()
     * @uses GetLowFareTripData::setProductClass()
     * @uses GetLowFareTripData::setFareType()
     * @uses GetLowFareTripData::setCurrencyCode()
     * @uses GetLowFareTripData::setPromocode()
     */
    public function __construct(?bool $roundTrip = null, ?string $intervalStartDate = null, ?string $intervalEndDate = null, ?string $roundTripIntervalStartDate = null, ?string $roundTripIntervalEndDate = null, ?int $adultNumber = null, ?int $seniorNumber = null, ?int $childNumber = null, ?int $youngNumber = null, ?string $departureStation = null, ?string $arrivalStation = null, ?string $roundtripDepartureStation = null, ?string $roundtripArrivalStation = null, ?ArrayOfstring $productClass = null, ?ArrayOfstring $fareType = null, ?string $currencyCode = null, ?string $promocode = null)
    {
        $this
            ->setRoundTrip($roundTrip)
            ->setIntervalStartDate($intervalStartDate)
            ->setIntervalEndDate($intervalEndDate)
            ->setRoundTripIntervalStartDate($roundTripIntervalStartDate)
            ->setRoundTripIntervalEndDate($roundTripIntervalEndDate)
            ->setAdultNumber($adultNumber)
            ->setSeniorNumber($seniorNumber)
            ->setChildNumber($childNumber)
            ->setYoungNumber($youngNumber)
            ->setDepartureStation($departureStation)
            ->setArrivalStation($arrivalStation)
            ->setRoundtripDepartureStation($roundtripDepartureStation)
            ->setRoundtripArrivalStation($roundtripArrivalStation)
            ->setProductClass($productClass)
            ->setFareType($fareType)
            ->setCurrencyCode($currencyCode)
            ->setPromocode($promocode);
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
     * @return GetLowFareTripData
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
     * Get IntervalStartDate value
     *
     * @return string|null
     */
    public function getIntervalStartDate(): ?string
    {
        return $this->IntervalStartDate;
    }

    /**
     * Set IntervalStartDate value
     *
     * @param string $intervalStartDate
     *
     * @return GetLowFareTripData
     */
    public function setIntervalStartDate(?string $intervalStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($intervalStartDate) && !is_string($intervalStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intervalStartDate, true), gettype($intervalStartDate)), __LINE__);
        }
        $this->IntervalStartDate = $intervalStartDate;

        return $this;
    }

    /**
     * Get IntervalEndDate value
     *
     * @return string|null
     */
    public function getIntervalEndDate(): ?string
    {
        return $this->IntervalEndDate;
    }

    /**
     * Set IntervalEndDate value
     *
     * @param string $intervalEndDate
     *
     * @return GetLowFareTripData
     */
    public function setIntervalEndDate(?string $intervalEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($intervalEndDate) && !is_string($intervalEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intervalEndDate, true), gettype($intervalEndDate)), __LINE__);
        }
        $this->IntervalEndDate = $intervalEndDate;

        return $this;
    }

    /**
     * Get RoundTripIntervalStartDate value
     *
     * @return string|null
     */
    public function getRoundTripIntervalStartDate(): ?string
    {
        return $this->RoundTripIntervalStartDate;
    }

    /**
     * Set RoundTripIntervalStartDate value
     *
     * @param string $roundTripIntervalStartDate
     *
     * @return GetLowFareTripData
     */
    public function setRoundTripIntervalStartDate(?string $roundTripIntervalStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($roundTripIntervalStartDate) && !is_string($roundTripIntervalStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roundTripIntervalStartDate, true), gettype($roundTripIntervalStartDate)), __LINE__);
        }
        $this->RoundTripIntervalStartDate = $roundTripIntervalStartDate;

        return $this;
    }

    /**
     * Get RoundTripIntervalEndDate value
     *
     * @return string|null
     */
    public function getRoundTripIntervalEndDate(): ?string
    {
        return $this->RoundTripIntervalEndDate;
    }

    /**
     * Set RoundTripIntervalEndDate value
     *
     * @param string $roundTripIntervalEndDate
     *
     * @return GetLowFareTripData
     */
    public function setRoundTripIntervalEndDate(?string $roundTripIntervalEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($roundTripIntervalEndDate) && !is_string($roundTripIntervalEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roundTripIntervalEndDate, true), gettype($roundTripIntervalEndDate)), __LINE__);
        }
        $this->RoundTripIntervalEndDate = $roundTripIntervalEndDate;

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
     * @return GetLowFareTripData
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
     * @return GetLowFareTripData
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
     * @return GetLowFareTripData
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
     * @return GetLowFareTripData
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
     * @return GetLowFareTripData
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
     * @return GetLowFareTripData
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
     * @return GetLowFareTripData
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
     * @return GetLowFareTripData
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
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfstring|null
     */
    public function getProductClass(): ?ArrayOfstring
    {
        return $this->ProductClass ?? null;
    }

    /**
     * Set ProductClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfstring $productClass
     *
     * @return GetLowFareTripData
     */
    public function setProductClass(?ArrayOfstring $productClass = null): self
    {
        if (is_null($productClass) || (is_array($productClass) && empty($productClass))) {
            unset($this->ProductClass);
        } else {
            $this->ProductClass = $productClass;
        }

        return $this;
    }

    /**
     * Get FareType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfstring|null
     */
    public function getFareType(): ?ArrayOfstring
    {
        return $this->FareType ?? null;
    }

    /**
     * Set FareType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfstring $fareType
     *
     * @return GetLowFareTripData
     */
    public function setFareType(?ArrayOfstring $fareType = null): self
    {
        if (is_null($fareType) || (is_array($fareType) && empty($fareType))) {
            unset($this->FareType);
        } else {
            $this->FareType = $fareType;
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
     * @return GetLowFareTripData
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
     * @return GetLowFareTripData
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
}
