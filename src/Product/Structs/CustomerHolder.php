<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerHolder Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CustomerHolder
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CustomerHolder extends AbstractStructBase
{
    /**
     * The AssetID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AssetID = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The CustomerIdHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerIdHolder = null;
    /**
     * The EmailHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $EmailHolder = null;
    /**
     * The FirstNameHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FirstNameHolder = null;
    /**
     * The LastNameHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LastNameHolder = null;

    /**
     * Constructor method for CustomerHolder
     *
     * @param string $assetID
     * @param string $email
     * @param string $customerIdHolder
     * @param string $emailHolder
     * @param string $firstNameHolder
     * @param string $lastNameHolder
     *
     * @uses CustomerHolder::setAssetID()
     * @uses CustomerHolder::setEmail()
     * @uses CustomerHolder::setCustomerIdHolder()
     * @uses CustomerHolder::setEmailHolder()
     * @uses CustomerHolder::setFirstNameHolder()
     * @uses CustomerHolder::setLastNameHolder()
     */
    public function __construct(?string $assetID = null, ?string $email = null, ?string $customerIdHolder = null, ?string $emailHolder = null, ?string $firstNameHolder = null, ?string $lastNameHolder = null)
    {
        $this
            ->setAssetID($assetID)
            ->setEmail($email)
            ->setCustomerIdHolder($customerIdHolder)
            ->setEmailHolder($emailHolder)
            ->setFirstNameHolder($firstNameHolder)
            ->setLastNameHolder($lastNameHolder);
    }

    /**
     * Get AssetID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAssetID(): ?string
    {
        return $this->AssetID ?? null;
    }

    /**
     * Set AssetID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $assetID
     *
     * @return CustomerHolder
     */
    public function setAssetID(?string $assetID = null): self
    {
        // validation for constraint: string
        if (!is_null($assetID) && !is_string($assetID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assetID, true), gettype($assetID)), __LINE__);
        }
        if (is_null($assetID) || (is_array($assetID) && empty($assetID))) {
            unset($this->AssetID);
        } else {
            $this->AssetID = $assetID;
        }

        return $this;
    }

    /**
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $email
     *
     * @return CustomerHolder
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }

        return $this;
    }

    /**
     * Get CustomerIdHolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerIdHolder(): ?string
    {
        return $this->CustomerIdHolder ?? null;
    }

    /**
     * Set CustomerIdHolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerIdHolder
     *
     * @return CustomerHolder
     */
    public function setCustomerIdHolder(?string $customerIdHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($customerIdHolder) && !is_string($customerIdHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerIdHolder, true), gettype($customerIdHolder)), __LINE__);
        }
        if (is_null($customerIdHolder) || (is_array($customerIdHolder) && empty($customerIdHolder))) {
            unset($this->CustomerIdHolder);
        } else {
            $this->CustomerIdHolder = $customerIdHolder;
        }

        return $this;
    }

    /**
     * Get EmailHolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmailHolder(): ?string
    {
        return $this->EmailHolder ?? null;
    }

    /**
     * Set EmailHolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $emailHolder
     *
     * @return CustomerHolder
     */
    public function setEmailHolder(?string $emailHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($emailHolder) && !is_string($emailHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailHolder, true), gettype($emailHolder)), __LINE__);
        }
        if (is_null($emailHolder) || (is_array($emailHolder) && empty($emailHolder))) {
            unset($this->EmailHolder);
        } else {
            $this->EmailHolder = $emailHolder;
        }

        return $this;
    }

    /**
     * Get FirstNameHolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFirstNameHolder(): ?string
    {
        return $this->FirstNameHolder ?? null;
    }

    /**
     * Set FirstNameHolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $firstNameHolder
     *
     * @return CustomerHolder
     */
    public function setFirstNameHolder(?string $firstNameHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($firstNameHolder) && !is_string($firstNameHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstNameHolder, true), gettype($firstNameHolder)), __LINE__);
        }
        if (is_null($firstNameHolder) || (is_array($firstNameHolder) && empty($firstNameHolder))) {
            unset($this->FirstNameHolder);
        } else {
            $this->FirstNameHolder = $firstNameHolder;
        }

        return $this;
    }

    /**
     * Get LastNameHolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLastNameHolder(): ?string
    {
        return $this->LastNameHolder ?? null;
    }

    /**
     * Set LastNameHolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $lastNameHolder
     *
     * @return CustomerHolder
     */
    public function setLastNameHolder(?string $lastNameHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($lastNameHolder) && !is_string($lastNameHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastNameHolder, true), gettype($lastNameHolder)), __LINE__);
        }
        if (is_null($lastNameHolder) || (is_array($lastNameHolder) && empty($lastNameHolder))) {
            unset($this->LastNameHolder);
        } else {
            $this->LastNameHolder = $lastNameHolder;
        }

        return $this;
    }
}
