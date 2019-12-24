<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Activearticles ServiceType
 * @subpackage Services
 */
class Activearticles extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named active_articles
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_class_type_id
     * @param string $supplier_id
     * @param string $language_id
     * @param string $date_update
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO[]|bool
     */
    public function active_articles(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_class_type_id, $supplier_id, $language_id, $date_update)
    {
        try {
            $this->setResult($this->getSoapClient()->active_articles($auth, $article_class_type_id, $supplier_id, $language_id, $date_update));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO[]
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
