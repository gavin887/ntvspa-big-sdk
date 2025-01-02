<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\JourneyDirection;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JourneySpecialOperation Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:JourneySpecialOperation
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class JourneySpecialOperation extends AbstractStructBase
{
    /**
     * The LeaveNowJourneyDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $LeaveNowJourneyDirection = null;
    /**
     * The IsGruppi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $IsGruppi = null;
    /**
     * The LeaveNowPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $LeaveNowPrice = null;
    /**
     * The LeaveNow
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $LeaveNow = null;

    /**
     * Constructor method for JourneySpecialOperation
     *
     * @param string $leaveNowJourneyDirection
     * @param bool   $isGruppi
     * @param float  $leaveNowPrice
     * @param bool   $leaveNow
     *
     * @uses JourneySpecialOperation::setLeaveNowJourneyDirection()
     * @uses JourneySpecialOperation::setIsGruppi()
     * @uses JourneySpecialOperation::setLeaveNowPrice()
     * @uses JourneySpecialOperation::setLeaveNow()
     */
    public function __construct(?string $leaveNowJourneyDirection = null, ?bool $isGruppi = null, ?float $leaveNowPrice = null, ?bool $leaveNow = null)
    {
        $this
            ->setLeaveNowJourneyDirection($leaveNowJourneyDirection)
            ->setIsGruppi($isGruppi)
            ->setLeaveNowPrice($leaveNowPrice)
            ->setLeaveNow($leaveNow);
    }

    /**
     * Get LeaveNowJourneyDirection value
     *
     * @return string|null
     */
    public function getLeaveNowJourneyDirection(): ?string
    {
        return $this->LeaveNowJourneyDirection;
    }

    /**
     * Set LeaveNowJourneyDirection value
     *
     * @param string $leaveNowJourneyDirection
     *
     * @return JourneySpecialOperation
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\JourneyDirection::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\JourneyDirection::valueIsValid()
     */
    public function setLeaveNowJourneyDirection(?string $leaveNowJourneyDirection = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\JourneyDirection::valueIsValid($leaveNowJourneyDirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\JourneyDirection', is_array($leaveNowJourneyDirection) ? implode(', ', $leaveNowJourneyDirection) : var_export($leaveNowJourneyDirection, true), implode(', ', JourneyDirection::getValidValues())), __LINE__);
        }
        $this->LeaveNowJourneyDirection = $leaveNowJourneyDirection;

        return $this;
    }

    /**
     * Get IsGruppi value
     *
     * @return bool|null
     */
    public function getIsGruppi(): ?bool
    {
        return $this->IsGruppi;
    }

    /**
     * Set IsGruppi value
     *
     * @param bool $isGruppi
     *
     * @return JourneySpecialOperation
     */
    public function setIsGruppi(?bool $isGruppi = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGruppi) && !is_bool($isGruppi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGruppi, true), gettype($isGruppi)), __LINE__);
        }
        $this->IsGruppi = $isGruppi;

        return $this;
    }

    /**
     * Get LeaveNowPrice value
     *
     * @return float|null
     */
    public function getLeaveNowPrice(): ?float
    {
        return $this->LeaveNowPrice;
    }

    /**
     * Set LeaveNowPrice value
     *
     * @param float $leaveNowPrice
     *
     * @return JourneySpecialOperation
     */
    public function setLeaveNowPrice(?float $leaveNowPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($leaveNowPrice) && !(is_float($leaveNowPrice) || is_numeric($leaveNowPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($leaveNowPrice, true), gettype($leaveNowPrice)), __LINE__);
        }
        $this->LeaveNowPrice = $leaveNowPrice;

        return $this;
    }

    /**
     * Get LeaveNow value
     *
     * @return bool|null
     */
    public function getLeaveNow(): ?bool
    {
        return $this->LeaveNow;
    }

    /**
     * Set LeaveNow value
     *
     * @param bool $leaveNow
     *
     * @return JourneySpecialOperation
     */
    public function setLeaveNow(?bool $leaveNow = null): self
    {
        // validation for constraint: boolean
        if (!is_null($leaveNow) && !is_bool($leaveNow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($leaveNow, true), gettype($leaveNow)), __LINE__);
        }
        $this->LeaveNow = $leaveNow;

        return $this;
    }
}
