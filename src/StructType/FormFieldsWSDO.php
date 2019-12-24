<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormFieldsWSDO StructType
 * @subpackage Structs
 */
class FormFieldsWSDO extends AbstractStructBase
{
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - arrayType: tns:FieldWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\FieldWSDO[]
     */
    public $fields;
    /**
     * Constructor method for FormFieldsWSDO
     * @uses FormFieldsWSDO::setFields()
     * @param \Maseuropa\GeneralServices\StructType\FieldWSDO[] $fields
     */
    public function __construct(array $fields = array())
    {
        $this
            ->setFields($fields);
    }
    /**
     * Get fields value
     * @return \Maseuropa\GeneralServices\StructType\FieldWSDO[]|null
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * This method is responsible for validating the values passed to the setFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldsForArrayConstraintsFromSetFields(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $formFieldsWSDOFieldsItem) {
            // validation for constraint: itemType
            if (!$formFieldsWSDOFieldsItem instanceof \Maseuropa\GeneralServices\StructType\FieldWSDO) {
                $invalidValues[] = is_object($formFieldsWSDOFieldsItem) ? get_class($formFieldsWSDOFieldsItem) : sprintf('%s(%s)', gettype($formFieldsWSDOFieldsItem), var_export($formFieldsWSDOFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fields property can only contain items of type \Maseuropa\GeneralServices\StructType\FieldWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set fields value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\FieldWSDO[] $fields
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsWSDO
     */
    public function setFields(array $fields = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldsArrayErrorMessage = self::validateFieldsForArrayConstraintsFromSetFields($fields))) {
            throw new \InvalidArgumentException($fieldsArrayErrorMessage, __LINE__);
        }
        $this->fields = $fields;
        return $this;
    }
    /**
     * Add item to fields value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\FieldWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsWSDO
     */
    public function addToFields(\Maseuropa\GeneralServices\StructType\FieldWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\FieldWSDO) {
            throw new \InvalidArgumentException(sprintf('The fields property can only contain items of type \Maseuropa\GeneralServices\StructType\FieldWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fields[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\FormFieldsWSDO
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
