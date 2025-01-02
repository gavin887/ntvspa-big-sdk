<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindBookingInternalRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q49:FindBookingInternalRequest | tns:FindBookingInternalRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FindBookingInternalRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $PageSize = null;
    /**
     * The LastId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $LastId = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The Lastname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Lastname = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FirstName = null;

    /**
     * Constructor method for FindBookingInternalRequest
     *
     * @param string $sourceSystem
     * @param int    $pageSize
     * @param int    $lastId
     * @param string $signature
     * @param string $email
     * @param string $lastname
     * @param string $firstName
     *
     * @uses FindBookingInternalRequest::setSourceSystem()
     * @uses FindBookingInternalRequest::setPageSize()
     * @uses FindBookingInternalRequest::setLastId()
     * @uses FindBookingInternalRequest::setSignature()
     * @uses FindBookingInternalRequest::setEmail()
     * @uses FindBookingInternalRequest::setLastname()
     * @uses FindBookingInternalRequest::setFirstName()
     */
    public function __construct(?string $sourceSystem = null, ?int $pageSize = null, ?int $lastId = null, ?string $signature = null, ?string $email = null, ?string $lastname = null, ?string $firstName = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setPageSize($pageSize)
            ->setLastId($lastId)
            ->setSignature($signature)
            ->setEmail($email)
            ->setLastname($lastname)
            ->setFirstName($firstName);
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
     * @return FindBookingInternalRequest
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
     * Get PageSize value
     *
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->PageSize;
    }

    /**
     * Set PageSize value
     *
     * @param int $pageSize
     *
     * @return FindBookingInternalRequest
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->PageSize = $pageSize;

        return $this;
    }

    /**
     * Get LastId value
     *
     * @return int|null
     */
    public function getLastId(): ?int
    {
        return $this->LastId;
    }

    /**
     * Set LastId value
     *
     * @param int $lastId
     *
     * @return FindBookingInternalRequest
     */
    public function setLastId(?int $lastId = null): self
    {
        // validation for constraint: int
        if (!is_null($lastId) && !(is_int($lastId) || ctype_digit($lastId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastId, true), gettype($lastId)), __LINE__);
        }
        $this->LastId = $lastId;

        return $this;
    }

    /**
     * Get Signature value
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature;
    }

    /**
     * Set Signature value
     *
     * @param string $signature
     *
     * @return FindBookingInternalRequest
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;

        return $this;
    }

    /**
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $email
     *
     * @return FindBookingInternalRequest
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }

        return $this;
    }

    /**
     * Get Lastname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->Lastname ?? null;
    }

    /**
     * Set Lastname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $lastname
     *
     * @return FindBookingInternalRequest
     */
    public function setLastname(?string $lastname = null): self
    {
        // validation for constraint: string
        if (!is_null($lastname) && !is_string($lastname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastname, true), gettype($lastname)), __LINE__);
        }
        if (is_null($lastname) || (is_array($lastname) && empty($lastname))) {
            unset($this->Lastname);
        } else {
            $this->Lastname = $lastname;
        }

        return $this;
    }

    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName ?? null;
    }

    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $firstName
     *
     * @return FindBookingInternalRequest
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }

        return $this;
    }
}
