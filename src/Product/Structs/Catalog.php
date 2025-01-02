<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Product\Arrays\ArrayOfCatalogProduct;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Catalog Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Catalog
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Catalog extends AbstractStructBase
{
    /**
     * The CatalogName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CatalogName = null;
    /**
     * The CategoryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CategoryName = null;
    /**
     * The Products
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProduct|null
     */
    protected ?ArrayOfCatalogProduct $Products = null;

    /**
     * Constructor method for Catalog
     *
     * @param string                                           $catalogName
     * @param string                                           $categoryName
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProduct $products
     *
     * @uses Catalog::setCatalogName()
     * @uses Catalog::setCategoryName()
     * @uses Catalog::setProducts()
     */
    public function __construct(?string $catalogName = null, ?string $categoryName = null, ?ArrayOfCatalogProduct $products = null)
    {
        $this
            ->setCatalogName($catalogName)
            ->setCategoryName($categoryName)
            ->setProducts($products);
    }

    /**
     * Get CatalogName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCatalogName(): ?string
    {
        return $this->CatalogName ?? null;
    }

    /**
     * Set CatalogName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $catalogName
     *
     * @return Catalog
     */
    public function setCatalogName(?string $catalogName = null): self
    {
        // validation for constraint: string
        if (!is_null($catalogName) && !is_string($catalogName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catalogName, true), gettype($catalogName)), __LINE__);
        }
        if (is_null($catalogName) || (is_array($catalogName) && empty($catalogName))) {
            unset($this->CatalogName);
        } else {
            $this->CatalogName = $catalogName;
        }

        return $this;
    }

    /**
     * Get CategoryName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCategoryName(): ?string
    {
        return $this->CategoryName ?? null;
    }

    /**
     * Set CategoryName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $categoryName
     *
     * @return Catalog
     */
    public function setCategoryName(?string $categoryName = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryName, true), gettype($categoryName)), __LINE__);
        }
        if (is_null($categoryName) || (is_array($categoryName) && empty($categoryName))) {
            unset($this->CategoryName);
        } else {
            $this->CategoryName = $categoryName;
        }

        return $this;
    }

    /**
     * Get Products value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProduct|null
     */
    public function getProducts(): ?ArrayOfCatalogProduct
    {
        return $this->Products ?? null;
    }

    /**
     * Set Products value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfCatalogProduct $products
     *
     * @return Catalog
     */
    public function setProducts(?ArrayOfCatalogProduct $products = null): self
    {
        if (is_null($products) || (is_array($products) && empty($products))) {
            unset($this->Products);
        } else {
            $this->Products = $products;
        }

        return $this;
    }
}
