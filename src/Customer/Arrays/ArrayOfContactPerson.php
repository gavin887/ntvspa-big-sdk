<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Customer\Structs\ContactPerson;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfContactPerson Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfContactPerson
 *
 * @subpackage Arrays
 */
class ArrayOfContactPerson extends AbstractStructArrayBase
{
    /**
     * The ContactPerson
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ContactPerson[]|null
     */
    protected ?array $ContactPerson = null;

    /**
     * Constructor method for ArrayOfContactPerson
     *
     * @param ContactPerson[] $contactPerson
     *
     * @uses ArrayOfContactPerson::setContactPerson()
     */
    public function __construct(?array $contactPerson = null)
    {
        $this
            ->setContactPerson($contactPerson);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setContactPerson method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContactPerson method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContactPersonForArrayConstraintFromSetContactPerson(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfContactPersonContactPersonItem) {
            // validation for constraint: itemType
            if (!$arrayOfContactPersonContactPersonItem instanceof ContactPerson) {
                $invalidValues[] = is_object($arrayOfContactPersonContactPersonItem) ? get_class($arrayOfContactPersonContactPersonItem) : sprintf('%s(%s)', gettype($arrayOfContactPersonContactPersonItem), var_export($arrayOfContactPersonContactPersonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContactPerson property can only contain items of type \Ntvspa\Big\Customer\Structs\ContactPerson, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get ContactPerson value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ContactPerson[]|null
     */
    public function getContactPerson(): ?array
    {
        return $this->ContactPerson ?? null;
    }

    /**
     * Set ContactPerson value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ContactPerson[] $contactPerson
     *
     * @return ArrayOfContactPerson
     * @throws InvalidArgumentException
     */
    public function setContactPerson(?array $contactPerson = null): self
    {
        // validation for constraint: array
        if ('' !== ($contactPersonArrayErrorMessage = self::validateContactPersonForArrayConstraintFromSetContactPerson($contactPerson))) {
            throw new InvalidArgumentException($contactPersonArrayErrorMessage, __LINE__);
        }
        if (is_null($contactPerson) || (is_array($contactPerson) && empty($contactPerson))) {
            unset($this->ContactPerson);
        } else {
            $this->ContactPerson = $contactPerson;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return ContactPerson|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Customer\Structs\ContactPerson
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return ContactPerson|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Customer\Structs\ContactPerson
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return ContactPerson|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Customer\Structs\ContactPerson
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return ContactPerson|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Customer\Structs\ContactPerson
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return ContactPerson|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Customer\Structs\ContactPerson
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param ContactPerson $item
     *
     * @return ArrayOfContactPerson
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ContactPerson) {
            throw new InvalidArgumentException(sprintf('The ContactPerson property can only contain items of type \Ntvspa\Big\Customer\Structs\ContactPerson, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string ContactPerson
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'ContactPerson';
    }
}
