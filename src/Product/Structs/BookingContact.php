<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingContact Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BookingContact
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BookingContact extends AbstractStructBase
{
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $EmailAddress = null;

    /**
     * Constructor method for BookingContact
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $emailAddress
     *
     * @uses BookingContact::setFirstName()
     * @uses BookingContact::setLastName()
     * @uses BookingContact::setEmailAddress()
     */
    public function __construct(?string $firstName = null, ?string $lastName = null, ?string $emailAddress = null)
    {
        $this
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmailAddress($emailAddress);
    }

    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName ?? null;
    }

    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $firstName
     *
     * @return BookingContact
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }

        return $this;
    }

    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->LastName ?? null;
    }

    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $lastName
     *
     * @return BookingContact
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
        }

        return $this;
    }

    /**
     * Get EmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress ?? null;
    }

    /**
     * Set EmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $emailAddress
     *
     * @return BookingContact
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        if (is_null($emailAddress) || (is_array($emailAddress) && empty($emailAddress))) {
            unset($this->EmailAddress);
        } else {
            $this->EmailAddress = $emailAddress;
        }

        return $this;
    }
}
