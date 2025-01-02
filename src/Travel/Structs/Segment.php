<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Travel\Arrays\ArrayOfLeg;
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
     * The Sta
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Sta = null;
    /**
     * The Std
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Std = null;
    /**
     * The LegNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $LegNumber = null;
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
     * The Legs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfLeg|null
     */
    protected ?ArrayOfLeg $Legs = null;
    /**
     * The CarrierCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CarrierCode = null;

    /**
     * Constructor method for Segment
     *
     * @param string                               $sta
     * @param string                               $std
     * @param int                                  $legNumber
     * @param string                               $trainNumber
     * @param string                               $rfiTrainNumber
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfLeg $legs
     * @param string                               $carrierCode
     *
     * @uses Segment::setSta()
     * @uses Segment::setStd()
     * @uses Segment::setLegNumber()
     * @uses Segment::setTrainNumber()
     * @uses Segment::setRfiTrainNumber()
     * @uses Segment::setLegs()
     * @uses Segment::setCarrierCode()
     */
    public function __construct(?string $sta = null, ?string $std = null, ?int $legNumber = null, ?string $trainNumber = null, ?string $rfiTrainNumber = null, ?ArrayOfLeg $legs = null, ?string $carrierCode = null)
    {
        $this
            ->setSta($sta)
            ->setStd($std)
            ->setLegNumber($legNumber)
            ->setTrainNumber($trainNumber)
            ->setRfiTrainNumber($rfiTrainNumber)
            ->setLegs($legs)
            ->setCarrierCode($carrierCode);
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
     * Get LegNumber value
     *
     * @return int|null
     */
    public function getLegNumber(): ?int
    {
        return $this->LegNumber;
    }

    /**
     * Set LegNumber value
     *
     * @param int $legNumber
     *
     * @return Segment
     */
    public function setLegNumber(?int $legNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($legNumber) && !(is_int($legNumber) || ctype_digit($legNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($legNumber, true), gettype($legNumber)), __LINE__);
        }
        $this->LegNumber = $legNumber;

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
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfLeg|null
     */
    public function getLegs(): ?ArrayOfLeg
    {
        return $this->Legs ?? null;
    }

    /**
     * Set Legs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfLeg $legs
     *
     * @return Segment
     */
    public function setLegs(?ArrayOfLeg $legs = null): self
    {
        if (is_null($legs) || (is_array($legs) && empty($legs))) {
            unset($this->Legs);
        } else {
            $this->Legs = $legs;
        }

        return $this;
    }

    /**
     * Get CarrierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCarrierCode(): ?string
    {
        return $this->CarrierCode ?? null;
    }

    /**
     * Set CarrierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $carrierCode
     *
     * @return Segment
     */
    public function setCarrierCode(?string $carrierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierCode, true), gettype($carrierCode)), __LINE__);
        }
        if (is_null($carrierCode) || (is_array($carrierCode) && empty($carrierCode))) {
            unset($this->CarrierCode);
        } else {
            $this->CarrierCode = $carrierCode;
        }

        return $this;
    }
}
