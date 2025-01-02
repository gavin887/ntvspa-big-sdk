<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Summary Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Summary
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Summary extends AbstractStructBase
{
    /**
     * The InvoicesAmountTotal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $InvoicesAmountTotal = null;
    /**
     * The InvoicesNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $InvoicesNumber = null;
    /**
     * The CostItemsAmountTotal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $CostItemsAmountTotal = null;
    /**
     * The CostItemsNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $CostItemsNumber = null;

    /**
     * Constructor method for Summary
     *
     * @param float $invoicesAmountTotal
     * @param int   $invoicesNumber
     * @param float $costItemsAmountTotal
     * @param int   $costItemsNumber
     *
     * @uses Summary::setInvoicesAmountTotal()
     * @uses Summary::setInvoicesNumber()
     * @uses Summary::setCostItemsAmountTotal()
     * @uses Summary::setCostItemsNumber()
     */
    public function __construct(?float $invoicesAmountTotal = null, ?int $invoicesNumber = null, ?float $costItemsAmountTotal = null, ?int $costItemsNumber = null)
    {
        $this
            ->setInvoicesAmountTotal($invoicesAmountTotal)
            ->setInvoicesNumber($invoicesNumber)
            ->setCostItemsAmountTotal($costItemsAmountTotal)
            ->setCostItemsNumber($costItemsNumber);
    }

    /**
     * Get InvoicesAmountTotal value
     *
     * @return float|null
     */
    public function getInvoicesAmountTotal(): ?float
    {
        return $this->InvoicesAmountTotal;
    }

    /**
     * Set InvoicesAmountTotal value
     *
     * @param float $invoicesAmountTotal
     *
     * @return Summary
     */
    public function setInvoicesAmountTotal(?float $invoicesAmountTotal = null): self
    {
        // validation for constraint: float
        if (!is_null($invoicesAmountTotal) && !(is_float($invoicesAmountTotal) || is_numeric($invoicesAmountTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoicesAmountTotal, true), gettype($invoicesAmountTotal)), __LINE__);
        }
        $this->InvoicesAmountTotal = $invoicesAmountTotal;

        return $this;
    }

    /**
     * Get InvoicesNumber value
     *
     * @return int|null
     */
    public function getInvoicesNumber(): ?int
    {
        return $this->InvoicesNumber;
    }

    /**
     * Set InvoicesNumber value
     *
     * @param int $invoicesNumber
     *
     * @return Summary
     */
    public function setInvoicesNumber(?int $invoicesNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($invoicesNumber) && !(is_int($invoicesNumber) || ctype_digit($invoicesNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoicesNumber, true), gettype($invoicesNumber)), __LINE__);
        }
        $this->InvoicesNumber = $invoicesNumber;

        return $this;
    }

    /**
     * Get CostItemsAmountTotal value
     *
     * @return float|null
     */
    public function getCostItemsAmountTotal(): ?float
    {
        return $this->CostItemsAmountTotal;
    }

    /**
     * Set CostItemsAmountTotal value
     *
     * @param float $costItemsAmountTotal
     *
     * @return Summary
     */
    public function setCostItemsAmountTotal(?float $costItemsAmountTotal = null): self
    {
        // validation for constraint: float
        if (!is_null($costItemsAmountTotal) && !(is_float($costItemsAmountTotal) || is_numeric($costItemsAmountTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($costItemsAmountTotal, true), gettype($costItemsAmountTotal)), __LINE__);
        }
        $this->CostItemsAmountTotal = $costItemsAmountTotal;

        return $this;
    }

    /**
     * Get CostItemsNumber value
     *
     * @return int|null
     */
    public function getCostItemsNumber(): ?int
    {
        return $this->CostItemsNumber;
    }

    /**
     * Set CostItemsNumber value
     *
     * @param int $costItemsNumber
     *
     * @return Summary
     */
    public function setCostItemsNumber(?int $costItemsNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($costItemsNumber) && !(is_int($costItemsNumber) || ctype_digit($costItemsNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($costItemsNumber, true), gettype($costItemsNumber)), __LINE__);
        }
        $this->CostItemsNumber = $costItemsNumber;

        return $this;
    }
}
