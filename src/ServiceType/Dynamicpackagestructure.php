<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Dynamicpackagestructure ServiceType
 * @subpackage Services
 */
class Dynamicpackagestructure extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named dynamic_package_structure
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $dynamic_package_id
     * @param string $language_id
     * @return struct|bool
     */
    public function dynamic_package_structure(\Maseuropa\GeneralServices\StructType\Auth $auth, $dynamic_package_id, $language_id)
    {
        try {
            $this->setResult($this->getSoapClient()->dynamic_package_structure($auth, $dynamic_package_id, $language_id));
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
