<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EquipmentProperty Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EquipmentProperty
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class EquipmentProperty extends AbstractStructBase
{
    /**
     * The TypeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TypeCode = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Value = null;

    /**
     * Constructor method for EquipmentProperty
     *
     * @param string $typeCode
     * @param string $value
     *
     * @uses EquipmentProperty::setTypeCode()
     * @uses EquipmentProperty::setValue()
     */
    public function __construct(?string $typeCode = null, ?string $value = null)
    {
        $this
            ->setTypeCode($typeCode)
            ->setValue($value);
    }

    /**
     * Get TypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTypeCode(): ?string
    {
        return $this->TypeCode ?? null;
    }

    /**
     * Set TypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $typeCode
     *
     * @return EquipmentProperty
     */
    public function setTypeCode(?string $typeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($typeCode) && !is_string($typeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeCode, true), gettype($typeCode)), __LINE__);
        }
        if (is_null($typeCode) || (is_array($typeCode) && empty($typeCode))) {
            unset($this->TypeCode);
        } else {
            $this->TypeCode = $typeCode;
        }

        return $this;
    }

    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value ?? null;
    }

    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $value
     *
     * @return EquipmentProperty
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }

        return $this;
    }
}
