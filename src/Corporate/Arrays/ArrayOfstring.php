<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfstring Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfstring
 *
 * @subpackage Arrays
 */
class ArrayOfstring extends AbstractStructArrayBase
{
    /**
     * The string
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string[]|null
     */
    protected ?array $string = null;

    /**
     * Constructor method for ArrayOfstring
     *
     * @param string[] $string
     *
     * @uses ArrayOfstring::setString()
     */
    public function __construct(?array $string = null)
    {
        $this
            ->setString($string);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setString method
     * This method is willingly generated in order to preserve the one-line inline validation within the setString method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStringForArrayConstraintFromSetString(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfstringStringItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfstringStringItem)) {
                $invalidValues[] = is_object($arrayOfstringStringItem) ? get_class($arrayOfstringStringItem) : sprintf('%s(%s)', gettype($arrayOfstringStringItem), var_export($arrayOfstringStringItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The string property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get string value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string[]|null
     */
    public function getString(): ?array
    {
        return $this->string ?? null;
    }

    /**
     * Set string value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string[] $string
     *
     * @return ArrayOfstring
     * @throws InvalidArgumentException
     */
    public function setString(?array $string = null): self
    {
        // validation for constraint: array
        if ('' !== ($stringArrayErrorMessage = self::validateStringForArrayConstraintFromSetString($string))) {
            throw new InvalidArgumentException($stringArrayErrorMessage, __LINE__);
        }
        if (is_null($string) || (is_array($string) && empty($string))) {
            unset($this->string);
        } else {
            $this->string = $string;
        }

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
     * @return string string
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'string';
    }
}
