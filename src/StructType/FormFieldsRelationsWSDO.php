<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormFieldsRelationsWSDO StructType
 * @subpackage Structs
 */
class FormFieldsRelationsWSDO extends AbstractStructBase
{
    /**
     * The form_pdc_routes
     * Meta information extracted from the WSDL
     * - arrayType: tns:FormRoutesWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\FormRoutesWSDO[]
     */
    public $form_pdc_routes;
    /**
     * The form_pdc_zones_destinations_associations
     * Meta information extracted from the WSDL
     * - arrayType: tns:FormZoneDestination[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\FormZoneDestination[]
     */
    public $form_pdc_zones_destinations_associations;
    /**
     * Constructor method for FormFieldsRelationsWSDO
     * @uses FormFieldsRelationsWSDO::setForm_pdc_routes()
     * @uses FormFieldsRelationsWSDO::setForm_pdc_zones_destinations_associations()
     * @param \Maseuropa\GeneralServices\StructType\FormRoutesWSDO[] $form_pdc_routes
     * @param \Maseuropa\GeneralServices\StructType\FormZoneDestination[] $form_pdc_zones_destinations_associations
     */
    public function __construct(array $form_pdc_routes = array(), array $form_pdc_zones_destinations_associations = array())
    {
        $this
            ->setForm_pdc_routes($form_pdc_routes)
            ->setForm_pdc_zones_destinations_associations($form_pdc_zones_destinations_associations);
    }
    /**
     * Get form_pdc_routes value
     * @return \Maseuropa\GeneralServices\StructType\FormRoutesWSDO[]|null
     */
    public function getForm_pdc_routes()
    {
        return $this->form_pdc_routes;
    }
    /**
     * This method is responsible for validating the values passed to the setForm_pdc_routes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setForm_pdc_routes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateForm_pdc_routesForArrayConstraintsFromSetForm_pdc_routes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $formFieldsRelationsWSDOForm_pdc_routesItem) {
            // validation for constraint: itemType
            if (!$formFieldsRelationsWSDOForm_pdc_routesItem instanceof \Maseuropa\GeneralServices\StructType\FormRoutesWSDO) {
                $invalidValues[] = is_object($formFieldsRelationsWSDOForm_pdc_routesItem) ? get_class($formFieldsRelationsWSDOForm_pdc_routesItem) : sprintf('%s(%s)', gettype($formFieldsRelationsWSDOForm_pdc_routesItem), var_export($formFieldsRelationsWSDOForm_pdc_routesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The form_pdc_routes property can only contain items of type \Maseuropa\GeneralServices\StructType\FormRoutesWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set form_pdc_routes value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\FormRoutesWSDO[] $form_pdc_routes
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsRelationsWSDO
     */
    public function setForm_pdc_routes(array $form_pdc_routes = array())
    {
        // validation for constraint: array
        if ('' !== ($form_pdc_routesArrayErrorMessage = self::validateForm_pdc_routesForArrayConstraintsFromSetForm_pdc_routes($form_pdc_routes))) {
            throw new \InvalidArgumentException($form_pdc_routesArrayErrorMessage, __LINE__);
        }
        $this->form_pdc_routes = $form_pdc_routes;
        return $this;
    }
    /**
     * Add item to form_pdc_routes value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\FormRoutesWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsRelationsWSDO
     */
    public function addToForm_pdc_routes(\Maseuropa\GeneralServices\StructType\FormRoutesWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\FormRoutesWSDO) {
            throw new \InvalidArgumentException(sprintf('The form_pdc_routes property can only contain items of type \Maseuropa\GeneralServices\StructType\FormRoutesWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->form_pdc_routes[] = $item;
        return $this;
    }
    /**
     * Get form_pdc_zones_destinations_associations value
     * @return \Maseuropa\GeneralServices\StructType\FormZoneDestination[]|null
     */
    public function getForm_pdc_zones_destinations_associations()
    {
        return $this->form_pdc_zones_destinations_associations;
    }
    /**
     * This method is responsible for validating the values passed to the setForm_pdc_zones_destinations_associations method
     * This method is willingly generated in order to preserve the one-line inline validation within the setForm_pdc_zones_destinations_associations method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateForm_pdc_zones_destinations_associationsForArrayConstraintsFromSetForm_pdc_zones_destinations_associations(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $formFieldsRelationsWSDOForm_pdc_zones_destinations_associationsItem) {
            // validation for constraint: itemType
            if (!$formFieldsRelationsWSDOForm_pdc_zones_destinations_associationsItem instanceof \Maseuropa\GeneralServices\StructType\FormZoneDestination) {
                $invalidValues[] = is_object($formFieldsRelationsWSDOForm_pdc_zones_destinations_associationsItem) ? get_class($formFieldsRelationsWSDOForm_pdc_zones_destinations_associationsItem) : sprintf('%s(%s)', gettype($formFieldsRelationsWSDOForm_pdc_zones_destinations_associationsItem), var_export($formFieldsRelationsWSDOForm_pdc_zones_destinations_associationsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The form_pdc_zones_destinations_associations property can only contain items of type \Maseuropa\GeneralServices\StructType\FormZoneDestination, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set form_pdc_zones_destinations_associations value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\FormZoneDestination[] $form_pdc_zones_destinations_associations
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsRelationsWSDO
     */
    public function setForm_pdc_zones_destinations_associations(array $form_pdc_zones_destinations_associations = array())
    {
        // validation for constraint: array
        if ('' !== ($form_pdc_zones_destinations_associationsArrayErrorMessage = self::validateForm_pdc_zones_destinations_associationsForArrayConstraintsFromSetForm_pdc_zones_destinations_associations($form_pdc_zones_destinations_associations))) {
            throw new \InvalidArgumentException($form_pdc_zones_destinations_associationsArrayErrorMessage, __LINE__);
        }
        $this->form_pdc_zones_destinations_associations = $form_pdc_zones_destinations_associations;
        return $this;
    }
    /**
     * Add item to form_pdc_zones_destinations_associations value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\FormZoneDestination $item
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsRelationsWSDO
     */
    public function addToForm_pdc_zones_destinations_associations(\Maseuropa\GeneralServices\StructType\FormZoneDestination $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\FormZoneDestination) {
            throw new \InvalidArgumentException(sprintf('The form_pdc_zones_destinations_associations property can only contain items of type \Maseuropa\GeneralServices\StructType\FormZoneDestination, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->form_pdc_zones_destinations_associations[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsRelationsWSDO
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
