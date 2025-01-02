<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ChargeType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ChargeType
 *
 * @subpackage Enumerations
 */
class ChargeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FarePrice'
     *
     * @return string 'FarePrice'
     */
    const VALUE_FARE_PRICE = 'FarePrice';
    /**
     * Constant for value 'Discount'
     *
     * @return string 'Discount'
     */
    const VALUE_DISCOUNT = 'Discount';
    /**
     * Constant for value 'IncludedTravelFee'
     *
     * @return string 'IncludedTravelFee'
     */
    const VALUE_INCLUDED_TRAVEL_FEE = 'IncludedTravelFee';
    /**
     * Constant for value 'IncludedTax'
     *
     * @return string 'IncludedTax'
     */
    const VALUE_INCLUDED_TAX = 'IncludedTax';
    /**
     * Constant for value 'TravelFee'
     *
     * @return string 'TravelFee'
     */
    const VALUE_TRAVEL_FEE = 'TravelFee';
    /**
     * Constant for value 'Tax'
     *
     * @return string 'Tax'
     */
    const VALUE_TAX = 'Tax';
    /**
     * Constant for value 'ServiceCharge'
     *
     * @return string 'ServiceCharge'
     */
    const VALUE_SERVICE_CHARGE = 'ServiceCharge';
    /**
     * Constant for value 'PromotionDiscount'
     *
     * @return string 'PromotionDiscount'
     */
    const VALUE_PROMOTION_DISCOUNT = 'PromotionDiscount';
    /**
     * Constant for value 'ConnectionAdjustmentAmount'
     *
     * @return string 'ConnectionAdjustmentAmount'
     */
    const VALUE_CONNECTION_ADJUSTMENT_AMOUNT = 'ConnectionAdjustmentAmount';
    /**
     * Constant for value 'AddOnServicePrice'
     *
     * @return string 'AddOnServicePrice'
     */
    const VALUE_ADD_ON_SERVICE_PRICE = 'AddOnServicePrice';
    /**
     * Constant for value 'IncludedAddOnServiceFee'
     *
     * @return string 'IncludedAddOnServiceFee'
     */
    const VALUE_INCLUDED_ADD_ON_SERVICE_FEE = 'IncludedAddOnServiceFee';
    /**
     * Constant for value 'AddOnServiceFee'
     *
     * @return string 'AddOnServiceFee'
     */
    const VALUE_ADD_ON_SERVICE_FEE = 'AddOnServiceFee';
    /**
     * Constant for value 'Calculated'
     *
     * @return string 'Calculated'
     */
    const VALUE_CALCULATED = 'Calculated';
    /**
     * Constant for value 'Note'
     *
     * @return string 'Note'
     */
    const VALUE_NOTE = 'Note';
    /**
     * Constant for value 'AddOnServiceMarkup'
     *
     * @return string 'AddOnServiceMarkup'
     */
    const VALUE_ADD_ON_SERVICE_MARKUP = 'AddOnServiceMarkup';
    /**
     * Constant for value 'FareSurcharge'
     *
     * @return string 'FareSurcharge'
     */
    const VALUE_FARE_SURCHARGE = 'FareSurcharge';
    /**
     * Constant for value 'Loyalty'
     *
     * @return string 'Loyalty'
     */
    const VALUE_LOYALTY = 'Loyalty';
    /**
     * Constant for value 'FarePoints'
     *
     * @return string 'FarePoints'
     */
    const VALUE_FARE_POINTS = 'FarePoints';
    /**
     * Constant for value 'DiscountPoints'
     *
     * @return string 'DiscountPoints'
     */
    const VALUE_DISCOUNT_POINTS = 'DiscountPoints';
    /**
     * Constant for value 'AddOnServiceCancelFee'
     *
     * @return string 'AddOnServiceCancelFee'
     */
    const VALUE_ADD_ON_SERVICE_CANCEL_FEE = 'AddOnServiceCancelFee';
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
     * @uses self::VALUE_FARE_PRICE
     * @uses self::VALUE_DISCOUNT
     * @uses self::VALUE_INCLUDED_TRAVEL_FEE
     * @uses self::VALUE_INCLUDED_TAX
     * @uses self::VALUE_TRAVEL_FEE
     * @uses self::VALUE_TAX
     * @uses self::VALUE_SERVICE_CHARGE
     * @uses self::VALUE_PROMOTION_DISCOUNT
     * @uses self::VALUE_CONNECTION_ADJUSTMENT_AMOUNT
     * @uses self::VALUE_ADD_ON_SERVICE_PRICE
     * @uses self::VALUE_INCLUDED_ADD_ON_SERVICE_FEE
     * @uses self::VALUE_ADD_ON_SERVICE_FEE
     * @uses self::VALUE_CALCULATED
     * @uses self::VALUE_NOTE
     * @uses self::VALUE_ADD_ON_SERVICE_MARKUP
     * @uses self::VALUE_FARE_SURCHARGE
     * @uses self::VALUE_LOYALTY
     * @uses self::VALUE_FARE_POINTS
     * @uses self::VALUE_DISCOUNT_POINTS
     * @uses self::VALUE_ADD_ON_SERVICE_CANCEL_FEE
     * @uses self::VALUE_UNMAPPED
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FARE_PRICE,
            self::VALUE_DISCOUNT,
            self::VALUE_INCLUDED_TRAVEL_FEE,
            self::VALUE_INCLUDED_TAX,
            self::VALUE_TRAVEL_FEE,
            self::VALUE_TAX,
            self::VALUE_SERVICE_CHARGE,
            self::VALUE_PROMOTION_DISCOUNT,
            self::VALUE_CONNECTION_ADJUSTMENT_AMOUNT,
            self::VALUE_ADD_ON_SERVICE_PRICE,
            self::VALUE_INCLUDED_ADD_ON_SERVICE_FEE,
            self::VALUE_ADD_ON_SERVICE_FEE,
            self::VALUE_CALCULATED,
            self::VALUE_NOTE,
            self::VALUE_ADD_ON_SERVICE_MARKUP,
            self::VALUE_FARE_SURCHARGE,
            self::VALUE_LOYALTY,
            self::VALUE_FARE_POINTS,
            self::VALUE_DISCOUNT_POINTS,
            self::VALUE_ADD_ON_SERVICE_CANCEL_FEE,
            self::VALUE_UNMAPPED,
        ];
    }
}
