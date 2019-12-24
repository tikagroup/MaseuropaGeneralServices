<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Printingreport ServiceType
 * @subpackage Services
 */
class Printingreport extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named printing_report
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_id
     * @param string $language_id
     * @param string $begin_date
     * @param string $end_date
     * @param string $get_contract_details
     * @return struct|bool
     */
    public function printing_report(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_id, $language_id, $begin_date, $end_date, $get_contract_details)
    {
        try {
            $this->setResult($this->getSoapClient()->printing_report($auth, $article_id, $language_id, $begin_date, $end_date, $get_contract_details));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return struct
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
