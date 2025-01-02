<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfPet;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PetData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PetData
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PetData extends AbstractStructBase
{
    /**
     * The Pets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfPet|null
     */
    protected ?ArrayOfPet $Pets = null;
    /**
     * The AmountPet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var float|null
     */
    protected ?float $AmountPet = null;
    /**
     * The AmountPetPetMiniKit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var float|null
     */
    protected ?float $AmountPetPetMiniKit = null;
    /**
     * The SelectedPet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $SelectedPet = null;
    /**
     * The SelectedPetMiniKit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $SelectedPetMiniKit = null;

    /**
     * Constructor method for PetData
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPet $pets
     * @param float                                 $amountPet
     * @param float                                 $amountPetPetMiniKit
     * @param bool                                  $selectedPet
     * @param bool                                  $selectedPetMiniKit
     *
     * @uses PetData::setPets()
     * @uses PetData::setAmountPet()
     * @uses PetData::setAmountPetPetMiniKit()
     * @uses PetData::setSelectedPet()
     * @uses PetData::setSelectedPetMiniKit()
     */
    public function __construct(?ArrayOfPet $pets = null, ?float $amountPet = null, ?float $amountPetPetMiniKit = null, ?bool $selectedPet = null, ?bool $selectedPetMiniKit = null)
    {
        $this
            ->setPets($pets)
            ->setAmountPet($amountPet)
            ->setAmountPetPetMiniKit($amountPetPetMiniKit)
            ->setSelectedPet($selectedPet)
            ->setSelectedPetMiniKit($selectedPetMiniKit);
    }

    /**
     * Get Pets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfPet|null
     */
    public function getPets(): ?ArrayOfPet
    {
        return $this->Pets ?? null;
    }

    /**
     * Set Pets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPet $pets
     *
     * @return PetData
     */
    public function setPets(?ArrayOfPet $pets = null): self
    {
        if (is_null($pets) || (is_array($pets) && empty($pets))) {
            unset($this->Pets);
        } else {
            $this->Pets = $pets;
        }

        return $this;
    }

    /**
     * Get AmountPet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return float|null
     */
    public function getAmountPet(): ?float
    {
        return $this->AmountPet ?? null;
    }

    /**
     * Set AmountPet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param float $amountPet
     *
     * @return PetData
     */
    public function setAmountPet(?float $amountPet = null): self
    {
        // validation for constraint: float
        if (!is_null($amountPet) && !(is_float($amountPet) || is_numeric($amountPet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountPet, true), gettype($amountPet)), __LINE__);
        }
        if (is_null($amountPet) || (is_array($amountPet) && empty($amountPet))) {
            unset($this->AmountPet);
        } else {
            $this->AmountPet = $amountPet;
        }

        return $this;
    }

    /**
     * Get AmountPetPetMiniKit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return float|null
     */
    public function getAmountPetPetMiniKit(): ?float
    {
        return $this->AmountPetPetMiniKit ?? null;
    }

    /**
     * Set AmountPetPetMiniKit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param float $amountPetPetMiniKit
     *
     * @return PetData
     */
    public function setAmountPetPetMiniKit(?float $amountPetPetMiniKit = null): self
    {
        // validation for constraint: float
        if (!is_null($amountPetPetMiniKit) && !(is_float($amountPetPetMiniKit) || is_numeric($amountPetPetMiniKit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountPetPetMiniKit, true), gettype($amountPetPetMiniKit)), __LINE__);
        }
        if (is_null($amountPetPetMiniKit) || (is_array($amountPetPetMiniKit) && empty($amountPetPetMiniKit))) {
            unset($this->AmountPetPetMiniKit);
        } else {
            $this->AmountPetPetMiniKit = $amountPetPetMiniKit;
        }

        return $this;
    }

    /**
     * Get SelectedPet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getSelectedPet(): ?bool
    {
        return $this->SelectedPet ?? null;
    }

    /**
     * Set SelectedPet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $selectedPet
     *
     * @return PetData
     */
    public function setSelectedPet(?bool $selectedPet = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selectedPet) && !is_bool($selectedPet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selectedPet, true), gettype($selectedPet)), __LINE__);
        }
        if (is_null($selectedPet) || (is_array($selectedPet) && empty($selectedPet))) {
            unset($this->SelectedPet);
        } else {
            $this->SelectedPet = $selectedPet;
        }

        return $this;
    }

    /**
     * Get SelectedPetMiniKit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getSelectedPetMiniKit(): ?bool
    {
        return $this->SelectedPetMiniKit ?? null;
    }

    /**
     * Set SelectedPetMiniKit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $selectedPetMiniKit
     *
     * @return PetData
     */
    public function setSelectedPetMiniKit(?bool $selectedPetMiniKit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selectedPetMiniKit) && !is_bool($selectedPetMiniKit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selectedPetMiniKit, true), gettype($selectedPetMiniKit)), __LINE__);
        }
        if (is_null($selectedPetMiniKit) || (is_array($selectedPetMiniKit) && empty($selectedPetMiniKit))) {
            unset($this->SelectedPetMiniKit);
        } else {
            $this->SelectedPetMiniKit = $selectedPetMiniKit;
        }

        return $this;
    }
}
