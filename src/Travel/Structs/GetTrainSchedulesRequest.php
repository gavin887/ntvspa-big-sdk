<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Travel\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTrainSchedulesRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q15:GetTrainSchedulesRequest | tns:GetTrainSchedulesRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetTrainSchedulesRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The DepartureDateTime
     *
     * @var string|null
     */
    protected ?string $DepartureDateTime = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The NTVTrainNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $NTVTrainNumber = null;
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
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ArrivalStation = null;

    /**
     * Constructor method for GetTrainSchedulesRequest
     *
     * @param string $sourceSystem
     * @param string $departureDateTime
     * @param string $signature
     * @param string $nTVTrainNumber
     * @param string $departureStation
     * @param string $arrivalStation
     *
     * @uses GetTrainSchedulesRequest::setSourceSystem()
     * @uses GetTrainSchedulesRequest::setDepartureDateTime()
     * @uses GetTrainSchedulesRequest::setSignature()
     * @uses GetTrainSchedulesRequest::setNTVTrainNumber()
     * @uses GetTrainSchedulesRequest::setDepartureStation()
     * @uses GetTrainSchedulesRequest::setArrivalStation()
     */
    public function __construct(?string $sourceSystem = null, ?string $departureDateTime = null, ?string $signature = null, ?string $nTVTrainNumber = null, ?string $departureStation = null, ?string $arrivalStation = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setDepartureDateTime($departureDateTime)
            ->setSignature($signature)
            ->setNTVTrainNumber($nTVTrainNumber)
            ->setDepartureStation($departureStation)
            ->setArrivalStation($arrivalStation);
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
     * @return GetTrainSchedulesRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Travel\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Travel\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Travel\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Travel\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
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
     * @return GetTrainSchedulesRequest
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
     * @return GetTrainSchedulesRequest
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
     * Get NTVTrainNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNTVTrainNumber(): ?string
    {
        return $this->NTVTrainNumber ?? null;
    }

    /**
     * Set NTVTrainNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $nTVTrainNumber
     *
     * @return GetTrainSchedulesRequest
     */
    public function setNTVTrainNumber(?string $nTVTrainNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($nTVTrainNumber) && !is_string($nTVTrainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nTVTrainNumber, true), gettype($nTVTrainNumber)), __LINE__);
        }
        if (is_null($nTVTrainNumber) || (is_array($nTVTrainNumber) && empty($nTVTrainNumber))) {
            unset($this->NTVTrainNumber);
        } else {
            $this->NTVTrainNumber = $nTVTrainNumber;
        }

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
     * @return GetTrainSchedulesRequest
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
     * @return GetTrainSchedulesRequest
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
}
