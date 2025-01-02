<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Session\Arrays\ArrayOfWarning;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteResetPasswordResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q12:CompleteResetPasswordResponse | tns:CompleteResetPasswordResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CompleteResetPasswordResponse extends AbstractStructBase
{
    /**
     * The AcquiredRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $AcquiredRequest = null;
    /**
     * The Warnings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Session\Arrays\ArrayOfWarning|null
     */
    protected ?ArrayOfWarning $Warnings = null;

    /**
     * Constructor method for CompleteResetPasswordResponse
     *
     * @param bool                                      $acquiredRequest
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfWarning $warnings
     *
     * @uses CompleteResetPasswordResponse::setAcquiredRequest()
     * @uses CompleteResetPasswordResponse::setWarnings()
     */
    public function __construct(?bool $acquiredRequest = null, ?ArrayOfWarning $warnings = null)
    {
        $this
            ->setAcquiredRequest($acquiredRequest)
            ->setWarnings($warnings);
    }

    /**
     * Get AcquiredRequest value
     *
     * @return bool|null
     */
    public function getAcquiredRequest(): ?bool
    {
        return $this->AcquiredRequest;
    }

    /**
     * Set AcquiredRequest value
     *
     * @param bool $acquiredRequest
     *
     * @return CompleteResetPasswordResponse
     */
    public function setAcquiredRequest(?bool $acquiredRequest = null): self
    {
        // validation for constraint: boolean
        if (!is_null($acquiredRequest) && !is_bool($acquiredRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($acquiredRequest, true), gettype($acquiredRequest)), __LINE__);
        }
        $this->AcquiredRequest = $acquiredRequest;

        return $this;
    }

    /**
     * Get Warnings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Session\Arrays\ArrayOfWarning|null
     */
    public function getWarnings(): ?ArrayOfWarning
    {
        return $this->Warnings ?? null;
    }

    /**
     * Set Warnings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfWarning $warnings
     *
     * @return CompleteResetPasswordResponse
     */
    public function setWarnings(?ArrayOfWarning $warnings = null): self
    {
        if (is_null($warnings) || (is_array($warnings) && empty($warnings))) {
            unset($this->Warnings);
        } else {
            $this->Warnings = $warnings;
        }

        return $this;
    }
}
