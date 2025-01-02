<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Corporate\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveCashbackProfileRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q3:RetrieveCashbackProfileRequest | tns:RetrieveCashbackProfileRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveCashbackProfileRequest extends AbstractStructBase
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
     * The IDPartner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $IDPartner = null;

    /**
     * Constructor method for RetrieveCashbackProfileRequest
     *
     * @param string $sourceSystem
     * @param string $signature
     * @param string $iDPartner
     *
     * @uses RetrieveCashbackProfileRequest::setSourceSystem()
     * @uses RetrieveCashbackProfileRequest::setSignature()
     * @uses RetrieveCashbackProfileRequest::setIDPartner()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?string $iDPartner = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setIDPartner($iDPartner);
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
     * @return RetrieveCashbackProfileRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
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
     * @return RetrieveCashbackProfileRequest
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
     * Get IDPartner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIDPartner(): ?string
    {
        return $this->IDPartner ?? null;
    }

    /**
     * Set IDPartner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $iDPartner
     *
     * @return RetrieveCashbackProfileRequest
     */
    public function setIDPartner(?string $iDPartner = null): self
    {
        // validation for constraint: string
        if (!is_null($iDPartner) && !is_string($iDPartner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iDPartner, true), gettype($iDPartner)), __LINE__);
        }
        if (is_null($iDPartner) || (is_array($iDPartner) && empty($iDPartner))) {
            unset($this->IDPartner);
        } else {
            $this->IDPartner = $iDPartner;
        }

        return $this;
    }
}
