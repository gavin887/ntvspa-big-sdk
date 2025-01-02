<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JourneyPromotionApplicable Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:JourneyPromotionApplicable
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class JourneyPromotionApplicable extends AbstractStructBase
{
    /**
     * The PromotionAmountDuePerPax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $PromotionAmountDuePerPax = null;
    /**
     * The JourneySellKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $JourneySellKey = null;

    /**
     * Constructor method for JourneyPromotionApplicable
     *
     * @param float  $promotionAmountDuePerPax
     * @param string $journeySellKey
     *
     * @uses JourneyPromotionApplicable::setPromotionAmountDuePerPax()
     * @uses JourneyPromotionApplicable::setJourneySellKey()
     */
    public function __construct(?float $promotionAmountDuePerPax = null, ?string $journeySellKey = null)
    {
        $this
            ->setPromotionAmountDuePerPax($promotionAmountDuePerPax)
            ->setJourneySellKey($journeySellKey);
    }

    /**
     * Get PromotionAmountDuePerPax value
     *
     * @return float|null
     */
    public function getPromotionAmountDuePerPax(): ?float
    {
        return $this->PromotionAmountDuePerPax;
    }

    /**
     * Set PromotionAmountDuePerPax value
     *
     * @param float $promotionAmountDuePerPax
     *
     * @return JourneyPromotionApplicable
     */
    public function setPromotionAmountDuePerPax(?float $promotionAmountDuePerPax = null): self
    {
        // validation for constraint: float
        if (!is_null($promotionAmountDuePerPax) && !(is_float($promotionAmountDuePerPax) || is_numeric($promotionAmountDuePerPax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($promotionAmountDuePerPax, true), gettype($promotionAmountDuePerPax)), __LINE__);
        }
        $this->PromotionAmountDuePerPax = $promotionAmountDuePerPax;

        return $this;
    }

    /**
     * Get JourneySellKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getJourneySellKey(): ?string
    {
        return $this->JourneySellKey ?? null;
    }

    /**
     * Set JourneySellKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $journeySellKey
     *
     * @return JourneyPromotionApplicable
     */
    public function setJourneySellKey(?string $journeySellKey = null): self
    {
        // validation for constraint: string
        if (!is_null($journeySellKey) && !is_string($journeySellKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($journeySellKey, true), gettype($journeySellKey)), __LINE__);
        }
        if (is_null($journeySellKey) || (is_array($journeySellKey) && empty($journeySellKey))) {
            unset($this->JourneySellKey);
        } else {
            $this->JourneySellKey = $journeySellKey;
        }

        return $this;
    }
}
