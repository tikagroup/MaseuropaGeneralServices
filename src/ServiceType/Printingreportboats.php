<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Printingreportboats ServiceType
 * @subpackage Services
 */
class Printingreportboats extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named printing_report_boats
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $boat_id
     * @param string $article_id
     * @return Array|bool
     */
    public function printing_report_boats(\Maseuropa\GeneralServices\StructType\Auth $auth, $boat_id, $article_id)
    {
        try {
            $this->setResult($this->getSoapClient()->printing_report_boats($auth, $boat_id, $article_id));
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
