<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\ProductType;
use Ntvspa\Big\Product\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateProductOrderRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q23:CreateProductOrderRequest | tns:CreateProductOrderRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CreateProductOrderRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The ProductType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ProductType = null;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The HolderID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $HolderID = null;
    /**
     * The BuyerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BuyerID = null;
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
     * The Firstname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Firstname = null;
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
     * The OrderDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OrderDescription = null;
    /**
     * The PromotionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionID = null;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductID = null;
    /**
     * The StartPayPalPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var StartPayPalPayment|null
     */
    protected ?\Ntvspa\Big\Product\Structs\StartPayPalPayment $StartPayPalPayment = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var Payment|null
     */
    protected ?\Ntvspa\Big\Product\Structs\Payment $Payment = null;
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
     * The PartitaIVA
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PartitaIVA = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PhoneNumber = null;
    /**
     * The LegalName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LegalName = null;

    /**
     * Constructor method for CreateProductOrderRequest
     *
     * @param string             $sourceSystem
     * @param string             $productType
     * @param float              $price
     * @param string             $signature
     * @param string             $holderID
     * @param string             $buyerID
     * @param string             $email
     * @param string             $firstname
     * @param string             $lastname
     * @param string             $orderDescription
     * @param string             $promotionID
     * @param string             $productID
     * @param StartPayPalPayment $startPayPalPayment
     * @param Payment            $payment
     * @param string             $applicationId
     * @param string             $deviceId
     * @param string             $ip
     * @param string             $bookingContactPhone
     * @param string             $bookingContactEmailAddress
     * @param string             $partitaIVA
     * @param string             $phoneNumber
     * @param string             $legalName
     *
     * @uses CreateProductOrderRequest::setSourceSystem()
     * @uses CreateProductOrderRequest::setProductType()
     * @uses CreateProductOrderRequest::setPrice()
     * @uses CreateProductOrderRequest::setSignature()
     * @uses CreateProductOrderRequest::setHolderID()
     * @uses CreateProductOrderRequest::setBuyerID()
     * @uses CreateProductOrderRequest::setEmail()
     * @uses CreateProductOrderRequest::setFirstname()
     * @uses CreateProductOrderRequest::setLastname()
     * @uses CreateProductOrderRequest::setOrderDescription()
     * @uses CreateProductOrderRequest::setPromotionID()
     * @uses CreateProductOrderRequest::setProductID()
     * @uses CreateProductOrderRequest::setStartPayPalPayment()
     * @uses CreateProductOrderRequest::setPayment()
     * @uses CreateProductOrderRequest::setApplicationId()
     * @uses CreateProductOrderRequest::setDeviceId()
     * @uses CreateProductOrderRequest::setIp()
     * @uses CreateProductOrderRequest::setBookingContactPhone()
     * @uses CreateProductOrderRequest::setBookingContactEmailAddress()
     * @uses CreateProductOrderRequest::setPartitaIVA()
     * @uses CreateProductOrderRequest::setPhoneNumber()
     * @uses CreateProductOrderRequest::setLegalName()
     */
    public function __construct(?string $sourceSystem = null, ?string $productType = null, ?float $price = null, ?string $signature = null, ?string $holderID = null, ?string $buyerID = null, ?string $email = null, ?string $firstname = null, ?string $lastname = null, ?string $orderDescription = null, ?string $promotionID = null, ?string $productID = null, ?\Ntvspa\Big\Product\Structs\StartPayPalPayment $startPayPalPayment = null, ?\Ntvspa\Big\Product\Structs\Payment $payment = null, ?string $applicationId = null, ?string $deviceId = null, ?string $ip = null, ?string $bookingContactPhone = null, ?string $bookingContactEmailAddress = null, ?string $partitaIVA = null, ?string $phoneNumber = null, ?string $legalName = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setProductType($productType)
            ->setPrice($price)
            ->setSignature($signature)
            ->setHolderID($holderID)
            ->setBuyerID($buyerID)
            ->setEmail($email)
            ->setFirstname($firstname)
            ->setLastname($lastname)
            ->setOrderDescription($orderDescription)
            ->setPromotionID($promotionID)
            ->setProductID($productID)
            ->setStartPayPalPayment($startPayPalPayment)
            ->setPayment($payment)
            ->setApplicationId($applicationId)
            ->setDeviceId($deviceId)
            ->setIp($ip)
            ->setBookingContactPhone($bookingContactPhone)
            ->setBookingContactEmailAddress($bookingContactEmailAddress)
            ->setPartitaIVA($partitaIVA)
            ->setPhoneNumber($phoneNumber)
            ->setLegalName($legalName);
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
     * @return CreateProductOrderRequest
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
     * Get ProductType value
     *
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->ProductType;
    }

    /**
     * Set ProductType value
     *
     * @param string $productType
     *
     * @return CreateProductOrderRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\ProductType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\ProductType::valueIsValid()
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\ProductType::valueIsValid($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\ProductType', is_array($productType) ? implode(', ', $productType) : var_export($productType, true), implode(', ', ProductType::getValidValues())), __LINE__);
        }
        $this->ProductType = $productType;

        return $this;
    }

    /**
     * Get Price value
     *
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->Price;
    }

    /**
     * Set Price value
     *
     * @param float $price
     *
     * @return CreateProductOrderRequest
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->Price = $price;

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
     * @return CreateProductOrderRequest
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
     * Get HolderID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getHolderID(): ?string
    {
        return $this->HolderID ?? null;
    }

    /**
     * Set HolderID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $holderID
     *
     * @return CreateProductOrderRequest
     */
    public function setHolderID(?string $holderID = null): self
    {
        // validation for constraint: string
        if (!is_null($holderID) && !is_string($holderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holderID, true), gettype($holderID)), __LINE__);
        }
        if (is_null($holderID) || (is_array($holderID) && empty($holderID))) {
            unset($this->HolderID);
        } else {
            $this->HolderID = $holderID;
        }

        return $this;
    }

    /**
     * Get BuyerID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBuyerID(): ?string
    {
        return $this->BuyerID ?? null;
    }

    /**
     * Set BuyerID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $buyerID
     *
     * @return CreateProductOrderRequest
     */
    public function setBuyerID(?string $buyerID = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerID) && !is_string($buyerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerID, true), gettype($buyerID)), __LINE__);
        }
        if (is_null($buyerID) || (is_array($buyerID) && empty($buyerID))) {
            unset($this->BuyerID);
        } else {
            $this->BuyerID = $buyerID;
        }

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
     * @return CreateProductOrderRequest
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
     * Get Firstname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->Firstname ?? null;
    }

    /**
     * Set Firstname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $firstname
     *
     * @return CreateProductOrderRequest
     */
    public function setFirstname(?string $firstname = null): self
    {
        // validation for constraint: string
        if (!is_null($firstname) && !is_string($firstname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstname, true), gettype($firstname)), __LINE__);
        }
        if (is_null($firstname) || (is_array($firstname) && empty($firstname))) {
            unset($this->Firstname);
        } else {
            $this->Firstname = $firstname;
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
     * @return CreateProductOrderRequest
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
     * Get OrderDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getOrderDescription(): ?string
    {
        return $this->OrderDescription ?? null;
    }

    /**
     * Set OrderDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $orderDescription
     *
     * @return CreateProductOrderRequest
     */
    public function setOrderDescription(?string $orderDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($orderDescription) && !is_string($orderDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDescription, true), gettype($orderDescription)), __LINE__);
        }
        if (is_null($orderDescription) || (is_array($orderDescription) && empty($orderDescription))) {
            unset($this->OrderDescription);
        } else {
            $this->OrderDescription = $orderDescription;
        }

        return $this;
    }

    /**
     * Get PromotionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionID(): ?string
    {
        return $this->PromotionID ?? null;
    }

    /**
     * Set PromotionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionID
     *
     * @return CreateProductOrderRequest
     */
    public function setPromotionID(?string $promotionID = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionID) && !is_string($promotionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionID, true), gettype($promotionID)), __LINE__);
        }
        if (is_null($promotionID) || (is_array($promotionID) && empty($promotionID))) {
            unset($this->PromotionID);
        } else {
            $this->PromotionID = $promotionID;
        }

        return $this;
    }

    /**
     * Get ProductID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductID(): ?string
    {
        return $this->ProductID ?? null;
    }

    /**
     * Set ProductID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productID
     *
     * @return CreateProductOrderRequest
     */
    public function setProductID(?string $productID = null): self
    {
        // validation for constraint: string
        if (!is_null($productID) && !is_string($productID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productID, true), gettype($productID)), __LINE__);
        }
        if (is_null($productID) || (is_array($productID) && empty($productID))) {
            unset($this->ProductID);
        } else {
            $this->ProductID = $productID;
        }

        return $this;
    }

    /**
     * Get StartPayPalPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return StartPayPalPayment|null
     */
    public function getStartPayPalPayment(): ?\Ntvspa\Big\Product\Structs\StartPayPalPayment
    {
        return $this->StartPayPalPayment ?? null;
    }

    /**
     * Set StartPayPalPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param StartPayPalPayment $startPayPalPayment
     *
     * @return CreateProductOrderRequest
     */
    public function setStartPayPalPayment(?\Ntvspa\Big\Product\Structs\StartPayPalPayment $startPayPalPayment = null): self
    {
        if (is_null($startPayPalPayment) || (is_array($startPayPalPayment) && empty($startPayPalPayment))) {
            unset($this->StartPayPalPayment);
        } else {
            $this->StartPayPalPayment = $startPayPalPayment;
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
     * @return CreateProductOrderRequest
     */
    public function setPayment(?\Ntvspa\Big\Product\Structs\Payment $payment = null): self
    {
        $this->Payment = $payment;

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
     * @return CreateProductOrderRequest
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
     * @return CreateProductOrderRequest
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
     * @return CreateProductOrderRequest
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
     * @return CreateProductOrderRequest
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
     * @return CreateProductOrderRequest
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

    /**
     * Get PartitaIVA value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPartitaIVA(): ?string
    {
        return $this->PartitaIVA ?? null;
    }

    /**
     * Set PartitaIVA value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $partitaIVA
     *
     * @return CreateProductOrderRequest
     */
    public function setPartitaIVA(?string $partitaIVA = null): self
    {
        // validation for constraint: string
        if (!is_null($partitaIVA) && !is_string($partitaIVA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partitaIVA, true), gettype($partitaIVA)), __LINE__);
        }
        if (is_null($partitaIVA) || (is_array($partitaIVA) && empty($partitaIVA))) {
            unset($this->PartitaIVA);
        } else {
            $this->PartitaIVA = $partitaIVA;
        }

        return $this;
    }

    /**
     * Get PhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->PhoneNumber ?? null;
    }

    /**
     * Set PhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $phoneNumber
     *
     * @return CreateProductOrderRequest
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber;
        }

        return $this;
    }

    /**
     * Get LegalName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLegalName(): ?string
    {
        return $this->LegalName ?? null;
    }

    /**
     * Set LegalName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $legalName
     *
     * @return CreateProductOrderRequest
     */
    public function setLegalName(?string $legalName = null): self
    {
        // validation for constraint: string
        if (!is_null($legalName) && !is_string($legalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalName, true), gettype($legalName)), __LINE__);
        }
        if (is_null($legalName) || (is_array($legalName) && empty($legalName))) {
            unset($this->LegalName);
        } else {
            $this->LegalName = $legalName;
        }

        return $this;
    }
}
