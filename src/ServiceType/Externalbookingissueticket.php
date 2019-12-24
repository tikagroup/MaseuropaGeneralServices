<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Externalbookingissueticket ServiceType
 * @subpackage Services
 */
class Externalbookingissueticket extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named external_booking_issue_ticket
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $external_locator
     * @param string $booking_id
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingIssueTicketWSDO[]|bool
     */
    public function external_booking_issue_ticket(\Maseuropa\GeneralServices\StructType\Auth $auth, $external_locator, $booking_id)
    {
        try {
            $this->setResult($this->getSoapClient()->external_booking_issue_ticket($auth, $external_locator, $booking_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingIssueTicketWSDO[]
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
