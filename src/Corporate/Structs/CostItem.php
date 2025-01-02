<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CostItem Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CostItem
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CostItem extends AbstractStructBase
{
    /**
     * The DateCalculation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $DateCalculation = null;
    /**
     * The IVAPercentage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $IVAPercentage = null;
    /**
     * The GrossAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $GrossAmount = null;
    /**
     * The IVAAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $IVAAmount = null;
    /**
     * The NetAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $NetAmount = null;
    /**
     * The Cause
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Cause = null;
    /**
     * The PNR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PNR = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Environment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Environment = null;
    /**
     * The Fare
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Fare = null;
    /**
     * The ContactName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ContactName = null;
    /**
     * The ContactSurname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ContactSurname = null;
    /**
     * The TravelAgentId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TravelAgentId = null;
    /**
     * The JourneyDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $JourneyDate = null;
    /**
     * The Url
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Url = null;

    /**
     * Constructor method for CostItem
     *
     * @param string $dateCalculation
     * @param float  $iVAPercentage
     * @param float  $grossAmount
     * @param float  $iVAAmount
     * @param float  $netAmount
     * @param string $cause
     * @param string $pNR
     * @param string $description
     * @param string $environment
     * @param string $fare
     * @param string $contactName
     * @param string $contactSurname
     * @param string $travelAgentId
     * @param string $journeyDate
     * @param string $url
     *
     * @uses CostItem::setDateCalculation()
     * @uses CostItem::setIVAPercentage()
     * @uses CostItem::setGrossAmount()
     * @uses CostItem::setIVAAmount()
     * @uses CostItem::setNetAmount()
     * @uses CostItem::setCause()
     * @uses CostItem::setPNR()
     * @uses CostItem::setDescription()
     * @uses CostItem::setEnvironment()
     * @uses CostItem::setFare()
     * @uses CostItem::setContactName()
     * @uses CostItem::setContactSurname()
     * @uses CostItem::setTravelAgentId()
     * @uses CostItem::setJourneyDate()
     * @uses CostItem::setUrl()
     */
    public function __construct(?string $dateCalculation = null, ?float $iVAPercentage = null, ?float $grossAmount = null, ?float $iVAAmount = null, ?float $netAmount = null, ?string $cause = null, ?string $pNR = null, ?string $description = null, ?string $environment = null, ?string $fare = null, ?string $contactName = null, ?string $contactSurname = null, ?string $travelAgentId = null, ?string $journeyDate = null, ?string $url = null)
    {
        $this
            ->setDateCalculation($dateCalculation)
            ->setIVAPercentage($iVAPercentage)
            ->setGrossAmount($grossAmount)
            ->setIVAAmount($iVAAmount)
            ->setNetAmount($netAmount)
            ->setCause($cause)
            ->setPNR($pNR)
            ->setDescription($description)
            ->setEnvironment($environment)
            ->setFare($fare)
            ->setContactName($contactName)
            ->setContactSurname($contactSurname)
            ->setTravelAgentId($travelAgentId)
            ->setJourneyDate($journeyDate)
            ->setUrl($url);
    }

    /**
     * Get DateCalculation value
     *
     * @return string|null
     */
    public function getDateCalculation(): ?string
    {
        return $this->DateCalculation;
    }

    /**
     * Set DateCalculation value
     *
     * @param string $dateCalculation
     *
     * @return CostItem
     */
    public function setDateCalculation(?string $dateCalculation = null): self
    {
        // validation for constraint: string
        if (!is_null($dateCalculation) && !is_string($dateCalculation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCalculation, true), gettype($dateCalculation)), __LINE__);
        }
        $this->DateCalculation = $dateCalculation;

        return $this;
    }

    /**
     * Get IVAPercentage value
     *
     * @return float|null
     */
    public function getIVAPercentage(): ?float
    {
        return $this->IVAPercentage;
    }

    /**
     * Set IVAPercentage value
     *
     * @param float $iVAPercentage
     *
     * @return CostItem
     */
    public function setIVAPercentage(?float $iVAPercentage = null): self
    {
        // validation for constraint: float
        if (!is_null($iVAPercentage) && !(is_float($iVAPercentage) || is_numeric($iVAPercentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($iVAPercentage, true), gettype($iVAPercentage)), __LINE__);
        }
        $this->IVAPercentage = $iVAPercentage;

        return $this;
    }

    /**
     * Get GrossAmount value
     *
     * @return float|null
     */
    public function getGrossAmount(): ?float
    {
        return $this->GrossAmount;
    }

    /**
     * Set GrossAmount value
     *
     * @param float $grossAmount
     *
     * @return CostItem
     */
    public function setGrossAmount(?float $grossAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($grossAmount) && !(is_float($grossAmount) || is_numeric($grossAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grossAmount, true), gettype($grossAmount)), __LINE__);
        }
        $this->GrossAmount = $grossAmount;

        return $this;
    }

    /**
     * Get IVAAmount value
     *
     * @return float|null
     */
    public function getIVAAmount(): ?float
    {
        return $this->IVAAmount;
    }

    /**
     * Set IVAAmount value
     *
     * @param float $iVAAmount
     *
     * @return CostItem
     */
    public function setIVAAmount(?float $iVAAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($iVAAmount) && !(is_float($iVAAmount) || is_numeric($iVAAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($iVAAmount, true), gettype($iVAAmount)), __LINE__);
        }
        $this->IVAAmount = $iVAAmount;

        return $this;
    }

    /**
     * Get NetAmount value
     *
     * @return float|null
     */
    public function getNetAmount(): ?float
    {
        return $this->NetAmount;
    }

    /**
     * Set NetAmount value
     *
     * @param float $netAmount
     *
     * @return CostItem
     */
    public function setNetAmount(?float $netAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($netAmount) && !(is_float($netAmount) || is_numeric($netAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netAmount, true), gettype($netAmount)), __LINE__);
        }
        $this->NetAmount = $netAmount;

        return $this;
    }

    /**
     * Get Cause value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCause(): ?string
    {
        return $this->Cause ?? null;
    }

    /**
     * Set Cause value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cause
     *
     * @return CostItem
     */
    public function setCause(?string $cause = null): self
    {
        // validation for constraint: string
        if (!is_null($cause) && !is_string($cause)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cause, true), gettype($cause)), __LINE__);
        }
        if (is_null($cause) || (is_array($cause) && empty($cause))) {
            unset($this->Cause);
        } else {
            $this->Cause = $cause;
        }

        return $this;
    }

    /**
     * Get PNR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPNR(): ?string
    {
        return $this->PNR ?? null;
    }

    /**
     * Set PNR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $pNR
     *
     * @return CostItem
     */
    public function setPNR(?string $pNR = null): self
    {
        // validation for constraint: string
        if (!is_null($pNR) && !is_string($pNR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pNR, true), gettype($pNR)), __LINE__);
        }
        if (is_null($pNR) || (is_array($pNR) && empty($pNR))) {
            unset($this->PNR);
        } else {
            $this->PNR = $pNR;
        }

        return $this;
    }

    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }

    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $description
     *
     * @return CostItem
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }

        return $this;
    }

    /**
     * Get Environment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEnvironment(): ?string
    {
        return $this->Environment ?? null;
    }

    /**
     * Set Environment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $environment
     *
     * @return CostItem
     */
    public function setEnvironment(?string $environment = null): self
    {
        // validation for constraint: string
        if (!is_null($environment) && !is_string($environment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($environment, true), gettype($environment)), __LINE__);
        }
        if (is_null($environment) || (is_array($environment) && empty($environment))) {
            unset($this->Environment);
        } else {
            $this->Environment = $environment;
        }

        return $this;
    }

    /**
     * Get Fare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFare(): ?string
    {
        return $this->Fare ?? null;
    }

    /**
     * Set Fare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fare
     *
     * @return CostItem
     */
    public function setFare(?string $fare = null): self
    {
        // validation for constraint: string
        if (!is_null($fare) && !is_string($fare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fare, true), gettype($fare)), __LINE__);
        }
        if (is_null($fare) || (is_array($fare) && empty($fare))) {
            unset($this->Fare);
        } else {
            $this->Fare = $fare;
        }

        return $this;
    }

    /**
     * Get ContactName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getContactName(): ?string
    {
        return $this->ContactName ?? null;
    }

    /**
     * Set ContactName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $contactName
     *
     * @return CostItem
     */
    public function setContactName(?string $contactName = null): self
    {
        // validation for constraint: string
        if (!is_null($contactName) && !is_string($contactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactName, true), gettype($contactName)), __LINE__);
        }
        if (is_null($contactName) || (is_array($contactName) && empty($contactName))) {
            unset($this->ContactName);
        } else {
            $this->ContactName = $contactName;
        }

        return $this;
    }

    /**
     * Get ContactSurname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getContactSurname(): ?string
    {
        return $this->ContactSurname ?? null;
    }

    /**
     * Set ContactSurname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $contactSurname
     *
     * @return CostItem
     */
    public function setContactSurname(?string $contactSurname = null): self
    {
        // validation for constraint: string
        if (!is_null($contactSurname) && !is_string($contactSurname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactSurname, true), gettype($contactSurname)), __LINE__);
        }
        if (is_null($contactSurname) || (is_array($contactSurname) && empty($contactSurname))) {
            unset($this->ContactSurname);
        } else {
            $this->ContactSurname = $contactSurname;
        }

        return $this;
    }

    /**
     * Get TravelAgentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTravelAgentId(): ?string
    {
        return $this->TravelAgentId ?? null;
    }

    /**
     * Set TravelAgentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $travelAgentId
     *
     * @return CostItem
     */
    public function setTravelAgentId(?string $travelAgentId = null): self
    {
        // validation for constraint: string
        if (!is_null($travelAgentId) && !is_string($travelAgentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelAgentId, true), gettype($travelAgentId)), __LINE__);
        }
        if (is_null($travelAgentId) || (is_array($travelAgentId) && empty($travelAgentId))) {
            unset($this->TravelAgentId);
        } else {
            $this->TravelAgentId = $travelAgentId;
        }

        return $this;
    }

    /**
     * Get JourneyDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getJourneyDate(): ?string
    {
        return $this->JourneyDate ?? null;
    }

    /**
     * Set JourneyDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $journeyDate
     *
     * @return CostItem
     */
    public function setJourneyDate(?string $journeyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($journeyDate) && !is_string($journeyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($journeyDate, true), gettype($journeyDate)), __LINE__);
        }
        if (is_null($journeyDate) || (is_array($journeyDate) && empty($journeyDate))) {
            unset($this->JourneyDate);
        } else {
            $this->JourneyDate = $journeyDate;
        }

        return $this;
    }

    /**
     * Get Url value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->Url ?? null;
    }

    /**
     * Set Url value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $url
     *
     * @return CostItem
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        if (is_null($url) || (is_array($url) && empty($url))) {
            unset($this->Url);
        } else {
            $this->Url = $url;
        }

        return $this;
    }
}
