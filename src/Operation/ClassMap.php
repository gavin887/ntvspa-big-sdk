<?php

declare(strict_types=1);

namespace Ntvspa\Big\Operation;

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
            'AssignCongiuntiSeatsRequest'  => '\\Ntvspa\\Big\\Operation\\Structs\\AssignCongiuntiSeatsRequest',
            'AssignCongiuntiSeatsResponse' => '\\Ntvspa\\Big\\Operation\\Structs\\AssignCongiuntiSeatsResponse',
            'ArrayOfWarning'               => '\\Ntvspa\\Big\\Operation\\Arrays\\ArrayOfWarning',
            'Warning'                      => '\\Ntvspa\\Big\\Operation\\Structs\\Warning',
            'ExceptionInfo'                => '\\Ntvspa\\Big\\Operation\\Structs\\ExceptionInfo',
            'ArrayOfAdditionalMessage'     => '\\Ntvspa\\Big\\Operation\\Arrays\\ArrayOfAdditionalMessage',
            'AdditionalMessage'            => '\\Ntvspa\\Big\\Operation\\Structs\\AdditionalMessage',
            'ServiceFault'                 => '\\Ntvspa\\Big\\Operation\\Structs\\ServiceFault',
            'ArrayOfResultStatus'          => '\\Ntvspa\\Big\\Operation\\Arrays\\ArrayOfResultStatus',
        ];
    }
}
