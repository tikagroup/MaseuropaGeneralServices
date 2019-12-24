<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Externalbookingcancelticket ServiceType
 * @subpackage Services
 */
class Externalbookingcancelticket extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named external_booking_cancel_ticket
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $external_locator
     * @param string $booking_id
     * @param string $ticket_number
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketWSDO[]|bool
     */
    public function external_booking_cancel_ticket(\Maseuropa\GeneralServices\StructType\Auth $auth, $external_locator, $booking_id, $ticket_number)
    {
        try {
            $this->setResult($this->getSoapClient()->external_booking_cancel_ticket($auth, $external_locator, $booking_id, $ticket_number));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketWSDO[]
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
