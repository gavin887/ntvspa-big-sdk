<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\Transaction;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTransaction Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTransaction
 *
 * @subpackage Arrays
 */
class ArrayOfTransaction extends AbstractStructArrayBase
{
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Transaction[]|null
     */
    protected ?array $Transaction = null;

    /**
     * Constructor method for ArrayOfTransaction
     *
     * @param Transaction[] $transaction
     *
     * @uses ArrayOfTransaction::setTransaction()
     */
    public function __construct(?array $transaction = null)
    {
        $this
            ->setTransaction($transaction);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransactionForArrayConstraintFromSetTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTransactionTransactionItem) {
            // validation for constraint: itemType
            if (!$arrayOfTransactionTransactionItem instanceof Transaction) {
                $invalidValues[] = is_object($arrayOfTransactionTransactionItem) ? get_class($arrayOfTransactionTransactionItem) : sprintf('%s(%s)', gettype($arrayOfTransactionTransactionItem), var_export($arrayOfTransactionTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction property can only contain items of type \Ntvspa\Big\Product\Structs\Transaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Transaction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Transaction[]|null
     */
    public function getTransaction(): ?array
    {
        return $this->Transaction ?? null;
    }

    /**
     * Set Transaction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Transaction[] $transaction
     *
     * @return ArrayOfTransaction
     * @throws InvalidArgumentException
     */
    public function setTransaction(?array $transaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($transactionArrayErrorMessage = self::validateTransactionForArrayConstraintFromSetTransaction($transaction))) {
            throw new InvalidArgumentException($transactionArrayErrorMessage, __LINE__);
        }
        if (is_null($transaction) || (is_array($transaction) && empty($transaction))) {
            unset($this->Transaction);
        } else {
            $this->Transaction = $transaction;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Transaction|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\Transaction
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Transaction|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\Transaction
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Transaction|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\Transaction
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Transaction|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\Transaction
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Transaction|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\Transaction
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Transaction $item
     *
     * @return ArrayOfTransaction
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Transaction) {
            throw new InvalidArgumentException(sprintf('The Transaction property can only contain items of type \Ntvspa\Big\Product\Structs\Transaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Transaction
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Transaction';
    }
}
