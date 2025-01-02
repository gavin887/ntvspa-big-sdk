<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Partner Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Partner
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Partner extends AbstractStructBase
{
    /**
     * The PartitaIva
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PartitaIva = null;
    /**
     * The PartnerIdBuyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PartnerIdBuyer = null;
    /**
     * The PartnerIdHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PartnerIdHolder = null;

    /**
     * Constructor method for Partner
     *
     * @param string $partitaIva
     * @param string $partnerIdBuyer
     * @param string $partnerIdHolder
     *
     * @uses Partner::setPartitaIva()
     * @uses Partner::setPartnerIdBuyer()
     * @uses Partner::setPartnerIdHolder()
     */
    public function __construct(?string $partitaIva = null, ?string $partnerIdBuyer = null, ?string $partnerIdHolder = null)
    {
        $this
            ->setPartitaIva($partitaIva)
            ->setPartnerIdBuyer($partnerIdBuyer)
            ->setPartnerIdHolder($partnerIdHolder);
    }

    /**
     * Get PartitaIva value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPartitaIva(): ?string
    {
        return $this->PartitaIva ?? null;
    }

    /**
     * Set PartitaIva value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $partitaIva
     *
     * @return Partner
     */
    public function setPartitaIva(?string $partitaIva = null): self
    {
        // validation for constraint: string
        if (!is_null($partitaIva) && !is_string($partitaIva)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partitaIva, true), gettype($partitaIva)), __LINE__);
        }
        if (is_null($partitaIva) || (is_array($partitaIva) && empty($partitaIva))) {
            unset($this->PartitaIva);
        } else {
            $this->PartitaIva = $partitaIva;
        }

        return $this;
    }

    /**
     * Get PartnerIdBuyer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPartnerIdBuyer(): ?string
    {
        return $this->PartnerIdBuyer ?? null;
    }

    /**
     * Set PartnerIdBuyer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $partnerIdBuyer
     *
     * @return Partner
     */
    public function setPartnerIdBuyer(?string $partnerIdBuyer = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerIdBuyer) && !is_string($partnerIdBuyer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerIdBuyer, true), gettype($partnerIdBuyer)), __LINE__);
        }
        if (is_null($partnerIdBuyer) || (is_array($partnerIdBuyer) && empty($partnerIdBuyer))) {
            unset($this->PartnerIdBuyer);
        } else {
            $this->PartnerIdBuyer = $partnerIdBuyer;
        }

        return $this;
    }

    /**
     * Get PartnerIdHolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPartnerIdHolder(): ?string
    {
        return $this->PartnerIdHolder ?? null;
    }

    /**
     * Set PartnerIdHolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $partnerIdHolder
     *
     * @return Partner
     */
    public function setPartnerIdHolder(?string $partnerIdHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerIdHolder) && !is_string($partnerIdHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerIdHolder, true), gettype($partnerIdHolder)), __LINE__);
        }
        if (is_null($partnerIdHolder) || (is_array($partnerIdHolder) && empty($partnerIdHolder))) {
            unset($this->PartnerIdHolder);
        } else {
            $this->PartnerIdHolder = $partnerIdHolder;
        }

        return $this;
    }
}
