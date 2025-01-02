<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\FeeOperation;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageFeeRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q27:ManageFeeRequest | tns:ManageFeeRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ManageFeeRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Operation
     *
     * @var string|null
     */
    protected ?string $Operation = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The AddData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AddData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\AddData $AddData = null;
    /**
     * The DeleteData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var DeleteData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\DeleteData $DeleteData = null;

    /**
     * Constructor method for ManageFeeRequest
     *
     * @param string     $sourceSystem
     * @param string     $operation
     * @param string     $signature
     * @param AddData    $addData
     * @param DeleteData $deleteData
     *
     * @uses ManageFeeRequest::setSourceSystem()
     * @uses ManageFeeRequest::setOperation()
     * @uses ManageFeeRequest::setSignature()
     * @uses ManageFeeRequest::setAddData()
     * @uses ManageFeeRequest::setDeleteData()
     */
    public function __construct(?string $sourceSystem = null, ?string $operation = null, ?string $signature = null, ?\Ntvspa\Big\Booking\Structs\AddData $addData = null, ?\Ntvspa\Big\Booking\Structs\DeleteData $deleteData = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setOperation($operation)
            ->setSignature($signature)
            ->setAddData($addData)
            ->setDeleteData($deleteData);
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
     * @return ManageFeeRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get Operation value
     *
     * @return string|null
     */
    public function getOperation(): ?string
    {
        return $this->Operation;
    }

    /**
     * Set Operation value
     *
     * @param string $operation
     *
     * @return ManageFeeRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\FeeOperation::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\FeeOperation::valueIsValid()
     */
    public function setOperation(?string $operation = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\FeeOperation::valueIsValid($operation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\FeeOperation', is_array($operation) ? implode(', ', $operation) : var_export($operation, true), implode(', ', FeeOperation::getValidValues())), __LINE__);
        }
        $this->Operation = $operation;

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
     * @return ManageFeeRequest
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
     * Get AddData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return AddData|null
     */
    public function getAddData(): ?\Ntvspa\Big\Booking\Structs\AddData
    {
        return $this->AddData ?? null;
    }

    /**
     * Set AddData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param AddData $addData
     *
     * @return ManageFeeRequest
     */
    public function setAddData(?\Ntvspa\Big\Booking\Structs\AddData $addData = null): self
    {
        if (is_null($addData) || (is_array($addData) && empty($addData))) {
            unset($this->AddData);
        } else {
            $this->AddData = $addData;
        }

        return $this;
    }

    /**
     * Get DeleteData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return DeleteData|null
     */
    public function getDeleteData(): ?\Ntvspa\Big\Booking\Structs\DeleteData
    {
        return $this->DeleteData ?? null;
    }

    /**
     * Set DeleteData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param DeleteData $deleteData
     *
     * @return ManageFeeRequest
     */
    public function setDeleteData(?\Ntvspa\Big\Booking\Structs\DeleteData $deleteData = null): self
    {
        if (is_null($deleteData) || (is_array($deleteData) && empty($deleteData))) {
            unset($this->DeleteData);
        } else {
            $this->DeleteData = $deleteData;
        }

        return $this;
    }
}
