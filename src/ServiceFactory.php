<?php

declare(strict_types=1);

namespace Ntvspa\Big;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class ServiceFactory
{
    protected static $options = [
        'local_wsdl' => true, // 使用本地 wsdl描述文件
        'class_map'  => true, // 结果映射到 对应类
        'debug_mode' => false, // 测试环境
        'show_trace' => false, // 显示错误信息
    ];

    /**
     * @param string                                                                $service
     * @param array{debug_mode:bool,show_trace:bool,local_wsdl:bool,class_map:bool} $options
     *
     * @return AbstractSoapClientBase
     * @date 2025-01-02 14:03
     */
    public static function create($service, $options = [])
    {
        $module = '';
        if (in_array(AbstractSoapClientBase::class, class_parents($service))) {
            $temp = explode('\\', $service);
            $module = $temp[2];
        }

        return new $service(ServiceFactory::options($module, $options));
    }

    /**
     * @param string                                                                $module
     * @param array{debug_mode:bool,show_trace:bool,local_wsdl:bool,class_map:bool} $options
     *
     * @return array
     * @date 2025-01-02 12:46
     */
    public static function options($module, $options = [])
    {
        $options = array_merge(ServiceFactory::$options, $options);
        $wsdlUrl = ServiceFactory::createWSDL($module, $options);

        $soapOptions = [AbstractSoapClientBase::WSDL_URL => $wsdlUrl];
        if ($options['show_trace']) {
            $soapOptions[AbstractSoapClientBase::WSDL_TRACE] = isset($options['show_trace']) ? $options['show_trace'] : false;
        }
        if ($options['class_map']) {
            $mapClazz = "Ntvspa\\Big\\{$module}\\ClassMap";
            $soapOptions[AbstractSoapClientBase::WSDL_CLASSMAP] = $mapClazz::get();
        }

        return $soapOptions;
    }

    public static function createWSDL($module, $options)
    {
        $opts = array_merge(static::$options, $options);

        if ($opts['local_wsdl'] !== false) {
            if ($opts['debug_mode'] == true) {
                return Constants::WSDL_LOCAL . "/test/{$module}Manager.wsdl";
            }
            return Constants::WSDL_LOCAL . "/prod/{$module}Manager.wsdl";
        } else {
            if ($opts['debug_mode'] == true) {
                return Constants::WSDL_DEVELOPMENT . "{$module}Manager.svc?wsdl";
            }
            return Constants::WSDL_PRODUCTION . "{$module}Manager.svc?wsdl";
        }
    }
}