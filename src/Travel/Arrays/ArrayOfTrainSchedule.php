<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\TrainSchedule;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTrainSchedule Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTrainSchedule
 *
 * @subpackage Arrays
 */
class ArrayOfTrainSchedule extends AbstractStructArrayBase
{
    /**
     * The TrainSchedule
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var TrainSchedule[]|null
     */
    protected ?array $TrainSchedule = null;

    /**
     * Constructor method for ArrayOfTrainSchedule
     *
     * @param TrainSchedule[] $trainSchedule
     *
     * @uses ArrayOfTrainSchedule::setTrainSchedule()
     */
    public function __construct(?array $trainSchedule = null)
    {
        $this
            ->setTrainSchedule($trainSchedule);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setTrainSchedule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrainSchedule method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTrainScheduleForArrayConstraintFromSetTrainSchedule(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTrainScheduleTrainScheduleItem) {
            // validation for constraint: itemType
            if (!$arrayOfTrainScheduleTrainScheduleItem instanceof TrainSchedule) {
                $invalidValues[] = is_object($arrayOfTrainScheduleTrainScheduleItem) ? get_class($arrayOfTrainScheduleTrainScheduleItem) : sprintf('%s(%s)', gettype($arrayOfTrainScheduleTrainScheduleItem), var_export($arrayOfTrainScheduleTrainScheduleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TrainSchedule property can only contain items of type \Ntvspa\Big\Travel\Structs\TrainSchedule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get TrainSchedule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return TrainSchedule[]|null
     */
    public function getTrainSchedule(): ?array
    {
        return $this->TrainSchedule ?? null;
    }

    /**
     * Set TrainSchedule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param TrainSchedule[] $trainSchedule
     *
     * @return ArrayOfTrainSchedule
     * @throws InvalidArgumentException
     */
    public function setTrainSchedule(?array $trainSchedule = null): self
    {
        // validation for constraint: array
        if ('' !== ($trainScheduleArrayErrorMessage = self::validateTrainScheduleForArrayConstraintFromSetTrainSchedule($trainSchedule))) {
            throw new InvalidArgumentException($trainScheduleArrayErrorMessage, __LINE__);
        }
        if (is_null($trainSchedule) || (is_array($trainSchedule) && empty($trainSchedule))) {
            unset($this->TrainSchedule);
        } else {
            $this->TrainSchedule = $trainSchedule;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return TrainSchedule|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\TrainSchedule
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return TrainSchedule|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\TrainSchedule
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return TrainSchedule|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\TrainSchedule
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return TrainSchedule|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\TrainSchedule
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return TrainSchedule|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\TrainSchedule
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param TrainSchedule $item
     *
     * @return ArrayOfTrainSchedule
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof TrainSchedule) {
            throw new InvalidArgumentException(sprintf('The TrainSchedule property can only contain items of type \Ntvspa\Big\Travel\Structs\TrainSchedule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string TrainSchedule
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'TrainSchedule';
    }
}
