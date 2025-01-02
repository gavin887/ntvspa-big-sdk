<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session;

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
            'LoginRequest'                  => '\\Ntvspa\\Big\\Session\\Structs\\LoginRequest',
            'LoginResponse'                 => '\\Ntvspa\\Big\\Session\\Structs\\LoginResponse',
            'Login'                         => '\\Ntvspa\\Big\\Session\\Structs\\Login',
            'ResponseBase'                  => '\\Ntvspa\\Big\\Session\\Structs\\ResponseBase',
            'ArrayOfWarning'                => '\\Ntvspa\\Big\\Session\\Arrays\\ArrayOfWarning',
            'Warning'                       => '\\Ntvspa\\Big\\Session\\Structs\\Warning',
            'ExceptionInfo'                 => '\\Ntvspa\\Big\\Session\\Structs\\ExceptionInfo',
            'ArrayOfAdditionalMessage'      => '\\Ntvspa\\Big\\Session\\Arrays\\ArrayOfAdditionalMessage',
            'AdditionalMessage'             => '\\Ntvspa\\Big\\Session\\Structs\\AdditionalMessage',
            'ServiceFault'                  => '\\Ntvspa\\Big\\Session\\Structs\\ServiceFault',
            'Agent'                         => '\\Ntvspa\\Big\\Session\\Structs\\Agent',
            'ArrayOfEmployeeOffer'          => '\\Ntvspa\\Big\\Session\\Arrays\\ArrayOfEmployeeOffer',
            'EmployeeOffer'                 => '\\Ntvspa\\Big\\Session\\Structs\\EmployeeOffer',
            'CorporateProfile'              => '\\Ntvspa\\Big\\Session\\Structs\\CorporateProfile',
            'CashBackDetails'               => '\\Ntvspa\\Big\\Session\\Structs\\CashBackDetails',
            'LoyaltyInfo'                   => '\\Ntvspa\\Big\\Session\\Structs\\LoyaltyInfo',
            'ArrayOfFop'                    => '\\Ntvspa\\Big\\Session\\Arrays\\ArrayOfFop',
            'Fop'                           => '\\Ntvspa\\Big\\Session\\Structs\\Fop',
            'ArrayOfContact'                => '\\Ntvspa\\Big\\Session\\Arrays\\ArrayOfContact',
            'Contact'                       => '\\Ntvspa\\Big\\Session\\Structs\\Contact',
            'ArrayOfPromotion'              => '\\Ntvspa\\Big\\Session\\Arrays\\ArrayOfPromotion',
            'Promotion'                     => '\\Ntvspa\\Big\\Session\\Structs\\Promotion',
            'ArrayOfProperty'               => '\\Ntvspa\\Big\\Session\\Arrays\\ArrayOfProperty',
            'Property'                      => '\\Ntvspa\\Big\\Session\\Structs\\Property',
            'CorporateSegment'              => '\\Ntvspa\\Big\\Session\\Structs\\CorporateSegment',
            'ArrayOfstring'                 => '\\Ntvspa\\Big\\Session\\Arrays\\ArrayOfstring',
            'ArrayOfMarket'                 => '\\Ntvspa\\Big\\Session\\Arrays\\ArrayOfMarket',
            'Market'                        => '\\Ntvspa\\Big\\Session\\Structs\\Market',
            'LogoutRequest'                 => '\\Ntvspa\\Big\\Session\\Structs\\LogoutRequest',
            'LogoutResponse'                => '\\Ntvspa\\Big\\Session\\Structs\\LogoutResponse',
            'ClearSessionRequest'           => '\\Ntvspa\\Big\\Session\\Structs\\ClearSessionRequest',
            'ClearSessionResponse'          => '\\Ntvspa\\Big\\Session\\Structs\\ClearSessionResponse',
            'ChangePasswordRequest'         => '\\Ntvspa\\Big\\Session\\Structs\\ChangePasswordRequest',
            'ChangePasswordResponse'        => '\\Ntvspa\\Big\\Session\\Structs\\ChangePasswordResponse',
            'RequestResetPasswordRequest'   => '\\Ntvspa\\Big\\Session\\Structs\\RequestResetPasswordRequest',
            'RequestResetPasswordResponse'  => '\\Ntvspa\\Big\\Session\\Structs\\RequestResetPasswordResponse',
            'CompleteResetPasswordRequest'  => '\\Ntvspa\\Big\\Session\\Structs\\CompleteResetPasswordRequest',
            'CompleteResetPasswordResponse' => '\\Ntvspa\\Big\\Session\\Structs\\CompleteResetPasswordResponse',
        ];
    }
}
