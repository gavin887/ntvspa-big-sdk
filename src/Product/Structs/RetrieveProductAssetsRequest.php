<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveProductAssetsRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q19:RetrieveProductAssetsRequest | tns:RetrieveProductAssetsRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveProductAssetsRequest extends AbstractStructBase
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
     * The Customer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Customer|null
     */
    protected ?\Ntvspa\Big\Product\Structs\Customer $Customer = null;
    /**
     * The Asset
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Asset|null
     */
    protected ?\Ntvspa\Big\Product\Structs\Asset $Asset = null;
    /**
     * The PageControl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PageControl|null
     */
    protected ?\Ntvspa\Big\Product\Structs\PageControl $PageControl = null;
    /**
     * The Partner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Partner|null
     */
    protected ?\Ntvspa\Big\Product\Structs\Partner $Partner = null;

    /**
     * Constructor method for RetrieveProductAssetsRequest
     *
     * @param string      $sourceSystem
     * @param string      $signature
     * @param Customer    $customer
     * @param Asset       $asset
     * @param PageControl $pageControl
     * @param Partner     $partner
     *
     * @uses RetrieveProductAssetsRequest::setSourceSystem()
     * @uses RetrieveProductAssetsRequest::setSignature()
     * @uses RetrieveProductAssetsRequest::setCustomer()
     * @uses RetrieveProductAssetsRequest::setAsset()
     * @uses RetrieveProductAssetsRequest::setPageControl()
     * @uses RetrieveProductAssetsRequest::setPartner()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Product\Structs\Customer $customer = null, ?\Ntvspa\Big\Product\Structs\Asset $asset = null, ?\Ntvspa\Big\Product\Structs\PageControl $pageControl = null, ?\Ntvspa\Big\Product\Structs\Partner $partner = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setCustomer($customer)
            ->setAsset($asset)
            ->setPageControl($pageControl)
            ->setPartner($partner);
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
     * @return RetrieveProductAssetsRequest
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
     * @return RetrieveProductAssetsRequest
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
     * Get Customer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Customer|null
     */
    public function getCustomer(): ?\Ntvspa\Big\Product\Structs\Customer
    {
        return $this->Customer ?? null;
    }

    /**
     * Set Customer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Customer $customer
     *
     * @return RetrieveProductAssetsRequest
     */
    public function setCustomer(?\Ntvspa\Big\Product\Structs\Customer $customer = null): self
    {
        if (is_null($customer) || (is_array($customer) && empty($customer))) {
            unset($this->Customer);
        } else {
            $this->Customer = $customer;
        }

        return $this;
    }

    /**
     * Get Asset value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Asset|null
     */
    public function getAsset(): ?\Ntvspa\Big\Product\Structs\Asset
    {
        return $this->Asset ?? null;
    }

    /**
     * Set Asset value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Asset $asset
     *
     * @return RetrieveProductAssetsRequest
     */
    public function setAsset(?\Ntvspa\Big\Product\Structs\Asset $asset = null): self
    {
        if (is_null($asset) || (is_array($asset) && empty($asset))) {
            unset($this->Asset);
        } else {
            $this->Asset = $asset;
        }

        return $this;
    }

    /**
     * Get PageControl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PageControl|null
     */
    public function getPageControl(): ?\Ntvspa\Big\Product\Structs\PageControl
    {
        return $this->PageControl ?? null;
    }

    /**
     * Set PageControl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PageControl $pageControl
     *
     * @return RetrieveProductAssetsRequest
     */
    public function setPageControl(?\Ntvspa\Big\Product\Structs\PageControl $pageControl = null): self
    {
        if (is_null($pageControl) || (is_array($pageControl) && empty($pageControl))) {
            unset($this->PageControl);
        } else {
            $this->PageControl = $pageControl;
        }

        return $this;
    }

    /**
     * Get Partner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Partner|null
     */
    public function getPartner(): ?\Ntvspa\Big\Product\Structs\Partner
    {
        return $this->Partner ?? null;
    }

    /**
     * Set Partner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Partner $partner
     *
     * @return RetrieveProductAssetsRequest
     */
    public function setPartner(?\Ntvspa\Big\Product\Structs\Partner $partner = null): self
    {
        if (is_null($partner) || (is_array($partner) && empty($partner))) {
            unset($this->Partner);
        } else {
            $this->Partner = $partner;
        }

        return $this;
    }
}
