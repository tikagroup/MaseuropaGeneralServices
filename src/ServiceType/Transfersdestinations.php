<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transfersdestinations ServiceType
 * @subpackage Services
 */
class Transfersdestinations extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named transfers_destinations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $supplier_id
     * @param string $flight
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceSupplierWSDO[]|bool
     */
    public function transfers_destinations(\Maseuropa\GeneralServices\StructType\Auth $auth, $supplier_id, $flight)
    {
        try {
            $this->setResult($this->getSoapClient()->transfers_destinations($auth, $supplier_id, $flight));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceSupplierWSDO[]
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
