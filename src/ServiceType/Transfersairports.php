<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transfersairports ServiceType
 * @subpackage Services
 */
class Transfersairports extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named transfers_airports
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO[]|bool
     */
    public function transfers_airports(\Maseuropa\GeneralServices\StructType\Auth $auth)
    {
        try {
            $this->setResult($this->getSoapClient()->transfers_airports($auth));
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
