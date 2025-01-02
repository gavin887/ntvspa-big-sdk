<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableTrainsRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAvailableTrainsRequest | q1:GetAvailableTrainsRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetAvailableTrainsRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The GetAvailableTrains
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var GetAvailableTrainsData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\GetAvailableTrainsData $GetAvailableTrains = null;

    /**
     * Constructor method for GetAvailableTrainsRequest
     *
     * @param string                 $sourceSystem
     * @param string                 $signature
     * @param GetAvailableTrainsData $getAvailableTrains
     *
     * @uses GetAvailableTrainsRequest::setSourceSystem()
     * @uses GetAvailableTrainsRequest::setSignature()
     * @uses GetAvailableTrainsRequest::setGetAvailableTrains()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Booking\Structs\GetAvailableTrainsData $getAvailableTrains = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setGetAvailableTrains($getAvailableTrains);
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
     * @return GetAvailableTrainsRequest
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
     * @return GetAvailableTrainsRequest
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
     * Get GetAvailableTrains value
     *
     * @return GetAvailableTrainsData|null
     */
    public function getGetAvailableTrains(): ?\Ntvspa\Big\Booking\Structs\GetAvailableTrainsData
    {
        return $this->GetAvailableTrains;
    }

    /**
     * Set GetAvailableTrains value
     *
     * @param GetAvailableTrainsData $getAvailableTrains
     *
     * @return GetAvailableTrainsRequest
     */
    public function setGetAvailableTrains(?\Ntvspa\Big\Booking\Structs\GetAvailableTrainsData $getAvailableTrains = null): self
    {
        $this->GetAvailableTrains = $getAvailableTrains;

        return $this;
    }
}
