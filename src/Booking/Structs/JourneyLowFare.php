<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JourneyLowFare Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:JourneyLowFare
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class JourneyLowFare extends AbstractStructBase
{
    /**
     * The STD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $STD = null;
    /**
     * The STA
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $STA = null;
    /**
     * The BestFareForJourneyPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $BestFareForJourneyPrice = null;
    /**
     * The AvailableCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AvailableCount = null;
    /**
     * The TrainNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TrainNumber = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CurrencyCode = null;

    /**
     * Constructor method for JourneyLowFare
     *
     * @param string $sTD
     * @param string $sTA
     * @param float  $bestFareForJourneyPrice
     * @param int    $availableCount
     * @param string $trainNumber
     * @param string $currencyCode
     *
     * @uses JourneyLowFare::setSTD()
     * @uses JourneyLowFare::setSTA()
     * @uses JourneyLowFare::setBestFareForJourneyPrice()
     * @uses JourneyLowFare::setAvailableCount()
     * @uses JourneyLowFare::setTrainNumber()
     * @uses JourneyLowFare::setCurrencyCode()
     */
    public function __construct(?string $sTD = null, ?string $sTA = null, ?float $bestFareForJourneyPrice = null, ?int $availableCount = null, ?string $trainNumber = null, ?string $currencyCode = null)
    {
        $this
            ->setSTD($sTD)
            ->setSTA($sTA)
            ->setBestFareForJourneyPrice($bestFareForJourneyPrice)
            ->setAvailableCount($availableCount)
            ->setTrainNumber($trainNumber)
            ->setCurrencyCode($currencyCode);
    }

    /**
     * Get STD value
     *
     * @return string|null
     */
    public function getSTD(): ?string
    {
        return $this->STD;
    }

    /**
     * Set STD value
     *
     * @param string $sTD
     *
     * @return JourneyLowFare
     */
    public function setSTD(?string $sTD = null): self
    {
        // validation for constraint: string
        if (!is_null($sTD) && !is_string($sTD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sTD, true), gettype($sTD)), __LINE__);
        }
        $this->STD = $sTD;

        return $this;
    }

    /**
     * Get STA value
     *
     * @return string|null
     */
    public function getSTA(): ?string
    {
        return $this->STA;
    }

    /**
     * Set STA value
     *
     * @param string $sTA
     *
     * @return JourneyLowFare
     */
    public function setSTA(?string $sTA = null): self
    {
        // validation for constraint: string
        if (!is_null($sTA) && !is_string($sTA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sTA, true), gettype($sTA)), __LINE__);
        }
        $this->STA = $sTA;

        return $this;
    }

    /**
     * Get BestFareForJourneyPrice value
     *
     * @return float|null
     */
    public function getBestFareForJourneyPrice(): ?float
    {
        return $this->BestFareForJourneyPrice;
    }

    /**
     * Set BestFareForJourneyPrice value
     *
     * @param float $bestFareForJourneyPrice
     *
     * @return JourneyLowFare
     */
    public function setBestFareForJourneyPrice(?float $bestFareForJourneyPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($bestFareForJourneyPrice) && !(is_float($bestFareForJourneyPrice) || is_numeric($bestFareForJourneyPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bestFareForJourneyPrice, true), gettype($bestFareForJourneyPrice)), __LINE__);
        }
        $this->BestFareForJourneyPrice = $bestFareForJourneyPrice;

        return $this;
    }

    /**
     * Get AvailableCount value
     *
     * @return int|null
     */
    public function getAvailableCount(): ?int
    {
        return $this->AvailableCount;
    }

    /**
     * Set AvailableCount value
     *
     * @param int $availableCount
     *
     * @return JourneyLowFare
     */
    public function setAvailableCount(?int $availableCount = null): self
    {
        // validation for constraint: int
        if (!is_null($availableCount) && !(is_int($availableCount) || ctype_digit($availableCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availableCount, true), gettype($availableCount)), __LINE__);
        }
        $this->AvailableCount = $availableCount;

        return $this;
    }

    /**
     * Get TrainNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTrainNumber(): ?string
    {
        return $this->TrainNumber ?? null;
    }

    /**
     * Set TrainNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $trainNumber
     *
     * @return JourneyLowFare
     */
    public function setTrainNumber(?string $trainNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($trainNumber) && !is_string($trainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainNumber, true), gettype($trainNumber)), __LINE__);
        }
        if (is_null($trainNumber) || (is_array($trainNumber) && empty($trainNumber))) {
            unset($this->TrainNumber);
        } else {
            $this->TrainNumber = $trainNumber;
        }

        return $this;
    }

    /**
     * Get CurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->CurrencyCode ?? null;
    }

    /**
     * Set CurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $currencyCode
     *
     * @return JourneyLowFare
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        if (is_null($currencyCode) || (is_array($currencyCode) && empty($currencyCode))) {
            unset($this->CurrencyCode);
        } else {
            $this->CurrencyCode = $currencyCode;
        }

        return $this;
    }
}
