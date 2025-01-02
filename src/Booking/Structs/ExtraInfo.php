<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtraInfo Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ExtraInfo
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ExtraInfo extends AbstractStructBase
{
    /**
     * The ItaloPiuRegistrationRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ItaloPiuRegistrationRules|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\ItaloPiuRegistrationRules $ItaloPiuRegistrationRules = null;

    /**
     * Constructor method for ExtraInfo
     *
     * @param ItaloPiuRegistrationRules $italoPiuRegistrationRules
     *
     * @uses ExtraInfo::setItaloPiuRegistrationRules()
     */
    public function __construct(?\Ntvspa\Big\Booking\Structs\ItaloPiuRegistrationRules $italoPiuRegistrationRules = null)
    {
        $this
            ->setItaloPiuRegistrationRules($italoPiuRegistrationRules);
    }

    /**
     * Get ItaloPiuRegistrationRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ItaloPiuRegistrationRules|null
     */
    public function getItaloPiuRegistrationRules(): ?\Ntvspa\Big\Booking\Structs\ItaloPiuRegistrationRules
    {
        return $this->ItaloPiuRegistrationRules ?? null;
    }

    /**
     * Set ItaloPiuRegistrationRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ItaloPiuRegistrationRules $italoPiuRegistrationRules
     *
     * @return ExtraInfo
     */
    public function setItaloPiuRegistrationRules(?\Ntvspa\Big\Booking\Structs\ItaloPiuRegistrationRules $italoPiuRegistrationRules = null): self
    {
        if (is_null($italoPiuRegistrationRules) || (is_array($italoPiuRegistrationRules) && empty($italoPiuRegistrationRules))) {
            unset($this->ItaloPiuRegistrationRules);
        } else {
            $this->ItaloPiuRegistrationRules = $italoPiuRegistrationRules;
        }

        return $this;
    }
}
