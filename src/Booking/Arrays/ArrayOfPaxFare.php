<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\PaxFare;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPaxFare Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPaxFare
 *
 * @subpackage Arrays
 */
class ArrayOfPaxFare extends AbstractStructArrayBase
{
    /**
     * The PaxFare
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PaxFare[]|null
     */
    protected ?array $PaxFare = null;

    /**
     * Constructor method for ArrayOfPaxFare
     *
     * @param PaxFare[] $paxFare
     *
     * @uses ArrayOfPaxFare::setPaxFare()
     */
    public function __construct(?array $paxFare = null)
    {
        $this
            ->setPaxFare($paxFare);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPaxFare method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaxFare method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaxFareForArrayConstraintFromSetPaxFare(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPaxFarePaxFareItem) {
            // validation for constraint: itemType
            if (!$arrayOfPaxFarePaxFareItem instanceof PaxFare) {
                $invalidValues[] = is_object($arrayOfPaxFarePaxFareItem) ? get_class($arrayOfPaxFarePaxFareItem) : sprintf('%s(%s)', gettype($arrayOfPaxFarePaxFareItem), var_export($arrayOfPaxFarePaxFareItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaxFare property can only contain items of type \Ntvspa\Big\Booking\Structs\PaxFare, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get PaxFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PaxFare[]|null
     */
    public function getPaxFare(): ?array
    {
        return $this->PaxFare ?? null;
    }

    /**
     * Set PaxFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PaxFare[] $paxFare
     *
     * @return ArrayOfPaxFare
     * @throws InvalidArgumentException
     */
    public function setPaxFare(?array $paxFare = null): self
    {
        // validation for constraint: array
        if ('' !== ($paxFareArrayErrorMessage = self::validatePaxFareForArrayConstraintFromSetPaxFare($paxFare))) {
            throw new InvalidArgumentException($paxFareArrayErrorMessage, __LINE__);
        }
        if (is_null($paxFare) || (is_array($paxFare) && empty($paxFare))) {
            unset($this->PaxFare);
        } else {
            $this->PaxFare = $paxFare;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return PaxFare|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\PaxFare
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return PaxFare|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\PaxFare
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return PaxFare|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\PaxFare
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return PaxFare|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\PaxFare
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return PaxFare|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\PaxFare
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param PaxFare $item
     *
     * @return ArrayOfPaxFare
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof PaxFare) {
            throw new InvalidArgumentException(sprintf('The PaxFare property can only contain items of type \Ntvspa\Big\Booking\Structs\PaxFare, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string PaxFare
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'PaxFare';
    }
}
