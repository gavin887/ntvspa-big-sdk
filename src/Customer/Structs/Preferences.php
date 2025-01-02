<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use Customer\Arrays\ArrayOfInterest;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\Culture;
use Ntvspa\Big\Customer\Enums\FavoriteContactMethod;
use Ntvspa\Big\Customer\Enums\FixedPhone;
use Ntvspa\Big\Customer\Enums\PreferredSeat;
use Ntvspa\Big\Customer\Enums\Profession;
use Ntvspa\Big\Customer\Enums\ProfessionalSector;
use Ntvspa\Big\Customer\Enums\TravelReason;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Preferences Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Preferences
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Preferences extends AbstractStructBase
{
    /**
     * The FixedPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FixedPhone = null;
    /**
     * The FixedPhoneType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FixedPhoneType = null;
    /**
     * The FavoriteContactMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FavoriteContactMethod = null;
    /**
     * The Profession
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Profession = null;
    /**
     * The ProfessionalSector
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProfessionalSector = null;
    /**
     * The InterestsType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfInterest|null
     */
    protected ?ArrayOfInterest $InterestsType = null;
    /**
     * The TravelReason
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TravelReason = null;
    /**
     * The Culture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Culture = null;
    /**
     * The PreferredSeat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PreferredSeat = null;

    /**
     * Constructor method for Preferences
     *
     * @param string                                      $fixedPhone
     * @param string                                      $fixedPhoneType
     * @param string                                      $favoriteContactMethod
     * @param string                                      $profession
     * @param string                                      $professionalSector
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfInterest $interestsType
     * @param string                                      $travelReason
     * @param string                                      $culture
     * @param string                                      $preferredSeat
     *
     * @uses Preferences::setFixedPhone()
     * @uses Preferences::setFixedPhoneType()
     * @uses Preferences::setFavoriteContactMethod()
     * @uses Preferences::setProfession()
     * @uses Preferences::setProfessionalSector()
     * @uses Preferences::setInterestsType()
     * @uses Preferences::setTravelReason()
     * @uses Preferences::setCulture()
     * @uses Preferences::setPreferredSeat()
     */
    public function __construct(?string $fixedPhone = null, ?string $fixedPhoneType = null, ?string $favoriteContactMethod = null, ?string $profession = null, ?string $professionalSector = null, ?ArrayOfInterest $interestsType = null, ?string $travelReason = null, ?string $culture = null, ?string $preferredSeat = null)
    {
        $this
            ->setFixedPhone($fixedPhone)
            ->setFixedPhoneType($fixedPhoneType)
            ->setFavoriteContactMethod($favoriteContactMethod)
            ->setProfession($profession)
            ->setProfessionalSector($professionalSector)
            ->setInterestsType($interestsType)
            ->setTravelReason($travelReason)
            ->setCulture($culture)
            ->setPreferredSeat($preferredSeat);
    }

    /**
     * Get FixedPhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFixedPhone(): ?string
    {
        return $this->FixedPhone ?? null;
    }

    /**
     * Set FixedPhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fixedPhone
     *
     * @return Preferences
     */
    public function setFixedPhone(?string $fixedPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($fixedPhone) && !is_string($fixedPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fixedPhone, true), gettype($fixedPhone)), __LINE__);
        }
        if (is_null($fixedPhone) || (is_array($fixedPhone) && empty($fixedPhone))) {
            unset($this->FixedPhone);
        } else {
            $this->FixedPhone = $fixedPhone;
        }

        return $this;
    }

    /**
     * Get FixedPhoneType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFixedPhoneType(): ?string
    {
        return $this->FixedPhoneType ?? null;
    }

    /**
     * Set FixedPhoneType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fixedPhoneType
     *
     * @return Preferences
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\FixedPhone::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\FixedPhone::valueIsValid()
     */
    public function setFixedPhoneType(?string $fixedPhoneType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\FixedPhone::valueIsValid($fixedPhoneType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\FixedPhone', is_array($fixedPhoneType) ? implode(', ', $fixedPhoneType) : var_export($fixedPhoneType, true), implode(', ', FixedPhone::getValidValues())), __LINE__);
        }
        if (is_null($fixedPhoneType) || (is_array($fixedPhoneType) && empty($fixedPhoneType))) {
            unset($this->FixedPhoneType);
        } else {
            $this->FixedPhoneType = $fixedPhoneType;
        }

        return $this;
    }

    /**
     * Get FavoriteContactMethod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFavoriteContactMethod(): ?string
    {
        return $this->FavoriteContactMethod ?? null;
    }

    /**
     * Set FavoriteContactMethod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $favoriteContactMethod
     *
     * @return Preferences
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\FavoriteContactMethod::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\FavoriteContactMethod::valueIsValid()
     */
    public function setFavoriteContactMethod(?string $favoriteContactMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\FavoriteContactMethod::valueIsValid($favoriteContactMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\FavoriteContactMethod', is_array($favoriteContactMethod) ? implode(', ', $favoriteContactMethod) : var_export($favoriteContactMethod, true), implode(', ', FavoriteContactMethod::getValidValues())), __LINE__);
        }
        if (is_null($favoriteContactMethod) || (is_array($favoriteContactMethod) && empty($favoriteContactMethod))) {
            unset($this->FavoriteContactMethod);
        } else {
            $this->FavoriteContactMethod = $favoriteContactMethod;
        }

        return $this;
    }

    /**
     * Get Profession value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProfession(): ?string
    {
        return $this->Profession ?? null;
    }

    /**
     * Set Profession value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $profession
     *
     * @return Preferences
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Profession::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Profession::valueIsValid()
     */
    public function setProfession(?string $profession = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Profession::valueIsValid($profession)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Profession', is_array($profession) ? implode(', ', $profession) : var_export($profession, true), implode(', ', Profession::getValidValues())), __LINE__);
        }
        if (is_null($profession) || (is_array($profession) && empty($profession))) {
            unset($this->Profession);
        } else {
            $this->Profession = $profession;
        }

        return $this;
    }

    /**
     * Get ProfessionalSector value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProfessionalSector(): ?string
    {
        return $this->ProfessionalSector ?? null;
    }

    /**
     * Set ProfessionalSector value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $professionalSector
     *
     * @return Preferences
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\ProfessionalSector::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\ProfessionalSector::valueIsValid()
     */
    public function setProfessionalSector(?string $professionalSector = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\ProfessionalSector::valueIsValid($professionalSector)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\ProfessionalSector', is_array($professionalSector) ? implode(', ', $professionalSector) : var_export($professionalSector, true), implode(', ', ProfessionalSector::getValidValues())), __LINE__);
        }
        if (is_null($professionalSector) || (is_array($professionalSector) && empty($professionalSector))) {
            unset($this->ProfessionalSector);
        } else {
            $this->ProfessionalSector = $professionalSector;
        }

        return $this;
    }

    /**
     * Get InterestsType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfInterest|null
     */
    public function getInterestsType(): ?ArrayOfInterest
    {
        return $this->InterestsType ?? null;
    }

    /**
     * Set InterestsType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfInterest $interestsType
     *
     * @return Preferences
     */
    public function setInterestsType(?ArrayOfInterest $interestsType = null): self
    {
        if (is_null($interestsType) || (is_array($interestsType) && empty($interestsType))) {
            unset($this->InterestsType);
        } else {
            $this->InterestsType = $interestsType;
        }

        return $this;
    }

    /**
     * Get TravelReason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTravelReason(): ?string
    {
        return $this->TravelReason ?? null;
    }

    /**
     * Set TravelReason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $travelReason
     *
     * @return Preferences
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\TravelReason::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\TravelReason::valueIsValid()
     */
    public function setTravelReason(?string $travelReason = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\TravelReason::valueIsValid($travelReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\TravelReason', is_array($travelReason) ? implode(', ', $travelReason) : var_export($travelReason, true), implode(', ', TravelReason::getValidValues())), __LINE__);
        }
        if (is_null($travelReason) || (is_array($travelReason) && empty($travelReason))) {
            unset($this->TravelReason);
        } else {
            $this->TravelReason = $travelReason;
        }

        return $this;
    }

    /**
     * Get Culture value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCulture(): ?string
    {
        return $this->Culture ?? null;
    }

    /**
     * Set Culture value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $culture
     *
     * @return Preferences
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Culture::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Culture::valueIsValid()
     */
    public function setCulture(?string $culture = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Culture::valueIsValid($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Culture', is_array($culture) ? implode(', ', $culture) : var_export($culture, true), implode(', ', Culture::getValidValues())), __LINE__);
        }
        if (is_null($culture) || (is_array($culture) && empty($culture))) {
            unset($this->Culture);
        } else {
            $this->Culture = $culture;
        }

        return $this;
    }

    /**
     * Get PreferredSeat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPreferredSeat(): ?string
    {
        return $this->PreferredSeat ?? null;
    }

    /**
     * Set PreferredSeat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $preferredSeat
     *
     * @return Preferences
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\PreferredSeat::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\PreferredSeat::valueIsValid()
     */
    public function setPreferredSeat(?string $preferredSeat = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\PreferredSeat::valueIsValid($preferredSeat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\PreferredSeat', is_array($preferredSeat) ? implode(', ', $preferredSeat) : var_export($preferredSeat, true), implode(', ', PreferredSeat::getValidValues())), __LINE__);
        }
        if (is_null($preferredSeat) || (is_array($preferredSeat) && empty($preferredSeat))) {
            unset($this->PreferredSeat);
        } else {
            $this->PreferredSeat = $preferredSeat;
        }

        return $this;
    }
}
