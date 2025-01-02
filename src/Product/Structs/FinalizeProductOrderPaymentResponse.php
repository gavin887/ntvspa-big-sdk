<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for FinalizeProductOrderPaymentResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q26:FinalizeProductOrderPaymentResponse | tns:FinalizeProductOrderPaymentResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FinalizeProductOrderPaymentResponse extends ResponseBase
{
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OrderID = null;
    /**
     * The AckRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AckRequest = null;

    /**
     * Constructor method for FinalizeProductOrderPaymentResponse
     *
     * @param string $orderID
     * @param string $ackRequest
     *
     * @uses FinalizeProductOrderPaymentResponse::setOrderID()
     * @uses FinalizeProductOrderPaymentResponse::setAckRequest()
     */
    public function __construct(?string $orderID = null, ?string $ackRequest = null)
    {
        $this
            ->setOrderID($orderID)
            ->setAckRequest($ackRequest);
    }

    /**
     * Get OrderID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getOrderID(): ?string
    {
        return $this->OrderID ?? null;
    }

    /**
     * Set OrderID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $orderID
     *
     * @return FinalizeProductOrderPaymentResponse
     */
    public function setOrderID(?string $orderID = null): self
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        if (is_null($orderID) || (is_array($orderID) && empty($orderID))) {
            unset($this->OrderID);
        } else {
            $this->OrderID = $orderID;
        }

        return $this;
    }

    /**
     * Get AckRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAckRequest(): ?string
    {
        return $this->AckRequest ?? null;
    }

    /**
     * Set AckRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $ackRequest
     *
     * @return FinalizeProductOrderPaymentResponse
     */
    public function setAckRequest(?string $ackRequest = null): self
    {
        // validation for constraint: string
        if (!is_null($ackRequest) && !is_string($ackRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ackRequest, true), gettype($ackRequest)), __LINE__);
        }
        if (is_null($ackRequest) || (is_array($ackRequest) && empty($ackRequest))) {
            unset($this->AckRequest);
        } else {
            $this->AckRequest = $ackRequest;
        }

        return $this;
    }
}
