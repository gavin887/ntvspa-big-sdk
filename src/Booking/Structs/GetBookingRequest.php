<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q9:GetBookingRequest | tns:GetBookingRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetBookingRequest extends AbstractStructBase
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
     * The PNR
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PNR = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LastName = null;

    /**
     * Constructor method for GetBookingRequest
     *
     * @param string $sourceSystem
     * @param string $signature
     * @param string $pNR
     * @param string $firstName
     * @param string $lastName
     *
     * @uses GetBookingRequest::setSourceSystem()
     * @uses GetBookingRequest::setSignature()
     * @uses GetBookingRequest::setPNR()
     * @uses GetBookingRequest::setFirstName()
     * @uses GetBookingRequest::setLastName()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?string $pNR = null, ?string $firstName = null, ?string $lastName = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setPNR($pNR)
            ->setFirstName($firstName)
            ->setLastName($lastName);
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
     * @return GetBookingRequest
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
     * @return GetBookingRequest
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
     * @return GetBookingRequest
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
     * Get FirstName value
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    /**
     * Set FirstName value
     *
     * @param string $firstName
     *
     * @return GetBookingRequest
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;

        return $this;
    }

    /**
     * Get LastName value
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    /**
     * Set LastName value
     *
     * @param string $lastName
     *
     * @return GetBookingRequest
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;

        return $this;
    }
}
