<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\TravelAgencyInfo;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTravelAgencyInfo Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTravelAgencyInfo
 *
 * @subpackage Arrays
 */
class ArrayOfTravelAgencyInfo extends AbstractStructArrayBase
{
    /**
     * The TravelAgencyInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var TravelAgencyInfo[]|null
     */
    protected ?array $TravelAgencyInfo = null;

    /**
     * Constructor method for ArrayOfTravelAgencyInfo
     *
     * @param TravelAgencyInfo[] $travelAgencyInfo
     *
     * @uses ArrayOfTravelAgencyInfo::setTravelAgencyInfo()
     */
    public function __construct(?array $travelAgencyInfo = null)
    {
        $this
            ->setTravelAgencyInfo($travelAgencyInfo);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setTravelAgencyInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelAgencyInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelAgencyInfoForArrayConstraintFromSetTravelAgencyInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTravelAgencyInfoTravelAgencyInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTravelAgencyInfoTravelAgencyInfoItem instanceof TravelAgencyInfo) {
                $invalidValues[] = is_object($arrayOfTravelAgencyInfoTravelAgencyInfoItem) ? get_class($arrayOfTravelAgencyInfoTravelAgencyInfoItem) : sprintf('%s(%s)', gettype($arrayOfTravelAgencyInfoTravelAgencyInfoItem), var_export($arrayOfTravelAgencyInfoTravelAgencyInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelAgencyInfo property can only contain items of type \Ntvspa\Big\Corporate\Structs\TravelAgencyInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get TravelAgencyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return TravelAgencyInfo[]|null
     */
    public function getTravelAgencyInfo(): ?array
    {
        return $this->TravelAgencyInfo ?? null;
    }

    /**
     * Set TravelAgencyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param TravelAgencyInfo[] $travelAgencyInfo
     *
     * @return ArrayOfTravelAgencyInfo
     * @throws InvalidArgumentException
     */
    public function setTravelAgencyInfo(?array $travelAgencyInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelAgencyInfoArrayErrorMessage = self::validateTravelAgencyInfoForArrayConstraintFromSetTravelAgencyInfo($travelAgencyInfo))) {
            throw new InvalidArgumentException($travelAgencyInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($travelAgencyInfo) || (is_array($travelAgencyInfo) && empty($travelAgencyInfo))) {
            unset($this->TravelAgencyInfo);
        } else {
            $this->TravelAgencyInfo = $travelAgencyInfo;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return TravelAgencyInfo|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return TravelAgencyInfo|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return TravelAgencyInfo|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return TravelAgencyInfo|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return TravelAgencyInfo|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param TravelAgencyInfo $item
     *
     * @return ArrayOfTravelAgencyInfo
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof TravelAgencyInfo) {
            throw new InvalidArgumentException(sprintf('The TravelAgencyInfo property can only contain items of type \Ntvspa\Big\Corporate\Structs\TravelAgencyInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string TravelAgencyInfo
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'TravelAgencyInfo';
    }
}
