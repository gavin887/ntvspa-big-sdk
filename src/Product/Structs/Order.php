<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Product\Arrays\ArrayOfLineItemOrder;
use Product\Arrays\ArrayOfProduct;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Order Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Order
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Order extends AbstractStructBase
{
    /**
     * The Price
     *
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The LineItem
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfLineItemOrder|null
     */
    protected ?ArrayOfLineItemOrder $LineItem = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OrderNumber = null;
    /**
     * The Products
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfProduct|null
     */
    protected ?ArrayOfProduct $Products = null;

    /**
     * Constructor method for Order
     *
     * @param float                                           $price
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfLineItemOrder $lineItem
     * @param string                                          $comment
     * @param string                                          $orderNumber
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProduct       $products
     *
     * @uses Order::setPrice()
     * @uses Order::setLineItem()
     * @uses Order::setComment()
     * @uses Order::setOrderNumber()
     * @uses Order::setProducts()
     */
    public function __construct(?float $price = null, ?ArrayOfLineItemOrder $lineItem = null, ?string $comment = null, ?string $orderNumber = null, ?ArrayOfProduct $products = null)
    {
        $this
            ->setPrice($price)
            ->setLineItem($lineItem)
            ->setComment($comment)
            ->setOrderNumber($orderNumber)
            ->setProducts($products);
    }

    /**
     * Get Price value
     *
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->Price;
    }

    /**
     * Set Price value
     *
     * @param float $price
     *
     * @return Order
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->Price = $price;

        return $this;
    }

    /**
     * Get LineItem value
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfLineItemOrder|null
     */
    public function getLineItem(): ?ArrayOfLineItemOrder
    {
        return $this->LineItem;
    }

    /**
     * Set LineItem value
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfLineItemOrder $lineItem
     *
     * @return Order
     */
    public function setLineItem(?ArrayOfLineItemOrder $lineItem = null): self
    {
        $this->LineItem = $lineItem;

        return $this;
    }

    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->Comment ?? null;
    }

    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $comment
     *
     * @return Order
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
        }

        return $this;
    }

    /**
     * Get OrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return $this->OrderNumber ?? null;
    }

    /**
     * Set OrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $orderNumber
     *
     * @return Order
     */
    public function setOrderNumber(?string $orderNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        if (is_null($orderNumber) || (is_array($orderNumber) && empty($orderNumber))) {
            unset($this->OrderNumber);
        } else {
            $this->OrderNumber = $orderNumber;
        }

        return $this;
    }

    /**
     * Get Products value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfProduct|null
     */
    public function getProducts(): ?ArrayOfProduct
    {
        return $this->Products ?? null;
    }

    /**
     * Set Products value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProduct $products
     *
     * @return Order
     */
    public function setProducts(?ArrayOfProduct $products = null): self
    {
        if (is_null($products) || (is_array($products) && empty($products))) {
            unset($this->Products);
        } else {
            $this->Products = $products;
        }

        return $this;
    }
}
