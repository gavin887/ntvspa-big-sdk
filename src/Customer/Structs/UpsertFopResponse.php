<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for UpsertFopResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q22:UpsertFopResponse | tns:UpsertFopResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class UpsertFopResponse extends ResponseBase
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
     * Constructor method for UpsertFopResponse
     *
     * @param bool $acquiredRequest
     *
     * @uses UpsertFopResponse::setAcquiredRequest()
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
     * @return UpsertFopResponse
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
