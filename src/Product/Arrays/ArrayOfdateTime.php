<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfdateTime Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfdateTime
 *
 * @subpackage Arrays
 */
class ArrayOfdateTime extends AbstractStructArrayBase
{
    /**
     * The dateTime
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var string[]
     */
    protected ?array $dateTime = null;

    /**
     * Constructor method for ArrayOfdateTime
     *
     * @param string[] $dateTime
     *
     * @uses ArrayOfdateTime::setDateTime()
     */
    public function __construct(?array $dateTime = null)
    {
        $this
            ->setDateTime($dateTime);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setDateTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDateTime method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDateTimeForArrayConstraintFromSetDateTime(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfdateTimeDateTimeItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfdateTimeDateTimeItem)) {
                $invalidValues[] = is_object($arrayOfdateTimeDateTimeItem) ? get_class($arrayOfdateTimeDateTimeItem) : sprintf('%s(%s)', gettype($arrayOfdateTimeDateTimeItem), var_export($arrayOfdateTimeDateTimeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dateTime property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get dateTime value
     *
     * @return string[]
     */
    public function getDateTime(): ?array
    {
        return $this->dateTime;
    }

    /**
     * Set dateTime value
     *
     * @param string[] $dateTime
     *
     * @return ArrayOfdateTime
     * @throws InvalidArgumentException
     */
    public function setDateTime(?array $dateTime = null): self
    {
        // validation for constraint: array
        if ('' !== ($dateTimeArrayErrorMessage = self::validateDateTimeForArrayConstraintFromSetDateTime($dateTime))) {
            throw new InvalidArgumentException($dateTimeArrayErrorMessage, __LINE__);
        }
        $this->dateTime = $dateTime;

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
     * Returns the attribute name
     *
     * @return string dateTime
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'dateTime';
    }
}
