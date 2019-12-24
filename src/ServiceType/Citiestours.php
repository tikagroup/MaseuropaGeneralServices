<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Citiestours ServiceType
 * @subpackage Services
 */
class Citiestours extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cities_tours
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_class_type_id
     * @param string $city_name
     * @return Array|bool
     */
    public function cities_tours(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_class_type_id, $city_name)
    {
        try {
            $this->setResult($this->getSoapClient()->cities_tours($auth, $article_class_type_id, $city_name));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return Array
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
