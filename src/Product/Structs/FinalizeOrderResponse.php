<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for FinalizeOrderResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FinalizeOrderResponse | q2:FinalizeOrderResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FinalizeOrderResponse extends ResponseBase
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
     * The ThreeDSecureAuthRes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ThreeDSecureAuthRes|null
     */
    protected ?\Ntvspa\Big\Product\Structs\ThreeDSecureAuthRes $ThreeDSecureAuthRes = null;

    /**
     * Constructor method for FinalizeOrderResponse
     *
     * @param bool                $acquiredRequest
     * @param ThreeDSecureAuthRes $threeDSecureAuthRes
     *
     * @uses FinalizeOrderResponse::setAcquiredRequest()
     * @uses FinalizeOrderResponse::setThreeDSecureAuthRes()
     */
    public function __construct(?bool $acquiredRequest = null, ?\Ntvspa\Big\Product\Structs\ThreeDSecureAuthRes $threeDSecureAuthRes = null)
    {
        $this
            ->setAcquiredRequest($acquiredRequest)
            ->setThreeDSecureAuthRes($threeDSecureAuthRes);
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
     * @return FinalizeOrderResponse
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
     * Get ThreeDSecureAuthRes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ThreeDSecureAuthRes|null
     */
    public function getThreeDSecureAuthRes(): ?\Ntvspa\Big\Product\Structs\ThreeDSecureAuthRes
    {
        return $this->ThreeDSecureAuthRes ?? null;
    }

    /**
     * Set ThreeDSecureAuthRes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ThreeDSecureAuthRes $threeDSecureAuthRes
     *
     * @return FinalizeOrderResponse
     */
    public function setThreeDSecureAuthRes(?\Ntvspa\Big\Product\Structs\ThreeDSecureAuthRes $threeDSecureAuthRes = null): self
    {
        if (is_null($threeDSecureAuthRes) || (is_array($threeDSecureAuthRes) && empty($threeDSecureAuthRes))) {
            unset($this->ThreeDSecureAuthRes);
        } else {
            $this->ThreeDSecureAuthRes = $threeDSecureAuthRes;
        }

        return $this;
    }
}
