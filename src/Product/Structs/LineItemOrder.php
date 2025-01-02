<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\ProductType;
use Product\Arrays\ArrayOfLineItemOrder;
use Product\Arrays\ArrayOfProductAttributeOrder;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LineItemOrder Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LineItemOrder
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class LineItemOrder extends AbstractStructBase
{
    /**
     * The Price
     *
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The Vat
     *
     * @var float|null
     */
    protected ?float $Vat = null;
    /**
     * The Quantity
     *
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The ActivationDate
     *
     * @var string|null
     */
    protected ?string $ActivationDate = null;
    /**
     * The Type
     *
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The ProductId
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductId = null;
    /**
     * The Attributes
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfProductAttributeOrder|null
     */
    protected ?ArrayOfProductAttributeOrder $Attributes = null;
    /**
     * The LineItem
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfLineItemOrder|null
     */
    protected ?ArrayOfLineItemOrder $LineItem = null;

    /**
     * Constructor method for LineItemOrder
     *
     * @param float                                                   $price
     * @param float                                                   $vat
     * @param int                                                     $quantity
     * @param string                                                  $activationDate
     * @param string                                                  $type
     * @param string                                                  $name
     * @param string                                                  $productId
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProductAttributeOrder $attributes
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfLineItemOrder         $lineItem
     *
     * @uses LineItemOrder::setPrice()
     * @uses LineItemOrder::setVat()
     * @uses LineItemOrder::setQuantity()
     * @uses LineItemOrder::setActivationDate()
     * @uses LineItemOrder::setType()
     * @uses LineItemOrder::setName()
     * @uses LineItemOrder::setProductId()
     * @uses LineItemOrder::setAttributes()
     * @uses LineItemOrder::setLineItem()
     */
    public function __construct(?float $price = null, ?float $vat = null, ?int $quantity = null, ?string $activationDate = null, ?string $type = null, ?string $name = null, ?string $productId = null, ?ArrayOfProductAttributeOrder $attributes = null, ?ArrayOfLineItemOrder $lineItem = null)
    {
        $this
            ->setPrice($price)
            ->setVat($vat)
            ->setQuantity($quantity)
            ->setActivationDate($activationDate)
            ->setType($type)
            ->setName($name)
            ->setProductId($productId)
            ->setAttributes($attributes)
            ->setLineItem($lineItem);
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
     * @return LineItemOrder
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
     * Get Vat value
     *
     * @return float|null
     */
    public function getVat(): ?float
    {
        return $this->Vat;
    }

    /**
     * Set Vat value
     *
     * @param float $vat
     *
     * @return LineItemOrder
     */
    public function setVat(?float $vat = null): self
    {
        // validation for constraint: float
        if (!is_null($vat) && !(is_float($vat) || is_numeric($vat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat, true), gettype($vat)), __LINE__);
        }
        $this->Vat = $vat;

        return $this;
    }

    /**
     * Get Quantity value
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }

    /**
     * Set Quantity value
     *
     * @param int $quantity
     *
     * @return LineItemOrder
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * Get ActivationDate value
     *
     * @return string|null
     */
    public function getActivationDate(): ?string
    {
        return $this->ActivationDate;
    }

    /**
     * Set ActivationDate value
     *
     * @param string $activationDate
     *
     * @return LineItemOrder
     */
    public function setActivationDate(?string $activationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($activationDate) && !is_string($activationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activationDate, true), gettype($activationDate)), __LINE__);
        }
        $this->ActivationDate = $activationDate;

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
     * @return LineItemOrder
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\ProductType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\ProductType::valueIsValid()
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\ProductType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\ProductType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', ProductType::getValidValues())), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Name value
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * Set Name value
     *
     * @param string $name
     *
     * @return LineItemOrder
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;

        return $this;
    }

    /**
     * Get ProductId value
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->ProductId;
    }

    /**
     * Set ProductId value
     *
     * @param string $productId
     *
     * @return LineItemOrder
     */
    public function setProductId(?string $productId = null): self
    {
        // validation for constraint: string
        if (!is_null($productId) && !is_string($productId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productId, true), gettype($productId)), __LINE__);
        }
        $this->ProductId = $productId;

        return $this;
    }

    /**
     * Get Attributes value
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfProductAttributeOrder|null
     */
    public function getAttributes(): ?ArrayOfProductAttributeOrder
    {
        return $this->Attributes;
    }

    /**
     * Set Attributes value
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProductAttributeOrder $attributes
     *
     * @return LineItemOrder
     */
    public function setAttributes(?ArrayOfProductAttributeOrder $attributes = null): self
    {
        $this->Attributes = $attributes;

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
     * @return LineItemOrder
     */
    public function setLineItem(?ArrayOfLineItemOrder $lineItem = null): self
    {
        $this->LineItem = $lineItem;

        return $this;
    }
}
