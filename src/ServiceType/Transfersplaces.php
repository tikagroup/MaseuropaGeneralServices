<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transfersplaces ServiceType
 * @subpackage Services
 */
class Transfersplaces extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named transfers_places
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $transfer_type_place_id
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceWSDO[]|bool
     */
    public function transfers_places(\Maseuropa\GeneralServices\StructType\Auth $auth, $transfer_type_place_id)
    {
        try {
            $this->setResult($this->getSoapClient()->transfers_places($auth, $transfer_type_place_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceWSDO[]
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
