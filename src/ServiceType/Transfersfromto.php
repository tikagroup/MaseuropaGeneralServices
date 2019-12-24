<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transfersfromto ServiceType
 * @subpackage Services
 */
class Transfersfromto extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named transfers_from_to
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_class_type_id
     * @param string $country_zone_id
     * @return \Maseuropa\GeneralServices\StructType\TransfersWSDO[]|bool
     */
    public function transfers_from_to(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_class_type_id, $country_zone_id)
    {
        try {
            $this->setResult($this->getSoapClient()->transfers_from_to($auth, $article_class_type_id, $country_zone_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\TransfersWSDO[]
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
