<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\Gender;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Customer Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Customer
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Customer extends AbstractStructBase
{
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
     * The CustomerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerId = null;
    /**
     * The Gender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Gender = null;
    /**
     * The DOB
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DOB = null;
    /**
     * The MobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $MobilePhone = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Address|null
     */
    protected ?\Ntvspa\Big\Customer\Structs\Address $Address = null;
    /**
     * The LoginCredentials
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var LoginCredentials|null
     */
    protected ?\Ntvspa\Big\Customer\Structs\LoginCredentials $LoginCredentials = null;
    /**
     * The Consensus
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var Consensus|null
     */
    protected ?\Ntvspa\Big\Customer\Structs\Consensus $Consensus = null;
    /**
     * The InvitationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $InvitationCode = null;
    /**
     * The Preferences
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Preferences|null
     */
    protected ?\Ntvspa\Big\Customer\Structs\Preferences $Preferences = null;

    /**
     * Constructor method for Customer
     *
     * @param string           $firstName
     * @param string           $lastName
     * @param string           $customerId
     * @param string           $gender
     * @param string           $dOB
     * @param string           $mobilePhone
     * @param Address          $address
     * @param LoginCredentials $loginCredentials
     * @param Consensus        $consensus
     * @param string           $invitationCode
     * @param Preferences      $preferences
     *
     * @uses Customer::setFirstName()
     * @uses Customer::setLastName()
     * @uses Customer::setCustomerId()
     * @uses Customer::setGender()
     * @uses Customer::setDOB()
     * @uses Customer::setMobilePhone()
     * @uses Customer::setAddress()
     * @uses Customer::setLoginCredentials()
     * @uses Customer::setConsensus()
     * @uses Customer::setInvitationCode()
     * @uses Customer::setPreferences()
     */
    public function __construct(?string $firstName = null, ?string $lastName = null, ?string $customerId = null, ?string $gender = null, ?string $dOB = null, ?string $mobilePhone = null, ?\Ntvspa\Big\Customer\Structs\Address $address = null, ?\Ntvspa\Big\Customer\Structs\LoginCredentials $loginCredentials = null, ?\Ntvspa\Big\Customer\Structs\Consensus $consensus = null, ?string $invitationCode = null, ?\Ntvspa\Big\Customer\Structs\Preferences $preferences = null)
    {
        $this
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setCustomerId($customerId)
            ->setGender($gender)
            ->setDOB($dOB)
            ->setMobilePhone($mobilePhone)
            ->setAddress($address)
            ->setLoginCredentials($loginCredentials)
            ->setConsensus($consensus)
            ->setInvitationCode($invitationCode)
            ->setPreferences($preferences);
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
     * @return Customer
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
     * @return Customer
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
     * Get CustomerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->CustomerId ?? null;
    }

    /**
     * Set CustomerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerId
     *
     * @return Customer
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        if (is_null($customerId) || (is_array($customerId) && empty($customerId))) {
            unset($this->CustomerId);
        } else {
            $this->CustomerId = $customerId;
        }

        return $this;
    }

    /**
     * Get Gender value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->Gender ?? null;
    }

    /**
     * Set Gender value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $gender
     *
     * @return Customer
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Gender::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Gender::valueIsValid()
     */
    public function setGender(?string $gender = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Gender::valueIsValid($gender)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Gender', is_array($gender) ? implode(', ', $gender) : var_export($gender, true), implode(', ', Gender::getValidValues())), __LINE__);
        }
        if (is_null($gender) || (is_array($gender) && empty($gender))) {
            unset($this->Gender);
        } else {
            $this->Gender = $gender;
        }

        return $this;
    }

    /**
     * Get DOB value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDOB(): ?string
    {
        return $this->DOB ?? null;
    }

    /**
     * Set DOB value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $dOB
     *
     * @return Customer
     */
    public function setDOB(?string $dOB = null): self
    {
        // validation for constraint: string
        if (!is_null($dOB) && !is_string($dOB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dOB, true), gettype($dOB)), __LINE__);
        }
        if (is_null($dOB) || (is_array($dOB) && empty($dOB))) {
            unset($this->DOB);
        } else {
            $this->DOB = $dOB;
        }

        return $this;
    }

    /**
     * Get MobilePhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMobilePhone(): ?string
    {
        return $this->MobilePhone ?? null;
    }

    /**
     * Set MobilePhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $mobilePhone
     *
     * @return Customer
     */
    public function setMobilePhone(?string $mobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($mobilePhone) && !is_string($mobilePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobilePhone, true), gettype($mobilePhone)), __LINE__);
        }
        if (is_null($mobilePhone) || (is_array($mobilePhone) && empty($mobilePhone))) {
            unset($this->MobilePhone);
        } else {
            $this->MobilePhone = $mobilePhone;
        }

        return $this;
    }

    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Address|null
     */
    public function getAddress(): ?\Ntvspa\Big\Customer\Structs\Address
    {
        return $this->Address ?? null;
    }

    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Address $address
     *
     * @return Customer
     */
    public function setAddress(?\Ntvspa\Big\Customer\Structs\Address $address = null): self
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }

        return $this;
    }

    /**
     * Get LoginCredentials value
     *
     * @return LoginCredentials|null
     */
    public function getLoginCredentials(): ?\Ntvspa\Big\Customer\Structs\LoginCredentials
    {
        return $this->LoginCredentials;
    }

    /**
     * Set LoginCredentials value
     *
     * @param LoginCredentials $loginCredentials
     *
     * @return Customer
     */
    public function setLoginCredentials(?\Ntvspa\Big\Customer\Structs\LoginCredentials $loginCredentials = null): self
    {
        $this->LoginCredentials = $loginCredentials;

        return $this;
    }

    /**
     * Get Consensus value
     *
     * @return Consensus|null
     */
    public function getConsensus(): ?\Ntvspa\Big\Customer\Structs\Consensus
    {
        return $this->Consensus;
    }

    /**
     * Set Consensus value
     *
     * @param Consensus $consensus
     *
     * @return Customer
     */
    public function setConsensus(?\Ntvspa\Big\Customer\Structs\Consensus $consensus = null): self
    {
        $this->Consensus = $consensus;

        return $this;
    }

    /**
     * Get InvitationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getInvitationCode(): ?string
    {
        return $this->InvitationCode ?? null;
    }

    /**
     * Set InvitationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $invitationCode
     *
     * @return Customer
     */
    public function setInvitationCode(?string $invitationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($invitationCode) && !is_string($invitationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invitationCode, true), gettype($invitationCode)), __LINE__);
        }
        if (is_null($invitationCode) || (is_array($invitationCode) && empty($invitationCode))) {
            unset($this->InvitationCode);
        } else {
            $this->InvitationCode = $invitationCode;
        }

        return $this;
    }

    /**
     * Get Preferences value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Preferences|null
     */
    public function getPreferences(): ?\Ntvspa\Big\Customer\Structs\Preferences
    {
        return $this->Preferences ?? null;
    }

    /**
     * Set Preferences value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Preferences $preferences
     *
     * @return Customer
     */
    public function setPreferences(?\Ntvspa\Big\Customer\Structs\Preferences $preferences = null): self
    {
        if (is_null($preferences) || (is_array($preferences) && empty($preferences))) {
            unset($this->Preferences);
        } else {
            $this->Preferences = $preferences;
        }

        return $this;
    }
}
