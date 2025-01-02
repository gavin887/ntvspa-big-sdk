<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItaloPiuRegistrationRules Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ItaloPiuRegistrationRules
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ItaloPiuRegistrationRules extends AbstractStructBase
{
    /**
     * The PowerOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $PowerOn = null;
    /**
     * The PaxNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $PaxNumber = null;
    /**
     * The InvitationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $InvitationCode = null;

    /**
     * Constructor method for ItaloPiuRegistrationRules
     *
     * @param bool   $powerOn
     * @param int    $paxNumber
     * @param string $invitationCode
     *
     * @uses ItaloPiuRegistrationRules::setPowerOn()
     * @uses ItaloPiuRegistrationRules::setPaxNumber()
     * @uses ItaloPiuRegistrationRules::setInvitationCode()
     */
    public function __construct(?bool $powerOn = null, ?int $paxNumber = null, ?string $invitationCode = null)
    {
        $this
            ->setPowerOn($powerOn)
            ->setPaxNumber($paxNumber)
            ->setInvitationCode($invitationCode);
    }

    /**
     * Get PowerOn value
     *
     * @return bool|null
     */
    public function getPowerOn(): ?bool
    {
        return $this->PowerOn;
    }

    /**
     * Set PowerOn value
     *
     * @param bool $powerOn
     *
     * @return ItaloPiuRegistrationRules
     */
    public function setPowerOn(?bool $powerOn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($powerOn) && !is_bool($powerOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($powerOn, true), gettype($powerOn)), __LINE__);
        }
        $this->PowerOn = $powerOn;

        return $this;
    }

    /**
     * Get PaxNumber value
     *
     * @return int|null
     */
    public function getPaxNumber(): ?int
    {
        return $this->PaxNumber;
    }

    /**
     * Set PaxNumber value
     *
     * @param int $paxNumber
     *
     * @return ItaloPiuRegistrationRules
     */
    public function setPaxNumber(?int $paxNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($paxNumber) && !(is_int($paxNumber) || ctype_digit($paxNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxNumber, true), gettype($paxNumber)), __LINE__);
        }
        $this->PaxNumber = $paxNumber;

        return $this;
    }

    /**
     * Get InvitationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getInvitationCode(): ?string
    {
        return $this->InvitationCode ?? null;
    }

    /**
     * Set InvitationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $invitationCode
     *
     * @return ItaloPiuRegistrationRules
     */
    public function setInvitationCode(?string $invitationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($invitationCode) && !is_string($invitationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invitationCode, true), gettype($invitationCode)), __LINE__);
        }
        if (is_null($invitationCode) || (is_array($invitationCode) && empty($invitationCode))) {
            unset($this->InvitationCode);
        } else {
            $this->InvitationCode = $invitationCode;
        }

        return $this;
    }
}
