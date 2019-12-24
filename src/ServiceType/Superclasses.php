<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Superclasses ServiceType
 * @subpackage Services
 */
class Superclasses extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named superclasses
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $language_id
     * @return \Maseuropa\GeneralServices\StructType\SuperclassWSDO[]|bool
     */
    public function superclasses(\Maseuropa\GeneralServices\StructType\Auth $auth, $language_id)
    {
        try {
            $this->setResult($this->getSoapClient()->superclasses($auth, $language_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\SuperclassWSDO[]
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
