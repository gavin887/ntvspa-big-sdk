<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Travel\Arrays\ArrayOfPassengerInfant;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Passenger Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Passenger
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Passenger extends AbstractStructBase
{
    /**
     * The PassengerNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $PassengerNumber = null;
    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerNumber = null;
    /**
     * The PaxType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaxType = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The PassengerInfants
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfPassengerInfant|null
     */
    protected ?ArrayOfPassengerInfant $PassengerInfants = null;

    /**
     * Constructor method for Passenger
     *
     * @param int                                              $passengerNumber
     * @param string                                           $customerNumber
     * @param string                                           $paxType
     * @param string                                           $firstName
     * @param string                                           $lastName
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfPassengerInfant $passengerInfants
     *
     * @uses Passenger::setPassengerNumber()
     * @uses Passenger::setCustomerNumber()
     * @uses Passenger::setPaxType()
     * @uses Passenger::setFirstName()
     * @uses Passenger::setLastName()
     * @uses Passenger::setPassengerInfants()
     */
    public function __construct(?int $passengerNumber = null, ?string $customerNumber = null, ?string $paxType = null, ?string $firstName = null, ?string $lastName = null, ?ArrayOfPassengerInfant $passengerInfants = null)
    {
        $this
            ->setPassengerNumber($passengerNumber)
            ->setCustomerNumber($customerNumber)
            ->setPaxType($paxType)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setPassengerInfants($passengerInfants);
    }

    /**
     * Get PassengerNumber value
     *
     * @return int|null
     */
    public function getPassengerNumber(): ?int
    {
        return $this->PassengerNumber;
    }

    /**
     * Set PassengerNumber value
     *
     * @param int $passengerNumber
     *
     * @return Passenger
     */
    public function setPassengerNumber(?int $passengerNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerNumber) && !(is_int($passengerNumber) || ctype_digit($passengerNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerNumber, true), gettype($passengerNumber)), __LINE__);
        }
        $this->PassengerNumber = $passengerNumber;

        return $this;
    }

    /**
     * Get CustomerNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerNumber(): ?string
    {
        return $this->CustomerNumber ?? null;
    }

    /**
     * Set CustomerNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerNumber
     *
     * @return Passenger
     */
    public function setCustomerNumber(?string $customerNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($customerNumber) && !is_string($customerNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerNumber, true), gettype($customerNumber)), __LINE__);
        }
        if (is_null($customerNumber) || (is_array($customerNumber) && empty($customerNumber))) {
            unset($this->CustomerNumber);
        } else {
            $this->CustomerNumber = $customerNumber;
        }

        return $this;
    }

    /**
     * Get PaxType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPaxType(): ?string
    {
        return $this->PaxType ?? null;
    }

    /**
     * Set PaxType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $paxType
     *
     * @return Passenger
     */
    public function setPaxType(?string $paxType = null): self
    {
        // validation for constraint: string
        if (!is_null($paxType) && !is_string($paxType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paxType, true), gettype($paxType)), __LINE__);
        }
        if (is_null($paxType) || (is_array($paxType) && empty($paxType))) {
            unset($this->PaxType);
        } else {
            $this->PaxType = $paxType;
        }

        return $this;
    }

    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName ?? null;
    }

    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $firstName
     *
     * @return Passenger
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }

        return $this;
    }

    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->LastName ?? null;
    }

    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $lastName
     *
     * @return Passenger
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
        }

        return $this;
    }

    /**
     * Get PassengerInfants value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfPassengerInfant|null
     */
    public function getPassengerInfants(): ?ArrayOfPassengerInfant
    {
        return $this->PassengerInfants ?? null;
    }

    /**
     * Set PassengerInfants value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfPassengerInfant $passengerInfants
     *
     * @return Passenger
     */
    public function setPassengerInfants(?ArrayOfPassengerInfant $passengerInfants = null): self
    {
        if (is_null($passengerInfants) || (is_array($passengerInfants) && empty($passengerInfants))) {
            unset($this->PassengerInfants);
        } else {
            $this->PassengerInfants = $passengerInfants;
        }

        return $this;
    }
}
