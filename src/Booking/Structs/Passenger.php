<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfPassengerFee;
use InvalidArgumentException;
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
     * The PaxDiscountCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaxDiscountCode = null;
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
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $EmailAddress = null;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Phone = null;
    /**
     * The PassengerInfant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PassengerInfant|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\PassengerInfant $PassengerInfant = null;
    /**
     * The PassengerFees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfPassengerFee|null
     */
    protected ?ArrayOfPassengerFee $PassengerFees = null;

    /**
     * Constructor method for Passenger
     *
     * @param int                                            $passengerNumber
     * @param string                                         $customerNumber
     * @param string                                         $paxDiscountCode
     * @param string                                         $paxType
     * @param string                                         $firstName
     * @param string                                         $lastName
     * @param string                                         $emailAddress
     * @param string                                         $phone
     * @param PassengerInfant                                $passengerInfant
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPassengerFee $passengerFees
     *
     * @uses Passenger::setPassengerNumber()
     * @uses Passenger::setCustomerNumber()
     * @uses Passenger::setPaxDiscountCode()
     * @uses Passenger::setPaxType()
     * @uses Passenger::setFirstName()
     * @uses Passenger::setLastName()
     * @uses Passenger::setEmailAddress()
     * @uses Passenger::setPhone()
     * @uses Passenger::setPassengerInfant()
     * @uses Passenger::setPassengerFees()
     */
    public function __construct(?int $passengerNumber = null, ?string $customerNumber = null, ?string $paxDiscountCode = null, ?string $paxType = null, ?string $firstName = null, ?string $lastName = null, ?string $emailAddress = null, ?string $phone = null, ?\Ntvspa\Big\Booking\Structs\PassengerInfant $passengerInfant = null, ?ArrayOfPassengerFee $passengerFees = null)
    {
        $this
            ->setPassengerNumber($passengerNumber)
            ->setCustomerNumber($customerNumber)
            ->setPaxDiscountCode($paxDiscountCode)
            ->setPaxType($paxType)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmailAddress($emailAddress)
            ->setPhone($phone)
            ->setPassengerInfant($passengerInfant)
            ->setPassengerFees($passengerFees);
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
     * Get PaxDiscountCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPaxDiscountCode(): ?string
    {
        return $this->PaxDiscountCode ?? null;
    }

    /**
     * Set PaxDiscountCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $paxDiscountCode
     *
     * @return Passenger
     */
    public function setPaxDiscountCode(?string $paxDiscountCode = null): self
    {
        // validation for constraint: string
        if (!is_null($paxDiscountCode) && !is_string($paxDiscountCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paxDiscountCode, true), gettype($paxDiscountCode)), __LINE__);
        }
        if (is_null($paxDiscountCode) || (is_array($paxDiscountCode) && empty($paxDiscountCode))) {
            unset($this->PaxDiscountCode);
        } else {
            $this->PaxDiscountCode = $paxDiscountCode;
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
     * Get EmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress ?? null;
    }

    /**
     * Set EmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $emailAddress
     *
     * @return Passenger
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        if (is_null($emailAddress) || (is_array($emailAddress) && empty($emailAddress))) {
            unset($this->EmailAddress);
        } else {
            $this->EmailAddress = $emailAddress;
        }

        return $this;
    }

    /**
     * Get Phone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->Phone ?? null;
    }

    /**
     * Set Phone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $phone
     *
     * @return Passenger
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        if (is_null($phone) || (is_array($phone) && empty($phone))) {
            unset($this->Phone);
        } else {
            $this->Phone = $phone;
        }

        return $this;
    }

    /**
     * Get PassengerInfant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PassengerInfant|null
     */
    public function getPassengerInfant(): ?\Ntvspa\Big\Booking\Structs\PassengerInfant
    {
        return $this->PassengerInfant ?? null;
    }

    /**
     * Set PassengerInfant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PassengerInfant $passengerInfant
     *
     * @return Passenger
     */
    public function setPassengerInfant(?\Ntvspa\Big\Booking\Structs\PassengerInfant $passengerInfant = null): self
    {
        if (is_null($passengerInfant) || (is_array($passengerInfant) && empty($passengerInfant))) {
            unset($this->PassengerInfant);
        } else {
            $this->PassengerInfant = $passengerInfant;
        }

        return $this;
    }

    /**
     * Get PassengerFees value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfPassengerFee|null
     */
    public function getPassengerFees(): ?ArrayOfPassengerFee
    {
        return $this->PassengerFees ?? null;
    }

    /**
     * Set PassengerFees value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPassengerFee $passengerFees
     *
     * @return Passenger
     */
    public function setPassengerFees(?ArrayOfPassengerFee $passengerFees = null): self
    {
        if (is_null($passengerFees) || (is_array($passengerFees) && empty($passengerFees))) {
            unset($this->PassengerFees);
        } else {
            $this->PassengerFees = $passengerFees;
        }

        return $this;
    }
}
