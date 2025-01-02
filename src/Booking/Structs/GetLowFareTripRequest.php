<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLowFareTripRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q43:GetLowFareTripRequest | tns:GetLowFareTripRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetLowFareTripRequest extends AbstractStructBase
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
     * The GetLowFareTrip
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var GetLowFareTripData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\GetLowFareTripData $GetLowFareTrip = null;

    /**
     * Constructor method for GetLowFareTripRequest
     *
     * @param string             $sourceSystem
     * @param string             $signature
     * @param GetLowFareTripData $getLowFareTrip
     *
     * @uses GetLowFareTripRequest::setSourceSystem()
     * @uses GetLowFareTripRequest::setSignature()
     * @uses GetLowFareTripRequest::setGetLowFareTrip()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Booking\Structs\GetLowFareTripData $getLowFareTrip = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setGetLowFareTrip($getLowFareTrip);
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
     * @return GetLowFareTripRequest
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
     * @return GetLowFareTripRequest
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
     * Get GetLowFareTrip value
     *
     * @return GetLowFareTripData|null
     */
    public function getGetLowFareTrip(): ?\Ntvspa\Big\Booking\Structs\GetLowFareTripData
    {
        return $this->GetLowFareTrip;
    }

    /**
     * Set GetLowFareTrip value
     *
     * @param GetLowFareTripData $getLowFareTrip
     *
     * @return GetLowFareTripRequest
     */
    public function setGetLowFareTrip(?\Ntvspa\Big\Booking\Structs\GetLowFareTripData $getLowFareTrip = null): self
    {
        $this->GetLowFareTrip = $getLowFareTrip;

        return $this;
    }
}
