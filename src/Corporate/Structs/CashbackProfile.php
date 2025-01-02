<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use Corporate\Arrays\ArrayOfCashbackPromotion;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashbackProfile Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CashbackProfile
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CashbackProfile extends AbstractStructBase
{
    /**
     * The CashBackEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $CashBackEnabled = null;
    /**
     * The ActivationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ActivationDate = null;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ExpirationDate = null;
    /**
     * The IdPartner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $IdPartner = null;
    /**
     * The CashBackPNR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CashBackPNR = null;
    /**
     * The CashbackOffer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CashbackOffer|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\CashbackOffer $CashbackOffer = null;
    /**
     * The CashbackDefaultOffer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CashbackOffer|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\CashbackOffer $CashbackDefaultOffer = null;
    /**
     * The CashbackPromotions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfCashbackPromotion|null
     */
    protected ?ArrayOfCashbackPromotion $CashbackPromotions = null;

    /**
     * Constructor method for CashbackProfile
     *
     * @param bool                                                  $cashBackEnabled
     * @param string                                                $activationDate
     * @param string                                                $expirationDate
     * @param string                                                $idPartner
     * @param string                                                $cashBackPNR
     * @param CashbackOffer                                         $cashbackOffer
     * @param CashbackOffer                                         $cashbackDefaultOffer
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfCashbackPromotion $cashbackPromotions
     *
     * @uses CashbackProfile::setCashBackEnabled()
     * @uses CashbackProfile::setActivationDate()
     * @uses CashbackProfile::setExpirationDate()
     * @uses CashbackProfile::setIdPartner()
     * @uses CashbackProfile::setCashBackPNR()
     * @uses CashbackProfile::setCashbackOffer()
     * @uses CashbackProfile::setCashbackDefaultOffer()
     * @uses CashbackProfile::setCashbackPromotions()
     */
    public function __construct(?bool $cashBackEnabled = null, ?string $activationDate = null, ?string $expirationDate = null, ?string $idPartner = null, ?string $cashBackPNR = null, ?\Ntvspa\Big\Corporate\Structs\CashbackOffer $cashbackOffer = null, ?\Ntvspa\Big\Corporate\Structs\CashbackOffer $cashbackDefaultOffer = null, ?ArrayOfCashbackPromotion $cashbackPromotions = null)
    {
        $this
            ->setCashBackEnabled($cashBackEnabled)
            ->setActivationDate($activationDate)
            ->setExpirationDate($expirationDate)
            ->setIdPartner($idPartner)
            ->setCashBackPNR($cashBackPNR)
            ->setCashbackOffer($cashbackOffer)
            ->setCashbackDefaultOffer($cashbackDefaultOffer)
            ->setCashbackPromotions($cashbackPromotions);
    }

    /**
     * Get CashBackEnabled value
     *
     * @return bool|null
     */
    public function getCashBackEnabled(): ?bool
    {
        return $this->CashBackEnabled;
    }

    /**
     * Set CashBackEnabled value
     *
     * @param bool $cashBackEnabled
     *
     * @return CashbackProfile
     */
    public function setCashBackEnabled(?bool $cashBackEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cashBackEnabled) && !is_bool($cashBackEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cashBackEnabled, true), gettype($cashBackEnabled)), __LINE__);
        }
        $this->CashBackEnabled = $cashBackEnabled;

        return $this;
    }

    /**
     * Get ActivationDate value
     *
     * @return string|null
     */
    public function getActivationDate(): ?string
    {
        return $this->ActivationDate;
    }

    /**
     * Set ActivationDate value
     *
     * @param string $activationDate
     *
     * @return CashbackProfile
     */
    public function setActivationDate(?string $activationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($activationDate) && !is_string($activationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activationDate, true), gettype($activationDate)), __LINE__);
        }
        $this->ActivationDate = $activationDate;

        return $this;
    }

    /**
     * Get ExpirationDate value
     *
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->ExpirationDate;
    }

    /**
     * Set ExpirationDate value
     *
     * @param string $expirationDate
     *
     * @return CashbackProfile
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get IdPartner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIdPartner(): ?string
    {
        return $this->IdPartner ?? null;
    }

    /**
     * Set IdPartner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $idPartner
     *
     * @return CashbackProfile
     */
    public function setIdPartner(?string $idPartner = null): self
    {
        // validation for constraint: string
        if (!is_null($idPartner) && !is_string($idPartner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idPartner, true), gettype($idPartner)), __LINE__);
        }
        if (is_null($idPartner) || (is_array($idPartner) && empty($idPartner))) {
            unset($this->IdPartner);
        } else {
            $this->IdPartner = $idPartner;
        }

        return $this;
    }

    /**
     * Get CashBackPNR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCashBackPNR(): ?string
    {
        return $this->CashBackPNR ?? null;
    }

    /**
     * Set CashBackPNR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cashBackPNR
     *
     * @return CashbackProfile
     */
    public function setCashBackPNR(?string $cashBackPNR = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBackPNR) && !is_string($cashBackPNR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBackPNR, true), gettype($cashBackPNR)), __LINE__);
        }
        if (is_null($cashBackPNR) || (is_array($cashBackPNR) && empty($cashBackPNR))) {
            unset($this->CashBackPNR);
        } else {
            $this->CashBackPNR = $cashBackPNR;
        }

        return $this;
    }

    /**
     * Get CashbackOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CashbackOffer|null
     */
    public function getCashbackOffer(): ?\Ntvspa\Big\Corporate\Structs\CashbackOffer
    {
        return $this->CashbackOffer ?? null;
    }

    /**
     * Set CashbackOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CashbackOffer $cashbackOffer
     *
     * @return CashbackProfile
     */
    public function setCashbackOffer(?\Ntvspa\Big\Corporate\Structs\CashbackOffer $cashbackOffer = null): self
    {
        if (is_null($cashbackOffer) || (is_array($cashbackOffer) && empty($cashbackOffer))) {
            unset($this->CashbackOffer);
        } else {
            $this->CashbackOffer = $cashbackOffer;
        }

        return $this;
    }

    /**
     * Get CashbackDefaultOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CashbackOffer|null
     */
    public function getCashbackDefaultOffer(): ?\Ntvspa\Big\Corporate\Structs\CashbackOffer
    {
        return $this->CashbackDefaultOffer ?? null;
    }

    /**
     * Set CashbackDefaultOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CashbackOffer $cashbackDefaultOffer
     *
     * @return CashbackProfile
     */
    public function setCashbackDefaultOffer(?\Ntvspa\Big\Corporate\Structs\CashbackOffer $cashbackDefaultOffer = null): self
    {
        if (is_null($cashbackDefaultOffer) || (is_array($cashbackDefaultOffer) && empty($cashbackDefaultOffer))) {
            unset($this->CashbackDefaultOffer);
        } else {
            $this->CashbackDefaultOffer = $cashbackDefaultOffer;
        }

        return $this;
    }

    /**
     * Get CashbackPromotions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfCashbackPromotion|null
     */
    public function getCashbackPromotions(): ?ArrayOfCashbackPromotion
    {
        return $this->CashbackPromotions ?? null;
    }

    /**
     * Set CashbackPromotions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfCashbackPromotion $cashbackPromotions
     *
     * @return CashbackProfile
     */
    public function setCashbackPromotions(?ArrayOfCashbackPromotion $cashbackPromotions = null): self
    {
        if (is_null($cashbackPromotions) || (is_array($cashbackPromotions) && empty($cashbackPromotions))) {
            unset($this->CashbackPromotions);
        } else {
            $this->CashbackPromotions = $cashbackPromotions;
        }

        return $this;
    }
}
