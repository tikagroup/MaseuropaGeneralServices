<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Suppliersboats ServiceType
 * @subpackage Services
 */
class Suppliersboats extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named suppliersboats
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $zone_id
     * @param string $article_class_type_id
     * @param string $language_id
     * @return Array|bool
     */
    public function suppliersboats(\Maseuropa\GeneralServices\StructType\Auth $auth, $zone_id, $article_class_type_id, $language_id)
    {
        try {
            $this->setResult($this->getSoapClient()->suppliersboats($auth, $zone_id, $article_class_type_id, $language_id));
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
