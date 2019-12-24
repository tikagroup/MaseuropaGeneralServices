<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Newtransferflight ServiceType
 * @subpackage Services
 */
class Newtransferflight extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named new_transfer_flight
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
     * @param string $number_flight
     * @param string $hour
     * @param string $airport_hotel
     * @return string|bool
     */
    public function new_transfer_flight(\Maseuropa\GeneralServices\StructType\Auth $auth, $date, $pickup_airport, $origin_airport, $number_flight, $hour, $airport_hotel)
    {
        try {
            $this->setResult($this->getSoapClient()->new_transfer_flight($auth, $date, $pickup_airport, $origin_airport, $number_flight, $hour, $airport_hotel));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
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
