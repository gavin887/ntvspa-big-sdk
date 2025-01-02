<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryService Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AncillaryService
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AncillaryService extends AbstractStructBase
{
    /**
     * The PetService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $PetService = null;
    /**
     * The LoungeData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var LoungeData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\LoungeData $LoungeData = null;
    /**
     * The UpgradeData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var UpgradeData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\UpgradeData $UpgradeData = null;
    /**
     * The PetData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PetData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\PetData $PetData = null;
    /**
     * The ErasabilityOption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ErasabilityOption|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\ErasabilityOption $ErasabilityOption = null;

    /**
     * Constructor method for AncillaryService
     *
     * @param bool              $petService
     * @param LoungeData        $loungeData
     * @param UpgradeData       $upgradeData
     * @param PetData           $petData
     * @param ErasabilityOption $erasabilityOption
     *
     * @uses AncillaryService::setPetService()
     * @uses AncillaryService::setLoungeData()
     * @uses AncillaryService::setUpgradeData()
     * @uses AncillaryService::setPetData()
     * @uses AncillaryService::setErasabilityOption()
     */
    public function __construct(?bool $petService = null, ?\Ntvspa\Big\Booking\Structs\LoungeData $loungeData = null, ?\Ntvspa\Big\Booking\Structs\UpgradeData $upgradeData = null, ?\Ntvspa\Big\Booking\Structs\PetData $petData = null, ?\Ntvspa\Big\Booking\Structs\ErasabilityOption $erasabilityOption = null)
    {
        $this
            ->setPetService($petService)
            ->setLoungeData($loungeData)
            ->setUpgradeData($upgradeData)
            ->setPetData($petData)
            ->setErasabilityOption($erasabilityOption);
    }

    /**
     * Get PetService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getPetService(): ?bool
    {
        return $this->PetService ?? null;
    }

    /**
     * Set PetService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $petService
     *
     * @return AncillaryService
     */
    public function setPetService(?bool $petService = null): self
    {
        // validation for constraint: boolean
        if (!is_null($petService) && !is_bool($petService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($petService, true), gettype($petService)), __LINE__);
        }
        if (is_null($petService) || (is_array($petService) && empty($petService))) {
            unset($this->PetService);
        } else {
            $this->PetService = $petService;
        }

        return $this;
    }

    /**
     * Get LoungeData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return LoungeData|null
     */
    public function getLoungeData(): ?\Ntvspa\Big\Booking\Structs\LoungeData
    {
        return $this->LoungeData ?? null;
    }

    /**
     * Set LoungeData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param LoungeData $loungeData
     *
     * @return AncillaryService
     */
    public function setLoungeData(?\Ntvspa\Big\Booking\Structs\LoungeData $loungeData = null): self
    {
        if (is_null($loungeData) || (is_array($loungeData) && empty($loungeData))) {
            unset($this->LoungeData);
        } else {
            $this->LoungeData = $loungeData;
        }

        return $this;
    }

    /**
     * Get UpgradeData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return UpgradeData|null
     */
    public function getUpgradeData(): ?\Ntvspa\Big\Booking\Structs\UpgradeData
    {
        return $this->UpgradeData ?? null;
    }

    /**
     * Set UpgradeData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param UpgradeData $upgradeData
     *
     * @return AncillaryService
     */
    public function setUpgradeData(?\Ntvspa\Big\Booking\Structs\UpgradeData $upgradeData = null): self
    {
        if (is_null($upgradeData) || (is_array($upgradeData) && empty($upgradeData))) {
            unset($this->UpgradeData);
        } else {
            $this->UpgradeData = $upgradeData;
        }

        return $this;
    }

    /**
     * Get PetData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PetData|null
     */
    public function getPetData(): ?\Ntvspa\Big\Booking\Structs\PetData
    {
        return $this->PetData ?? null;
    }

    /**
     * Set PetData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PetData $petData
     *
     * @return AncillaryService
     */
    public function setPetData(?\Ntvspa\Big\Booking\Structs\PetData $petData = null): self
    {
        if (is_null($petData) || (is_array($petData) && empty($petData))) {
            unset($this->PetData);
        } else {
            $this->PetData = $petData;
        }

        return $this;
    }

    /**
     * Get ErasabilityOption value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ErasabilityOption|null
     */
    public function getErasabilityOption(): ?\Ntvspa\Big\Booking\Structs\ErasabilityOption
    {
        return $this->ErasabilityOption ?? null;
    }

    /**
     * Set ErasabilityOption value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ErasabilityOption $erasabilityOption
     *
     * @return AncillaryService
     */
    public function setErasabilityOption(?\Ntvspa\Big\Booking\Structs\ErasabilityOption $erasabilityOption = null): self
    {
        if (is_null($erasabilityOption) || (is_array($erasabilityOption) && empty($erasabilityOption))) {
            unset($this->ErasabilityOption);
        } else {
            $this->ErasabilityOption = $erasabilityOption;
        }

        return $this;
    }
}
