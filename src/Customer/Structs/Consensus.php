<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Consensus Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Consensus
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Consensus extends AbstractStructBase
{
    /**
     * The ConsensusForProcessingOfPersonalData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusForProcessingOfPersonalData = null;
    /**
     * The ConsensusToMarketingInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToMarketingInformation = null;
    /**
     * The ConsensusToThirdPartyPrivacy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToThirdPartyPrivacy = null;
    /**
     * The ConsensusToProfiling
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToProfiling = null;

    /**
     * Constructor method for Consensus
     *
     * @param bool $consensusForProcessingOfPersonalData
     * @param bool $consensusToMarketingInformation
     * @param bool $consensusToThirdPartyPrivacy
     * @param bool $consensusToProfiling
     *
     * @uses Consensus::setConsensusForProcessingOfPersonalData()
     * @uses Consensus::setConsensusToMarketingInformation()
     * @uses Consensus::setConsensusToThirdPartyPrivacy()
     * @uses Consensus::setConsensusToProfiling()
     */
    public function __construct(?bool $consensusForProcessingOfPersonalData = null, ?bool $consensusToMarketingInformation = null, ?bool $consensusToThirdPartyPrivacy = null, ?bool $consensusToProfiling = null)
    {
        $this
            ->setConsensusForProcessingOfPersonalData($consensusForProcessingOfPersonalData)
            ->setConsensusToMarketingInformation($consensusToMarketingInformation)
            ->setConsensusToThirdPartyPrivacy($consensusToThirdPartyPrivacy)
            ->setConsensusToProfiling($consensusToProfiling);
    }

    /**
     * Get ConsensusForProcessingOfPersonalData value
     *
     * @return bool|null
     */
    public function getConsensusForProcessingOfPersonalData(): ?bool
    {
        return $this->ConsensusForProcessingOfPersonalData;
    }

    /**
     * Set ConsensusForProcessingOfPersonalData value
     *
     * @param bool $consensusForProcessingOfPersonalData
     *
     * @return Consensus
     */
    public function setConsensusForProcessingOfPersonalData(?bool $consensusForProcessingOfPersonalData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusForProcessingOfPersonalData) && !is_bool($consensusForProcessingOfPersonalData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusForProcessingOfPersonalData, true), gettype($consensusForProcessingOfPersonalData)), __LINE__);
        }
        $this->ConsensusForProcessingOfPersonalData = $consensusForProcessingOfPersonalData;

        return $this;
    }

    /**
     * Get ConsensusToMarketingInformation value
     *
     * @return bool|null
     */
    public function getConsensusToMarketingInformation(): ?bool
    {
        return $this->ConsensusToMarketingInformation;
    }

    /**
     * Set ConsensusToMarketingInformation value
     *
     * @param bool $consensusToMarketingInformation
     *
     * @return Consensus
     */
    public function setConsensusToMarketingInformation(?bool $consensusToMarketingInformation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToMarketingInformation) && !is_bool($consensusToMarketingInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToMarketingInformation, true), gettype($consensusToMarketingInformation)), __LINE__);
        }
        $this->ConsensusToMarketingInformation = $consensusToMarketingInformation;

        return $this;
    }

    /**
     * Get ConsensusToThirdPartyPrivacy value
     *
     * @return bool|null
     */
    public function getConsensusToThirdPartyPrivacy(): ?bool
    {
        return $this->ConsensusToThirdPartyPrivacy;
    }

    /**
     * Set ConsensusToThirdPartyPrivacy value
     *
     * @param bool $consensusToThirdPartyPrivacy
     *
     * @return Consensus
     */
    public function setConsensusToThirdPartyPrivacy(?bool $consensusToThirdPartyPrivacy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToThirdPartyPrivacy) && !is_bool($consensusToThirdPartyPrivacy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToThirdPartyPrivacy, true), gettype($consensusToThirdPartyPrivacy)), __LINE__);
        }
        $this->ConsensusToThirdPartyPrivacy = $consensusToThirdPartyPrivacy;

        return $this;
    }

    /**
     * Get ConsensusToProfiling value
     *
     * @return bool|null
     */
    public function getConsensusToProfiling(): ?bool
    {
        return $this->ConsensusToProfiling;
    }

    /**
     * Set ConsensusToProfiling value
     *
     * @param bool $consensusToProfiling
     *
     * @return Consensus
     */
    public function setConsensusToProfiling(?bool $consensusToProfiling = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToProfiling) && !is_bool($consensusToProfiling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToProfiling, true), gettype($consensusToProfiling)), __LINE__);
        }
        $this->ConsensusToProfiling = $consensusToProfiling;

        return $this;
    }
}
