<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Travel\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveRegionalTrainConnectionsRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q5:RetrieveRegionalTrainConnectionsRequest | tns:RetrieveRegionalTrainConnectionsRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveRegionalTrainConnectionsRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The InputDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $InputDateTime = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The LocationCode
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LocationCode = null;

    /**
     * Constructor method for RetrieveRegionalTrainConnectionsRequest
     *
     * @param string $sourceSystem
     * @param string $inputDateTime
     * @param string $signature
     * @param string $locationCode
     *
     * @uses RetrieveRegionalTrainConnectionsRequest::setSourceSystem()
     * @uses RetrieveRegionalTrainConnectionsRequest::setInputDateTime()
     * @uses RetrieveRegionalTrainConnectionsRequest::setSignature()
     * @uses RetrieveRegionalTrainConnectionsRequest::setLocationCode()
     */
    public function __construct(?string $sourceSystem = null, ?string $inputDateTime = null, ?string $signature = null, ?string $locationCode = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setInputDateTime($inputDateTime)
            ->setSignature($signature)
            ->setLocationCode($locationCode);
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
     * @return RetrieveRegionalTrainConnectionsRequest
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
     * Get InputDateTime value
     *
     * @return string|null
     */
    public function getInputDateTime(): ?string
    {
        return $this->InputDateTime;
    }

    /**
     * Set InputDateTime value
     *
     * @param string $inputDateTime
     *
     * @return RetrieveRegionalTrainConnectionsRequest
     */
    public function setInputDateTime(?string $inputDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($inputDateTime) && !is_string($inputDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inputDateTime, true), gettype($inputDateTime)), __LINE__);
        }
        $this->InputDateTime = $inputDateTime;

        return $this;
    }

    /**
     * Get Signature value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature ?? null;
    }

    /**
     * Set Signature value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $signature
     *
     * @return RetrieveRegionalTrainConnectionsRequest
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        if (is_null($signature) || (is_array($signature) && empty($signature))) {
            unset($this->Signature);
        } else {
            $this->Signature = $signature;
        }

        return $this;
    }

    /**
     * Get LocationCode value
     *
     * @return string|null
     */
    public function getLocationCode(): ?string
    {
        return $this->LocationCode;
    }

    /**
     * Set LocationCode value
     *
     * @param string $locationCode
     *
     * @return RetrieveRegionalTrainConnectionsRequest
     */
    public function setLocationCode(?string $locationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationCode, true), gettype($locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;

        return $this;
    }
}
