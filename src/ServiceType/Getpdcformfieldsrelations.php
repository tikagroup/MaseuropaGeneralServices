<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Getpdcformfieldsrelations ServiceType
 * @subpackage Services
 */
class Getpdcformfieldsrelations extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named get_pdc_form_fields_relations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $id_tipo_articulo_clase
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsRelationsWSDO|bool
     */
    public function get_pdc_form_fields_relations(\Maseuropa\GeneralServices\StructType\Auth $auth, $id_tipo_articulo_clase)
    {
        try {
            $this->setResult($this->getSoapClient()->get_pdc_form_fields_relations($auth, $id_tipo_articulo_clase));
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
