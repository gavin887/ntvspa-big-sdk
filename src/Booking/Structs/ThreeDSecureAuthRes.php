<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThreeDSecureAuthRes Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ThreeDSecureAuthRes
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ThreeDSecureAuthRes extends AbstractStructBase
{
    /**
     * The ValidationTDSApplicable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ValidationTDSApplicable = null;
    /**
     * The ValidationTDSPaReq
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ValidationTDSPaReq = null;

    /**
     * Constructor method for ThreeDSecureAuthRes
     *
     * @param bool   $validationTDSApplicable
     * @param string $validationTDSPaReq
     *
     * @uses ThreeDSecureAuthRes::setValidationTDSApplicable()
     * @uses ThreeDSecureAuthRes::setValidationTDSPaReq()
     */
    public function __construct(?bool $validationTDSApplicable = null, ?string $validationTDSPaReq = null)
    {
        $this
            ->setValidationTDSApplicable($validationTDSApplicable)
            ->setValidationTDSPaReq($validationTDSPaReq);
    }

    /**
     * Get ValidationTDSApplicable value
     *
     * @return bool|null
     */
    public function getValidationTDSApplicable(): ?bool
    {
        return $this->ValidationTDSApplicable;
    }

    /**
     * Set ValidationTDSApplicable value
     *
     * @param bool $validationTDSApplicable
     *
     * @return ThreeDSecureAuthRes
     */
    public function setValidationTDSApplicable(?bool $validationTDSApplicable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($validationTDSApplicable) && !is_bool($validationTDSApplicable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validationTDSApplicable, true), gettype($validationTDSApplicable)), __LINE__);
        }
        $this->ValidationTDSApplicable = $validationTDSApplicable;

        return $this;
    }

    /**
     * Get ValidationTDSPaReq value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getValidationTDSPaReq(): ?string
    {
        return $this->ValidationTDSPaReq ?? null;
    }

    /**
     * Set ValidationTDSPaReq value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $validationTDSPaReq
     *
     * @return ThreeDSecureAuthRes
     */
    public function setValidationTDSPaReq(?string $validationTDSPaReq = null): self
    {
        // validation for constraint: string
        if (!is_null($validationTDSPaReq) && !is_string($validationTDSPaReq)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validationTDSPaReq, true), gettype($validationTDSPaReq)), __LINE__);
        }
        if (is_null($validationTDSPaReq) || (is_array($validationTDSPaReq) && empty($validationTDSPaReq))) {
            unset($this->ValidationTDSPaReq);
        } else {
            $this->ValidationTDSPaReq = $validationTDSPaReq;
        }

        return $this;
    }
}
