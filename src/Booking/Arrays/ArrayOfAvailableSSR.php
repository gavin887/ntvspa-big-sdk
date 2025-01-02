<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\AvailableSSR;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAvailableSSR Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAvailableSSR
 *
 * @subpackage Arrays
 */
class ArrayOfAvailableSSR extends AbstractStructArrayBase
{
    /**
     * The AvailableSSR
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AvailableSSR[]|null
     */
    protected ?array $AvailableSSR = null;

    /**
     * Constructor method for ArrayOfAvailableSSR
     *
     * @param AvailableSSR[] $availableSSR
     *
     * @uses ArrayOfAvailableSSR::setAvailableSSR()
     */
    public function __construct(?array $availableSSR = null)
    {
        $this
            ->setAvailableSSR($availableSSR);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAvailableSSR method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAvailableSSR method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAvailableSSRForArrayConstraintFromSetAvailableSSR(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAvailableSSRAvailableSSRItem) {
            // validation for constraint: itemType
            if (!$arrayOfAvailableSSRAvailableSSRItem instanceof AvailableSSR) {
                $invalidValues[] = is_object($arrayOfAvailableSSRAvailableSSRItem) ? get_class($arrayOfAvailableSSRAvailableSSRItem) : sprintf('%s(%s)', gettype($arrayOfAvailableSSRAvailableSSRItem), var_export($arrayOfAvailableSSRAvailableSSRItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AvailableSSR property can only contain items of type \Ntvspa\Big\Booking\Structs\AvailableSSR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get AvailableSSR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return AvailableSSR[]|null
     */
    public function getAvailableSSR(): ?array
    {
        return $this->AvailableSSR ?? null;
    }

    /**
     * Set AvailableSSR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param AvailableSSR[] $availableSSR
     *
     * @return ArrayOfAvailableSSR
     * @throws InvalidArgumentException
     */
    public function setAvailableSSR(?array $availableSSR = null): self
    {
        // validation for constraint: array
        if ('' !== ($availableSSRArrayErrorMessage = self::validateAvailableSSRForArrayConstraintFromSetAvailableSSR($availableSSR))) {
            throw new InvalidArgumentException($availableSSRArrayErrorMessage, __LINE__);
        }
        if (is_null($availableSSR) || (is_array($availableSSR) && empty($availableSSR))) {
            unset($this->AvailableSSR);
        } else {
            $this->AvailableSSR = $availableSSR;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return AvailableSSR|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\AvailableSSR
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return AvailableSSR|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\AvailableSSR
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return AvailableSSR|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\AvailableSSR
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return AvailableSSR|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\AvailableSSR
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return AvailableSSR|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\AvailableSSR
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param AvailableSSR $item
     *
     * @return ArrayOfAvailableSSR
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof AvailableSSR) {
            throw new InvalidArgumentException(sprintf('The AvailableSSR property can only contain items of type \Ntvspa\Big\Booking\Structs\AvailableSSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string AvailableSSR
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'AvailableSSR';
    }
}
