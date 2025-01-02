<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\BIGExceptionType;
use Product\Arrays\ArrayOfAdditionalMessage;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExceptionInfo Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ExceptionInfo
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ExceptionInfo extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Code = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The AdditionalMessages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfAdditionalMessage|null
     */
    protected ?ArrayOfAdditionalMessage $AdditionalMessages = null;
    /**
     * The Details
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Details = null;

    /**
     * Constructor method for ExceptionInfo
     *
     * @param int                                                 $code
     * @param string                                              $type
     * @param string                                              $message
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfAdditionalMessage $additionalMessages
     * @param string                                              $details
     *
     * @uses ExceptionInfo::setCode()
     * @uses ExceptionInfo::setType()
     * @uses ExceptionInfo::setMessage()
     * @uses ExceptionInfo::setAdditionalMessages()
     * @uses ExceptionInfo::setDetails()
     */
    public function __construct(?int $code = null, ?string $type = null, ?string $message = null, ?ArrayOfAdditionalMessage $additionalMessages = null, ?string $details = null)
    {
        $this
            ->setCode($code)
            ->setType($type)
            ->setMessage($message)
            ->setAdditionalMessages($additionalMessages)
            ->setDetails($details);
    }

    /**
     * Get Code value
     *
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->Code;
    }

    /**
     * Set Code value
     *
     * @param int $code
     *
     * @return ExceptionInfo
     */
    public function setCode(?int $code = null): self
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;

        return $this;
    }

    /**
     * Get Type value
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * Set Type value
     *
     * @param string $type
     *
     * @return ExceptionInfo
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\BIGExceptionType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\BIGExceptionType::valueIsValid()
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\BIGExceptionType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\BIGExceptionType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', BIGExceptionType::getValidValues())), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message ?? null;
    }

    /**
     * Set Message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $message
     *
     * @return ExceptionInfo
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }

        return $this;
    }

    /**
     * Get AdditionalMessages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfAdditionalMessage|null
     */
    public function getAdditionalMessages(): ?ArrayOfAdditionalMessage
    {
        return $this->AdditionalMessages ?? null;
    }

    /**
     * Set AdditionalMessages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfAdditionalMessage $additionalMessages
     *
     * @return ExceptionInfo
     */
    public function setAdditionalMessages(?ArrayOfAdditionalMessage $additionalMessages = null): self
    {
        if (is_null($additionalMessages) || (is_array($additionalMessages) && empty($additionalMessages))) {
            unset($this->AdditionalMessages);
        } else {
            $this->AdditionalMessages = $additionalMessages;
        }

        return $this;
    }

    /**
     * Get Details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->Details ?? null;
    }

    /**
     * Set Details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $details
     *
     * @return ExceptionInfo
     */
    public function setDetails(?string $details = null): self
    {
        // validation for constraint: string
        if (!is_null($details) && !is_string($details)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($details, true), gettype($details)), __LINE__);
        }
        if (is_null($details) || (is_array($details) && empty($details))) {
            unset($this->Details);
        } else {
            $this->Details = $details;
        }

        return $this;
    }
}
