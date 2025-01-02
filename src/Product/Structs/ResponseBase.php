<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Product\Arrays\ArrayOfWarning;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseBase Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ResponseBase
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ResponseBase extends AbstractStructBase
{
    /**
     * The Warnings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfWarning|null
     */
    protected ?ArrayOfWarning $Warnings = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;

    /**
     * Constructor method for ResponseBase
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfWarning $warnings
     * @param string                                    $signature
     *
     * @uses ResponseBase::setWarnings()
     * @uses ResponseBase::setSignature()
     */
    public function __construct(?ArrayOfWarning $warnings = null, ?string $signature = null)
    {
        $this
            ->setWarnings($warnings)
            ->setSignature($signature);
    }

    /**
     * Get Warnings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfWarning|null
     */
    public function getWarnings(): ?ArrayOfWarning
    {
        return $this->Warnings ?? null;
    }

    /**
     * Set Warnings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfWarning $warnings
     *
     * @return ResponseBase
     */
    public function setWarnings(?ArrayOfWarning $warnings = null): self
    {
        if (is_null($warnings) || (is_array($warnings) && empty($warnings))) {
            unset($this->Warnings);
        } else {
            $this->Warnings = $warnings;
        }

        return $this;
    }

    /**
     * Get Signature value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature ?? null;
    }

    /**
     * Set Signature value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $signature
     *
     * @return ResponseBase
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        if (is_null($signature) || (is_array($signature) && empty($signature))) {
            unset($this->Signature);
        } else {
            $this->Signature = $signature;
        }

        return $this;
    }
}
