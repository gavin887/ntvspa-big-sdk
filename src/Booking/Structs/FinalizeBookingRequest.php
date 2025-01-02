<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FinalizeBookingRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q7:FinalizeBookingRequest | tns:FinalizeBookingRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FinalizeBookingRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The RequestFareLockID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $RequestFareLockID = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The LoyaltyTransactionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LoyaltyTransactionId = null;
    /**
     * The AssetNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AssetNumber = null;
    /**
     * The ApplicationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ApplicationId = null;
    /**
     * The DeviceId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DeviceId = null;
    /**
     * The IdPartner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $IdPartner = null;
    /**
     * The Ip
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Ip = null;
    /**
     * The Imei
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Imei = null;
    /**
     * The HoldDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $HoldDateTime = null;

    /**
     * Constructor method for FinalizeBookingRequest
     *
     * @param string $sourceSystem
     * @param int    $requestFareLockID
     * @param string $signature
     * @param string $loyaltyTransactionId
     * @param string $assetNumber
     * @param string $applicationId
     * @param string $deviceId
     * @param string $idPartner
     * @param string $ip
     * @param string $imei
     * @param string $holdDateTime
     *
     * @uses FinalizeBookingRequest::setSourceSystem()
     * @uses FinalizeBookingRequest::setRequestFareLockID()
     * @uses FinalizeBookingRequest::setSignature()
     * @uses FinalizeBookingRequest::setLoyaltyTransactionId()
     * @uses FinalizeBookingRequest::setAssetNumber()
     * @uses FinalizeBookingRequest::setApplicationId()
     * @uses FinalizeBookingRequest::setDeviceId()
     * @uses FinalizeBookingRequest::setIdPartner()
     * @uses FinalizeBookingRequest::setIp()
     * @uses FinalizeBookingRequest::setImei()
     * @uses FinalizeBookingRequest::setHoldDateTime()
     */
    public function __construct(?string $sourceSystem = null, ?int $requestFareLockID = null, ?string $signature = null, ?string $loyaltyTransactionId = null, ?string $assetNumber = null, ?string $applicationId = null, ?string $deviceId = null, ?string $idPartner = null, ?string $ip = null, ?string $imei = null, ?string $holdDateTime = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setRequestFareLockID($requestFareLockID)
            ->setSignature($signature)
            ->setLoyaltyTransactionId($loyaltyTransactionId)
            ->setAssetNumber($assetNumber)
            ->setApplicationId($applicationId)
            ->setDeviceId($deviceId)
            ->setIdPartner($idPartner)
            ->setIp($ip)
            ->setImei($imei)
            ->setHoldDateTime($holdDateTime);
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
     * @return FinalizeBookingRequest
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
     * Get RequestFareLockID value
     *
     * @return int|null
     */
    public function getRequestFareLockID(): ?int
    {
        return $this->RequestFareLockID;
    }

    /**
     * Set RequestFareLockID value
     *
     * @param int $requestFareLockID
     *
     * @return FinalizeBookingRequest
     */
    public function setRequestFareLockID(?int $requestFareLockID = null): self
    {
        // validation for constraint: int
        if (!is_null($requestFareLockID) && !(is_int($requestFareLockID) || ctype_digit($requestFareLockID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($requestFareLockID, true), gettype($requestFareLockID)), __LINE__);
        }
        $this->RequestFareLockID = $requestFareLockID;

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
     * @return FinalizeBookingRequest
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
     * Get LoyaltyTransactionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLoyaltyTransactionId(): ?string
    {
        return $this->LoyaltyTransactionId ?? null;
    }

    /**
     * Set LoyaltyTransactionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $loyaltyTransactionId
     *
     * @return FinalizeBookingRequest
     */
    public function setLoyaltyTransactionId(?string $loyaltyTransactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($loyaltyTransactionId) && !is_string($loyaltyTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loyaltyTransactionId, true), gettype($loyaltyTransactionId)), __LINE__);
        }
        if (is_null($loyaltyTransactionId) || (is_array($loyaltyTransactionId) && empty($loyaltyTransactionId))) {
            unset($this->LoyaltyTransactionId);
        } else {
            $this->LoyaltyTransactionId = $loyaltyTransactionId;
        }

        return $this;
    }

    /**
     * Get AssetNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAssetNumber(): ?string
    {
        return $this->AssetNumber ?? null;
    }

    /**
     * Set AssetNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $assetNumber
     *
     * @return FinalizeBookingRequest
     */
    public function setAssetNumber(?string $assetNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($assetNumber) && !is_string($assetNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assetNumber, true), gettype($assetNumber)), __LINE__);
        }
        if (is_null($assetNumber) || (is_array($assetNumber) && empty($assetNumber))) {
            unset($this->AssetNumber);
        } else {
            $this->AssetNumber = $assetNumber;
        }

        return $this;
    }

    /**
     * Get ApplicationId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getApplicationId(): ?string
    {
        return $this->ApplicationId ?? null;
    }

    /**
     * Set ApplicationId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $applicationId
     *
     * @return FinalizeBookingRequest
     */
    public function setApplicationId(?string $applicationId = null): self
    {
        // validation for constraint: string
        if (!is_null($applicationId) && !is_string($applicationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationId, true), gettype($applicationId)), __LINE__);
        }
        if (is_null($applicationId) || (is_array($applicationId) && empty($applicationId))) {
            unset($this->ApplicationId);
        } else {
            $this->ApplicationId = $applicationId;
        }

        return $this;
    }

    /**
     * Get DeviceId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDeviceId(): ?string
    {
        return $this->DeviceId ?? null;
    }

    /**
     * Set DeviceId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $deviceId
     *
     * @return FinalizeBookingRequest
     */
    public function setDeviceId(?string $deviceId = null): self
    {
        // validation for constraint: string
        if (!is_null($deviceId) && !is_string($deviceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deviceId, true), gettype($deviceId)), __LINE__);
        }
        if (is_null($deviceId) || (is_array($deviceId) && empty($deviceId))) {
            unset($this->DeviceId);
        } else {
            $this->DeviceId = $deviceId;
        }

        return $this;
    }

    /**
     * Get IdPartner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIdPartner(): ?string
    {
        return $this->IdPartner ?? null;
    }

    /**
     * Set IdPartner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $idPartner
     *
     * @return FinalizeBookingRequest
     */
    public function setIdPartner(?string $idPartner = null): self
    {
        // validation for constraint: string
        if (!is_null($idPartner) && !is_string($idPartner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idPartner, true), gettype($idPartner)), __LINE__);
        }
        if (is_null($idPartner) || (is_array($idPartner) && empty($idPartner))) {
            unset($this->IdPartner);
        } else {
            $this->IdPartner = $idPartner;
        }

        return $this;
    }

    /**
     * Get Ip value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIp(): ?string
    {
        return $this->Ip ?? null;
    }

    /**
     * Set Ip value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $ip
     *
     * @return FinalizeBookingRequest
     */
    public function setIp(?string $ip = null): self
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        if (is_null($ip) || (is_array($ip) && empty($ip))) {
            unset($this->Ip);
        } else {
            $this->Ip = $ip;
        }

        return $this;
    }

    /**
     * Get Imei value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getImei(): ?string
    {
        return $this->Imei ?? null;
    }

    /**
     * Set Imei value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $imei
     *
     * @return FinalizeBookingRequest
     */
    public function setImei(?string $imei = null): self
    {
        // validation for constraint: string
        if (!is_null($imei) && !is_string($imei)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imei, true), gettype($imei)), __LINE__);
        }
        if (is_null($imei) || (is_array($imei) && empty($imei))) {
            unset($this->Imei);
        } else {
            $this->Imei = $imei;
        }

        return $this;
    }

    /**
     * Get HoldDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getHoldDateTime(): ?string
    {
        return $this->HoldDateTime ?? null;
    }

    /**
     * Set HoldDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $holdDateTime
     *
     * @return FinalizeBookingRequest
     */
    public function setHoldDateTime(?string $holdDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($holdDateTime) && !is_string($holdDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holdDateTime, true), gettype($holdDateTime)), __LINE__);
        }
        if (is_null($holdDateTime) || (is_array($holdDateTime) && empty($holdDateTime))) {
            unset($this->HoldDateTime);
        } else {
            $this->HoldDateTime = $holdDateTime;
        }

        return $this;
    }
}
