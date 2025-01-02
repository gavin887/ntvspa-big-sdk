<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Distruption Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Distruption
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Distruption extends AbstractStructBase
{
    /**
     * The DelayAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $DelayAmount = null;
    /**
     * The Warning
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $Warning = null;
    /**
     * The RunningState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $RunningState = null;
    /**
     * The LocationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LocationCode = null;

    /**
     * Constructor method for Distruption
     *
     * @param int    $delayAmount
     * @param bool   $warning
     * @param int    $runningState
     * @param string $locationCode
     *
     * @uses Distruption::setDelayAmount()
     * @uses Distruption::setWarning()
     * @uses Distruption::setRunningState()
     * @uses Distruption::setLocationCode()
     */
    public function __construct(?int $delayAmount = null, ?bool $warning = null, ?int $runningState = null, ?string $locationCode = null)
    {
        $this
            ->setDelayAmount($delayAmount)
            ->setWarning($warning)
            ->setRunningState($runningState)
            ->setLocationCode($locationCode);
    }

    /**
     * Get DelayAmount value
     *
     * @return int|null
     */
    public function getDelayAmount(): ?int
    {
        return $this->DelayAmount;
    }

    /**
     * Set DelayAmount value
     *
     * @param int $delayAmount
     *
     * @return Distruption
     */
    public function setDelayAmount(?int $delayAmount = null): self
    {
        // validation for constraint: int
        if (!is_null($delayAmount) && !(is_int($delayAmount) || ctype_digit($delayAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delayAmount, true), gettype($delayAmount)), __LINE__);
        }
        $this->DelayAmount = $delayAmount;

        return $this;
    }

    /**
     * Get Warning value
     *
     * @return bool|null
     */
    public function getWarning(): ?bool
    {
        return $this->Warning;
    }

    /**
     * Set Warning value
     *
     * @param bool $warning
     *
     * @return Distruption
     */
    public function setWarning(?bool $warning = null): self
    {
        // validation for constraint: boolean
        if (!is_null($warning) && !is_bool($warning)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($warning, true), gettype($warning)), __LINE__);
        }
        $this->Warning = $warning;

        return $this;
    }

    /**
     * Get RunningState value
     *
     * @return int|null
     */
    public function getRunningState(): ?int
    {
        return $this->RunningState;
    }

    /**
     * Set RunningState value
     *
     * @param int $runningState
     *
     * @return Distruption
     */
    public function setRunningState(?int $runningState = null): self
    {
        // validation for constraint: int
        if (!is_null($runningState) && !(is_int($runningState) || ctype_digit($runningState))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($runningState, true), gettype($runningState)), __LINE__);
        }
        $this->RunningState = $runningState;

        return $this;
    }

    /**
     * Get LocationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLocationCode(): ?string
    {
        return $this->LocationCode ?? null;
    }

    /**
     * Set LocationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $locationCode
     *
     * @return Distruption
     */
    public function setLocationCode(?string $locationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationCode, true), gettype($locationCode)), __LINE__);
        }
        if (is_null($locationCode) || (is_array($locationCode) && empty($locationCode))) {
            unset($this->LocationCode);
        } else {
            $this->LocationCode = $locationCode;
        }

        return $this;
    }
}
