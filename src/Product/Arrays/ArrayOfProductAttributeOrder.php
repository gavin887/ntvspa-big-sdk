<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\ProductAttributeOrder;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductAttributeOrder Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductAttributeOrder
 *
 * @subpackage Arrays
 */
class ArrayOfProductAttributeOrder extends AbstractStructArrayBase
{
    /**
     * The ProductAttributeOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ProductAttributeOrder[]|null
     */
    protected ?array $ProductAttributeOrder = null;

    /**
     * Constructor method for ArrayOfProductAttributeOrder
     *
     * @param ProductAttributeOrder[] $productAttributeOrder
     *
     * @uses ArrayOfProductAttributeOrder::setProductAttributeOrder()
     */
    public function __construct(?array $productAttributeOrder = null)
    {
        $this
            ->setProductAttributeOrder($productAttributeOrder);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setProductAttributeOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductAttributeOrder method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductAttributeOrderForArrayConstraintFromSetProductAttributeOrder(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductAttributeOrderProductAttributeOrderItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductAttributeOrderProductAttributeOrderItem instanceof ProductAttributeOrder) {
                $invalidValues[] = is_object($arrayOfProductAttributeOrderProductAttributeOrderItem) ? get_class($arrayOfProductAttributeOrderProductAttributeOrderItem) : sprintf('%s(%s)', gettype($arrayOfProductAttributeOrderProductAttributeOrderItem), var_export($arrayOfProductAttributeOrderProductAttributeOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductAttributeOrder property can only contain items of type \Ntvspa\Big\Product\Structs\ProductAttributeOrder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get ProductAttributeOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ProductAttributeOrder[]|null
     */
    public function getProductAttributeOrder(): ?array
    {
        return $this->ProductAttributeOrder ?? null;
    }

    /**
     * Set ProductAttributeOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ProductAttributeOrder[] $productAttributeOrder
     *
     * @return ArrayOfProductAttributeOrder
     * @throws InvalidArgumentException
     */
    public function setProductAttributeOrder(?array $productAttributeOrder = null): self
    {
        // validation for constraint: array
        if ('' !== ($productAttributeOrderArrayErrorMessage = self::validateProductAttributeOrderForArrayConstraintFromSetProductAttributeOrder($productAttributeOrder))) {
            throw new InvalidArgumentException($productAttributeOrderArrayErrorMessage, __LINE__);
        }
        if (is_null($productAttributeOrder) || (is_array($productAttributeOrder) && empty($productAttributeOrder))) {
            unset($this->ProductAttributeOrder);
        } else {
            $this->ProductAttributeOrder = $productAttributeOrder;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return ProductAttributeOrder|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\ProductAttributeOrder
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return ProductAttributeOrder|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\ProductAttributeOrder
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return ProductAttributeOrder|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\ProductAttributeOrder
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return ProductAttributeOrder|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\ProductAttributeOrder
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return ProductAttributeOrder|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\ProductAttributeOrder
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param ProductAttributeOrder $item
     *
     * @return ArrayOfProductAttributeOrder
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ProductAttributeOrder) {
            throw new InvalidArgumentException(sprintf('The ProductAttributeOrder property can only contain items of type \Ntvspa\Big\Product\Structs\ProductAttributeOrder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string ProductAttributeOrder
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'ProductAttributeOrder';
    }
}
