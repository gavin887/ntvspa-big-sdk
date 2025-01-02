<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\ProductAttribute;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductAttribute Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductAttribute
 *
 * @subpackage Arrays
 */
class ArrayOfProductAttribute extends AbstractStructArrayBase
{
    /**
     * The ProductAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ProductAttribute[]|null
     */
    protected ?array $ProductAttribute = null;

    /**
     * Constructor method for ArrayOfProductAttribute
     *
     * @param ProductAttribute[] $productAttribute
     *
     * @uses ArrayOfProductAttribute::setProductAttribute()
     */
    public function __construct(?array $productAttribute = null)
    {
        $this
            ->setProductAttribute($productAttribute);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setProductAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductAttributeForArrayConstraintFromSetProductAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductAttributeProductAttributeItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductAttributeProductAttributeItem instanceof ProductAttribute) {
                $invalidValues[] = is_object($arrayOfProductAttributeProductAttributeItem) ? get_class($arrayOfProductAttributeProductAttributeItem) : sprintf('%s(%s)', gettype($arrayOfProductAttributeProductAttributeItem), var_export($arrayOfProductAttributeProductAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductAttribute property can only contain items of type \Ntvspa\Big\Product\Structs\ProductAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get ProductAttribute value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ProductAttribute[]|null
     */
    public function getProductAttribute(): ?array
    {
        return $this->ProductAttribute ?? null;
    }

    /**
     * Set ProductAttribute value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ProductAttribute[] $productAttribute
     *
     * @return ArrayOfProductAttribute
     * @throws InvalidArgumentException
     */
    public function setProductAttribute(?array $productAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($productAttributeArrayErrorMessage = self::validateProductAttributeForArrayConstraintFromSetProductAttribute($productAttribute))) {
            throw new InvalidArgumentException($productAttributeArrayErrorMessage, __LINE__);
        }
        if (is_null($productAttribute) || (is_array($productAttribute) && empty($productAttribute))) {
            unset($this->ProductAttribute);
        } else {
            $this->ProductAttribute = $productAttribute;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return ProductAttribute|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\ProductAttribute
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return ProductAttribute|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\ProductAttribute
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return ProductAttribute|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\ProductAttribute
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return ProductAttribute|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\ProductAttribute
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return ProductAttribute|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\ProductAttribute
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param ProductAttribute $item
     *
     * @return ArrayOfProductAttribute
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ProductAttribute) {
            throw new InvalidArgumentException(sprintf('The ProductAttribute property can only contain items of type \Ntvspa\Big\Product\Structs\ProductAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string ProductAttribute
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'ProductAttribute';
    }
}
