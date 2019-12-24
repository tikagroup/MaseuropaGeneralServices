<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Airportsorigin ServiceType
 * @subpackage Services
 */
class Airportsorigin extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named airports_origin
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO[]|bool
     */
    public function airports_origin(\Maseuropa\GeneralServices\StructType\Auth $auth)
    {
        try {
            $this->setResult($this->getSoapClient()->airports_origin($auth));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO[]
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
