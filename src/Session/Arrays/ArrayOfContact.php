<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Session\Structs\Contact;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfContact Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfContact
 *
 * @subpackage Arrays
 */
class ArrayOfContact extends AbstractStructArrayBase
{
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Contact[]|null
     */
    protected ?array $Contact = null;

    /**
     * Constructor method for ArrayOfContact
     *
     * @param Contact[] $contact
     *
     * @uses ArrayOfContact::setContact()
     */
    public function __construct(?array $contact = null)
    {
        $this
            ->setContact($contact);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setContact method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContactForArrayConstraintFromSetContact(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfContactContactItem) {
            // validation for constraint: itemType
            if (!$arrayOfContactContactItem instanceof Contact) {
                $invalidValues[] = is_object($arrayOfContactContactItem) ? get_class($arrayOfContactContactItem) : sprintf('%s(%s)', gettype($arrayOfContactContactItem), var_export($arrayOfContactContactItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact property can only contain items of type \Ntvspa\Big\Session\Structs\Contact, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Contact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Contact[]|null
     */
    public function getContact(): ?array
    {
        return $this->Contact ?? null;
    }

    /**
     * Set Contact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Contact[] $contact
     *
     * @return ArrayOfContact
     * @throws InvalidArgumentException
     */
    public function setContact(?array $contact = null): self
    {
        // validation for constraint: array
        if ('' !== ($contactArrayErrorMessage = self::validateContactForArrayConstraintFromSetContact($contact))) {
            throw new InvalidArgumentException($contactArrayErrorMessage, __LINE__);
        }
        if (is_null($contact) || (is_array($contact) && empty($contact))) {
            unset($this->Contact);
        } else {
            $this->Contact = $contact;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Contact|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Session\Structs\Contact
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Contact|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Session\Structs\Contact
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Contact|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Session\Structs\Contact
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Contact|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Session\Structs\Contact
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Contact|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Session\Structs\Contact
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Contact $item
     *
     * @return ArrayOfContact
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Contact) {
            throw new InvalidArgumentException(sprintf('The Contact property can only contain items of type \Ntvspa\Big\Session\Structs\Contact, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Contact
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Contact';
    }
}
