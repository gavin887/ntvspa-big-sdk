<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\ContentDataType;
use Ntvspa\Big\Booking\Enums\ContentType;

/**
 * This class stands for GetGRMContentResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q22:GetGRMContentResponse | tns:GetGRMContentResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetGRMContentResponse extends ResponseBase
{
    /**
     * The ContentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $ContentID = null;
    /**
     * The ContentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ContentType = null;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Size = null;
    /**
     * The DataType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $DataType = null;
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
     * The CultureCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CultureCode = null;
    /**
     * The CreatedAgentName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CreatedAgentName = null;
    /**
     * The ModifiedAgentName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ModifiedAgentName = null;
    /**
     * The MD5checksum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $MD5checksum = null;

    /**
     * Constructor method for GetGRMContentResponse
     *
     * @param int    $contentID
     * @param string $contentType
     * @param int    $size
     * @param string $dataType
     * @param string $data
     * @param string $name
     * @param string $description
     * @param string $cultureCode
     * @param string $createdAgentName
     * @param string $modifiedAgentName
     * @param string $mD5checksum
     *
     * @uses GetGRMContentResponse::setContentID()
     * @uses GetGRMContentResponse::setContentType()
     * @uses GetGRMContentResponse::setSize()
     * @uses GetGRMContentResponse::setDataType()
     * @uses GetGRMContentResponse::setData()
     * @uses GetGRMContentResponse::setName()
     * @uses GetGRMContentResponse::setDescription()
     * @uses GetGRMContentResponse::setCultureCode()
     * @uses GetGRMContentResponse::setCreatedAgentName()
     * @uses GetGRMContentResponse::setModifiedAgentName()
     * @uses GetGRMContentResponse::setMD5checksum()
     */
    public function __construct(?int $contentID = null, ?string $contentType = null, ?int $size = null, ?string $dataType = null, ?string $data = null, ?string $name = null, ?string $description = null, ?string $cultureCode = null, ?string $createdAgentName = null, ?string $modifiedAgentName = null, ?string $mD5checksum = null)
    {
        $this
            ->setContentID($contentID)
            ->setContentType($contentType)
            ->setSize($size)
            ->setDataType($dataType)
            ->setData($data)
            ->setName($name)
            ->setDescription($description)
            ->setCultureCode($cultureCode)
            ->setCreatedAgentName($createdAgentName)
            ->setModifiedAgentName($modifiedAgentName)
            ->setMD5checksum($mD5checksum);
    }

    /**
     * Get ContentID value
     *
     * @return int|null
     */
    public function getContentID(): ?int
    {
        return $this->ContentID;
    }

    /**
     * Set ContentID value
     *
     * @param int $contentID
     *
     * @return GetGRMContentResponse
     */
    public function setContentID(?int $contentID = null): self
    {
        // validation for constraint: int
        if (!is_null($contentID) && !(is_int($contentID) || ctype_digit($contentID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contentID, true), gettype($contentID)), __LINE__);
        }
        $this->ContentID = $contentID;

        return $this;
    }

    /**
     * Get ContentType value
     *
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->ContentType;
    }

    /**
     * Set ContentType value
     *
     * @param string $contentType
     *
     * @return GetGRMContentResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\ContentType::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\ContentType::valueIsValid()
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\ContentType::valueIsValid($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\ContentType', is_array($contentType) ? implode(', ', $contentType) : var_export($contentType, true), implode(', ', ContentType::getValidValues())), __LINE__);
        }
        $this->ContentType = $contentType;

        return $this;
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
     * @return GetGRMContentResponse
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
     * Get DataType value
     *
     * @return string|null
     */
    public function getDataType(): ?string
    {
        return $this->DataType;
    }

    /**
     * Set DataType value
     *
     * @param string $dataType
     *
     * @return GetGRMContentResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\ContentDataType::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\ContentDataType::valueIsValid()
     */
    public function setDataType(?string $dataType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\ContentDataType::valueIsValid($dataType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\ContentDataType', is_array($dataType) ? implode(', ', $dataType) : var_export($dataType, true), implode(', ', ContentDataType::getValidValues())), __LINE__);
        }
        $this->DataType = $dataType;

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
     * @return GetGRMContentResponse
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
     * @return GetGRMContentResponse
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
     * @return GetGRMContentResponse
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

    /**
     * Get CultureCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCultureCode(): ?string
    {
        return $this->CultureCode ?? null;
    }

    /**
     * Set CultureCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cultureCode
     *
     * @return GetGRMContentResponse
     */
    public function setCultureCode(?string $cultureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureCode) && !is_string($cultureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureCode, true), gettype($cultureCode)), __LINE__);
        }
        if (is_null($cultureCode) || (is_array($cultureCode) && empty($cultureCode))) {
            unset($this->CultureCode);
        } else {
            $this->CultureCode = $cultureCode;
        }

        return $this;
    }

    /**
     * Get CreatedAgentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCreatedAgentName(): ?string
    {
        return $this->CreatedAgentName ?? null;
    }

    /**
     * Set CreatedAgentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $createdAgentName
     *
     * @return GetGRMContentResponse
     */
    public function setCreatedAgentName(?string $createdAgentName = null): self
    {
        // validation for constraint: string
        if (!is_null($createdAgentName) && !is_string($createdAgentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdAgentName, true), gettype($createdAgentName)), __LINE__);
        }
        if (is_null($createdAgentName) || (is_array($createdAgentName) && empty($createdAgentName))) {
            unset($this->CreatedAgentName);
        } else {
            $this->CreatedAgentName = $createdAgentName;
        }

        return $this;
    }

    /**
     * Get ModifiedAgentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getModifiedAgentName(): ?string
    {
        return $this->ModifiedAgentName ?? null;
    }

    /**
     * Set ModifiedAgentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $modifiedAgentName
     *
     * @return GetGRMContentResponse
     */
    public function setModifiedAgentName(?string $modifiedAgentName = null): self
    {
        // validation for constraint: string
        if (!is_null($modifiedAgentName) && !is_string($modifiedAgentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedAgentName, true), gettype($modifiedAgentName)), __LINE__);
        }
        if (is_null($modifiedAgentName) || (is_array($modifiedAgentName) && empty($modifiedAgentName))) {
            unset($this->ModifiedAgentName);
        } else {
            $this->ModifiedAgentName = $modifiedAgentName;
        }

        return $this;
    }

    /**
     * Get MD5checksum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMD5checksum(): ?string
    {
        return $this->MD5checksum ?? null;
    }

    /**
     * Set MD5checksum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $mD5checksum
     *
     * @return GetGRMContentResponse
     */
    public function setMD5checksum(?string $mD5checksum = null): self
    {
        // validation for constraint: string
        if (!is_null($mD5checksum) && !is_string($mD5checksum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mD5checksum, true), gettype($mD5checksum)), __LINE__);
        }
        if (is_null($mD5checksum) || (is_array($mD5checksum) && empty($mD5checksum))) {
            unset($this->MD5checksum);
        } else {
            $this->MD5checksum = $mD5checksum;
        }

        return $this;
    }
}
