<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\Station;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStation Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfStation
 *
 * @subpackage Arrays
 */
class ArrayOfStation extends AbstractStructArrayBase
{
    /**
     * The Station
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Station[]|null
     */
    protected ?array $Station = null;

    /**
     * Constructor method for ArrayOfStation
     *
     * @param Station[] $station
     *
     * @uses ArrayOfStation::setStation()
     */
    public function __construct(?array $station = null)
    {
        $this
            ->setStation($station);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setStation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStation method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStationForArrayConstraintFromSetStation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStationStationItem) {
            // validation for constraint: itemType
            if (!$arrayOfStationStationItem instanceof Station) {
                $invalidValues[] = is_object($arrayOfStationStationItem) ? get_class($arrayOfStationStationItem) : sprintf('%s(%s)', gettype($arrayOfStationStationItem), var_export($arrayOfStationStationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Station property can only contain items of type \Ntvspa\Big\Travel\Structs\Station, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Station value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Station[]|null
     */
    public function getStation(): ?array
    {
        return $this->Station ?? null;
    }

    /**
     * Set Station value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Station[] $station
     *
     * @return ArrayOfStation
     * @throws InvalidArgumentException
     */
    public function setStation(?array $station = null): self
    {
        // validation for constraint: array
        if ('' !== ($stationArrayErrorMessage = self::validateStationForArrayConstraintFromSetStation($station))) {
            throw new InvalidArgumentException($stationArrayErrorMessage, __LINE__);
        }
        if (is_null($station) || (is_array($station) && empty($station))) {
            unset($this->Station);
        } else {
            $this->Station = $station;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Station|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\Station
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Station|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\Station
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Station|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\Station
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Station|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\Station
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Station|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\Station
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Station $item
     *
     * @return ArrayOfStation
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Station) {
            throw new InvalidArgumentException(sprintf('The Station property can only contain items of type \Ntvspa\Big\Travel\Structs\Station, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Station
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Station';
    }
}
