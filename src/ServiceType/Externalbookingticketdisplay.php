<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Externalbookingticketdisplay ServiceType
 * @subpackage Services
 */
class Externalbookingticketdisplay extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named external_booking_ticket_display
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $locator
     * @return Array|bool
     */
    public function external_booking_ticket_display(\Maseuropa\GeneralServices\StructType\Auth $auth, $locator)
    {
        try {
            $this->setResult($this->getSoapClient()->external_booking_ticket_display($auth, $locator));
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
