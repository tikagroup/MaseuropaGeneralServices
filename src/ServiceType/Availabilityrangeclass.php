<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Availabilityrangeclass ServiceType
 * @subpackage Services
 */
class Availabilityrangeclass extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named availability_range_class
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_class_id
     * @param string $from_date
     * @param string $to_date
     * @param string $id_prestatario
     * @return Array|bool
     */
    public function availability_range_class(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_class_id, $from_date, $to_date, $id_prestatario)
    {
        try {
            $this->setResult($this->getSoapClient()->availability_range_class($auth, $article_class_id, $from_date, $to_date, $id_prestatario));
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
