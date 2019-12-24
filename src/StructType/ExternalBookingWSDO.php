<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalBookingWSDO StructType
 * @subpackage Structs
 */
class ExternalBookingWSDO extends AbstractStructBase
{
    /**
     * The locator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $locator;
    /**
     * The info
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO
     */
    public $info;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for ExternalBookingWSDO
     * @uses ExternalBookingWSDO::setLocator()
     * @uses ExternalBookingWSDO::setInfo()
     * @uses ExternalBookingWSDO::setError()
     * @param string $locator
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO $info
     * @param string $error
     */
    public function __construct($locator = null, \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO $info = null, $error = null)
    {
        $this
            ->setLocator($locator)
            ->setInfo($info)
            ->setError($error);
    }
    /**
     * Get locator value
     * @return string|null
     */
    public function getLocator()
    {
        return $this->locator;
    }
    /**
     * Set locator value
     * @param string $locator
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingWSDO
     */
    public function setLocator($locator = null)
    {
        // validation for constraint: string
        if (!is_null($locator) && !is_string($locator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locator, true), gettype($locator)), __LINE__);
        }
        $this->locator = $locator;
        return $this;
    }
    /**
     * Get info value
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO|null
     */
    public function getInfo()
    {
        return $this->info;
    }
    /**
     * Set info value
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO $info
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingWSDO
     */
    public function setInfo(\Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO $info = null)
    {
        $this->info = $info;
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingWSDO
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingWSDO
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
