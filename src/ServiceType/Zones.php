<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Zones ServiceType
 * @subpackage Services
 */
class Zones extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named zones
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $date_update
     * @param string $article_class_type_id
     * @param string $country_zone_id
     * @param string $language_id
     * @param string $active_contract
     * @return \Maseuropa\GeneralServices\StructType\ZoneWSDO[]|bool
     */
    public function zones(\Maseuropa\GeneralServices\StructType\Auth $auth, $date_update, $article_class_type_id, $country_zone_id, $language_id, $active_contract)
    {
        try {
            $this->setResult($this->getSoapClient()->zones($auth, $date_update, $article_class_type_id, $country_zone_id, $language_id, $active_contract));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\ZoneWSDO[]
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
