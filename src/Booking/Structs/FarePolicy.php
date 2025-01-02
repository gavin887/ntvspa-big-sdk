<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FarePolicy Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FarePolicy
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FarePolicy extends AbstractStructBase
{
    /**
     * The RefundFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RefundFee = null;
    /**
     * The ChangeFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ChangeFee = null;
    /**
     * The ChangeNameFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ChangeNameFee = null;
    /**
     * The ItaloConTe
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ItaloConTe = null;

    /**
     * Constructor method for FarePolicy
     *
     * @param string $refundFee
     * @param string $changeFee
     * @param string $changeNameFee
     * @param string $italoConTe
     *
     * @uses FarePolicy::setRefundFee()
     * @uses FarePolicy::setChangeFee()
     * @uses FarePolicy::setChangeNameFee()
     * @uses FarePolicy::setItaloConTe()
     */
    public function __construct(?string $refundFee = null, ?string $changeFee = null, ?string $changeNameFee = null, ?string $italoConTe = null)
    {
        $this
            ->setRefundFee($refundFee)
            ->setChangeFee($changeFee)
            ->setChangeNameFee($changeNameFee)
            ->setItaloConTe($italoConTe);
    }

    /**
     * Get RefundFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRefundFee(): ?string
    {
        return $this->RefundFee ?? null;
    }

    /**
     * Set RefundFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $refundFee
     *
     * @return FarePolicy
     */
    public function setRefundFee(?string $refundFee = null): self
    {
        // validation for constraint: string
        if (!is_null($refundFee) && !is_string($refundFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundFee, true), gettype($refundFee)), __LINE__);
        }
        if (is_null($refundFee) || (is_array($refundFee) && empty($refundFee))) {
            unset($this->RefundFee);
        } else {
            $this->RefundFee = $refundFee;
        }

        return $this;
    }

    /**
     * Get ChangeFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getChangeFee(): ?string
    {
        return $this->ChangeFee ?? null;
    }

    /**
     * Set ChangeFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $changeFee
     *
     * @return FarePolicy
     */
    public function setChangeFee(?string $changeFee = null): self
    {
        // validation for constraint: string
        if (!is_null($changeFee) && !is_string($changeFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeFee, true), gettype($changeFee)), __LINE__);
        }
        if (is_null($changeFee) || (is_array($changeFee) && empty($changeFee))) {
            unset($this->ChangeFee);
        } else {
            $this->ChangeFee = $changeFee;
        }

        return $this;
    }

    /**
     * Get ChangeNameFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getChangeNameFee(): ?string
    {
        return $this->ChangeNameFee ?? null;
    }

    /**
     * Set ChangeNameFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $changeNameFee
     *
     * @return FarePolicy
     */
    public function setChangeNameFee(?string $changeNameFee = null): self
    {
        // validation for constraint: string
        if (!is_null($changeNameFee) && !is_string($changeNameFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeNameFee, true), gettype($changeNameFee)), __LINE__);
        }
        if (is_null($changeNameFee) || (is_array($changeNameFee) && empty($changeNameFee))) {
            unset($this->ChangeNameFee);
        } else {
            $this->ChangeNameFee = $changeNameFee;
        }

        return $this;
    }

    /**
     * Get ItaloConTe value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getItaloConTe(): ?string
    {
        return $this->ItaloConTe ?? null;
    }

    /**
     * Set ItaloConTe value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $italoConTe
     *
     * @return FarePolicy
     */
    public function setItaloConTe(?string $italoConTe = null): self
    {
        // validation for constraint: string
        if (!is_null($italoConTe) && !is_string($italoConTe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($italoConTe, true), gettype($italoConTe)), __LINE__);
        }
        if (is_null($italoConTe) || (is_array($italoConTe) && empty($italoConTe))) {
            unset($this->ItaloConTe);
        } else {
            $this->ItaloConTe = $italoConTe;
        }

        return $this;
    }
}
