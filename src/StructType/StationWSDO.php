<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StationWSDO StructType
 * @subpackage Structs
 */
class StationWSDO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The code_station
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $code_station;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The country_zone_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $country_zone_id;
    /**
     * The city_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $city_id;
    /**
     * Constructor method for StationWSDO
     * @uses StationWSDO::setId()
     * @uses StationWSDO::setCode_station()
     * @uses StationWSDO::setName()
     * @uses StationWSDO::setCountry_zone_id()
     * @uses StationWSDO::setCity_id()
     * @param int $id
     * @param string $code_station
     * @param string $name
     * @param int $country_zone_id
     * @param int $city_id
     */
    public function __construct($id = null, $code_station = null, $name = null, $country_zone_id = null, $city_id = null)
    {
        $this
            ->setId($id)
            ->setCode_station($code_station)
            ->setName($name)
            ->setCountry_zone_id($country_zone_id)
            ->setCity_id($city_id);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Maseuropa\GeneralServices\StructType\StationWSDO
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get code_station value
     * @return string|null
     */
    public function getCode_station()
    {
        return $this->code_station;
    }
    /**
     * Set code_station value
     * @param string $code_station
     * @return \Maseuropa\GeneralServices\StructType\StationWSDO
     */
    public function setCode_station($code_station = null)
    {
        // validation for constraint: string
        if (!is_null($code_station) && !is_string($code_station)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code_station, true), gettype($code_station)), __LINE__);
        }
        $this->code_station = $code_station;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Maseuropa\GeneralServices\StructType\StationWSDO
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get country_zone_id value
     * @return int|null
     */
    public function getCountry_zone_id()
    {
        return $this->country_zone_id;
    }
    /**
     * Set country_zone_id value
     * @param int $country_zone_id
     * @return \Maseuropa\GeneralServices\StructType\StationWSDO
     */
    public function setCountry_zone_id($country_zone_id = null)
    {
        // validation for constraint: int
        if (!is_null($country_zone_id) && !(is_int($country_zone_id) || ctype_digit($country_zone_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($country_zone_id, true), gettype($country_zone_id)), __LINE__);
        }
        $this->country_zone_id = $country_zone_id;
        return $this;
    }
    /**
     * Get city_id value
     * @return int|null
     */
    public function getCity_id()
    {
        return $this->city_id;
    }
    /**
     * Set city_id value
     * @param int $city_id
     * @return \Maseuropa\GeneralServices\StructType\StationWSDO
     */
    public function setCity_id($city_id = null)
    {
        // validation for constraint: int
        if (!is_null($city_id) && !(is_int($city_id) || ctype_digit($city_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($city_id, true), gettype($city_id)), __LINE__);
        }
        $this->city_id = $city_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\StationWSDO
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
