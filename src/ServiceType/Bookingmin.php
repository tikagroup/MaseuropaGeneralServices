<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Bookingmin ServiceType
 * @subpackage Services
 */
class Bookingmin extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named booking_min
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $locator
     * @param string $booking_reference
     * @param string $begin_date_service
     * @param string $supplier_name
     * @param string $passenger_name
     * @param string $passenger_surname
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO[]|bool
     */
    public function booking_min(\Maseuropa\GeneralServices\StructType\Auth $auth, $locator, $booking_reference, $begin_date_service, $supplier_name, $passenger_name, $passenger_surname)
    {
        try {
            $this->setResult($this->getSoapClient()->booking_min($auth, $locator, $booking_reference, $begin_date_service, $supplier_name, $passenger_name, $passenger_surname));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO[]
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
