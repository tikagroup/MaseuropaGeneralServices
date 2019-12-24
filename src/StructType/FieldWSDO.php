<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldWSDO StructType
 * @subpackage Structs
 */
class FieldWSDO extends AbstractStructBase
{
    /**
     * The field_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $field_type;
    /**
     * The field_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $field_name;
    /**
     * The field_values
     * Meta information extracted from the WSDL
     * - arrayType: tns:FieldValueWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\FieldValueWSDO[]
     */
    public $field_values;
    /**
     * Constructor method for FieldWSDO
     * @uses FieldWSDO::setField_type()
     * @uses FieldWSDO::setField_name()
     * @uses FieldWSDO::setField_values()
     * @param string $field_type
     * @param string $field_name
     * @param \Maseuropa\GeneralServices\StructType\FieldValueWSDO[] $field_values
     */
    public function __construct($field_type = null, $field_name = null, array $field_values = array())
    {
        $this
            ->setField_type($field_type)
            ->setField_name($field_name)
            ->setField_values($field_values);
    }
    /**
     * Get field_type value
     * @return string|null
     */
    public function getField_type()
    {
        return $this->field_type;
    }
    /**
     * Set field_type value
     * @param string $field_type
     * @return \Maseuropa\GeneralServices\StructType\FieldWSDO
     */
    public function setField_type($field_type = null)
    {
        // validation for constraint: string
        if (!is_null($field_type) && !is_string($field_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field_type, true), gettype($field_type)), __LINE__);
        }
        $this->field_type = $field_type;
        return $this;
    }
    /**
     * Get field_name value
     * @return string|null
     */
    public function getField_name()
    {
        return $this->field_name;
    }
    /**
     * Set field_name value
     * @param string $field_name
     * @return \Maseuropa\GeneralServices\StructType\FieldWSDO
     */
    public function setField_name($field_name = null)
    {
        // validation for constraint: string
        if (!is_null($field_name) && !is_string($field_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field_name, true), gettype($field_name)), __LINE__);
        }
        $this->field_name = $field_name;
        return $this;
    }
    /**
     * Get field_values value
     * @return \Maseuropa\GeneralServices\StructType\FieldValueWSDO[]|null
     */
    public function getField_values()
    {
        return $this->field_values;
    }
    /**
     * This method is responsible for validating the values passed to the setField_values method
     * This method is willingly generated in order to preserve the one-line inline validation within the setField_values method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateField_valuesForArrayConstraintsFromSetField_values(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fieldWSDOField_valuesItem) {
            // validation for constraint: itemType
            if (!$fieldWSDOField_valuesItem instanceof \Maseuropa\GeneralServices\StructType\FieldValueWSDO) {
                $invalidValues[] = is_object($fieldWSDOField_valuesItem) ? get_class($fieldWSDOField_valuesItem) : sprintf('%s(%s)', gettype($fieldWSDOField_valuesItem), var_export($fieldWSDOField_valuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The field_values property can only contain items of type \Maseuropa\GeneralServices\StructType\FieldValueWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set field_values value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\FieldValueWSDO[] $field_values
     * @return \Maseuropa\GeneralServices\StructType\FieldWSDO
     */
    public function setField_values(array $field_values = array())
    {
        // validation for constraint: array
        if ('' !== ($field_valuesArrayErrorMessage = self::validateField_valuesForArrayConstraintsFromSetField_values($field_values))) {
            throw new \InvalidArgumentException($field_valuesArrayErrorMessage, __LINE__);
        }
        $this->field_values = $field_values;
        return $this;
    }
    /**
     * Add item to field_values value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\FieldValueWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\FieldWSDO
     */
    public function addToField_values(\Maseuropa\GeneralServices\StructType\FieldValueWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\FieldValueWSDO) {
            throw new \InvalidArgumentException(sprintf('The field_values property can only contain items of type \Maseuropa\GeneralServices\StructType\FieldValueWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->field_values[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\FieldWSDO
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
