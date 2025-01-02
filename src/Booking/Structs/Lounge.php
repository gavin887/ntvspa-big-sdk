<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SSRState;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Lounge Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Lounge
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Lounge extends AbstractStructBase
{
    /**
     * The Operation
     *
     * @var string|null
     */
    protected ?string $Operation = null;
    /**
     * The LoungeStation
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LoungeStation = null;

    /**
     * Constructor method for Lounge
     *
     * @param string $operation
     * @param string $loungeStation
     *
     * @uses Lounge::setOperation()
     * @uses Lounge::setLoungeStation()
     */
    public function __construct(?string $operation = null, ?string $loungeStation = null)
    {
        $this
            ->setOperation($operation)
            ->setLoungeStation($loungeStation);
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
     * @return Lounge
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
     * Get LoungeStation value
     *
     * @return string|null
     */
    public function getLoungeStation(): ?string
    {
        return $this->LoungeStation;
    }

    /**
     * Set LoungeStation value
     *
     * @param string $loungeStation
     *
     * @return Lounge
     */
    public function setLoungeStation(?string $loungeStation = null): self
    {
        // validation for constraint: string
        if (!is_null($loungeStation) && !is_string($loungeStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loungeStation, true), gettype($loungeStation)), __LINE__);
        }
        $this->LoungeStation = $loungeStation;

        return $this;
    }
}
