<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\BuyerHolderType;
use Ntvspa\Big\Product\Enums\CorporateCarnetType;
use Ntvspa\Big\Product\Enums\ProductType;
use Ntvspa\Big\Product\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveProductsCatalogRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q5:RetrieveProductsCatalogRequest | tns:RetrieveProductsCatalogRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveProductsCatalogRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The ProductType
     *
     * @var string|null
     */
    protected ?string $ProductType = null;
    /**
     * The Buyer
     *
     * @var string|null
     */
    protected ?string $Buyer = null;
    /**
     * The Holder
     *
     * @var string|null
     */
    protected ?string $Holder = null;
    /**
     * The CarnetType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $CarnetType = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The AgentPromotionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AgentPromotionId = null;

    /**
     * Constructor method for RetrieveProductsCatalogRequest
     *
     * @param string $sourceSystem
     * @param string $productType
     * @param string $buyer
     * @param string $holder
     * @param string $carnetType
     * @param string $signature
     * @param string $agentPromotionId
     *
     * @uses RetrieveProductsCatalogRequest::setSourceSystem()
     * @uses RetrieveProductsCatalogRequest::setProductType()
     * @uses RetrieveProductsCatalogRequest::setBuyer()
     * @uses RetrieveProductsCatalogRequest::setHolder()
     * @uses RetrieveProductsCatalogRequest::setCarnetType()
     * @uses RetrieveProductsCatalogRequest::setSignature()
     * @uses RetrieveProductsCatalogRequest::setAgentPromotionId()
     */
    public function __construct(?string $sourceSystem = null, ?string $productType = null, ?string $buyer = null, ?string $holder = null, ?string $carnetType = null, ?string $signature = null, ?string $agentPromotionId = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setProductType($productType)
            ->setBuyer($buyer)
            ->setHolder($holder)
            ->setCarnetType($carnetType)
            ->setSignature($signature)
            ->setAgentPromotionId($agentPromotionId);
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
     * @return RetrieveProductsCatalogRequest
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
     * @return RetrieveProductsCatalogRequest
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
     * @return RetrieveProductsCatalogRequest
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
     * @return RetrieveProductsCatalogRequest
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
     * Get CarnetType value
     *
     * @return string|null
     */
    public function getCarnetType(): ?string
    {
        return $this->CarnetType;
    }

    /**
     * Set CarnetType value
     *
     * @param string $carnetType
     *
     * @return RetrieveProductsCatalogRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\CorporateCarnetType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\CorporateCarnetType::valueIsValid()
     */
    public function setCarnetType(?string $carnetType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\CorporateCarnetType::valueIsValid($carnetType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\CorporateCarnetType', is_array($carnetType) ? implode(', ', $carnetType) : var_export($carnetType, true), implode(', ', CorporateCarnetType::getValidValues())), __LINE__);
        }
        $this->CarnetType = $carnetType;

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
     * @return RetrieveProductsCatalogRequest
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
     * Get AgentPromotionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAgentPromotionId(): ?string
    {
        return $this->AgentPromotionId ?? null;
    }

    /**
     * Set AgentPromotionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $agentPromotionId
     *
     * @return RetrieveProductsCatalogRequest
     */
    public function setAgentPromotionId(?string $agentPromotionId = null): self
    {
        // validation for constraint: string
        if (!is_null($agentPromotionId) && !is_string($agentPromotionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentPromotionId, true), gettype($agentPromotionId)), __LINE__);
        }
        if (is_null($agentPromotionId) || (is_array($agentPromotionId) && empty($agentPromotionId))) {
            unset($this->AgentPromotionId);
        } else {
            $this->AgentPromotionId = $agentPromotionId;
        }

        return $this;
    }
}
