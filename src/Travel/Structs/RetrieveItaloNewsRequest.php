<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Travel\Enums\Notice_RequestTypeCommunicationType;
use Ntvspa\Big\Travel\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveItaloNewsRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q7:RetrieveItaloNewsRequest | tns:RetrieveItaloNewsRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveItaloNewsRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $CreationDate = null;
    /**
     * The CommunicationType
     *
     * @var string|null
     */
    protected ?string $CommunicationType = null;
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
     * The DeviceId
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DeviceId = null;
    /**
     * The RegistrationId
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RegistrationId = null;
    /**
     * The CustomerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerId = null;

    /**
     * Constructor method for RetrieveItaloNewsRequest
     *
     * @param string $sourceSystem
     * @param string $creationDate
     * @param string $communicationType
     * @param string $signature
     * @param string $deviceId
     * @param string $registrationId
     * @param string $customerId
     *
     * @uses RetrieveItaloNewsRequest::setSourceSystem()
     * @uses RetrieveItaloNewsRequest::setCreationDate()
     * @uses RetrieveItaloNewsRequest::setCommunicationType()
     * @uses RetrieveItaloNewsRequest::setSignature()
     * @uses RetrieveItaloNewsRequest::setDeviceId()
     * @uses RetrieveItaloNewsRequest::setRegistrationId()
     * @uses RetrieveItaloNewsRequest::setCustomerId()
     */
    public function __construct(?string $sourceSystem = null, ?string $creationDate = null, ?string $communicationType = null, ?string $signature = null, ?string $deviceId = null, ?string $registrationId = null, ?string $customerId = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setCreationDate($creationDate)
            ->setCommunicationType($communicationType)
            ->setSignature($signature)
            ->setDeviceId($deviceId)
            ->setRegistrationId($registrationId)
            ->setCustomerId($customerId);
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
     * @return RetrieveItaloNewsRequest
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
     * Get CreationDate value
     *
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->CreationDate;
    }

    /**
     * Set CreationDate value
     *
     * @param string $creationDate
     *
     * @return RetrieveItaloNewsRequest
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;

        return $this;
    }

    /**
     * Get CommunicationType value
     *
     * @return string|null
     */
    public function getCommunicationType(): ?string
    {
        return $this->CommunicationType;
    }

    /**
     * Set CommunicationType value
     *
     * @param string $communicationType
     *
     * @return RetrieveItaloNewsRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Travel\Enums\Notice_RequestTypeCommunicationType::getValidValues()
     * @uses \Ntvspa\Big\Travel\Enums\Notice_RequestTypeCommunicationType::valueIsValid()
     */
    public function setCommunicationType(?string $communicationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Travel\Enums\Notice_RequestTypeCommunicationType::valueIsValid($communicationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Travel\Enums\Notice_RequestTypeCommunicationType', is_array($communicationType) ? implode(', ', $communicationType) : var_export($communicationType, true), implode(', ', Notice_RequestTypeCommunicationType::getValidValues())), __LINE__);
        }
        $this->CommunicationType = $communicationType;

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
     * @return RetrieveItaloNewsRequest
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
     * Get DeviceId value
     *
     * @return string|null
     */
    public function getDeviceId(): ?string
    {
        return $this->DeviceId;
    }

    /**
     * Set DeviceId value
     *
     * @param string $deviceId
     *
     * @return RetrieveItaloNewsRequest
     */
    public function setDeviceId(?string $deviceId = null): self
    {
        // validation for constraint: string
        if (!is_null($deviceId) && !is_string($deviceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deviceId, true), gettype($deviceId)), __LINE__);
        }
        $this->DeviceId = $deviceId;

        return $this;
    }

    /**
     * Get RegistrationId value
     *
     * @return string|null
     */
    public function getRegistrationId(): ?string
    {
        return $this->RegistrationId;
    }

    /**
     * Set RegistrationId value
     *
     * @param string $registrationId
     *
     * @return RetrieveItaloNewsRequest
     */
    public function setRegistrationId(?string $registrationId = null): self
    {
        // validation for constraint: string
        if (!is_null($registrationId) && !is_string($registrationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationId, true), gettype($registrationId)), __LINE__);
        }
        $this->RegistrationId = $registrationId;

        return $this;
    }

    /**
     * Get CustomerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->CustomerId ?? null;
    }

    /**
     * Set CustomerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerId
     *
     * @return RetrieveItaloNewsRequest
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        if (is_null($customerId) || (is_array($customerId) && empty($customerId))) {
            unset($this->CustomerId);
        } else {
            $this->CustomerId = $customerId;
        }

        return $this;
    }
}
