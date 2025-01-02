<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\Culture;
use Ntvspa\Big\Booking\Enums\DistributionOption;
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
     * The DistributionOption
     *
     * @var string|null
     */
    protected ?string $DistributionOption = null;
    /**
     * The Culture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Culture = null;
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
     * @param string $distributionOption
     * @param string $culture
     * @param string $firstName
     * @param string $lastName
     * @param string $emailAddress
     *
     * @uses BookingContact::setDistributionOption()
     * @uses BookingContact::setCulture()
     * @uses BookingContact::setFirstName()
     * @uses BookingContact::setLastName()
     * @uses BookingContact::setEmailAddress()
     */
    public function __construct(?string $distributionOption = null, ?string $culture = null, ?string $firstName = null, ?string $lastName = null, ?string $emailAddress = null)
    {
        $this
            ->setDistributionOption($distributionOption)
            ->setCulture($culture)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmailAddress($emailAddress);
    }

    /**
     * Get DistributionOption value
     *
     * @return string|null
     */
    public function getDistributionOption(): ?string
    {
        return $this->DistributionOption;
    }

    /**
     * Set DistributionOption value
     *
     * @param string $distributionOption
     *
     * @return BookingContact
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\DistributionOption::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\DistributionOption::valueIsValid()
     */
    public function setDistributionOption(?string $distributionOption = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\DistributionOption::valueIsValid($distributionOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\DistributionOption', is_array($distributionOption) ? implode(', ', $distributionOption) : var_export($distributionOption, true), implode(', ', DistributionOption::getValidValues())), __LINE__);
        }
        $this->DistributionOption = $distributionOption;

        return $this;
    }

    /**
     * Get Culture value
     *
     * @return string|null
     */
    public function getCulture(): ?string
    {
        return $this->Culture;
    }

    /**
     * Set Culture value
     *
     * @param string $culture
     *
     * @return BookingContact
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\Culture::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\Culture::valueIsValid()
     */
    public function setCulture(?string $culture = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\Culture::valueIsValid($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\Culture', is_array($culture) ? implode(', ', $culture) : var_export($culture, true), implode(', ', Culture::getValidValues())), __LINE__);
        }
        $this->Culture = $culture;

        return $this;
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
