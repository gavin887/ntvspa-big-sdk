<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use Customer\Arrays\ArrayOfContact;

/**
 * This class stands for GetCustomerContactsResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q14:GetCustomerContactsResponse | tns:GetCustomerContactsResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetCustomerContactsResponse extends ResponseBase
{
    /**
     * The Contacts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfContact|null
     */
    protected ?ArrayOfContact $Contacts = null;

    /**
     * Constructor method for GetCustomerContactsResponse
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfContact $contacts
     *
     * @uses GetCustomerContactsResponse::setContacts()
     */
    public function __construct(?ArrayOfContact $contacts = null)
    {
        $this
            ->setContacts($contacts);
    }

    /**
     * Get Contacts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfContact|null
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
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfContact $contacts
     *
     * @return GetCustomerContactsResponse
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
