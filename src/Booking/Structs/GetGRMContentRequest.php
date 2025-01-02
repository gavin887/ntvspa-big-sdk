<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\ContentType;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGRMContentRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q21:GetGRMContentRequest | tns:GetGRMContentRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetGRMContentRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The ContentID
     *
     * @var int|null
     */
    protected ?int $ContentID = null;
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
     * The ActiveOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $ActiveOnly = null;
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $PageSize = null;
    /**
     * The LastID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $LastID = null;
    /**
     * The GetTotalCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $GetTotalCount = null;
    /**
     * The ContentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ContentType = null;
    /**
     * The GetDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $GetDetails = null;
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
     * Constructor method for GetGRMContentRequest
     *
     * @param string $sourceSystem
     * @param int    $contentID
     * @param string $signature
     * @param bool   $activeOnly
     * @param int    $pageSize
     * @param int    $lastID
     * @param bool   $getTotalCount
     * @param string $contentType
     * @param bool   $getDetails
     * @param string $mD5checksum
     *
     * @uses GetGRMContentRequest::setSourceSystem()
     * @uses GetGRMContentRequest::setContentID()
     * @uses GetGRMContentRequest::setSignature()
     * @uses GetGRMContentRequest::setActiveOnly()
     * @uses GetGRMContentRequest::setPageSize()
     * @uses GetGRMContentRequest::setLastID()
     * @uses GetGRMContentRequest::setGetTotalCount()
     * @uses GetGRMContentRequest::setContentType()
     * @uses GetGRMContentRequest::setGetDetails()
     * @uses GetGRMContentRequest::setMD5checksum()
     */
    public function __construct(?string $sourceSystem = null, ?int $contentID = null, ?string $signature = null, ?bool $activeOnly = null, ?int $pageSize = null, ?int $lastID = null, ?bool $getTotalCount = null, ?string $contentType = null, ?bool $getDetails = null, ?string $mD5checksum = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setContentID($contentID)
            ->setSignature($signature)
            ->setActiveOnly($activeOnly)
            ->setPageSize($pageSize)
            ->setLastID($lastID)
            ->setGetTotalCount($getTotalCount)
            ->setContentType($contentType)
            ->setGetDetails($getDetails)
            ->setMD5checksum($mD5checksum);
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
     * @return GetGRMContentRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
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
     * @return GetGRMContentRequest
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
     * @return GetGRMContentRequest
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
     * Get ActiveOnly value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getActiveOnly(): ?bool
    {
        return $this->ActiveOnly ?? null;
    }

    /**
     * Set ActiveOnly value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $activeOnly
     *
     * @return GetGRMContentRequest
     */
    public function setActiveOnly(?bool $activeOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($activeOnly) && !is_bool($activeOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($activeOnly, true), gettype($activeOnly)), __LINE__);
        }
        if (is_null($activeOnly) || (is_array($activeOnly) && empty($activeOnly))) {
            unset($this->ActiveOnly);
        } else {
            $this->ActiveOnly = $activeOnly;
        }

        return $this;
    }

    /**
     * Get PageSize value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->PageSize ?? null;
    }

    /**
     * Set PageSize value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $pageSize
     *
     * @return GetGRMContentRequest
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        if (is_null($pageSize) || (is_array($pageSize) && empty($pageSize))) {
            unset($this->PageSize);
        } else {
            $this->PageSize = $pageSize;
        }

        return $this;
    }

    /**
     * Get LastID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getLastID(): ?int
    {
        return $this->LastID ?? null;
    }

    /**
     * Set LastID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $lastID
     *
     * @return GetGRMContentRequest
     */
    public function setLastID(?int $lastID = null): self
    {
        // validation for constraint: int
        if (!is_null($lastID) && !(is_int($lastID) || ctype_digit($lastID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastID, true), gettype($lastID)), __LINE__);
        }
        if (is_null($lastID) || (is_array($lastID) && empty($lastID))) {
            unset($this->LastID);
        } else {
            $this->LastID = $lastID;
        }

        return $this;
    }

    /**
     * Get GetTotalCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getGetTotalCount(): ?bool
    {
        return $this->GetTotalCount ?? null;
    }

    /**
     * Set GetTotalCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $getTotalCount
     *
     * @return GetGRMContentRequest
     */
    public function setGetTotalCount(?bool $getTotalCount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($getTotalCount) && !is_bool($getTotalCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getTotalCount, true), gettype($getTotalCount)), __LINE__);
        }
        if (is_null($getTotalCount) || (is_array($getTotalCount) && empty($getTotalCount))) {
            unset($this->GetTotalCount);
        } else {
            $this->GetTotalCount = $getTotalCount;
        }

        return $this;
    }

    /**
     * Get ContentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->ContentType ?? null;
    }

    /**
     * Set ContentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $contentType
     *
     * @return GetGRMContentRequest
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
        if (is_null($contentType) || (is_array($contentType) && empty($contentType))) {
            unset($this->ContentType);
        } else {
            $this->ContentType = $contentType;
        }

        return $this;
    }

    /**
     * Get GetDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getGetDetails(): ?bool
    {
        return $this->GetDetails ?? null;
    }

    /**
     * Set GetDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $getDetails
     *
     * @return GetGRMContentRequest
     */
    public function setGetDetails(?bool $getDetails = null): self
    {
        // validation for constraint: boolean
        if (!is_null($getDetails) && !is_bool($getDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getDetails, true), gettype($getDetails)), __LINE__);
        }
        if (is_null($getDetails) || (is_array($getDetails) && empty($getDetails))) {
            unset($this->GetDetails);
        } else {
            $this->GetDetails = $getDetails;
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
     * @return GetGRMContentRequest
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
