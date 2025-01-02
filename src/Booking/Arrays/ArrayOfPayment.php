<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\Payment;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPayment Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPayment
 *
 * @subpackage Arrays
 */
class ArrayOfPayment extends AbstractStructArrayBase
{
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Payment[]|null
     */
    protected ?array $Payment = null;

    /**
     * Constructor method for ArrayOfPayment
     *
     * @param Payment[] $payment
     *
     * @uses ArrayOfPayment::setPayment()
     */
    public function __construct(?array $payment = null)
    {
        $this
            ->setPayment($payment);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentForArrayConstraintFromSetPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPaymentPaymentItem) {
            // validation for constraint: itemType
            if (!$arrayOfPaymentPaymentItem instanceof Payment) {
                $invalidValues[] = is_object($arrayOfPaymentPaymentItem) ? get_class($arrayOfPaymentPaymentItem) : sprintf('%s(%s)', gettype($arrayOfPaymentPaymentItem), var_export($arrayOfPaymentPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payment property can only contain items of type \Ntvspa\Big\Booking\Structs\Payment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Payment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Payment[]|null
     */
    public function getPayment(): ?array
    {
        return $this->Payment ?? null;
    }

    /**
     * Set Payment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Payment[] $payment
     *
     * @return ArrayOfPayment
     * @throws InvalidArgumentException
     */
    public function setPayment(?array $payment = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentArrayErrorMessage = self::validatePaymentForArrayConstraintFromSetPayment($payment))) {
            throw new InvalidArgumentException($paymentArrayErrorMessage, __LINE__);
        }
        if (is_null($payment) || (is_array($payment) && empty($payment))) {
            unset($this->Payment);
        } else {
            $this->Payment = $payment;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Payment|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\Payment
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Payment|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\Payment
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Payment|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\Payment
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Payment|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\Payment
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Payment|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\Payment
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Payment $item
     *
     * @return ArrayOfPayment
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Payment) {
            throw new InvalidArgumentException(sprintf('The Payment property can only contain items of type \Ntvspa\Big\Booking\Structs\Payment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Payment
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Payment';
    }
}
