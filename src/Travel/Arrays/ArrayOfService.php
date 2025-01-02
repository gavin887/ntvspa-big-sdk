<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\Service;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfService Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfService
 *
 * @subpackage Arrays
 */
class ArrayOfService extends AbstractStructArrayBase
{
    /**
     * The Service
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Service[]|null
     */
    protected ?array $Service = null;

    /**
     * Constructor method for ArrayOfService
     *
     * @param Service[] $service
     *
     * @uses ArrayOfService::setService()
     */
    public function __construct(?array $service = null)
    {
        $this
            ->setService($service);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceForArrayConstraintFromSetService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfServiceServiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceServiceItem instanceof Service) {
                $invalidValues[] = is_object($arrayOfServiceServiceItem) ? get_class($arrayOfServiceServiceItem) : sprintf('%s(%s)', gettype($arrayOfServiceServiceItem), var_export($arrayOfServiceServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service property can only contain items of type \Ntvspa\Big\Travel\Structs\Service, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Service value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Service[]|null
     */
    public function getService(): ?array
    {
        return $this->Service ?? null;
    }

    /**
     * Set Service value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Service[] $service
     *
     * @return ArrayOfService
     * @throws InvalidArgumentException
     */
    public function setService(?array $service = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceArrayErrorMessage = self::validateServiceForArrayConstraintFromSetService($service))) {
            throw new InvalidArgumentException($serviceArrayErrorMessage, __LINE__);
        }
        if (is_null($service) || (is_array($service) && empty($service))) {
            unset($this->Service);
        } else {
            $this->Service = $service;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Service|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\Service
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Service|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\Service
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Service|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\Service
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Service|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\Service
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Service|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\Service
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Service $item
     *
     * @return ArrayOfService
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Service) {
            throw new InvalidArgumentException(sprintf('The Service property can only contain items of type \Ntvspa\Big\Travel\Structs\Service, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Service
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Service';
    }
}
