<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Dynamicpackage ServiceType
 * @subpackage Services
 */
class Dynamicpackage extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named dynamic_package
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $initial_date
     * @param string $article_id
     * @param string $language_id
     * @return \Maseuropa\GeneralServices\StructType\DynamicPackageWSDO[]|bool
     */
    public function dynamic_package(\Maseuropa\GeneralServices\StructType\Auth $auth, $initial_date, $article_id, $language_id)
    {
        try {
            $this->setResult($this->getSoapClient()->dynamic_package($auth, $initial_date, $article_id, $language_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\DynamicPackageWSDO[]
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
