<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Customer\Structs\InvoiceProfile;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInvoiceProfile Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInvoiceProfile
 *
 * @subpackage Arrays
 */
class ArrayOfInvoiceProfile extends AbstractStructArrayBase
{
    /**
     * The InvoiceProfile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var InvoiceProfile[]|null
     */
    protected ?array $InvoiceProfile = null;

    /**
     * Constructor method for ArrayOfInvoiceProfile
     *
     * @param InvoiceProfile[] $invoiceProfile
     *
     * @uses ArrayOfInvoiceProfile::setInvoiceProfile()
     */
    public function __construct(?array $invoiceProfile = null)
    {
        $this
            ->setInvoiceProfile($invoiceProfile);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setInvoiceProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoiceProfile method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvoiceProfileForArrayConstraintFromSetInvoiceProfile(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInvoiceProfileInvoiceProfileItem) {
            // validation for constraint: itemType
            if (!$arrayOfInvoiceProfileInvoiceProfileItem instanceof InvoiceProfile) {
                $invalidValues[] = is_object($arrayOfInvoiceProfileInvoiceProfileItem) ? get_class($arrayOfInvoiceProfileInvoiceProfileItem) : sprintf('%s(%s)', gettype($arrayOfInvoiceProfileInvoiceProfileItem), var_export($arrayOfInvoiceProfileInvoiceProfileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InvoiceProfile property can only contain items of type \Ntvspa\Big\Customer\Structs\InvoiceProfile, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get InvoiceProfile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return InvoiceProfile[]|null
     */
    public function getInvoiceProfile(): ?array
    {
        return $this->InvoiceProfile ?? null;
    }

    /**
     * Set InvoiceProfile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param InvoiceProfile[] $invoiceProfile
     *
     * @return ArrayOfInvoiceProfile
     * @throws InvalidArgumentException
     */
    public function setInvoiceProfile(?array $invoiceProfile = null): self
    {
        // validation for constraint: array
        if ('' !== ($invoiceProfileArrayErrorMessage = self::validateInvoiceProfileForArrayConstraintFromSetInvoiceProfile($invoiceProfile))) {
            throw new InvalidArgumentException($invoiceProfileArrayErrorMessage, __LINE__);
        }
        if (is_null($invoiceProfile) || (is_array($invoiceProfile) && empty($invoiceProfile))) {
            unset($this->InvoiceProfile);
        } else {
            $this->InvoiceProfile = $invoiceProfile;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return InvoiceProfile|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Customer\Structs\InvoiceProfile
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return InvoiceProfile|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Customer\Structs\InvoiceProfile
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return InvoiceProfile|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Customer\Structs\InvoiceProfile
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return InvoiceProfile|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Customer\Structs\InvoiceProfile
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return InvoiceProfile|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Customer\Structs\InvoiceProfile
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param InvoiceProfile $item
     *
     * @return ArrayOfInvoiceProfile
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof InvoiceProfile) {
            throw new InvalidArgumentException(sprintf('The InvoiceProfile property can only contain items of type \Ntvspa\Big\Customer\Structs\InvoiceProfile, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string InvoiceProfile
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'InvoiceProfile';
    }
}
