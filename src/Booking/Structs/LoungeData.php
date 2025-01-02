<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfLounge;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoungeData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LoungeData
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class LoungeData extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The Selected
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $Selected = null;
    /**
     * The Lounges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfLounge|null
     */
    protected ?ArrayOfLounge $Lounges = null;
    /**
     * The LoungeStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LoungeStation = null;

    /**
     * Constructor method for LoungeData
     *
     * @param float                                    $amount
     * @param bool                                     $selected
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfLounge $lounges
     * @param string                                   $loungeStation
     *
     * @uses LoungeData::setAmount()
     * @uses LoungeData::setSelected()
     * @uses LoungeData::setLounges()
     * @uses LoungeData::setLoungeStation()
     */
    public function __construct(?float $amount = null, ?bool $selected = null, ?ArrayOfLounge $lounges = null, ?string $loungeStation = null)
    {
        $this
            ->setAmount($amount)
            ->setSelected($selected)
            ->setLounges($lounges)
            ->setLoungeStation($loungeStation);
    }

    /**
     * Get Amount value
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount;
    }

    /**
     * Set Amount value
     *
     * @param float $amount
     *
     * @return LoungeData
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;

        return $this;
    }

    /**
     * Get Selected value
     *
     * @return bool|null
     */
    public function getSelected(): ?bool
    {
        return $this->Selected;
    }

    /**
     * Set Selected value
     *
     * @param bool $selected
     *
     * @return LoungeData
     */
    public function setSelected(?bool $selected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->Selected = $selected;

        return $this;
    }

    /**
     * Get Lounges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfLounge|null
     */
    public function getLounges(): ?ArrayOfLounge
    {
        return $this->Lounges ?? null;
    }

    /**
     * Set Lounges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfLounge $lounges
     *
     * @return LoungeData
     */
    public function setLounges(?ArrayOfLounge $lounges = null): self
    {
        if (is_null($lounges) || (is_array($lounges) && empty($lounges))) {
            unset($this->Lounges);
        } else {
            $this->Lounges = $lounges;
        }

        return $this;
    }

    /**
     * Get LoungeStation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLoungeStation(): ?string
    {
        return $this->LoungeStation ?? null;
    }

    /**
     * Set LoungeStation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $loungeStation
     *
     * @return LoungeData
     */
    public function setLoungeStation(?string $loungeStation = null): self
    {
        // validation for constraint: string
        if (!is_null($loungeStation) && !is_string($loungeStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loungeStation, true), gettype($loungeStation)), __LINE__);
        }
        if (is_null($loungeStation) || (is_array($loungeStation) && empty($loungeStation))) {
            unset($this->LoungeStation);
        } else {
            $this->LoungeStation = $loungeStation;
        }

        return $this;
    }
}
