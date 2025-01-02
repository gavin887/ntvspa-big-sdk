<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for CreateProductOrderResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q24:CreateProductOrderResponse | tns:CreateProductOrderResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CreateProductOrderResponse extends ResponseBase
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
     * The ThreeDSecureAuthRes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ThreeDSecureAuthRes|null
     */
    protected ?\Ntvspa\Big\Product\Structs\ThreeDSecureAuthRes $ThreeDSecureAuthRes = null;
    /**
     * The StartPaypalPaymentResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var StartPaypalPaymentResponse|null
     */
    protected ?\Ntvspa\Big\Product\Structs\StartPaypalPaymentResponse $StartPaypalPaymentResponse = null;

    /**
     * Constructor method for CreateProductOrderResponse
     *
     * @param string                     $orderID
     * @param string                     $ackRequest
     * @param ThreeDSecureAuthRes        $threeDSecureAuthRes
     * @param StartPaypalPaymentResponse $startPaypalPaymentResponse
     *
     * @uses CreateProductOrderResponse::setOrderID()
     * @uses CreateProductOrderResponse::setAckRequest()
     * @uses CreateProductOrderResponse::setThreeDSecureAuthRes()
     * @uses CreateProductOrderResponse::setStartPaypalPaymentResponse()
     */
    public function __construct(?string $orderID = null, ?string $ackRequest = null, ?\Ntvspa\Big\Product\Structs\ThreeDSecureAuthRes $threeDSecureAuthRes = null, ?\Ntvspa\Big\Product\Structs\StartPaypalPaymentResponse $startPaypalPaymentResponse = null)
    {
        $this
            ->setOrderID($orderID)
            ->setAckRequest($ackRequest)
            ->setThreeDSecureAuthRes($threeDSecureAuthRes)
            ->setStartPaypalPaymentResponse($startPaypalPaymentResponse);
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
     * @return CreateProductOrderResponse
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
     * @return CreateProductOrderResponse
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
     * @return CreateProductOrderResponse
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

    /**
     * Get StartPaypalPaymentResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return StartPaypalPaymentResponse|null
     */
    public function getStartPaypalPaymentResponse(): ?\Ntvspa\Big\Product\Structs\StartPaypalPaymentResponse
    {
        return $this->StartPaypalPaymentResponse ?? null;
    }

    /**
     * Set StartPaypalPaymentResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param StartPaypalPaymentResponse $startPaypalPaymentResponse
     *
     * @return CreateProductOrderResponse
     */
    public function setStartPaypalPaymentResponse(?\Ntvspa\Big\Product\Structs\StartPaypalPaymentResponse $startPaypalPaymentResponse = null): self
    {
        if (is_null($startPaypalPaymentResponse) || (is_array($startPaypalPaymentResponse) && empty($startPaypalPaymentResponse))) {
            unset($this->StartPaypalPaymentResponse);
        } else {
            $this->StartPaypalPaymentResponse = $startPaypalPaymentResponse;
        }

        return $this;
    }
}