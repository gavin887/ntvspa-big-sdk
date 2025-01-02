<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfshort;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DeleteData
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DeleteData extends AbstractStructBase
{
    /**
     * The FeeNumber
     *
     * @var int|null
     */
    protected ?int $FeeNumber = null;
    /**
     * The PassengerNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfshort|null
     */
    protected ?ArrayOfshort $PassengerNumber = null;

    /**
     * Constructor method for DeleteData
     *
     * @param int                                     $feeNumber
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfshort $passengerNumber
     *
     * @uses DeleteData::setFeeNumber()
     * @uses DeleteData::setPassengerNumber()
     */
    public function __construct(?int $feeNumber = null, ?ArrayOfshort $passengerNumber = null)
    {
        $this
            ->setFeeNumber($feeNumber)
            ->setPassengerNumber($passengerNumber);
    }

    /**
     * Get FeeNumber value
     *
     * @return int|null
     */
    public function getFeeNumber(): ?int
    {
        return $this->FeeNumber;
    }

    /**
     * Set FeeNumber value
     *
     * @param int $feeNumber
     *
     * @return DeleteData
     */
    public function setFeeNumber(?int $feeNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($feeNumber) && !(is_int($feeNumber) || ctype_digit($feeNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeNumber, true), gettype($feeNumber)), __LINE__);
        }
        $this->FeeNumber = $feeNumber;

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
     * @return DeleteData
     */
    public function setPassengerNumber(?ArrayOfshort $passengerNumber = null): self
    {
        $this->PassengerNumber = $passengerNumber;

        return $this;
    }
}
