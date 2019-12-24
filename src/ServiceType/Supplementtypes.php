<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Supplementtypes ServiceType
 * @subpackage Services
 */
class Supplementtypes extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named supplement_types
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $language_id
     * @param string $supplement_class_type_id
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO[]|bool
     */
    public function supplement_types(\Maseuropa\GeneralServices\StructType\Auth $auth, $language_id, $supplement_class_type_id)
    {
        try {
            $this->setResult($this->getSoapClient()->supplement_types($auth, $language_id, $supplement_class_type_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO[]
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
