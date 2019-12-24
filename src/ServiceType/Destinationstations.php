<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Destinationstations ServiceType
 * @subpackage Services
 */
class Destinationstations extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named destination_stations
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $origin_station_id
     * @return \Maseuropa\GeneralServices\StructType\StationWSDO[]|bool
     */
    public function destination_stations(\Maseuropa\GeneralServices\StructType\Auth $auth, $origin_station_id)
    {
        try {
            $this->setResult($this->getSoapClient()->destination_stations($auth, $origin_station_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\StationWSDO[]
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
