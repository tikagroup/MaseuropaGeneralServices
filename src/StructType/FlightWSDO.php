<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightWSDO StructType
 * @subpackage Structs
 */
class FlightWSDO extends AbstractStructBase
{
    /**
     * The transfer_flight_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $transfer_flight_id;
    /**
     * The airline_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $airline_code;
    /**
     * The airline_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $airline_name;
    /**
     * The airport_1_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $airport_1_code;
    /**
     * The airport_1_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $airport_1_name;
    /**
     * The airport_2_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $airport_2_code;
    /**
     * The airport_2_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $airport_2_name;
    /**
     * The is_exit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $is_exit;
    /**
     * The flight_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $flight_number;
    /**
     * The hour
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hour;
    /**
     * The terminal
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $terminal;
    /**
     * The observations
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $observations;
    /**
     * Constructor method for FlightWSDO
     * @uses FlightWSDO::setTransfer_flight_id()
     * @uses FlightWSDO::setAirline_code()
     * @uses FlightWSDO::setAirline_name()
     * @uses FlightWSDO::setAirport_1_code()
     * @uses FlightWSDO::setAirport_1_name()
     * @uses FlightWSDO::setAirport_2_code()
     * @uses FlightWSDO::setAirport_2_name()
     * @uses FlightWSDO::setIs_exit()
     * @uses FlightWSDO::setFlight_number()
     * @uses FlightWSDO::setHour()
     * @uses FlightWSDO::setTerminal()
     * @uses FlightWSDO::setObservations()
     * @param int $transfer_flight_id
     * @param string $airline_code
     * @param string $airline_name
     * @param string $airport_1_code
     * @param string $airport_1_name
     * @param string $airport_2_code
     * @param string $airport_2_name
     * @param int $is_exit
     * @param string $flight_number
     * @param string $hour
     * @param string $terminal
     * @param string $observations
     */
    public function __construct($transfer_flight_id = null, $airline_code = null, $airline_name = null, $airport_1_code = null, $airport_1_name = null, $airport_2_code = null, $airport_2_name = null, $is_exit = null, $flight_number = null, $hour = null, $terminal = null, $observations = null)
    {
        $this
            ->setTransfer_flight_id($transfer_flight_id)
            ->setAirline_code($airline_code)
            ->setAirline_name($airline_name)
            ->setAirport_1_code($airport_1_code)
            ->setAirport_1_name($airport_1_name)
            ->setAirport_2_code($airport_2_code)
            ->setAirport_2_name($airport_2_name)
            ->setIs_exit($is_exit)
            ->setFlight_number($flight_number)
            ->setHour($hour)
            ->setTerminal($terminal)
            ->setObservations($observations);
    }
    /**
     * Get transfer_flight_id value
     * @return int|null
     */
    public function getTransfer_flight_id()
    {
        return $this->transfer_flight_id;
    }
    /**
     * Set transfer_flight_id value
     * @param int $transfer_flight_id
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setTransfer_flight_id($transfer_flight_id = null)
    {
        // validation for constraint: int
        if (!is_null($transfer_flight_id) && !(is_int($transfer_flight_id) || ctype_digit($transfer_flight_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transfer_flight_id, true), gettype($transfer_flight_id)), __LINE__);
        }
        $this->transfer_flight_id = $transfer_flight_id;
        return $this;
    }
    /**
     * Get airline_code value
     * @return string|null
     */
    public function getAirline_code()
    {
        return $this->airline_code;
    }
    /**
     * Set airline_code value
     * @param string $airline_code
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setAirline_code($airline_code = null)
    {
        // validation for constraint: string
        if (!is_null($airline_code) && !is_string($airline_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airline_code, true), gettype($airline_code)), __LINE__);
        }
        $this->airline_code = $airline_code;
        return $this;
    }
    /**
     * Get airline_name value
     * @return string|null
     */
    public function getAirline_name()
    {
        return $this->airline_name;
    }
    /**
     * Set airline_name value
     * @param string $airline_name
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setAirline_name($airline_name = null)
    {
        // validation for constraint: string
        if (!is_null($airline_name) && !is_string($airline_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airline_name, true), gettype($airline_name)), __LINE__);
        }
        $this->airline_name = $airline_name;
        return $this;
    }
    /**
     * Get airport_code value
     * @return airport_code
     */
    public function getAirport_1_code()
    {
        return $this->airport_1_code;
    }
    /**
     * Set airport_code value
     * @param airport_code $airport_code
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setAirport_1_code($airport_1_code = null)
    {
        // validation for constraint: string
        if (!is_null($airport_1_code) && !is_string($airport_1_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airport_1_code, true), gettype($airport_1_code)), __LINE__);
        }
        $this->airport_1_code = $airport_1_code;
        return $this;
    }
    /**
     * Get airport_name value
     * @return airport_name
     */
    public function getAirport_1_name()
    {
        return $this->airport_1_name;
    }
    /**
     * Set airport_name value
     * @param airport_name $airport_name
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setAirport_1_name($airport_1_name = null)
    {
        // validation for constraint: string
        if (!is_null($airport_1_name) && !is_string($airport_1_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airport_1_name, true), gettype($airport_1_name)), __LINE__);
        }
        $this->airport_1_name = $airport_1_name;
        return $this;
    }
    /**
     * Get airport_code value
     * @return airport_code
     */
    public function getAirport_2_code()
    {
        return $this->airport_2_code;
    }
    /**
     * Set airport_code value
     * @param airport_code $airport_code
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setAirport_2_code($airport_2_code = null)
    {
        // validation for constraint: string
        if (!is_null($airport_2_code) && !is_string($airport_2_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airport_2_code, true), gettype($airport_2_code)), __LINE__);
        }
        $this->airport_2_code = $airport_2_code;
        return $this;
    }
    /**
     * Get airport_name value
     * @return airport_name
     */
    public function getAirport_2_name()
    {
        return $this->airport_2_name;
    }
    /**
     * Set airport_name value
     * @param airport_name $airport_name
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setAirport_2_name($airport_2_name = null)
    {
        // validation for constraint: string
        if (!is_null($airport_2_name) && !is_string($airport_2_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airport_2_name, true), gettype($airport_2_name)), __LINE__);
        }
        $this->airport_2_name = $airport_2_name;
        return $this;
    }
    /**
     * Get is_exit value
     * @return int|null
     */
    public function getIs_exit()
    {
        return $this->is_exit;
    }
    /**
     * Set is_exit value
     * @param int $is_exit
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setIs_exit($is_exit = null)
    {
        // validation for constraint: int
        if (!is_null($is_exit) && !(is_int($is_exit) || ctype_digit($is_exit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($is_exit, true), gettype($is_exit)), __LINE__);
        }
        $this->is_exit = $is_exit;
        return $this;
    }
    /**
     * Get flight_number value
     * @return string|null
     */
    public function getFlight_number()
    {
        return $this->flight_number;
    }
    /**
     * Set flight_number value
     * @param string $flight_number
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setFlight_number($flight_number = null)
    {
        // validation for constraint: string
        if (!is_null($flight_number) && !is_string($flight_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flight_number, true), gettype($flight_number)), __LINE__);
        }
        $this->flight_number = $flight_number;
        return $this;
    }
    /**
     * Get hour value
     * @return string|null
     */
    public function getHour()
    {
        return $this->hour;
    }
    /**
     * Set hour value
     * @param string $hour
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setHour($hour = null)
    {
        // validation for constraint: string
        if (!is_null($hour) && !is_string($hour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hour, true), gettype($hour)), __LINE__);
        }
        $this->hour = $hour;
        return $this;
    }
    /**
     * Get terminal value
     * @return string|null
     */
    public function getTerminal()
    {
        return $this->terminal;
    }
    /**
     * Set terminal value
     * @param string $terminal
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setTerminal($terminal = null)
    {
        // validation for constraint: string
        if (!is_null($terminal) && !is_string($terminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminal, true), gettype($terminal)), __LINE__);
        }
        $this->terminal = $terminal;
        return $this;
    }
    /**
     * Get observations value
     * @return string|null
     */
    public function getObservations()
    {
        return $this->observations;
    }
    /**
     * Set observations value
     * @param string $observations
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
     */
    public function setObservations($observations = null)
    {
        // validation for constraint: string
        if (!is_null($observations) && !is_string($observations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observations, true), gettype($observations)), __LINE__);
        }
        $this->observations = $observations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\FlightWSDO
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
