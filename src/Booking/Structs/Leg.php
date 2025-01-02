<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfLegSSR;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\LegStatus;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Leg Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Leg
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Leg extends AbstractStructBase
{
    /**
     * The STD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $STD = null;
    /**
     * The STA
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $STA = null;
    /**
     * The LegStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $LegStatus = null;
    /**
     * The DepartureStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DepartureStation = null;
    /**
     * The ArrivalStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ArrivalStation = null;
    /**
     * The LegSSRs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfLegSSR|null
     */
    protected ?ArrayOfLegSSR $LegSSRs = null;

    /**
     * Constructor method for Leg
     *
     * @param string                                   $sTD
     * @param string                                   $sTA
     * @param string                                   $legStatus
     * @param string                                   $departureStation
     * @param string                                   $arrivalStation
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfLegSSR $legSSRs
     *
     * @uses Leg::setSTD()
     * @uses Leg::setSTA()
     * @uses Leg::setLegStatus()
     * @uses Leg::setDepartureStation()
     * @uses Leg::setArrivalStation()
     * @uses Leg::setLegSSRs()
     */
    public function __construct(?string $sTD = null, ?string $sTA = null, ?string $legStatus = null, ?string $departureStation = null, ?string $arrivalStation = null, ?ArrayOfLegSSR $legSSRs = null)
    {
        $this
            ->setSTD($sTD)
            ->setSTA($sTA)
            ->setLegStatus($legStatus)
            ->setDepartureStation($departureStation)
            ->setArrivalStation($arrivalStation)
            ->setLegSSRs($legSSRs);
    }

    /**
     * Get STD value
     *
     * @return string|null
     */
    public function getSTD(): ?string
    {
        return $this->STD;
    }

    /**
     * Set STD value
     *
     * @param string $sTD
     *
     * @return Leg
     */
    public function setSTD(?string $sTD = null): self
    {
        // validation for constraint: string
        if (!is_null($sTD) && !is_string($sTD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sTD, true), gettype($sTD)), __LINE__);
        }
        $this->STD = $sTD;

        return $this;
    }

    /**
     * Get STA value
     *
     * @return string|null
     */
    public function getSTA(): ?string
    {
        return $this->STA;
    }

    /**
     * Set STA value
     *
     * @param string $sTA
     *
     * @return Leg
     */
    public function setSTA(?string $sTA = null): self
    {
        // validation for constraint: string
        if (!is_null($sTA) && !is_string($sTA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sTA, true), gettype($sTA)), __LINE__);
        }
        $this->STA = $sTA;

        return $this;
    }

    /**
     * Get LegStatus value
     *
     * @return string|null
     */
    public function getLegStatus(): ?string
    {
        return $this->LegStatus;
    }

    /**
     * Set LegStatus value
     *
     * @param string $legStatus
     *
     * @return Leg
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\LegStatus::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\LegStatus::valueIsValid()
     */
    public function setLegStatus(?string $legStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\LegStatus::valueIsValid($legStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\LegStatus', is_array($legStatus) ? implode(', ', $legStatus) : var_export($legStatus, true), implode(', ', LegStatus::getValidValues())), __LINE__);
        }
        $this->LegStatus = $legStatus;

        return $this;
    }

    /**
     * Get DepartureStation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDepartureStation(): ?string
    {
        return $this->DepartureStation ?? null;
    }

    /**
     * Set DepartureStation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $departureStation
     *
     * @return Leg
     */
    public function setDepartureStation(?string $departureStation = null): self
    {
        // validation for constraint: string
        if (!is_null($departureStation) && !is_string($departureStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureStation, true), gettype($departureStation)), __LINE__);
        }
        if (is_null($departureStation) || (is_array($departureStation) && empty($departureStation))) {
            unset($this->DepartureStation);
        } else {
            $this->DepartureStation = $departureStation;
        }

        return $this;
    }

    /**
     * Get ArrivalStation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getArrivalStation(): ?string
    {
        return $this->ArrivalStation ?? null;
    }

    /**
     * Set ArrivalStation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $arrivalStation
     *
     * @return Leg
     */
    public function setArrivalStation(?string $arrivalStation = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalStation) && !is_string($arrivalStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalStation, true), gettype($arrivalStation)), __LINE__);
        }
        if (is_null($arrivalStation) || (is_array($arrivalStation) && empty($arrivalStation))) {
            unset($this->ArrivalStation);
        } else {
            $this->ArrivalStation = $arrivalStation;
        }

        return $this;
    }

    /**
     * Get LegSSRs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfLegSSR|null
     */
    public function getLegSSRs(): ?ArrayOfLegSSR
    {
        return $this->LegSSRs ?? null;
    }

    /**
     * Set LegSSRs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfLegSSR $legSSRs
     *
     * @return Leg
     */
    public function setLegSSRs(?ArrayOfLegSSR $legSSRs = null): self
    {
        if (is_null($legSSRs) || (is_array($legSSRs) && empty($legSSRs))) {
            unset($this->LegSSRs);
        } else {
            $this->LegSSRs = $legSSRs;
        }

        return $this;
    }
}
