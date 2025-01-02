<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\BuyerHolderType;
use Ntvspa\Big\Product\Enums\ProductType;
use Ntvspa\Big\Product\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductsAvailabilityRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q21:GetProductsAvailabilityRequest | tns:GetProductsAvailabilityRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetProductsAvailabilityRequest extends AbstractStructBase
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
     * The Holder
     *
     * @var string|null
     */
    protected ?string $Holder = null;
    /**
     * The Buyer
     *
     * @var string|null
     */
    protected ?string $Buyer = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The DepartureCity
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DepartureCity = null;
    /**
     * The ArrivalCity
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ArrivalCity = null;
    /**
     * The IDHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $IDHolder = null;
    /**
     * The Class
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Class = null;

    /**
     * Constructor method for GetProductsAvailabilityRequest
     *
     * @param string $sourceSystem
     * @param string $productType
     * @param string $holder
     * @param string $buyer
     * @param string $signature
     * @param string $departureCity
     * @param string $arrivalCity
     * @param string $iDHolder
     * @param string $class
     *
     * @uses GetProductsAvailabilityRequest::setSourceSystem()
     * @uses GetProductsAvailabilityRequest::setProductType()
     * @uses GetProductsAvailabilityRequest::setHolder()
     * @uses GetProductsAvailabilityRequest::setBuyer()
     * @uses GetProductsAvailabilityRequest::setSignature()
     * @uses GetProductsAvailabilityRequest::setDepartureCity()
     * @uses GetProductsAvailabilityRequest::setArrivalCity()
     * @uses GetProductsAvailabilityRequest::setIDHolder()
     * @uses GetProductsAvailabilityRequest::setClass()
     */
    public function __construct(?string $sourceSystem = null, ?string $productType = null, ?string $holder = null, ?string $buyer = null, ?string $signature = null, ?string $departureCity = null, ?string $arrivalCity = null, ?string $iDHolder = null, ?string $class = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setProductType($productType)
            ->setHolder($holder)
            ->setBuyer($buyer)
            ->setSignature($signature)
            ->setDepartureCity($departureCity)
            ->setArrivalCity($arrivalCity)
            ->setIDHolder($iDHolder)
            ->setClass($class);
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
     * @return GetProductsAvailabilityRequest
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
     * @return GetProductsAvailabilityRequest
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
     * Get Holder value
     *
     * @return string|null
     */
    public function getHolder(): ?string
    {
        return $this->Holder;
    }

    /**
     * Set Holder value
     *
     * @param string $holder
     *
     * @return GetProductsAvailabilityRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\BuyerHolderType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\BuyerHolderType::valueIsValid()
     */
    public function setHolder(?string $holder = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\BuyerHolderType::valueIsValid($holder)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\BuyerHolderType', is_array($holder) ? implode(', ', $holder) : var_export($holder, true), implode(', ', BuyerHolderType::getValidValues())), __LINE__);
        }
        $this->Holder = $holder;

        return $this;
    }

    /**
     * Get Buyer value
     *
     * @return string|null
     */
    public function getBuyer(): ?string
    {
        return $this->Buyer;
    }

    /**
     * Set Buyer value
     *
     * @param string $buyer
     *
     * @return GetProductsAvailabilityRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\BuyerHolderType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\BuyerHolderType::valueIsValid()
     */
    public function setBuyer(?string $buyer = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\BuyerHolderType::valueIsValid($buyer)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\BuyerHolderType', is_array($buyer) ? implode(', ', $buyer) : var_export($buyer, true), implode(', ', BuyerHolderType::getValidValues())), __LINE__);
        }
        $this->Buyer = $buyer;

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
     * @return GetProductsAvailabilityRequest
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
     * Get DepartureCity value
     *
     * @return string|null
     */
    public function getDepartureCity(): ?string
    {
        return $this->DepartureCity;
    }

    /**
     * Set DepartureCity value
     *
     * @param string $departureCity
     *
     * @return GetProductsAvailabilityRequest
     */
    public function setDepartureCity(?string $departureCity = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCity) && !is_string($departureCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCity, true), gettype($departureCity)), __LINE__);
        }
        $this->DepartureCity = $departureCity;

        return $this;
    }

    /**
     * Get ArrivalCity value
     *
     * @return string|null
     */
    public function getArrivalCity(): ?string
    {
        return $this->ArrivalCity;
    }

    /**
     * Set ArrivalCity value
     *
     * @param string $arrivalCity
     *
     * @return GetProductsAvailabilityRequest
     */
    public function setArrivalCity(?string $arrivalCity = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalCity) && !is_string($arrivalCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalCity, true), gettype($arrivalCity)), __LINE__);
        }
        $this->ArrivalCity = $arrivalCity;

        return $this;
    }

    /**
     * Get IDHolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIDHolder(): ?string
    {
        return $this->IDHolder ?? null;
    }

    /**
     * Set IDHolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $iDHolder
     *
     * @return GetProductsAvailabilityRequest
     */
    public function setIDHolder(?string $iDHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($iDHolder) && !is_string($iDHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iDHolder, true), gettype($iDHolder)), __LINE__);
        }
        if (is_null($iDHolder) || (is_array($iDHolder) && empty($iDHolder))) {
            unset($this->IDHolder);
        } else {
            $this->IDHolder = $iDHolder;
        }

        return $this;
    }

    /**
     * Get Class value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getClass(): ?string
    {
        return $this->Class ?? null;
    }

    /**
     * Set Class value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $class
     *
     * @return GetProductsAvailabilityRequest
     */
    public function setClass(?string $class = null): self
    {
        // validation for constraint: string
        if (!is_null($class) && !is_string($class)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($class, true), gettype($class)), __LINE__);
        }
        if (is_null($class) || (is_array($class) && empty($class))) {
            unset($this->Class);
        } else {
            $this->Class = $class;
        }

        return $this;
    }
}
