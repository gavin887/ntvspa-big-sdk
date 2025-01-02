<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\Fare;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFare Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFare
 *
 * @subpackage Arrays
 */
class ArrayOfFare extends AbstractStructArrayBase
{
    /**
     * The Fare
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Fare[]|null
     */
    protected ?array $Fare = null;

    /**
     * Constructor method for ArrayOfFare
     *
     * @param Fare[] $fare
     *
     * @uses ArrayOfFare::setFare()
     */
    public function __construct(?array $fare = null)
    {
        $this
            ->setFare($fare);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setFare method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFare method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareForArrayConstraintFromSetFare(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFareFareItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareFareItem instanceof Fare) {
                $invalidValues[] = is_object($arrayOfFareFareItem) ? get_class($arrayOfFareFareItem) : sprintf('%s(%s)', gettype($arrayOfFareFareItem), var_export($arrayOfFareFareItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Fare property can only contain items of type \Ntvspa\Big\Booking\Structs\Fare, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Fare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Fare[]|null
     */
    public function getFare(): ?array
    {
        return $this->Fare ?? null;
    }

    /**
     * Set Fare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Fare[] $fare
     *
     * @return ArrayOfFare
     * @throws InvalidArgumentException
     */
    public function setFare(?array $fare = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareArrayErrorMessage = self::validateFareForArrayConstraintFromSetFare($fare))) {
            throw new InvalidArgumentException($fareArrayErrorMessage, __LINE__);
        }
        if (is_null($fare) || (is_array($fare) && empty($fare))) {
            unset($this->Fare);
        } else {
            $this->Fare = $fare;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Fare|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\Fare
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Fare|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\Fare
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Fare|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\Fare
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Fare|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\Fare
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Fare|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\Fare
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Fare $item
     *
     * @return ArrayOfFare
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Fare) {
            throw new InvalidArgumentException(sprintf('The Fare property can only contain items of type \Ntvspa\Big\Booking\Structs\Fare, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Fare
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Fare';
    }
}
