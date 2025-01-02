<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\ScheduleJourney;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfScheduleJourney Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfScheduleJourney
 *
 * @subpackage Arrays
 */
class ArrayOfScheduleJourney extends AbstractStructArrayBase
{
    /**
     * The ScheduleJourney
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ScheduleJourney[]|null
     */
    protected ?array $ScheduleJourney = null;

    /**
     * Constructor method for ArrayOfScheduleJourney
     *
     * @param ScheduleJourney[] $scheduleJourney
     *
     * @uses ArrayOfScheduleJourney::setScheduleJourney()
     */
    public function __construct(?array $scheduleJourney = null)
    {
        $this
            ->setScheduleJourney($scheduleJourney);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setScheduleJourney method
     * This method is willingly generated in order to preserve the one-line inline validation within the setScheduleJourney method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateScheduleJourneyForArrayConstraintFromSetScheduleJourney(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfScheduleJourneyScheduleJourneyItem) {
            // validation for constraint: itemType
            if (!$arrayOfScheduleJourneyScheduleJourneyItem instanceof ScheduleJourney) {
                $invalidValues[] = is_object($arrayOfScheduleJourneyScheduleJourneyItem) ? get_class($arrayOfScheduleJourneyScheduleJourneyItem) : sprintf('%s(%s)', gettype($arrayOfScheduleJourneyScheduleJourneyItem), var_export($arrayOfScheduleJourneyScheduleJourneyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ScheduleJourney property can only contain items of type \Ntvspa\Big\Travel\Structs\ScheduleJourney, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get ScheduleJourney value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ScheduleJourney[]|null
     */
    public function getScheduleJourney(): ?array
    {
        return $this->ScheduleJourney ?? null;
    }

    /**
     * Set ScheduleJourney value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ScheduleJourney[] $scheduleJourney
     *
     * @return ArrayOfScheduleJourney
     * @throws InvalidArgumentException
     */
    public function setScheduleJourney(?array $scheduleJourney = null): self
    {
        // validation for constraint: array
        if ('' !== ($scheduleJourneyArrayErrorMessage = self::validateScheduleJourneyForArrayConstraintFromSetScheduleJourney($scheduleJourney))) {
            throw new InvalidArgumentException($scheduleJourneyArrayErrorMessage, __LINE__);
        }
        if (is_null($scheduleJourney) || (is_array($scheduleJourney) && empty($scheduleJourney))) {
            unset($this->ScheduleJourney);
        } else {
            $this->ScheduleJourney = $scheduleJourney;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return ScheduleJourney|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\ScheduleJourney
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return ScheduleJourney|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\ScheduleJourney
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return ScheduleJourney|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\ScheduleJourney
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return ScheduleJourney|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\ScheduleJourney
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return ScheduleJourney|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\ScheduleJourney
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param ScheduleJourney $item
     *
     * @return ArrayOfScheduleJourney
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ScheduleJourney) {
            throw new InvalidArgumentException(sprintf('The ScheduleJourney property can only contain items of type \Ntvspa\Big\Travel\Structs\ScheduleJourney, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string ScheduleJourney
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'ScheduleJourney';
    }
}
