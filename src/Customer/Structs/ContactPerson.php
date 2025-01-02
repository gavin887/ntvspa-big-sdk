<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\ContactPersonType;
use Ntvspa\Big\Customer\Enums\Title;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactPerson Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContactPerson
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ContactPerson extends AbstractStructBase
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
     * The FixedNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FixedNumber = null;
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
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The BillCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BillCode = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Type = null;

    /**
     * Constructor method for ContactPerson
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $fixedNumber
     * @param string $mobilePhone
     * @param string $email
     * @param string $billCode
     * @param string $title
     * @param string $type
     *
     * @uses ContactPerson::setFirstName()
     * @uses ContactPerson::setLastName()
     * @uses ContactPerson::setFixedNumber()
     * @uses ContactPerson::setMobilePhone()
     * @uses ContactPerson::setEmail()
     * @uses ContactPerson::setBillCode()
     * @uses ContactPerson::setTitle()
     * @uses ContactPerson::setType()
     */
    public function __construct(?string $firstName = null, ?string $lastName = null, ?string $fixedNumber = null, ?string $mobilePhone = null, ?string $email = null, ?string $billCode = null, ?string $title = null, ?string $type = null)
    {
        $this
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setFixedNumber($fixedNumber)
            ->setMobilePhone($mobilePhone)
            ->setEmail($email)
            ->setBillCode($billCode)
            ->setTitle($title)
            ->setType($type);
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
     * @return ContactPerson
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
     * @return ContactPerson
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
     * Get FixedNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFixedNumber(): ?string
    {
        return $this->FixedNumber ?? null;
    }

    /**
     * Set FixedNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fixedNumber
     *
     * @return ContactPerson
     */
    public function setFixedNumber(?string $fixedNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($fixedNumber) && !is_string($fixedNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fixedNumber, true), gettype($fixedNumber)), __LINE__);
        }
        if (is_null($fixedNumber) || (is_array($fixedNumber) && empty($fixedNumber))) {
            unset($this->FixedNumber);
        } else {
            $this->FixedNumber = $fixedNumber;
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
     * @return ContactPerson
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
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $email
     *
     * @return ContactPerson
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }

        return $this;
    }

    /**
     * Get BillCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBillCode(): ?string
    {
        return $this->BillCode ?? null;
    }

    /**
     * Set BillCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $billCode
     *
     * @return ContactPerson
     */
    public function setBillCode(?string $billCode = null): self
    {
        // validation for constraint: string
        if (!is_null($billCode) && !is_string($billCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billCode, true), gettype($billCode)), __LINE__);
        }
        if (is_null($billCode) || (is_array($billCode) && empty($billCode))) {
            unset($this->BillCode);
        } else {
            $this->BillCode = $billCode;
        }

        return $this;
    }

    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title ?? null;
    }

    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $title
     *
     * @return ContactPerson
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Title::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Title::valueIsValid()
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Title::valueIsValid($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Title', is_array($title) ? implode(', ', $title) : var_export($title, true), implode(', ', Title::getValidValues())), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }

        return $this;
    }

    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $type
     *
     * @return ContactPerson
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\ContactPersonType::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\ContactPersonType::valueIsValid()
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\ContactPersonType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\ContactPersonType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', ContactPersonType::getValidValues())), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }

        return $this;
    }
}
