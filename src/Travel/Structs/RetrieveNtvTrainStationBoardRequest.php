<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Travel\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveNtvTrainStationBoardRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q3:RetrieveNtvTrainStationBoardRequest | tns:RetrieveNtvTrainStationBoardRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveNtvTrainStationBoardRequest extends AbstractStructBase
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
     * The StationCode
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $StationCode = null;

    /**
     * Constructor method for RetrieveNtvTrainStationBoardRequest
     *
     * @param string $sourceSystem
     * @param string $signature
     * @param string $stationCode
     *
     * @uses RetrieveNtvTrainStationBoardRequest::setSourceSystem()
     * @uses RetrieveNtvTrainStationBoardRequest::setSignature()
     * @uses RetrieveNtvTrainStationBoardRequest::setStationCode()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?string $stationCode = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setStationCode($stationCode);
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
     * @return RetrieveNtvTrainStationBoardRequest
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
     * @return RetrieveNtvTrainStationBoardRequest
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
     * Get StationCode value
     *
     * @return string|null
     */
    public function getStationCode(): ?string
    {
        return $this->StationCode;
    }

    /**
     * Set StationCode value
     *
     * @param string $stationCode
     *
     * @return RetrieveNtvTrainStationBoardRequest
     */
    public function setStationCode(?string $stationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($stationCode) && !is_string($stationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stationCode, true), gettype($stationCode)), __LINE__);
        }
        $this->StationCode = $stationCode;

        return $this;
    }
}
