<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BlackPeriodPurchase Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BlackPeriodPurchase
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BlackPeriodPurchase extends AbstractStructBase
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
     * Constructor method for BlackPeriodPurchase
     *
     * @param string $startDate
     * @param string $endDate
     *
     * @uses BlackPeriodPurchase::setStartDate()
     * @uses BlackPeriodPurchase::setEndDate()
     */
    public function __construct(?string $startDate = null, ?string $endDate = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate);
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
     * @return BlackPeriodPurchase
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
     * @return BlackPeriodPurchase
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
}
