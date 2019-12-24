<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalBookingTravellerWSDO StructType
 * @subpackage Structs
 */
class ExternalBookingTravellerWSDO extends AbstractStructBase
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
     * The surname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $surname;
    /**
     * The first_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $first_name;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * Constructor method for ExternalBookingTravellerWSDO
     * @uses ExternalBookingTravellerWSDO::setRef()
     * @uses ExternalBookingTravellerWSDO::setRef_num()
     * @uses ExternalBookingTravellerWSDO::setSurname()
     * @uses ExternalBookingTravellerWSDO::setFirst_name()
     * @uses ExternalBookingTravellerWSDO::setType()
     * @param string $ref
     * @param int $ref_num
     * @param string $surname
     * @param string $first_name
     * @param string $type
     */
    public function __construct($ref = null, $ref_num = null, $surname = null, $first_name = null, $type = null)
    {
        $this
            ->setRef($ref)
            ->setRef_num($ref_num)
            ->setSurname($surname)
            ->setFirst_name($first_name)
            ->setType($type);
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO
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
     * Get surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->surname;
    }
    /**
     * Set surname value
     * @param string $surname
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        return $this;
    }
    /**
     * Get first_name value
     * @return string|null
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }
    /**
     * Set first_name value
     * @param string $first_name
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_name, true), gettype($first_name)), __LINE__);
        }
        $this->first_name = $first_name;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO
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
