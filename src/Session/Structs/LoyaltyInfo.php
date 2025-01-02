<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyInfo Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LoyaltyInfo
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class LoyaltyInfo extends AbstractStructBase
{
    /**
     * The AvailableLoyaltyPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AvailableLoyaltyPoints = null;
    /**
     * The QualifyingPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $QualifyingPoints = null;
    /**
     * The NextTierGapPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $NextTierGapPoints = null;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ExpirationDate = null;
    /**
     * The AmexCardHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $AmexCardHolder = null;
    /**
     * The JourneyCompleted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $JourneyCompleted = null;
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
     * Constructor method for LoyaltyInfo
     *
     * @param int    $availableLoyaltyPoints
     * @param int    $qualifyingPoints
     * @param int    $nextTierGapPoints
     * @param string $expirationDate
     * @param bool   $amexCardHolder
     * @param int    $journeyCompleted
     * @param string $loyaltyLevel
     *
     * @uses LoyaltyInfo::setAvailableLoyaltyPoints()
     * @uses LoyaltyInfo::setQualifyingPoints()
     * @uses LoyaltyInfo::setNextTierGapPoints()
     * @uses LoyaltyInfo::setExpirationDate()
     * @uses LoyaltyInfo::setAmexCardHolder()
     * @uses LoyaltyInfo::setJourneyCompleted()
     * @uses LoyaltyInfo::setLoyaltyLevel()
     */
    public function __construct(?int $availableLoyaltyPoints = null, ?int $qualifyingPoints = null, ?int $nextTierGapPoints = null, ?string $expirationDate = null, ?bool $amexCardHolder = null, ?int $journeyCompleted = null, ?string $loyaltyLevel = null)
    {
        $this
            ->setAvailableLoyaltyPoints($availableLoyaltyPoints)
            ->setQualifyingPoints($qualifyingPoints)
            ->setNextTierGapPoints($nextTierGapPoints)
            ->setExpirationDate($expirationDate)
            ->setAmexCardHolder($amexCardHolder)
            ->setJourneyCompleted($journeyCompleted)
            ->setLoyaltyLevel($loyaltyLevel);
    }

    /**
     * Get AvailableLoyaltyPoints value
     *
     * @return int|null
     */
    public function getAvailableLoyaltyPoints(): ?int
    {
        return $this->AvailableLoyaltyPoints;
    }

    /**
     * Set AvailableLoyaltyPoints value
     *
     * @param int $availableLoyaltyPoints
     *
     * @return LoyaltyInfo
     */
    public function setAvailableLoyaltyPoints(?int $availableLoyaltyPoints = null): self
    {
        // validation for constraint: int
        if (!is_null($availableLoyaltyPoints) && !(is_int($availableLoyaltyPoints) || ctype_digit($availableLoyaltyPoints))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availableLoyaltyPoints, true), gettype($availableLoyaltyPoints)), __LINE__);
        }
        $this->AvailableLoyaltyPoints = $availableLoyaltyPoints;

        return $this;
    }

    /**
     * Get QualifyingPoints value
     *
     * @return int|null
     */
    public function getQualifyingPoints(): ?int
    {
        return $this->QualifyingPoints;
    }

    /**
     * Set QualifyingPoints value
     *
     * @param int $qualifyingPoints
     *
     * @return LoyaltyInfo
     */
    public function setQualifyingPoints(?int $qualifyingPoints = null): self
    {
        // validation for constraint: int
        if (!is_null($qualifyingPoints) && !(is_int($qualifyingPoints) || ctype_digit($qualifyingPoints))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($qualifyingPoints, true), gettype($qualifyingPoints)), __LINE__);
        }
        $this->QualifyingPoints = $qualifyingPoints;

        return $this;
    }

    /**
     * Get NextTierGapPoints value
     *
     * @return int|null
     */
    public function getNextTierGapPoints(): ?int
    {
        return $this->NextTierGapPoints;
    }

    /**
     * Set NextTierGapPoints value
     *
     * @param int $nextTierGapPoints
     *
     * @return LoyaltyInfo
     */
    public function setNextTierGapPoints(?int $nextTierGapPoints = null): self
    {
        // validation for constraint: int
        if (!is_null($nextTierGapPoints) && !(is_int($nextTierGapPoints) || ctype_digit($nextTierGapPoints))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nextTierGapPoints, true), gettype($nextTierGapPoints)), __LINE__);
        }
        $this->NextTierGapPoints = $nextTierGapPoints;

        return $this;
    }

    /**
     * Get ExpirationDate value
     *
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->ExpirationDate;
    }

    /**
     * Set ExpirationDate value
     *
     * @param string $expirationDate
     *
     * @return LoyaltyInfo
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get AmexCardHolder value
     *
     * @return bool|null
     */
    public function getAmexCardHolder(): ?bool
    {
        return $this->AmexCardHolder;
    }

    /**
     * Set AmexCardHolder value
     *
     * @param bool $amexCardHolder
     *
     * @return LoyaltyInfo
     */
    public function setAmexCardHolder(?bool $amexCardHolder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($amexCardHolder) && !is_bool($amexCardHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($amexCardHolder, true), gettype($amexCardHolder)), __LINE__);
        }
        $this->AmexCardHolder = $amexCardHolder;

        return $this;
    }

    /**
     * Get JourneyCompleted value
     *
     * @return int|null
     */
    public function getJourneyCompleted(): ?int
    {
        return $this->JourneyCompleted;
    }

    /**
     * Set JourneyCompleted value
     *
     * @param int $journeyCompleted
     *
     * @return LoyaltyInfo
     */
    public function setJourneyCompleted(?int $journeyCompleted = null): self
    {
        // validation for constraint: int
        if (!is_null($journeyCompleted) && !(is_int($journeyCompleted) || ctype_digit($journeyCompleted))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journeyCompleted, true), gettype($journeyCompleted)), __LINE__);
        }
        $this->JourneyCompleted = $journeyCompleted;

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
     * @return LoyaltyInfo
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
}
