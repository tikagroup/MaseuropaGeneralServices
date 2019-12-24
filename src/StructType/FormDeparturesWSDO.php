<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormDeparturesWSDO StructType
 * @subpackage Structs
 */
class FormDeparturesWSDO extends AbstractStructBase
{
    /**
     * The beginning
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $beginning;
    /**
     * The end
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $end;
    /**
     * Constructor method for FormDeparturesWSDO
     * @uses FormDeparturesWSDO::setBeginning()
     * @uses FormDeparturesWSDO::setEnd()
     * @param string $beginning
     * @param string $end
     */
    public function __construct($beginning = null, $end = null)
    {
        $this
            ->setBeginning($beginning)
            ->setEnd($end);
    }
    /**
     * Get beginning value
     * @return string|null
     */
    public function getBeginning()
    {
        return $this->beginning;
    }
    /**
     * Set beginning value
     * @param string $beginning
     * @return \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO
     */
    public function setBeginning($beginning = null)
    {
        // validation for constraint: string
        if (!is_null($beginning) && !is_string($beginning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginning, true), gettype($beginning)), __LINE__);
        }
        $this->beginning = $beginning;
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\FormDeparturesWSDO
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
