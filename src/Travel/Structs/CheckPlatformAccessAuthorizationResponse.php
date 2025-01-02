<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Travel\Arrays\ArrayOfPassenger;

/**
 * This class stands for CheckPlatformAccessAuthorizationResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q14:CheckPlatformAccessAuthorizationResponse | tns:CheckPlatformAccessAuthorizationResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CheckPlatformAccessAuthorizationResponse extends ResponseBase
{
    /**
     * The ResultCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $ResultCode = null;
    /**
     * The PaxCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $PaxCount = null;
    /**
     * The ResultCodeDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ResultCodeDescription = null;
    /**
     * The Passengers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfPassenger|null
     */
    protected ?ArrayOfPassenger $Passengers = null;

    /**
     * Constructor method for CheckPlatformAccessAuthorizationResponse
     *
     * @param int                                        $resultCode
     * @param int                                        $paxCount
     * @param string                                     $resultCodeDescription
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfPassenger $passengers
     *
     * @uses CheckPlatformAccessAuthorizationResponse::setResultCode()
     * @uses CheckPlatformAccessAuthorizationResponse::setPaxCount()
     * @uses CheckPlatformAccessAuthorizationResponse::setResultCodeDescription()
     * @uses CheckPlatformAccessAuthorizationResponse::setPassengers()
     */
    public function __construct(?int $resultCode = null, ?int $paxCount = null, ?string $resultCodeDescription = null, ?ArrayOfPassenger $passengers = null)
    {
        $this
            ->setResultCode($resultCode)
            ->setPaxCount($paxCount)
            ->setResultCodeDescription($resultCodeDescription)
            ->setPassengers($passengers);
    }

    /**
     * Get ResultCode value
     *
     * @return int|null
     */
    public function getResultCode(): ?int
    {
        return $this->ResultCode;
    }

    /**
     * Set ResultCode value
     *
     * @param int $resultCode
     *
     * @return CheckPlatformAccessAuthorizationResponse
     */
    public function setResultCode(?int $resultCode = null): self
    {
        // validation for constraint: int
        if (!is_null($resultCode) && !(is_int($resultCode) || ctype_digit($resultCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($resultCode, true), gettype($resultCode)), __LINE__);
        }
        $this->ResultCode = $resultCode;

        return $this;
    }

    /**
     * Get PaxCount value
     *
     * @return int|null
     */
    public function getPaxCount(): ?int
    {
        return $this->PaxCount;
    }

    /**
     * Set PaxCount value
     *
     * @param int $paxCount
     *
     * @return CheckPlatformAccessAuthorizationResponse
     */
    public function setPaxCount(?int $paxCount = null): self
    {
        // validation for constraint: int
        if (!is_null($paxCount) && !(is_int($paxCount) || ctype_digit($paxCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxCount, true), gettype($paxCount)), __LINE__);
        }
        $this->PaxCount = $paxCount;

        return $this;
    }

    /**
     * Get ResultCodeDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getResultCodeDescription(): ?string
    {
        return $this->ResultCodeDescription ?? null;
    }

    /**
     * Set ResultCodeDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $resultCodeDescription
     *
     * @return CheckPlatformAccessAuthorizationResponse
     */
    public function setResultCodeDescription(?string $resultCodeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($resultCodeDescription) && !is_string($resultCodeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resultCodeDescription, true), gettype($resultCodeDescription)), __LINE__);
        }
        if (is_null($resultCodeDescription) || (is_array($resultCodeDescription) && empty($resultCodeDescription))) {
            unset($this->ResultCodeDescription);
        } else {
            $this->ResultCodeDescription = $resultCodeDescription;
        }

        return $this;
    }

    /**
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfPassenger|null
     */
    public function getPassengers(): ?ArrayOfPassenger
    {
        return $this->Passengers ?? null;
    }

    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfPassenger $passengers
     *
     * @return CheckPlatformAccessAuthorizationResponse
     */
    public function setPassengers(?ArrayOfPassenger $passengers = null): self
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
        }

        return $this;
    }
}
