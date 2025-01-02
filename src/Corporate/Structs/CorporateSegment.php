<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CorporateSegment Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CorporateSegment
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CorporateSegment extends AbstractStructBase
{
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ExpirationDate = null;
    /**
     * The NumberOfTravelsActual
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $NumberOfTravelsActual = null;
    /**
     * The NumberOfTravelsLeft
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $NumberOfTravelsLeft = null;
    /**
     * The SegmentName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SegmentName = null;

    /**
     * Constructor method for CorporateSegment
     *
     * @param string $expirationDate
     * @param int    $numberOfTravelsActual
     * @param int    $numberOfTravelsLeft
     * @param string $segmentName
     *
     * @uses CorporateSegment::setExpirationDate()
     * @uses CorporateSegment::setNumberOfTravelsActual()
     * @uses CorporateSegment::setNumberOfTravelsLeft()
     * @uses CorporateSegment::setSegmentName()
     */
    public function __construct(?string $expirationDate = null, ?int $numberOfTravelsActual = null, ?int $numberOfTravelsLeft = null, ?string $segmentName = null)
    {
        $this
            ->setExpirationDate($expirationDate)
            ->setNumberOfTravelsActual($numberOfTravelsActual)
            ->setNumberOfTravelsLeft($numberOfTravelsLeft)
            ->setSegmentName($segmentName);
    }

    /**
     * Get ExpirationDate value
     *
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->ExpirationDate;
    }

    /**
     * Set ExpirationDate value
     *
     * @param string $expirationDate
     *
     * @return CorporateSegment
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get NumberOfTravelsActual value
     *
     * @return int|null
     */
    public function getNumberOfTravelsActual(): ?int
    {
        return $this->NumberOfTravelsActual;
    }

    /**
     * Set NumberOfTravelsActual value
     *
     * @param int $numberOfTravelsActual
     *
     * @return CorporateSegment
     */
    public function setNumberOfTravelsActual(?int $numberOfTravelsActual = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfTravelsActual) && !(is_int($numberOfTravelsActual) || ctype_digit($numberOfTravelsActual))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfTravelsActual, true), gettype($numberOfTravelsActual)), __LINE__);
        }
        $this->NumberOfTravelsActual = $numberOfTravelsActual;

        return $this;
    }

    /**
     * Get NumberOfTravelsLeft value
     *
     * @return int|null
     */
    public function getNumberOfTravelsLeft(): ?int
    {
        return $this->NumberOfTravelsLeft;
    }

    /**
     * Set NumberOfTravelsLeft value
     *
     * @param int $numberOfTravelsLeft
     *
     * @return CorporateSegment
     */
    public function setNumberOfTravelsLeft(?int $numberOfTravelsLeft = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfTravelsLeft) && !(is_int($numberOfTravelsLeft) || ctype_digit($numberOfTravelsLeft))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfTravelsLeft, true), gettype($numberOfTravelsLeft)), __LINE__);
        }
        $this->NumberOfTravelsLeft = $numberOfTravelsLeft;

        return $this;
    }

    /**
     * Get SegmentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSegmentName(): ?string
    {
        return $this->SegmentName ?? null;
    }

    /**
     * Set SegmentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $segmentName
     *
     * @return CorporateSegment
     */
    public function setSegmentName(?string $segmentName = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentName) && !is_string($segmentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentName, true), gettype($segmentName)), __LINE__);
        }
        if (is_null($segmentName) || (is_array($segmentName) && empty($segmentName))) {
            unset($this->SegmentName);
        } else {
            $this->SegmentName = $segmentName;
        }

        return $this;
    }
}
