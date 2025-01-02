<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThreeDSecureAcsResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ThreeDSecureAcsResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ThreeDSecureAcsResponse extends AbstractStructBase
{
    /**
     * The PaRes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaRes = null;
    /**
     * The MD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $MD = null;

    /**
     * Constructor method for ThreeDSecureAcsResponse
     *
     * @param string $paRes
     * @param string $mD
     *
     * @uses ThreeDSecureAcsResponse::setPaRes()
     * @uses ThreeDSecureAcsResponse::setMD()
     */
    public function __construct(?string $paRes = null, ?string $mD = null)
    {
        $this
            ->setPaRes($paRes)
            ->setMD($mD);
    }

    /**
     * Get PaRes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPaRes(): ?string
    {
        return $this->PaRes ?? null;
    }

    /**
     * Set PaRes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $paRes
     *
     * @return ThreeDSecureAcsResponse
     */
    public function setPaRes(?string $paRes = null): self
    {
        // validation for constraint: string
        if (!is_null($paRes) && !is_string($paRes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paRes, true), gettype($paRes)), __LINE__);
        }
        if (is_null($paRes) || (is_array($paRes) && empty($paRes))) {
            unset($this->PaRes);
        } else {
            $this->PaRes = $paRes;
        }

        return $this;
    }

    /**
     * Get MD value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMD(): ?string
    {
        return $this->MD ?? null;
    }

    /**
     * Set MD value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $mD
     *
     * @return ThreeDSecureAcsResponse
     */
    public function setMD(?string $mD = null): self
    {
        // validation for constraint: string
        if (!is_null($mD) && !is_string($mD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mD, true), gettype($mD)), __LINE__);
        }
        if (is_null($mD) || (is_array($mD) && empty($mD))) {
            unset($this->MD);
        } else {
            $this->MD = $mD;
        }

        return $this;
    }
}
