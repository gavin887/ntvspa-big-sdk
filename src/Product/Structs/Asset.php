<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\ProductType;
use Product\Arrays\ArrayOfAsset;
use Product\Arrays\ArrayOfBlackDays;
use Product\Arrays\ArrayOfBooking;
use Product\Arrays\ArrayOfdateTime;
use Product\Arrays\ArrayOfProductAttribute;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Asset Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Asset
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Asset extends AbstractStructBase
{
    /**
     * The PurchaseDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $PurchaseDate = null;
    /**
     * The EffectiveStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $EffectiveStartDate = null;
    /**
     * The EffectiveToDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $EffectiveToDate = null;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The EffectiveEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $EffectiveEndDate = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The StartValidityDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $StartValidityDate = null;
    /**
     * The EndValidityDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $EndValidityDate = null;
    /**
     * The CreationValidityDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $CreationValidityDate = null;
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
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Order|null
     */
    protected ?\Ntvspa\Big\Product\Structs\Order $Order = null;
    /**
     * The Assets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfAsset|null
     */
    protected ?ArrayOfAsset $Assets = null;
    /**
     * The Bookings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfBooking|null
     */
    protected ?ArrayOfBooking $Bookings = null;
    /**
     * The ValidDates
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfdateTime|null
     */
    protected ?ArrayOfdateTime $ValidDates = null;
    /**
     * The CustomerHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CustomerHolder|null
     */
    protected ?\Ntvspa\Big\Product\Structs\CustomerHolder $CustomerHolder = null;
    /**
     * The AssetID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AssetID = null;
    /**
     * The CustomerBuyerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerBuyerName = null;
    /**
     * The PartnerBuyerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PartnerBuyerName = null;
    /**
     * The CustomerBuyerSurname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerBuyerSurname = null;
    /**
     * The CustomerBuyerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerBuyerID = null;
    /**
     * The PartnerBuyerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PartnerBuyerID = null;
    /**
     * The CustomerHolderName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerHolderName = null;
    /**
     * The PartnerHolderName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PartnerHolderName = null;
    /**
     * The CustomerHolderSurname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerHolderSurname = null;
    /**
     * The CustomerHolderID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerHolderID = null;
    /**
     * The PartnerHolderID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PartnerHolderID = null;
    /**
     * The EmailHolderID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $EmailHolderID = null;
    /**
     * The ProductReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductReference = null;
    /**
     * The ProductType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductType = null;
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductName = null;
    /**
     * The PromotionReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionReference = null;
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
     * The OrderID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OrderID = null;
    /**
     * The PromotionReferenceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionReferenceName = null;
    /**
     * The DisabledDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DisabledDate = null;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Note = null;
    /**
     * The ProductAttributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute|null
     */
    protected ?ArrayOfProductAttribute $ProductAttributes = null;
    /**
     * The BlackDays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfBlackDays|null
     */
    protected ?ArrayOfBlackDays $BlackDays = null;
    /**
     * The Booking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfBooking|null
     */
    protected ?ArrayOfBooking $Booking = null;

    /**
     * Constructor method for Asset
     *
     * @param string                                             $purchaseDate
     * @param string                                             $effectiveStartDate
     * @param string                                             $effectiveToDate
     * @param float                                              $price
     * @param string                                             $effectiveEndDate
     * @param string                                             $type
     * @param string                                             $startValidityDate
     * @param string                                             $endValidityDate
     * @param string                                             $creationValidityDate
     * @param string                                             $assetNumber
     * @param string                                             $status
     * @param Order                                              $order
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfAsset            $assets
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfBooking          $bookings
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfdateTime         $validDates
     * @param CustomerHolder                                     $customerHolder
     * @param string                                             $assetID
     * @param string                                             $customerBuyerName
     * @param string                                             $partnerBuyerName
     * @param string                                             $customerBuyerSurname
     * @param string                                             $customerBuyerID
     * @param string                                             $partnerBuyerID
     * @param string                                             $customerHolderName
     * @param string                                             $partnerHolderName
     * @param string                                             $customerHolderSurname
     * @param string                                             $customerHolderID
     * @param string                                             $partnerHolderID
     * @param string                                             $emailHolderID
     * @param string                                             $productReference
     * @param string                                             $productType
     * @param string                                             $productName
     * @param string                                             $promotionReference
     * @param string                                             $description
     * @param string                                             $orderID
     * @param string                                             $promotionReferenceName
     * @param string                                             $disabledDate
     * @param string                                             $note
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute $productAttributes
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfBlackDays        $blackDays
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfBooking          $booking
     *
     * @uses Asset::setPurchaseDate()
     * @uses Asset::setEffectiveStartDate()
     * @uses Asset::setEffectiveToDate()
     * @uses Asset::setPrice()
     * @uses Asset::setEffectiveEndDate()
     * @uses Asset::setType()
     * @uses Asset::setStartValidityDate()
     * @uses Asset::setEndValidityDate()
     * @uses Asset::setCreationValidityDate()
     * @uses Asset::setAssetNumber()
     * @uses Asset::setStatus()
     * @uses Asset::setOrder()
     * @uses Asset::setAssets()
     * @uses Asset::setBookings()
     * @uses Asset::setValidDates()
     * @uses Asset::setCustomerHolder()
     * @uses Asset::setAssetID()
     * @uses Asset::setCustomerBuyerName()
     * @uses Asset::setPartnerBuyerName()
     * @uses Asset::setCustomerBuyerSurname()
     * @uses Asset::setCustomerBuyerID()
     * @uses Asset::setPartnerBuyerID()
     * @uses Asset::setCustomerHolderName()
     * @uses Asset::setPartnerHolderName()
     * @uses Asset::setCustomerHolderSurname()
     * @uses Asset::setCustomerHolderID()
     * @uses Asset::setPartnerHolderID()
     * @uses Asset::setEmailHolderID()
     * @uses Asset::setProductReference()
     * @uses Asset::setProductType()
     * @uses Asset::setProductName()
     * @uses Asset::setPromotionReference()
     * @uses Asset::setDescription()
     * @uses Asset::setOrderID()
     * @uses Asset::setPromotionReferenceName()
     * @uses Asset::setDisabledDate()
     * @uses Asset::setNote()
     * @uses Asset::setProductAttributes()
     * @uses Asset::setBlackDays()
     * @uses Asset::setBooking()
     */
    public function __construct(?string $purchaseDate = null, ?string $effectiveStartDate = null, ?string $effectiveToDate = null, ?float $price = null, ?string $effectiveEndDate = null, ?string $type = null, ?string $startValidityDate = null, ?string $endValidityDate = null, ?string $creationValidityDate = null, ?string $assetNumber = null, ?string $status = null, ?\Ntvspa\Big\Product\Structs\Order $order = null, ?ArrayOfAsset $assets = null, ?ArrayOfBooking $bookings = null, ?ArrayOfdateTime $validDates = null, ?\Ntvspa\Big\Product\Structs\CustomerHolder $customerHolder = null, ?string $assetID = null, ?string $customerBuyerName = null, ?string $partnerBuyerName = null, ?string $customerBuyerSurname = null, ?string $customerBuyerID = null, ?string $partnerBuyerID = null, ?string $customerHolderName = null, ?string $partnerHolderName = null, ?string $customerHolderSurname = null, ?string $customerHolderID = null, ?string $partnerHolderID = null, ?string $emailHolderID = null, ?string $productReference = null, ?string $productType = null, ?string $productName = null, ?string $promotionReference = null, ?string $description = null, ?string $orderID = null, ?string $promotionReferenceName = null, ?string $disabledDate = null, ?string $note = null, ?ArrayOfProductAttribute $productAttributes = null, ?ArrayOfBlackDays $blackDays = null, ?ArrayOfBooking $booking = null)
    {
        $this
            ->setPurchaseDate($purchaseDate)
            ->setEffectiveStartDate($effectiveStartDate)
            ->setEffectiveToDate($effectiveToDate)
            ->setPrice($price)
            ->setEffectiveEndDate($effectiveEndDate)
            ->setType($type)
            ->setStartValidityDate($startValidityDate)
            ->setEndValidityDate($endValidityDate)
            ->setCreationValidityDate($creationValidityDate)
            ->setAssetNumber($assetNumber)
            ->setStatus($status)
            ->setOrder($order)
            ->setAssets($assets)
            ->setBookings($bookings)
            ->setValidDates($validDates)
            ->setCustomerHolder($customerHolder)
            ->setAssetID($assetID)
            ->setCustomerBuyerName($customerBuyerName)
            ->setPartnerBuyerName($partnerBuyerName)
            ->setCustomerBuyerSurname($customerBuyerSurname)
            ->setCustomerBuyerID($customerBuyerID)
            ->setPartnerBuyerID($partnerBuyerID)
            ->setCustomerHolderName($customerHolderName)
            ->setPartnerHolderName($partnerHolderName)
            ->setCustomerHolderSurname($customerHolderSurname)
            ->setCustomerHolderID($customerHolderID)
            ->setPartnerHolderID($partnerHolderID)
            ->setEmailHolderID($emailHolderID)
            ->setProductReference($productReference)
            ->setProductType($productType)
            ->setProductName($productName)
            ->setPromotionReference($promotionReference)
            ->setDescription($description)
            ->setOrderID($orderID)
            ->setPromotionReferenceName($promotionReferenceName)
            ->setDisabledDate($disabledDate)
            ->setNote($note)
            ->setProductAttributes($productAttributes)
            ->setBlackDays($blackDays)
            ->setBooking($booking);
    }

    /**
     * Get PurchaseDate value
     *
     * @return string|null
     */
    public function getPurchaseDate(): ?string
    {
        return $this->PurchaseDate;
    }

    /**
     * Set PurchaseDate value
     *
     * @param string $purchaseDate
     *
     * @return Asset
     */
    public function setPurchaseDate(?string $purchaseDate = null): self
    {
        // validation for constraint: string
        if (!is_null($purchaseDate) && !is_string($purchaseDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purchaseDate, true), gettype($purchaseDate)), __LINE__);
        }
        $this->PurchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Get EffectiveStartDate value
     *
     * @return string|null
     */
    public function getEffectiveStartDate(): ?string
    {
        return $this->EffectiveStartDate;
    }

    /**
     * Set EffectiveStartDate value
     *
     * @param string $effectiveStartDate
     *
     * @return Asset
     */
    public function setEffectiveStartDate(?string $effectiveStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($effectiveStartDate) && !is_string($effectiveStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveStartDate, true), gettype($effectiveStartDate)), __LINE__);
        }
        $this->EffectiveStartDate = $effectiveStartDate;

        return $this;
    }

    /**
     * Get EffectiveToDate value
     *
     * @return string|null
     */
    public function getEffectiveToDate(): ?string
    {
        return $this->EffectiveToDate;
    }

    /**
     * Set EffectiveToDate value
     *
     * @param string $effectiveToDate
     *
     * @return Asset
     */
    public function setEffectiveToDate(?string $effectiveToDate = null): self
    {
        // validation for constraint: string
        if (!is_null($effectiveToDate) && !is_string($effectiveToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveToDate, true), gettype($effectiveToDate)), __LINE__);
        }
        $this->EffectiveToDate = $effectiveToDate;

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
     * @return Asset
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
     * Get EffectiveEndDate value
     *
     * @return string|null
     */
    public function getEffectiveEndDate(): ?string
    {
        return $this->EffectiveEndDate;
    }

    /**
     * Set EffectiveEndDate value
     *
     * @param string $effectiveEndDate
     *
     * @return Asset
     */
    public function setEffectiveEndDate(?string $effectiveEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($effectiveEndDate) && !is_string($effectiveEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveEndDate, true), gettype($effectiveEndDate)), __LINE__);
        }
        $this->EffectiveEndDate = $effectiveEndDate;

        return $this;
    }

    /**
     * Get Type value
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * Set Type value
     *
     * @param string $type
     *
     * @return Asset
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\ProductType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\ProductType::valueIsValid()
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\ProductType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\ProductType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', ProductType::getValidValues())), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get StartValidityDate value
     *
     * @return string|null
     */
    public function getStartValidityDate(): ?string
    {
        return $this->StartValidityDate;
    }

    /**
     * Set StartValidityDate value
     *
     * @param string $startValidityDate
     *
     * @return Asset
     */
    public function setStartValidityDate(?string $startValidityDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startValidityDate) && !is_string($startValidityDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startValidityDate, true), gettype($startValidityDate)), __LINE__);
        }
        $this->StartValidityDate = $startValidityDate;

        return $this;
    }

    /**
     * Get EndValidityDate value
     *
     * @return string|null
     */
    public function getEndValidityDate(): ?string
    {
        return $this->EndValidityDate;
    }

    /**
     * Set EndValidityDate value
     *
     * @param string $endValidityDate
     *
     * @return Asset
     */
    public function setEndValidityDate(?string $endValidityDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endValidityDate) && !is_string($endValidityDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endValidityDate, true), gettype($endValidityDate)), __LINE__);
        }
        $this->EndValidityDate = $endValidityDate;

        return $this;
    }

    /**
     * Get CreationValidityDate value
     *
     * @return string|null
     */
    public function getCreationValidityDate(): ?string
    {
        return $this->CreationValidityDate;
    }

    /**
     * Set CreationValidityDate value
     *
     * @param string $creationValidityDate
     *
     * @return Asset
     */
    public function setCreationValidityDate(?string $creationValidityDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationValidityDate) && !is_string($creationValidityDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationValidityDate, true), gettype($creationValidityDate)), __LINE__);
        }
        $this->CreationValidityDate = $creationValidityDate;

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
     * @return Asset
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
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $status
     *
     * @return Asset
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }

        return $this;
    }

    /**
     * Get Order value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Order|null
     */
    public function getOrder(): ?\Ntvspa\Big\Product\Structs\Order
    {
        return $this->Order ?? null;
    }

    /**
     * Set Order value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Order $order
     *
     * @return Asset
     */
    public function setOrder(?\Ntvspa\Big\Product\Structs\Order $order = null): self
    {
        if (is_null($order) || (is_array($order) && empty($order))) {
            unset($this->Order);
        } else {
            $this->Order = $order;
        }

        return $this;
    }

    /**
     * Get Assets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfAsset|null
     */
    public function getAssets(): ?ArrayOfAsset
    {
        return $this->Assets ?? null;
    }

    /**
     * Set Assets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfAsset $assets
     *
     * @return Asset
     */
    public function setAssets(?ArrayOfAsset $assets = null): self
    {
        if (is_null($assets) || (is_array($assets) && empty($assets))) {
            unset($this->Assets);
        } else {
            $this->Assets = $assets;
        }

        return $this;
    }

    /**
     * Get Bookings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfBooking|null
     */
    public function getBookings(): ?ArrayOfBooking
    {
        return $this->Bookings ?? null;
    }

    /**
     * Set Bookings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfBooking $bookings
     *
     * @return Asset
     */
    public function setBookings(?ArrayOfBooking $bookings = null): self
    {
        if (is_null($bookings) || (is_array($bookings) && empty($bookings))) {
            unset($this->Bookings);
        } else {
            $this->Bookings = $bookings;
        }

        return $this;
    }

    /**
     * Get ValidDates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfdateTime|null
     */
    public function getValidDates(): ?ArrayOfdateTime
    {
        return $this->ValidDates ?? null;
    }

    /**
     * Set ValidDates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfdateTime $validDates
     *
     * @return Asset
     */
    public function setValidDates(?ArrayOfdateTime $validDates = null): self
    {
        if (is_null($validDates) || (is_array($validDates) && empty($validDates))) {
            unset($this->ValidDates);
        } else {
            $this->ValidDates = $validDates;
        }

        return $this;
    }

    /**
     * Get CustomerHolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CustomerHolder|null
     */
    public function getCustomerHolder(): ?\Ntvspa\Big\Product\Structs\CustomerHolder
    {
        return $this->CustomerHolder ?? null;
    }

    /**
     * Set CustomerHolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CustomerHolder $customerHolder
     *
     * @return Asset
     */
    public function setCustomerHolder(?\Ntvspa\Big\Product\Structs\CustomerHolder $customerHolder = null): self
    {
        if (is_null($customerHolder) || (is_array($customerHolder) && empty($customerHolder))) {
            unset($this->CustomerHolder);
        } else {
            $this->CustomerHolder = $customerHolder;
        }

        return $this;
    }

    /**
     * Get AssetID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAssetID(): ?string
    {
        return $this->AssetID ?? null;
    }

    /**
     * Set AssetID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $assetID
     *
     * @return Asset
     */
    public function setAssetID(?string $assetID = null): self
    {
        // validation for constraint: string
        if (!is_null($assetID) && !is_string($assetID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assetID, true), gettype($assetID)), __LINE__);
        }
        if (is_null($assetID) || (is_array($assetID) && empty($assetID))) {
            unset($this->AssetID);
        } else {
            $this->AssetID = $assetID;
        }

        return $this;
    }

    /**
     * Get CustomerBuyerName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerBuyerName(): ?string
    {
        return $this->CustomerBuyerName ?? null;
    }

    /**
     * Set CustomerBuyerName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerBuyerName
     *
     * @return Asset
     */
    public function setCustomerBuyerName(?string $customerBuyerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerBuyerName) && !is_string($customerBuyerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerBuyerName, true), gettype($customerBuyerName)), __LINE__);
        }
        if (is_null($customerBuyerName) || (is_array($customerBuyerName) && empty($customerBuyerName))) {
            unset($this->CustomerBuyerName);
        } else {
            $this->CustomerBuyerName = $customerBuyerName;
        }

        return $this;
    }

    /**
     * Get PartnerBuyerName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPartnerBuyerName(): ?string
    {
        return $this->PartnerBuyerName ?? null;
    }

    /**
     * Set PartnerBuyerName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $partnerBuyerName
     *
     * @return Asset
     */
    public function setPartnerBuyerName(?string $partnerBuyerName = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerBuyerName) && !is_string($partnerBuyerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerBuyerName, true), gettype($partnerBuyerName)), __LINE__);
        }
        if (is_null($partnerBuyerName) || (is_array($partnerBuyerName) && empty($partnerBuyerName))) {
            unset($this->PartnerBuyerName);
        } else {
            $this->PartnerBuyerName = $partnerBuyerName;
        }

        return $this;
    }

    /**
     * Get CustomerBuyerSurname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerBuyerSurname(): ?string
    {
        return $this->CustomerBuyerSurname ?? null;
    }

    /**
     * Set CustomerBuyerSurname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerBuyerSurname
     *
     * @return Asset
     */
    public function setCustomerBuyerSurname(?string $customerBuyerSurname = null): self
    {
        // validation for constraint: string
        if (!is_null($customerBuyerSurname) && !is_string($customerBuyerSurname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerBuyerSurname, true), gettype($customerBuyerSurname)), __LINE__);
        }
        if (is_null($customerBuyerSurname) || (is_array($customerBuyerSurname) && empty($customerBuyerSurname))) {
            unset($this->CustomerBuyerSurname);
        } else {
            $this->CustomerBuyerSurname = $customerBuyerSurname;
        }

        return $this;
    }

    /**
     * Get CustomerBuyerID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerBuyerID(): ?string
    {
        return $this->CustomerBuyerID ?? null;
    }

    /**
     * Set CustomerBuyerID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerBuyerID
     *
     * @return Asset
     */
    public function setCustomerBuyerID(?string $customerBuyerID = null): self
    {
        // validation for constraint: string
        if (!is_null($customerBuyerID) && !is_string($customerBuyerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerBuyerID, true), gettype($customerBuyerID)), __LINE__);
        }
        if (is_null($customerBuyerID) || (is_array($customerBuyerID) && empty($customerBuyerID))) {
            unset($this->CustomerBuyerID);
        } else {
            $this->CustomerBuyerID = $customerBuyerID;
        }

        return $this;
    }

    /**
     * Get PartnerBuyerID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPartnerBuyerID(): ?string
    {
        return $this->PartnerBuyerID ?? null;
    }

    /**
     * Set PartnerBuyerID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $partnerBuyerID
     *
     * @return Asset
     */
    public function setPartnerBuyerID(?string $partnerBuyerID = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerBuyerID) && !is_string($partnerBuyerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerBuyerID, true), gettype($partnerBuyerID)), __LINE__);
        }
        if (is_null($partnerBuyerID) || (is_array($partnerBuyerID) && empty($partnerBuyerID))) {
            unset($this->PartnerBuyerID);
        } else {
            $this->PartnerBuyerID = $partnerBuyerID;
        }

        return $this;
    }

    /**
     * Get CustomerHolderName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerHolderName(): ?string
    {
        return $this->CustomerHolderName ?? null;
    }

    /**
     * Set CustomerHolderName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerHolderName
     *
     * @return Asset
     */
    public function setCustomerHolderName(?string $customerHolderName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerHolderName) && !is_string($customerHolderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerHolderName, true), gettype($customerHolderName)), __LINE__);
        }
        if (is_null($customerHolderName) || (is_array($customerHolderName) && empty($customerHolderName))) {
            unset($this->CustomerHolderName);
        } else {
            $this->CustomerHolderName = $customerHolderName;
        }

        return $this;
    }

    /**
     * Get PartnerHolderName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPartnerHolderName(): ?string
    {
        return $this->PartnerHolderName ?? null;
    }

    /**
     * Set PartnerHolderName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $partnerHolderName
     *
     * @return Asset
     */
    public function setPartnerHolderName(?string $partnerHolderName = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerHolderName) && !is_string($partnerHolderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerHolderName, true), gettype($partnerHolderName)), __LINE__);
        }
        if (is_null($partnerHolderName) || (is_array($partnerHolderName) && empty($partnerHolderName))) {
            unset($this->PartnerHolderName);
        } else {
            $this->PartnerHolderName = $partnerHolderName;
        }

        return $this;
    }

    /**
     * Get CustomerHolderSurname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerHolderSurname(): ?string
    {
        return $this->CustomerHolderSurname ?? null;
    }

    /**
     * Set CustomerHolderSurname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerHolderSurname
     *
     * @return Asset
     */
    public function setCustomerHolderSurname(?string $customerHolderSurname = null): self
    {
        // validation for constraint: string
        if (!is_null($customerHolderSurname) && !is_string($customerHolderSurname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerHolderSurname, true), gettype($customerHolderSurname)), __LINE__);
        }
        if (is_null($customerHolderSurname) || (is_array($customerHolderSurname) && empty($customerHolderSurname))) {
            unset($this->CustomerHolderSurname);
        } else {
            $this->CustomerHolderSurname = $customerHolderSurname;
        }

        return $this;
    }

    /**
     * Get CustomerHolderID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerHolderID(): ?string
    {
        return $this->CustomerHolderID ?? null;
    }

    /**
     * Set CustomerHolderID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerHolderID
     *
     * @return Asset
     */
    public function setCustomerHolderID(?string $customerHolderID = null): self
    {
        // validation for constraint: string
        if (!is_null($customerHolderID) && !is_string($customerHolderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerHolderID, true), gettype($customerHolderID)), __LINE__);
        }
        if (is_null($customerHolderID) || (is_array($customerHolderID) && empty($customerHolderID))) {
            unset($this->CustomerHolderID);
        } else {
            $this->CustomerHolderID = $customerHolderID;
        }

        return $this;
    }

    /**
     * Get PartnerHolderID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPartnerHolderID(): ?string
    {
        return $this->PartnerHolderID ?? null;
    }

    /**
     * Set PartnerHolderID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $partnerHolderID
     *
     * @return Asset
     */
    public function setPartnerHolderID(?string $partnerHolderID = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerHolderID) && !is_string($partnerHolderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerHolderID, true), gettype($partnerHolderID)), __LINE__);
        }
        if (is_null($partnerHolderID) || (is_array($partnerHolderID) && empty($partnerHolderID))) {
            unset($this->PartnerHolderID);
        } else {
            $this->PartnerHolderID = $partnerHolderID;
        }

        return $this;
    }

    /**
     * Get EmailHolderID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmailHolderID(): ?string
    {
        return $this->EmailHolderID ?? null;
    }

    /**
     * Set EmailHolderID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $emailHolderID
     *
     * @return Asset
     */
    public function setEmailHolderID(?string $emailHolderID = null): self
    {
        // validation for constraint: string
        if (!is_null($emailHolderID) && !is_string($emailHolderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailHolderID, true), gettype($emailHolderID)), __LINE__);
        }
        if (is_null($emailHolderID) || (is_array($emailHolderID) && empty($emailHolderID))) {
            unset($this->EmailHolderID);
        } else {
            $this->EmailHolderID = $emailHolderID;
        }

        return $this;
    }

    /**
     * Get ProductReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductReference(): ?string
    {
        return $this->ProductReference ?? null;
    }

    /**
     * Set ProductReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productReference
     *
     * @return Asset
     */
    public function setProductReference(?string $productReference = null): self
    {
        // validation for constraint: string
        if (!is_null($productReference) && !is_string($productReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productReference, true), gettype($productReference)), __LINE__);
        }
        if (is_null($productReference) || (is_array($productReference) && empty($productReference))) {
            unset($this->ProductReference);
        } else {
            $this->ProductReference = $productReference;
        }

        return $this;
    }

    /**
     * Get ProductType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->ProductType ?? null;
    }

    /**
     * Set ProductType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productType
     *
     * @return Asset
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        if (is_null($productType) || (is_array($productType) && empty($productType))) {
            unset($this->ProductType);
        } else {
            $this->ProductType = $productType;
        }

        return $this;
    }

    /**
     * Get ProductName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->ProductName ?? null;
    }

    /**
     * Set ProductName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productName
     *
     * @return Asset
     */
    public function setProductName(?string $productName = null): self
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productName, true), gettype($productName)), __LINE__);
        }
        if (is_null($productName) || (is_array($productName) && empty($productName))) {
            unset($this->ProductName);
        } else {
            $this->ProductName = $productName;
        }

        return $this;
    }

    /**
     * Get PromotionReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionReference(): ?string
    {
        return $this->PromotionReference ?? null;
    }

    /**
     * Set PromotionReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionReference
     *
     * @return Asset
     */
    public function setPromotionReference(?string $promotionReference = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionReference) && !is_string($promotionReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionReference, true), gettype($promotionReference)), __LINE__);
        }
        if (is_null($promotionReference) || (is_array($promotionReference) && empty($promotionReference))) {
            unset($this->PromotionReference);
        } else {
            $this->PromotionReference = $promotionReference;
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
     * @return Asset
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
     * Get OrderID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getOrderID(): ?string
    {
        return $this->OrderID ?? null;
    }

    /**
     * Set OrderID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $orderID
     *
     * @return Asset
     */
    public function setOrderID(?string $orderID = null): self
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        if (is_null($orderID) || (is_array($orderID) && empty($orderID))) {
            unset($this->OrderID);
        } else {
            $this->OrderID = $orderID;
        }

        return $this;
    }

    /**
     * Get PromotionReferenceName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionReferenceName(): ?string
    {
        return $this->PromotionReferenceName ?? null;
    }

    /**
     * Set PromotionReferenceName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionReferenceName
     *
     * @return Asset
     */
    public function setPromotionReferenceName(?string $promotionReferenceName = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionReferenceName) && !is_string($promotionReferenceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionReferenceName, true), gettype($promotionReferenceName)), __LINE__);
        }
        if (is_null($promotionReferenceName) || (is_array($promotionReferenceName) && empty($promotionReferenceName))) {
            unset($this->PromotionReferenceName);
        } else {
            $this->PromotionReferenceName = $promotionReferenceName;
        }

        return $this;
    }

    /**
     * Get DisabledDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDisabledDate(): ?string
    {
        return $this->DisabledDate ?? null;
    }

    /**
     * Set DisabledDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $disabledDate
     *
     * @return Asset
     */
    public function setDisabledDate(?string $disabledDate = null): self
    {
        // validation for constraint: string
        if (!is_null($disabledDate) && !is_string($disabledDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disabledDate, true), gettype($disabledDate)), __LINE__);
        }
        if (is_null($disabledDate) || (is_array($disabledDate) && empty($disabledDate))) {
            unset($this->DisabledDate);
        } else {
            $this->DisabledDate = $disabledDate;
        }

        return $this;
    }

    /**
     * Get Note value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->Note ?? null;
    }

    /**
     * Set Note value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $note
     *
     * @return Asset
     */
    public function setNote(?string $note = null): self
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        if (is_null($note) || (is_array($note) && empty($note))) {
            unset($this->Note);
        } else {
            $this->Note = $note;
        }

        return $this;
    }

    /**
     * Get ProductAttributes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute|null
     */
    public function getProductAttributes(): ?ArrayOfProductAttribute
    {
        return $this->ProductAttributes ?? null;
    }

    /**
     * Set ProductAttributes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProductAttribute $productAttributes
     *
     * @return Asset
     */
    public function setProductAttributes(?ArrayOfProductAttribute $productAttributes = null): self
    {
        if (is_null($productAttributes) || (is_array($productAttributes) && empty($productAttributes))) {
            unset($this->ProductAttributes);
        } else {
            $this->ProductAttributes = $productAttributes;
        }

        return $this;
    }

    /**
     * Get BlackDays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfBlackDays|null
     */
    public function getBlackDays(): ?ArrayOfBlackDays
    {
        return $this->BlackDays ?? null;
    }

    /**
     * Set BlackDays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfBlackDays $blackDays
     *
     * @return Asset
     */
    public function setBlackDays(?ArrayOfBlackDays $blackDays = null): self
    {
        if (is_null($blackDays) || (is_array($blackDays) && empty($blackDays))) {
            unset($this->BlackDays);
        } else {
            $this->BlackDays = $blackDays;
        }

        return $this;
    }

    /**
     * Get Booking value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfBooking|null
     */
    public function getBooking(): ?ArrayOfBooking
    {
        return $this->Booking ?? null;
    }

    /**
     * Set Booking value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfBooking $booking
     *
     * @return Asset
     */
    public function setBooking(?ArrayOfBooking $booking = null): self
    {
        if (is_null($booking) || (is_array($booking) && empty($booking))) {
            unset($this->Booking);
        } else {
            $this->Booking = $booking;
        }

        return $this;
    }
}
