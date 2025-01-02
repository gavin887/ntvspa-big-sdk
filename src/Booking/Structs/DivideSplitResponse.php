<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for DivideSplitResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q34:DivideSplitResponse | tns:DivideSplitResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DivideSplitResponse extends ResponseBase
{
    /**
     * The RecordLocator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RecordLocator = null;

    /**
     * Constructor method for DivideSplitResponse
     *
     * @param string $recordLocator
     *
     * @uses DivideSplitResponse::setRecordLocator()
     */
    public function __construct(?string $recordLocator = null)
    {
        $this
            ->setRecordLocator($recordLocator);
    }

    /**
     * Get RecordLocator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRecordLocator(): ?string
    {
        return $this->RecordLocator ?? null;
    }

    /**
     * Set RecordLocator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $recordLocator
     *
     * @return DivideSplitResponse
     */
    public function setRecordLocator(?string $recordLocator = null): self
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordLocator, true), gettype($recordLocator)), __LINE__);
        }
        if (is_null($recordLocator) || (is_array($recordLocator) && empty($recordLocator))) {
            unset($this->RecordLocator);
        } else {
            $this->RecordLocator = $recordLocator;
        }

        return $this;
    }
}
