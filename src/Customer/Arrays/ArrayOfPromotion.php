<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Customer\Structs\Promotion;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPromotion Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPromotion
 *
 * @subpackage Arrays
 */
class ArrayOfPromotion extends AbstractStructArrayBase
{
    /**
     * The Promotion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Promotion[]|null
     */
    protected ?array $Promotion = null;

    /**
     * Constructor method for ArrayOfPromotion
     *
     * @param Promotion[] $promotion
     *
     * @uses ArrayOfPromotion::setPromotion()
     */
    public function __construct(?array $promotion = null)
    {
        $this
            ->setPromotion($promotion);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPromotion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotion method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotionForArrayConstraintFromSetPromotion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPromotionPromotionItem) {
            // validation for constraint: itemType
            if (!$arrayOfPromotionPromotionItem instanceof Promotion) {
                $invalidValues[] = is_object($arrayOfPromotionPromotionItem) ? get_class($arrayOfPromotionPromotionItem) : sprintf('%s(%s)', gettype($arrayOfPromotionPromotionItem), var_export($arrayOfPromotionPromotionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Promotion property can only contain items of type \Ntvspa\Big\Customer\Structs\Promotion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Promotion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Promotion[]|null
     */
    public function getPromotion(): ?array
    {
        return $this->Promotion ?? null;
    }

    /**
     * Set Promotion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Promotion[] $promotion
     *
     * @return ArrayOfPromotion
     * @throws InvalidArgumentException
     */
    public function setPromotion(?array $promotion = null): self
    {
        // validation for constraint: array
        if ('' !== ($promotionArrayErrorMessage = self::validatePromotionForArrayConstraintFromSetPromotion($promotion))) {
            throw new InvalidArgumentException($promotionArrayErrorMessage, __LINE__);
        }
        if (is_null($promotion) || (is_array($promotion) && empty($promotion))) {
            unset($this->Promotion);
        } else {
            $this->Promotion = $promotion;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Promotion|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Customer\Structs\Promotion
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Promotion|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Customer\Structs\Promotion
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Promotion|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Customer\Structs\Promotion
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Promotion|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Customer\Structs\Promotion
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Promotion|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Customer\Structs\Promotion
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Promotion $item
     *
     * @return ArrayOfPromotion
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Promotion) {
            throw new InvalidArgumentException(sprintf('The Promotion property can only contain items of type \Ntvspa\Big\Customer\Structs\Promotion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Promotion
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Promotion';
    }
}
