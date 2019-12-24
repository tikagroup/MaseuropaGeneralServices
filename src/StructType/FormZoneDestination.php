<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormZoneDestination StructType
 * @subpackage Structs
 */
class FormZoneDestination extends AbstractStructBase
{
    /**
     * The zone_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $zone_id;
    /**
     * The destination
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $destination;
    /**
     * Constructor method for FormZoneDestination
     * @uses FormZoneDestination::setZone_id()
     * @uses FormZoneDestination::setDestination()
     * @param int $zone_id
     * @param string $destination
     */
    public function __construct($zone_id = null, $destination = null)
    {
        $this
            ->setZone_id($zone_id)
            ->setDestination($destination);
    }
    /**
     * Get zone_id value
     * @return int|null
     */
    public function getZone_id()
    {
        return $this->zone_id;
    }
    /**
     * Set zone_id value
     * @param int $zone_id
     * @return \Maseuropa\GeneralServices\StructType\FormZoneDestination
     */
    public function setZone_id($zone_id = null)
    {
        // validation for constraint: int
        if (!is_null($zone_id) && !(is_int($zone_id) || ctype_digit($zone_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($zone_id, true), gettype($zone_id)), __LINE__);
        }
        $this->zone_id = $zone_id;
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination()
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Maseuropa\GeneralServices\StructType\FormZoneDestination
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\FormZoneDestination
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
