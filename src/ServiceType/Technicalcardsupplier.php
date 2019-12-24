<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Technicalcardsupplier ServiceType
 * @subpackage Services
 */
class Technicalcardsupplier extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named technical_card_supplier
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $supplier_id
     * @param string $language_id
     * @param string $itinerary_description
     * @return struct|bool
     */
    public function technical_card_supplier(\Maseuropa\GeneralServices\StructType\Auth $auth, $supplier_id, $language_id, $itinerary_description)
    {
        try {
            $this->setResult($this->getSoapClient()->technical_card_supplier($auth, $supplier_id, $language_id, $itinerary_description));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return struct
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
