<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cities ServiceType
 * @subpackage Services
 */
class Cities extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cities
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $zone_id
     * @param string $country_zone_id
     * @param string $article_class_type_id
     * @param string $province
     * @param string $active_contract
     * @param string $extended_info
     * @param string $language_id
     * @return Array|bool
     */
    public function cities(\Maseuropa\GeneralServices\StructType\Auth $auth, $zone_id, $country_zone_id, $article_class_type_id, $province, $active_contract, $extended_info, $language_id)
    {
        try {
            $this->setResult($this->getSoapClient()->cities($auth, $zone_id, $country_zone_id, $article_class_type_id, $province, $active_contract, $extended_info, $language_id));
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
