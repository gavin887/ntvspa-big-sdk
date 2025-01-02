<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingNote Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BookingNote
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BookingNote extends AbstractStructBase
{
    /**
     * The CostCentre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CostCentre = null;
    /**
     * The RegistrationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RegistrationNumber = null;
    /**
     * The ClientAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ClientAccount = null;
    /**
     * The Field4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Field4 = null;
    /**
     * The Field5
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Field5 = null;
    /**
     * The Field6
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Field6 = null;
    /**
     * The Field7
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Field7 = null;
    /**
     * The Field8
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Field8 = null;
    /**
     * The Field9
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Field9 = null;
    /**
     * The Field10
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Field10 = null;

    /**
     * Constructor method for BookingNote
     *
     * @param string $costCentre
     * @param string $registrationNumber
     * @param string $clientAccount
     * @param string $field4
     * @param string $field5
     * @param string $field6
     * @param string $field7
     * @param string $field8
     * @param string $field9
     * @param string $field10
     *
     * @uses BookingNote::setCostCentre()
     * @uses BookingNote::setRegistrationNumber()
     * @uses BookingNote::setClientAccount()
     * @uses BookingNote::setField4()
     * @uses BookingNote::setField5()
     * @uses BookingNote::setField6()
     * @uses BookingNote::setField7()
     * @uses BookingNote::setField8()
     * @uses BookingNote::setField9()
     * @uses BookingNote::setField10()
     */
    public function __construct(?string $costCentre = null, ?string $registrationNumber = null, ?string $clientAccount = null, ?string $field4 = null, ?string $field5 = null, ?string $field6 = null, ?string $field7 = null, ?string $field8 = null, ?string $field9 = null, ?string $field10 = null)
    {
        $this
            ->setCostCentre($costCentre)
            ->setRegistrationNumber($registrationNumber)
            ->setClientAccount($clientAccount)
            ->setField4($field4)
            ->setField5($field5)
            ->setField6($field6)
            ->setField7($field7)
            ->setField8($field8)
            ->setField9($field9)
            ->setField10($field10);
    }

    /**
     * Get CostCentre value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->CostCentre ?? null;
    }

    /**
     * Set CostCentre value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $costCentre
     *
     * @return BookingNote
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        if (is_null($costCentre) || (is_array($costCentre) && empty($costCentre))) {
            unset($this->CostCentre);
        } else {
            $this->CostCentre = $costCentre;
        }

        return $this;
    }

    /**
     * Get RegistrationNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRegistrationNumber(): ?string
    {
        return $this->RegistrationNumber ?? null;
    }

    /**
     * Set RegistrationNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $registrationNumber
     *
     * @return BookingNote
     */
    public function setRegistrationNumber(?string $registrationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($registrationNumber) && !is_string($registrationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationNumber, true), gettype($registrationNumber)), __LINE__);
        }
        if (is_null($registrationNumber) || (is_array($registrationNumber) && empty($registrationNumber))) {
            unset($this->RegistrationNumber);
        } else {
            $this->RegistrationNumber = $registrationNumber;
        }

        return $this;
    }

    /**
     * Get ClientAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getClientAccount(): ?string
    {
        return $this->ClientAccount ?? null;
    }

    /**
     * Set ClientAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $clientAccount
     *
     * @return BookingNote
     */
    public function setClientAccount(?string $clientAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($clientAccount) && !is_string($clientAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientAccount, true), gettype($clientAccount)), __LINE__);
        }
        if (is_null($clientAccount) || (is_array($clientAccount) && empty($clientAccount))) {
            unset($this->ClientAccount);
        } else {
            $this->ClientAccount = $clientAccount;
        }

        return $this;
    }

    /**
     * Get Field4 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getField4(): ?string
    {
        return $this->Field4 ?? null;
    }

    /**
     * Set Field4 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $field4
     *
     * @return BookingNote
     */
    public function setField4(?string $field4 = null): self
    {
        // validation for constraint: string
        if (!is_null($field4) && !is_string($field4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field4, true), gettype($field4)), __LINE__);
        }
        if (is_null($field4) || (is_array($field4) && empty($field4))) {
            unset($this->Field4);
        } else {
            $this->Field4 = $field4;
        }

        return $this;
    }

    /**
     * Get Field5 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getField5(): ?string
    {
        return $this->Field5 ?? null;
    }

    /**
     * Set Field5 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $field5
     *
     * @return BookingNote
     */
    public function setField5(?string $field5 = null): self
    {
        // validation for constraint: string
        if (!is_null($field5) && !is_string($field5)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field5, true), gettype($field5)), __LINE__);
        }
        if (is_null($field5) || (is_array($field5) && empty($field5))) {
            unset($this->Field5);
        } else {
            $this->Field5 = $field5;
        }

        return $this;
    }

    /**
     * Get Field6 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getField6(): ?string
    {
        return $this->Field6 ?? null;
    }

    /**
     * Set Field6 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $field6
     *
     * @return BookingNote
     */
    public function setField6(?string $field6 = null): self
    {
        // validation for constraint: string
        if (!is_null($field6) && !is_string($field6)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field6, true), gettype($field6)), __LINE__);
        }
        if (is_null($field6) || (is_array($field6) && empty($field6))) {
            unset($this->Field6);
        } else {
            $this->Field6 = $field6;
        }

        return $this;
    }

    /**
     * Get Field7 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getField7(): ?string
    {
        return $this->Field7 ?? null;
    }

    /**
     * Set Field7 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $field7
     *
     * @return BookingNote
     */
    public function setField7(?string $field7 = null): self
    {
        // validation for constraint: string
        if (!is_null($field7) && !is_string($field7)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field7, true), gettype($field7)), __LINE__);
        }
        if (is_null($field7) || (is_array($field7) && empty($field7))) {
            unset($this->Field7);
        } else {
            $this->Field7 = $field7;
        }

        return $this;
    }

    /**
     * Get Field8 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getField8(): ?string
    {
        return $this->Field8 ?? null;
    }

    /**
     * Set Field8 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $field8
     *
     * @return BookingNote
     */
    public function setField8(?string $field8 = null): self
    {
        // validation for constraint: string
        if (!is_null($field8) && !is_string($field8)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field8, true), gettype($field8)), __LINE__);
        }
        if (is_null($field8) || (is_array($field8) && empty($field8))) {
            unset($this->Field8);
        } else {
            $this->Field8 = $field8;
        }

        return $this;
    }

    /**
     * Get Field9 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getField9(): ?string
    {
        return $this->Field9 ?? null;
    }

    /**
     * Set Field9 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $field9
     *
     * @return BookingNote
     */
    public function setField9(?string $field9 = null): self
    {
        // validation for constraint: string
        if (!is_null($field9) && !is_string($field9)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field9, true), gettype($field9)), __LINE__);
        }
        if (is_null($field9) || (is_array($field9) && empty($field9))) {
            unset($this->Field9);
        } else {
            $this->Field9 = $field9;
        }

        return $this;
    }

    /**
     * Get Field10 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getField10(): ?string
    {
        return $this->Field10 ?? null;
    }

    /**
     * Set Field10 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $field10
     *
     * @return BookingNote
     */
    public function setField10(?string $field10 = null): self
    {
        // validation for constraint: string
        if (!is_null($field10) && !is_string($field10)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field10, true), gettype($field10)), __LINE__);
        }
        if (is_null($field10) || (is_array($field10) && empty($field10))) {
            unset($this->Field10);
        } else {
            $this->Field10 = $field10;
        }

        return $this;
    }
}
