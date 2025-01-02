<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SSRState;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pet Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Pet
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Pet extends AbstractStructBase
{
    /**
     * The PetBase
     *
     * @var string|null
     */
    protected ?string $PetBase = null;
    /**
     * The PetMiniKit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PetMiniKit = null;
    /**
     * The JourneySellKey
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $JourneySellKey = null;

    /**
     * Constructor method for Pet
     *
     * @param string $petBase
     * @param string $petMiniKit
     * @param string $journeySellKey
     *
     * @uses Pet::setPetBase()
     * @uses Pet::setPetMiniKit()
     * @uses Pet::setJourneySellKey()
     */
    public function __construct(?string $petBase = null, ?string $petMiniKit = null, ?string $journeySellKey = null)
    {
        $this
            ->setPetBase($petBase)
            ->setPetMiniKit($petMiniKit)
            ->setJourneySellKey($journeySellKey);
    }

    /**
     * Get PetBase value
     *
     * @return string|null
     */
    public function getPetBase(): ?string
    {
        return $this->PetBase;
    }

    /**
     * Set PetBase value
     *
     * @param string $petBase
     *
     * @return Pet
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SSRState::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SSRState::valueIsValid()
     */
    public function setPetBase(?string $petBase = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SSRState::valueIsValid($petBase)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SSRState', is_array($petBase) ? implode(', ', $petBase) : var_export($petBase, true), implode(', ', SSRState::getValidValues())), __LINE__);
        }
        $this->PetBase = $petBase;

        return $this;
    }

    /**
     * Get PetMiniKit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPetMiniKit(): ?string
    {
        return $this->PetMiniKit ?? null;
    }

    /**
     * Set PetMiniKit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $petMiniKit
     *
     * @return Pet
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SSRState::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SSRState::valueIsValid()
     */
    public function setPetMiniKit(?string $petMiniKit = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SSRState::valueIsValid($petMiniKit)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SSRState', is_array($petMiniKit) ? implode(', ', $petMiniKit) : var_export($petMiniKit, true), implode(', ', SSRState::getValidValues())), __LINE__);
        }
        if (is_null($petMiniKit) || (is_array($petMiniKit) && empty($petMiniKit))) {
            unset($this->PetMiniKit);
        } else {
            $this->PetMiniKit = $petMiniKit;
        }

        return $this;
    }

    /**
     * Get JourneySellKey value
     *
     * @return string|null
     */
    public function getJourneySellKey(): ?string
    {
        return $this->JourneySellKey;
    }

    /**
     * Set JourneySellKey value
     *
     * @param string $journeySellKey
     *
     * @return Pet
     */
    public function setJourneySellKey(?string $journeySellKey = null): self
    {
        // validation for constraint: string
        if (!is_null($journeySellKey) && !is_string($journeySellKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($journeySellKey, true), gettype($journeySellKey)), __LINE__);
        }
        $this->JourneySellKey = $journeySellKey;

        return $this;
    }
}
