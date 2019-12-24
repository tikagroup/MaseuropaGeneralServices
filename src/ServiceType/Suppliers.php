<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Suppliers ServiceType
 * @subpackage Services
 */
class Suppliers extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named suppliers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $date_update
     * @param string $zone_id
     * @param string $article_class_type_id
     * @param string $province
     * @param string $city
     * @param string $language_id
     * @param string $extended_info
     * @param string $active_contract
     * @return Array|bool
     */
    public function suppliers(\Maseuropa\GeneralServices\StructType\Auth $auth, $date_update, $zone_id, $article_class_type_id, $province, $city, $language_id, $extended_info, $active_contract)
    {
        try {
            $this->setResult($this->getSoapClient()->suppliers($auth, $date_update, $zone_id, $article_class_type_id, $province, $city, $language_id, $extended_info, $active_contract));
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
