<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Countries ServiceType
 * @subpackage Services
 */
class Countries extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named countries
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $date_update
     * @param string $article_class_id
     * @param string $language_id
     * @return \Maseuropa\GeneralServices\StructType\CountryWSDO[]|bool
     */
    public function countries(\Maseuropa\GeneralServices\StructType\Auth $auth, $date_update, $article_class_id, $language_id)
    {
        try {
            $this->setResult($this->getSoapClient()->countries($auth, $date_update, $article_class_id, $language_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\CountryWSDO[]
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
