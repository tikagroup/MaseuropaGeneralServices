<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Externalflightsdirectory ServiceType
 * @subpackage Services
 */
class Externalflightsdirectory extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named external_flights_directory
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $date
     * @param string $pickup_airport
     * @param string $origin_airport
     * @param string $airport_hotel
     * @return \Maseuropa\GeneralServices\StructType\ExternalFlightWSDO[]|bool
     */
    public function external_flights_directory(\Maseuropa\GeneralServices\StructType\Auth $auth, $date, $pickup_airport, $origin_airport, $airport_hotel)
    {
        try {
            $this->setResult($this->getSoapClient()->external_flights_directory($auth, $date, $pickup_airport, $origin_airport, $airport_hotel));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\ExternalFlightWSDO[]
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
