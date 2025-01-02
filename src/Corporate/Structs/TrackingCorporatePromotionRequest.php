<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Corporate\Enums\SourceSystem;
use Ntvspa\Big\Corporate\Enums\TrackResultType;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingCorporatePromotionRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q15:TrackingCorporatePromotionRequest | tns:TrackingCorporatePromotionRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class TrackingCorporatePromotionRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The TrackDate
     *
     * @var string|null
     */
    protected ?string $TrackDate = null;
    /**
     * The TrackResult
     *
     * @var string|null
     */
    protected ?string $TrackResult = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The PromotionId
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionId = null;
    /**
     * The RecordLocator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RecordLocator = null;
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OrderNumber = null;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Notes = null;

    /**
     * Constructor method for TrackingCorporatePromotionRequest
     *
     * @param string $sourceSystem
     * @param string $trackDate
     * @param string $trackResult
     * @param string $signature
     * @param string $promotionId
     * @param string $recordLocator
     * @param string $orderNumber
     * @param string $notes
     *
     * @uses TrackingCorporatePromotionRequest::setSourceSystem()
     * @uses TrackingCorporatePromotionRequest::setTrackDate()
     * @uses TrackingCorporatePromotionRequest::setTrackResult()
     * @uses TrackingCorporatePromotionRequest::setSignature()
     * @uses TrackingCorporatePromotionRequest::setPromotionId()
     * @uses TrackingCorporatePromotionRequest::setRecordLocator()
     * @uses TrackingCorporatePromotionRequest::setOrderNumber()
     * @uses TrackingCorporatePromotionRequest::setNotes()
     */
    public function __construct(?string $sourceSystem = null, ?string $trackDate = null, ?string $trackResult = null, ?string $signature = null, ?string $promotionId = null, ?string $recordLocator = null, ?string $orderNumber = null, ?string $notes = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setTrackDate($trackDate)
            ->setTrackResult($trackResult)
            ->setSignature($signature)
            ->setPromotionId($promotionId)
            ->setRecordLocator($recordLocator)
            ->setOrderNumber($orderNumber)
            ->setNotes($notes);
    }

    /**
     * Get SourceSystem value
     *
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->SourceSystem;
    }

    /**
     * Set SourceSystem value
     *
     * @param string $sourceSystem
     *
     * @return TrackingCorporatePromotionRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get TrackDate value
     *
     * @return string|null
     */
    public function getTrackDate(): ?string
    {
        return $this->TrackDate;
    }

    /**
     * Set TrackDate value
     *
     * @param string $trackDate
     *
     * @return TrackingCorporatePromotionRequest
     */
    public function setTrackDate(?string $trackDate = null): self
    {
        // validation for constraint: string
        if (!is_null($trackDate) && !is_string($trackDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackDate, true), gettype($trackDate)), __LINE__);
        }
        $this->TrackDate = $trackDate;

        return $this;
    }

    /**
     * Get TrackResult value
     *
     * @return string|null
     */
    public function getTrackResult(): ?string
    {
        return $this->TrackResult;
    }

    /**
     * Set TrackResult value
     *
     * @param string $trackResult
     *
     * @return TrackingCorporatePromotionRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\TrackResultType::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\TrackResultType::valueIsValid()
     */
    public function setTrackResult(?string $trackResult = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\TrackResultType::valueIsValid($trackResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\TrackResultType', is_array($trackResult) ? implode(', ', $trackResult) : var_export($trackResult, true), implode(', ', TrackResultType::getValidValues())), __LINE__);
        }
        $this->TrackResult = $trackResult;

        return $this;
    }

    /**
     * Get Signature value
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature;
    }

    /**
     * Set Signature value
     *
     * @param string $signature
     *
     * @return TrackingCorporatePromotionRequest
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;

        return $this;
    }

    /**
     * Get PromotionId value
     *
     * @return string|null
     */
    public function getPromotionId(): ?string
    {
        return $this->PromotionId;
    }

    /**
     * Set PromotionId value
     *
     * @param string $promotionId
     *
     * @return TrackingCorporatePromotionRequest
     */
    public function setPromotionId(?string $promotionId = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionId) && !is_string($promotionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionId, true), gettype($promotionId)), __LINE__);
        }
        $this->PromotionId = $promotionId;

        return $this;
    }

    /**
     * Get RecordLocator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRecordLocator(): ?string
    {
        return $this->RecordLocator ?? null;
    }

    /**
     * Set RecordLocator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $recordLocator
     *
     * @return TrackingCorporatePromotionRequest
     */
    public function setRecordLocator(?string $recordLocator = null): self
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordLocator, true), gettype($recordLocator)), __LINE__);
        }
        if (is_null($recordLocator) || (is_array($recordLocator) && empty($recordLocator))) {
            unset($this->RecordLocator);
        } else {
            $this->RecordLocator = $recordLocator;
        }

        return $this;
    }

    /**
     * Get OrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return $this->OrderNumber ?? null;
    }

    /**
     * Set OrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $orderNumber
     *
     * @return TrackingCorporatePromotionRequest
     */
    public function setOrderNumber(?string $orderNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        if (is_null($orderNumber) || (is_array($orderNumber) && empty($orderNumber))) {
            unset($this->OrderNumber);
        } else {
            $this->OrderNumber = $orderNumber;
        }

        return $this;
    }

    /**
     * Get Notes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->Notes ?? null;
    }

    /**
     * Set Notes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $notes
     *
     * @return TrackingCorporatePromotionRequest
     */
    public function setNotes(?string $notes = null): self
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        if (is_null($notes) || (is_array($notes) && empty($notes))) {
            unset($this->Notes);
        } else {
            $this->Notes = $notes;
        }

        return $this;
    }
}
