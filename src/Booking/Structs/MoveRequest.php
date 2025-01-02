<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfstring;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q31:MoveRequest | tns:MoveRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class MoveRequest extends AbstractStructBase
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
     * The JourneyFrom
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var Journey|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\Journey $JourneyFrom = null;
    /**
     * The JourneyTo
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var Journey|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\Journey $JourneyTo = null;
    /**
     * The RecordLocatorToMove
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfstring|null
     */
    protected ?ArrayOfstring $RecordLocatorToMove = null;

    /**
     * Constructor method for MoveRequest
     *
     * @param string                                   $sourceSystem
     * @param string                                   $signature
     * @param Journey                                  $journeyFrom
     * @param Journey                                  $journeyTo
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfstring $recordLocatorToMove
     *
     * @uses MoveRequest::setSourceSystem()
     * @uses MoveRequest::setSignature()
     * @uses MoveRequest::setJourneyFrom()
     * @uses MoveRequest::setJourneyTo()
     * @uses MoveRequest::setRecordLocatorToMove()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Booking\Structs\Journey $journeyFrom = null, ?\Ntvspa\Big\Booking\Structs\Journey $journeyTo = null, ?ArrayOfstring $recordLocatorToMove = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setJourneyFrom($journeyFrom)
            ->setJourneyTo($journeyTo)
            ->setRecordLocatorToMove($recordLocatorToMove);
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
     * @return MoveRequest
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
     * @return MoveRequest
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
     * Get JourneyFrom value
     *
     * @return Journey|null
     */
    public function getJourneyFrom(): ?\Ntvspa\Big\Booking\Structs\Journey
    {
        return $this->JourneyFrom;
    }

    /**
     * Set JourneyFrom value
     *
     * @param Journey $journeyFrom
     *
     * @return MoveRequest
     */
    public function setJourneyFrom(?\Ntvspa\Big\Booking\Structs\Journey $journeyFrom = null): self
    {
        $this->JourneyFrom = $journeyFrom;

        return $this;
    }

    /**
     * Get JourneyTo value
     *
     * @return Journey|null
     */
    public function getJourneyTo(): ?\Ntvspa\Big\Booking\Structs\Journey
    {
        return $this->JourneyTo;
    }

    /**
     * Set JourneyTo value
     *
     * @param Journey $journeyTo
     *
     * @return MoveRequest
     */
    public function setJourneyTo(?\Ntvspa\Big\Booking\Structs\Journey $journeyTo = null): self
    {
        $this->JourneyTo = $journeyTo;

        return $this;
    }

    /**
     * Get RecordLocatorToMove value
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfstring|null
     */
    public function getRecordLocatorToMove(): ?ArrayOfstring
    {
        return $this->RecordLocatorToMove;
    }

    /**
     * Set RecordLocatorToMove value
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfstring $recordLocatorToMove
     *
     * @return MoveRequest
     */
    public function setRecordLocatorToMove(?ArrayOfstring $recordLocatorToMove = null): self
    {
        $this->RecordLocatorToMove = $recordLocatorToMove;

        return $this;
    }
}
