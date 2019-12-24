<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Agencies ServiceType
 * @subpackage Services
 */
class Agencies extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named agencies
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $name
     * @param string $address
     * @param string $city
     * @param string $province
     * @param string $country
     * @param string $agency_id
     * @return Array|bool
     */
    public function agencies(\Maseuropa\GeneralServices\StructType\Auth $auth, $name, $address, $city, $province, $country, $agency_id)
    {
        try {
            $this->setResult($this->getSoapClient()->agencies($auth, $name, $address, $city, $province, $country, $agency_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return Array
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
