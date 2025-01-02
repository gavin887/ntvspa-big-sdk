<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use Customer\Arrays\ArrayOfInvoiceProfile;

/**
 * This class stands for RetrieveInvoiceProfileResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q26:RetrieveInvoiceProfileResponse | tns:RetrieveInvoiceProfileResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveInvoiceProfileResponse extends ResponseBase
{
    /**
     * The InvoiceProfile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfInvoiceProfile|null
     */
    protected ?ArrayOfInvoiceProfile $InvoiceProfile = null;

    /**
     * Constructor method for RetrieveInvoiceProfileResponse
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfInvoiceProfile $invoiceProfile
     *
     * @uses RetrieveInvoiceProfileResponse::setInvoiceProfile()
     */
    public function __construct(?ArrayOfInvoiceProfile $invoiceProfile = null)
    {
        $this
            ->setInvoiceProfile($invoiceProfile);
    }

    /**
     * Get InvoiceProfile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfInvoiceProfile|null
     */
    public function getInvoiceProfile(): ?ArrayOfInvoiceProfile
    {
        return $this->InvoiceProfile ?? null;
    }

    /**
     * Set InvoiceProfile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfInvoiceProfile $invoiceProfile
     *
     * @return RetrieveInvoiceProfileResponse
     */
    public function setInvoiceProfile(?ArrayOfInvoiceProfile $invoiceProfile = null): self
    {
        if (is_null($invoiceProfile) || (is_array($invoiceProfile) && empty($invoiceProfile))) {
            unset($this->InvoiceProfile);
        } else {
            $this->InvoiceProfile = $invoiceProfile;
        }

        return $this;
    }
}
