<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\AddressType;
use Ntvspa\Big\Customer\Enums\NationEnum;
use Ntvspa\Big\Customer\Enums\ProvinceEnum;
use Ntvspa\Big\Customer\Enums\StreetTypeEnum;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Address
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Address extends AbstractStructBase
{
    /**
     * The Nation
     *
     * @var string|null
     */
    protected ?string $Nation = null;
    /**
     * The Province
     *
     * @var string|null
     */
    protected ?string $Province = null;
    /**
     * The StreetType
     *
     * @var string|null
     */
    protected ?string $StreetType = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The StreetName
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $StreetName = null;
    /**
     * The HouseNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $HouseNumber = null;
    /**
     * The ZipCode
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ZipCode = null;
    /**
     * The AddressType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AddressType = null;

    /**
     * Constructor method for Address
     *
     * @param string $nation
     * @param string $province
     * @param string $streetType
     * @param string $city
     * @param string $streetName
     * @param string $houseNumber
     * @param string $zipCode
     * @param string $addressType
     *
     * @uses Address::setNation()
     * @uses Address::setProvince()
     * @uses Address::setStreetType()
     * @uses Address::setCity()
     * @uses Address::setStreetName()
     * @uses Address::setHouseNumber()
     * @uses Address::setZipCode()
     * @uses Address::setAddressType()
     */
    public function __construct(?string $nation = null, ?string $province = null, ?string $streetType = null, ?string $city = null, ?string $streetName = null, ?string $houseNumber = null, ?string $zipCode = null, ?string $addressType = null)
    {
        $this
            ->setNation($nation)
            ->setProvince($province)
            ->setStreetType($streetType)
            ->setCity($city)
            ->setStreetName($streetName)
            ->setHouseNumber($houseNumber)
            ->setZipCode($zipCode)
            ->setAddressType($addressType);
    }

    /**
     * Get Nation value
     *
     * @return string|null
     */
    public function getNation(): ?string
    {
        return $this->Nation;
    }

    /**
     * Set Nation value
     *
     * @param string $nation
     *
     * @return Address
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\NationEnum::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\NationEnum::valueIsValid()
     */
    public function setNation(?string $nation = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\NationEnum::valueIsValid($nation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\NationEnum', is_array($nation) ? implode(', ', $nation) : var_export($nation, true), implode(', ', NationEnum::getValidValues())), __LINE__);
        }
        $this->Nation = $nation;

        return $this;
    }

    /**
     * Get Province value
     *
     * @return string|null
     */
    public function getProvince(): ?string
    {
        return $this->Province;
    }

    /**
     * Set Province value
     *
     * @param string $province
     *
     * @return Address
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\ProvinceEnum::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\ProvinceEnum::valueIsValid()
     */
    public function setProvince(?string $province = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\ProvinceEnum::valueIsValid($province)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\ProvinceEnum', is_array($province) ? implode(', ', $province) : var_export($province, true), implode(', ', ProvinceEnum::getValidValues())), __LINE__);
        }
        $this->Province = $province;

        return $this;
    }

    /**
     * Get StreetType value
     *
     * @return string|null
     */
    public function getStreetType(): ?string
    {
        return $this->StreetType;
    }

    /**
     * Set StreetType value
     *
     * @param string $streetType
     *
     * @return Address
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\StreetTypeEnum::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\StreetTypeEnum::valueIsValid()
     */
    public function setStreetType(?string $streetType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\StreetTypeEnum::valueIsValid($streetType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\StreetTypeEnum', is_array($streetType) ? implode(', ', $streetType) : var_export($streetType, true), implode(', ', StreetTypeEnum::getValidValues())), __LINE__);
        }
        $this->StreetType = $streetType;

        return $this;
    }

    /**
     * Get City value
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->City;
    }

    /**
     * Set City value
     *
     * @param string $city
     *
     * @return Address
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->City = $city;

        return $this;
    }

    /**
     * Get StreetName value
     *
     * @return string|null
     */
    public function getStreetName(): ?string
    {
        return $this->StreetName;
    }

    /**
     * Set StreetName value
     *
     * @param string $streetName
     *
     * @return Address
     */
    public function setStreetName(?string $streetName = null): self
    {
        // validation for constraint: string
        if (!is_null($streetName) && !is_string($streetName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetName, true), gettype($streetName)), __LINE__);
        }
        $this->StreetName = $streetName;

        return $this;
    }

    /**
     * Get HouseNumber value
     *
     * @return string|null
     */
    public function getHouseNumber(): ?string
    {
        return $this->HouseNumber;
    }

    /**
     * Set HouseNumber value
     *
     * @param string $houseNumber
     *
     * @return Address
     */
    public function setHouseNumber(?string $houseNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($houseNumber) && !is_string($houseNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($houseNumber, true), gettype($houseNumber)), __LINE__);
        }
        $this->HouseNumber = $houseNumber;

        return $this;
    }

    /**
     * Get ZipCode value
     *
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->ZipCode;
    }

    /**
     * Set ZipCode value
     *
     * @param string $zipCode
     *
     * @return Address
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->ZipCode = $zipCode;

        return $this;
    }

    /**
     * Get AddressType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAddressType(): ?string
    {
        return $this->AddressType ?? null;
    }

    /**
     * Set AddressType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $addressType
     *
     * @return Address
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\AddressType::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\AddressType::valueIsValid()
     */
    public function setAddressType(?string $addressType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\AddressType::valueIsValid($addressType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\AddressType', is_array($addressType) ? implode(', ', $addressType) : var_export($addressType, true), implode(', ', AddressType::getValidValues())), __LINE__);
        }
        if (is_null($addressType) || (is_array($addressType) && empty($addressType))) {
            unset($this->AddressType);
        } else {
            $this->AddressType = $addressType;
        }

        return $this;
    }
}
