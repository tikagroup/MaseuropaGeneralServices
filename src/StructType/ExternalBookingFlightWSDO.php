<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalBookingFlightWSDO StructType
 * @subpackage Structs
 */
class ExternalBookingFlightWSDO extends AbstractStructBase
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
     * The departure_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $departure_date;
    /**
     * The departure_time
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $departure_time;
    /**
     * The arrival_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $arrival_date;
    /**
     * The arrival_time
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $arrival_time;
    /**
     * The departure_airport
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $departure_airport;
    /**
     * The arrival_airport
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $arrival_airport;
    /**
     * The company
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $company;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $quantity;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * Constructor method for ExternalBookingFlightWSDO
     * @uses ExternalBookingFlightWSDO::setRef()
     * @uses ExternalBookingFlightWSDO::setRef_num()
     * @uses ExternalBookingFlightWSDO::setDeparture_date()
     * @uses ExternalBookingFlightWSDO::setDeparture_time()
     * @uses ExternalBookingFlightWSDO::setArrival_date()
     * @uses ExternalBookingFlightWSDO::setArrival_time()
     * @uses ExternalBookingFlightWSDO::setDeparture_airport()
     * @uses ExternalBookingFlightWSDO::setArrival_airport()
     * @uses ExternalBookingFlightWSDO::setCompany()
     * @uses ExternalBookingFlightWSDO::setNumber()
     * @uses ExternalBookingFlightWSDO::setQuantity()
     * @uses ExternalBookingFlightWSDO::setStatus()
     * @param string $ref
     * @param int $ref_num
     * @param string $departure_date
     * @param string $departure_time
     * @param string $arrival_date
     * @param string $arrival_time
     * @param string $departure_airport
     * @param string $arrival_airport
     * @param string $company
     * @param string $number
     * @param string $quantity
     * @param string $status
     */
    public function __construct($ref = null, $ref_num = null, $departure_date = null, $departure_time = null, $arrival_date = null, $arrival_time = null, $departure_airport = null, $arrival_airport = null, $company = null, $number = null, $quantity = null, $status = null)
    {
        $this
            ->setRef($ref)
            ->setRef_num($ref_num)
            ->setDeparture_date($departure_date)
            ->setDeparture_time($departure_time)
            ->setArrival_date($arrival_date)
            ->setArrival_time($arrival_time)
            ->setDeparture_airport($departure_airport)
            ->setArrival_airport($arrival_airport)
            ->setCompany($company)
            ->setNumber($number)
            ->setQuantity($quantity)
            ->setStatus($status);
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
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
     * Get departure_date value
     * @return string|null
     */
    public function getDeparture_date()
    {
        return $this->departure_date;
    }
    /**
     * Set departure_date value
     * @param string $departure_date
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
     */
    public function setDeparture_date($departure_date = null)
    {
        // validation for constraint: string
        if (!is_null($departure_date) && !is_string($departure_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_date, true), gettype($departure_date)), __LINE__);
        }
        $this->departure_date = $departure_date;
        return $this;
    }
    /**
     * Get departure_time value
     * @return string|null
     */
    public function getDeparture_time()
    {
        return $this->departure_time;
    }
    /**
     * Set departure_time value
     * @param string $departure_time
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
     */
    public function setDeparture_time($departure_time = null)
    {
        // validation for constraint: string
        if (!is_null($departure_time) && !is_string($departure_time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_time, true), gettype($departure_time)), __LINE__);
        }
        $this->departure_time = $departure_time;
        return $this;
    }
    /**
     * Get arrival_date value
     * @return string|null
     */
    public function getArrival_date()
    {
        return $this->arrival_date;
    }
    /**
     * Set arrival_date value
     * @param string $arrival_date
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
     */
    public function setArrival_date($arrival_date = null)
    {
        // validation for constraint: string
        if (!is_null($arrival_date) && !is_string($arrival_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival_date, true), gettype($arrival_date)), __LINE__);
        }
        $this->arrival_date = $arrival_date;
        return $this;
    }
    /**
     * Get arrival_time value
     * @return string|null
     */
    public function getArrival_time()
    {
        return $this->arrival_time;
    }
    /**
     * Set arrival_time value
     * @param string $arrival_time
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
     */
    public function setArrival_time($arrival_time = null)
    {
        // validation for constraint: string
        if (!is_null($arrival_time) && !is_string($arrival_time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival_time, true), gettype($arrival_time)), __LINE__);
        }
        $this->arrival_time = $arrival_time;
        return $this;
    }
    /**
     * Get departure_airport value
     * @return string|null
     */
    public function getDeparture_airport()
    {
        return $this->departure_airport;
    }
    /**
     * Set departure_airport value
     * @param string $departure_airport
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
     */
    public function setDeparture_airport($departure_airport = null)
    {
        // validation for constraint: string
        if (!is_null($departure_airport) && !is_string($departure_airport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_airport, true), gettype($departure_airport)), __LINE__);
        }
        $this->departure_airport = $departure_airport;
        return $this;
    }
    /**
     * Get arrival_airport value
     * @return string|null
     */
    public function getArrival_airport()
    {
        return $this->arrival_airport;
    }
    /**
     * Set arrival_airport value
     * @param string $arrival_airport
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
     */
    public function setArrival_airport($arrival_airport = null)
    {
        // validation for constraint: string
        if (!is_null($arrival_airport) && !is_string($arrival_airport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival_airport, true), gettype($arrival_airport)), __LINE__);
        }
        $this->arrival_airport = $arrival_airport;
        return $this;
    }
    /**
     * Get company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param string $company
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->company = $company;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get quantity value
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param string $quantity
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO
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
