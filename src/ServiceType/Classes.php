<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Classes ServiceType
 * @subpackage Services
 */
class Classes extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named classes
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_superclass_type_id
     * @param string $language_id
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO[]|bool
     */
    public function classes(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_superclass_type_id, $language_id)
    {
        try {
            $this->setResult($this->getSoapClient()->classes($auth, $article_superclass_type_id, $language_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO[]
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
