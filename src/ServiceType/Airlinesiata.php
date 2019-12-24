<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Airlinesiata ServiceType
 * @subpackage Services
 */
class Airlinesiata extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named airlines_iata
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $name
     * @param string $supplier_id
     * @param string $provider_id
     * @return \Maseuropa\GeneralServices\StructType\AirlineWSDO[]|bool
     */
    public function airlines_iata(\Maseuropa\GeneralServices\StructType\Auth $auth, $name, $supplier_id, $provider_id)
    {
        try {
            $this->setResult($this->getSoapClient()->airlines_iata($auth, $name, $supplier_id, $provider_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\AirlineWSDO[]
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
