<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingSum Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BookingSum
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BookingSum extends AbstractStructBase
{
    /**
     * The AuthorizedBalanceDue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $AuthorizedBalanceDue = null;
    /**
     * The BalanceDue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $BalanceDue = null;
    /**
     * The TotalCost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $TotalCost = null;
    /**
     * The TotalLoyaltyPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $TotalLoyaltyPoints = null;
    /**
     * The TotalDepositAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $TotalDepositAmount = null;
    /**
     * The AssetId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AssetId = null;
    /**
     * The AssetType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AssetType = null;

    /**
     * Constructor method for BookingSum
     *
     * @param float  $authorizedBalanceDue
     * @param float  $balanceDue
     * @param float  $totalCost
     * @param float  $totalLoyaltyPoints
     * @param float  $totalDepositAmount
     * @param string $assetId
     * @param string $assetType
     *
     * @uses BookingSum::setAuthorizedBalanceDue()
     * @uses BookingSum::setBalanceDue()
     * @uses BookingSum::setTotalCost()
     * @uses BookingSum::setTotalLoyaltyPoints()
     * @uses BookingSum::setTotalDepositAmount()
     * @uses BookingSum::setAssetId()
     * @uses BookingSum::setAssetType()
     */
    public function __construct(?float $authorizedBalanceDue = null, ?float $balanceDue = null, ?float $totalCost = null, ?float $totalLoyaltyPoints = null, ?float $totalDepositAmount = null, ?string $assetId = null, ?string $assetType = null)
    {
        $this
            ->setAuthorizedBalanceDue($authorizedBalanceDue)
            ->setBalanceDue($balanceDue)
            ->setTotalCost($totalCost)
            ->setTotalLoyaltyPoints($totalLoyaltyPoints)
            ->setTotalDepositAmount($totalDepositAmount)
            ->setAssetId($assetId)
            ->setAssetType($assetType);
    }

    /**
     * Get AuthorizedBalanceDue value
     *
     * @return float|null
     */
    public function getAuthorizedBalanceDue(): ?float
    {
        return $this->AuthorizedBalanceDue;
    }

    /**
     * Set AuthorizedBalanceDue value
     *
     * @param float $authorizedBalanceDue
     *
     * @return BookingSum
     */
    public function setAuthorizedBalanceDue(?float $authorizedBalanceDue = null): self
    {
        // validation for constraint: float
        if (!is_null($authorizedBalanceDue) && !(is_float($authorizedBalanceDue) || is_numeric($authorizedBalanceDue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($authorizedBalanceDue, true), gettype($authorizedBalanceDue)), __LINE__);
        }
        $this->AuthorizedBalanceDue = $authorizedBalanceDue;

        return $this;
    }

    /**
     * Get BalanceDue value
     *
     * @return float|null
     */
    public function getBalanceDue(): ?float
    {
        return $this->BalanceDue;
    }

    /**
     * Set BalanceDue value
     *
     * @param float $balanceDue
     *
     * @return BookingSum
     */
    public function setBalanceDue(?float $balanceDue = null): self
    {
        // validation for constraint: float
        if (!is_null($balanceDue) && !(is_float($balanceDue) || is_numeric($balanceDue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balanceDue, true), gettype($balanceDue)), __LINE__);
        }
        $this->BalanceDue = $balanceDue;

        return $this;
    }

    /**
     * Get TotalCost value
     *
     * @return float|null
     */
    public function getTotalCost(): ?float
    {
        return $this->TotalCost;
    }

    /**
     * Set TotalCost value
     *
     * @param float $totalCost
     *
     * @return BookingSum
     */
    public function setTotalCost(?float $totalCost = null): self
    {
        // validation for constraint: float
        if (!is_null($totalCost) && !(is_float($totalCost) || is_numeric($totalCost))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCost, true), gettype($totalCost)), __LINE__);
        }
        $this->TotalCost = $totalCost;

        return $this;
    }

    /**
     * Get TotalLoyaltyPoints value
     *
     * @return float|null
     */
    public function getTotalLoyaltyPoints(): ?float
    {
        return $this->TotalLoyaltyPoints;
    }

    /**
     * Set TotalLoyaltyPoints value
     *
     * @param float $totalLoyaltyPoints
     *
     * @return BookingSum
     */
    public function setTotalLoyaltyPoints(?float $totalLoyaltyPoints = null): self
    {
        // validation for constraint: float
        if (!is_null($totalLoyaltyPoints) && !(is_float($totalLoyaltyPoints) || is_numeric($totalLoyaltyPoints))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalLoyaltyPoints, true), gettype($totalLoyaltyPoints)), __LINE__);
        }
        $this->TotalLoyaltyPoints = $totalLoyaltyPoints;

        return $this;
    }

    /**
     * Get TotalDepositAmount value
     *
     * @return float|null
     */
    public function getTotalDepositAmount(): ?float
    {
        return $this->TotalDepositAmount;
    }

    /**
     * Set TotalDepositAmount value
     *
     * @param float $totalDepositAmount
     *
     * @return BookingSum
     */
    public function setTotalDepositAmount(?float $totalDepositAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalDepositAmount) && !(is_float($totalDepositAmount) || is_numeric($totalDepositAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalDepositAmount, true), gettype($totalDepositAmount)), __LINE__);
        }
        $this->TotalDepositAmount = $totalDepositAmount;

        return $this;
    }

    /**
     * Get AssetId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAssetId(): ?string
    {
        return $this->AssetId ?? null;
    }

    /**
     * Set AssetId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $assetId
     *
     * @return BookingSum
     */
    public function setAssetId(?string $assetId = null): self
    {
        // validation for constraint: string
        if (!is_null($assetId) && !is_string($assetId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assetId, true), gettype($assetId)), __LINE__);
        }
        if (is_null($assetId) || (is_array($assetId) && empty($assetId))) {
            unset($this->AssetId);
        } else {
            $this->AssetId = $assetId;
        }

        return $this;
    }

    /**
     * Get AssetType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAssetType(): ?string
    {
        return $this->AssetType ?? null;
    }

    /**
     * Set AssetType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $assetType
     *
     * @return BookingSum
     */
    public function setAssetType(?string $assetType = null): self
    {
        // validation for constraint: string
        if (!is_null($assetType) && !is_string($assetType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assetType, true), gettype($assetType)), __LINE__);
        }
        if (is_null($assetType) || (is_array($assetType) && empty($assetType))) {
            unset($this->AssetType);
        } else {
            $this->AssetType = $assetType;
        }

        return $this;
    }
}
