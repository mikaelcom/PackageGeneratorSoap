<?php

namespace TestSite\ServiceType;

use \SoapClient\SoapClient;

/**
 * This class stands for Process ServiceType
 * @subpackage Services
 */
class Process extends SoapClient
{
    /**
     * Method to call the operation originally named ProcessSRL
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param string $sRLFile
     * @param string $requestName
     * @param string $key
     * @return string|bool
     */
    public function ProcessSRL($sRLFile, $requestName, $key)
    {
        try {
            $this->setResult(self::getSoapClient()->ProcessSRL($sRLFile, $requestName, $key));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ProcessSRL2
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param string $sRLFile
     * @param string $requestName
     * @param string $key1
     * @param string $key2
     * @return string|bool
     */
    public function ProcessSRL2($sRLFile, $requestName, $key1, $key2)
    {
        try {
            $this->setResult(self::getSoapClient()->ProcessSRL2($sRLFile, $requestName, $key1, $key2));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ProcessSQL
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param string $dataSource
     * @param string $sQLStatement
     * @param string $userName
     * @param string $password
     * @return string|bool
     */
    public function ProcessSQL($dataSource, $sQLStatement, $userName, $password)
    {
        try {
            $this->setResult(self::getSoapClient()->ProcessSQL($dataSource, $sQLStatement, $userName, $password));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return string
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
