<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\CustomerType;
use Ntvspa\Big\Customer\Enums\OperationType;
use Ntvspa\Big\Customer\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpsertCustomerRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q11:UpsertCustomerRequest | tns:UpsertCustomerRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class UpsertCustomerRequest extends AbstractStructBase
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
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The RequestedCustomerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RequestedCustomerType = null;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var Customer|null
     */
    protected ?\Ntvspa\Big\Customer\Structs\Customer $Customer = null;

    /**
     * Constructor method for UpsertCustomerRequest
     *
     * @param string   $sourceSystem
     * @param string   $operationType
     * @param string   $signature
     * @param string   $requestedCustomerType
     * @param Customer $customer
     *
     * @uses UpsertCustomerRequest::setSourceSystem()
     * @uses UpsertCustomerRequest::setOperationType()
     * @uses UpsertCustomerRequest::setSignature()
     * @uses UpsertCustomerRequest::setRequestedCustomerType()
     * @uses UpsertCustomerRequest::setCustomer()
     */
    public function __construct(?string $sourceSystem = null, ?string $operationType = null, ?string $signature = null, ?string $requestedCustomerType = null, ?\Ntvspa\Big\Customer\Structs\Customer $customer = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setOperationType($operationType)
            ->setSignature($signature)
            ->setRequestedCustomerType($requestedCustomerType)
            ->setCustomer($customer);
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
     * @return UpsertCustomerRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
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
     * @return UpsertCustomerRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\OperationType::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\OperationType::valueIsValid()
     */
    public function setOperationType(?string $operationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\OperationType::valueIsValid($operationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\OperationType', is_array($operationType) ? implode(', ', $operationType) : var_export($operationType, true), implode(', ', OperationType::getValidValues())), __LINE__);
        }
        $this->OperationType = $operationType;

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
     * @return UpsertCustomerRequest
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
     * Get RequestedCustomerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRequestedCustomerType(): ?string
    {
        return $this->RequestedCustomerType ?? null;
    }

    /**
     * Set RequestedCustomerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $requestedCustomerType
     *
     * @return UpsertCustomerRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\CustomerType::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\CustomerType::valueIsValid()
     */
    public function setRequestedCustomerType(?string $requestedCustomerType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\CustomerType::valueIsValid($requestedCustomerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\CustomerType', is_array($requestedCustomerType) ? implode(', ', $requestedCustomerType) : var_export($requestedCustomerType, true), implode(', ', CustomerType::getValidValues())), __LINE__);
        }
        if (is_null($requestedCustomerType) || (is_array($requestedCustomerType) && empty($requestedCustomerType))) {
            unset($this->RequestedCustomerType);
        } else {
            $this->RequestedCustomerType = $requestedCustomerType;
        }

        return $this;
    }

    /**
     * Get Customer value
     *
     * @return Customer|null
     */
    public function getCustomer(): ?\Ntvspa\Big\Customer\Structs\Customer
    {
        return $this->Customer;
    }

    /**
     * Set Customer value
     *
     * @param Customer $customer
     *
     * @return UpsertCustomerRequest
     */
    public function setCustomer(?\Ntvspa\Big\Customer\Structs\Customer $customer = null): self
    {
        $this->Customer = $customer;

        return $this;
    }
}
