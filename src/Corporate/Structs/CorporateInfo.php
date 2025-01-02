<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CorporateInfo Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CorporateInfo
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CorporateInfo extends AbstractStructBase
{
    /**
     * The ConsensusToCommercialInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToCommercialInformation = null;
    /**
     * The ConsensusToThirdPartyPrivacy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToThirdPartyPrivacy = null;
    /**
     * The ConsensusToProfilingInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToProfilingInformation = null;
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
     * The PromoterCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromoterCode = null;
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
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CorporateAddress|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\CorporateAddress $Address = null;
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
     * Constructor method for CorporateInfo
     *
     * @param bool             $consensusToCommercialInformation
     * @param bool             $consensusToThirdPartyPrivacy
     * @param bool             $consensusToProfilingInformation
     * @param bool             $flagOnlus
     * @param bool             $flagGruppoIva
     * @param string           $tradingName
     * @param string           $vatNumber
     * @param string           $promoterCode
     * @param string           $emailPEC
     * @param string           $recipientCode
     * @param CorporateAddress $address
     * @param string           $fiscalCode
     *
     * @uses CorporateInfo::setConsensusToCommercialInformation()
     * @uses CorporateInfo::setConsensusToThirdPartyPrivacy()
     * @uses CorporateInfo::setConsensusToProfilingInformation()
     * @uses CorporateInfo::setFlagOnlus()
     * @uses CorporateInfo::setFlagGruppoIva()
     * @uses CorporateInfo::setTradingName()
     * @uses CorporateInfo::setVatNumber()
     * @uses CorporateInfo::setPromoterCode()
     * @uses CorporateInfo::setEmailPEC()
     * @uses CorporateInfo::setRecipientCode()
     * @uses CorporateInfo::setAddress()
     * @uses CorporateInfo::setFiscalCode()
     */
    public function __construct(?bool $consensusToCommercialInformation = null, ?bool $consensusToThirdPartyPrivacy = null, ?bool $consensusToProfilingInformation = null, ?bool $flagOnlus = null, ?bool $flagGruppoIva = null, ?string $tradingName = null, ?string $vatNumber = null, ?string $promoterCode = null, ?string $emailPEC = null, ?string $recipientCode = null, ?\Ntvspa\Big\Corporate\Structs\CorporateAddress $address = null, ?string $fiscalCode = null)
    {
        $this
            ->setConsensusToCommercialInformation($consensusToCommercialInformation)
            ->setConsensusToThirdPartyPrivacy($consensusToThirdPartyPrivacy)
            ->setConsensusToProfilingInformation($consensusToProfilingInformation)
            ->setFlagOnlus($flagOnlus)
            ->setFlagGruppoIva($flagGruppoIva)
            ->setTradingName($tradingName)
            ->setVatNumber($vatNumber)
            ->setPromoterCode($promoterCode)
            ->setEmailPEC($emailPEC)
            ->setRecipientCode($recipientCode)
            ->setAddress($address)
            ->setFiscalCode($fiscalCode);
    }

    /**
     * Get ConsensusToCommercialInformation value
     *
     * @return bool|null
     */
    public function getConsensusToCommercialInformation(): ?bool
    {
        return $this->ConsensusToCommercialInformation;
    }

    /**
     * Set ConsensusToCommercialInformation value
     *
     * @param bool $consensusToCommercialInformation
     *
     * @return CorporateInfo
     */
    public function setConsensusToCommercialInformation(?bool $consensusToCommercialInformation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToCommercialInformation) && !is_bool($consensusToCommercialInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToCommercialInformation, true), gettype($consensusToCommercialInformation)), __LINE__);
        }
        $this->ConsensusToCommercialInformation = $consensusToCommercialInformation;

        return $this;
    }

    /**
     * Get ConsensusToThirdPartyPrivacy value
     *
     * @return bool|null
     */
    public function getConsensusToThirdPartyPrivacy(): ?bool
    {
        return $this->ConsensusToThirdPartyPrivacy;
    }

    /**
     * Set ConsensusToThirdPartyPrivacy value
     *
     * @param bool $consensusToThirdPartyPrivacy
     *
     * @return CorporateInfo
     */
    public function setConsensusToThirdPartyPrivacy(?bool $consensusToThirdPartyPrivacy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToThirdPartyPrivacy) && !is_bool($consensusToThirdPartyPrivacy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToThirdPartyPrivacy, true), gettype($consensusToThirdPartyPrivacy)), __LINE__);
        }
        $this->ConsensusToThirdPartyPrivacy = $consensusToThirdPartyPrivacy;

        return $this;
    }

    /**
     * Get ConsensusToProfilingInformation value
     *
     * @return bool|null
     */
    public function getConsensusToProfilingInformation(): ?bool
    {
        return $this->ConsensusToProfilingInformation;
    }

    /**
     * Set ConsensusToProfilingInformation value
     *
     * @param bool $consensusToProfilingInformation
     *
     * @return CorporateInfo
     */
    public function setConsensusToProfilingInformation(?bool $consensusToProfilingInformation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToProfilingInformation) && !is_bool($consensusToProfilingInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToProfilingInformation, true), gettype($consensusToProfilingInformation)), __LINE__);
        }
        $this->ConsensusToProfilingInformation = $consensusToProfilingInformation;

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
     * @return CorporateInfo
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
     * @return CorporateInfo
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
     * @return CorporateInfo
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
     * @return CorporateInfo
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
     * Get PromoterCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromoterCode(): ?string
    {
        return $this->PromoterCode ?? null;
    }

    /**
     * Set PromoterCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promoterCode
     *
     * @return CorporateInfo
     */
    public function setPromoterCode(?string $promoterCode = null): self
    {
        // validation for constraint: string
        if (!is_null($promoterCode) && !is_string($promoterCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promoterCode, true), gettype($promoterCode)), __LINE__);
        }
        if (is_null($promoterCode) || (is_array($promoterCode) && empty($promoterCode))) {
            unset($this->PromoterCode);
        } else {
            $this->PromoterCode = $promoterCode;
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
     * @return CorporateInfo
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
     * @return CorporateInfo
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CorporateAddress|null
     */
    public function getAddress(): ?\Ntvspa\Big\Corporate\Structs\CorporateAddress
    {
        return $this->Address ?? null;
    }

    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CorporateAddress $address
     *
     * @return CorporateInfo
     */
    public function setAddress(?\Ntvspa\Big\Corporate\Structs\CorporateAddress $address = null): self
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
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
     * @return CorporateInfo
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
}
