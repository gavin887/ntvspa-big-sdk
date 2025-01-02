<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\ProductType;
use Product\Arrays\ArrayOfCatalogEligibilityCondition;
use Product\Arrays\ArrayOfCatalogProductAttribute;
use Product\Arrays\ArrayOfCatalogProductChild;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CatalogProduct Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CatalogProduct
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CatalogProduct extends AbstractStructBase
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
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The Vat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Vat = null;
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
     * The CatalogCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CatalogCategory = null;
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
     * The ProductChilds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProductChild|null
     */
    protected ?ArrayOfCatalogProductChild $ProductChilds = null;
    /**
     * The Attributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProductAttribute|null
     */
    protected ?ArrayOfCatalogProductAttribute $Attributes = null;
    /**
     * The EligibilityConditions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfCatalogEligibilityCondition|null
     */
    protected ?ArrayOfCatalogEligibilityCondition $EligibilityConditions = null;

    /**
     * Constructor method for CatalogProduct
     *
     * @param string                                                        $type
     * @param float                                                         $price
     * @param float                                                         $vat
     * @param string                                                        $productId
     * @param string                                                        $catalogCategory
     * @param string                                                        $name
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProductChild         $productChilds
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProductAttribute     $attributes
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfCatalogEligibilityCondition $eligibilityConditions
     *
     * @uses CatalogProduct::setType()
     * @uses CatalogProduct::setPrice()
     * @uses CatalogProduct::setVat()
     * @uses CatalogProduct::setProductId()
     * @uses CatalogProduct::setCatalogCategory()
     * @uses CatalogProduct::setName()
     * @uses CatalogProduct::setProductChilds()
     * @uses CatalogProduct::setAttributes()
     * @uses CatalogProduct::setEligibilityConditions()
     */
    public function __construct(?string $type = null, ?float $price = null, ?float $vat = null, ?string $productId = null, ?string $catalogCategory = null, ?string $name = null, ?ArrayOfCatalogProductChild $productChilds = null, ?ArrayOfCatalogProductAttribute $attributes = null, ?ArrayOfCatalogEligibilityCondition $eligibilityConditions = null)
    {
        $this
            ->setType($type)
            ->setPrice($price)
            ->setVat($vat)
            ->setProductId($productId)
            ->setCatalogCategory($catalogCategory)
            ->setName($name)
            ->setProductChilds($productChilds)
            ->setAttributes($attributes)
            ->setEligibilityConditions($eligibilityConditions);
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
     * @return CatalogProduct
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
     * @return CatalogProduct
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
     * @return CatalogProduct
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
     * @return CatalogProduct
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
     * Get CatalogCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCatalogCategory(): ?string
    {
        return $this->CatalogCategory ?? null;
    }

    /**
     * Set CatalogCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $catalogCategory
     *
     * @return CatalogProduct
     */
    public function setCatalogCategory(?string $catalogCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($catalogCategory) && !is_string($catalogCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catalogCategory, true), gettype($catalogCategory)), __LINE__);
        }
        if (is_null($catalogCategory) || (is_array($catalogCategory) && empty($catalogCategory))) {
            unset($this->CatalogCategory);
        } else {
            $this->CatalogCategory = $catalogCategory;
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
     * @return CatalogProduct
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
     * Get ProductChilds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProductChild|null
     */
    public function getProductChilds(): ?ArrayOfCatalogProductChild
    {
        return $this->ProductChilds ?? null;
    }

    /**
     * Set ProductChilds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProductChild $productChilds
     *
     * @return CatalogProduct
     */
    public function setProductChilds(?ArrayOfCatalogProductChild $productChilds = null): self
    {
        if (is_null($productChilds) || (is_array($productChilds) && empty($productChilds))) {
            unset($this->ProductChilds);
        } else {
            $this->ProductChilds = $productChilds;
        }

        return $this;
    }

    /**
     * Get Attributes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProductAttribute|null
     */
    public function getAttributes(): ?ArrayOfCatalogProductAttribute
    {
        return $this->Attributes ?? null;
    }

    /**
     * Set Attributes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProductAttribute $attributes
     *
     * @return CatalogProduct
     */
    public function setAttributes(?ArrayOfCatalogProductAttribute $attributes = null): self
    {
        if (is_null($attributes) || (is_array($attributes) && empty($attributes))) {
            unset($this->Attributes);
        } else {
            $this->Attributes = $attributes;
        }

        return $this;
    }

    /**
     * Get EligibilityConditions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfCatalogEligibilityCondition|null
     */
    public function getEligibilityConditions(): ?ArrayOfCatalogEligibilityCondition
    {
        return $this->EligibilityConditions ?? null;
    }

    /**
     * Set EligibilityConditions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfCatalogEligibilityCondition $eligibilityConditions
     *
     * @return CatalogProduct
     */
    public function setEligibilityConditions(?ArrayOfCatalogEligibilityCondition $eligibilityConditions = null): self
    {
        if (is_null($eligibilityConditions) || (is_array($eligibilityConditions) && empty($eligibilityConditions))) {
            unset($this->EligibilityConditions);
        } else {
            $this->EligibilityConditions = $eligibilityConditions;
        }

        return $this;
    }
}
