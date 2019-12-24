<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Airportsdestinations ServiceType
 * @subpackage Services
 */
class Airportsdestinations extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named airports_destinations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $origin
     * @param string $article_class_type_id
     * @return \Maseuropa\GeneralServices\StructType\RetvalAirportsDestinationsWSDO[]|bool
     */
    public function airports_destinations(\Maseuropa\GeneralServices\StructType\Auth $auth, $origin, $article_class_type_id)
    {
        try {
            $this->setResult($this->getSoapClient()->airports_destinations($auth, $origin, $article_class_type_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\RetvalAirportsDestinationsWSDO[]
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
