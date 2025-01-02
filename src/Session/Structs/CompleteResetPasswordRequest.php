<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Session\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteResetPasswordRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q11:CompleteResetPasswordRequest | tns:CompleteResetPasswordRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CompleteResetPasswordRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Token = null;
    /**
     * The NewPassword
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $NewPassword = null;

    /**
     * Constructor method for CompleteResetPasswordRequest
     *
     * @param string $sourceSystem
     * @param string $token
     * @param string $newPassword
     *
     * @uses CompleteResetPasswordRequest::setSourceSystem()
     * @uses CompleteResetPasswordRequest::setToken()
     * @uses CompleteResetPasswordRequest::setNewPassword()
     */
    public function __construct(?string $sourceSystem = null, ?string $token = null, ?string $newPassword = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setToken($token)
            ->setNewPassword($newPassword);
    }

    /**
     * Get SourceSystem value
     *
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->SourceSystem;
    }

    /**
     * Set SourceSystem value
     *
     * @param string $sourceSystem
     *
     * @return CompleteResetPasswordRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Session\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Session\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Session\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Session\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get Token value
     *
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->Token;
    }

    /**
     * Set Token value
     *
     * @param string $token
     *
     * @return CompleteResetPasswordRequest
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->Token = $token;

        return $this;
    }

    /**
     * Get NewPassword value
     *
     * @return string|null
     */
    public function getNewPassword(): ?string
    {
        return $this->NewPassword;
    }

    /**
     * Set NewPassword value
     *
     * @param string $newPassword
     *
     * @return CompleteResetPasswordRequest
     */
    public function setNewPassword(?string $newPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($newPassword) && !is_string($newPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newPassword, true), gettype($newPassword)), __LINE__);
        }
        $this->NewPassword = $newPassword;

        return $this;
    }
}
