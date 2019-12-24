<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirportWSDO StructType
 * @subpackage Structs
 */
class AirportWSDO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The iata_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $iata_code;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $city;
    /**
     * The country_area_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $country_area_id;
    /**
     * The resident
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $resident;
    /**
     * Constructor method for AirportWSDO
     * @uses AirportWSDO::setId()
     * @uses AirportWSDO::setIata_code()
     * @uses AirportWSDO::setName()
     * @uses AirportWSDO::setCity()
     * @uses AirportWSDO::setCountry_area_id()
     * @uses AirportWSDO::setResident()
     * @param int $id
     * @param string $iata_code
     * @param string $name
     * @param int $city
     * @param int $country_area_id
     * @param int $resident
     */
    public function __construct($id = null, $iata_code = null, $name = null, $city = null, $country_area_id = null, $resident = null)
    {
        $this
            ->setId($id)
            ->setIata_code($iata_code)
            ->setName($name)
            ->setCity($city)
            ->setCountry_area_id($country_area_id)
            ->setResident($resident);
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
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO
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
     * Get iata_code value
     * @return string|null
     */
    public function getIata_code()
    {
        return $this->iata_code;
    }
    /**
     * Set iata_code value
     * @param string $iata_code
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO
     */
    public function setIata_code($iata_code = null)
    {
        // validation for constraint: string
        if (!is_null($iata_code) && !is_string($iata_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iata_code, true), gettype($iata_code)), __LINE__);
        }
        $this->iata_code = $iata_code;
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
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO
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
     * Get city value
     * @return int|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param int $city
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO
     */
    public function setCity($city = null)
    {
        // validation for constraint: int
        if (!is_null($city) && !(is_int($city) || ctype_digit($city))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get country_area_id value
     * @return int|null
     */
    public function getCountry_area_id()
    {
        return $this->country_area_id;
    }
    /**
     * Set country_area_id value
     * @param int $country_area_id
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO
     */
    public function setCountry_area_id($country_area_id = null)
    {
        // validation for constraint: int
        if (!is_null($country_area_id) && !(is_int($country_area_id) || ctype_digit($country_area_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($country_area_id, true), gettype($country_area_id)), __LINE__);
        }
        $this->country_area_id = $country_area_id;
        return $this;
    }
    /**
     * Get resident value
     * @return int|null
     */
    public function getResident()
    {
        return $this->resident;
    }
    /**
     * Set resident value
     * @param int $resident
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO
     */
    public function setResident($resident = null)
    {
        // validation for constraint: int
        if (!is_null($resident) && !(is_int($resident) || ctype_digit($resident))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($resident, true), gettype($resident)), __LINE__);
        }
        $this->resident = $resident;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\AirportWSDO
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
