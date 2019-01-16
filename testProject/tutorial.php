<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://soapclient.com/xml/SQLDataSoap.WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://soapclient.com/xml/SQLDataSoap.WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \TestSite\ClassMap::get(),
);
/**
 * Samples for Process ServiceType
 */
$process = new \TestSite\ServiceType\Process($options);
/**
 * Sample call for ProcessSRL operation/method
 */
if ($process->ProcessSRL($SRLFile, $RequestName, $key) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for ProcessSRL2 operation/method
 */
if ($process->ProcessSRL2($SRLFile, $RequestName, $key1, $key2) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for ProcessSQL operation/method
 */
if ($process->ProcessSQL($DataSource, $SQLStatement, $UserName, $Password) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
