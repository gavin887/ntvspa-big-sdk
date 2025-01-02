<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Session\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangePasswordRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q7:ChangePasswordRequest | tns:ChangePasswordRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ChangePasswordRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The AgentName
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AgentName = null;
    /**
     * The Domain
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Domain = null;
    /**
     * The NewPassword
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $NewPassword = null;
    /**
     * The OldPassword
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OldPassword = null;

    /**
     * Constructor method for ChangePasswordRequest
     *
     * @param string $sourceSystem
     * @param string $agentName
     * @param string $domain
     * @param string $newPassword
     * @param string $oldPassword
     *
     * @uses ChangePasswordRequest::setSourceSystem()
     * @uses ChangePasswordRequest::setAgentName()
     * @uses ChangePasswordRequest::setDomain()
     * @uses ChangePasswordRequest::setNewPassword()
     * @uses ChangePasswordRequest::setOldPassword()
     */
    public function __construct(?string $sourceSystem = null, ?string $agentName = null, ?string $domain = null, ?string $newPassword = null, ?string $oldPassword = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setAgentName($agentName)
            ->setDomain($domain)
            ->setNewPassword($newPassword)
            ->setOldPassword($oldPassword);
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
     * @return ChangePasswordRequest
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
     * Get AgentName value
     *
     * @return string|null
     */
    public function getAgentName(): ?string
    {
        return $this->AgentName;
    }

    /**
     * Set AgentName value
     *
     * @param string $agentName
     *
     * @return ChangePasswordRequest
     */
    public function setAgentName(?string $agentName = null): self
    {
        // validation for constraint: string
        if (!is_null($agentName) && !is_string($agentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentName, true), gettype($agentName)), __LINE__);
        }
        $this->AgentName = $agentName;

        return $this;
    }

    /**
     * Get Domain value
     *
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->Domain;
    }

    /**
     * Set Domain value
     *
     * @param string $domain
     *
     * @return ChangePasswordRequest
     */
    public function setDomain(?string $domain = null): self
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->Domain = $domain;

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
     * @return ChangePasswordRequest
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

    /**
     * Get OldPassword value
     *
     * @return string|null
     */
    public function getOldPassword(): ?string
    {
        return $this->OldPassword;
    }

    /**
     * Set OldPassword value
     *
     * @param string $oldPassword
     *
     * @return ChangePasswordRequest
     */
    public function setOldPassword(?string $oldPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($oldPassword) && !is_string($oldPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldPassword, true), gettype($oldPassword)), __LINE__);
        }
        $this->OldPassword = $oldPassword;

        return $this;
    }
}
