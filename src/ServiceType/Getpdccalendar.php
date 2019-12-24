<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Getpdccalendar ServiceType
 * @subpackage Services
 */
class Getpdccalendar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named get_pdc_calendar
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $id_tipo_articulo_clase
     * @param string $month
     * @param string $year
     * @param string $origin
     * @param string $destination
     * @param string $category
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsRelationsWSDO|bool
     */
    public function get_pdc_calendar(\Maseuropa\GeneralServices\StructType\Auth $auth, $id_tipo_articulo_clase, $month, $year, $origin, $destination, $category)
    {
        try {
            $this->setResult($this->getSoapClient()->get_pdc_calendar($auth, $id_tipo_articulo_clase, $month, $year, $origin, $destination, $category));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsRelationsWSDO
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
