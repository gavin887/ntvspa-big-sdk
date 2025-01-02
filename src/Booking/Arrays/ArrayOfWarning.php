<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\Warning;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWarning Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWarning
 *
 * @subpackage Arrays
 */
class ArrayOfWarning extends AbstractStructArrayBase
{
    /**
     * The Warning
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Warning[]|null
     */
    protected ?array $Warning = null;

    /**
     * Constructor method for ArrayOfWarning
     *
     * @param Warning[] $warning
     *
     * @uses ArrayOfWarning::setWarning()
     */
    public function __construct(?array $warning = null)
    {
        $this
            ->setWarning($warning);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setWarning method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWarning method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWarningForArrayConstraintFromSetWarning(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWarningWarningItem) {
            // validation for constraint: itemType
            if (!$arrayOfWarningWarningItem instanceof Warning) {
                $invalidValues[] = is_object($arrayOfWarningWarningItem) ? get_class($arrayOfWarningWarningItem) : sprintf('%s(%s)', gettype($arrayOfWarningWarningItem), var_export($arrayOfWarningWarningItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Warning property can only contain items of type \Ntvspa\Big\Booking\Structs\Warning, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Warning value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Warning[]|null
     */
    public function getWarning(): ?array
    {
        return $this->Warning ?? null;
    }

    /**
     * Set Warning value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Warning[] $warning
     *
     * @return ArrayOfWarning
     * @throws InvalidArgumentException
     */
    public function setWarning(?array $warning = null): self
    {
        // validation for constraint: array
        if ('' !== ($warningArrayErrorMessage = self::validateWarningForArrayConstraintFromSetWarning($warning))) {
            throw new InvalidArgumentException($warningArrayErrorMessage, __LINE__);
        }
        if (is_null($warning) || (is_array($warning) && empty($warning))) {
            unset($this->Warning);
        } else {
            $this->Warning = $warning;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Warning|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\Warning
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Warning|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\Warning
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Warning|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\Warning
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Warning|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\Warning
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Warning|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\Warning
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Warning $item
     *
     * @return ArrayOfWarning
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Warning) {
            throw new InvalidArgumentException(sprintf('The Warning property can only contain items of type \Ntvspa\Big\Booking\Structs\Warning, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Warning
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Warning';
    }
}
