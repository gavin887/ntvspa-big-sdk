<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\JourneyLowFare;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfJourneyLowFare Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfJourneyLowFare
 *
 * @subpackage Arrays
 */
class ArrayOfJourneyLowFare extends AbstractStructArrayBase
{
    /**
     * The JourneyLowFare
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var JourneyLowFare[]|null
     */
    protected ?array $JourneyLowFare = null;

    /**
     * Constructor method for ArrayOfJourneyLowFare
     *
     * @param JourneyLowFare[] $journeyLowFare
     *
     * @uses ArrayOfJourneyLowFare::setJourneyLowFare()
     */
    public function __construct(?array $journeyLowFare = null)
    {
        $this
            ->setJourneyLowFare($journeyLowFare);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setJourneyLowFare method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJourneyLowFare method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJourneyLowFareForArrayConstraintFromSetJourneyLowFare(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfJourneyLowFareJourneyLowFareItem) {
            // validation for constraint: itemType
            if (!$arrayOfJourneyLowFareJourneyLowFareItem instanceof JourneyLowFare) {
                $invalidValues[] = is_object($arrayOfJourneyLowFareJourneyLowFareItem) ? get_class($arrayOfJourneyLowFareJourneyLowFareItem) : sprintf('%s(%s)', gettype($arrayOfJourneyLowFareJourneyLowFareItem), var_export($arrayOfJourneyLowFareJourneyLowFareItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JourneyLowFare property can only contain items of type \Ntvspa\Big\Booking\Structs\JourneyLowFare, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get JourneyLowFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return JourneyLowFare[]|null
     */
    public function getJourneyLowFare(): ?array
    {
        return $this->JourneyLowFare ?? null;
    }

    /**
     * Set JourneyLowFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param JourneyLowFare[] $journeyLowFare
     *
     * @return ArrayOfJourneyLowFare
     * @throws InvalidArgumentException
     */
    public function setJourneyLowFare(?array $journeyLowFare = null): self
    {
        // validation for constraint: array
        if ('' !== ($journeyLowFareArrayErrorMessage = self::validateJourneyLowFareForArrayConstraintFromSetJourneyLowFare($journeyLowFare))) {
            throw new InvalidArgumentException($journeyLowFareArrayErrorMessage, __LINE__);
        }
        if (is_null($journeyLowFare) || (is_array($journeyLowFare) && empty($journeyLowFare))) {
            unset($this->JourneyLowFare);
        } else {
            $this->JourneyLowFare = $journeyLowFare;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return JourneyLowFare|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\JourneyLowFare
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return JourneyLowFare|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\JourneyLowFare
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return JourneyLowFare|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\JourneyLowFare
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return JourneyLowFare|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\JourneyLowFare
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return JourneyLowFare|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\JourneyLowFare
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param JourneyLowFare $item
     *
     * @return ArrayOfJourneyLowFare
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof JourneyLowFare) {
            throw new InvalidArgumentException(sprintf('The JourneyLowFare property can only contain items of type \Ntvspa\Big\Booking\Structs\JourneyLowFare, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string JourneyLowFare
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'JourneyLowFare';
    }
}
