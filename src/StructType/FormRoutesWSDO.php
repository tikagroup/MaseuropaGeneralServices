<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormRoutesWSDO StructType
 * @subpackage Structs
 */
class FormRoutesWSDO extends AbstractStructBase
{
    /**
     * The origin
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $origin;
    /**
     * The destination
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $destination;
    /**
     * The departures
     * Meta information extracted from the WSDL
     * - arrayType: tns:FormDeparturesWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO[]
     */
    public $departures;
    /**
     * Constructor method for FormRoutesWSDO
     * @uses FormRoutesWSDO::setOrigin()
     * @uses FormRoutesWSDO::setDestination()
     * @uses FormRoutesWSDO::setDepartures()
     * @param string $origin
     * @param string $destination
     * @param \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO[] $departures
     */
    public function __construct($origin = null, $destination = null, array $departures = array())
    {
        $this
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setDepartures($departures);
    }
    /**
     * Get origin value
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param string $origin
     * @return \Maseuropa\GeneralServices\StructType\FormRoutesWSDO
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination()
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Maseuropa\GeneralServices\StructType\FormRoutesWSDO
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        return $this;
    }
    /**
     * Get departures value
     * @return \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO[]|null
     */
    public function getDepartures()
    {
        return $this->departures;
    }
    /**
     * This method is responsible for validating the values passed to the setDepartures method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDepartures method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeparturesForArrayConstraintsFromSetDepartures(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $formRoutesWSDODeparturesItem) {
            // validation for constraint: itemType
            if (!$formRoutesWSDODeparturesItem instanceof \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO) {
                $invalidValues[] = is_object($formRoutesWSDODeparturesItem) ? get_class($formRoutesWSDODeparturesItem) : sprintf('%s(%s)', gettype($formRoutesWSDODeparturesItem), var_export($formRoutesWSDODeparturesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The departures property can only contain items of type \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set departures value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO[] $departures
     * @return \Maseuropa\GeneralServices\StructType\FormRoutesWSDO
     */
    public function setDepartures(array $departures = array())
    {
        // validation for constraint: array
        if ('' !== ($departuresArrayErrorMessage = self::validateDeparturesForArrayConstraintsFromSetDepartures($departures))) {
            throw new \InvalidArgumentException($departuresArrayErrorMessage, __LINE__);
        }
        $this->departures = $departures;
        return $this;
    }
    /**
     * Add item to departures value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\FormRoutesWSDO
     */
    public function addToDepartures(\Maseuropa\GeneralServices\StructType\FormDeparturesWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO) {
            throw new \InvalidArgumentException(sprintf('The departures property can only contain items of type \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->departures[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\FormRoutesWSDO
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
