<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\AssignedSSR;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAssignedSSR Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAssignedSSR
 *
 * @subpackage Arrays
 */
class ArrayOfAssignedSSR extends AbstractStructArrayBase
{
    /**
     * The AssignedSSR
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AssignedSSR[]|null
     */
    protected ?array $AssignedSSR = null;

    /**
     * Constructor method for ArrayOfAssignedSSR
     *
     * @param AssignedSSR[] $assignedSSR
     *
     * @uses ArrayOfAssignedSSR::setAssignedSSR()
     */
    public function __construct(?array $assignedSSR = null)
    {
        $this
            ->setAssignedSSR($assignedSSR);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAssignedSSR method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssignedSSR method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssignedSSRForArrayConstraintFromSetAssignedSSR(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAssignedSSRAssignedSSRItem) {
            // validation for constraint: itemType
            if (!$arrayOfAssignedSSRAssignedSSRItem instanceof AssignedSSR) {
                $invalidValues[] = is_object($arrayOfAssignedSSRAssignedSSRItem) ? get_class($arrayOfAssignedSSRAssignedSSRItem) : sprintf('%s(%s)', gettype($arrayOfAssignedSSRAssignedSSRItem), var_export($arrayOfAssignedSSRAssignedSSRItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AssignedSSR property can only contain items of type \Ntvspa\Big\Booking\Structs\AssignedSSR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get AssignedSSR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return AssignedSSR[]|null
     */
    public function getAssignedSSR(): ?array
    {
        return $this->AssignedSSR ?? null;
    }

    /**
     * Set AssignedSSR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param AssignedSSR[] $assignedSSR
     *
     * @return ArrayOfAssignedSSR
     * @throws InvalidArgumentException
     */
    public function setAssignedSSR(?array $assignedSSR = null): self
    {
        // validation for constraint: array
        if ('' !== ($assignedSSRArrayErrorMessage = self::validateAssignedSSRForArrayConstraintFromSetAssignedSSR($assignedSSR))) {
            throw new InvalidArgumentException($assignedSSRArrayErrorMessage, __LINE__);
        }
        if (is_null($assignedSSR) || (is_array($assignedSSR) && empty($assignedSSR))) {
            unset($this->AssignedSSR);
        } else {
            $this->AssignedSSR = $assignedSSR;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return AssignedSSR|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\AssignedSSR
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return AssignedSSR|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\AssignedSSR
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return AssignedSSR|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\AssignedSSR
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return AssignedSSR|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\AssignedSSR
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return AssignedSSR|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\AssignedSSR
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param AssignedSSR $item
     *
     * @return ArrayOfAssignedSSR
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof AssignedSSR) {
            throw new InvalidArgumentException(sprintf('The AssignedSSR property can only contain items of type \Ntvspa\Big\Booking\Structs\AssignedSSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string AssignedSSR
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'AssignedSSR';
    }
}
