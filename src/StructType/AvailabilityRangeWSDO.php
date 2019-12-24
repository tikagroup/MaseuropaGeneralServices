<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityRangeWSDO StructType
 * @subpackage Structs
 */
class AvailabilityRangeWSDO extends AbstractStructBase
{
    /**
     * The date_ini
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $date_ini;
    /**
     * The date_end
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $date_end;
    /**
     * The availability
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $availability;
    /**
     * Constructor method for AvailabilityRangeWSDO
     * @uses AvailabilityRangeWSDO::setDate_ini()
     * @uses AvailabilityRangeWSDO::setDate_end()
     * @uses AvailabilityRangeWSDO::setAvailability()
     * @param string $date_ini
     * @param string $date_end
     * @param int $availability
     */
    public function __construct($date_ini = null, $date_end = null, $availability = null)
    {
        $this
            ->setDate_ini($date_ini)
            ->setDate_end($date_end)
            ->setAvailability($availability);
    }
    /**
     * Get date_ini value
     * @return string|null
     */
    public function getDate_ini()
    {
        return $this->date_ini;
    }
    /**
     * Set date_ini value
     * @param string $date_ini
     * @return \Maseuropa\GeneralServices\StructType\AvailabilityRangeWSDO
     */
    public function setDate_ini($date_ini = null)
    {
        // validation for constraint: string
        if (!is_null($date_ini) && !is_string($date_ini)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_ini, true), gettype($date_ini)), __LINE__);
        }
        $this->date_ini = $date_ini;
        return $this;
    }
    /**
     * Get date_end value
     * @return string|null
     */
    public function getDate_end()
    {
        return $this->date_end;
    }
    /**
     * Set date_end value
     * @param string $date_end
     * @return \Maseuropa\GeneralServices\StructType\AvailabilityRangeWSDO
     */
    public function setDate_end($date_end = null)
    {
        // validation for constraint: string
        if (!is_null($date_end) && !is_string($date_end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_end, true), gettype($date_end)), __LINE__);
        }
        $this->date_end = $date_end;
        return $this;
    }
    /**
     * Get availability value
     * @return int|null
     */
    public function getAvailability()
    {
        return $this->availability;
    }
    /**
     * Set availability value
     * @param int $availability
     * @return \Maseuropa\GeneralServices\StructType\AvailabilityRangeWSDO
     */
    public function setAvailability($availability = null)
    {
        // validation for constraint: int
        if (!is_null($availability) && !(is_int($availability) || ctype_digit($availability))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availability, true), gettype($availability)), __LINE__);
        }
        $this->availability = $availability;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\AvailabilityRangeWSDO
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
