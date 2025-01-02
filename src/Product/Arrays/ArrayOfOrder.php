<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\Order;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrder Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOrder
 *
 * @subpackage Arrays
 */
class ArrayOfOrder extends AbstractStructArrayBase
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Order[]|null
     */
    protected ?array $Order = null;

    /**
     * Constructor method for ArrayOfOrder
     *
     * @param Order[] $order
     *
     * @uses ArrayOfOrder::setOrder()
     */
    public function __construct(?array $order = null)
    {
        $this
            ->setOrder($order);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrder method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderForArrayConstraintFromSetOrder(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOrderOrderItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrderOrderItem instanceof Order) {
                $invalidValues[] = is_object($arrayOfOrderOrderItem) ? get_class($arrayOfOrderOrderItem) : sprintf('%s(%s)', gettype($arrayOfOrderOrderItem), var_export($arrayOfOrderOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Order property can only contain items of type \Ntvspa\Big\Product\Structs\Order, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Order value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Order[]|null
     */
    public function getOrder(): ?array
    {
        return $this->Order ?? null;
    }

    /**
     * Set Order value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Order[] $order
     *
     * @return ArrayOfOrder
     * @throws InvalidArgumentException
     */
    public function setOrder(?array $order = null): self
    {
        // validation for constraint: array
        if ('' !== ($orderArrayErrorMessage = self::validateOrderForArrayConstraintFromSetOrder($order))) {
            throw new InvalidArgumentException($orderArrayErrorMessage, __LINE__);
        }
        if (is_null($order) || (is_array($order) && empty($order))) {
            unset($this->Order);
        } else {
            $this->Order = $order;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Order|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\Order
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Order|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\Order
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Order|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\Order
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Order|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\Order
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Order|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\Order
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Order $item
     *
     * @return ArrayOfOrder
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Order) {
            throw new InvalidArgumentException(sprintf('The Order property can only contain items of type \Ntvspa\Big\Product\Structs\Order, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Order
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Order';
    }
}
