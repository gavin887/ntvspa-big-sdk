<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Customer\Structs\LoyaltyTransaction;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLoyaltyTransaction Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLoyaltyTransaction
 *
 * @subpackage Arrays
 */
class ArrayOfLoyaltyTransaction extends AbstractStructArrayBase
{
    /**
     * The LoyaltyTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var LoyaltyTransaction[]|null
     */
    protected ?array $LoyaltyTransaction = null;

    /**
     * Constructor method for ArrayOfLoyaltyTransaction
     *
     * @param LoyaltyTransaction[] $loyaltyTransaction
     *
     * @uses ArrayOfLoyaltyTransaction::setLoyaltyTransaction()
     */
    public function __construct(?array $loyaltyTransaction = null)
    {
        $this
            ->setLoyaltyTransaction($loyaltyTransaction);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setLoyaltyTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyTransaction method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyTransactionForArrayConstraintFromSetLoyaltyTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLoyaltyTransactionLoyaltyTransactionItem) {
            // validation for constraint: itemType
            if (!$arrayOfLoyaltyTransactionLoyaltyTransactionItem instanceof LoyaltyTransaction) {
                $invalidValues[] = is_object($arrayOfLoyaltyTransactionLoyaltyTransactionItem) ? get_class($arrayOfLoyaltyTransactionLoyaltyTransactionItem) : sprintf('%s(%s)', gettype($arrayOfLoyaltyTransactionLoyaltyTransactionItem), var_export($arrayOfLoyaltyTransactionLoyaltyTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyTransaction property can only contain items of type \Ntvspa\Big\Customer\Structs\LoyaltyTransaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get LoyaltyTransaction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return LoyaltyTransaction[]|null
     */
    public function getLoyaltyTransaction(): ?array
    {
        return $this->LoyaltyTransaction ?? null;
    }

    /**
     * Set LoyaltyTransaction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param LoyaltyTransaction[] $loyaltyTransaction
     *
     * @return ArrayOfLoyaltyTransaction
     * @throws InvalidArgumentException
     */
    public function setLoyaltyTransaction(?array $loyaltyTransaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyTransactionArrayErrorMessage = self::validateLoyaltyTransactionForArrayConstraintFromSetLoyaltyTransaction($loyaltyTransaction))) {
            throw new InvalidArgumentException($loyaltyTransactionArrayErrorMessage, __LINE__);
        }
        if (is_null($loyaltyTransaction) || (is_array($loyaltyTransaction) && empty($loyaltyTransaction))) {
            unset($this->LoyaltyTransaction);
        } else {
            $this->LoyaltyTransaction = $loyaltyTransaction;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return LoyaltyTransaction|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Customer\Structs\LoyaltyTransaction
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return LoyaltyTransaction|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Customer\Structs\LoyaltyTransaction
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return LoyaltyTransaction|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Customer\Structs\LoyaltyTransaction
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return LoyaltyTransaction|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Customer\Structs\LoyaltyTransaction
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return LoyaltyTransaction|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Customer\Structs\LoyaltyTransaction
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param LoyaltyTransaction $item
     *
     * @return ArrayOfLoyaltyTransaction
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof LoyaltyTransaction) {
            throw new InvalidArgumentException(sprintf('The LoyaltyTransaction property can only contain items of type \Ntvspa\Big\Customer\Structs\LoyaltyTransaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string LoyaltyTransaction
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'LoyaltyTransaction';
    }
}
