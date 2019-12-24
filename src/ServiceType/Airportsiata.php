<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Airportsiata ServiceType
 * @subpackage Services
 */
class Airportsiata extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named airports_iata
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $name
     * @param string $city
     * @param string $country_code
     * @param string $country_area_id
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO[]|bool
     */
    public function airports_iata(\Maseuropa\GeneralServices\StructType\Auth $auth, $name, $city, $country_code, $country_area_id)
    {
        try {
            $this->setResult($this->getSoapClient()->airports_iata($auth, $name, $city, $country_code, $country_area_id));
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
