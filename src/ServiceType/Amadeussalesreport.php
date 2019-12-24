<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Amadeussalesreport ServiceType
 * @subpackage Services
 */
class Amadeussalesreport extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named amadeus_sales_report
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $begin_date
     * @param string $end_date
     * @return \Maseuropa\GeneralServices\StructType\AmadeusSalesReportWSDO|bool
     */
    public function amadeus_sales_report(\Maseuropa\GeneralServices\StructType\Auth $auth, $begin_date, $end_date)
    {
        try {
            $this->setResult($this->getSoapClient()->amadeus_sales_report($auth, $begin_date, $end_date));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\AmadeusSalesReportWSDO
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
