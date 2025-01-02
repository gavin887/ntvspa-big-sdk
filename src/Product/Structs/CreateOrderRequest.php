<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\SourceSystem;
use Product\Arrays\ArrayOfOrder;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateOrderRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q3:CreateOrderRequest | tns:CreateOrderRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CreateOrderRequest extends AbstractStructBase
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
     * The Customer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CustomerOrder|null
     */
    protected ?\Ntvspa\Big\Product\Structs\CustomerOrder $Customer = null;
    /**
     * The Buyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BuyerHolderPartner|null
     */
    protected ?\Ntvspa\Big\Product\Structs\BuyerHolderPartner $Buyer = null;
    /**
     * The Holder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BuyerHolderPartner|null
     */
    protected ?\Ntvspa\Big\Product\Structs\BuyerHolderPartner $Holder = null;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfOrder|null
     */
    protected ?ArrayOfOrder $Order = null;

    /**
     * Constructor method for CreateOrderRequest
     *
     * @param string                                  $sourceSystem
     * @param string                                  $signature
     * @param CustomerOrder                           $customer
     * @param BuyerHolderPartner                      $buyer
     * @param BuyerHolderPartner                      $holder
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfOrder $order
     *
     * @uses CreateOrderRequest::setSourceSystem()
     * @uses CreateOrderRequest::setSignature()
     * @uses CreateOrderRequest::setCustomer()
     * @uses CreateOrderRequest::setBuyer()
     * @uses CreateOrderRequest::setHolder()
     * @uses CreateOrderRequest::setOrder()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Product\Structs\CustomerOrder $customer = null, ?\Ntvspa\Big\Product\Structs\BuyerHolderPartner $buyer = null, ?\Ntvspa\Big\Product\Structs\BuyerHolderPartner $holder = null, ?ArrayOfOrder $order = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setCustomer($customer)
            ->setBuyer($buyer)
            ->setHolder($holder)
            ->setOrder($order);
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
     * @return CreateOrderRequest
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
     * @return CreateOrderRequest
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
     * Get Customer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CustomerOrder|null
     */
    public function getCustomer(): ?\Ntvspa\Big\Product\Structs\CustomerOrder
    {
        return $this->Customer ?? null;
    }

    /**
     * Set Customer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CustomerOrder $customer
     *
     * @return CreateOrderRequest
     */
    public function setCustomer(?\Ntvspa\Big\Product\Structs\CustomerOrder $customer = null): self
    {
        if (is_null($customer) || (is_array($customer) && empty($customer))) {
            unset($this->Customer);
        } else {
            $this->Customer = $customer;
        }

        return $this;
    }

    /**
     * Get Buyer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BuyerHolderPartner|null
     */
    public function getBuyer(): ?\Ntvspa\Big\Product\Structs\BuyerHolderPartner
    {
        return $this->Buyer ?? null;
    }

    /**
     * Set Buyer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BuyerHolderPartner $buyer
     *
     * @return CreateOrderRequest
     */
    public function setBuyer(?\Ntvspa\Big\Product\Structs\BuyerHolderPartner $buyer = null): self
    {
        if (is_null($buyer) || (is_array($buyer) && empty($buyer))) {
            unset($this->Buyer);
        } else {
            $this->Buyer = $buyer;
        }

        return $this;
    }

    /**
     * Get Holder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BuyerHolderPartner|null
     */
    public function getHolder(): ?\Ntvspa\Big\Product\Structs\BuyerHolderPartner
    {
        return $this->Holder ?? null;
    }

    /**
     * Set Holder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BuyerHolderPartner $holder
     *
     * @return CreateOrderRequest
     */
    public function setHolder(?\Ntvspa\Big\Product\Structs\BuyerHolderPartner $holder = null): self
    {
        if (is_null($holder) || (is_array($holder) && empty($holder))) {
            unset($this->Holder);
        } else {
            $this->Holder = $holder;
        }

        return $this;
    }

    /**
     * Get Order value
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfOrder|null
     */
    public function getOrder(): ?ArrayOfOrder
    {
        return $this->Order;
    }

    /**
     * Set Order value
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfOrder $order
     *
     * @return CreateOrderRequest
     */
    public function setOrder(?ArrayOfOrder $order = null): self
    {
        $this->Order = $order;

        return $this;
    }
}
