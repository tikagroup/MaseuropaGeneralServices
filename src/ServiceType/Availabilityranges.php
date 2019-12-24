<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Availabilityranges ServiceType
 * @subpackage Services
 */
class Availabilityranges extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named availability_ranges
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_id
     * @param string $my_assigned_allotment
     * @return \Maseuropa\GeneralServices\StructType\AvailabilityRangeWSDO[]|bool
     */
    public function availability_ranges(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_id, $my_assigned_allotment)
    {
        try {
            $this->setResult($this->getSoapClient()->availability_ranges($auth, $article_id, $my_assigned_allotment));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\AvailabilityRangeWSDO[]
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
