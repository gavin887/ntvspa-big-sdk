<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Travel\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveItaloTrainsRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q9:RetrieveItaloTrainsRequest | tns:RetrieveItaloTrainsRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveItaloTrainsRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The HoursBack
     *
     * @var int|null
     */
    protected ?int $HoursBack = null;
    /**
     * The HoursForward
     *
     * @var int|null
     */
    protected ?int $HoursForward = null;
    /**
     * The StationDateTime
     *
     * @var string|null
     */
    protected ?string $StationDateTime = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
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
     * Constructor method for RetrieveItaloTrainsRequest
     *
     * @param string $sourceSystem
     * @param int    $hoursBack
     * @param int    $hoursForward
     * @param string $stationDateTime
     * @param string $signature
     * @param string $departureStation
     * @param string $arrivalStation
     *
     * @uses RetrieveItaloTrainsRequest::setSourceSystem()
     * @uses RetrieveItaloTrainsRequest::setHoursBack()
     * @uses RetrieveItaloTrainsRequest::setHoursForward()
     * @uses RetrieveItaloTrainsRequest::setStationDateTime()
     * @uses RetrieveItaloTrainsRequest::setSignature()
     * @uses RetrieveItaloTrainsRequest::setDepartureStation()
     * @uses RetrieveItaloTrainsRequest::setArrivalStation()
     */
    public function __construct(?string $sourceSystem = null, ?int $hoursBack = null, ?int $hoursForward = null, ?string $stationDateTime = null, ?string $signature = null, ?string $departureStation = null, ?string $arrivalStation = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setHoursBack($hoursBack)
            ->setHoursForward($hoursForward)
            ->setStationDateTime($stationDateTime)
            ->setSignature($signature)
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
     * @return RetrieveItaloTrainsRequest
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
     * Get HoursBack value
     *
     * @return int|null
     */
    public function getHoursBack(): ?int
    {
        return $this->HoursBack;
    }

    /**
     * Set HoursBack value
     *
     * @param int $hoursBack
     *
     * @return RetrieveItaloTrainsRequest
     */
    public function setHoursBack(?int $hoursBack = null): self
    {
        // validation for constraint: int
        if (!is_null($hoursBack) && !(is_int($hoursBack) || ctype_digit($hoursBack))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hoursBack, true), gettype($hoursBack)), __LINE__);
        }
        $this->HoursBack = $hoursBack;

        return $this;
    }

    /**
     * Get HoursForward value
     *
     * @return int|null
     */
    public function getHoursForward(): ?int
    {
        return $this->HoursForward;
    }

    /**
     * Set HoursForward value
     *
     * @param int $hoursForward
     *
     * @return RetrieveItaloTrainsRequest
     */
    public function setHoursForward(?int $hoursForward = null): self
    {
        // validation for constraint: int
        if (!is_null($hoursForward) && !(is_int($hoursForward) || ctype_digit($hoursForward))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hoursForward, true), gettype($hoursForward)), __LINE__);
        }
        $this->HoursForward = $hoursForward;

        return $this;
    }

    /**
     * Get StationDateTime value
     *
     * @return string|null
     */
    public function getStationDateTime(): ?string
    {
        return $this->StationDateTime;
    }

    /**
     * Set StationDateTime value
     *
     * @param string $stationDateTime
     *
     * @return RetrieveItaloTrainsRequest
     */
    public function setStationDateTime(?string $stationDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($stationDateTime) && !is_string($stationDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stationDateTime, true), gettype($stationDateTime)), __LINE__);
        }
        $this->StationDateTime = $stationDateTime;

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
     * @return RetrieveItaloTrainsRequest
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
     * @return RetrieveItaloTrainsRequest
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
     * @return RetrieveItaloTrainsRequest
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
}
