<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\CarnetStatus;
use Ntvspa\Big\Product\Enums\CarnetType;
use Ntvspa\Big\Product\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveAssetsRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q11:RetrieveAssetsRequest | tns:RetrieveAssetsRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveAssetsRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
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
     * The CustomerAsset
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CustomerHolder|null
     */
    protected ?\Ntvspa\Big\Product\Structs\CustomerHolder $CustomerAsset = null;

    /**
     * Constructor method for RetrieveAssetsRequest
     *
     * @param string         $sourceSystem
     * @param string         $type
     * @param string         $status
     * @param string         $signature
     * @param string         $customerId
     * @param CustomerHolder $customerAsset
     *
     * @uses RetrieveAssetsRequest::setSourceSystem()
     * @uses RetrieveAssetsRequest::setType()
     * @uses RetrieveAssetsRequest::setStatus()
     * @uses RetrieveAssetsRequest::setSignature()
     * @uses RetrieveAssetsRequest::setCustomerId()
     * @uses RetrieveAssetsRequest::setCustomerAsset()
     */
    public function __construct(?string $sourceSystem = null, ?string $type = null, ?string $status = null, ?string $signature = null, ?string $customerId = null, ?\Ntvspa\Big\Product\Structs\CustomerHolder $customerAsset = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setType($type)
            ->setStatus($status)
            ->setSignature($signature)
            ->setCustomerId($customerId)
            ->setCustomerAsset($customerAsset);
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
     * @return RetrieveAssetsRequest
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
     * Get Type value
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * Set Type value
     *
     * @param string $type
     *
     * @return RetrieveAssetsRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\CarnetType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\CarnetType::valueIsValid()
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\CarnetType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\CarnetType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', CarnetType::getValidValues())), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Status value
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * Set Status value
     *
     * @param string $status
     *
     * @return RetrieveAssetsRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\CarnetStatus::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\CarnetStatus::valueIsValid()
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\CarnetStatus::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\CarnetStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', CarnetStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;

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
     * @return RetrieveAssetsRequest
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
     * @return RetrieveAssetsRequest
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

    /**
     * Get CustomerAsset value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CustomerHolder|null
     */
    public function getCustomerAsset(): ?\Ntvspa\Big\Product\Structs\CustomerHolder
    {
        return $this->CustomerAsset ?? null;
    }

    /**
     * Set CustomerAsset value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CustomerHolder $customerAsset
     *
     * @return RetrieveAssetsRequest
     */
    public function setCustomerAsset(?\Ntvspa\Big\Product\Structs\CustomerHolder $customerAsset = null): self
    {
        if (is_null($customerAsset) || (is_array($customerAsset) && empty($customerAsset))) {
            unset($this->CustomerAsset);
        } else {
            $this->CustomerAsset = $customerAsset;
        }

        return $this;
    }
}
