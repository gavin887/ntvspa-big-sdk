<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfEquipmentProperty;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SeatAvailability;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Seat Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Seat
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Seat extends AbstractStructBase
{
    /**
     * The Assignable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $Assignable = null;
    /**
     * The SeatSet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $SeatSet = null;
    /**
     * The SeatAngle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $SeatAngle = null;
    /**
     * The SeatAvailability
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $SeatAvailability = null;
    /**
     * The X
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $X = null;
    /**
     * The Y
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Y = null;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Height = null;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Width = null;
    /**
     * The SeatGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $SeatGroup = null;
    /**
     * The SeatDesignator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SeatDesignator = null;
    /**
     * The SeatType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SeatType = null;
    /**
     * The PropertyList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfEquipmentProperty|null
     */
    protected ?ArrayOfEquipmentProperty $PropertyList = null;
    /**
     * The TravelClassCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TravelClassCode = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Text = null;

    /**
     * Constructor method for Seat
     *
     * @param bool                                                $assignable
     * @param int                                                 $seatSet
     * @param int                                                 $seatAngle
     * @param string                                              $seatAvailability
     * @param int                                                 $x
     * @param int                                                 $y
     * @param int                                                 $height
     * @param int                                                 $width
     * @param int                                                 $seatGroup
     * @param string                                              $seatDesignator
     * @param string                                              $seatType
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfEquipmentProperty $propertyList
     * @param string                                              $travelClassCode
     * @param string                                              $text
     *
     * @uses Seat::setAssignable()
     * @uses Seat::setSeatSet()
     * @uses Seat::setSeatAngle()
     * @uses Seat::setSeatAvailability()
     * @uses Seat::setX()
     * @uses Seat::setY()
     * @uses Seat::setHeight()
     * @uses Seat::setWidth()
     * @uses Seat::setSeatGroup()
     * @uses Seat::setSeatDesignator()
     * @uses Seat::setSeatType()
     * @uses Seat::setPropertyList()
     * @uses Seat::setTravelClassCode()
     * @uses Seat::setText()
     */
    public function __construct(?bool $assignable = null, ?int $seatSet = null, ?int $seatAngle = null, ?string $seatAvailability = null, ?int $x = null, ?int $y = null, ?int $height = null, ?int $width = null, ?int $seatGroup = null, ?string $seatDesignator = null, ?string $seatType = null, ?ArrayOfEquipmentProperty $propertyList = null, ?string $travelClassCode = null, ?string $text = null)
    {
        $this
            ->setAssignable($assignable)
            ->setSeatSet($seatSet)
            ->setSeatAngle($seatAngle)
            ->setSeatAvailability($seatAvailability)
            ->setX($x)
            ->setY($y)
            ->setHeight($height)
            ->setWidth($width)
            ->setSeatGroup($seatGroup)
            ->setSeatDesignator($seatDesignator)
            ->setSeatType($seatType)
            ->setPropertyList($propertyList)
            ->setTravelClassCode($travelClassCode)
            ->setText($text);
    }

    /**
     * Get Assignable value
     *
     * @return bool|null
     */
    public function getAssignable(): ?bool
    {
        return $this->Assignable;
    }

    /**
     * Set Assignable value
     *
     * @param bool $assignable
     *
     * @return Seat
     */
    public function setAssignable(?bool $assignable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($assignable) && !is_bool($assignable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($assignable, true), gettype($assignable)), __LINE__);
        }
        $this->Assignable = $assignable;

        return $this;
    }

    /**
     * Get SeatSet value
     *
     * @return int|null
     */
    public function getSeatSet(): ?int
    {
        return $this->SeatSet;
    }

    /**
     * Set SeatSet value
     *
     * @param int $seatSet
     *
     * @return Seat
     */
    public function setSeatSet(?int $seatSet = null): self
    {
        // validation for constraint: int
        if (!is_null($seatSet) && !(is_int($seatSet) || ctype_digit($seatSet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($seatSet, true), gettype($seatSet)), __LINE__);
        }
        $this->SeatSet = $seatSet;

        return $this;
    }

    /**
     * Get SeatAngle value
     *
     * @return int|null
     */
    public function getSeatAngle(): ?int
    {
        return $this->SeatAngle;
    }

    /**
     * Set SeatAngle value
     *
     * @param int $seatAngle
     *
     * @return Seat
     */
    public function setSeatAngle(?int $seatAngle = null): self
    {
        // validation for constraint: int
        if (!is_null($seatAngle) && !(is_int($seatAngle) || ctype_digit($seatAngle))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($seatAngle, true), gettype($seatAngle)), __LINE__);
        }
        $this->SeatAngle = $seatAngle;

        return $this;
    }

    /**
     * Get SeatAvailability value
     *
     * @return string|null
     */
    public function getSeatAvailability(): ?string
    {
        return $this->SeatAvailability;
    }

    /**
     * Set SeatAvailability value
     *
     * @param string $seatAvailability
     *
     * @return Seat
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SeatAvailability::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SeatAvailability::valueIsValid()
     */
    public function setSeatAvailability(?string $seatAvailability = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SeatAvailability::valueIsValid($seatAvailability)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SeatAvailability', is_array($seatAvailability) ? implode(', ', $seatAvailability) : var_export($seatAvailability, true), implode(', ', SeatAvailability::getValidValues())), __LINE__);
        }
        $this->SeatAvailability = $seatAvailability;

        return $this;
    }

    /**
     * Get X value
     *
     * @return int|null
     */
    public function getX(): ?int
    {
        return $this->X;
    }

    /**
     * Set X value
     *
     * @param int $x
     *
     * @return Seat
     */
    public function setX(?int $x = null): self
    {
        // validation for constraint: int
        if (!is_null($x) && !(is_int($x) || ctype_digit($x))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($x, true), gettype($x)), __LINE__);
        }
        $this->X = $x;

        return $this;
    }

    /**
     * Get Y value
     *
     * @return int|null
     */
    public function getY(): ?int
    {
        return $this->Y;
    }

    /**
     * Set Y value
     *
     * @param int $y
     *
     * @return Seat
     */
    public function setY(?int $y = null): self
    {
        // validation for constraint: int
        if (!is_null($y) && !(is_int($y) || ctype_digit($y))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($y, true), gettype($y)), __LINE__);
        }
        $this->Y = $y;

        return $this;
    }

    /**
     * Get Height value
     *
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->Height;
    }

    /**
     * Set Height value
     *
     * @param int $height
     *
     * @return Seat
     */
    public function setHeight(?int $height = null): self
    {
        // validation for constraint: int
        if (!is_null($height) && !(is_int($height) || ctype_digit($height))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->Height = $height;

        return $this;
    }

    /**
     * Get Width value
     *
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->Width;
    }

    /**
     * Set Width value
     *
     * @param int $width
     *
     * @return Seat
     */
    public function setWidth(?int $width = null): self
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;

        return $this;
    }

    /**
     * Get SeatGroup value
     *
     * @return int|null
     */
    public function getSeatGroup(): ?int
    {
        return $this->SeatGroup;
    }

    /**
     * Set SeatGroup value
     *
     * @param int $seatGroup
     *
     * @return Seat
     */
    public function setSeatGroup(?int $seatGroup = null): self
    {
        // validation for constraint: int
        if (!is_null($seatGroup) && !(is_int($seatGroup) || ctype_digit($seatGroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($seatGroup, true), gettype($seatGroup)), __LINE__);
        }
        $this->SeatGroup = $seatGroup;

        return $this;
    }

    /**
     * Get SeatDesignator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSeatDesignator(): ?string
    {
        return $this->SeatDesignator ?? null;
    }

    /**
     * Set SeatDesignator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $seatDesignator
     *
     * @return Seat
     */
    public function setSeatDesignator(?string $seatDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($seatDesignator) && !is_string($seatDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatDesignator, true), gettype($seatDesignator)), __LINE__);
        }
        if (is_null($seatDesignator) || (is_array($seatDesignator) && empty($seatDesignator))) {
            unset($this->SeatDesignator);
        } else {
            $this->SeatDesignator = $seatDesignator;
        }

        return $this;
    }

    /**
     * Get SeatType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSeatType(): ?string
    {
        return $this->SeatType ?? null;
    }

    /**
     * Set SeatType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $seatType
     *
     * @return Seat
     */
    public function setSeatType(?string $seatType = null): self
    {
        // validation for constraint: string
        if (!is_null($seatType) && !is_string($seatType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatType, true), gettype($seatType)), __LINE__);
        }
        if (is_null($seatType) || (is_array($seatType) && empty($seatType))) {
            unset($this->SeatType);
        } else {
            $this->SeatType = $seatType;
        }

        return $this;
    }

    /**
     * Get PropertyList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfEquipmentProperty|null
     */
    public function getPropertyList(): ?ArrayOfEquipmentProperty
    {
        return $this->PropertyList ?? null;
    }

    /**
     * Set PropertyList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfEquipmentProperty $propertyList
     *
     * @return Seat
     */
    public function setPropertyList(?ArrayOfEquipmentProperty $propertyList = null): self
    {
        if (is_null($propertyList) || (is_array($propertyList) && empty($propertyList))) {
            unset($this->PropertyList);
        } else {
            $this->PropertyList = $propertyList;
        }

        return $this;
    }

    /**
     * Get TravelClassCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTravelClassCode(): ?string
    {
        return $this->TravelClassCode ?? null;
    }

    /**
     * Set TravelClassCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $travelClassCode
     *
     * @return Seat
     */
    public function setTravelClassCode(?string $travelClassCode = null): self
    {
        // validation for constraint: string
        if (!is_null($travelClassCode) && !is_string($travelClassCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelClassCode, true), gettype($travelClassCode)), __LINE__);
        }
        if (is_null($travelClassCode) || (is_array($travelClassCode) && empty($travelClassCode))) {
            unset($this->TravelClassCode);
        } else {
            $this->TravelClassCode = $travelClassCode;
        }

        return $this;
    }

    /**
     * Get Text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text ?? null;
    }

    /**
     * Set Text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $text
     *
     * @return Seat
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        if (is_null($text) || (is_array($text) && empty($text))) {
            unset($this->Text);
        } else {
            $this->Text = $text;
        }

        return $this;
    }
}
