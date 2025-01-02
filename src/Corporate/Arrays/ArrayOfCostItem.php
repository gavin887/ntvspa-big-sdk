<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\CostItem;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCostItem Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCostItem
 *
 * @subpackage Arrays
 */
class ArrayOfCostItem extends AbstractStructArrayBase
{
    /**
     * The CostItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CostItem[]|null
     */
    protected ?array $CostItem = null;

    /**
     * Constructor method for ArrayOfCostItem
     *
     * @param CostItem[] $costItem
     *
     * @uses ArrayOfCostItem::setCostItem()
     */
    public function __construct(?array $costItem = null)
    {
        $this
            ->setCostItem($costItem);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCostItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCostItem method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCostItemForArrayConstraintFromSetCostItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCostItemCostItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfCostItemCostItemItem instanceof CostItem) {
                $invalidValues[] = is_object($arrayOfCostItemCostItemItem) ? get_class($arrayOfCostItemCostItemItem) : sprintf('%s(%s)', gettype($arrayOfCostItemCostItemItem), var_export($arrayOfCostItemCostItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CostItem property can only contain items of type \Ntvspa\Big\Corporate\Structs\CostItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get CostItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CostItem[]|null
     */
    public function getCostItem(): ?array
    {
        return $this->CostItem ?? null;
    }

    /**
     * Set CostItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CostItem[] $costItem
     *
     * @return ArrayOfCostItem
     * @throws InvalidArgumentException
     */
    public function setCostItem(?array $costItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($costItemArrayErrorMessage = self::validateCostItemForArrayConstraintFromSetCostItem($costItem))) {
            throw new InvalidArgumentException($costItemArrayErrorMessage, __LINE__);
        }
        if (is_null($costItem) || (is_array($costItem) && empty($costItem))) {
            unset($this->CostItem);
        } else {
            $this->CostItem = $costItem;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return CostItem|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\CostItem
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return CostItem|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\CostItem
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return CostItem|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\CostItem
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return CostItem|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\CostItem
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return CostItem|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\CostItem
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param CostItem $item
     *
     * @return ArrayOfCostItem
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof CostItem) {
            throw new InvalidArgumentException(sprintf('The CostItem property can only contain items of type \Ntvspa\Big\Corporate\Structs\CostItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string CostItem
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'CostItem';
    }
}
