<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Printingreportcruisecabin ServiceType
 * @subpackage Services
 */
class Printingreportcruisecabin extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named printing_report_cruise_cabin
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $id_cab_per
     * @return Array|bool
     */
    public function printing_report_cruise_cabin(\Maseuropa\GeneralServices\StructType\Auth $auth, $id_cab_per)
    {
        try {
            $this->setResult($this->getSoapClient()->printing_report_cruise_cabin($auth, $id_cab_per));
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
