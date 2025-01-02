<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for ExportBookingInfoResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q46:ExportBookingInfoResponse | tns:ExportBookingInfoResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ExportBookingInfoResponse extends ResponseBase
{
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Size = null;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Data = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Description = null;

    /**
     * Constructor method for ExportBookingInfoResponse
     *
     * @param int    $size
     * @param string $data
     * @param string $name
     * @param string $description
     *
     * @uses ExportBookingInfoResponse::setSize()
     * @uses ExportBookingInfoResponse::setData()
     * @uses ExportBookingInfoResponse::setName()
     * @uses ExportBookingInfoResponse::setDescription()
     */
    public function __construct(?int $size = null, ?string $data = null, ?string $name = null, ?string $description = null)
    {
        $this
            ->setSize($size)
            ->setData($data)
            ->setName($name)
            ->setDescription($description);
    }

    /**
     * Get Size value
     *
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->Size;
    }

    /**
     * Set Size value
     *
     * @param int $size
     *
     * @return ExportBookingInfoResponse
     */
    public function setSize(?int $size = null): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;

        return $this;
    }

    /**
     * Get Data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->Data ?? null;
    }

    /**
     * Set Data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $data
     *
     * @return ExportBookingInfoResponse
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->Data);
        } else {
            $this->Data = $data;
        }

        return $this;
    }

    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $name
     *
     * @return ExportBookingInfoResponse
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }

        return $this;
    }

    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }

    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $description
     *
     * @return ExportBookingInfoResponse
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }

        return $this;
    }
}
