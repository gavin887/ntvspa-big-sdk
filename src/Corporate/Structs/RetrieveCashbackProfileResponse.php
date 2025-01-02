<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;

/**
 * This class stands for RetrieveCashbackProfileResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q4:RetrieveCashbackProfileResponse | tns:RetrieveCashbackProfileResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveCashbackProfileResponse extends ResponseBase
{
    /**
     * The CashbackProfile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CashbackProfile|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\CashbackProfile $CashbackProfile = null;

    /**
     * Constructor method for RetrieveCashbackProfileResponse
     *
     * @param CashbackProfile $cashbackProfile
     *
     * @uses RetrieveCashbackProfileResponse::setCashbackProfile()
     */
    public function __construct(?\Ntvspa\Big\Corporate\Structs\CashbackProfile $cashbackProfile = null)
    {
        $this
            ->setCashbackProfile($cashbackProfile);
    }

    /**
     * Get CashbackProfile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CashbackProfile|null
     */
    public function getCashbackProfile(): ?\Ntvspa\Big\Corporate\Structs\CashbackProfile
    {
        return $this->CashbackProfile ?? null;
    }

    /**
     * Set CashbackProfile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CashbackProfile $cashbackProfile
     *
     * @return RetrieveCashbackProfileResponse
     */
    public function setCashbackProfile(?\Ntvspa\Big\Corporate\Structs\CashbackProfile $cashbackProfile = null): self
    {
        if (is_null($cashbackProfile) || (is_array($cashbackProfile) && empty($cashbackProfile))) {
            unset($this->CashbackProfile);
        } else {
            $this->CashbackProfile = $cashbackProfile;
        }

        return $this;
    }
}
