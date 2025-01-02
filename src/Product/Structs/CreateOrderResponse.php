<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for CreateOrderResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q4:CreateOrderResponse | tns:CreateOrderResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CreateOrderResponse extends ResponseBase
{
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OrderNumber = null;

    /**
     * Constructor method for CreateOrderResponse
     *
     * @param string $orderNumber
     *
     * @uses CreateOrderResponse::setOrderNumber()
     */
    public function __construct(?string $orderNumber = null)
    {
        $this
            ->setOrderNumber($orderNumber);
    }

    /**
     * Get OrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return $this->OrderNumber ?? null;
    }

    /**
     * Set OrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $orderNumber
     *
     * @return CreateOrderResponse
     */
    public function setOrderNumber(?string $orderNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        if (is_null($orderNumber) || (is_array($orderNumber) && empty($orderNumber))) {
            unset($this->OrderNumber);
        } else {
            $this->OrderNumber = $orderNumber;
        }

        return $this;
    }
}
