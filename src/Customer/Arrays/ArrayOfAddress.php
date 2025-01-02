<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Customer\Structs\Address;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAddress Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAddress
 *
 * @subpackage Arrays
 */
class ArrayOfAddress extends AbstractStructArrayBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Address[]|null
     */
    protected ?array $Address = null;

    /**
     * Constructor method for ArrayOfAddress
     *
     * @param Address[] $address
     *
     * @uses ArrayOfAddress::setAddress()
     */
    public function __construct(?array $address = null)
    {
        $this
            ->setAddress($address);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressForArrayConstraintFromSetAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAddressAddressItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddressAddressItem instanceof Address) {
                $invalidValues[] = is_object($arrayOfAddressAddressItem) ? get_class($arrayOfAddressAddressItem) : sprintf('%s(%s)', gettype($arrayOfAddressAddressItem), var_export($arrayOfAddressAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address property can only contain items of type \Ntvspa\Big\Customer\Structs\Address, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Address[]|null
     */
    public function getAddress(): ?array
    {
        return $this->Address ?? null;
    }

    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Address[] $address
     *
     * @return ArrayOfAddress
     * @throws InvalidArgumentException
     */
    public function setAddress(?array $address = null): self
    {
        // validation for constraint: array
        if ('' !== ($addressArrayErrorMessage = self::validateAddressForArrayConstraintFromSetAddress($address))) {
            throw new InvalidArgumentException($addressArrayErrorMessage, __LINE__);
        }
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Address|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Customer\Structs\Address
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Address|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Customer\Structs\Address
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Address|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Customer\Structs\Address
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Address|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Customer\Structs\Address
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Address|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Customer\Structs\Address
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Address $item
     *
     * @return ArrayOfAddress
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Address) {
            throw new InvalidArgumentException(sprintf('The Address property can only contain items of type \Ntvspa\Big\Customer\Structs\Address, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Address
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Address';
    }
}
