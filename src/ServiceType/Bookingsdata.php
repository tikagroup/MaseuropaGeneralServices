<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Bookingsdata ServiceType
 * @subpackage Services
 */
class Bookingsdata extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named bookings_data
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $locator
     * @param string $begin_date
     * @param string $end_date
     * @param string $begin_date_service
     * @param string $end_date_service
     * @param string $update_modification
     * @param string $extended_info
     * @param string $email_client
     * @param string $loyalty_card
     * @param string $tickets
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO[]|bool
     */
    public function bookings_data(\Maseuropa\GeneralServices\StructType\Auth $auth, $locator, $begin_date, $end_date, $begin_date_service, $end_date_service, $update_modification, $extended_info, $email_client, $loyalty_card, $tickets)
    {
        try {
            $this->setResult($this->getSoapClient()->bookings_data($auth, $locator, $begin_date, $end_date, $begin_date_service, $end_date_service, $update_modification, $extended_info, $email_client, $loyalty_card, $tickets));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO[]
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
