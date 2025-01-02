<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelAgencyInfo Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TravelAgencyInfo
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class TravelAgencyInfo extends AbstractStructBase
{
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
     * The TradingName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TradingName = null;
    /**
     * The VatNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $VatNumber = null;
    /**
     * The Promocode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Promocode = null;
    /**
     * The ParentAgencyNode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var TravelAgencyInfo|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $ParentAgencyNode = null;

    /**
     * Constructor method for TravelAgencyInfo
     *
     * @param string           $idPartner
     * @param string           $tradingName
     * @param string           $vatNumber
     * @param string           $promocode
     * @param TravelAgencyInfo $parentAgencyNode
     *
     * @uses TravelAgencyInfo::setIdPartner()
     * @uses TravelAgencyInfo::setTradingName()
     * @uses TravelAgencyInfo::setVatNumber()
     * @uses TravelAgencyInfo::setPromocode()
     * @uses TravelAgencyInfo::setParentAgencyNode()
     */
    public function __construct(?string $idPartner = null, ?string $tradingName = null, ?string $vatNumber = null, ?string $promocode = null, ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $parentAgencyNode = null)
    {
        $this
            ->setIdPartner($idPartner)
            ->setTradingName($tradingName)
            ->setVatNumber($vatNumber)
            ->setPromocode($promocode)
            ->setParentAgencyNode($parentAgencyNode);
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
     * @return TravelAgencyInfo
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
     * Get TradingName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTradingName(): ?string
    {
        return $this->TradingName ?? null;
    }

    /**
     * Set TradingName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $tradingName
     *
     * @return TravelAgencyInfo
     */
    public function setTradingName(?string $tradingName = null): self
    {
        // validation for constraint: string
        if (!is_null($tradingName) && !is_string($tradingName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradingName, true), gettype($tradingName)), __LINE__);
        }
        if (is_null($tradingName) || (is_array($tradingName) && empty($tradingName))) {
            unset($this->TradingName);
        } else {
            $this->TradingName = $tradingName;
        }

        return $this;
    }

    /**
     * Get VatNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
        return $this->VatNumber ?? null;
    }

    /**
     * Set VatNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $vatNumber
     *
     * @return TravelAgencyInfo
     */
    public function setVatNumber(?string $vatNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($vatNumber) && !is_string($vatNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatNumber, true), gettype($vatNumber)), __LINE__);
        }
        if (is_null($vatNumber) || (is_array($vatNumber) && empty($vatNumber))) {
            unset($this->VatNumber);
        } else {
            $this->VatNumber = $vatNumber;
        }

        return $this;
    }

    /**
     * Get Promocode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromocode(): ?string
    {
        return $this->Promocode ?? null;
    }

    /**
     * Set Promocode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promocode
     *
     * @return TravelAgencyInfo
     */
    public function setPromocode(?string $promocode = null): self
    {
        // validation for constraint: string
        if (!is_null($promocode) && !is_string($promocode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promocode, true), gettype($promocode)), __LINE__);
        }
        if (is_null($promocode) || (is_array($promocode) && empty($promocode))) {
            unset($this->Promocode);
        } else {
            $this->Promocode = $promocode;
        }

        return $this;
    }

    /**
     * Get ParentAgencyNode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return TravelAgencyInfo|null
     */
    public function getParentAgencyNode(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo
    {
        return $this->ParentAgencyNode ?? null;
    }

    /**
     * Set ParentAgencyNode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param TravelAgencyInfo $parentAgencyNode
     *
     * @return TravelAgencyInfo
     */
    public function setParentAgencyNode(?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $parentAgencyNode = null): self
    {
        if (is_null($parentAgencyNode) || (is_array($parentAgencyNode) && empty($parentAgencyNode))) {
            unset($this->ParentAgencyNode);
        } else {
            $this->ParentAgencyNode = $parentAgencyNode;
        }

        return $this;
    }
}
