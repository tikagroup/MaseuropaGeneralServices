<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Contractavailabilitymodifications ServiceType
 * @subpackage Services
 */
class Contractavailabilitymodifications extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * contract_availability_modifications
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $date
     * @return \Maseuropa\GeneralServices\StructType\ArticleIdWSDO[]|bool
     */
    public function contract_availability_modifications(\Maseuropa\GeneralServices\StructType\Auth $auth, $date)
    {
        try {
            $this->setResult($this->getSoapClient()->contract_availability_modifications($auth, $date));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\ArticleIdWSDO[]
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
