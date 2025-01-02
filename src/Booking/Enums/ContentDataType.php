<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ContentDataType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContentDataType
 *
 * @subpackage Enumerations
 */
class ContentDataType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Default'
     *
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'Text'
     *
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
    /**
     * Constant for value 'RichTextFormat'
     *
     * @return string 'RichTextFormat'
     */
    const VALUE_RICH_TEXT_FORMAT = 'RichTextFormat';
    /**
     * Constant for value 'ImageJPG'
     *
     * @return string 'ImageJPG'
     */
    const VALUE_IMAGE_JPG = 'ImageJPG';
    /**
     * Constant for value 'ImageGIF'
     *
     * @return string 'ImageGIF'
     */
    const VALUE_IMAGE_GIF = 'ImageGIF';
    /**
     * Constant for value 'ImageBMP'
     *
     * @return string 'ImageBMP'
     */
    const VALUE_IMAGE_BMP = 'ImageBMP';
    /**
     * Constant for value 'ImagePNG'
     *
     * @return string 'ImagePNG'
     */
    const VALUE_IMAGE_PNG = 'ImagePNG';
    /**
     * Constant for value 'WordDoc'
     *
     * @return string 'WordDoc'
     */
    const VALUE_WORD_DOC = 'WordDoc';
    /**
     * Constant for value 'HTML'
     *
     * @return string 'HTML'
     */
    const VALUE_HTML = 'HTML';
    /**
     * Constant for value 'PDF'
     *
     * @return string 'PDF'
     */
    const VALUE_PDF = 'PDF';
    /**
     * Constant for value 'URI'
     *
     * @return string 'URI'
     */
    const VALUE_URI = 'URI';
    /**
     * Constant for value 'Unmapped'
     *
     * @return string 'Unmapped'
     */
    const VALUE_UNMAPPED = 'Unmapped';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_TEXT
     * @uses self::VALUE_RICH_TEXT_FORMAT
     * @uses self::VALUE_IMAGE_JPG
     * @uses self::VALUE_IMAGE_GIF
     * @uses self::VALUE_IMAGE_BMP
     * @uses self::VALUE_IMAGE_PNG
     * @uses self::VALUE_WORD_DOC
     * @uses self::VALUE_HTML
     * @uses self::VALUE_PDF
     * @uses self::VALUE_URI
     * @uses self::VALUE_UNMAPPED
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEFAULT,
            self::VALUE_TEXT,
            self::VALUE_RICH_TEXT_FORMAT,
            self::VALUE_IMAGE_JPG,
            self::VALUE_IMAGE_GIF,
            self::VALUE_IMAGE_BMP,
            self::VALUE_IMAGE_PNG,
            self::VALUE_WORD_DOC,
            self::VALUE_HTML,
            self::VALUE_PDF,
            self::VALUE_URI,
            self::VALUE_UNMAPPED,
        ];
    }
}
