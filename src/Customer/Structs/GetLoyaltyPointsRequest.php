<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLoyaltyPointsRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetLoyaltyPointsRequest | q1:GetLoyaltyPointsRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetLoyaltyPointsRequest extends AbstractStructBase
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
     * The CustomerId
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerId = null;
    /**
     * The ShowTransaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $ShowTransaction = null;
    /**
     * The LoyaltyTransactionFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var LoyaltyTransactionFilter|null
     */
    protected ?\Ntvspa\Big\Customer\Structs\LoyaltyTransactionFilter $LoyaltyTransactionFilter = null;

    /**
     * Constructor method for GetLoyaltyPointsRequest
     *
     * @param string                   $sourceSystem
     * @param string                   $signature
     * @param string                   $customerId
     * @param bool                     $showTransaction
     * @param LoyaltyTransactionFilter $loyaltyTransactionFilter
     *
     * @uses GetLoyaltyPointsRequest::setSourceSystem()
     * @uses GetLoyaltyPointsRequest::setSignature()
     * @uses GetLoyaltyPointsRequest::setCustomerId()
     * @uses GetLoyaltyPointsRequest::setShowTransaction()
     * @uses GetLoyaltyPointsRequest::setLoyaltyTransactionFilter()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?string $customerId = null, ?bool $showTransaction = null, ?\Ntvspa\Big\Customer\Structs\LoyaltyTransactionFilter $loyaltyTransactionFilter = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setCustomerId($customerId)
            ->setShowTransaction($showTransaction)
            ->setLoyaltyTransactionFilter($loyaltyTransactionFilter);
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
     * @return GetLoyaltyPointsRequest
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
     * @return GetLoyaltyPointsRequest
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
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->CustomerId;
    }

    /**
     * Set CustomerId value
     *
     * @param string $customerId
     *
     * @return GetLoyaltyPointsRequest
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->CustomerId = $customerId;

        return $this;
    }

    /**
     * Get ShowTransaction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getShowTransaction(): ?bool
    {
        return $this->ShowTransaction ?? null;
    }

    /**
     * Set ShowTransaction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $showTransaction
     *
     * @return GetLoyaltyPointsRequest
     */
    public function setShowTransaction(?bool $showTransaction = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showTransaction) && !is_bool($showTransaction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showTransaction, true), gettype($showTransaction)), __LINE__);
        }
        if (is_null($showTransaction) || (is_array($showTransaction) && empty($showTransaction))) {
            unset($this->ShowTransaction);
        } else {
            $this->ShowTransaction = $showTransaction;
        }

        return $this;
    }

    /**
     * Get LoyaltyTransactionFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return LoyaltyTransactionFilter|null
     */
    public function getLoyaltyTransactionFilter(): ?\Ntvspa\Big\Customer\Structs\LoyaltyTransactionFilter
    {
        return $this->LoyaltyTransactionFilter ?? null;
    }

    /**
     * Set LoyaltyTransactionFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param LoyaltyTransactionFilter $loyaltyTransactionFilter
     *
     * @return GetLoyaltyPointsRequest
     */
    public function setLoyaltyTransactionFilter(?\Ntvspa\Big\Customer\Structs\LoyaltyTransactionFilter $loyaltyTransactionFilter = null): self
    {
        if (is_null($loyaltyTransactionFilter) || (is_array($loyaltyTransactionFilter) && empty($loyaltyTransactionFilter))) {
            unset($this->LoyaltyTransactionFilter);
        } else {
            $this->LoyaltyTransactionFilter = $loyaltyTransactionFilter;
        }

        return $this;
    }
}
