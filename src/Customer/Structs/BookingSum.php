<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

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
     * Constructor method for BookingSum
     *
     * @param float $authorizedBalanceDue
     * @param float $balanceDue
     * @param float $totalCost
     * @param float $totalLoyaltyPoints
     * @param float $totalDepositAmount
     *
     * @uses BookingSum::setAuthorizedBalanceDue()
     * @uses BookingSum::setBalanceDue()
     * @uses BookingSum::setTotalCost()
     * @uses BookingSum::setTotalLoyaltyPoints()
     * @uses BookingSum::setTotalDepositAmount()
     */
    public function __construct(?float $authorizedBalanceDue = null, ?float $balanceDue = null, ?float $totalCost = null, ?float $totalLoyaltyPoints = null, ?float $totalDepositAmount = null)
    {
        $this
            ->setAuthorizedBalanceDue($authorizedBalanceDue)
            ->setBalanceDue($balanceDue)
            ->setTotalCost($totalCost)
            ->setTotalLoyaltyPoints($totalLoyaltyPoints)
            ->setTotalDepositAmount($totalDepositAmount);
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
}
