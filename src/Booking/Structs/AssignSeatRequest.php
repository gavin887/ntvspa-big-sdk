<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignSeatRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q35:AssignSeatRequest | tns:AssignSeatRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AssignSeatRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The STD
     *
     * @var string|null
     */
    protected ?string $STD = null;
    /**
     * The PassengerNumber
     *
     * @var int|null
     */
    protected ?int $PassengerNumber = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The TrainNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TrainNumber = null;
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
     * The UnitDesignator
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $UnitDesignator = null;
    /**
     * The CompartmentDesignator
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CompartmentDesignator = null;

    /**
     * Constructor method for AssignSeatRequest
     *
     * @param string $sourceSystem
     * @param string $sTD
     * @param int    $passengerNumber
     * @param string $signature
     * @param string $trainNumber
     * @param string $departureStation
     * @param string $arrivalStation
     * @param string $unitDesignator
     * @param string $compartmentDesignator
     *
     * @uses AssignSeatRequest::setSourceSystem()
     * @uses AssignSeatRequest::setSTD()
     * @uses AssignSeatRequest::setPassengerNumber()
     * @uses AssignSeatRequest::setSignature()
     * @uses AssignSeatRequest::setTrainNumber()
     * @uses AssignSeatRequest::setDepartureStation()
     * @uses AssignSeatRequest::setArrivalStation()
     * @uses AssignSeatRequest::setUnitDesignator()
     * @uses AssignSeatRequest::setCompartmentDesignator()
     */
    public function __construct(?string $sourceSystem = null, ?string $sTD = null, ?int $passengerNumber = null, ?string $signature = null, ?string $trainNumber = null, ?string $departureStation = null, ?string $arrivalStation = null, ?string $unitDesignator = null, ?string $compartmentDesignator = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSTD($sTD)
            ->setPassengerNumber($passengerNumber)
            ->setSignature($signature)
            ->setTrainNumber($trainNumber)
            ->setDepartureStation($departureStation)
            ->setArrivalStation($arrivalStation)
            ->setUnitDesignator($unitDesignator)
            ->setCompartmentDesignator($compartmentDesignator);
    }

    /**
     * Get SourceSystem value
     *
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->SourceSystem;
    }

    /**
     * Set SourceSystem value
     *
     * @param string $sourceSystem
     *
     * @return AssignSeatRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get STD value
     *
     * @return string|null
     */
    public function getSTD(): ?string
    {
        return $this->STD;
    }

    /**
     * Set STD value
     *
     * @param string $sTD
     *
     * @return AssignSeatRequest
     */
    public function setSTD(?string $sTD = null): self
    {
        // validation for constraint: string
        if (!is_null($sTD) && !is_string($sTD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sTD, true), gettype($sTD)), __LINE__);
        }
        $this->STD = $sTD;

        return $this;
    }

    /**
     * Get PassengerNumber value
     *
     * @return int|null
     */
    public function getPassengerNumber(): ?int
    {
        return $this->PassengerNumber;
    }

    /**
     * Set PassengerNumber value
     *
     * @param int $passengerNumber
     *
     * @return AssignSeatRequest
     */
    public function setPassengerNumber(?int $passengerNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerNumber) && !(is_int($passengerNumber) || ctype_digit($passengerNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerNumber, true), gettype($passengerNumber)), __LINE__);
        }
        $this->PassengerNumber = $passengerNumber;

        return $this;
    }

    /**
     * Get Signature value
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature;
    }

    /**
     * Set Signature value
     *
     * @param string $signature
     *
     * @return AssignSeatRequest
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;

        return $this;
    }

    /**
     * Get TrainNumber value
     *
     * @return string|null
     */
    public function getTrainNumber(): ?string
    {
        return $this->TrainNumber;
    }

    /**
     * Set TrainNumber value
     *
     * @param string $trainNumber
     *
     * @return AssignSeatRequest
     */
    public function setTrainNumber(?string $trainNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($trainNumber) && !is_string($trainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainNumber, true), gettype($trainNumber)), __LINE__);
        }
        $this->TrainNumber = $trainNumber;

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
     * @return AssignSeatRequest
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
     * @return AssignSeatRequest
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
     * Get UnitDesignator value
     *
     * @return string|null
     */
    public function getUnitDesignator(): ?string
    {
        return $this->UnitDesignator;
    }

    /**
     * Set UnitDesignator value
     *
     * @param string $unitDesignator
     *
     * @return AssignSeatRequest
     */
    public function setUnitDesignator(?string $unitDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($unitDesignator) && !is_string($unitDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitDesignator, true), gettype($unitDesignator)), __LINE__);
        }
        $this->UnitDesignator = $unitDesignator;

        return $this;
    }

    /**
     * Get CompartmentDesignator value
     *
     * @return string|null
     */
    public function getCompartmentDesignator(): ?string
    {
        return $this->CompartmentDesignator;
    }

    /**
     * Set CompartmentDesignator value
     *
     * @param string $compartmentDesignator
     *
     * @return AssignSeatRequest
     */
    public function setCompartmentDesignator(?string $compartmentDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($compartmentDesignator) && !is_string($compartmentDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compartmentDesignator, true), gettype($compartmentDesignator)), __LINE__);
        }
        $this->CompartmentDesignator = $compartmentDesignator;

        return $this;
    }
}
