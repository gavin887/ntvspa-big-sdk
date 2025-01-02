<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\CatalogProduct;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCatalogProduct Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCatalogProduct
 *
 * @subpackage Arrays
 */
class ArrayOfCatalogProduct extends AbstractStructArrayBase
{
    /**
     * The CatalogProduct
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CatalogProduct[]|null
     */
    protected ?array $CatalogProduct = null;

    /**
     * Constructor method for ArrayOfCatalogProduct
     *
     * @param CatalogProduct[] $catalogProduct
     *
     * @uses ArrayOfCatalogProduct::setCatalogProduct()
     */
    public function __construct(?array $catalogProduct = null)
    {
        $this
            ->setCatalogProduct($catalogProduct);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCatalogProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCatalogProduct method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCatalogProductForArrayConstraintFromSetCatalogProduct(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCatalogProductCatalogProductItem) {
            // validation for constraint: itemType
            if (!$arrayOfCatalogProductCatalogProductItem instanceof CatalogProduct) {
                $invalidValues[] = is_object($arrayOfCatalogProductCatalogProductItem) ? get_class($arrayOfCatalogProductCatalogProductItem) : sprintf('%s(%s)', gettype($arrayOfCatalogProductCatalogProductItem), var_export($arrayOfCatalogProductCatalogProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CatalogProduct property can only contain items of type \Ntvspa\Big\Product\Structs\CatalogProduct, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get CatalogProduct value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CatalogProduct[]|null
     */
    public function getCatalogProduct(): ?array
    {
        return $this->CatalogProduct ?? null;
    }

    /**
     * Set CatalogProduct value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CatalogProduct[] $catalogProduct
     *
     * @return ArrayOfCatalogProduct
     * @throws InvalidArgumentException
     */
    public function setCatalogProduct(?array $catalogProduct = null): self
    {
        // validation for constraint: array
        if ('' !== ($catalogProductArrayErrorMessage = self::validateCatalogProductForArrayConstraintFromSetCatalogProduct($catalogProduct))) {
            throw new InvalidArgumentException($catalogProductArrayErrorMessage, __LINE__);
        }
        if (is_null($catalogProduct) || (is_array($catalogProduct) && empty($catalogProduct))) {
            unset($this->CatalogProduct);
        } else {
            $this->CatalogProduct = $catalogProduct;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return CatalogProduct|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\CatalogProduct
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return CatalogProduct|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\CatalogProduct
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return CatalogProduct|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\CatalogProduct
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return CatalogProduct|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\CatalogProduct
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return CatalogProduct|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\CatalogProduct
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param CatalogProduct $item
     *
     * @return ArrayOfCatalogProduct
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof CatalogProduct) {
            throw new InvalidArgumentException(sprintf('The CatalogProduct property can only contain items of type \Ntvspa\Big\Product\Structs\CatalogProduct, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string CatalogProduct
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'CatalogProduct';
    }
}
