<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\Journey;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfJourney Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfJourney
 *
 * @subpackage Arrays
 */
class ArrayOfJourney extends AbstractStructArrayBase
{
    /**
     * The Journey
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Journey[]|null
     */
    protected ?array $Journey = null;

    /**
     * Constructor method for ArrayOfJourney
     *
     * @param Journey[] $journey
     *
     * @uses ArrayOfJourney::setJourney()
     */
    public function __construct(?array $journey = null)
    {
        $this
            ->setJourney($journey);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setJourney method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJourney method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJourneyForArrayConstraintFromSetJourney(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfJourneyJourneyItem) {
            // validation for constraint: itemType
            if (!$arrayOfJourneyJourneyItem instanceof Journey) {
                $invalidValues[] = is_object($arrayOfJourneyJourneyItem) ? get_class($arrayOfJourneyJourneyItem) : sprintf('%s(%s)', gettype($arrayOfJourneyJourneyItem), var_export($arrayOfJourneyJourneyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Journey property can only contain items of type \Ntvspa\Big\Travel\Structs\Journey, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Journey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Journey[]|null
     */
    public function getJourney(): ?array
    {
        return $this->Journey ?? null;
    }

    /**
     * Set Journey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Journey[] $journey
     *
     * @return ArrayOfJourney
     * @throws InvalidArgumentException
     */
    public function setJourney(?array $journey = null): self
    {
        // validation for constraint: array
        if ('' !== ($journeyArrayErrorMessage = self::validateJourneyForArrayConstraintFromSetJourney($journey))) {
            throw new InvalidArgumentException($journeyArrayErrorMessage, __LINE__);
        }
        if (is_null($journey) || (is_array($journey) && empty($journey))) {
            unset($this->Journey);
        } else {
            $this->Journey = $journey;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Journey|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\Journey
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Journey|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\Journey
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Journey|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\Journey
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Journey|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\Journey
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Journey|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\Journey
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Journey $item
     *
     * @return ArrayOfJourney
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Journey) {
            throw new InvalidArgumentException(sprintf('The Journey property can only contain items of type \Ntvspa\Big\Travel\Structs\Journey, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Journey
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Journey';
    }
}
