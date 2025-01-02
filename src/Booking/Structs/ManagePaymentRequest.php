<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManagePaymentRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q5:ManagePaymentRequest | tns:ManagePaymentRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ManagePaymentRequest extends AbstractStructBase
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
     * The Payment
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var Payment|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\Payment $Payment = null;
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
     * Constructor method for ManagePaymentRequest
     *
     * @param string  $sourceSystem
     * @param string  $signature
     * @param Payment $payment
     * @param string  $customerId
     * @param string  $applicationId
     * @param string  $deviceId
     * @param string  $ip
     *
     * @uses ManagePaymentRequest::setSourceSystem()
     * @uses ManagePaymentRequest::setSignature()
     * @uses ManagePaymentRequest::setPayment()
     * @uses ManagePaymentRequest::setCustomerId()
     * @uses ManagePaymentRequest::setApplicationId()
     * @uses ManagePaymentRequest::setDeviceId()
     * @uses ManagePaymentRequest::setIp()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Booking\Structs\Payment $payment = null, ?string $customerId = null, ?string $applicationId = null, ?string $deviceId = null, ?string $ip = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setPayment($payment)
            ->setCustomerId($customerId)
            ->setApplicationId($applicationId)
            ->setDeviceId($deviceId)
            ->setIp($ip);
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
     * @return ManagePaymentRequest
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
     * @return ManagePaymentRequest
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
     * Get Payment value
     *
     * @return Payment|null
     */
    public function getPayment(): ?\Ntvspa\Big\Booking\Structs\Payment
    {
        return $this->Payment;
    }

    /**
     * Set Payment value
     *
     * @param Payment $payment
     *
     * @return ManagePaymentRequest
     */
    public function setPayment(?\Ntvspa\Big\Booking\Structs\Payment $payment = null): self
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
     * @return ManagePaymentRequest
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
     * @return ManagePaymentRequest
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
     * @return ManagePaymentRequest
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
     * @return ManagePaymentRequest
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
}
