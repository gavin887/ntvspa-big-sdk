<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for TrackingCorporatePromotionResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q16:TrackingCorporatePromotionResponse | tns:TrackingCorporatePromotionResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class TrackingCorporatePromotionResponse extends ResponseBase
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
     * Constructor method for TrackingCorporatePromotionResponse
     *
     * @param bool $acquiredRequest
     *
     * @uses TrackingCorporatePromotionResponse::setAcquiredRequest()
     */
    public function __construct(?bool $acquiredRequest = null)
    {
        $this
            ->setAcquiredRequest($acquiredRequest);
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
     * @return TrackingCorporatePromotionResponse
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
}
