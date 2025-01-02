<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Travel\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveItaloRealTimeRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RetrieveItaloRealTimeRequest | q1:RetrieveItaloRealTimeRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveItaloRealTimeRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The TrainSchedule
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var TrainSchedule|null
     */
    protected ?\Ntvspa\Big\Travel\Structs\TrainSchedule $TrainSchedule = null;
    /**
     * The Leg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Leg|null
     */
    protected ?\Ntvspa\Big\Travel\Structs\Leg $Leg = null;

    /**
     * Constructor method for RetrieveItaloRealTimeRequest
     *
     * @param string        $sourceSystem
     * @param string        $signature
     * @param TrainSchedule $trainSchedule
     * @param Leg           $leg
     *
     * @uses RetrieveItaloRealTimeRequest::setSourceSystem()
     * @uses RetrieveItaloRealTimeRequest::setSignature()
     * @uses RetrieveItaloRealTimeRequest::setTrainSchedule()
     * @uses RetrieveItaloRealTimeRequest::setLeg()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Travel\Structs\TrainSchedule $trainSchedule = null, ?\Ntvspa\Big\Travel\Structs\Leg $leg = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setTrainSchedule($trainSchedule)
            ->setLeg($leg);
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
     * @return RetrieveItaloRealTimeRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Travel\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Travel\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Travel\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Travel\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get Signature value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature ?? null;
    }

    /**
     * Set Signature value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $signature
     *
     * @return RetrieveItaloRealTimeRequest
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        if (is_null($signature) || (is_array($signature) && empty($signature))) {
            unset($this->Signature);
        } else {
            $this->Signature = $signature;
        }

        return $this;
    }

    /**
     * Get TrainSchedule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return TrainSchedule|null
     */
    public function getTrainSchedule(): ?\Ntvspa\Big\Travel\Structs\TrainSchedule
    {
        return $this->TrainSchedule ?? null;
    }

    /**
     * Set TrainSchedule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param TrainSchedule $trainSchedule
     *
     * @return RetrieveItaloRealTimeRequest
     */
    public function setTrainSchedule(?\Ntvspa\Big\Travel\Structs\TrainSchedule $trainSchedule = null): self
    {
        if (is_null($trainSchedule) || (is_array($trainSchedule) && empty($trainSchedule))) {
            unset($this->TrainSchedule);
        } else {
            $this->TrainSchedule = $trainSchedule;
        }

        return $this;
    }

    /**
     * Get Leg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Leg|null
     */
    public function getLeg(): ?\Ntvspa\Big\Travel\Structs\Leg
    {
        return $this->Leg ?? null;
    }

    /**
     * Set Leg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Leg $leg
     *
     * @return RetrieveItaloRealTimeRequest
     */
    public function setLeg(?\Ntvspa\Big\Travel\Structs\Leg $leg = null): self
    {
        if (is_null($leg) || (is_array($leg) && empty($leg))) {
            unset($this->Leg);
        } else {
            $this->Leg = $leg;
        }

        return $this;
    }
}
