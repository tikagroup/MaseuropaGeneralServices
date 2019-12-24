<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalBookingCancelItineraryWSDO StructType
 * @subpackage Structs
 */
class ExternalBookingCancelItineraryWSDO extends AbstractStructBase
{
    /**
     * The external_locator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $external_locator;
    /**
     * The cancelled_segments
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $cancelled_segments;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for ExternalBookingCancelItineraryWSDO
     * @uses ExternalBookingCancelItineraryWSDO::setExternal_locator()
     * @uses ExternalBookingCancelItineraryWSDO::setCancelled_segments()
     * @uses ExternalBookingCancelItineraryWSDO::setError()
     * @param string $external_locator
     * @param bool $cancelled_segments
     * @param string $error
     */
    public function __construct($external_locator = null, $cancelled_segments = null, $error = null)
    {
        $this
            ->setExternal_locator($external_locator)
            ->setCancelled_segments($cancelled_segments)
            ->setError($error);
    }
    /**
     * Get external_locator value
     * @return string|null
     */
    public function getExternal_locator()
    {
        return $this->external_locator;
    }
    /**
     * Set external_locator value
     * @param string $external_locator
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelItineraryWSDO
     */
    public function setExternal_locator($external_locator = null)
    {
        // validation for constraint: string
        if (!is_null($external_locator) && !is_string($external_locator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($external_locator, true), gettype($external_locator)), __LINE__);
        }
        $this->external_locator = $external_locator;
        return $this;
    }
    /**
     * Get cancelled_segments value
     * @return bool|null
     */
    public function getCancelled_segments()
    {
        return $this->cancelled_segments;
    }
    /**
     * Set cancelled_segments value
     * @param bool $cancelled_segments
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelItineraryWSDO
     */
    public function setCancelled_segments($cancelled_segments = null)
    {
        // validation for constraint: boolean
        if (!is_null($cancelled_segments) && !is_bool($cancelled_segments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancelled_segments, true), gettype($cancelled_segments)), __LINE__);
        }
        $this->cancelled_segments = $cancelled_segments;
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelItineraryWSDO
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelItineraryWSDO
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
