<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\Offer;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOffer Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOffer
 *
 * @subpackage Arrays
 */
class ArrayOfOffer extends AbstractStructArrayBase
{
    /**
     * The Offer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Offer[]|null
     */
    protected ?array $Offer = null;

    /**
     * Constructor method for ArrayOfOffer
     *
     * @param Offer[] $offer
     *
     * @uses ArrayOfOffer::setOffer()
     */
    public function __construct(?array $offer = null)
    {
        $this
            ->setOffer($offer);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOffer method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOfferForArrayConstraintFromSetOffer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOfferOfferItem) {
            // validation for constraint: itemType
            if (!$arrayOfOfferOfferItem instanceof Offer) {
                $invalidValues[] = is_object($arrayOfOfferOfferItem) ? get_class($arrayOfOfferOfferItem) : sprintf('%s(%s)', gettype($arrayOfOfferOfferItem), var_export($arrayOfOfferOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Offer property can only contain items of type \Ntvspa\Big\Product\Structs\Offer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Offer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Offer[]|null
     */
    public function getOffer(): ?array
    {
        return $this->Offer ?? null;
    }

    /**
     * Set Offer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Offer[] $offer
     *
     * @return ArrayOfOffer
     * @throws InvalidArgumentException
     */
    public function setOffer(?array $offer = null): self
    {
        // validation for constraint: array
        if ('' !== ($offerArrayErrorMessage = self::validateOfferForArrayConstraintFromSetOffer($offer))) {
            throw new InvalidArgumentException($offerArrayErrorMessage, __LINE__);
        }
        if (is_null($offer) || (is_array($offer) && empty($offer))) {
            unset($this->Offer);
        } else {
            $this->Offer = $offer;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Offer|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\Offer
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Offer|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\Offer
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Offer|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\Offer
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Offer|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\Offer
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Offer|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\Offer
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Offer $item
     *
     * @return ArrayOfOffer
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Offer) {
            throw new InvalidArgumentException(sprintf('The Offer property can only contain items of type \Ntvspa\Big\Product\Structs\Offer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Offer
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Offer';
    }
}
