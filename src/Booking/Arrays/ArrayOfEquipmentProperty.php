<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\EquipmentProperty;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEquipmentProperty Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEquipmentProperty
 *
 * @subpackage Arrays
 */
class ArrayOfEquipmentProperty extends AbstractStructArrayBase
{
    /**
     * The EquipmentProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var EquipmentProperty[]|null
     */
    protected ?array $EquipmentProperty = null;

    /**
     * Constructor method for ArrayOfEquipmentProperty
     *
     * @param EquipmentProperty[] $equipmentProperty
     *
     * @uses ArrayOfEquipmentProperty::setEquipmentProperty()
     */
    public function __construct(?array $equipmentProperty = null)
    {
        $this
            ->setEquipmentProperty($equipmentProperty);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setEquipmentProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEquipmentProperty method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEquipmentPropertyForArrayConstraintFromSetEquipmentProperty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEquipmentPropertyEquipmentPropertyItem) {
            // validation for constraint: itemType
            if (!$arrayOfEquipmentPropertyEquipmentPropertyItem instanceof EquipmentProperty) {
                $invalidValues[] = is_object($arrayOfEquipmentPropertyEquipmentPropertyItem) ? get_class($arrayOfEquipmentPropertyEquipmentPropertyItem) : sprintf('%s(%s)', gettype($arrayOfEquipmentPropertyEquipmentPropertyItem), var_export($arrayOfEquipmentPropertyEquipmentPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EquipmentProperty property can only contain items of type \Ntvspa\Big\Booking\Structs\EquipmentProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get EquipmentProperty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return EquipmentProperty[]|null
     */
    public function getEquipmentProperty(): ?array
    {
        return $this->EquipmentProperty ?? null;
    }

    /**
     * Set EquipmentProperty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param EquipmentProperty[] $equipmentProperty
     *
     * @return ArrayOfEquipmentProperty
     * @throws InvalidArgumentException
     */
    public function setEquipmentProperty(?array $equipmentProperty = null): self
    {
        // validation for constraint: array
        if ('' !== ($equipmentPropertyArrayErrorMessage = self::validateEquipmentPropertyForArrayConstraintFromSetEquipmentProperty($equipmentProperty))) {
            throw new InvalidArgumentException($equipmentPropertyArrayErrorMessage, __LINE__);
        }
        if (is_null($equipmentProperty) || (is_array($equipmentProperty) && empty($equipmentProperty))) {
            unset($this->EquipmentProperty);
        } else {
            $this->EquipmentProperty = $equipmentProperty;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return EquipmentProperty|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\EquipmentProperty
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return EquipmentProperty|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\EquipmentProperty
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return EquipmentProperty|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\EquipmentProperty
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return EquipmentProperty|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\EquipmentProperty
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return EquipmentProperty|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\EquipmentProperty
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param EquipmentProperty $item
     *
     * @return ArrayOfEquipmentProperty
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof EquipmentProperty) {
            throw new InvalidArgumentException(sprintf('The EquipmentProperty property can only contain items of type \Ntvspa\Big\Booking\Structs\EquipmentProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string EquipmentProperty
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'EquipmentProperty';
    }
}
