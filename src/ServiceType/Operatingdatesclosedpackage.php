<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Operatingdatesclosedpackage ServiceType
 * @subpackage Services
 */
class Operatingdatesclosedpackage extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named operating_dates_closed_package
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_class_type_id
     * @param string $airport_id
     * @param string $begin_date
     * @param string $end_date
     * @return Array|bool
     */
    public function operating_dates_closed_package(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_class_type_id, $airport_id, $begin_date, $end_date)
    {
        try {
            $this->setResult($this->getSoapClient()->operating_dates_closed_package($auth, $article_class_type_id, $airport_id, $begin_date, $end_date));
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
