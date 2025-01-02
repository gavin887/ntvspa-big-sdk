<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Product\Arrays\ArrayOfFare;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Segment Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Segment
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Segment extends AbstractStructBase
{
    /**
     * The Std
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Std = null;
    /**
     * The Sta
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Sta = null;
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
     * The TrainNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TrainNumber = null;
    /**
     * The RfiTrainNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RfiTrainNumber = null;
    /**
     * The Fares
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfFare|null
     */
    protected ?ArrayOfFare $Fares = null;
    /**
     * The RFITrainNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RFITrainNumber = null;

    /**
     * Constructor method for Segment
     *
     * @param string                                 $std
     * @param string                                 $sta
     * @param string                                 $departureStation
     * @param string                                 $arrivalStation
     * @param string                                 $trainNumber
     * @param string                                 $rfiTrainNumber
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfFare $fares
     * @param string                                 $rFITrainNumber
     *
     * @uses Segment::setStd()
     * @uses Segment::setSta()
     * @uses Segment::setDepartureStation()
     * @uses Segment::setArrivalStation()
     * @uses Segment::setTrainNumber()
     * @uses Segment::setRfiTrainNumber()
     * @uses Segment::setFares()
     * @uses Segment::setRFITrainNumber_1()
     */
    public function __construct(?string $std = null, ?string $sta = null, ?string $departureStation = null, ?string $arrivalStation = null, ?string $trainNumber = null, ?string $rfiTrainNumber = null, ?ArrayOfFare $fares = null, ?string $rFITrainNumber_1 = null)
    {
        $this
            ->setStd($std)
            ->setSta($sta)
            ->setDepartureStation($departureStation)
            ->setArrivalStation($arrivalStation)
            ->setTrainNumber($trainNumber)
            ->setRfiTrainNumber($rfiTrainNumber)
            ->setFares($fares)
            ->setRFITrainNumber_1($rFITrainNumber_1);
    }

    /**
     * Set RFITrainNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $rFITrainNumber
     *
     * @return Segment
     */
    public function setRFITrainNumber_1(?string $rFITrainNumber_1 = null): self
    {
        // validation for constraint: string
        if (!is_null($rFITrainNumber_1) && !is_string($rFITrainNumber_1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rFITrainNumber_1, true), gettype($rFITrainNumber_1)), __LINE__);
        }
        if (is_null($rFITrainNumber_1) || (is_array($rFITrainNumber_1) && empty($rFITrainNumber_1))) {
            unset($this->RFITrainNumber);
        } else {
            $this->RFITrainNumber = $rFITrainNumber_1;
        }

        return $this;
    }

    /**
     * Get Std value
     *
     * @return string|null
     */
    public function getStd(): ?string
    {
        return $this->Std;
    }

    /**
     * Set Std value
     *
     * @param string $std
     *
     * @return Segment
     */
    public function setStd(?string $std = null): self
    {
        // validation for constraint: string
        if (!is_null($std) && !is_string($std)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($std, true), gettype($std)), __LINE__);
        }
        $this->Std = $std;

        return $this;
    }

    /**
     * Get Sta value
     *
     * @return string|null
     */
    public function getSta(): ?string
    {
        return $this->Sta;
    }

    /**
     * Set Sta value
     *
     * @param string $sta
     *
     * @return Segment
     */
    public function setSta(?string $sta = null): self
    {
        // validation for constraint: string
        if (!is_null($sta) && !is_string($sta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sta, true), gettype($sta)), __LINE__);
        }
        $this->Sta = $sta;

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
     * @return Segment
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
     * @return Segment
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
     * Get TrainNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTrainNumber(): ?string
    {
        return $this->TrainNumber ?? null;
    }

    /**
     * Set TrainNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $trainNumber
     *
     * @return Segment
     */
    public function setTrainNumber(?string $trainNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($trainNumber) && !is_string($trainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainNumber, true), gettype($trainNumber)), __LINE__);
        }
        if (is_null($trainNumber) || (is_array($trainNumber) && empty($trainNumber))) {
            unset($this->TrainNumber);
        } else {
            $this->TrainNumber = $trainNumber;
        }

        return $this;
    }

    /**
     * Get RfiTrainNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRfiTrainNumber(): ?string
    {
        return $this->RfiTrainNumber ?? null;
    }

    /**
     * Set RfiTrainNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $rfiTrainNumber
     *
     * @return Segment
     */
    public function setRfiTrainNumber(?string $rfiTrainNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($rfiTrainNumber) && !is_string($rfiTrainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rfiTrainNumber, true), gettype($rfiTrainNumber)), __LINE__);
        }
        if (is_null($rfiTrainNumber) || (is_array($rfiTrainNumber) && empty($rfiTrainNumber))) {
            unset($this->RfiTrainNumber);
        } else {
            $this->RfiTrainNumber = $rfiTrainNumber;
        }

        return $this;
    }

    /**
     * Get Fares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfFare|null
     */
    public function getFares(): ?ArrayOfFare
    {
        return $this->Fares ?? null;
    }

    /**
     * Set Fares value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfFare $fares
     *
     * @return Segment
     */
    public function setFares(?ArrayOfFare $fares = null): self
    {
        if (is_null($fares) || (is_array($fares) && empty($fares))) {
            unset($this->Fares);
        } else {
            $this->Fares = $fares;
        }

        return $this;
    }

    /**
     * Get RFITrainNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRFITrainNumber_1(): ?string
    {
        return $this->RFITrainNumber ?? null;
    }
}
