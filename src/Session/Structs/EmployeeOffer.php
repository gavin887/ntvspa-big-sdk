<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Session\Enums\EmployeeOffersType;
use Session\Arrays\ArrayOfContact;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeOffer Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeOffer
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class EmployeeOffer extends AbstractStructBase
{
    /**
     * The OfferType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $OfferType = null;
    /**
     * The Contacts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Session\Arrays\ArrayOfContact|null
     */
    protected ?ArrayOfContact $Contacts = null;

    /**
     * Constructor method for EmployeeOffer
     *
     * @param string                                    $offerType
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfContact $contacts
     *
     * @uses EmployeeOffer::setOfferType()
     * @uses EmployeeOffer::setContacts()
     */
    public function __construct(?string $offerType = null, ?ArrayOfContact $contacts = null)
    {
        $this
            ->setOfferType($offerType)
            ->setContacts($contacts);
    }

    /**
     * Get OfferType value
     *
     * @return string|null
     */
    public function getOfferType(): ?string
    {
        return $this->OfferType;
    }

    /**
     * Set OfferType value
     *
     * @param string $offerType
     *
     * @return EmployeeOffer
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Session\Enums\EmployeeOffersType::getValidValues()
     * @uses \Ntvspa\Big\Session\Enums\EmployeeOffersType::valueIsValid()
     */
    public function setOfferType(?string $offerType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Session\Enums\EmployeeOffersType::valueIsValid($offerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Session\Enums\EmployeeOffersType', is_array($offerType) ? implode(', ', $offerType) : var_export($offerType, true), implode(', ', EmployeeOffersType::getValidValues())), __LINE__);
        }
        $this->OfferType = $offerType;

        return $this;
    }

    /**
     * Get Contacts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Session\Arrays\ArrayOfContact|null
     */
    public function getContacts(): ?ArrayOfContact
    {
        return $this->Contacts ?? null;
    }

    /**
     * Set Contacts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfContact $contacts
     *
     * @return EmployeeOffer
     */
    public function setContacts(?ArrayOfContact $contacts = null): self
    {
        if (is_null($contacts) || (is_array($contacts) && empty($contacts))) {
            unset($this->Contacts);
        } else {
            $this->Contacts = $contacts;
        }

        return $this;
    }
}
