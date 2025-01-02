<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveBusinessPassCardRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q15:RetrieveBusinessPassCardRequest | tns:RetrieveBusinessPassCardRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveBusinessPassCardRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The ShowTransactions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ShowTransactions = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;

    /**
     * Constructor method for RetrieveBusinessPassCardRequest
     *
     * @param string $sourceSystem
     * @param bool   $showTransactions
     * @param string $signature
     *
     * @uses RetrieveBusinessPassCardRequest::setSourceSystem()
     * @uses RetrieveBusinessPassCardRequest::setShowTransactions()
     * @uses RetrieveBusinessPassCardRequest::setSignature()
     */
    public function __construct(?string $sourceSystem = null, ?bool $showTransactions = null, ?string $signature = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setShowTransactions($showTransactions)
            ->setSignature($signature);
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
     * @return RetrieveBusinessPassCardRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get ShowTransactions value
     *
     * @return bool|null
     */
    public function getShowTransactions(): ?bool
    {
        return $this->ShowTransactions;
    }

    /**
     * Set ShowTransactions value
     *
     * @param bool $showTransactions
     *
     * @return RetrieveBusinessPassCardRequest
     */
    public function setShowTransactions(?bool $showTransactions = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showTransactions) && !is_bool($showTransactions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showTransactions, true), gettype($showTransactions)), __LINE__);
        }
        $this->ShowTransactions = $showTransactions;

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
     * @return RetrieveBusinessPassCardRequest
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
}
