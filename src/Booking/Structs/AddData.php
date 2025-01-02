<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfshort;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\FeeTypeEn;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddData
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AddData extends AbstractStructBase
{
    /**
     * The FeeType
     *
     * @var string|null
     */
    protected ?string $FeeType = null;
    /**
     * The FeeCode
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FeeCode = null;
    /**
     * The PassengerNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfshort|null
     */
    protected ?ArrayOfshort $PassengerNumber = null;

    /**
     * Constructor method for AddData
     *
     * @param string                                  $feeType
     * @param string                                  $feeCode
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfshort $passengerNumber
     *
     * @uses AddData::setFeeType()
     * @uses AddData::setFeeCode()
     * @uses AddData::setPassengerNumber()
     */
    public function __construct(?string $feeType = null, ?string $feeCode = null, ?ArrayOfshort $passengerNumber = null)
    {
        $this
            ->setFeeType($feeType)
            ->setFeeCode($feeCode)
            ->setPassengerNumber($passengerNumber);
    }

    /**
     * Get FeeType value
     *
     * @return string|null
     */
    public function getFeeType(): ?string
    {
        return $this->FeeType;
    }

    /**
     * Set FeeType value
     *
     * @param string $feeType
     *
     * @return AddData
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\FeeTypeEn::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\FeeTypeEn::valueIsValid()
     */
    public function setFeeType(?string $feeType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\FeeTypeEn::valueIsValid($feeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\FeeTypeEn', is_array($feeType) ? implode(', ', $feeType) : var_export($feeType, true), implode(', ', FeeTypeEn::getValidValues())), __LINE__);
        }
        $this->FeeType = $feeType;

        return $this;
    }

    /**
     * Get FeeCode value
     *
     * @return string|null
     */
    public function getFeeCode(): ?string
    {
        return $this->FeeCode;
    }

    /**
     * Set FeeCode value
     *
     * @param string $feeCode
     *
     * @return AddData
     */
    public function setFeeCode(?string $feeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCode, true), gettype($feeCode)), __LINE__);
        }
        $this->FeeCode = $feeCode;

        return $this;
    }

    /**
     * Get PassengerNumber value
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfshort|null
     */
    public function getPassengerNumber(): ?ArrayOfshort
    {
        return $this->PassengerNumber;
    }

    /**
     * Set PassengerNumber value
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfshort $passengerNumber
     *
     * @return AddData
     */
    public function setPassengerNumber(?ArrayOfshort $passengerNumber = null): self
    {
        $this->PassengerNumber = $passengerNumber;

        return $this;
    }
}
