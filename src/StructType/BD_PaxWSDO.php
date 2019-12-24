<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BD_PaxWSDO StructType
 * @subpackage Structs
 */
class BD_PaxWSDO extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $type;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The surname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $surname;
    /**
     * The nif
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nif;
    /**
     * The comments
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The age
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $age;
    /**
     * Constructor method for BD_PaxWSDO
     * @uses BD_PaxWSDO::setType()
     * @uses BD_PaxWSDO::setName()
     * @uses BD_PaxWSDO::setSurname()
     * @uses BD_PaxWSDO::setNif()
     * @uses BD_PaxWSDO::setComments()
     * @uses BD_PaxWSDO::setAge()
     * @param int $type
     * @param string $name
     * @param string $surname
     * @param string $nif
     * @param string $comments
     * @param string $age
     */
    public function __construct($type = null, $name = null, $surname = null, $nif = null, $comments = null, $age = null)
    {
        $this
            ->setType($type)
            ->setName($name)
            ->setSurname($surname)
            ->setNif($nif)
            ->setComments($comments)
            ->setAge($age);
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Maseuropa\GeneralServices\StructType\BD_PaxWSDO
     */
    public function setType($type = null)
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
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
     * @return \Maseuropa\GeneralServices\StructType\BD_PaxWSDO
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
     * @return \Maseuropa\GeneralServices\StructType\BD_PaxWSDO
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
     * Get nif value
     * @return string|null
     */
    public function getNif()
    {
        return $this->nif;
    }
    /**
     * Set nif value
     * @param string $nif
     * @return \Maseuropa\GeneralServices\StructType\BD_PaxWSDO
     */
    public function setNif($nif = null)
    {
        // validation for constraint: string
        if (!is_null($nif) && !is_string($nif)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nif, true), gettype($nif)), __LINE__);
        }
        $this->nif = $nif;
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \Maseuropa\GeneralServices\StructType\BD_PaxWSDO
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        return $this;
    }
    /**
     * Get age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->age;
    }
    /**
     * Set age value
     * @param string $age
     * @return \Maseuropa\GeneralServices\StructType\BD_PaxWSDO
     */
    public function setAge($age = null)
    {
        // validation for constraint: string
        if (!is_null($age) && !is_string($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        $this->age = $age;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\BD_PaxWSDO
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
