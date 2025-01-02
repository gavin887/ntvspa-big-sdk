<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FinalizeOrderRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FinalizeOrderRequest | q1:FinalizeOrderRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FinalizeOrderRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OrderNumber = null;
    /**
     * The Comments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Comments = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var Payment|null
     */
    protected ?\Ntvspa\Big\Product\Structs\Payment $Payment = null;
    /**
     * The CustomerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerId = null;
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
     * The Ip
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Ip = null;
    /**
     * The BookingContactPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BookingContactPhone = null;
    /**
     * The BookingContactEmailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BookingContactEmailAddress = null;

    /**
     * Constructor method for FinalizeOrderRequest
     *
     * @param string  $sourceSystem
     * @param string  $signature
     * @param string  $orderNumber
     * @param string  $comments
     * @param Payment $payment
     * @param string  $customerId
     * @param string  $applicationId
     * @param string  $deviceId
     * @param string  $ip
     * @param string  $bookingContactPhone
     * @param string  $bookingContactEmailAddress
     *
     * @uses FinalizeOrderRequest::setSourceSystem()
     * @uses FinalizeOrderRequest::setSignature()
     * @uses FinalizeOrderRequest::setOrderNumber()
     * @uses FinalizeOrderRequest::setComments()
     * @uses FinalizeOrderRequest::setPayment()
     * @uses FinalizeOrderRequest::setCustomerId()
     * @uses FinalizeOrderRequest::setApplicationId()
     * @uses FinalizeOrderRequest::setDeviceId()
     * @uses FinalizeOrderRequest::setIp()
     * @uses FinalizeOrderRequest::setBookingContactPhone()
     * @uses FinalizeOrderRequest::setBookingContactEmailAddress()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?string $orderNumber = null, ?string $comments = null, ?\Ntvspa\Big\Product\Structs\Payment $payment = null, ?string $customerId = null, ?string $applicationId = null, ?string $deviceId = null, ?string $ip = null, ?string $bookingContactPhone = null, ?string $bookingContactEmailAddress = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setOrderNumber($orderNumber)
            ->setComments($comments)
            ->setPayment($payment)
            ->setCustomerId($customerId)
            ->setApplicationId($applicationId)
            ->setDeviceId($deviceId)
            ->setIp($ip)
            ->setBookingContactPhone($bookingContactPhone)
            ->setBookingContactEmailAddress($bookingContactEmailAddress);
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
     * @return FinalizeOrderRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

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
     * @return FinalizeOrderRequest
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
     * Get OrderNumber value
     *
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return $this->OrderNumber;
    }

    /**
     * Set OrderNumber value
     *
     * @param string $orderNumber
     *
     * @return FinalizeOrderRequest
     */
    public function setOrderNumber(?string $orderNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        $this->OrderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get Comments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->Comments ?? null;
    }

    /**
     * Set Comments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $comments
     *
     * @return FinalizeOrderRequest
     */
    public function setComments(?string $comments = null): self
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        if (is_null($comments) || (is_array($comments) && empty($comments))) {
            unset($this->Comments);
        } else {
            $this->Comments = $comments;
        }

        return $this;
    }

    /**
     * Get Payment value
     *
     * @return Payment|null
     */
    public function getPayment(): ?\Ntvspa\Big\Product\Structs\Payment
    {
        return $this->Payment;
    }

    /**
     * Set Payment value
     *
     * @param Payment $payment
     *
     * @return FinalizeOrderRequest
     */
    public function setPayment(?\Ntvspa\Big\Product\Structs\Payment $payment = null): self
    {
        $this->Payment = $payment;

        return $this;
    }

    /**
     * Get CustomerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->CustomerId ?? null;
    }

    /**
     * Set CustomerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerId
     *
     * @return FinalizeOrderRequest
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        if (is_null($customerId) || (is_array($customerId) && empty($customerId))) {
            unset($this->CustomerId);
        } else {
            $this->CustomerId = $customerId;
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
     * @return FinalizeOrderRequest
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
     * @return FinalizeOrderRequest
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
     * @return FinalizeOrderRequest
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
     * Get BookingContactPhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBookingContactPhone(): ?string
    {
        return $this->BookingContactPhone ?? null;
    }

    /**
     * Set BookingContactPhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $bookingContactPhone
     *
     * @return FinalizeOrderRequest
     */
    public function setBookingContactPhone(?string $bookingContactPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingContactPhone) && !is_string($bookingContactPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingContactPhone, true), gettype($bookingContactPhone)), __LINE__);
        }
        if (is_null($bookingContactPhone) || (is_array($bookingContactPhone) && empty($bookingContactPhone))) {
            unset($this->BookingContactPhone);
        } else {
            $this->BookingContactPhone = $bookingContactPhone;
        }

        return $this;
    }

    /**
     * Get BookingContactEmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBookingContactEmailAddress(): ?string
    {
        return $this->BookingContactEmailAddress ?? null;
    }

    /**
     * Set BookingContactEmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $bookingContactEmailAddress
     *
     * @return FinalizeOrderRequest
     */
    public function setBookingContactEmailAddress(?string $bookingContactEmailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingContactEmailAddress) && !is_string($bookingContactEmailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingContactEmailAddress, true), gettype($bookingContactEmailAddress)), __LINE__);
        }
        if (is_null($bookingContactEmailAddress) || (is_array($bookingContactEmailAddress) && empty($bookingContactEmailAddress))) {
            unset($this->BookingContactEmailAddress);
        } else {
            $this->BookingContactEmailAddress = $bookingContactEmailAddress;
        }

        return $this;
    }
}
