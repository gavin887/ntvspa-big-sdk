<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClearSessionRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q5:ClearSessionRequest | tns:ClearSessionRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ClearSessionRequest extends AbstractStructBase
{
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The LoyaltyTransactionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LoyaltyTransactionId = null;

    /**
     * Constructor method for ClearSessionRequest
     *
     * @param string $signature
     * @param string $loyaltyTransactionId
     *
     * @uses ClearSessionRequest::setSignature()
     * @uses ClearSessionRequest::setLoyaltyTransactionId()
     */
    public function __construct(?string $signature = null, ?string $loyaltyTransactionId = null)
    {
        $this
            ->setSignature($signature)
            ->setLoyaltyTransactionId($loyaltyTransactionId);
    }

    /**
     * Get Signature value
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature;
    }

    /**
     * Set Signature value
     *
     * @param string $signature
     *
     * @return ClearSessionRequest
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;

        return $this;
    }

    /**
     * Get LoyaltyTransactionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLoyaltyTransactionId(): ?string
    {
        return $this->LoyaltyTransactionId ?? null;
    }

    /**
     * Set LoyaltyTransactionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $loyaltyTransactionId
     *
     * @return ClearSessionRequest
     */
    public function setLoyaltyTransactionId(?string $loyaltyTransactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($loyaltyTransactionId) && !is_string($loyaltyTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loyaltyTransactionId, true), gettype($loyaltyTransactionId)), __LINE__);
        }
        if (is_null($loyaltyTransactionId) || (is_array($loyaltyTransactionId) && empty($loyaltyTransactionId))) {
            unset($this->LoyaltyTransactionId);
        } else {
            $this->LoyaltyTransactionId = $loyaltyTransactionId;
        }

        return $this;
    }
}
