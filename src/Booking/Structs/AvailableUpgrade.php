<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableUpgrade Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailableUpgrade
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AvailableUpgrade extends AbstractStructBase
{
    /**
     * The AvailableCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AvailableCount = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The OriginalClassOfService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OriginalClassOfService = null;
    /**
     * The UpgradeClassOfService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $UpgradeClassOfService = null;
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
     * Constructor method for AvailableUpgrade
     *
     * @param int    $availableCount
     * @param float  $amount
     * @param string $originalClassOfService
     * @param string $upgradeClassOfService
     * @param string $currencyCode
     *
     * @uses AvailableUpgrade::setAvailableCount()
     * @uses AvailableUpgrade::setAmount()
     * @uses AvailableUpgrade::setOriginalClassOfService()
     * @uses AvailableUpgrade::setUpgradeClassOfService()
     * @uses AvailableUpgrade::setCurrencyCode()
     */
    public function __construct(?int $availableCount = null, ?float $amount = null, ?string $originalClassOfService = null, ?string $upgradeClassOfService = null, ?string $currencyCode = null)
    {
        $this
            ->setAvailableCount($availableCount)
            ->setAmount($amount)
            ->setOriginalClassOfService($originalClassOfService)
            ->setUpgradeClassOfService($upgradeClassOfService)
            ->setCurrencyCode($currencyCode);
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
     * @return AvailableUpgrade
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
     * Get Amount value
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount;
    }

    /**
     * Set Amount value
     *
     * @param float $amount
     *
     * @return AvailableUpgrade
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;

        return $this;
    }

    /**
     * Get OriginalClassOfService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getOriginalClassOfService(): ?string
    {
        return $this->OriginalClassOfService ?? null;
    }

    /**
     * Set OriginalClassOfService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $originalClassOfService
     *
     * @return AvailableUpgrade
     */
    public function setOriginalClassOfService(?string $originalClassOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($originalClassOfService) && !is_string($originalClassOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalClassOfService, true), gettype($originalClassOfService)), __LINE__);
        }
        if (is_null($originalClassOfService) || (is_array($originalClassOfService) && empty($originalClassOfService))) {
            unset($this->OriginalClassOfService);
        } else {
            $this->OriginalClassOfService = $originalClassOfService;
        }

        return $this;
    }

    /**
     * Get UpgradeClassOfService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getUpgradeClassOfService(): ?string
    {
        return $this->UpgradeClassOfService ?? null;
    }

    /**
     * Set UpgradeClassOfService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $upgradeClassOfService
     *
     * @return AvailableUpgrade
     */
    public function setUpgradeClassOfService(?string $upgradeClassOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($upgradeClassOfService) && !is_string($upgradeClassOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($upgradeClassOfService, true), gettype($upgradeClassOfService)), __LINE__);
        }
        if (is_null($upgradeClassOfService) || (is_array($upgradeClassOfService) && empty($upgradeClassOfService))) {
            unset($this->UpgradeClassOfService);
        } else {
            $this->UpgradeClassOfService = $upgradeClassOfService;
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
     * @return AvailableUpgrade
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
