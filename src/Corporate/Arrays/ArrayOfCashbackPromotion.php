<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\CashbackPromotion;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCashbackPromotion Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCashbackPromotion
 *
 * @subpackage Arrays
 */
class ArrayOfCashbackPromotion extends AbstractStructArrayBase
{
    /**
     * The CashbackPromotion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CashbackPromotion[]|null
     */
    protected ?array $CashbackPromotion = null;

    /**
     * Constructor method for ArrayOfCashbackPromotion
     *
     * @param CashbackPromotion[] $cashbackPromotion
     *
     * @uses ArrayOfCashbackPromotion::setCashbackPromotion()
     */
    public function __construct(?array $cashbackPromotion = null)
    {
        $this
            ->setCashbackPromotion($cashbackPromotion);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCashbackPromotion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCashbackPromotion method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCashbackPromotionForArrayConstraintFromSetCashbackPromotion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCashbackPromotionCashbackPromotionItem) {
            // validation for constraint: itemType
            if (!$arrayOfCashbackPromotionCashbackPromotionItem instanceof CashbackPromotion) {
                $invalidValues[] = is_object($arrayOfCashbackPromotionCashbackPromotionItem) ? get_class($arrayOfCashbackPromotionCashbackPromotionItem) : sprintf('%s(%s)', gettype($arrayOfCashbackPromotionCashbackPromotionItem), var_export($arrayOfCashbackPromotionCashbackPromotionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CashbackPromotion property can only contain items of type \Ntvspa\Big\Corporate\Structs\CashbackPromotion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get CashbackPromotion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CashbackPromotion[]|null
     */
    public function getCashbackPromotion(): ?array
    {
        return $this->CashbackPromotion ?? null;
    }

    /**
     * Set CashbackPromotion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CashbackPromotion[] $cashbackPromotion
     *
     * @return ArrayOfCashbackPromotion
     * @throws InvalidArgumentException
     */
    public function setCashbackPromotion(?array $cashbackPromotion = null): self
    {
        // validation for constraint: array
        if ('' !== ($cashbackPromotionArrayErrorMessage = self::validateCashbackPromotionForArrayConstraintFromSetCashbackPromotion($cashbackPromotion))) {
            throw new InvalidArgumentException($cashbackPromotionArrayErrorMessage, __LINE__);
        }
        if (is_null($cashbackPromotion) || (is_array($cashbackPromotion) && empty($cashbackPromotion))) {
            unset($this->CashbackPromotion);
        } else {
            $this->CashbackPromotion = $cashbackPromotion;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return CashbackPromotion|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\CashbackPromotion
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return CashbackPromotion|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\CashbackPromotion
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return CashbackPromotion|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\CashbackPromotion
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return CashbackPromotion|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\CashbackPromotion
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return CashbackPromotion|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\CashbackPromotion
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param CashbackPromotion $item
     *
     * @return ArrayOfCashbackPromotion
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof CashbackPromotion) {
            throw new InvalidArgumentException(sprintf('The CashbackPromotion property can only contain items of type \Ntvspa\Big\Corporate\Structs\CashbackPromotion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string CashbackPromotion
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'CashbackPromotion';
    }
}
