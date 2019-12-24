<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Baggageinfo ServiceType
 * @subpackage Services
 */
class Baggageinfo extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named baggage_info
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_class_type_id
     * @param string $request_search
     * @param string $request_code
     * @return Array|bool
     */
    public function baggage_info(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_class_type_id, $request_search, $request_code)
    {
        try {
            $this->setResult($this->getSoapClient()->baggage_info($auth, $article_class_type_id, $request_search, $request_code));
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
