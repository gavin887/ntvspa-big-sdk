<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Travel\Enums\Notice_ResponseTypeCommunicationType;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Notice Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Notice
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Notice extends AbstractStructBase
{
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $CreationDate = null;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ExpirationDate = null;
    /**
     * The CommunicationType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $CommunicationType = null;
    /**
     * The IsExpired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $IsExpired = null;
    /**
     * The AlreadyDownloaded
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $AlreadyDownloaded = null;
    /**
     * The NoticeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $NoticeId = null;
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
     * The Language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Language = null;
    /**
     * The DisruptionCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DisruptionCategory = null;
    /**
     * The NewsCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $NewsCategory = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Title = null;

    /**
     * Constructor method for Notice
     *
     * @param string $creationDate
     * @param string $expirationDate
     * @param string $communicationType
     * @param bool   $isExpired
     * @param bool   $alreadyDownloaded
     * @param string $noticeId
     * @param string $message
     * @param string $language
     * @param string $disruptionCategory
     * @param string $newsCategory
     * @param string $title
     *
     * @uses Notice::setCreationDate()
     * @uses Notice::setExpirationDate()
     * @uses Notice::setCommunicationType()
     * @uses Notice::setIsExpired()
     * @uses Notice::setAlreadyDownloaded()
     * @uses Notice::setNoticeId()
     * @uses Notice::setMessage()
     * @uses Notice::setLanguage()
     * @uses Notice::setDisruptionCategory()
     * @uses Notice::setNewsCategory()
     * @uses Notice::setTitle()
     */
    public function __construct(?string $creationDate = null, ?string $expirationDate = null, ?string $communicationType = null, ?bool $isExpired = null, ?bool $alreadyDownloaded = null, ?string $noticeId = null, ?string $message = null, ?string $language = null, ?string $disruptionCategory = null, ?string $newsCategory = null, ?string $title = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setExpirationDate($expirationDate)
            ->setCommunicationType($communicationType)
            ->setIsExpired($isExpired)
            ->setAlreadyDownloaded($alreadyDownloaded)
            ->setNoticeId($noticeId)
            ->setMessage($message)
            ->setLanguage($language)
            ->setDisruptionCategory($disruptionCategory)
            ->setNewsCategory($newsCategory)
            ->setTitle($title);
    }

    /**
     * Get CreationDate value
     *
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->CreationDate;
    }

    /**
     * Set CreationDate value
     *
     * @param string $creationDate
     *
     * @return Notice
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;

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
     * @return Notice
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
     * Get CommunicationType value
     *
     * @return string|null
     */
    public function getCommunicationType(): ?string
    {
        return $this->CommunicationType;
    }

    /**
     * Set CommunicationType value
     *
     * @param string $communicationType
     *
     * @return Notice
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Travel\Enums\Notice_ResponseTypeCommunicationType::getValidValues()
     * @uses \Ntvspa\Big\Travel\Enums\Notice_ResponseTypeCommunicationType::valueIsValid()
     */
    public function setCommunicationType(?string $communicationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Travel\Enums\Notice_ResponseTypeCommunicationType::valueIsValid($communicationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Travel\Enums\Notice_ResponseTypeCommunicationType', is_array($communicationType) ? implode(', ', $communicationType) : var_export($communicationType, true), implode(', ', Notice_ResponseTypeCommunicationType::getValidValues())), __LINE__);
        }
        $this->CommunicationType = $communicationType;

        return $this;
    }

    /**
     * Get IsExpired value
     *
     * @return bool|null
     */
    public function getIsExpired(): ?bool
    {
        return $this->IsExpired;
    }

    /**
     * Set IsExpired value
     *
     * @param bool $isExpired
     *
     * @return Notice
     */
    public function setIsExpired(?bool $isExpired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExpired) && !is_bool($isExpired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExpired, true), gettype($isExpired)), __LINE__);
        }
        $this->IsExpired = $isExpired;

        return $this;
    }

    /**
     * Get AlreadyDownloaded value
     *
     * @return bool|null
     */
    public function getAlreadyDownloaded(): ?bool
    {
        return $this->AlreadyDownloaded;
    }

    /**
     * Set AlreadyDownloaded value
     *
     * @param bool $alreadyDownloaded
     *
     * @return Notice
     */
    public function setAlreadyDownloaded(?bool $alreadyDownloaded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($alreadyDownloaded) && !is_bool($alreadyDownloaded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($alreadyDownloaded, true), gettype($alreadyDownloaded)), __LINE__);
        }
        $this->AlreadyDownloaded = $alreadyDownloaded;

        return $this;
    }

    /**
     * Get NoticeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNoticeId(): ?string
    {
        return $this->NoticeId ?? null;
    }

    /**
     * Set NoticeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $noticeId
     *
     * @return Notice
     */
    public function setNoticeId(?string $noticeId = null): self
    {
        // validation for constraint: string
        if (!is_null($noticeId) && !is_string($noticeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noticeId, true), gettype($noticeId)), __LINE__);
        }
        if (is_null($noticeId) || (is_array($noticeId) && empty($noticeId))) {
            unset($this->NoticeId);
        } else {
            $this->NoticeId = $noticeId;
        }

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
     * @return Notice
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
     * Get Language value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->Language ?? null;
    }

    /**
     * Set Language value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $language
     *
     * @return Notice
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        if (is_null($language) || (is_array($language) && empty($language))) {
            unset($this->Language);
        } else {
            $this->Language = $language;
        }

        return $this;
    }

    /**
     * Get DisruptionCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDisruptionCategory(): ?string
    {
        return $this->DisruptionCategory ?? null;
    }

    /**
     * Set DisruptionCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $disruptionCategory
     *
     * @return Notice
     */
    public function setDisruptionCategory(?string $disruptionCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($disruptionCategory) && !is_string($disruptionCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disruptionCategory, true), gettype($disruptionCategory)), __LINE__);
        }
        if (is_null($disruptionCategory) || (is_array($disruptionCategory) && empty($disruptionCategory))) {
            unset($this->DisruptionCategory);
        } else {
            $this->DisruptionCategory = $disruptionCategory;
        }

        return $this;
    }

    /**
     * Get NewsCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNewsCategory(): ?string
    {
        return $this->NewsCategory ?? null;
    }

    /**
     * Set NewsCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $newsCategory
     *
     * @return Notice
     */
    public function setNewsCategory(?string $newsCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($newsCategory) && !is_string($newsCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newsCategory, true), gettype($newsCategory)), __LINE__);
        }
        if (is_null($newsCategory) || (is_array($newsCategory) && empty($newsCategory))) {
            unset($this->NewsCategory);
        } else {
            $this->NewsCategory = $newsCategory;
        }

        return $this;
    }

    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title ?? null;
    }

    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $title
     *
     * @return Notice
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }

        return $this;
    }
}
