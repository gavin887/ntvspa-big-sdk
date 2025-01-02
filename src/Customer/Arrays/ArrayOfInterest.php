<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\Interest;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInterest Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInterest
 *
 * @subpackage Arrays
 */
class ArrayOfInterest extends AbstractStructArrayBase
{
    /**
     * The Interest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var string[]
     */
    protected ?array $Interest = null;

    /**
     * Constructor method for ArrayOfInterest
     *
     * @param string[] $interest
     *
     * @uses ArrayOfInterest::setInterest()
     */
    public function __construct(?array $interest = null)
    {
        $this
            ->setInterest($interest);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setInterest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInterest method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInterestForArrayConstraintFromSetInterest(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInterestInterestItem) {
            // validation for constraint: enumeration
            if (!\Ntvspa\Big\Customer\Enums\Interest::valueIsValid($arrayOfInterestInterestItem)) {
                $invalidValues[] = is_object($arrayOfInterestInterestItem) ? get_class($arrayOfInterestInterestItem) : sprintf('%s(%s)', gettype($arrayOfInterestInterestItem), var_export($arrayOfInterestInterestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Interest', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', Interest::getValidValues()));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Interest value
     *
     * @return string[]
     */
    public function getInterest(): ?array
    {
        return $this->Interest;
    }

    /**
     * Set Interest value
     *
     * @param string[] $interest
     *
     * @return ArrayOfInterest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Interest::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Interest::valueIsValid()
     */
    public function setInterest(?array $interest = null): self
    {
        // validation for constraint: array
        if ('' !== ($interestArrayErrorMessage = self::validateInterestForArrayConstraintFromSetInterest($interest))) {
            throw new InvalidArgumentException($interestArrayErrorMessage, __LINE__);
        }
        $this->Interest = $interest;

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return string|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?string
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return string|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return string|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?string
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return string|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?string
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return string|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param string $item
     *
     * @return ArrayOfInterest
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Interest::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Interest', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', Interest::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Interest
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Interest';
    }
}
