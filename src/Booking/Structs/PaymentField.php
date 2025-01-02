<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

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
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FieldName = null;
    /**
     * The FieldValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->FieldName ?? null;
    }

    /**
     * Set FieldName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
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
        if (is_null($fieldName) || (is_array($fieldName) && empty($fieldName))) {
            unset($this->FieldName);
        } else {
            $this->FieldName = $fieldName;
        }

        return $this;
    }

    /**
     * Get FieldValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFieldValue(): ?string
    {
        return $this->FieldValue ?? null;
    }

    /**
     * Set FieldValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
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
        if (is_null($fieldValue) || (is_array($fieldValue) && empty($fieldValue))) {
            unset($this->FieldValue);
        } else {
            $this->FieldValue = $fieldValue;
        }

        return $this;
    }
}
