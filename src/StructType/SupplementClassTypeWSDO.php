<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplementClassTypeWSDO StructType
 * @subpackage Structs
 */
class SupplementClassTypeWSDO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $name;
    /**
     * The required
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $required;
    /**
     * The incompatible
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $incompatible;
    /**
     * The information
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $information;
    /**
     * Constructor method for SupplementClassTypeWSDO
     * @uses SupplementClassTypeWSDO::setId()
     * @uses SupplementClassTypeWSDO::setName()
     * @uses SupplementClassTypeWSDO::setRequired()
     * @uses SupplementClassTypeWSDO::setIncompatible()
     * @uses SupplementClassTypeWSDO::setInformation()
     * @param int $id
     * @param int $name
     * @param int $required
     * @param int $incompatible
     * @param string $information
     */
    public function __construct($id = null, $name = null, $required = null, $incompatible = null, $information = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setRequired($required)
            ->setIncompatible($incompatible)
            ->setInformation($information);
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
     * @return \Maseuropa\GeneralServices\StructType\SupplementClassTypeWSDO
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
     * Get name value
     * @return int|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param int $name
     * @return \Maseuropa\GeneralServices\StructType\SupplementClassTypeWSDO
     */
    public function setName($name = null)
    {
        // validation for constraint: int
        if (!is_null($name) && !(is_int($name) || ctype_digit($name))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get required value
     * @return int|null
     */
    public function getRequired()
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param int $required
     * @return \Maseuropa\GeneralServices\StructType\SupplementClassTypeWSDO
     */
    public function setRequired($required = null)
    {
        // validation for constraint: int
        if (!is_null($required) && !(is_int($required) || ctype_digit($required))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->required = $required;
        return $this;
    }
    /**
     * Get incompatible value
     * @return int|null
     */
    public function getIncompatible()
    {
        return $this->incompatible;
    }
    /**
     * Set incompatible value
     * @param int $incompatible
     * @return \Maseuropa\GeneralServices\StructType\SupplementClassTypeWSDO
     */
    public function setIncompatible($incompatible = null)
    {
        // validation for constraint: int
        if (!is_null($incompatible) && !(is_int($incompatible) || ctype_digit($incompatible))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($incompatible, true), gettype($incompatible)), __LINE__);
        }
        $this->incompatible = $incompatible;
        return $this;
    }
    /**
     * Get information value
     * @return string|null
     */
    public function getInformation()
    {
        return $this->information;
    }
    /**
     * Set information value
     * @param string $information
     * @return \Maseuropa\GeneralServices\StructType\SupplementClassTypeWSDO
     */
    public function setInformation($information = null)
    {
        // validation for constraint: string
        if (!is_null($information) && !is_string($information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($information, true), gettype($information)), __LINE__);
        }
        $this->information = $information;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\SupplementClassTypeWSDO
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
