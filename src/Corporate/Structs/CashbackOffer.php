<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashbackOffer Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CashbackOffer
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CashbackOffer extends AbstractStructBase
{
    /**
     * The DefaultOffer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $DefaultOffer = null;
    /**
     * The OfferPercentage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $OfferPercentage = null;
    /**
     * The OfferCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OfferCode = null;
    /**
     * The OfferName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OfferName = null;
    /**
     * The ConditionDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ConditionDescription = null;
    /**
     * The HowDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $HowDescription = null;
    /**
     * The ValidityDays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ValidityDays = null;
    /**
     * The WebPercentage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $WebPercentage = null;
    /**
     * The WebPercentageDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $WebPercentageDescription = null;
    /**
     * The FilterList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var FilterList|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\FilterList $FilterList = null;

    /**
     * Constructor method for CashbackOffer
     *
     * @param bool       $defaultOffer
     * @param float      $offerPercentage
     * @param string     $offerCode
     * @param string     $offerName
     * @param string     $conditionDescription
     * @param string     $howDescription
     * @param string     $validityDays
     * @param string     $webPercentage
     * @param string     $webPercentageDescription
     * @param FilterList $filterList
     *
     * @uses CashbackOffer::setDefaultOffer()
     * @uses CashbackOffer::setOfferPercentage()
     * @uses CashbackOffer::setOfferCode()
     * @uses CashbackOffer::setOfferName()
     * @uses CashbackOffer::setConditionDescription()
     * @uses CashbackOffer::setHowDescription()
     * @uses CashbackOffer::setValidityDays()
     * @uses CashbackOffer::setWebPercentage()
     * @uses CashbackOffer::setWebPercentageDescription()
     * @uses CashbackOffer::setFilterList()
     */
    public function __construct(?bool $defaultOffer = null, ?float $offerPercentage = null, ?string $offerCode = null, ?string $offerName = null, ?string $conditionDescription = null, ?string $howDescription = null, ?string $validityDays = null, ?string $webPercentage = null, ?string $webPercentageDescription = null, ?\Ntvspa\Big\Corporate\Structs\FilterList $filterList = null)
    {
        $this
            ->setDefaultOffer($defaultOffer)
            ->setOfferPercentage($offerPercentage)
            ->setOfferCode($offerCode)
            ->setOfferName($offerName)
            ->setConditionDescription($conditionDescription)
            ->setHowDescription($howDescription)
            ->setValidityDays($validityDays)
            ->setWebPercentage($webPercentage)
            ->setWebPercentageDescription($webPercentageDescription)
            ->setFilterList($filterList);
    }

    /**
     * Get DefaultOffer value
     *
     * @return bool|null
     */
    public function getDefaultOffer(): ?bool
    {
        return $this->DefaultOffer;
    }

    /**
     * Set DefaultOffer value
     *
     * @param bool $defaultOffer
     *
     * @return CashbackOffer
     */
    public function setDefaultOffer(?bool $defaultOffer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($defaultOffer) && !is_bool($defaultOffer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($defaultOffer, true), gettype($defaultOffer)), __LINE__);
        }
        $this->DefaultOffer = $defaultOffer;

        return $this;
    }

    /**
     * Get OfferPercentage value
     *
     * @return float|null
     */
    public function getOfferPercentage(): ?float
    {
        return $this->OfferPercentage;
    }

    /**
     * Set OfferPercentage value
     *
     * @param float $offerPercentage
     *
     * @return CashbackOffer
     */
    public function setOfferPercentage(?float $offerPercentage = null): self
    {
        // validation for constraint: float
        if (!is_null($offerPercentage) && !(is_float($offerPercentage) || is_numeric($offerPercentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($offerPercentage, true), gettype($offerPercentage)), __LINE__);
        }
        $this->OfferPercentage = $offerPercentage;

        return $this;
    }

    /**
     * Get OfferCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getOfferCode(): ?string
    {
        return $this->OfferCode ?? null;
    }

    /**
     * Set OfferCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $offerCode
     *
     * @return CashbackOffer
     */
    public function setOfferCode(?string $offerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($offerCode) && !is_string($offerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerCode, true), gettype($offerCode)), __LINE__);
        }
        if (is_null($offerCode) || (is_array($offerCode) && empty($offerCode))) {
            unset($this->OfferCode);
        } else {
            $this->OfferCode = $offerCode;
        }

        return $this;
    }

    /**
     * Get OfferName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getOfferName(): ?string
    {
        return $this->OfferName ?? null;
    }

    /**
     * Set OfferName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $offerName
     *
     * @return CashbackOffer
     */
    public function setOfferName(?string $offerName = null): self
    {
        // validation for constraint: string
        if (!is_null($offerName) && !is_string($offerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerName, true), gettype($offerName)), __LINE__);
        }
        if (is_null($offerName) || (is_array($offerName) && empty($offerName))) {
            unset($this->OfferName);
        } else {
            $this->OfferName = $offerName;
        }

        return $this;
    }

    /**
     * Get ConditionDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getConditionDescription(): ?string
    {
        return $this->ConditionDescription ?? null;
    }

    /**
     * Set ConditionDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $conditionDescription
     *
     * @return CashbackOffer
     */
    public function setConditionDescription(?string $conditionDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($conditionDescription) && !is_string($conditionDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conditionDescription, true), gettype($conditionDescription)), __LINE__);
        }
        if (is_null($conditionDescription) || (is_array($conditionDescription) && empty($conditionDescription))) {
            unset($this->ConditionDescription);
        } else {
            $this->ConditionDescription = $conditionDescription;
        }

        return $this;
    }

    /**
     * Get HowDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getHowDescription(): ?string
    {
        return $this->HowDescription ?? null;
    }

    /**
     * Set HowDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $howDescription
     *
     * @return CashbackOffer
     */
    public function setHowDescription(?string $howDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($howDescription) && !is_string($howDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($howDescription, true), gettype($howDescription)), __LINE__);
        }
        if (is_null($howDescription) || (is_array($howDescription) && empty($howDescription))) {
            unset($this->HowDescription);
        } else {
            $this->HowDescription = $howDescription;
        }

        return $this;
    }

    /**
     * Get ValidityDays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getValidityDays(): ?string
    {
        return $this->ValidityDays ?? null;
    }

    /**
     * Set ValidityDays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $validityDays
     *
     * @return CashbackOffer
     */
    public function setValidityDays(?string $validityDays = null): self
    {
        // validation for constraint: string
        if (!is_null($validityDays) && !is_string($validityDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validityDays, true), gettype($validityDays)), __LINE__);
        }
        if (is_null($validityDays) || (is_array($validityDays) && empty($validityDays))) {
            unset($this->ValidityDays);
        } else {
            $this->ValidityDays = $validityDays;
        }

        return $this;
    }

    /**
     * Get WebPercentage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getWebPercentage(): ?string
    {
        return $this->WebPercentage ?? null;
    }

    /**
     * Set WebPercentage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $webPercentage
     *
     * @return CashbackOffer
     */
    public function setWebPercentage(?string $webPercentage = null): self
    {
        // validation for constraint: string
        if (!is_null($webPercentage) && !is_string($webPercentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webPercentage, true), gettype($webPercentage)), __LINE__);
        }
        if (is_null($webPercentage) || (is_array($webPercentage) && empty($webPercentage))) {
            unset($this->WebPercentage);
        } else {
            $this->WebPercentage = $webPercentage;
        }

        return $this;
    }

    /**
     * Get WebPercentageDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getWebPercentageDescription(): ?string
    {
        return $this->WebPercentageDescription ?? null;
    }

    /**
     * Set WebPercentageDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $webPercentageDescription
     *
     * @return CashbackOffer
     */
    public function setWebPercentageDescription(?string $webPercentageDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($webPercentageDescription) && !is_string($webPercentageDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webPercentageDescription, true), gettype($webPercentageDescription)), __LINE__);
        }
        if (is_null($webPercentageDescription) || (is_array($webPercentageDescription) && empty($webPercentageDescription))) {
            unset($this->WebPercentageDescription);
        } else {
            $this->WebPercentageDescription = $webPercentageDescription;
        }

        return $this;
    }

    /**
     * Get FilterList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return FilterList|null
     */
    public function getFilterList(): ?\Ntvspa\Big\Corporate\Structs\FilterList
    {
        return $this->FilterList ?? null;
    }

    /**
     * Set FilterList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param FilterList $filterList
     *
     * @return CashbackOffer
     */
    public function setFilterList(?\Ntvspa\Big\Corporate\Structs\FilterList $filterList = null): self
    {
        if (is_null($filterList) || (is_array($filterList) && empty($filterList))) {
            unset($this->FilterList);
        } else {
            $this->FilterList = $filterList;
        }

        return $this;
    }
}
