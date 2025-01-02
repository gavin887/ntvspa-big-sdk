<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfJourney;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteJourneyRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q13:DeleteJourneyRequest | tns:DeleteJourneyRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DeleteJourneyRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The WaiveFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $WaiveFee = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The Journeys
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfJourney|null
     */
    protected ?ArrayOfJourney $Journeys = null;

    /**
     * Constructor method for DeleteJourneyRequest
     *
     * @param string                                    $sourceSystem
     * @param bool                                      $waiveFee
     * @param string                                    $signature
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourney $journeys
     *
     * @uses DeleteJourneyRequest::setSourceSystem()
     * @uses DeleteJourneyRequest::setWaiveFee()
     * @uses DeleteJourneyRequest::setSignature()
     * @uses DeleteJourneyRequest::setJourneys()
     */
    public function __construct(?string $sourceSystem = null, ?bool $waiveFee = null, ?string $signature = null, ?ArrayOfJourney $journeys = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setWaiveFee($waiveFee)
            ->setSignature($signature)
            ->setJourneys($journeys);
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
     * @return DeleteJourneyRequest
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
     * Get WaiveFee value
     *
     * @return bool|null
     */
    public function getWaiveFee(): ?bool
    {
        return $this->WaiveFee;
    }

    /**
     * Set WaiveFee value
     *
     * @param bool $waiveFee
     *
     * @return DeleteJourneyRequest
     */
    public function setWaiveFee(?bool $waiveFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($waiveFee) && !is_bool($waiveFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($waiveFee, true), gettype($waiveFee)), __LINE__);
        }
        $this->WaiveFee = $waiveFee;

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
     * @return DeleteJourneyRequest
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
     * Get Journeys value
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfJourney|null
     */
    public function getJourneys(): ?ArrayOfJourney
    {
        return $this->Journeys;
    }

    /**
     * Set Journeys value
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourney $journeys
     *
     * @return DeleteJourneyRequest
     */
    public function setJourneys(?ArrayOfJourney $journeys = null): self
    {
        $this->Journeys = $journeys;

        return $this;
    }
}
