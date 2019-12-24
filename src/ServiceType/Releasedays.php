<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Releasedays ServiceType
 * @subpackage Services
 */
class Releasedays extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named release_days
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_id
     * @param string $my_assigned_release
     * @return \Maseuropa\GeneralServices\StructType\ReleaseDayWSDO[]|bool
     */
    public function release_days(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_id, $my_assigned_release)
    {
        try {
            $this->setResult($this->getSoapClient()->release_days($auth, $article_id, $my_assigned_release));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\ReleaseDayWSDO[]
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
