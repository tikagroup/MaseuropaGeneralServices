<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryWSDO StructType
 * @subpackage Structs
 */
class CountryWSDO extends AbstractStructBase
{
    /**
     * The country_zone_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $country_zone_id;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * Constructor method for CountryWSDO
     * @uses CountryWSDO::setCountry_zone_id()
     * @uses CountryWSDO::setName()
     * @param int $country_zone_id
     * @param string $name
     */
    public function __construct($country_zone_id = null, $name = null)
    {
        $this
            ->setCountry_zone_id($country_zone_id)
            ->setName($name);
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
     * @return \Maseuropa\GeneralServices\StructType\CountryWSDO
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
     * @return \Maseuropa\GeneralServices\StructType\CountryWSDO
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\CountryWSDO
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
