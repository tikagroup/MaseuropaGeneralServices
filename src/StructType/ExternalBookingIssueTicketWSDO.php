<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalBookingIssueTicketWSDO StructType
 * @subpackage Structs
 */
class ExternalBookingIssueTicketWSDO extends AbstractStructBase
{
    /**
     * The external_locator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $external_locator;
    /**
     * The issued
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $issued;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for ExternalBookingIssueTicketWSDO
     * @uses ExternalBookingIssueTicketWSDO::setExternal_locator()
     * @uses ExternalBookingIssueTicketWSDO::setIssued()
     * @uses ExternalBookingIssueTicketWSDO::setError()
     * @param string $external_locator
     * @param bool $issued
     * @param string $error
     */
    public function __construct($external_locator = null, $issued = null, $error = null)
    {
        $this
            ->setExternal_locator($external_locator)
            ->setIssued($issued)
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingIssueTicketWSDO
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
     * Get issued value
     * @return bool|null
     */
    public function getIssued()
    {
        return $this->issued;
    }
    /**
     * Set issued value
     * @param bool $issued
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingIssueTicketWSDO
     */
    public function setIssued($issued = null)
    {
        // validation for constraint: boolean
        if (!is_null($issued) && !is_bool($issued)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($issued, true), gettype($issued)), __LINE__);
        }
        $this->issued = $issued;
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingIssueTicketWSDO
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingIssueTicketWSDO
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
