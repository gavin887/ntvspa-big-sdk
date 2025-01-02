<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\Leg;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLeg Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLeg
 *
 * @subpackage Arrays
 */
class ArrayOfLeg extends AbstractStructArrayBase
{
    /**
     * The Leg
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Leg[]|null
     */
    protected ?array $Leg = null;

    /**
     * Constructor method for ArrayOfLeg
     *
     * @param Leg[] $leg
     *
     * @uses ArrayOfLeg::setLeg()
     */
    public function __construct(?array $leg = null)
    {
        $this
            ->setLeg($leg);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setLeg method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLeg method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLegForArrayConstraintFromSetLeg(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLegLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfLegLegItem instanceof Leg) {
                $invalidValues[] = is_object($arrayOfLegLegItem) ? get_class($arrayOfLegLegItem) : sprintf('%s(%s)', gettype($arrayOfLegLegItem), var_export($arrayOfLegLegItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Leg property can only contain items of type \Ntvspa\Big\Travel\Structs\Leg, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Leg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Leg[]|null
     */
    public function getLeg(): ?array
    {
        return $this->Leg ?? null;
    }

    /**
     * Set Leg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Leg[] $leg
     *
     * @return ArrayOfLeg
     * @throws InvalidArgumentException
     */
    public function setLeg(?array $leg = null): self
    {
        // validation for constraint: array
        if ('' !== ($legArrayErrorMessage = self::validateLegForArrayConstraintFromSetLeg($leg))) {
            throw new InvalidArgumentException($legArrayErrorMessage, __LINE__);
        }
        if (is_null($leg) || (is_array($leg) && empty($leg))) {
            unset($this->Leg);
        } else {
            $this->Leg = $leg;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Leg|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\Leg
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Leg|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\Leg
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Leg|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\Leg
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Leg|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\Leg
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Leg|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\Leg
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Leg $item
     *
     * @return ArrayOfLeg
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Leg) {
            throw new InvalidArgumentException(sprintf('The Leg property can only contain items of type \Ntvspa\Big\Travel\Structs\Leg, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Leg
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Leg';
    }
}
