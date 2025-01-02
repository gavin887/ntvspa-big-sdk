<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\Product;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProduct Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProduct
 *
 * @subpackage Arrays
 */
class ArrayOfProduct extends AbstractStructArrayBase
{
    /**
     * The Product
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Product[]|null
     */
    protected ?array $Product = null;

    /**
     * Constructor method for ArrayOfProduct
     *
     * @param Product[] $product
     *
     * @uses ArrayOfProduct::setProduct()
     */
    public function __construct(?array $product = null)
    {
        $this
            ->setProduct($product);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProduct method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductForArrayConstraintFromSetProduct(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductProductItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductProductItem instanceof Product) {
                $invalidValues[] = is_object($arrayOfProductProductItem) ? get_class($arrayOfProductProductItem) : sprintf('%s(%s)', gettype($arrayOfProductProductItem), var_export($arrayOfProductProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Product property can only contain items of type \Ntvspa\Big\Product\Structs\Product, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Product value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Product[]|null
     */
    public function getProduct(): ?array
    {
        return $this->Product ?? null;
    }

    /**
     * Set Product value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Product[] $product
     *
     * @return ArrayOfProduct
     * @throws InvalidArgumentException
     */
    public function setProduct(?array $product = null): self
    {
        // validation for constraint: array
        if ('' !== ($productArrayErrorMessage = self::validateProductForArrayConstraintFromSetProduct($product))) {
            throw new InvalidArgumentException($productArrayErrorMessage, __LINE__);
        }
        if (is_null($product) || (is_array($product) && empty($product))) {
            unset($this->Product);
        } else {
            $this->Product = $product;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Product|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\Product
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Product|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\Product
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Product|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\Product
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Product|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\Product
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Product|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\Product
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Product $item
     *
     * @return ArrayOfProduct
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Product) {
            throw new InvalidArgumentException(sprintf('The Product property can only contain items of type \Ntvspa\Big\Product\Structs\Product, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Product
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Product';
    }
}
