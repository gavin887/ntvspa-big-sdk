<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SSRState;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErasabilityOption Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ErasabilityOption
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ErasabilityOption extends AbstractStructBase
{
    /**
     * The Operation
     *
     * @var string|null
     */
    protected ?string $Operation = null;
    /**
     * The Selected
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $Selected = null;
    /**
     * The UntilMin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $UntilMin = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Percentage = null;

    /**
     * Constructor method for ErasabilityOption
     *
     * @param string $operation
     * @param bool   $selected
     * @param int    $untilMin
     * @param float  $amount
     * @param string $percentage
     *
     * @uses ErasabilityOption::setOperation()
     * @uses ErasabilityOption::setSelected()
     * @uses ErasabilityOption::setUntilMin()
     * @uses ErasabilityOption::setAmount()
     * @uses ErasabilityOption::setPercentage()
     */
    public function __construct(?string $operation = null, ?bool $selected = null, ?int $untilMin = null, ?float $amount = null, ?string $percentage = null)
    {
        $this
            ->setOperation($operation)
            ->setSelected($selected)
            ->setUntilMin($untilMin)
            ->setAmount($amount)
            ->setPercentage($percentage);
    }

    /**
     * Get Operation value
     *
     * @return string|null
     */
    public function getOperation(): ?string
    {
        return $this->Operation;
    }

    /**
     * Set Operation value
     *
     * @param string $operation
     *
     * @return ErasabilityOption
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SSRState::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SSRState::valueIsValid()
     */
    public function setOperation(?string $operation = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SSRState::valueIsValid($operation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SSRState', is_array($operation) ? implode(', ', $operation) : var_export($operation, true), implode(', ', SSRState::getValidValues())), __LINE__);
        }
        $this->Operation = $operation;

        return $this;
    }

    /**
     * Get Selected value
     *
     * @return bool|null
     */
    public function getSelected(): ?bool
    {
        return $this->Selected;
    }

    /**
     * Set Selected value
     *
     * @param bool $selected
     *
     * @return ErasabilityOption
     */
    public function setSelected(?bool $selected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->Selected = $selected;

        return $this;
    }

    /**
     * Get UntilMin value
     *
     * @return int|null
     */
    public function getUntilMin(): ?int
    {
        return $this->UntilMin;
    }

    /**
     * Set UntilMin value
     *
     * @param int $untilMin
     *
     * @return ErasabilityOption
     */
    public function setUntilMin(?int $untilMin = null): self
    {
        // validation for constraint: int
        if (!is_null($untilMin) && !(is_int($untilMin) || ctype_digit($untilMin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($untilMin, true), gettype($untilMin)), __LINE__);
        }
        $this->UntilMin = $untilMin;

        return $this;
    }

    /**
     * Get Amount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount ?? null;
    }

    /**
     * Set Amount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param float $amount
     *
     * @return ErasabilityOption
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        if (is_null($amount) || (is_array($amount) && empty($amount))) {
            unset($this->Amount);
        } else {
            $this->Amount = $amount;
        }

        return $this;
    }

    /**
     * Get Percentage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPercentage(): ?string
    {
        return $this->Percentage ?? null;
    }

    /**
     * Set Percentage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $percentage
     *
     * @return ErasabilityOption
     */
    public function setPercentage(?string $percentage = null): self
    {
        // validation for constraint: string
        if (!is_null($percentage) && !is_string($percentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        if (is_null($percentage) || (is_array($percentage) && empty($percentage))) {
            unset($this->Percentage);
        } else {
            $this->Percentage = $percentage;
        }

        return $this;
    }
}
