<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Provinces ServiceType
 * @subpackage Services
 */
class Provinces extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named provinces
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $zone_id
     * @param string $article_class_type_id
     * @return \Maseuropa\GeneralServices\StructType\ProvinceWSDO[]|bool
     */
    public function provinces(\Maseuropa\GeneralServices\StructType\Auth $auth, $zone_id, $article_class_type_id)
    {
        try {
            $this->setResult($this->getSoapClient()->provinces($auth, $zone_id, $article_class_type_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\ProvinceWSDO[]
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
