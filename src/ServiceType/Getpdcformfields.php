<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Getpdcformfields ServiceType
 * @subpackage Services
 */
class Getpdcformfields extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named get_pdc_form_fields
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $id_tipo_articulo_clase
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsWSDO|bool
     */
    public function get_pdc_form_fields(\Maseuropa\GeneralServices\StructType\Auth $auth, $id_tipo_articulo_clase)
    {
        try {
            $this->setResult($this->getSoapClient()->get_pdc_form_fields($auth, $id_tipo_articulo_clase));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsWSDO
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
