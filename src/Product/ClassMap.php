<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     *
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'FinalizeOrderRequest'                => '\\Ntvspa\\Big\\Product\\Structs\\FinalizeOrderRequest',
            'FinalizeOrderResponse'               => '\\Ntvspa\\Big\\Product\\Structs\\FinalizeOrderResponse',
            'Payment'                             => '\\Ntvspa\\Big\\Product\\Structs\\Payment',
            'PayPalPayment'                       => '\\Ntvspa\\Big\\Product\\Structs\\PayPalPayment',
            'ThreeDSecureAuthReq'                 => '\\Ntvspa\\Big\\Product\\Structs\\ThreeDSecureAuthReq',
            'ThreeDSecureAcsResponse'             => '\\Ntvspa\\Big\\Product\\Structs\\ThreeDSecureAcsResponse',
            'AmazonPayPayment'                    => '\\Ntvspa\\Big\\Product\\Structs\\AmazonPayPayment',
            'ArrayOfPaymentField'                 => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfPaymentField',
            'PaymentField'                        => '\\Ntvspa\\Big\\Product\\Structs\\PaymentField',
            'ResponseBase'                        => '\\Ntvspa\\Big\\Product\\Structs\\ResponseBase',
            'ArrayOfWarning'                      => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfWarning',
            'Warning'                             => '\\Ntvspa\\Big\\Product\\Structs\\Warning',
            'ExceptionInfo'                       => '\\Ntvspa\\Big\\Product\\Structs\\ExceptionInfo',
            'ArrayOfAdditionalMessage'            => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfAdditionalMessage',
            'AdditionalMessage'                   => '\\Ntvspa\\Big\\Product\\Structs\\AdditionalMessage',
            'ServiceFault'                        => '\\Ntvspa\\Big\\Product\\Structs\\ServiceFault',
            'ThreeDSecureAuthRes'                 => '\\Ntvspa\\Big\\Product\\Structs\\ThreeDSecureAuthRes',
            'CreateOrderRequest'                  => '\\Ntvspa\\Big\\Product\\Structs\\CreateOrderRequest',
            'CreateOrderResponse'                 => '\\Ntvspa\\Big\\Product\\Structs\\CreateOrderResponse',
            'CustomerOrder'                       => '\\Ntvspa\\Big\\Product\\Structs\\CustomerOrder',
            'BuyerHolderPartner'                  => '\\Ntvspa\\Big\\Product\\Structs\\BuyerHolderPartner',
            'ArrayOfOrder'                        => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfOrder',
            'Order'                               => '\\Ntvspa\\Big\\Product\\Structs\\Order',
            'ArrayOfLineItemOrder'                => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfLineItemOrder',
            'LineItemOrder'                       => '\\Ntvspa\\Big\\Product\\Structs\\LineItemOrder',
            'ArrayOfProductAttributeOrder'        => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfProductAttributeOrder',
            'ProductAttributeOrder'               => '\\Ntvspa\\Big\\Product\\Structs\\ProductAttributeOrder',
            'RetrieveProductsCatalogRequest'      => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveProductsCatalogRequest',
            'RetrieveProductsCatalogResponse'     => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveProductsCatalogResponse',
            'ArrayOfCatalog'                      => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfCatalog',
            'Catalog'                             => '\\Ntvspa\\Big\\Product\\Structs\\Catalog',
            'ArrayOfCatalogProduct'               => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfCatalogProduct',
            'CatalogProduct'                      => '\\Ntvspa\\Big\\Product\\Structs\\CatalogProduct',
            'ArrayOfCatalogProductChild'          => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfCatalogProductChild',
            'CatalogProductChild'                 => '\\Ntvspa\\Big\\Product\\Structs\\CatalogProductChild',
            'ArrayOfCatalogProductAttribute'      => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfCatalogProductAttribute',
            'CatalogProductAttribute'             => '\\Ntvspa\\Big\\Product\\Structs\\CatalogProductAttribute',
            'ArrayOfCatalogEligibilityCondition'  => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfCatalogEligibilityCondition',
            'CatalogEligibilityCondition'         => '\\Ntvspa\\Big\\Product\\Structs\\CatalogEligibilityCondition',
            'GetAccountByReferenceRequest'        => '\\Ntvspa\\Big\\Product\\Structs\\GetAccountByReferenceRequest',
            'GetAccountByReferenceResponse'       => '\\Ntvspa\\Big\\Product\\Structs\\GetAccountByReferenceResponse',
            'RequestInvoiceRequest'               => '\\Ntvspa\\Big\\Product\\Structs\\RequestInvoiceRequest',
            'RequestInvoiceResponse'              => '\\Ntvspa\\Big\\Product\\Structs\\RequestInvoiceResponse',
            'InvoiceProfile'                      => '\\Ntvspa\\Big\\Product\\Structs\\InvoiceProfile',
            'Address'                             => '\\Ntvspa\\Big\\Product\\Structs\\Address',
            'RetrieveAssetsRequest'               => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveAssetsRequest',
            'RetrieveAssetsResponse'              => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveAssetsResponse',
            'CustomerHolder'                      => '\\Ntvspa\\Big\\Product\\Structs\\CustomerHolder',
            'ArrayOfAsset'                        => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfAsset',
            'Asset'                               => '\\Ntvspa\\Big\\Product\\Structs\\Asset',
            'ArrayOfProduct'                      => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfProduct',
            'Product'                             => '\\Ntvspa\\Big\\Product\\Structs\\Product',
            'ArrayOfProductAttribute'             => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfProductAttribute',
            'ProductAttribute'                    => '\\Ntvspa\\Big\\Product\\Structs\\ProductAttribute',
            'ArrayOfBooking'                      => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfBooking',
            'Booking'                             => '\\Ntvspa\\Big\\Product\\Structs\\Booking',
            'ArrayOfSegment'                      => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfSegment',
            'Segment'                             => '\\Ntvspa\\Big\\Product\\Structs\\Segment',
            'ArrayOfFare'                         => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfFare',
            'Fare'                                => '\\Ntvspa\\Big\\Product\\Structs\\Fare',
            'ArrayOfdateTime'                     => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfdateTime',
            'ArrayOfanyType'                      => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfanyType',
            'RetrieveVoucherAmountRequest'        => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveVoucherAmountRequest',
            'RetrieveVoucherAmountResponse'       => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveVoucherAmountResponse',
            'RetrieveBusinessPassCardRequest'     => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveBusinessPassCardRequest',
            'RetrieveBusinessPassCardResponse'    => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveBusinessPassCardResponse',
            'CardData'                            => '\\Ntvspa\\Big\\Product\\Structs\\CardData',
            'Holder'                              => '\\Ntvspa\\Big\\Product\\Structs\\Holder',
            'Parameter'                           => '\\Ntvspa\\Big\\Product\\Structs\\Parameter',
            'ArrayOfTransaction'                  => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfTransaction',
            'Transaction'                         => '\\Ntvspa\\Big\\Product\\Structs\\Transaction',
            'RetrieveBusinessPassCatalogRequest'  => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveBusinessPassCatalogRequest',
            'RetrieveBusinessPassCatalogResponse' => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveBusinessPassCatalogResponse',
            'ArrayOfOffer'                        => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfOffer',
            'Offer'                               => '\\Ntvspa\\Big\\Product\\Structs\\Offer',
            'RetrieveProductAssetsRequest'        => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveProductAssetsRequest',
            'RetrieveProductAssetsResponse'       => '\\Ntvspa\\Big\\Product\\Structs\\RetrieveProductAssetsResponse',
            'Customer'                            => '\\Ntvspa\\Big\\Product\\Structs\\Customer',
            'PageControl'                         => '\\Ntvspa\\Big\\Product\\Structs\\PageControl',
            'Partner'                             => '\\Ntvspa\\Big\\Product\\Structs\\Partner',
            'ArrayOfBlackDays'                    => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfBlackDays',
            'BlackDays'                           => '\\Ntvspa\\Big\\Product\\Structs\\BlackDays',
            'BookingContact'                      => '\\Ntvspa\\Big\\Product\\Structs\\BookingContact',
            'GetProductsAvailabilityRequest'      => '\\Ntvspa\\Big\\Product\\Structs\\GetProductsAvailabilityRequest',
            'GetProductsAvailabilityResponse'     => '\\Ntvspa\\Big\\Product\\Structs\\GetProductsAvailabilityResponse',
            'ArrayOfProductItem'                  => '\\Ntvspa\\Big\\Product\\Arrays\\ArrayOfProductItem',
            'ProductItem'                         => '\\Ntvspa\\Big\\Product\\Structs\\ProductItem',
            'ItemAttribute'                       => '\\Ntvspa\\Big\\Product\\Structs\\ItemAttribute',
            'Promotion'                           => '\\Ntvspa\\Big\\Product\\Structs\\Promotion',
            'CreateProductOrderRequest'           => '\\Ntvspa\\Big\\Product\\Structs\\CreateProductOrderRequest',
            'CreateProductOrderResponse'          => '\\Ntvspa\\Big\\Product\\Structs\\CreateProductOrderResponse',
            'StartPayPalPayment'                  => '\\Ntvspa\\Big\\Product\\Structs\\StartPayPalPayment',
            'StartPaypalPaymentResponse'          => '\\Ntvspa\\Big\\Product\\Structs\\StartPaypalPaymentResponse',
            'FinalizeProductOrderPaymentRequest'  => '\\Ntvspa\\Big\\Product\\Structs\\FinalizeProductOrderPaymentRequest',
            'FinalizeProductOrderPaymentResponse' => '\\Ntvspa\\Big\\Product\\Structs\\FinalizeProductOrderPaymentResponse',
        ];
    }
}
