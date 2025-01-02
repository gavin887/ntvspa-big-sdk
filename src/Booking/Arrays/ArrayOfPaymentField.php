<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\PaymentField;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPaymentField Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPaymentField
 *
 * @subpackage Arrays
 */
class ArrayOfPaymentField extends AbstractStructArrayBase
{
    /**
     * The PaymentField
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PaymentField[]|null
     */
    protected ?array $PaymentField = null;

    /**
     * Constructor method for ArrayOfPaymentField
     *
     * @param PaymentField[] $paymentField
     *
     * @uses ArrayOfPaymentField::setPaymentField()
     */
    public function __construct(?array $paymentField = null)
    {
        $this
            ->setPaymentField($paymentField);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPaymentField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentField method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentFieldForArrayConstraintFromSetPaymentField(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPaymentFieldPaymentFieldItem) {
            // validation for constraint: itemType
            if (!$arrayOfPaymentFieldPaymentFieldItem instanceof PaymentField) {
                $invalidValues[] = is_object($arrayOfPaymentFieldPaymentFieldItem) ? get_class($arrayOfPaymentFieldPaymentFieldItem) : sprintf('%s(%s)', gettype($arrayOfPaymentFieldPaymentFieldItem), var_export($arrayOfPaymentFieldPaymentFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentField property can only contain items of type \Ntvspa\Big\Booking\Structs\PaymentField, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get PaymentField value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PaymentField[]|null
     */
    public function getPaymentField(): ?array
    {
        return $this->PaymentField ?? null;
    }

    /**
     * Set PaymentField value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PaymentField[] $paymentField
     *
     * @return ArrayOfPaymentField
     * @throws InvalidArgumentException
     */
    public function setPaymentField(?array $paymentField = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentFieldArrayErrorMessage = self::validatePaymentFieldForArrayConstraintFromSetPaymentField($paymentField))) {
            throw new InvalidArgumentException($paymentFieldArrayErrorMessage, __LINE__);
        }
        if (is_null($paymentField) || (is_array($paymentField) && empty($paymentField))) {
            unset($this->PaymentField);
        } else {
            $this->PaymentField = $paymentField;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return PaymentField|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\PaymentField
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return PaymentField|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\PaymentField
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return PaymentField|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\PaymentField
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return PaymentField|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\PaymentField
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return PaymentField|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\PaymentField
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param PaymentField $item
     *
     * @return ArrayOfPaymentField
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof PaymentField) {
            throw new InvalidArgumentException(sprintf('The PaymentField property can only contain items of type \Ntvspa\Big\Booking\Structs\PaymentField, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string PaymentField
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'PaymentField';
    }
}
