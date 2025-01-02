<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Travel\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveCityServicesRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q11:RetrieveCityServicesRequest | tns:RetrieveCityServicesRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveCityServicesRequest extends AbstractStructBase
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
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The Province
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Province = null;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Language = null;

    /**
     * Constructor method for RetrieveCityServicesRequest
     *
     * @param string $sourceSystem
     * @param string $signature
     * @param string $province
     * @param string $language
     *
     * @uses RetrieveCityServicesRequest::setSourceSystem()
     * @uses RetrieveCityServicesRequest::setSignature()
     * @uses RetrieveCityServicesRequest::setProvince()
     * @uses RetrieveCityServicesRequest::setLanguage()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?string $province = null, ?string $language = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setProvince($province)
            ->setLanguage($language);
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
     * @return RetrieveCityServicesRequest
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
     * @return RetrieveCityServicesRequest
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
     * Get Province value
     *
     * @return string|null
     */
    public function getProvince(): ?string
    {
        return $this->Province;
    }

    /**
     * Set Province value
     *
     * @param string $province
     *
     * @return RetrieveCityServicesRequest
     */
    public function setProvince(?string $province = null): self
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($province, true), gettype($province)), __LINE__);
        }
        $this->Province = $province;

        return $this;
    }

    /**
     * Get Language value
     *
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }

    /**
     * Set Language value
     *
     * @param string $language
     *
     * @return RetrieveCityServicesRequest
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->Language = $language;

        return $this;
    }
}
