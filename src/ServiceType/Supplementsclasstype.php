<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Supplementsclasstype ServiceType
 * @subpackage Services
 */
class Supplementsclasstype extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named supplements_class_type
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $language_id
     * @return \Maseuropa\GeneralServices\StructType\SupplementClassTypeWSDO[]|bool
     */
    public function supplements_class_type(\Maseuropa\GeneralServices\StructType\Auth $auth, $language_id)
    {
        try {
            $this->setResult($this->getSoapClient()->supplements_class_type($auth, $language_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\SupplementClassTypeWSDO[]
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
