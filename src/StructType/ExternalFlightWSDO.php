<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalFlightWSDO StructType
 * @subpackage Structs
 */
class ExternalFlightWSDO extends AbstractStructBase
{
    /**
     * The number_flight
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number_flight;
    /**
     * The time
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $time;
    /**
     * Constructor method for ExternalFlightWSDO
     * @uses ExternalFlightWSDO::setNumber_flight()
     * @uses ExternalFlightWSDO::setTime()
     * @param string $number_flight
     * @param string $time
     */
    public function __construct($number_flight = null, $time = null)
    {
        $this
            ->setNumber_flight($number_flight)
            ->setTime($time);
    }
    /**
     * Get number_flight value
     * @return string|null
     */
    public function getNumber_flight()
    {
        return $this->number_flight;
    }
    /**
     * Set number_flight value
     * @param string $number_flight
     * @return \Maseuropa\GeneralServices\StructType\ExternalFlightWSDO
     */
    public function setNumber_flight($number_flight = null)
    {
        // validation for constraint: string
        if (!is_null($number_flight) && !is_string($number_flight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number_flight, true), gettype($number_flight)), __LINE__);
        }
        $this->number_flight = $number_flight;
        return $this;
    }
    /**
     * Get time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param string $time
     * @return \Maseuropa\GeneralServices\StructType\ExternalFlightWSDO
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->time = $time;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\ExternalFlightWSDO
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
