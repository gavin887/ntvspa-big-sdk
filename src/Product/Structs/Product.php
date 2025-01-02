<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\ProductType;
use Product\Arrays\ArrayOfBlackDays;
use Product\Arrays\ArrayOfProductAttribute;
use Product\Arrays\ArrayOfProductItem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Product Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Product
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Product extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The ProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductId = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Attributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute|null
     */
    protected ?ArrayOfProductAttribute $Attributes = null;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductID = null;
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductName = null;
    /**
     * The ProductDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductDescription = null;
    /**
     * The ProductAttributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute|null
     */
    protected ?ArrayOfProductAttribute $ProductAttributes = null;
    /**
     * The BlackDays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfBlackDays|null
     */
    protected ?ArrayOfBlackDays $BlackDays = null;
    /**
     * The ProductItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfProductItem|null
     */
    protected ?ArrayOfProductItem $ProductItem = null;

    /**
     * Constructor method for Product
     *
     * @param string                                             $type
     * @param string                                             $productId
     * @param string                                             $name
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute $attributes
     * @param string                                             $productID
     * @param string                                             $productName
     * @param string                                             $productDescription
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute $productAttributes
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfBlackDays        $blackDays
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProductItem      $productItem
     *
     * @uses Product::setType()
     * @uses Product::setProductId()
     * @uses Product::setName()
     * @uses Product::setAttributes()
     * @uses Product::setProductID_1()
     * @uses Product::setProductName()
     * @uses Product::setProductDescription()
     * @uses Product::setProductAttributes()
     * @uses Product::setBlackDays()
     * @uses Product::setProductItem()
     */
    public function __construct(?string $type = null, ?string $productId = null, ?string $name = null, ?ArrayOfProductAttribute $attributes = null, ?string $productID_1 = null, ?string $productName = null, ?string $productDescription = null, ?ArrayOfProductAttribute $productAttributes = null, ?ArrayOfBlackDays $blackDays = null, ?ArrayOfProductItem $productItem = null)
    {
        $this
            ->setType($type)
            ->setProductId($productId)
            ->setName($name)
            ->setAttributes($attributes)
            ->setProductID_1($productID_1)
            ->setProductName($productName)
            ->setProductDescription($productDescription)
            ->setProductAttributes($productAttributes)
            ->setBlackDays($blackDays)
            ->setProductItem($productItem);
    }

    /**
     * Set ProductID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productID
     *
     * @return Product
     */
    public function setProductID_1(?string $productID_1 = null): self
    {
        // validation for constraint: string
        if (!is_null($productID_1) && !is_string($productID_1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productID_1, true), gettype($productID_1)), __LINE__);
        }
        if (is_null($productID_1) || (is_array($productID_1) && empty($productID_1))) {
            unset($this->ProductID);
        } else {
            $this->ProductID = $productID_1;
        }

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
     * @return Product
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
     * Get ProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->ProductId ?? null;
    }

    /**
     * Set ProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productId
     *
     * @return Product
     */
    public function setProductId(?string $productId = null): self
    {
        // validation for constraint: string
        if (!is_null($productId) && !is_string($productId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productId, true), gettype($productId)), __LINE__);
        }
        if (is_null($productId) || (is_array($productId) && empty($productId))) {
            unset($this->ProductId);
        } else {
            $this->ProductId = $productId;
        }

        return $this;
    }

    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }

        return $this;
    }

    /**
     * Get Attributes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute|null
     */
    public function getAttributes(): ?ArrayOfProductAttribute
    {
        return $this->Attributes ?? null;
    }

    /**
     * Set Attributes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute $attributes
     *
     * @return Product
     */
    public function setAttributes(?ArrayOfProductAttribute $attributes = null): self
    {
        if (is_null($attributes) || (is_array($attributes) && empty($attributes))) {
            unset($this->Attributes);
        } else {
            $this->Attributes = $attributes;
        }

        return $this;
    }

    /**
     * Get ProductID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductID_1(): ?string
    {
        return $this->ProductID ?? null;
    }

    /**
     * Get ProductName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->ProductName ?? null;
    }

    /**
     * Set ProductName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productName
     *
     * @return Product
     */
    public function setProductName(?string $productName = null): self
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productName, true), gettype($productName)), __LINE__);
        }
        if (is_null($productName) || (is_array($productName) && empty($productName))) {
            unset($this->ProductName);
        } else {
            $this->ProductName = $productName;
        }

        return $this;
    }

    /**
     * Get ProductDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductDescription(): ?string
    {
        return $this->ProductDescription ?? null;
    }

    /**
     * Set ProductDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productDescription
     *
     * @return Product
     */
    public function setProductDescription(?string $productDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($productDescription) && !is_string($productDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productDescription, true), gettype($productDescription)), __LINE__);
        }
        if (is_null($productDescription) || (is_array($productDescription) && empty($productDescription))) {
            unset($this->ProductDescription);
        } else {
            $this->ProductDescription = $productDescription;
        }

        return $this;
    }

    /**
     * Get ProductAttributes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute|null
     */
    public function getProductAttributes(): ?ArrayOfProductAttribute
    {
        return $this->ProductAttributes ?? null;
    }

    /**
     * Set ProductAttributes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute $productAttributes
     *
     * @return Product
     */
    public function setProductAttributes(?ArrayOfProductAttribute $productAttributes = null): self
    {
        if (is_null($productAttributes) || (is_array($productAttributes) && empty($productAttributes))) {
            unset($this->ProductAttributes);
        } else {
            $this->ProductAttributes = $productAttributes;
        }

        return $this;
    }

    /**
     * Get BlackDays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfBlackDays|null
     */
    public function getBlackDays(): ?ArrayOfBlackDays
    {
        return $this->BlackDays ?? null;
    }

    /**
     * Set BlackDays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfBlackDays $blackDays
     *
     * @return Product
     */
    public function setBlackDays(?ArrayOfBlackDays $blackDays = null): self
    {
        if (is_null($blackDays) || (is_array($blackDays) && empty($blackDays))) {
            unset($this->BlackDays);
        } else {
            $this->BlackDays = $blackDays;
        }

        return $this;
    }

    /**
     * Get ProductItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfProductItem|null
     */
    public function getProductItem(): ?ArrayOfProductItem
    {
        return $this->ProductItem ?? null;
    }

    /**
     * Set ProductItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProductItem $productItem
     *
     * @return Product
     */
    public function setProductItem(?ArrayOfProductItem $productItem = null): self
    {
        if (is_null($productItem) || (is_array($productItem) && empty($productItem))) {
            unset($this->ProductItem);
        } else {
            $this->ProductItem = $productItem;
        }

        return $this;
    }
}
