<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Articletypescentral ServiceType
 * @subpackage Services
 */
class Articletypescentral extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named article_types_central
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $language_id
     * @return \Maseuropa\GeneralServices\StructType\ArticleTypeWSDO[]|bool
     */
    public function article_types_central(\Maseuropa\GeneralServices\StructType\Auth $auth, $language_id)
    {
        try {
            $this->setResult($this->getSoapClient()->article_types_central($auth, $language_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\ArticleTypeWSDO[]
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
