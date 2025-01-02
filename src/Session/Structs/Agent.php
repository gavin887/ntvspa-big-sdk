<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Session\Arrays\ArrayOfEmployeeOffer;
use Session\Arrays\ArrayOfFop;
use Session\Arrays\ArrayOfPromotion;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Agent Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Agent
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Agent extends AbstractStructBase
{
    /**
     * The LoyaltyPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $LoyaltyPoints = null;
    /**
     * The CreditShell
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $CreditShell = null;
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
     * The Surname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Surname = null;
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
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PhoneNumber = null;
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
     * The LoyaltyLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LoyaltyLevel = null;
    /**
     * The FopList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Session\Arrays\ArrayOfFop|null
     */
    protected ?ArrayOfFop $FopList = null;
    /**
     * The RoleCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RoleCode = null;
    /**
     * The BillingAgreementID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BillingAgreementID = null;
    /**
     * The AvailablePromotions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Session\Arrays\ArrayOfPromotion|null
     */
    protected ?ArrayOfPromotion $AvailablePromotions = null;
    /**
     * The EmployeeOffers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Session\Arrays\ArrayOfEmployeeOffer|null
     */
    protected ?ArrayOfEmployeeOffer $EmployeeOffers = null;
    /**
     * The CorporateInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CorporateProfile|null
     */
    protected ?\Ntvspa\Big\Session\Structs\CorporateProfile $CorporateInfo = null;
    /**
     * The LoyaltyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var LoyaltyInfo|null
     */
    protected ?\Ntvspa\Big\Session\Structs\LoyaltyInfo $LoyaltyInfo = null;

    /**
     * Constructor method for Agent
     *
     * @param int                                             $loyaltyPoints
     * @param float                                           $creditShell
     * @param string                                          $name
     * @param string                                          $surname
     * @param string                                          $email
     * @param string                                          $phoneNumber
     * @param string                                          $customerId
     * @param string                                          $loyaltyLevel
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfFop           $fopList
     * @param string                                          $roleCode
     * @param string                                          $billingAgreementID
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfPromotion     $availablePromotions
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfEmployeeOffer $employeeOffers
     * @param CorporateProfile                                $corporateInfo
     * @param LoyaltyInfo                                     $loyaltyInfo
     *
     * @uses Agent::setLoyaltyPoints()
     * @uses Agent::setCreditShell()
     * @uses Agent::setName()
     * @uses Agent::setSurname()
     * @uses Agent::setEmail()
     * @uses Agent::setPhoneNumber()
     * @uses Agent::setCustomerId()
     * @uses Agent::setLoyaltyLevel()
     * @uses Agent::setFopList()
     * @uses Agent::setRoleCode()
     * @uses Agent::setBillingAgreementID()
     * @uses Agent::setAvailablePromotions()
     * @uses Agent::setEmployeeOffers()
     * @uses Agent::setCorporateInfo()
     * @uses Agent::setLoyaltyInfo()
     */
    public function __construct(?int $loyaltyPoints = null, ?float $creditShell = null, ?string $name = null, ?string $surname = null, ?string $email = null, ?string $phoneNumber = null, ?string $customerId = null, ?string $loyaltyLevel = null, ?ArrayOfFop $fopList = null, ?string $roleCode = null, ?string $billingAgreementID = null, ?ArrayOfPromotion $availablePromotions = null, ?ArrayOfEmployeeOffer $employeeOffers = null, ?\Ntvspa\Big\Session\Structs\CorporateProfile $corporateInfo = null, ?\Ntvspa\Big\Session\Structs\LoyaltyInfo $loyaltyInfo = null)
    {
        $this
            ->setLoyaltyPoints($loyaltyPoints)
            ->setCreditShell($creditShell)
            ->setName($name)
            ->setSurname($surname)
            ->setEmail($email)
            ->setPhoneNumber($phoneNumber)
            ->setCustomerId($customerId)
            ->setLoyaltyLevel($loyaltyLevel)
            ->setFopList($fopList)
            ->setRoleCode($roleCode)
            ->setBillingAgreementID($billingAgreementID)
            ->setAvailablePromotions($availablePromotions)
            ->setEmployeeOffers($employeeOffers)
            ->setCorporateInfo($corporateInfo)
            ->setLoyaltyInfo($loyaltyInfo);
    }

    /**
     * Get LoyaltyPoints value
     *
     * @return int|null
     */
    public function getLoyaltyPoints(): ?int
    {
        return $this->LoyaltyPoints;
    }

    /**
     * Set LoyaltyPoints value
     *
     * @param int $loyaltyPoints
     *
     * @return Agent
     */
    public function setLoyaltyPoints(?int $loyaltyPoints = null): self
    {
        // validation for constraint: int
        if (!is_null($loyaltyPoints) && !(is_int($loyaltyPoints) || ctype_digit($loyaltyPoints))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($loyaltyPoints, true), gettype($loyaltyPoints)), __LINE__);
        }
        $this->LoyaltyPoints = $loyaltyPoints;

        return $this;
    }

    /**
     * Get CreditShell value
     *
     * @return float|null
     */
    public function getCreditShell(): ?float
    {
        return $this->CreditShell;
    }

    /**
     * Set CreditShell value
     *
     * @param float $creditShell
     *
     * @return Agent
     */
    public function setCreditShell(?float $creditShell = null): self
    {
        // validation for constraint: float
        if (!is_null($creditShell) && !(is_float($creditShell) || is_numeric($creditShell))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($creditShell, true), gettype($creditShell)), __LINE__);
        }
        $this->CreditShell = $creditShell;

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
     * @return Agent
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
     * Get Surname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->Surname ?? null;
    }

    /**
     * Set Surname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $surname
     *
     * @return Agent
     */
    public function setSurname(?string $surname = null): self
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        if (is_null($surname) || (is_array($surname) && empty($surname))) {
            unset($this->Surname);
        } else {
            $this->Surname = $surname;
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
     * @return Agent
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
     * Get PhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->PhoneNumber ?? null;
    }

    /**
     * Set PhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $phoneNumber
     *
     * @return Agent
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber;
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
     * @return Agent
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
     * Get LoyaltyLevel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLoyaltyLevel(): ?string
    {
        return $this->LoyaltyLevel ?? null;
    }

    /**
     * Set LoyaltyLevel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $loyaltyLevel
     *
     * @return Agent
     */
    public function setLoyaltyLevel(?string $loyaltyLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($loyaltyLevel) && !is_string($loyaltyLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loyaltyLevel, true), gettype($loyaltyLevel)), __LINE__);
        }
        if (is_null($loyaltyLevel) || (is_array($loyaltyLevel) && empty($loyaltyLevel))) {
            unset($this->LoyaltyLevel);
        } else {
            $this->LoyaltyLevel = $loyaltyLevel;
        }

        return $this;
    }

    /**
     * Get FopList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Session\Arrays\ArrayOfFop|null
     */
    public function getFopList(): ?ArrayOfFop
    {
        return $this->FopList ?? null;
    }

    /**
     * Set FopList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfFop $fopList
     *
     * @return Agent
     */
    public function setFopList(?ArrayOfFop $fopList = null): self
    {
        if (is_null($fopList) || (is_array($fopList) && empty($fopList))) {
            unset($this->FopList);
        } else {
            $this->FopList = $fopList;
        }

        return $this;
    }

    /**
     * Get RoleCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRoleCode(): ?string
    {
        return $this->RoleCode ?? null;
    }

    /**
     * Set RoleCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $roleCode
     *
     * @return Agent
     */
    public function setRoleCode(?string $roleCode = null): self
    {
        // validation for constraint: string
        if (!is_null($roleCode) && !is_string($roleCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roleCode, true), gettype($roleCode)), __LINE__);
        }
        if (is_null($roleCode) || (is_array($roleCode) && empty($roleCode))) {
            unset($this->RoleCode);
        } else {
            $this->RoleCode = $roleCode;
        }

        return $this;
    }

    /**
     * Get BillingAgreementID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBillingAgreementID(): ?string
    {
        return $this->BillingAgreementID ?? null;
    }

    /**
     * Set BillingAgreementID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $billingAgreementID
     *
     * @return Agent
     */
    public function setBillingAgreementID(?string $billingAgreementID = null): self
    {
        // validation for constraint: string
        if (!is_null($billingAgreementID) && !is_string($billingAgreementID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAgreementID, true), gettype($billingAgreementID)), __LINE__);
        }
        if (is_null($billingAgreementID) || (is_array($billingAgreementID) && empty($billingAgreementID))) {
            unset($this->BillingAgreementID);
        } else {
            $this->BillingAgreementID = $billingAgreementID;
        }

        return $this;
    }

    /**
     * Get AvailablePromotions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Session\Arrays\ArrayOfPromotion|null
     */
    public function getAvailablePromotions(): ?ArrayOfPromotion
    {
        return $this->AvailablePromotions ?? null;
    }

    /**
     * Set AvailablePromotions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfPromotion $availablePromotions
     *
     * @return Agent
     */
    public function setAvailablePromotions(?ArrayOfPromotion $availablePromotions = null): self
    {
        if (is_null($availablePromotions) || (is_array($availablePromotions) && empty($availablePromotions))) {
            unset($this->AvailablePromotions);
        } else {
            $this->AvailablePromotions = $availablePromotions;
        }

        return $this;
    }

    /**
     * Get EmployeeOffers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Session\Arrays\ArrayOfEmployeeOffer|null
     */
    public function getEmployeeOffers(): ?ArrayOfEmployeeOffer
    {
        return $this->EmployeeOffers ?? null;
    }

    /**
     * Set EmployeeOffers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfEmployeeOffer $employeeOffers
     *
     * @return Agent
     */
    public function setEmployeeOffers(?ArrayOfEmployeeOffer $employeeOffers = null): self
    {
        if (is_null($employeeOffers) || (is_array($employeeOffers) && empty($employeeOffers))) {
            unset($this->EmployeeOffers);
        } else {
            $this->EmployeeOffers = $employeeOffers;
        }

        return $this;
    }

    /**
     * Get CorporateInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CorporateProfile|null
     */
    public function getCorporateInfo(): ?\Ntvspa\Big\Session\Structs\CorporateProfile
    {
        return $this->CorporateInfo ?? null;
    }

    /**
     * Set CorporateInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CorporateProfile $corporateInfo
     *
     * @return Agent
     */
    public function setCorporateInfo(?\Ntvspa\Big\Session\Structs\CorporateProfile $corporateInfo = null): self
    {
        if (is_null($corporateInfo) || (is_array($corporateInfo) && empty($corporateInfo))) {
            unset($this->CorporateInfo);
        } else {
            $this->CorporateInfo = $corporateInfo;
        }

        return $this;
    }

    /**
     * Get LoyaltyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return LoyaltyInfo|null
     */
    public function getLoyaltyInfo(): ?\Ntvspa\Big\Session\Structs\LoyaltyInfo
    {
        return $this->LoyaltyInfo ?? null;
    }

    /**
     * Set LoyaltyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param LoyaltyInfo $loyaltyInfo
     *
     * @return Agent
     */
    public function setLoyaltyInfo(?\Ntvspa\Big\Session\Structs\LoyaltyInfo $loyaltyInfo = null): self
    {
        if (is_null($loyaltyInfo) || (is_array($loyaltyInfo) && empty($loyaltyInfo))) {
            unset($this->LoyaltyInfo);
        } else {
            $this->LoyaltyInfo = $loyaltyInfo;
        }

        return $this;
    }
}
