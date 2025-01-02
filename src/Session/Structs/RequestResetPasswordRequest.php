<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Session\Enums\Culture;
use Ntvspa\Big\Session\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestResetPasswordRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q9:RequestResetPasswordRequest | tns:RequestResetPasswordRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RequestResetPasswordRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Culture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Culture = null;
    /**
     * The AgentName
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AgentName = null;

    /**
     * Constructor method for RequestResetPasswordRequest
     *
     * @param string $sourceSystem
     * @param string $culture
     * @param string $agentName
     *
     * @uses RequestResetPasswordRequest::setSourceSystem()
     * @uses RequestResetPasswordRequest::setCulture()
     * @uses RequestResetPasswordRequest::setAgentName()
     */
    public function __construct(?string $sourceSystem = null, ?string $culture = null, ?string $agentName = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setCulture($culture)
            ->setAgentName($agentName);
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
     * @return RequestResetPasswordRequest
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
     * Get Culture value
     *
     * @return string|null
     */
    public function getCulture(): ?string
    {
        return $this->Culture;
    }

    /**
     * Set Culture value
     *
     * @param string $culture
     *
     * @return RequestResetPasswordRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Session\Enums\Culture::getValidValues()
     * @uses \Ntvspa\Big\Session\Enums\Culture::valueIsValid()
     */
    public function setCulture(?string $culture = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Session\Enums\Culture::valueIsValid($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Session\Enums\Culture', is_array($culture) ? implode(', ', $culture) : var_export($culture, true), implode(', ', Culture::getValidValues())), __LINE__);
        }
        $this->Culture = $culture;

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
     * @return RequestResetPasswordRequest
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
}
