<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Airportsoriginclosedpackage ServiceType
 * @subpackage Services
 */
class Airportsoriginclosedpackage extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named airports_origin_closed_package
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_class_type_id
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO[]|bool
     */
    public function airports_origin_closed_package(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_class_type_id)
    {
        try {
            $this->setResult($this->getSoapClient()->airports_origin_closed_package($auth, $article_class_type_id));
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
