<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\PersonType;
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
     * The DefaultProfile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $DefaultProfile = null;
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
     * The RecipientCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RecipientCode = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var Address|null
     */
    protected ?\Ntvspa\Big\Customer\Structs\Address $Address = null;
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
     * Constructor method for InvoiceProfile
     *
     * @param bool    $flagOnlus
     * @param bool    $flagGruppoIva
     * @param bool    $defaultProfile
     * @param string  $name
     * @param string  $surnameLegalName
     * @param string  $partitaIva
     * @param string  $fiscalCode
     * @param string  $email
     * @param string  $recipientCode
     * @param Address $address
     * @param string  $personType
     *
     * @uses InvoiceProfile::setFlagOnlus()
     * @uses InvoiceProfile::setFlagGruppoIva()
     * @uses InvoiceProfile::setDefaultProfile()
     * @uses InvoiceProfile::setName()
     * @uses InvoiceProfile::setSurnameLegalName()
     * @uses InvoiceProfile::setPartitaIva()
     * @uses InvoiceProfile::setFiscalCode()
     * @uses InvoiceProfile::setEmail()
     * @uses InvoiceProfile::setRecipientCode()
     * @uses InvoiceProfile::setAddress()
     * @uses InvoiceProfile::setPersonType()
     */
    public function __construct(?bool $flagOnlus = null, ?bool $flagGruppoIva = null, ?bool $defaultProfile = null, ?string $name = null, ?string $surnameLegalName = null, ?string $partitaIva = null, ?string $fiscalCode = null, ?string $email = null, ?string $recipientCode = null, ?\Ntvspa\Big\Customer\Structs\Address $address = null, ?string $personType = null)
    {
        $this
            ->setFlagOnlus($flagOnlus)
            ->setFlagGruppoIva($flagGruppoIva)
            ->setDefaultProfile($defaultProfile)
            ->setName($name)
            ->setSurnameLegalName($surnameLegalName)
            ->setPartitaIva($partitaIva)
            ->setFiscalCode($fiscalCode)
            ->setEmail($email)
            ->setRecipientCode($recipientCode)
            ->setAddress($address)
            ->setPersonType($personType);
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
     * Get DefaultProfile value
     *
     * @return bool|null
     */
    public function getDefaultProfile(): ?bool
    {
        return $this->DefaultProfile;
    }

    /**
     * Set DefaultProfile value
     *
     * @param bool $defaultProfile
     *
     * @return InvoiceProfile
     */
    public function setDefaultProfile(?bool $defaultProfile = null): self
    {
        // validation for constraint: boolean
        if (!is_null($defaultProfile) && !is_bool($defaultProfile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($defaultProfile, true), gettype($defaultProfile)), __LINE__);
        }
        $this->DefaultProfile = $defaultProfile;

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

    /**
     * Get Address value
     *
     * @return Address|null
     */
    public function getAddress(): ?\Ntvspa\Big\Customer\Structs\Address
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
    public function setAddress(?\Ntvspa\Big\Customer\Structs\Address $address = null): self
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
     * @uses \Ntvspa\Big\Customer\Enums\PersonType::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\PersonType::valueIsValid()
     */
    public function setPersonType(?string $personType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\PersonType::valueIsValid($personType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\PersonType', is_array($personType) ? implode(', ', $personType) : var_export($personType, true), implode(', ', PersonType::getValidValues())), __LINE__);
        }
        if (is_null($personType) || (is_array($personType) && empty($personType))) {
            unset($this->PersonType);
        } else {
            $this->PersonType = $personType;
        }

        return $this;
    }
}
