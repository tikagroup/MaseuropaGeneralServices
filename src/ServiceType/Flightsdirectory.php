<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Flightsdirectory ServiceType
 * @subpackage Services
 */
class Flightsdirectory extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named flights_directory
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $transfer_place_id
     * @param string $date
     * @param string $is_exit
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO[]|bool
     */
    public function flights_directory(\Maseuropa\GeneralServices\StructType\Auth $auth, $transfer_place_id, $date, $is_exit)
    {
        try {
            $this->setResult($this->getSoapClient()->flights_directory($auth, $transfer_place_id, $date, $is_exit));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO[]
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
