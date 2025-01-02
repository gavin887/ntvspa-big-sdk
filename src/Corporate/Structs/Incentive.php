<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Incentive Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Incentive
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Incentive extends AbstractStructBase
{
    /**
     * The SaleStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $SaleStartDate = null;
    /**
     * The SaleEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $SaleEndDate = null;
    /**
     * The JourneyStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $JourneyStartDate = null;
    /**
     * The JourneyEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $JourneyEndDate = null;
    /**
     * The IncentivePercentage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $IncentivePercentage = null;
    /**
     * The FareCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FareCode = null;
    /**
     * The DepartureStationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DepartureStationCode = null;
    /**
     * The ArrivalStationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ArrivalStationCode = null;

    /**
     * Constructor method for Incentive
     *
     * @param string $saleStartDate
     * @param string $saleEndDate
     * @param string $journeyStartDate
     * @param string $journeyEndDate
     * @param float  $incentivePercentage
     * @param string $fareCode
     * @param string $departureStationCode
     * @param string $arrivalStationCode
     *
     * @uses Incentive::setSaleStartDate()
     * @uses Incentive::setSaleEndDate()
     * @uses Incentive::setJourneyStartDate()
     * @uses Incentive::setJourneyEndDate()
     * @uses Incentive::setIncentivePercentage()
     * @uses Incentive::setFareCode()
     * @uses Incentive::setDepartureStationCode()
     * @uses Incentive::setArrivalStationCode()
     */
    public function __construct(?string $saleStartDate = null, ?string $saleEndDate = null, ?string $journeyStartDate = null, ?string $journeyEndDate = null, ?float $incentivePercentage = null, ?string $fareCode = null, ?string $departureStationCode = null, ?string $arrivalStationCode = null)
    {
        $this
            ->setSaleStartDate($saleStartDate)
            ->setSaleEndDate($saleEndDate)
            ->setJourneyStartDate($journeyStartDate)
            ->setJourneyEndDate($journeyEndDate)
            ->setIncentivePercentage($incentivePercentage)
            ->setFareCode($fareCode)
            ->setDepartureStationCode($departureStationCode)
            ->setArrivalStationCode($arrivalStationCode);
    }

    /**
     * Get SaleStartDate value
     *
     * @return string|null
     */
    public function getSaleStartDate(): ?string
    {
        return $this->SaleStartDate;
    }

    /**
     * Set SaleStartDate value
     *
     * @param string $saleStartDate
     *
     * @return Incentive
     */
    public function setSaleStartDate(?string $saleStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($saleStartDate) && !is_string($saleStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleStartDate, true), gettype($saleStartDate)), __LINE__);
        }
        $this->SaleStartDate = $saleStartDate;

        return $this;
    }

    /**
     * Get SaleEndDate value
     *
     * @return string|null
     */
    public function getSaleEndDate(): ?string
    {
        return $this->SaleEndDate;
    }

    /**
     * Set SaleEndDate value
     *
     * @param string $saleEndDate
     *
     * @return Incentive
     */
    public function setSaleEndDate(?string $saleEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($saleEndDate) && !is_string($saleEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleEndDate, true), gettype($saleEndDate)), __LINE__);
        }
        $this->SaleEndDate = $saleEndDate;

        return $this;
    }

    /**
     * Get JourneyStartDate value
     *
     * @return string|null
     */
    public function getJourneyStartDate(): ?string
    {
        return $this->JourneyStartDate;
    }

    /**
     * Set JourneyStartDate value
     *
     * @param string $journeyStartDate
     *
     * @return Incentive
     */
    public function setJourneyStartDate(?string $journeyStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($journeyStartDate) && !is_string($journeyStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($journeyStartDate, true), gettype($journeyStartDate)), __LINE__);
        }
        $this->JourneyStartDate = $journeyStartDate;

        return $this;
    }

    /**
     * Get JourneyEndDate value
     *
     * @return string|null
     */
    public function getJourneyEndDate(): ?string
    {
        return $this->JourneyEndDate;
    }

    /**
     * Set JourneyEndDate value
     *
     * @param string $journeyEndDate
     *
     * @return Incentive
     */
    public function setJourneyEndDate(?string $journeyEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($journeyEndDate) && !is_string($journeyEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($journeyEndDate, true), gettype($journeyEndDate)), __LINE__);
        }
        $this->JourneyEndDate = $journeyEndDate;

        return $this;
    }

    /**
     * Get IncentivePercentage value
     *
     * @return float|null
     */
    public function getIncentivePercentage(): ?float
    {
        return $this->IncentivePercentage;
    }

    /**
     * Set IncentivePercentage value
     *
     * @param float $incentivePercentage
     *
     * @return Incentive
     */
    public function setIncentivePercentage(?float $incentivePercentage = null): self
    {
        // validation for constraint: float
        if (!is_null($incentivePercentage) && !(is_float($incentivePercentage) || is_numeric($incentivePercentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($incentivePercentage, true), gettype($incentivePercentage)), __LINE__);
        }
        $this->IncentivePercentage = $incentivePercentage;

        return $this;
    }

    /**
     * Get FareCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFareCode(): ?string
    {
        return $this->FareCode ?? null;
    }

    /**
     * Set FareCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fareCode
     *
     * @return Incentive
     */
    public function setFareCode(?string $fareCode = null): self
    {
        // validation for constraint: string
        if (!is_null($fareCode) && !is_string($fareCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareCode, true), gettype($fareCode)), __LINE__);
        }
        if (is_null($fareCode) || (is_array($fareCode) && empty($fareCode))) {
            unset($this->FareCode);
        } else {
            $this->FareCode = $fareCode;
        }

        return $this;
    }

    /**
     * Get DepartureStationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDepartureStationCode(): ?string
    {
        return $this->DepartureStationCode ?? null;
    }

    /**
     * Set DepartureStationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $departureStationCode
     *
     * @return Incentive
     */
    public function setDepartureStationCode(?string $departureStationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureStationCode) && !is_string($departureStationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureStationCode, true), gettype($departureStationCode)), __LINE__);
        }
        if (is_null($departureStationCode) || (is_array($departureStationCode) && empty($departureStationCode))) {
            unset($this->DepartureStationCode);
        } else {
            $this->DepartureStationCode = $departureStationCode;
        }

        return $this;
    }

    /**
     * Get ArrivalStationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getArrivalStationCode(): ?string
    {
        return $this->ArrivalStationCode ?? null;
    }

    /**
     * Set ArrivalStationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $arrivalStationCode
     *
     * @return Incentive
     */
    public function setArrivalStationCode(?string $arrivalStationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalStationCode) && !is_string($arrivalStationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalStationCode, true), gettype($arrivalStationCode)), __LINE__);
        }
        if (is_null($arrivalStationCode) || (is_array($arrivalStationCode) && empty($arrivalStationCode))) {
            unset($this->ArrivalStationCode);
        } else {
            $this->ArrivalStationCode = $arrivalStationCode;
        }

        return $this;
    }
}
