<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\LineItemOrder;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLineItemOrder Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLineItemOrder
 *
 * @subpackage Arrays
 */
class ArrayOfLineItemOrder extends AbstractStructArrayBase
{
    /**
     * The LineItemOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var LineItemOrder[]|null
     */
    protected ?array $LineItemOrder = null;

    /**
     * Constructor method for ArrayOfLineItemOrder
     *
     * @param LineItemOrder[] $lineItemOrder
     *
     * @uses ArrayOfLineItemOrder::setLineItemOrder()
     */
    public function __construct(?array $lineItemOrder = null)
    {
        $this
            ->setLineItemOrder($lineItemOrder);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setLineItemOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLineItemOrder method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLineItemOrderForArrayConstraintFromSetLineItemOrder(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLineItemOrderLineItemOrderItem) {
            // validation for constraint: itemType
            if (!$arrayOfLineItemOrderLineItemOrderItem instanceof LineItemOrder) {
                $invalidValues[] = is_object($arrayOfLineItemOrderLineItemOrderItem) ? get_class($arrayOfLineItemOrderLineItemOrderItem) : sprintf('%s(%s)', gettype($arrayOfLineItemOrderLineItemOrderItem), var_export($arrayOfLineItemOrderLineItemOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LineItemOrder property can only contain items of type \Ntvspa\Big\Product\Structs\LineItemOrder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get LineItemOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return LineItemOrder[]|null
     */
    public function getLineItemOrder(): ?array
    {
        return $this->LineItemOrder ?? null;
    }

    /**
     * Set LineItemOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param LineItemOrder[] $lineItemOrder
     *
     * @return ArrayOfLineItemOrder
     * @throws InvalidArgumentException
     */
    public function setLineItemOrder(?array $lineItemOrder = null): self
    {
        // validation for constraint: array
        if ('' !== ($lineItemOrderArrayErrorMessage = self::validateLineItemOrderForArrayConstraintFromSetLineItemOrder($lineItemOrder))) {
            throw new InvalidArgumentException($lineItemOrderArrayErrorMessage, __LINE__);
        }
        if (is_null($lineItemOrder) || (is_array($lineItemOrder) && empty($lineItemOrder))) {
            unset($this->LineItemOrder);
        } else {
            $this->LineItemOrder = $lineItemOrder;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return LineItemOrder|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\LineItemOrder
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return LineItemOrder|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\LineItemOrder
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return LineItemOrder|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\LineItemOrder
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return LineItemOrder|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\LineItemOrder
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return LineItemOrder|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\LineItemOrder
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param LineItemOrder $item
     *
     * @return ArrayOfLineItemOrder
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof LineItemOrder) {
            throw new InvalidArgumentException(sprintf('The LineItemOrder property can only contain items of type \Ntvspa\Big\Product\Structs\LineItemOrder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string LineItemOrder
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'LineItemOrder';
    }
}
