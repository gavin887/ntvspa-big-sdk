<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CorporateProfile Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CorporateProfile
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CorporateProfile extends AbstractStructBase
{
    /**
     * The AccountBalanceEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $AccountBalanceEnabled = null;
    /**
     * The FlagMonthStatement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FlagMonthStatement = null;
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
     * The IdPartner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $IdPartner = null;
    /**
     * The TradingName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TradingName = null;
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
     * The EmailPEC
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $EmailPEC = null;
    /**
     * The ContactPerson
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Contact|null
     */
    protected ?\Ntvspa\Big\Session\Structs\Contact $ContactPerson = null;
    /**
     * The CorporateSegment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CorporateSegment|null
     */
    protected ?\Ntvspa\Big\Session\Structs\CorporateSegment $CorporateSegment = null;
    /**
     * The CashBackOffer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CashBackDetails|null
     */
    protected ?\Ntvspa\Big\Session\Structs\CashBackDetails $CashBackOffer = null;
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
     * The Promotion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Promotion|null
     */
    protected ?\Ntvspa\Big\Session\Structs\Promotion $Promotion = null;

    /**
     * Constructor method for CorporateProfile
     *
     * @param bool             $accountBalanceEnabled
     * @param bool             $flagMonthStatement
     * @param bool             $flagOnlus
     * @param bool             $flagGruppoIva
     * @param string           $idPartner
     * @param string           $tradingName
     * @param string           $vatNumber
     * @param string           $emailPEC
     * @param Contact          $contactPerson
     * @param CorporateSegment $corporateSegment
     * @param CashBackDetails  $cashBackOffer
     * @param string           $fiscalCode
     * @param Promotion        $promotion
     *
     * @uses CorporateProfile::setAccountBalanceEnabled()
     * @uses CorporateProfile::setFlagMonthStatement()
     * @uses CorporateProfile::setFlagOnlus()
     * @uses CorporateProfile::setFlagGruppoIva()
     * @uses CorporateProfile::setIdPartner()
     * @uses CorporateProfile::setTradingName()
     * @uses CorporateProfile::setVatNumber()
     * @uses CorporateProfile::setEmailPEC()
     * @uses CorporateProfile::setContactPerson()
     * @uses CorporateProfile::setCorporateSegment()
     * @uses CorporateProfile::setCashBackOffer()
     * @uses CorporateProfile::setFiscalCode()
     * @uses CorporateProfile::setPromotion()
     */
    public function __construct(?bool $accountBalanceEnabled = null, ?bool $flagMonthStatement = null, ?bool $flagOnlus = null, ?bool $flagGruppoIva = null, ?string $idPartner = null, ?string $tradingName = null, ?string $vatNumber = null, ?string $emailPEC = null, ?\Ntvspa\Big\Session\Structs\Contact $contactPerson = null, ?\Ntvspa\Big\Session\Structs\CorporateSegment $corporateSegment = null, ?\Ntvspa\Big\Session\Structs\CashBackDetails $cashBackOffer = null, ?string $fiscalCode = null, ?\Ntvspa\Big\Session\Structs\Promotion $promotion = null)
    {
        $this
            ->setAccountBalanceEnabled($accountBalanceEnabled)
            ->setFlagMonthStatement($flagMonthStatement)
            ->setFlagOnlus($flagOnlus)
            ->setFlagGruppoIva($flagGruppoIva)
            ->setIdPartner($idPartner)
            ->setTradingName($tradingName)
            ->setVatNumber($vatNumber)
            ->setEmailPEC($emailPEC)
            ->setContactPerson($contactPerson)
            ->setCorporateSegment($corporateSegment)
            ->setCashBackOffer($cashBackOffer)
            ->setFiscalCode($fiscalCode)
            ->setPromotion($promotion);
    }

    /**
     * Get AccountBalanceEnabled value
     *
     * @return bool|null
     */
    public function getAccountBalanceEnabled(): ?bool
    {
        return $this->AccountBalanceEnabled;
    }

    /**
     * Set AccountBalanceEnabled value
     *
     * @param bool $accountBalanceEnabled
     *
     * @return CorporateProfile
     */
    public function setAccountBalanceEnabled(?bool $accountBalanceEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($accountBalanceEnabled) && !is_bool($accountBalanceEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($accountBalanceEnabled, true), gettype($accountBalanceEnabled)), __LINE__);
        }
        $this->AccountBalanceEnabled = $accountBalanceEnabled;

        return $this;
    }

    /**
     * Get FlagMonthStatement value
     *
     * @return bool|null
     */
    public function getFlagMonthStatement(): ?bool
    {
        return $this->FlagMonthStatement;
    }

    /**
     * Set FlagMonthStatement value
     *
     * @param bool $flagMonthStatement
     *
     * @return CorporateProfile
     */
    public function setFlagMonthStatement(?bool $flagMonthStatement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagMonthStatement) && !is_bool($flagMonthStatement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagMonthStatement, true), gettype($flagMonthStatement)), __LINE__);
        }
        $this->FlagMonthStatement = $flagMonthStatement;

        return $this;
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
     * @return CorporateProfile
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
     * @return CorporateProfile
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
     * Get IdPartner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIdPartner(): ?string
    {
        return $this->IdPartner ?? null;
    }

    /**
     * Set IdPartner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $idPartner
     *
     * @return CorporateProfile
     */
    public function setIdPartner(?string $idPartner = null): self
    {
        // validation for constraint: string
        if (!is_null($idPartner) && !is_string($idPartner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idPartner, true), gettype($idPartner)), __LINE__);
        }
        if (is_null($idPartner) || (is_array($idPartner) && empty($idPartner))) {
            unset($this->IdPartner);
        } else {
            $this->IdPartner = $idPartner;
        }

        return $this;
    }

    /**
     * Get TradingName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTradingName(): ?string
    {
        return $this->TradingName ?? null;
    }

    /**
     * Set TradingName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $tradingName
     *
     * @return CorporateProfile
     */
    public function setTradingName(?string $tradingName = null): self
    {
        // validation for constraint: string
        if (!is_null($tradingName) && !is_string($tradingName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradingName, true), gettype($tradingName)), __LINE__);
        }
        if (is_null($tradingName) || (is_array($tradingName) && empty($tradingName))) {
            unset($this->TradingName);
        } else {
            $this->TradingName = $tradingName;
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
     * @return CorporateProfile
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
     * Get EmailPEC value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmailPEC(): ?string
    {
        return $this->EmailPEC ?? null;
    }

    /**
     * Set EmailPEC value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $emailPEC
     *
     * @return CorporateProfile
     */
    public function setEmailPEC(?string $emailPEC = null): self
    {
        // validation for constraint: string
        if (!is_null($emailPEC) && !is_string($emailPEC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailPEC, true), gettype($emailPEC)), __LINE__);
        }
        if (is_null($emailPEC) || (is_array($emailPEC) && empty($emailPEC))) {
            unset($this->EmailPEC);
        } else {
            $this->EmailPEC = $emailPEC;
        }

        return $this;
    }

    /**
     * Get ContactPerson value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Contact|null
     */
    public function getContactPerson(): ?\Ntvspa\Big\Session\Structs\Contact
    {
        return $this->ContactPerson ?? null;
    }

    /**
     * Set ContactPerson value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Contact $contactPerson
     *
     * @return CorporateProfile
     */
    public function setContactPerson(?\Ntvspa\Big\Session\Structs\Contact $contactPerson = null): self
    {
        if (is_null($contactPerson) || (is_array($contactPerson) && empty($contactPerson))) {
            unset($this->ContactPerson);
        } else {
            $this->ContactPerson = $contactPerson;
        }

        return $this;
    }

    /**
     * Get CorporateSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CorporateSegment|null
     */
    public function getCorporateSegment(): ?\Ntvspa\Big\Session\Structs\CorporateSegment
    {
        return $this->CorporateSegment ?? null;
    }

    /**
     * Set CorporateSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CorporateSegment $corporateSegment
     *
     * @return CorporateProfile
     */
    public function setCorporateSegment(?\Ntvspa\Big\Session\Structs\CorporateSegment $corporateSegment = null): self
    {
        if (is_null($corporateSegment) || (is_array($corporateSegment) && empty($corporateSegment))) {
            unset($this->CorporateSegment);
        } else {
            $this->CorporateSegment = $corporateSegment;
        }

        return $this;
    }

    /**
     * Get CashBackOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CashBackDetails|null
     */
    public function getCashBackOffer(): ?\Ntvspa\Big\Session\Structs\CashBackDetails
    {
        return $this->CashBackOffer ?? null;
    }

    /**
     * Set CashBackOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CashBackDetails $cashBackOffer
     *
     * @return CorporateProfile
     */
    public function setCashBackOffer(?\Ntvspa\Big\Session\Structs\CashBackDetails $cashBackOffer = null): self
    {
        if (is_null($cashBackOffer) || (is_array($cashBackOffer) && empty($cashBackOffer))) {
            unset($this->CashBackOffer);
        } else {
            $this->CashBackOffer = $cashBackOffer;
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
     * @return CorporateProfile
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
     * Get Promotion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Promotion|null
     */
    public function getPromotion(): ?\Ntvspa\Big\Session\Structs\Promotion
    {
        return $this->Promotion ?? null;
    }

    /**
     * Set Promotion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Promotion $promotion
     *
     * @return CorporateProfile
     */
    public function setPromotion(?\Ntvspa\Big\Session\Structs\Promotion $promotion = null): self
    {
        if (is_null($promotion) || (is_array($promotion) && empty($promotion))) {
            unset($this->Promotion);
        } else {
            $this->Promotion = $promotion;
        }

        return $this;
    }
}
