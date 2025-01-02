<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\CostType;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageUpgradeRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q59:ManageUpgradeRequest | tns:ManageUpgradeRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ManageUpgradeRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The CostType
     *
     * @var string|null
     */
    protected ?string $CostType = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The PNR
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PNR = null;
    /**
     * The SourceTrain
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SourceTrain = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ClassOfService = null;
    /**
     * The DestinationTrain
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DestinationTrain = null;
    /**
     * The Cost
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Cost = null;
    /**
     * The SecurityString
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SecurityString = null;

    /**
     * Constructor method for ManageUpgradeRequest
     *
     * @param string $sourceSystem
     * @param string $costType
     * @param string $signature
     * @param string $pNR
     * @param string $sourceTrain
     * @param string $classOfService
     * @param string $destinationTrain
     * @param string $cost
     * @param string $securityString
     *
     * @uses ManageUpgradeRequest::setSourceSystem()
     * @uses ManageUpgradeRequest::setCostType()
     * @uses ManageUpgradeRequest::setSignature()
     * @uses ManageUpgradeRequest::setPNR()
     * @uses ManageUpgradeRequest::setSourceTrain()
     * @uses ManageUpgradeRequest::setClassOfService()
     * @uses ManageUpgradeRequest::setDestinationTrain()
     * @uses ManageUpgradeRequest::setCost()
     * @uses ManageUpgradeRequest::setSecurityString()
     */
    public function __construct(?string $sourceSystem = null, ?string $costType = null, ?string $signature = null, ?string $pNR = null, ?string $sourceTrain = null, ?string $classOfService = null, ?string $destinationTrain = null, ?string $cost = null, ?string $securityString = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setCostType($costType)
            ->setSignature($signature)
            ->setPNR($pNR)
            ->setSourceTrain($sourceTrain)
            ->setClassOfService($classOfService)
            ->setDestinationTrain($destinationTrain)
            ->setCost($cost)
            ->setSecurityString($securityString);
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
     * @return ManageUpgradeRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get CostType value
     *
     * @return string|null
     */
    public function getCostType(): ?string
    {
        return $this->CostType;
    }

    /**
     * Set CostType value
     *
     * @param string $costType
     *
     * @return ManageUpgradeRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\CostType::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\CostType::valueIsValid()
     */
    public function setCostType(?string $costType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\CostType::valueIsValid($costType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\CostType', is_array($costType) ? implode(', ', $costType) : var_export($costType, true), implode(', ', CostType::getValidValues())), __LINE__);
        }
        $this->CostType = $costType;

        return $this;
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
     * @return ManageUpgradeRequest
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

    /**
     * Get PNR value
     *
     * @return string|null
     */
    public function getPNR(): ?string
    {
        return $this->PNR;
    }

    /**
     * Set PNR value
     *
     * @param string $pNR
     *
     * @return ManageUpgradeRequest
     */
    public function setPNR(?string $pNR = null): self
    {
        // validation for constraint: string
        if (!is_null($pNR) && !is_string($pNR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pNR, true), gettype($pNR)), __LINE__);
        }
        $this->PNR = $pNR;

        return $this;
    }

    /**
     * Get SourceTrain value
     *
     * @return string|null
     */
    public function getSourceTrain(): ?string
    {
        return $this->SourceTrain;
    }

    /**
     * Set SourceTrain value
     *
     * @param string $sourceTrain
     *
     * @return ManageUpgradeRequest
     */
    public function setSourceTrain(?string $sourceTrain = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceTrain) && !is_string($sourceTrain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceTrain, true), gettype($sourceTrain)), __LINE__);
        }
        $this->SourceTrain = $sourceTrain;

        return $this;
    }

    /**
     * Get ClassOfService value
     *
     * @return string|null
     */
    public function getClassOfService(): ?string
    {
        return $this->ClassOfService;
    }

    /**
     * Set ClassOfService value
     *
     * @param string $classOfService
     *
     * @return ManageUpgradeRequest
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classOfService, true), gettype($classOfService)), __LINE__);
        }
        $this->ClassOfService = $classOfService;

        return $this;
    }

    /**
     * Get DestinationTrain value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDestinationTrain(): ?string
    {
        return $this->DestinationTrain ?? null;
    }

    /**
     * Set DestinationTrain value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $destinationTrain
     *
     * @return ManageUpgradeRequest
     */
    public function setDestinationTrain(?string $destinationTrain = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationTrain) && !is_string($destinationTrain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationTrain, true), gettype($destinationTrain)), __LINE__);
        }
        if (is_null($destinationTrain) || (is_array($destinationTrain) && empty($destinationTrain))) {
            unset($this->DestinationTrain);
        } else {
            $this->DestinationTrain = $destinationTrain;
        }

        return $this;
    }

    /**
     * Get Cost value
     *
     * @return string|null
     */
    public function getCost(): ?string
    {
        return $this->Cost;
    }

    /**
     * Set Cost value
     *
     * @param string $cost
     *
     * @return ManageUpgradeRequest
     */
    public function setCost(?string $cost = null): self
    {
        // validation for constraint: string
        if (!is_null($cost) && !is_string($cost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cost, true), gettype($cost)), __LINE__);
        }
        $this->Cost = $cost;

        return $this;
    }

    /**
     * Get SecurityString value
     *
     * @return string|null
     */
    public function getSecurityString(): ?string
    {
        return $this->SecurityString;
    }

    /**
     * Set SecurityString value
     *
     * @param string $securityString
     *
     * @return ManageUpgradeRequest
     */
    public function setSecurityString(?string $securityString = null): self
    {
        // validation for constraint: string
        if (!is_null($securityString) && !is_string($securityString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityString, true), gettype($securityString)), __LINE__);
        }
        $this->SecurityString = $securityString;

        return $this;
    }
}
