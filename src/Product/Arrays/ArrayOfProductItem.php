<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\ProductItem;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductItem Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductItem
 *
 * @subpackage Arrays
 */
class ArrayOfProductItem extends AbstractStructArrayBase
{
    /**
     * The ProductItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ProductItem[]|null
     */
    protected ?array $ProductItem = null;

    /**
     * Constructor method for ArrayOfProductItem
     *
     * @param ProductItem[] $productItem
     *
     * @uses ArrayOfProductItem::setProductItem()
     */
    public function __construct(?array $productItem = null)
    {
        $this
            ->setProductItem($productItem);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setProductItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductItem method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductItemForArrayConstraintFromSetProductItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductItemProductItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductItemProductItemItem instanceof ProductItem) {
                $invalidValues[] = is_object($arrayOfProductItemProductItemItem) ? get_class($arrayOfProductItemProductItemItem) : sprintf('%s(%s)', gettype($arrayOfProductItemProductItemItem), var_export($arrayOfProductItemProductItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductItem property can only contain items of type \Ntvspa\Big\Product\Structs\ProductItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get ProductItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ProductItem[]|null
     */
    public function getProductItem(): ?array
    {
        return $this->ProductItem ?? null;
    }

    /**
     * Set ProductItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ProductItem[] $productItem
     *
     * @return ArrayOfProductItem
     * @throws InvalidArgumentException
     */
    public function setProductItem(?array $productItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($productItemArrayErrorMessage = self::validateProductItemForArrayConstraintFromSetProductItem($productItem))) {
            throw new InvalidArgumentException($productItemArrayErrorMessage, __LINE__);
        }
        if (is_null($productItem) || (is_array($productItem) && empty($productItem))) {
            unset($this->ProductItem);
        } else {
            $this->ProductItem = $productItem;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return ProductItem|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\ProductItem
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return ProductItem|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\ProductItem
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return ProductItem|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\ProductItem
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return ProductItem|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\ProductItem
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return ProductItem|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\ProductItem
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param ProductItem $item
     *
     * @return ArrayOfProductItem
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ProductItem) {
            throw new InvalidArgumentException(sprintf('The ProductItem property can only contain items of type \Ntvspa\Big\Product\Structs\ProductItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string ProductItem
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'ProductItem';
    }
}
