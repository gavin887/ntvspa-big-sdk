<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for MoveResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q32:MoveResponse | tns:MoveResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class MoveResponse extends ResponseBase
{
    /**
     * The response
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $response = null;

    /**
     * Constructor method for MoveResponse
     *
     * @param bool $response
     *
     * @uses MoveResponse::setResponse()
     */
    public function __construct(?bool $response = null)
    {
        $this
            ->setResponse($response);
    }

    /**
     * Get response value
     *
     * @return bool|null
     */
    public function getResponse(): ?bool
    {
        return $this->response;
    }

    /**
     * Set response value
     *
     * @param bool $response
     *
     * @return MoveResponse
     */
    public function setResponse(?bool $response = null): self
    {
        // validation for constraint: boolean
        if (!is_null($response) && !is_bool($response)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($response, true), gettype($response)), __LINE__);
        }
        $this->response = $response;

        return $this;
    }
}
