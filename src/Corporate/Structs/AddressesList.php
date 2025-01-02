<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressesList Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddressesList
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AddressesList extends AbstractStructBase
{
    /**
     * The LegalAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Address|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\Address $LegalAddress = null;
    /**
     * The InvoicingAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Address|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\Address $InvoicingAddress = null;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Address|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\Address $ShippingAddress = null;

    /**
     * Constructor method for AddressesList
     *
     * @param Address $legalAddress
     * @param Address $invoicingAddress
     * @param Address $shippingAddress
     *
     * @uses AddressesList::setLegalAddress()
     * @uses AddressesList::setInvoicingAddress()
     * @uses AddressesList::setShippingAddress()
     */
    public function __construct(?\Ntvspa\Big\Corporate\Structs\Address $legalAddress = null, ?\Ntvspa\Big\Corporate\Structs\Address $invoicingAddress = null, ?\Ntvspa\Big\Corporate\Structs\Address $shippingAddress = null)
    {
        $this
            ->setLegalAddress($legalAddress)
            ->setInvoicingAddress($invoicingAddress)
            ->setShippingAddress($shippingAddress);
    }

    /**
     * Get LegalAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Address|null
     */
    public function getLegalAddress(): ?\Ntvspa\Big\Corporate\Structs\Address
    {
        return $this->LegalAddress ?? null;
    }

    /**
     * Set LegalAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Address $legalAddress
     *
     * @return AddressesList
     */
    public function setLegalAddress(?\Ntvspa\Big\Corporate\Structs\Address $legalAddress = null): self
    {
        if (is_null($legalAddress) || (is_array($legalAddress) && empty($legalAddress))) {
            unset($this->LegalAddress);
        } else {
            $this->LegalAddress = $legalAddress;
        }

        return $this;
    }

    /**
     * Get InvoicingAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Address|null
     */
    public function getInvoicingAddress(): ?\Ntvspa\Big\Corporate\Structs\Address
    {
        return $this->InvoicingAddress ?? null;
    }

    /**
     * Set InvoicingAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Address $invoicingAddress
     *
     * @return AddressesList
     */
    public function setInvoicingAddress(?\Ntvspa\Big\Corporate\Structs\Address $invoicingAddress = null): self
    {
        if (is_null($invoicingAddress) || (is_array($invoicingAddress) && empty($invoicingAddress))) {
            unset($this->InvoicingAddress);
        } else {
            $this->InvoicingAddress = $invoicingAddress;
        }

        return $this;
    }

    /**
     * Get ShippingAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Address|null
     */
    public function getShippingAddress(): ?\Ntvspa\Big\Corporate\Structs\Address
    {
        return $this->ShippingAddress ?? null;
    }

    /**
     * Set ShippingAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Address $shippingAddress
     *
     * @return AddressesList
     */
    public function setShippingAddress(?\Ntvspa\Big\Corporate\Structs\Address $shippingAddress = null): self
    {
        if (is_null($shippingAddress) || (is_array($shippingAddress) && empty($shippingAddress))) {
            unset($this->ShippingAddress);
        } else {
            $this->ShippingAddress = $shippingAddress;
        }

        return $this;
    }
}
