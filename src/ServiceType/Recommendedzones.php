<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Recommendedzones ServiceType
 * @subpackage Services
 */
class Recommendedzones extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named recommended_zones
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_class_type_id_origin
     * @param string $article_class_type_id_destination
     * @param string $zone_id
     * @return \Maseuropa\GeneralServices\StructType\RecommendedZoneWSDO[]|bool
     */
    public function recommended_zones(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_class_type_id_origin, $article_class_type_id_destination, $zone_id)
    {
        try {
            $this->setResult($this->getSoapClient()->recommended_zones($auth, $article_class_type_id_origin, $article_class_type_id_destination, $zone_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\RecommendedZoneWSDO[]
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
