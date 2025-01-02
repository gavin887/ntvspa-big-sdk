<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\SegmentUpgrade;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSegmentUpgrade Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSegmentUpgrade
 *
 * @subpackage Arrays
 */
class ArrayOfSegmentUpgrade extends AbstractStructArrayBase
{
    /**
     * The SegmentUpgrade
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var SegmentUpgrade[]|null
     */
    protected ?array $SegmentUpgrade = null;

    /**
     * Constructor method for ArrayOfSegmentUpgrade
     *
     * @param SegmentUpgrade[] $segmentUpgrade
     *
     * @uses ArrayOfSegmentUpgrade::setSegmentUpgrade()
     */
    public function __construct(?array $segmentUpgrade = null)
    {
        $this
            ->setSegmentUpgrade($segmentUpgrade);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setSegmentUpgrade method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSegmentUpgrade method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSegmentUpgradeForArrayConstraintFromSetSegmentUpgrade(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSegmentUpgradeSegmentUpgradeItem) {
            // validation for constraint: itemType
            if (!$arrayOfSegmentUpgradeSegmentUpgradeItem instanceof SegmentUpgrade) {
                $invalidValues[] = is_object($arrayOfSegmentUpgradeSegmentUpgradeItem) ? get_class($arrayOfSegmentUpgradeSegmentUpgradeItem) : sprintf('%s(%s)', gettype($arrayOfSegmentUpgradeSegmentUpgradeItem), var_export($arrayOfSegmentUpgradeSegmentUpgradeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SegmentUpgrade property can only contain items of type \Ntvspa\Big\Booking\Structs\SegmentUpgrade, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get SegmentUpgrade value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return SegmentUpgrade[]|null
     */
    public function getSegmentUpgrade(): ?array
    {
        return $this->SegmentUpgrade ?? null;
    }

    /**
     * Set SegmentUpgrade value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param SegmentUpgrade[] $segmentUpgrade
     *
     * @return ArrayOfSegmentUpgrade
     * @throws InvalidArgumentException
     */
    public function setSegmentUpgrade(?array $segmentUpgrade = null): self
    {
        // validation for constraint: array
        if ('' !== ($segmentUpgradeArrayErrorMessage = self::validateSegmentUpgradeForArrayConstraintFromSetSegmentUpgrade($segmentUpgrade))) {
            throw new InvalidArgumentException($segmentUpgradeArrayErrorMessage, __LINE__);
        }
        if (is_null($segmentUpgrade) || (is_array($segmentUpgrade) && empty($segmentUpgrade))) {
            unset($this->SegmentUpgrade);
        } else {
            $this->SegmentUpgrade = $segmentUpgrade;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return SegmentUpgrade|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\SegmentUpgrade
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return SegmentUpgrade|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\SegmentUpgrade
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return SegmentUpgrade|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\SegmentUpgrade
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return SegmentUpgrade|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\SegmentUpgrade
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return SegmentUpgrade|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\SegmentUpgrade
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param SegmentUpgrade $item
     *
     * @return ArrayOfSegmentUpgrade
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof SegmentUpgrade) {
            throw new InvalidArgumentException(sprintf('The SegmentUpgrade property can only contain items of type \Ntvspa\Big\Booking\Structs\SegmentUpgrade, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string SegmentUpgrade
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'SegmentUpgrade';
    }
}
