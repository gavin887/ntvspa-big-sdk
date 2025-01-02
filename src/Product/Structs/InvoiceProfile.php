<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\PersonType;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceProfile Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:InvoiceProfile
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class InvoiceProfile extends AbstractStructBase
{
    /**
     * The FlagOnlus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FlagOnlus = null;
    /**
     * The FlagGruppoIva
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FlagGruppoIva = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The SurnameLegalName
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SurnameLegalName = null;
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
     * The VatNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $VatNumber = null;
    /**
     * The PartitaIva
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PartitaIva = null;
    /**
     * The FiscalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FiscalCode = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var Address|null
     */
    protected ?\Ntvspa\Big\Product\Structs\Address $Address = null;
    /**
     * The PersonType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PersonType = null;
    /**
     * The RecipientCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RecipientCode = null;

    /**
     * Constructor method for InvoiceProfile
     *
     * @param bool    $flagOnlus
     * @param bool    $flagGruppoIva
     * @param string  $name
     * @param string  $surnameLegalName
     * @param string  $customerId
     * @param string  $vatNumber
     * @param string  $partitaIva
     * @param string  $fiscalCode
     * @param string  $email
     * @param Address $address
     * @param string  $personType
     * @param string  $recipientCode
     *
     * @uses InvoiceProfile::setFlagOnlus()
     * @uses InvoiceProfile::setFlagGruppoIva()
     * @uses InvoiceProfile::setName()
     * @uses InvoiceProfile::setSurnameLegalName()
     * @uses InvoiceProfile::setCustomerId()
     * @uses InvoiceProfile::setVatNumber()
     * @uses InvoiceProfile::setPartitaIva()
     * @uses InvoiceProfile::setFiscalCode()
     * @uses InvoiceProfile::setEmail()
     * @uses InvoiceProfile::setAddress()
     * @uses InvoiceProfile::setPersonType()
     * @uses InvoiceProfile::setRecipientCode()
     */
    public function __construct(?bool $flagOnlus = null, ?bool $flagGruppoIva = null, ?string $name = null, ?string $surnameLegalName = null, ?string $customerId = null, ?string $vatNumber = null, ?string $partitaIva = null, ?string $fiscalCode = null, ?string $email = null, ?\Ntvspa\Big\Product\Structs\Address $address = null, ?string $personType = null, ?string $recipientCode = null)
    {
        $this
            ->setFlagOnlus($flagOnlus)
            ->setFlagGruppoIva($flagGruppoIva)
            ->setName($name)
            ->setSurnameLegalName($surnameLegalName)
            ->setCustomerId($customerId)
            ->setVatNumber($vatNumber)
            ->setPartitaIva($partitaIva)
            ->setFiscalCode($fiscalCode)
            ->setEmail($email)
            ->setAddress($address)
            ->setPersonType($personType)
            ->setRecipientCode($recipientCode);
    }

    /**
     * Get FlagOnlus value
     *
     * @return bool|null
     */
    public function getFlagOnlus(): ?bool
    {
        return $this->FlagOnlus;
    }

    /**
     * Set FlagOnlus value
     *
     * @param bool $flagOnlus
     *
     * @return InvoiceProfile
     */
    public function setFlagOnlus(?bool $flagOnlus = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagOnlus) && !is_bool($flagOnlus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagOnlus, true), gettype($flagOnlus)), __LINE__);
        }
        $this->FlagOnlus = $flagOnlus;

        return $this;
    }

    /**
     * Get FlagGruppoIva value
     *
     * @return bool|null
     */
    public function getFlagGruppoIva(): ?bool
    {
        return $this->FlagGruppoIva;
    }

    /**
     * Set FlagGruppoIva value
     *
     * @param bool $flagGruppoIva
     *
     * @return InvoiceProfile
     */
    public function setFlagGruppoIva(?bool $flagGruppoIva = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagGruppoIva) && !is_bool($flagGruppoIva)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagGruppoIva, true), gettype($flagGruppoIva)), __LINE__);
        }
        $this->FlagGruppoIva = $flagGruppoIva;

        return $this;
    }

    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $name
     *
     * @return InvoiceProfile
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }

        return $this;
    }

    /**
     * Get SurnameLegalName value
     *
     * @return string|null
     */
    public function getSurnameLegalName(): ?string
    {
        return $this->SurnameLegalName;
    }

    /**
     * Set SurnameLegalName value
     *
     * @param string $surnameLegalName
     *
     * @return InvoiceProfile
     */
    public function setSurnameLegalName(?string $surnameLegalName = null): self
    {
        // validation for constraint: string
        if (!is_null($surnameLegalName) && !is_string($surnameLegalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surnameLegalName, true), gettype($surnameLegalName)), __LINE__);
        }
        $this->SurnameLegalName = $surnameLegalName;

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
     * @return InvoiceProfile
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
     * Get VatNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
        return $this->VatNumber ?? null;
    }

    /**
     * Set VatNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $vatNumber
     *
     * @return InvoiceProfile
     */
    public function setVatNumber(?string $vatNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($vatNumber) && !is_string($vatNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatNumber, true), gettype($vatNumber)), __LINE__);
        }
        if (is_null($vatNumber) || (is_array($vatNumber) && empty($vatNumber))) {
            unset($this->VatNumber);
        } else {
            $this->VatNumber = $vatNumber;
        }

        return $this;
    }

    /**
     * Get PartitaIva value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPartitaIva(): ?string
    {
        return $this->PartitaIva ?? null;
    }

    /**
     * Set PartitaIva value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $partitaIva
     *
     * @return InvoiceProfile
     */
    public function setPartitaIva(?string $partitaIva = null): self
    {
        // validation for constraint: string
        if (!is_null($partitaIva) && !is_string($partitaIva)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partitaIva, true), gettype($partitaIva)), __LINE__);
        }
        if (is_null($partitaIva) || (is_array($partitaIva) && empty($partitaIva))) {
            unset($this->PartitaIva);
        } else {
            $this->PartitaIva = $partitaIva;
        }

        return $this;
    }

    /**
     * Get FiscalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFiscalCode(): ?string
    {
        return $this->FiscalCode ?? null;
    }

    /**
     * Set FiscalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fiscalCode
     *
     * @return InvoiceProfile
     */
    public function setFiscalCode(?string $fiscalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($fiscalCode) && !is_string($fiscalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fiscalCode, true), gettype($fiscalCode)), __LINE__);
        }
        if (is_null($fiscalCode) || (is_array($fiscalCode) && empty($fiscalCode))) {
            unset($this->FiscalCode);
        } else {
            $this->FiscalCode = $fiscalCode;
        }

        return $this;
    }

    /**
     * Get Email value
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * Set Email value
     *
     * @param string $email
     *
     * @return InvoiceProfile
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;

        return $this;
    }

    /**
     * Get Address value
     *
     * @return Address|null
     */
    public function getAddress(): ?\Ntvspa\Big\Product\Structs\Address
    {
        return $this->Address;
    }

    /**
     * Set Address value
     *
     * @param Address $address
     *
     * @return InvoiceProfile
     */
    public function setAddress(?\Ntvspa\Big\Product\Structs\Address $address = null): self
    {
        $this->Address = $address;

        return $this;
    }

    /**
     * Get PersonType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPersonType(): ?string
    {
        return $this->PersonType ?? null;
    }

    /**
     * Set PersonType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $personType
     *
     * @return InvoiceProfile
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\PersonType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\PersonType::valueIsValid()
     */
    public function setPersonType(?string $personType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\PersonType::valueIsValid($personType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\PersonType', is_array($personType) ? implode(', ', $personType) : var_export($personType, true), implode(', ', PersonType::getValidValues())), __LINE__);
        }
        if (is_null($personType) || (is_array($personType) && empty($personType))) {
            unset($this->PersonType);
        } else {
            $this->PersonType = $personType;
        }

        return $this;
    }

    /**
     * Get RecipientCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRecipientCode(): ?string
    {
        return $this->RecipientCode ?? null;
    }

    /**
     * Set RecipientCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $recipientCode
     *
     * @return InvoiceProfile
     */
    public function setRecipientCode(?string $recipientCode = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCode) && !is_string($recipientCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCode, true), gettype($recipientCode)), __LINE__);
        }
        if (is_null($recipientCode) || (is_array($recipientCode) && empty($recipientCode))) {
            unset($this->RecipientCode);
        } else {
            $this->RecipientCode = $recipientCode;
        }

        return $this;
    }
}
