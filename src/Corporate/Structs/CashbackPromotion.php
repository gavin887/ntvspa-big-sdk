<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashbackPromotion Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CashbackPromotion
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CashbackPromotion extends AbstractStructBase
{
    /**
     * The DateStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $DateStart = null;
    /**
     * The DateEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $DateEnd = null;
    /**
     * The EligibilityThreshold
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $EligibilityThreshold = null;
    /**
     * The ReachedThreshold
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ReachedThreshold = null;
    /**
     * The PromotionCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionCode = null;
    /**
     * The PromotionName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionName = null;
    /**
     * The PromotionDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionDescription = null;
    /**
     * The PromotionInformationURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionInformationURL = null;
    /**
     * The PromotionState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionState = null;
    /**
     * The ReachedValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ReachedValue = null;
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
     * Constructor method for CashbackPromotion
     *
     * @param string     $dateStart
     * @param string     $dateEnd
     * @param float      $eligibilityThreshold
     * @param bool       $reachedThreshold
     * @param string     $promotionCode
     * @param string     $promotionName
     * @param string     $promotionDescription
     * @param string     $promotionInformationURL
     * @param string     $promotionState
     * @param string     $reachedValue
     * @param FilterList $filterList
     *
     * @uses CashbackPromotion::setDateStart()
     * @uses CashbackPromotion::setDateEnd()
     * @uses CashbackPromotion::setEligibilityThreshold()
     * @uses CashbackPromotion::setReachedThreshold()
     * @uses CashbackPromotion::setPromotionCode()
     * @uses CashbackPromotion::setPromotionName()
     * @uses CashbackPromotion::setPromotionDescription()
     * @uses CashbackPromotion::setPromotionInformationURL()
     * @uses CashbackPromotion::setPromotionState()
     * @uses CashbackPromotion::setReachedValue()
     * @uses CashbackPromotion::setFilterList()
     */
    public function __construct(?string $dateStart = null, ?string $dateEnd = null, ?float $eligibilityThreshold = null, ?bool $reachedThreshold = null, ?string $promotionCode = null, ?string $promotionName = null, ?string $promotionDescription = null, ?string $promotionInformationURL = null, ?string $promotionState = null, ?string $reachedValue = null, ?\Ntvspa\Big\Corporate\Structs\FilterList $filterList = null)
    {
        $this
            ->setDateStart($dateStart)
            ->setDateEnd($dateEnd)
            ->setEligibilityThreshold($eligibilityThreshold)
            ->setReachedThreshold($reachedThreshold)
            ->setPromotionCode($promotionCode)
            ->setPromotionName($promotionName)
            ->setPromotionDescription($promotionDescription)
            ->setPromotionInformationURL($promotionInformationURL)
            ->setPromotionState($promotionState)
            ->setReachedValue($reachedValue)
            ->setFilterList($filterList);
    }

    /**
     * Get DateStart value
     *
     * @return string|null
     */
    public function getDateStart(): ?string
    {
        return $this->DateStart;
    }

    /**
     * Set DateStart value
     *
     * @param string $dateStart
     *
     * @return CashbackPromotion
     */
    public function setDateStart(?string $dateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($dateStart) && !is_string($dateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateStart, true), gettype($dateStart)), __LINE__);
        }
        $this->DateStart = $dateStart;

        return $this;
    }

    /**
     * Get DateEnd value
     *
     * @return string|null
     */
    public function getDateEnd(): ?string
    {
        return $this->DateEnd;
    }

    /**
     * Set DateEnd value
     *
     * @param string $dateEnd
     *
     * @return CashbackPromotion
     */
    public function setDateEnd(?string $dateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($dateEnd) && !is_string($dateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateEnd, true), gettype($dateEnd)), __LINE__);
        }
        $this->DateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get EligibilityThreshold value
     *
     * @return float|null
     */
    public function getEligibilityThreshold(): ?float
    {
        return $this->EligibilityThreshold;
    }

    /**
     * Set EligibilityThreshold value
     *
     * @param float $eligibilityThreshold
     *
     * @return CashbackPromotion
     */
    public function setEligibilityThreshold(?float $eligibilityThreshold = null): self
    {
        // validation for constraint: float
        if (!is_null($eligibilityThreshold) && !(is_float($eligibilityThreshold) || is_numeric($eligibilityThreshold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($eligibilityThreshold, true), gettype($eligibilityThreshold)), __LINE__);
        }
        $this->EligibilityThreshold = $eligibilityThreshold;

        return $this;
    }

    /**
     * Get ReachedThreshold value
     *
     * @return bool|null
     */
    public function getReachedThreshold(): ?bool
    {
        return $this->ReachedThreshold;
    }

    /**
     * Set ReachedThreshold value
     *
     * @param bool $reachedThreshold
     *
     * @return CashbackPromotion
     */
    public function setReachedThreshold(?bool $reachedThreshold = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reachedThreshold) && !is_bool($reachedThreshold)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reachedThreshold, true), gettype($reachedThreshold)), __LINE__);
        }
        $this->ReachedThreshold = $reachedThreshold;

        return $this;
    }

    /**
     * Get PromotionCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionCode(): ?string
    {
        return $this->PromotionCode ?? null;
    }

    /**
     * Set PromotionCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionCode
     *
     * @return CashbackPromotion
     */
    public function setPromotionCode(?string $promotionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionCode, true), gettype($promotionCode)), __LINE__);
        }
        if (is_null($promotionCode) || (is_array($promotionCode) && empty($promotionCode))) {
            unset($this->PromotionCode);
        } else {
            $this->PromotionCode = $promotionCode;
        }

        return $this;
    }

    /**
     * Get PromotionName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionName(): ?string
    {
        return $this->PromotionName ?? null;
    }

    /**
     * Set PromotionName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionName
     *
     * @return CashbackPromotion
     */
    public function setPromotionName(?string $promotionName = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionName) && !is_string($promotionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionName, true), gettype($promotionName)), __LINE__);
        }
        if (is_null($promotionName) || (is_array($promotionName) && empty($promotionName))) {
            unset($this->PromotionName);
        } else {
            $this->PromotionName = $promotionName;
        }

        return $this;
    }

    /**
     * Get PromotionDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionDescription(): ?string
    {
        return $this->PromotionDescription ?? null;
    }

    /**
     * Set PromotionDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionDescription
     *
     * @return CashbackPromotion
     */
    public function setPromotionDescription(?string $promotionDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionDescription) && !is_string($promotionDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionDescription, true), gettype($promotionDescription)), __LINE__);
        }
        if (is_null($promotionDescription) || (is_array($promotionDescription) && empty($promotionDescription))) {
            unset($this->PromotionDescription);
        } else {
            $this->PromotionDescription = $promotionDescription;
        }

        return $this;
    }

    /**
     * Get PromotionInformationURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionInformationURL(): ?string
    {
        return $this->PromotionInformationURL ?? null;
    }

    /**
     * Set PromotionInformationURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionInformationURL
     *
     * @return CashbackPromotion
     */
    public function setPromotionInformationURL(?string $promotionInformationURL = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionInformationURL) && !is_string($promotionInformationURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionInformationURL, true), gettype($promotionInformationURL)), __LINE__);
        }
        if (is_null($promotionInformationURL) || (is_array($promotionInformationURL) && empty($promotionInformationURL))) {
            unset($this->PromotionInformationURL);
        } else {
            $this->PromotionInformationURL = $promotionInformationURL;
        }

        return $this;
    }

    /**
     * Get PromotionState value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionState(): ?string
    {
        return $this->PromotionState ?? null;
    }

    /**
     * Set PromotionState value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionState
     *
     * @return CashbackPromotion
     */
    public function setPromotionState(?string $promotionState = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionState) && !is_string($promotionState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionState, true), gettype($promotionState)), __LINE__);
        }
        if (is_null($promotionState) || (is_array($promotionState) && empty($promotionState))) {
            unset($this->PromotionState);
        } else {
            $this->PromotionState = $promotionState;
        }

        return $this;
    }

    /**
     * Get ReachedValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getReachedValue(): ?string
    {
        return $this->ReachedValue ?? null;
    }

    /**
     * Set ReachedValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $reachedValue
     *
     * @return CashbackPromotion
     */
    public function setReachedValue(?string $reachedValue = null): self
    {
        // validation for constraint: string
        if (!is_null($reachedValue) && !is_string($reachedValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reachedValue, true), gettype($reachedValue)), __LINE__);
        }
        if (is_null($reachedValue) || (is_array($reachedValue) && empty($reachedValue))) {
            unset($this->ReachedValue);
        } else {
            $this->ReachedValue = $reachedValue;
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
     * @return CashbackPromotion
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
