<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ContentType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContentType
 *
 * @subpackage Enumerations
 */
class ContentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'GeneralReference'
     *
     * @return string 'GeneralReference'
     */
    const VALUE_GENERAL_REFERENCE = 'GeneralReference';
    /**
     * Constant for value 'News'
     *
     * @return string 'News'
     */
    const VALUE_NEWS = 'News';
    /**
     * Constant for value 'ConsoleHelp'
     *
     * @return string 'ConsoleHelp'
     */
    const VALUE_CONSOLE_HELP = 'ConsoleHelp';
    /**
     * Constant for value 'FareRuleReference'
     *
     * @return string 'FareRuleReference'
     */
    const VALUE_FARE_RULE_REFERENCE = 'FareRuleReference';
    /**
     * Constant for value 'ReviewWithCustomer'
     *
     * @return string 'ReviewWithCustomer'
     */
    const VALUE_REVIEW_WITH_CUSTOMER = 'ReviewWithCustomer';
    /**
     * Constant for value 'Notices'
     *
     * @return string 'Notices'
     */
    const VALUE_NOTICES = 'Notices';
    /**
     * Constant for value 'Literature'
     *
     * @return string 'Literature'
     */
    const VALUE_LITERATURE = 'Literature';
    /**
     * Constant for value 'Links'
     *
     * @return string 'Links'
     */
    const VALUE_LINKS = 'Links';
    /**
     * Constant for value 'Image'
     *
     * @return string 'Image'
     */
    const VALUE_IMAGE = 'Image';
    /**
     * Constant for value 'PromotionReference'
     *
     * @return string 'PromotionReference'
     */
    const VALUE_PROMOTION_REFERENCE = 'PromotionReference';
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
     * @uses self::VALUE_GENERAL_REFERENCE
     * @uses self::VALUE_NEWS
     * @uses self::VALUE_CONSOLE_HELP
     * @uses self::VALUE_FARE_RULE_REFERENCE
     * @uses self::VALUE_REVIEW_WITH_CUSTOMER
     * @uses self::VALUE_NOTICES
     * @uses self::VALUE_LITERATURE
     * @uses self::VALUE_LINKS
     * @uses self::VALUE_IMAGE
     * @uses self::VALUE_PROMOTION_REFERENCE
     * @uses self::VALUE_UNMAPPED
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_GENERAL_REFERENCE,
            self::VALUE_NEWS,
            self::VALUE_CONSOLE_HELP,
            self::VALUE_FARE_RULE_REFERENCE,
            self::VALUE_REVIEW_WITH_CUSTOMER,
            self::VALUE_NOTICES,
            self::VALUE_LITERATURE,
            self::VALUE_LINKS,
            self::VALUE_IMAGE,
            self::VALUE_PROMOTION_REFERENCE,
            self::VALUE_UNMAPPED,
        ];
    }
}
