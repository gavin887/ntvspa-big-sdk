<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Corporate\Enums\OperationType;
use Ntvspa\Big\Corporate\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpsertAgencyProfileRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q5:UpsertAgencyProfileRequest | tns:UpsertAgencyProfileRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class UpsertAgencyProfileRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The OperationType
     *
     * @var string|null
     */
    protected ?string $OperationType = null;
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
     * The CompanyPersonalData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CorporateInfo|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\CorporateInfo $CompanyPersonalData = null;
    /**
     * The ContactPerson
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Contact|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\Contact $ContactPerson = null;

    /**
     * Constructor method for UpsertAgencyProfileRequest
     *
     * @param string        $sourceSystem
     * @param string        $operationType
     * @param string        $signature
     * @param CorporateInfo $companyPersonalData
     * @param Contact       $contactPerson
     *
     * @uses UpsertAgencyProfileRequest::setSourceSystem()
     * @uses UpsertAgencyProfileRequest::setOperationType()
     * @uses UpsertAgencyProfileRequest::setSignature()
     * @uses UpsertAgencyProfileRequest::setCompanyPersonalData()
     * @uses UpsertAgencyProfileRequest::setContactPerson()
     */
    public function __construct(?string $sourceSystem = null, ?string $operationType = null, ?string $signature = null, ?\Ntvspa\Big\Corporate\Structs\CorporateInfo $companyPersonalData = null, ?\Ntvspa\Big\Corporate\Structs\Contact $contactPerson = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setOperationType($operationType)
            ->setSignature($signature)
            ->setCompanyPersonalData($companyPersonalData)
            ->setContactPerson($contactPerson);
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
     * @return UpsertAgencyProfileRequest
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
     * Get OperationType value
     *
     * @return string|null
     */
    public function getOperationType(): ?string
    {
        return $this->OperationType;
    }

    /**
     * Set OperationType value
     *
     * @param string $operationType
     *
     * @return UpsertAgencyProfileRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\OperationType::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\OperationType::valueIsValid()
     */
    public function setOperationType(?string $operationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\OperationType::valueIsValid($operationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\OperationType', is_array($operationType) ? implode(', ', $operationType) : var_export($operationType, true), implode(', ', OperationType::getValidValues())), __LINE__);
        }
        $this->OperationType = $operationType;

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
     * @return UpsertAgencyProfileRequest
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
     * Get CompanyPersonalData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CorporateInfo|null
     */
    public function getCompanyPersonalData(): ?\Ntvspa\Big\Corporate\Structs\CorporateInfo
    {
        return $this->CompanyPersonalData ?? null;
    }

    /**
     * Set CompanyPersonalData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CorporateInfo $companyPersonalData
     *
     * @return UpsertAgencyProfileRequest
     */
    public function setCompanyPersonalData(?\Ntvspa\Big\Corporate\Structs\CorporateInfo $companyPersonalData = null): self
    {
        if (is_null($companyPersonalData) || (is_array($companyPersonalData) && empty($companyPersonalData))) {
            unset($this->CompanyPersonalData);
        } else {
            $this->CompanyPersonalData = $companyPersonalData;
        }

        return $this;
    }

    /**
     * Get ContactPerson value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Contact|null
     */
    public function getContactPerson(): ?\Ntvspa\Big\Corporate\Structs\Contact
    {
        return $this->ContactPerson ?? null;
    }

    /**
     * Set ContactPerson value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Contact $contactPerson
     *
     * @return UpsertAgencyProfileRequest
     */
    public function setContactPerson(?\Ntvspa\Big\Corporate\Structs\Contact $contactPerson = null): self
    {
        if (is_null($contactPerson) || (is_array($contactPerson) && empty($contactPerson))) {
            unset($this->ContactPerson);
        } else {
            $this->ContactPerson = $contactPerson;
        }

        return $this;
    }
}
