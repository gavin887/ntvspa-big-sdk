<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\BlackPeriodJourney;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBlackPeriodJourney Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBlackPeriodJourney
 *
 * @subpackage Arrays
 */
class ArrayOfBlackPeriodJourney extends AbstractStructArrayBase
{
    /**
     * The BlackPeriodJourney
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BlackPeriodJourney[]|null
     */
    protected ?array $BlackPeriodJourney = null;

    /**
     * Constructor method for ArrayOfBlackPeriodJourney
     *
     * @param BlackPeriodJourney[] $blackPeriodJourney
     *
     * @uses ArrayOfBlackPeriodJourney::setBlackPeriodJourney()
     */
    public function __construct(?array $blackPeriodJourney = null)
    {
        $this
            ->setBlackPeriodJourney($blackPeriodJourney);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBlackPeriodJourney method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBlackPeriodJourney method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBlackPeriodJourneyForArrayConstraintFromSetBlackPeriodJourney(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBlackPeriodJourneyBlackPeriodJourneyItem) {
            // validation for constraint: itemType
            if (!$arrayOfBlackPeriodJourneyBlackPeriodJourneyItem instanceof BlackPeriodJourney) {
                $invalidValues[] = is_object($arrayOfBlackPeriodJourneyBlackPeriodJourneyItem) ? get_class($arrayOfBlackPeriodJourneyBlackPeriodJourneyItem) : sprintf('%s(%s)', gettype($arrayOfBlackPeriodJourneyBlackPeriodJourneyItem), var_export($arrayOfBlackPeriodJourneyBlackPeriodJourneyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BlackPeriodJourney property can only contain items of type \Ntvspa\Big\Corporate\Structs\BlackPeriodJourney, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get BlackPeriodJourney value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BlackPeriodJourney[]|null
     */
    public function getBlackPeriodJourney(): ?array
    {
        return $this->BlackPeriodJourney ?? null;
    }

    /**
     * Set BlackPeriodJourney value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BlackPeriodJourney[] $blackPeriodJourney
     *
     * @return ArrayOfBlackPeriodJourney
     * @throws InvalidArgumentException
     */
    public function setBlackPeriodJourney(?array $blackPeriodJourney = null): self
    {
        // validation for constraint: array
        if ('' !== ($blackPeriodJourneyArrayErrorMessage = self::validateBlackPeriodJourneyForArrayConstraintFromSetBlackPeriodJourney($blackPeriodJourney))) {
            throw new InvalidArgumentException($blackPeriodJourneyArrayErrorMessage, __LINE__);
        }
        if (is_null($blackPeriodJourney) || (is_array($blackPeriodJourney) && empty($blackPeriodJourney))) {
            unset($this->BlackPeriodJourney);
        } else {
            $this->BlackPeriodJourney = $blackPeriodJourney;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return BlackPeriodJourney|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\BlackPeriodJourney
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return BlackPeriodJourney|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\BlackPeriodJourney
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return BlackPeriodJourney|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\BlackPeriodJourney
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return BlackPeriodJourney|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\BlackPeriodJourney
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return BlackPeriodJourney|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\BlackPeriodJourney
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param BlackPeriodJourney $item
     *
     * @return ArrayOfBlackPeriodJourney
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof BlackPeriodJourney) {
            throw new InvalidArgumentException(sprintf('The BlackPeriodJourney property can only contain items of type \Ntvspa\Big\Corporate\Structs\BlackPeriodJourney, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string BlackPeriodJourney
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'BlackPeriodJourney';
    }
}
