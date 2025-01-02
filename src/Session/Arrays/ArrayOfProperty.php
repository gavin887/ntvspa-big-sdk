<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Session\Structs\Property;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProperty Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProperty
 *
 * @subpackage Arrays
 */
class ArrayOfProperty extends AbstractStructArrayBase
{
    /**
     * The Property
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Property[]|null
     */
    protected ?array $Property = null;

    /**
     * Constructor method for ArrayOfProperty
     *
     * @param Property[] $property
     *
     * @uses ArrayOfProperty::setProperty()
     */
    public function __construct(?array $property = null)
    {
        $this
            ->setProperty($property);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProperty method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePropertyForArrayConstraintFromSetProperty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPropertyPropertyItem) {
            // validation for constraint: itemType
            if (!$arrayOfPropertyPropertyItem instanceof Property) {
                $invalidValues[] = is_object($arrayOfPropertyPropertyItem) ? get_class($arrayOfPropertyPropertyItem) : sprintf('%s(%s)', gettype($arrayOfPropertyPropertyItem), var_export($arrayOfPropertyPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Property property can only contain items of type \Ntvspa\Big\Session\Structs\Property, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Property value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Property[]|null
     */
    public function getProperty(): ?array
    {
        return $this->Property ?? null;
    }

    /**
     * Set Property value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Property[] $property
     *
     * @return ArrayOfProperty
     * @throws InvalidArgumentException
     */
    public function setProperty(?array $property = null): self
    {
        // validation for constraint: array
        if ('' !== ($propertyArrayErrorMessage = self::validatePropertyForArrayConstraintFromSetProperty($property))) {
            throw new InvalidArgumentException($propertyArrayErrorMessage, __LINE__);
        }
        if (is_null($property) || (is_array($property) && empty($property))) {
            unset($this->Property);
        } else {
            $this->Property = $property;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Property|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Session\Structs\Property
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Property|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Session\Structs\Property
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Property|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Session\Structs\Property
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Property|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Session\Structs\Property
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Property|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Session\Structs\Property
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Property $item
     *
     * @return ArrayOfProperty
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Property) {
            throw new InvalidArgumentException(sprintf('The Property property can only contain items of type \Ntvspa\Big\Session\Structs\Property, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Property
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Property';
    }
}
