<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfAssignedSSR;
use Booking\Arrays\ArrayOfAvailableSSR;
use Booking\Arrays\ArrayOfAvailableUpgrade;
use Booking\Arrays\ArrayOfFare;
use Booking\Arrays\ArrayOfLeg;
use Booking\Arrays\ArrayOfPaxSeat;
use Booking\Arrays\ArrayOfPaxSSR;
use InvalidArgumentException;
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
     * The NoStopTrain
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $NoStopTrain = null;
    /**
     * The OneStopTrain
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $OneStopTrain = null;
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
     * The TrainNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TrainNumber = null;
    /**
     * The SegmentSellKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SegmentSellKey = null;
    /**
     * The Legs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfLeg|null
     */
    protected ?ArrayOfLeg $Legs = null;
    /**
     * The Fares
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfFare|null
     */
    protected ?ArrayOfFare $Fares = null;
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
     * The DepartureStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DepartureStation = null;
    /**
     * The AvailableSSRs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableSSR|null
     */
    protected ?ArrayOfAvailableSSR $AvailableSSRs = null;
    /**
     * The AssignedSSRs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfAssignedSSR|null
     */
    protected ?ArrayOfAssignedSSR $AssignedSSRs = null;
    /**
     * The PaxSeats
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfPaxSeat|null
     */
    protected ?ArrayOfPaxSeat $PaxSeats = null;
    /**
     * The CabinOfService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CabinOfService = null;
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
     * The AllowCancel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $AllowCancel = null;
    /**
     * The AllowModify
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $AllowModify = null;
    /**
     * The UntilMinCancel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $UntilMinCancel = null;
    /**
     * The Fare
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Fare|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\Fare $Fare = null;
    /**
     * The PaxSSRs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfPaxSSR|null
     */
    protected ?ArrayOfPaxSSR $PaxSSRs = null;
    /**
     * The UntilMinModify
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $UntilMinModify = null;
    /**
     * The IsChangeSeatAvailable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $IsChangeSeatAvailable = null;
    /**
     * The AvailableUpgrades
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableUpgrade|null
     */
    protected ?ArrayOfAvailableUpgrade $AvailableUpgrades = null;
    /**
     * The UpgradeClassOfService
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $UpgradeClassOfService = null;

    /**
     * Constructor method for Segment
     *
     * @param string                                             $sTD
     * @param string                                             $sTA
     * @param bool                                               $noStopTrain
     * @param bool                                               $oneStopTrain
     * @param string                                             $std
     * @param string                                             $sta
     * @param string                                             $trainNumber
     * @param string                                             $segmentSellKey
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfLeg              $legs
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfFare             $fares
     * @param string                                             $arrivalStation
     * @param string                                             $departureStation
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableSSR     $availableSSRs
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfAssignedSSR      $assignedSSRs
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPaxSeat          $paxSeats
     * @param string                                             $cabinOfService
     * @param string                                             $rFITrainNumber
     * @param bool                                               $allowCancel
     * @param bool                                               $allowModify
     * @param int                                                $untilMinCancel
     * @param Fare                                               $fare
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPaxSSR           $paxSSRs
     * @param int                                                $untilMinModify
     * @param bool                                               $isChangeSeatAvailable
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableUpgrade $availableUpgrades
     * @param string                                             $upgradeClassOfService
     *
     * @uses Segment::setSTD()
     * @uses Segment::setSTA()
     * @uses Segment::setNoStopTrain()
     * @uses Segment::setOneStopTrain()
     * @uses Segment::setStd_1()
     * @uses Segment::setSta_1()
     * @uses Segment::setTrainNumber()
     * @uses Segment::setSegmentSellKey()
     * @uses Segment::setLegs()
     * @uses Segment::setFares()
     * @uses Segment::setArrivalStation()
     * @uses Segment::setDepartureStation()
     * @uses Segment::setAvailableSSRs()
     * @uses Segment::setAssignedSSRs()
     * @uses Segment::setPaxSeats()
     * @uses Segment::setCabinOfService()
     * @uses Segment::setRFITrainNumber()
     * @uses Segment::setAllowCancel()
     * @uses Segment::setAllowModify()
     * @uses Segment::setUntilMinCancel()
     * @uses Segment::setFare()
     * @uses Segment::setPaxSSRs()
     * @uses Segment::setUntilMinModify()
     * @uses Segment::setIsChangeSeatAvailable()
     * @uses Segment::setAvailableUpgrades()
     * @uses Segment::setUpgradeClassOfService()
     */
    public function __construct(?string $sTD = null, ?string $sTA = null, ?bool $noStopTrain = null, ?bool $oneStopTrain = null, ?string $std_1 = null, ?string $sta_1 = null, ?string $trainNumber = null, ?string $segmentSellKey = null, ?ArrayOfLeg $legs = null, ?ArrayOfFare $fares = null, ?string $arrivalStation = null, ?string $departureStation = null, ?ArrayOfAvailableSSR $availableSSRs = null, ?ArrayOfAssignedSSR $assignedSSRs = null, ?ArrayOfPaxSeat $paxSeats = null, ?string $cabinOfService = null, ?string $rFITrainNumber = null, ?bool $allowCancel = null, ?bool $allowModify = null, ?int $untilMinCancel = null, ?\Ntvspa\Big\Booking\Structs\Fare $fare = null, ?ArrayOfPaxSSR $paxSSRs = null, ?int $untilMinModify = null, ?bool $isChangeSeatAvailable = null, ?ArrayOfAvailableUpgrade $availableUpgrades = null, ?string $upgradeClassOfService = null)
    {
        $this
            ->setSTD($sTD)
            ->setSTA($sTA)
            ->setNoStopTrain($noStopTrain)
            ->setOneStopTrain($oneStopTrain)
            ->setStd_1($std_1)
            ->setSta_1($sta_1)
            ->setTrainNumber($trainNumber)
            ->setSegmentSellKey($segmentSellKey)
            ->setLegs($legs)
            ->setFares($fares)
            ->setArrivalStation($arrivalStation)
            ->setDepartureStation($departureStation)
            ->setAvailableSSRs($availableSSRs)
            ->setAssignedSSRs($assignedSSRs)
            ->setPaxSeats($paxSeats)
            ->setCabinOfService($cabinOfService)
            ->setRFITrainNumber($rFITrainNumber)
            ->setAllowCancel($allowCancel)
            ->setAllowModify($allowModify)
            ->setUntilMinCancel($untilMinCancel)
            ->setFare($fare)
            ->setPaxSSRs($paxSSRs)
            ->setUntilMinModify($untilMinModify)
            ->setIsChangeSeatAvailable($isChangeSeatAvailable)
            ->setAvailableUpgrades($availableUpgrades)
            ->setUpgradeClassOfService($upgradeClassOfService);
    }

    /**
     * Set Sta value
     *
     * @param string $sta
     *
     * @return Segment
     */
    public function setSta_1(?string $sta_1 = null): self
    {
        // validation for constraint: string
        if (!is_null($sta_1) && !is_string($sta_1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sta_1, true), gettype($sta_1)), __LINE__);
        }
        $this->Sta = $sta_1;

        return $this;
    }

    /**
     * Set Std value
     *
     * @param string $std
     *
     * @return Segment
     */
    public function setStd_1(?string $std_1 = null): self
    {
        // validation for constraint: string
        if (!is_null($std_1) && !is_string($std_1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($std_1, true), gettype($std_1)), __LINE__);
        }
        $this->Std = $std_1;

        return $this;
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
     * @return Segment
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
     * @return Segment
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
     * Get NoStopTrain value
     *
     * @return bool|null
     */
    public function getNoStopTrain(): ?bool
    {
        return $this->NoStopTrain;
    }

    /**
     * Set NoStopTrain value
     *
     * @param bool $noStopTrain
     *
     * @return Segment
     */
    public function setNoStopTrain(?bool $noStopTrain = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noStopTrain) && !is_bool($noStopTrain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noStopTrain, true), gettype($noStopTrain)), __LINE__);
        }
        $this->NoStopTrain = $noStopTrain;

        return $this;
    }

    /**
     * Get OneStopTrain value
     *
     * @return bool|null
     */
    public function getOneStopTrain(): ?bool
    {
        return $this->OneStopTrain;
    }

    /**
     * Set OneStopTrain value
     *
     * @param bool $oneStopTrain
     *
     * @return Segment
     */
    public function setOneStopTrain(?bool $oneStopTrain = null): self
    {
        // validation for constraint: boolean
        if (!is_null($oneStopTrain) && !is_bool($oneStopTrain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oneStopTrain, true), gettype($oneStopTrain)), __LINE__);
        }
        $this->OneStopTrain = $oneStopTrain;

        return $this;
    }

    /**
     * Get Std value
     *
     * @return string|null
     */
    public function getStd_1(): ?string
    {
        return $this->Std;
    }

    /**
     * Get Sta value
     *
     * @return string|null
     */
    public function getSta_1(): ?string
    {
        return $this->Sta;
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
     * Get SegmentSellKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSegmentSellKey(): ?string
    {
        return $this->SegmentSellKey ?? null;
    }

    /**
     * Set SegmentSellKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $segmentSellKey
     *
     * @return Segment
     */
    public function setSegmentSellKey(?string $segmentSellKey = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentSellKey) && !is_string($segmentSellKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentSellKey, true), gettype($segmentSellKey)), __LINE__);
        }
        if (is_null($segmentSellKey) || (is_array($segmentSellKey) && empty($segmentSellKey))) {
            unset($this->SegmentSellKey);
        } else {
            $this->SegmentSellKey = $segmentSellKey;
        }

        return $this;
    }

    /**
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfLeg|null
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
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfLeg $legs
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
     * Get Fares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfFare|null
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
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfFare $fares
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
     * Get AvailableSSRs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableSSR|null
     */
    public function getAvailableSSRs(): ?ArrayOfAvailableSSR
    {
        return $this->AvailableSSRs ?? null;
    }

    /**
     * Set AvailableSSRs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableSSR $availableSSRs
     *
     * @return Segment
     */
    public function setAvailableSSRs(?ArrayOfAvailableSSR $availableSSRs = null): self
    {
        if (is_null($availableSSRs) || (is_array($availableSSRs) && empty($availableSSRs))) {
            unset($this->AvailableSSRs);
        } else {
            $this->AvailableSSRs = $availableSSRs;
        }

        return $this;
    }

    /**
     * Get AssignedSSRs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfAssignedSSR|null
     */
    public function getAssignedSSRs(): ?ArrayOfAssignedSSR
    {
        return $this->AssignedSSRs ?? null;
    }

    /**
     * Set AssignedSSRs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfAssignedSSR $assignedSSRs
     *
     * @return Segment
     */
    public function setAssignedSSRs(?ArrayOfAssignedSSR $assignedSSRs = null): self
    {
        if (is_null($assignedSSRs) || (is_array($assignedSSRs) && empty($assignedSSRs))) {
            unset($this->AssignedSSRs);
        } else {
            $this->AssignedSSRs = $assignedSSRs;
        }

        return $this;
    }

    /**
     * Get PaxSeats value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfPaxSeat|null
     */
    public function getPaxSeats(): ?ArrayOfPaxSeat
    {
        return $this->PaxSeats ?? null;
    }

    /**
     * Set PaxSeats value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPaxSeat $paxSeats
     *
     * @return Segment
     */
    public function setPaxSeats(?ArrayOfPaxSeat $paxSeats = null): self
    {
        if (is_null($paxSeats) || (is_array($paxSeats) && empty($paxSeats))) {
            unset($this->PaxSeats);
        } else {
            $this->PaxSeats = $paxSeats;
        }

        return $this;
    }

    /**
     * Get CabinOfService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCabinOfService(): ?string
    {
        return $this->CabinOfService ?? null;
    }

    /**
     * Set CabinOfService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cabinOfService
     *
     * @return Segment
     */
    public function setCabinOfService(?string $cabinOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinOfService) && !is_string($cabinOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinOfService, true), gettype($cabinOfService)), __LINE__);
        }
        if (is_null($cabinOfService) || (is_array($cabinOfService) && empty($cabinOfService))) {
            unset($this->CabinOfService);
        } else {
            $this->CabinOfService = $cabinOfService;
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
    public function getRFITrainNumber(): ?string
    {
        return $this->RFITrainNumber ?? null;
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
    public function setRFITrainNumber(?string $rFITrainNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($rFITrainNumber) && !is_string($rFITrainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rFITrainNumber, true), gettype($rFITrainNumber)), __LINE__);
        }
        if (is_null($rFITrainNumber) || (is_array($rFITrainNumber) && empty($rFITrainNumber))) {
            unset($this->RFITrainNumber);
        } else {
            $this->RFITrainNumber = $rFITrainNumber;
        }

        return $this;
    }

    /**
     * Get AllowCancel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getAllowCancel(): ?bool
    {
        return $this->AllowCancel ?? null;
    }

    /**
     * Set AllowCancel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $allowCancel
     *
     * @return Segment
     */
    public function setAllowCancel(?bool $allowCancel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowCancel) && !is_bool($allowCancel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowCancel, true), gettype($allowCancel)), __LINE__);
        }
        if (is_null($allowCancel) || (is_array($allowCancel) && empty($allowCancel))) {
            unset($this->AllowCancel);
        } else {
            $this->AllowCancel = $allowCancel;
        }

        return $this;
    }

    /**
     * Get AllowModify value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getAllowModify(): ?bool
    {
        return $this->AllowModify ?? null;
    }

    /**
     * Set AllowModify value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $allowModify
     *
     * @return Segment
     */
    public function setAllowModify(?bool $allowModify = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowModify) && !is_bool($allowModify)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowModify, true), gettype($allowModify)), __LINE__);
        }
        if (is_null($allowModify) || (is_array($allowModify) && empty($allowModify))) {
            unset($this->AllowModify);
        } else {
            $this->AllowModify = $allowModify;
        }

        return $this;
    }

    /**
     * Get UntilMinCancel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getUntilMinCancel(): ?int
    {
        return $this->UntilMinCancel ?? null;
    }

    /**
     * Set UntilMinCancel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $untilMinCancel
     *
     * @return Segment
     */
    public function setUntilMinCancel(?int $untilMinCancel = null): self
    {
        // validation for constraint: int
        if (!is_null($untilMinCancel) && !(is_int($untilMinCancel) || ctype_digit($untilMinCancel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($untilMinCancel, true), gettype($untilMinCancel)), __LINE__);
        }
        if (is_null($untilMinCancel) || (is_array($untilMinCancel) && empty($untilMinCancel))) {
            unset($this->UntilMinCancel);
        } else {
            $this->UntilMinCancel = $untilMinCancel;
        }

        return $this;
    }

    /**
     * Get Fare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Fare|null
     */
    public function getFare(): ?\Ntvspa\Big\Booking\Structs\Fare
    {
        return $this->Fare ?? null;
    }

    /**
     * Set Fare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Fare $fare
     *
     * @return Segment
     */
    public function setFare(?\Ntvspa\Big\Booking\Structs\Fare $fare = null): self
    {
        if (is_null($fare) || (is_array($fare) && empty($fare))) {
            unset($this->Fare);
        } else {
            $this->Fare = $fare;
        }

        return $this;
    }

    /**
     * Get PaxSSRs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfPaxSSR|null
     */
    public function getPaxSSRs(): ?ArrayOfPaxSSR
    {
        return $this->PaxSSRs ?? null;
    }

    /**
     * Set PaxSSRs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPaxSSR $paxSSRs
     *
     * @return Segment
     */
    public function setPaxSSRs(?ArrayOfPaxSSR $paxSSRs = null): self
    {
        if (is_null($paxSSRs) || (is_array($paxSSRs) && empty($paxSSRs))) {
            unset($this->PaxSSRs);
        } else {
            $this->PaxSSRs = $paxSSRs;
        }

        return $this;
    }

    /**
     * Get UntilMinModify value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getUntilMinModify(): ?int
    {
        return $this->UntilMinModify ?? null;
    }

    /**
     * Set UntilMinModify value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $untilMinModify
     *
     * @return Segment
     */
    public function setUntilMinModify(?int $untilMinModify = null): self
    {
        // validation for constraint: int
        if (!is_null($untilMinModify) && !(is_int($untilMinModify) || ctype_digit($untilMinModify))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($untilMinModify, true), gettype($untilMinModify)), __LINE__);
        }
        if (is_null($untilMinModify) || (is_array($untilMinModify) && empty($untilMinModify))) {
            unset($this->UntilMinModify);
        } else {
            $this->UntilMinModify = $untilMinModify;
        }

        return $this;
    }

    /**
     * Get IsChangeSeatAvailable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getIsChangeSeatAvailable(): ?bool
    {
        return $this->IsChangeSeatAvailable ?? null;
    }

    /**
     * Set IsChangeSeatAvailable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $isChangeSeatAvailable
     *
     * @return Segment
     */
    public function setIsChangeSeatAvailable(?bool $isChangeSeatAvailable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isChangeSeatAvailable) && !is_bool($isChangeSeatAvailable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChangeSeatAvailable, true), gettype($isChangeSeatAvailable)), __LINE__);
        }
        if (is_null($isChangeSeatAvailable) || (is_array($isChangeSeatAvailable) && empty($isChangeSeatAvailable))) {
            unset($this->IsChangeSeatAvailable);
        } else {
            $this->IsChangeSeatAvailable = $isChangeSeatAvailable;
        }

        return $this;
    }

    /**
     * Get AvailableUpgrades value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableUpgrade|null
     */
    public function getAvailableUpgrades(): ?ArrayOfAvailableUpgrade
    {
        return $this->AvailableUpgrades ?? null;
    }

    /**
     * Set AvailableUpgrades value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableUpgrade $availableUpgrades
     *
     * @return Segment
     */
    public function setAvailableUpgrades(?ArrayOfAvailableUpgrade $availableUpgrades = null): self
    {
        if (is_null($availableUpgrades) || (is_array($availableUpgrades) && empty($availableUpgrades))) {
            unset($this->AvailableUpgrades);
        } else {
            $this->AvailableUpgrades = $availableUpgrades;
        }

        return $this;
    }

    /**
     * Get UpgradeClassOfService value
     *
     * @return string|null
     */
    public function getUpgradeClassOfService(): ?string
    {
        return $this->UpgradeClassOfService;
    }

    /**
     * Set UpgradeClassOfService value
     *
     * @param string $upgradeClassOfService
     *
     * @return Segment
     */
    public function setUpgradeClassOfService(?string $upgradeClassOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($upgradeClassOfService) && !is_string($upgradeClassOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($upgradeClassOfService, true), gettype($upgradeClassOfService)), __LINE__);
        }
        $this->UpgradeClassOfService = $upgradeClassOfService;

        return $this;
    }
}
