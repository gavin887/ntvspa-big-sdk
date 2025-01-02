<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentField Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PaymentField
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PaymentField extends AbstractStructBase
{
    /**
     * The FieldName
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FieldName = null;
    /**
     * The FieldValue
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FieldValue = null;

    /**
     * Constructor method for PaymentField
     *
     * @param string $fieldName
     * @param string $fieldValue
     *
     * @uses PaymentField::setFieldName()
     * @uses PaymentField::setFieldValue()
     */
    public function __construct(?string $fieldName = null, ?string $fieldValue = null)
    {
        $this
            ->setFieldName($fieldName)
            ->setFieldValue($fieldValue);
    }

    /**
     * Get FieldName value
     *
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->FieldName;
    }

    /**
     * Set FieldName value
     *
     * @param string $fieldName
     *
     * @return PaymentField
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->FieldName = $fieldName;

        return $this;
    }

    /**
     * Get FieldValue value
     *
     * @return string|null
     */
    public function getFieldValue(): ?string
    {
        return $this->FieldValue;
    }

    /**
     * Set FieldValue value
     *
     * @param string $fieldValue
     *
     * @return PaymentField
     */
    public function setFieldValue(?string $fieldValue = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldValue) && !is_string($fieldValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldValue, true), gettype($fieldValue)), __LINE__);
        }
        $this->FieldValue = $fieldValue;

        return $this;
    }
}
