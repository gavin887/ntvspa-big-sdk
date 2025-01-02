<?php

declare(strict_types=1);

namespace Ntvspa\Big\Operation\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Operation\Enums\ResultStatus;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfResultStatus Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfResultStatus
 *
 * @subpackage Arrays
 */
class ArrayOfResultStatus extends AbstractStructArrayBase
{
    /**
     * The ResultStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var string[]
     */
    protected ?array $ResultStatus = null;

    /**
     * Constructor method for ArrayOfResultStatus
     *
     * @param string[] $resultStatus
     *
     * @uses ArrayOfResultStatus::setResultStatus()
     */
    public function __construct(?array $resultStatus = null)
    {
        $this
            ->setResultStatus($resultStatus);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setResultStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResultStatus method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResultStatusForArrayConstraintFromSetResultStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfResultStatusResultStatusItem) {
            // validation for constraint: enumeration
            if (!\Ntvspa\Big\Operation\Enums\ResultStatus::valueIsValid($arrayOfResultStatusResultStatusItem)) {
                $invalidValues[] = is_object($arrayOfResultStatusResultStatusItem) ? get_class($arrayOfResultStatusResultStatusItem) : sprintf('%s(%s)', gettype($arrayOfResultStatusResultStatusItem), var_export($arrayOfResultStatusResultStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Operation\Enums\ResultStatus', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', ResultStatus::getValidValues()));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get ResultStatus value
     *
     * @return string[]
     */
    public function getResultStatus(): ?array
    {
        return $this->ResultStatus;
    }

    /**
     * Set ResultStatus value
     *
     * @param string[] $resultStatus
     *
     * @return ArrayOfResultStatus
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Operation\Enums\ResultStatus::getValidValues()
     * @uses \Ntvspa\Big\Operation\Enums\ResultStatus::valueIsValid()
     */
    public function setResultStatus(?array $resultStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($resultStatusArrayErrorMessage = self::validateResultStatusForArrayConstraintFromSetResultStatus($resultStatus))) {
            throw new InvalidArgumentException($resultStatusArrayErrorMessage, __LINE__);
        }
        $this->ResultStatus = $resultStatus;

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
     * @return ArrayOfResultStatus
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Operation\Enums\ResultStatus::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Operation\Enums\ResultStatus', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', ResultStatus::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string ResultStatus
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'ResultStatus';
    }
}
