<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\FareBasisGroup;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareBasisGroup Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareBasisGroup
 *
 * @subpackage Arrays
 */
class ArrayOfFareBasisGroup extends AbstractStructArrayBase
{
    /**
     * The FareBasisGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var FareBasisGroup[]|null
     */
    protected ?array $FareBasisGroup = null;

    /**
     * Constructor method for ArrayOfFareBasisGroup
     *
     * @param FareBasisGroup[] $fareBasisGroup
     *
     * @uses ArrayOfFareBasisGroup::setFareBasisGroup()
     */
    public function __construct(?array $fareBasisGroup = null)
    {
        $this
            ->setFareBasisGroup($fareBasisGroup);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setFareBasisGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareBasisGroup method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareBasisGroupForArrayConstraintFromSetFareBasisGroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFareBasisGroupFareBasisGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareBasisGroupFareBasisGroupItem instanceof FareBasisGroup) {
                $invalidValues[] = is_object($arrayOfFareBasisGroupFareBasisGroupItem) ? get_class($arrayOfFareBasisGroupFareBasisGroupItem) : sprintf('%s(%s)', gettype($arrayOfFareBasisGroupFareBasisGroupItem), var_export($arrayOfFareBasisGroupFareBasisGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareBasisGroup property can only contain items of type \Ntvspa\Big\Booking\Structs\FareBasisGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get FareBasisGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return FareBasisGroup[]|null
     */
    public function getFareBasisGroup(): ?array
    {
        return $this->FareBasisGroup ?? null;
    }

    /**
     * Set FareBasisGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param FareBasisGroup[] $fareBasisGroup
     *
     * @return ArrayOfFareBasisGroup
     * @throws InvalidArgumentException
     */
    public function setFareBasisGroup(?array $fareBasisGroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareBasisGroupArrayErrorMessage = self::validateFareBasisGroupForArrayConstraintFromSetFareBasisGroup($fareBasisGroup))) {
            throw new InvalidArgumentException($fareBasisGroupArrayErrorMessage, __LINE__);
        }
        if (is_null($fareBasisGroup) || (is_array($fareBasisGroup) && empty($fareBasisGroup))) {
            unset($this->FareBasisGroup);
        } else {
            $this->FareBasisGroup = $fareBasisGroup;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return FareBasisGroup|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\FareBasisGroup
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return FareBasisGroup|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\FareBasisGroup
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return FareBasisGroup|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\FareBasisGroup
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return FareBasisGroup|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\FareBasisGroup
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return FareBasisGroup|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\FareBasisGroup
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param FareBasisGroup $item
     *
     * @return ArrayOfFareBasisGroup
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof FareBasisGroup) {
            throw new InvalidArgumentException(sprintf('The FareBasisGroup property can only contain items of type \Ntvspa\Big\Booking\Structs\FareBasisGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string FareBasisGroup
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'FareBasisGroup';
    }
}
