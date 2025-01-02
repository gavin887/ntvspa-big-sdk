<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerHolderPartner Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BuyerHolderPartner
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BuyerHolderPartner extends AbstractStructBase
{
    /**
     * The PartnerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PartnerId = null;

    /**
     * Constructor method for BuyerHolderPartner
     *
     * @param string $partnerId
     *
     * @uses BuyerHolderPartner::setPartnerId()
     */
    public function __construct(?string $partnerId = null)
    {
        $this
            ->setPartnerId($partnerId);
    }

    /**
     * Get PartnerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPartnerId(): ?string
    {
        return $this->PartnerId ?? null;
    }

    /**
     * Set PartnerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $partnerId
     *
     * @return BuyerHolderPartner
     */
    public function setPartnerId(?string $partnerId = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerId) && !is_string($partnerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerId, true), gettype($partnerId)), __LINE__);
        }
        if (is_null($partnerId) || (is_array($partnerId) && empty($partnerId))) {
            unset($this->PartnerId);
        } else {
            $this->PartnerId = $partnerId;
        }

        return $this;
    }
}
