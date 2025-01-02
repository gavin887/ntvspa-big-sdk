<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\PaxSSR;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPaxSSR Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPaxSSR
 *
 * @subpackage Arrays
 */
class ArrayOfPaxSSR extends AbstractStructArrayBase
{
    /**
     * The PaxSSR
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PaxSSR[]|null
     */
    protected ?array $PaxSSR = null;

    /**
     * Constructor method for ArrayOfPaxSSR
     *
     * @param PaxSSR[] $paxSSR
     *
     * @uses ArrayOfPaxSSR::setPaxSSR()
     */
    public function __construct(?array $paxSSR = null)
    {
        $this
            ->setPaxSSR($paxSSR);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPaxSSR method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaxSSR method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaxSSRForArrayConstraintFromSetPaxSSR(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPaxSSRPaxSSRItem) {
            // validation for constraint: itemType
            if (!$arrayOfPaxSSRPaxSSRItem instanceof PaxSSR) {
                $invalidValues[] = is_object($arrayOfPaxSSRPaxSSRItem) ? get_class($arrayOfPaxSSRPaxSSRItem) : sprintf('%s(%s)', gettype($arrayOfPaxSSRPaxSSRItem), var_export($arrayOfPaxSSRPaxSSRItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaxSSR property can only contain items of type \Ntvspa\Big\Booking\Structs\PaxSSR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get PaxSSR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PaxSSR[]|null
     */
    public function getPaxSSR(): ?array
    {
        return $this->PaxSSR ?? null;
    }

    /**
     * Set PaxSSR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PaxSSR[] $paxSSR
     *
     * @return ArrayOfPaxSSR
     * @throws InvalidArgumentException
     */
    public function setPaxSSR(?array $paxSSR = null): self
    {
        // validation for constraint: array
        if ('' !== ($paxSSRArrayErrorMessage = self::validatePaxSSRForArrayConstraintFromSetPaxSSR($paxSSR))) {
            throw new InvalidArgumentException($paxSSRArrayErrorMessage, __LINE__);
        }
        if (is_null($paxSSR) || (is_array($paxSSR) && empty($paxSSR))) {
            unset($this->PaxSSR);
        } else {
            $this->PaxSSR = $paxSSR;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return PaxSSR|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\PaxSSR
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return PaxSSR|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\PaxSSR
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return PaxSSR|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\PaxSSR
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return PaxSSR|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\PaxSSR
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return PaxSSR|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\PaxSSR
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param PaxSSR $item
     *
     * @return ArrayOfPaxSSR
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof PaxSSR) {
            throw new InvalidArgumentException(sprintf('The PaxSSR property can only contain items of type \Ntvspa\Big\Booking\Structs\PaxSSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string PaxSSR
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'PaxSSR';
    }
}
