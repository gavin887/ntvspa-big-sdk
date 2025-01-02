<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\TravelAgencyNetwork;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTravelAgencyNetwork Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTravelAgencyNetwork
 *
 * @subpackage Arrays
 */
class ArrayOfTravelAgencyNetwork extends AbstractStructArrayBase
{
    /**
     * The TravelAgencyNetwork
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var TravelAgencyNetwork[]|null
     */
    protected ?array $TravelAgencyNetwork = null;

    /**
     * Constructor method for ArrayOfTravelAgencyNetwork
     *
     * @param TravelAgencyNetwork[] $travelAgencyNetwork
     *
     * @uses ArrayOfTravelAgencyNetwork::setTravelAgencyNetwork()
     */
    public function __construct(?array $travelAgencyNetwork = null)
    {
        $this
            ->setTravelAgencyNetwork($travelAgencyNetwork);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setTravelAgencyNetwork method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelAgencyNetwork method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelAgencyNetworkForArrayConstraintFromSetTravelAgencyNetwork(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTravelAgencyNetworkTravelAgencyNetworkItem) {
            // validation for constraint: itemType
            if (!$arrayOfTravelAgencyNetworkTravelAgencyNetworkItem instanceof TravelAgencyNetwork) {
                $invalidValues[] = is_object($arrayOfTravelAgencyNetworkTravelAgencyNetworkItem) ? get_class($arrayOfTravelAgencyNetworkTravelAgencyNetworkItem) : sprintf('%s(%s)', gettype($arrayOfTravelAgencyNetworkTravelAgencyNetworkItem), var_export($arrayOfTravelAgencyNetworkTravelAgencyNetworkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelAgencyNetwork property can only contain items of type \Ntvspa\Big\Corporate\Structs\TravelAgencyNetwork, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get TravelAgencyNetwork value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return TravelAgencyNetwork[]|null
     */
    public function getTravelAgencyNetwork(): ?array
    {
        return $this->TravelAgencyNetwork ?? null;
    }

    /**
     * Set TravelAgencyNetwork value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param TravelAgencyNetwork[] $travelAgencyNetwork
     *
     * @return ArrayOfTravelAgencyNetwork
     * @throws InvalidArgumentException
     */
    public function setTravelAgencyNetwork(?array $travelAgencyNetwork = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelAgencyNetworkArrayErrorMessage = self::validateTravelAgencyNetworkForArrayConstraintFromSetTravelAgencyNetwork($travelAgencyNetwork))) {
            throw new InvalidArgumentException($travelAgencyNetworkArrayErrorMessage, __LINE__);
        }
        if (is_null($travelAgencyNetwork) || (is_array($travelAgencyNetwork) && empty($travelAgencyNetwork))) {
            unset($this->TravelAgencyNetwork);
        } else {
            $this->TravelAgencyNetwork = $travelAgencyNetwork;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return TravelAgencyNetwork|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyNetwork
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return TravelAgencyNetwork|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyNetwork
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return TravelAgencyNetwork|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyNetwork
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return TravelAgencyNetwork|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyNetwork
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return TravelAgencyNetwork|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyNetwork
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param TravelAgencyNetwork $item
     *
     * @return ArrayOfTravelAgencyNetwork
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof TravelAgencyNetwork) {
            throw new InvalidArgumentException(sprintf('The TravelAgencyNetwork property can only contain items of type \Ntvspa\Big\Corporate\Structs\TravelAgencyNetwork, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string TravelAgencyNetwork
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'TravelAgencyNetwork';
    }
}
