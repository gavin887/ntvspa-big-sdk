<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingFromStateRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q11:GetBookingFromStateRequest | tns:GetBookingFromStateRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetBookingFromStateRequest extends AbstractStructBase
{
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;

    /**
     * Constructor method for GetBookingFromStateRequest
     *
     * @param string $signature
     *
     * @uses GetBookingFromStateRequest::setSignature()
     */
    public function __construct(?string $signature = null)
    {
        $this
            ->setSignature($signature);
    }

    /**
     * Get Signature value
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature;
    }

    /**
     * Set Signature value
     *
     * @param string $signature
     *
     * @return GetBookingFromStateRequest
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;

        return $this;
    }
}
