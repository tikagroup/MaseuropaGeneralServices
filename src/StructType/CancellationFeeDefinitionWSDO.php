<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancellationFeeDefinitionWSDO StructType
 * @subpackage Structs
 */
class CancellationFeeDefinitionWSDO extends AbstractStructBase
{
    /**
     * The days_advance
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $days_advance;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $amount;
    /**
     * The percentage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $percentage;
    /**
     * The nights
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $nights;
    /**
     * Constructor method for CancellationFeeDefinitionWSDO
     * @uses CancellationFeeDefinitionWSDO::setDays_advance()
     * @uses CancellationFeeDefinitionWSDO::setAmount()
     * @uses CancellationFeeDefinitionWSDO::setPercentage()
     * @uses CancellationFeeDefinitionWSDO::setNights()
     * @param int $days_advance
     * @param string $amount
     * @param string $percentage
     * @param int $nights
     */
    public function __construct($days_advance = null, $amount = null, $percentage = null, $nights = null)
    {
        $this
            ->setDays_advance($days_advance)
            ->setAmount($amount)
            ->setPercentage($percentage)
            ->setNights($nights);
    }
    /**
     * Get days_advance value
     * @return int|null
     */
    public function getDays_advance()
    {
        return $this->days_advance;
    }
    /**
     * Set days_advance value
     * @param int $days_advance
     * @return \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO
     */
    public function setDays_advance($days_advance = null)
    {
        // validation for constraint: int
        if (!is_null($days_advance) && !(is_int($days_advance) || ctype_digit($days_advance))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($days_advance, true), gettype($days_advance)), __LINE__);
        }
        $this->days_advance = $days_advance;
        return $this;
    }
    /**
     * Get amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param string $amount
     * @return \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get percentage value
     * @return string|null
     */
    public function getPercentage()
    {
        return $this->percentage;
    }
    /**
     * Set percentage value
     * @param string $percentage
     * @return \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO
     */
    public function setPercentage($percentage = null)
    {
        // validation for constraint: string
        if (!is_null($percentage) && !is_string($percentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * Get nights value
     * @return int|null
     */
    public function getNights()
    {
        return $this->nights;
    }
    /**
     * Set nights value
     * @param int $nights
     * @return \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO
     */
    public function setNights($nights = null)
    {
        // validation for constraint: int
        if (!is_null($nights) && !(is_int($nights) || ctype_digit($nights))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nights, true), gettype($nights)), __LINE__);
        }
        $this->nights = $nights;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO
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
