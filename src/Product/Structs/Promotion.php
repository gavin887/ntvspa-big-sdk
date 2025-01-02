<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Promotion Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Promotion
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Promotion extends AbstractStructBase
{
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The PromotionPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $PromotionPrice = null;
    /**
     * The PromotionVAT
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $PromotionVAT = null;
    /**
     * The PromotionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionID = null;
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
     * Constructor method for Promotion
     *
     * @param string $startDate
     * @param string $endDate
     * @param float  $promotionPrice
     * @param float  $promotionVAT
     * @param string $promotionID
     * @param string $promotionName
     * @param string $promotionDescription
     *
     * @uses Promotion::setStartDate()
     * @uses Promotion::setEndDate()
     * @uses Promotion::setPromotionPrice()
     * @uses Promotion::setPromotionVAT()
     * @uses Promotion::setPromotionID()
     * @uses Promotion::setPromotionName()
     * @uses Promotion::setPromotionDescription()
     */
    public function __construct(?string $startDate = null, ?string $endDate = null, ?float $promotionPrice = null, ?float $promotionVAT = null, ?string $promotionID = null, ?string $promotionName = null, ?string $promotionDescription = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setPromotionPrice($promotionPrice)
            ->setPromotionVAT($promotionVAT)
            ->setPromotionID($promotionID)
            ->setPromotionName($promotionName)
            ->setPromotionDescription($promotionDescription);
    }

    /**
     * Get StartDate value
     *
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }

    /**
     * Set StartDate value
     *
     * @param string $startDate
     *
     * @return Promotion
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * Get EndDate value
     *
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }

    /**
     * Set EndDate value
     *
     * @param string $endDate
     *
     * @return Promotion
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;

        return $this;
    }

    /**
     * Get PromotionPrice value
     *
     * @return float|null
     */
    public function getPromotionPrice(): ?float
    {
        return $this->PromotionPrice;
    }

    /**
     * Set PromotionPrice value
     *
     * @param float $promotionPrice
     *
     * @return Promotion
     */
    public function setPromotionPrice(?float $promotionPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($promotionPrice) && !(is_float($promotionPrice) || is_numeric($promotionPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($promotionPrice, true), gettype($promotionPrice)), __LINE__);
        }
        $this->PromotionPrice = $promotionPrice;

        return $this;
    }

    /**
     * Get PromotionVAT value
     *
     * @return float|null
     */
    public function getPromotionVAT(): ?float
    {
        return $this->PromotionVAT;
    }

    /**
     * Set PromotionVAT value
     *
     * @param float $promotionVAT
     *
     * @return Promotion
     */
    public function setPromotionVAT(?float $promotionVAT = null): self
    {
        // validation for constraint: float
        if (!is_null($promotionVAT) && !(is_float($promotionVAT) || is_numeric($promotionVAT))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($promotionVAT, true), gettype($promotionVAT)), __LINE__);
        }
        $this->PromotionVAT = $promotionVAT;

        return $this;
    }

    /**
     * Get PromotionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionID(): ?string
    {
        return $this->PromotionID ?? null;
    }

    /**
     * Set PromotionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionID
     *
     * @return Promotion
     */
    public function setPromotionID(?string $promotionID = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionID) && !is_string($promotionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionID, true), gettype($promotionID)), __LINE__);
        }
        if (is_null($promotionID) || (is_array($promotionID) && empty($promotionID))) {
            unset($this->PromotionID);
        } else {
            $this->PromotionID = $promotionID;
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
     * @return Promotion
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
     * @return Promotion
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
}
