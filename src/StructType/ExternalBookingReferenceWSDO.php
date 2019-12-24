<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalBookingReferenceWSDO StructType
 * @subpackage Structs
 */
class ExternalBookingReferenceWSDO extends AbstractStructBase
{
    /**
     * The ref
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ref;
    /**
     * The ref_num
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ref_num;
    /**
     * Constructor method for ExternalBookingReferenceWSDO
     * @uses ExternalBookingReferenceWSDO::setRef()
     * @uses ExternalBookingReferenceWSDO::setRef_num()
     * @param string $ref
     * @param int $ref_num
     */
    public function __construct($ref = null, $ref_num = null)
    {
        $this
            ->setRef($ref)
            ->setRef_num($ref_num);
    }
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef()
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO
     */
    public function setRef($ref = null)
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ref, true), gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        return $this;
    }
    /**
     * Get ref_num value
     * @return int|null
     */
    public function getRef_num()
    {
        return $this->ref_num;
    }
    /**
     * Set ref_num value
     * @param int $ref_num
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO
     */
    public function setRef_num($ref_num = null)
    {
        // validation for constraint: int
        if (!is_null($ref_num) && !(is_int($ref_num) || ctype_digit($ref_num))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ref_num, true), gettype($ref_num)), __LINE__);
        }
        $this->ref_num = $ref_num;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO
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
