<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Travel\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckPlatformAccessAuthorizationRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q13:CheckPlatformAccessAuthorizationRequest | tns:CheckPlatformAccessAuthorizationRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CheckPlatformAccessAuthorizationRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The ReadingDateTime
     *
     * @var string|null
     */
    protected ?string $ReadingDateTime = null;
    /**
     * The LowerBoundTimeframe
     *
     * @var int|null
     */
    protected ?int $LowerBoundTimeframe = null;
    /**
     * The UpperBoundTimeframe
     *
     * @var int|null
     */
    protected ?int $UpperBoundTimeframe = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The PNR
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PNR = null;
    /**
     * The DepartureStation
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DepartureStation = null;

    /**
     * Constructor method for CheckPlatformAccessAuthorizationRequest
     *
     * @param string $sourceSystem
     * @param string $readingDateTime
     * @param int    $lowerBoundTimeframe
     * @param int    $upperBoundTimeframe
     * @param string $signature
     * @param string $pNR
     * @param string $departureStation
     *
     * @uses CheckPlatformAccessAuthorizationRequest::setSourceSystem()
     * @uses CheckPlatformAccessAuthorizationRequest::setReadingDateTime()
     * @uses CheckPlatformAccessAuthorizationRequest::setLowerBoundTimeframe()
     * @uses CheckPlatformAccessAuthorizationRequest::setUpperBoundTimeframe()
     * @uses CheckPlatformAccessAuthorizationRequest::setSignature()
     * @uses CheckPlatformAccessAuthorizationRequest::setPNR()
     * @uses CheckPlatformAccessAuthorizationRequest::setDepartureStation()
     */
    public function __construct(?string $sourceSystem = null, ?string $readingDateTime = null, ?int $lowerBoundTimeframe = null, ?int $upperBoundTimeframe = null, ?string $signature = null, ?string $pNR = null, ?string $departureStation = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setReadingDateTime($readingDateTime)
            ->setLowerBoundTimeframe($lowerBoundTimeframe)
            ->setUpperBoundTimeframe($upperBoundTimeframe)
            ->setSignature($signature)
            ->setPNR($pNR)
            ->setDepartureStation($departureStation);
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
     * @return CheckPlatformAccessAuthorizationRequest
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
     * Get ReadingDateTime value
     *
     * @return string|null
     */
    public function getReadingDateTime(): ?string
    {
        return $this->ReadingDateTime;
    }

    /**
     * Set ReadingDateTime value
     *
     * @param string $readingDateTime
     *
     * @return CheckPlatformAccessAuthorizationRequest
     */
    public function setReadingDateTime(?string $readingDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($readingDateTime) && !is_string($readingDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($readingDateTime, true), gettype($readingDateTime)), __LINE__);
        }
        $this->ReadingDateTime = $readingDateTime;

        return $this;
    }

    /**
     * Get LowerBoundTimeframe value
     *
     * @return int|null
     */
    public function getLowerBoundTimeframe(): ?int
    {
        return $this->LowerBoundTimeframe;
    }

    /**
     * Set LowerBoundTimeframe value
     *
     * @param int $lowerBoundTimeframe
     *
     * @return CheckPlatformAccessAuthorizationRequest
     */
    public function setLowerBoundTimeframe(?int $lowerBoundTimeframe = null): self
    {
        // validation for constraint: int
        if (!is_null($lowerBoundTimeframe) && !(is_int($lowerBoundTimeframe) || ctype_digit($lowerBoundTimeframe))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lowerBoundTimeframe, true), gettype($lowerBoundTimeframe)), __LINE__);
        }
        $this->LowerBoundTimeframe = $lowerBoundTimeframe;

        return $this;
    }

    /**
     * Get UpperBoundTimeframe value
     *
     * @return int|null
     */
    public function getUpperBoundTimeframe(): ?int
    {
        return $this->UpperBoundTimeframe;
    }

    /**
     * Set UpperBoundTimeframe value
     *
     * @param int $upperBoundTimeframe
     *
     * @return CheckPlatformAccessAuthorizationRequest
     */
    public function setUpperBoundTimeframe(?int $upperBoundTimeframe = null): self
    {
        // validation for constraint: int
        if (!is_null($upperBoundTimeframe) && !(is_int($upperBoundTimeframe) || ctype_digit($upperBoundTimeframe))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($upperBoundTimeframe, true), gettype($upperBoundTimeframe)), __LINE__);
        }
        $this->UpperBoundTimeframe = $upperBoundTimeframe;

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
     * @return CheckPlatformAccessAuthorizationRequest
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
     * Get PNR value
     *
     * @return string|null
     */
    public function getPNR(): ?string
    {
        return $this->PNR;
    }

    /**
     * Set PNR value
     *
     * @param string $pNR
     *
     * @return CheckPlatformAccessAuthorizationRequest
     */
    public function setPNR(?string $pNR = null): self
    {
        // validation for constraint: string
        if (!is_null($pNR) && !is_string($pNR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pNR, true), gettype($pNR)), __LINE__);
        }
        $this->PNR = $pNR;

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
     * @return CheckPlatformAccessAuthorizationRequest
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
}
