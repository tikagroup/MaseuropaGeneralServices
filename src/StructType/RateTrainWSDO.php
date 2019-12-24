<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateTrainWSDO StructType
 * @subpackage Structs
 */
class RateTrainWSDO extends AbstractStructBase
{
    /**
     * The rate_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $rate_id;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $code;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The discount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $discount;
    /**
     * The type_tour
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type_tour;
    /**
     * The departure
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $departure;
    /**
     * The arrival
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $arrival;
    /**
     * The documented_rate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $documented_rate;
    /**
     * The cancellation_fees_profile_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $cancellation_fees_profile_id;
    /**
     * The cancellation_fee_definitions
     * Meta information extracted from the WSDL
     * - arrayType: tns:CancellationFeeDefinitionWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO[]
     */
    public $cancellation_fee_definitions;
    /**
     * Constructor method for RateTrainWSDO
     * @uses RateTrainWSDO::setRate_id()
     * @uses RateTrainWSDO::setCode()
     * @uses RateTrainWSDO::setName()
     * @uses RateTrainWSDO::setDiscount()
     * @uses RateTrainWSDO::setType_tour()
     * @uses RateTrainWSDO::setDeparture()
     * @uses RateTrainWSDO::setArrival()
     * @uses RateTrainWSDO::setDocumented_rate()
     * @uses RateTrainWSDO::setCancellation_fees_profile_id()
     * @uses RateTrainWSDO::setCancellation_fee_definitions()
     * @param int $rate_id
     * @param string $code
     * @param string $name
     * @param string $discount
     * @param string $type_tour
     * @param string $departure
     * @param string $arrival
     * @param string $documented_rate
     * @param int $cancellation_fees_profile_id
     * @param \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO[] $cancellation_fee_definitions
     */
    public function __construct($rate_id = null, $code = null, $name = null, $discount = null, $type_tour = null, $departure = null, $arrival = null, $documented_rate = null, $cancellation_fees_profile_id = null, array $cancellation_fee_definitions = array())
    {
        $this
            ->setRate_id($rate_id)
            ->setCode($code)
            ->setName($name)
            ->setDiscount($discount)
            ->setType_tour($type_tour)
            ->setDeparture($departure)
            ->setArrival($arrival)
            ->setDocumented_rate($documented_rate)
            ->setCancellation_fees_profile_id($cancellation_fees_profile_id)
            ->setCancellation_fee_definitions($cancellation_fee_definitions);
    }
    /**
     * Get rate_id value
     * @return int|null
     */
    public function getRate_id()
    {
        return $this->rate_id;
    }
    /**
     * Set rate_id value
     * @param int $rate_id
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
     */
    public function setRate_id($rate_id = null)
    {
        // validation for constraint: int
        if (!is_null($rate_id) && !(is_int($rate_id) || ctype_digit($rate_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rate_id, true), gettype($rate_id)), __LINE__);
        }
        $this->rate_id = $rate_id;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
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
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
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
     * Get discount value
     * @return string|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }
    /**
     * Set discount value
     * @param string $discount
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
     */
    public function setDiscount($discount = null)
    {
        // validation for constraint: string
        if (!is_null($discount) && !is_string($discount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discount, true), gettype($discount)), __LINE__);
        }
        $this->discount = $discount;
        return $this;
    }
    /**
     * Get type_tour value
     * @return string|null
     */
    public function getType_tour()
    {
        return $this->type_tour;
    }
    /**
     * Set type_tour value
     * @param string $type_tour
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
     */
    public function setType_tour($type_tour = null)
    {
        // validation for constraint: string
        if (!is_null($type_tour) && !is_string($type_tour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type_tour, true), gettype($type_tour)), __LINE__);
        }
        $this->type_tour = $type_tour;
        return $this;
    }
    /**
     * Get departure value
     * @return string|null
     */
    public function getDeparture()
    {
        return $this->departure;
    }
    /**
     * Set departure value
     * @param string $departure
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
     */
    public function setDeparture($departure = null)
    {
        // validation for constraint: string
        if (!is_null($departure) && !is_string($departure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure, true), gettype($departure)), __LINE__);
        }
        $this->departure = $departure;
        return $this;
    }
    /**
     * Get arrival value
     * @return string|null
     */
    public function getArrival()
    {
        return $this->arrival;
    }
    /**
     * Set arrival value
     * @param string $arrival
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
     */
    public function setArrival($arrival = null)
    {
        // validation for constraint: string
        if (!is_null($arrival) && !is_string($arrival)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival, true), gettype($arrival)), __LINE__);
        }
        $this->arrival = $arrival;
        return $this;
    }
    /**
     * Get documented_rate value
     * @return string|null
     */
    public function getDocumented_rate()
    {
        return $this->documented_rate;
    }
    /**
     * Set documented_rate value
     * @param string $documented_rate
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
     */
    public function setDocumented_rate($documented_rate = null)
    {
        // validation for constraint: string
        if (!is_null($documented_rate) && !is_string($documented_rate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documented_rate, true), gettype($documented_rate)), __LINE__);
        }
        $this->documented_rate = $documented_rate;
        return $this;
    }
    /**
     * Get cancellation_fees_profile_id value
     * @return int|null
     */
    public function getCancellation_fees_profile_id()
    {
        return $this->cancellation_fees_profile_id;
    }
    /**
     * Set cancellation_fees_profile_id value
     * @param int $cancellation_fees_profile_id
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
     */
    public function setCancellation_fees_profile_id($cancellation_fees_profile_id = null)
    {
        // validation for constraint: int
        if (!is_null($cancellation_fees_profile_id) && !(is_int($cancellation_fees_profile_id) || ctype_digit($cancellation_fees_profile_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cancellation_fees_profile_id, true), gettype($cancellation_fees_profile_id)), __LINE__);
        }
        $this->cancellation_fees_profile_id = $cancellation_fees_profile_id;
        return $this;
    }
    /**
     * Get cancellation_fee_definitions value
     * @return \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO[]|null
     */
    public function getCancellation_fee_definitions()
    {
        return $this->cancellation_fee_definitions;
    }
    /**
     * This method is responsible for validating the values passed to the setCancellation_fee_definitions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCancellation_fee_definitions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCancellation_fee_definitionsForArrayConstraintsFromSetCancellation_fee_definitions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $rateTrainWSDOCancellation_fee_definitionsItem) {
            // validation for constraint: itemType
            if (!$rateTrainWSDOCancellation_fee_definitionsItem instanceof \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO) {
                $invalidValues[] = is_object($rateTrainWSDOCancellation_fee_definitionsItem) ? get_class($rateTrainWSDOCancellation_fee_definitionsItem) : sprintf('%s(%s)', gettype($rateTrainWSDOCancellation_fee_definitionsItem), var_export($rateTrainWSDOCancellation_fee_definitionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cancellation_fee_definitions property can only contain items of type \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set cancellation_fee_definitions value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO[] $cancellation_fee_definitions
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
     */
    public function setCancellation_fee_definitions(array $cancellation_fee_definitions = array())
    {
        // validation for constraint: array
        if ('' !== ($cancellation_fee_definitionsArrayErrorMessage = self::validateCancellation_fee_definitionsForArrayConstraintsFromSetCancellation_fee_definitions($cancellation_fee_definitions))) {
            throw new \InvalidArgumentException($cancellation_fee_definitionsArrayErrorMessage, __LINE__);
        }
        $this->cancellation_fee_definitions = $cancellation_fee_definitions;
        return $this;
    }
    /**
     * Add item to cancellation_fee_definitions value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
     */
    public function addToCancellation_fee_definitions(\Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO) {
            throw new \InvalidArgumentException(sprintf('The cancellation_fee_definitions property can only contain items of type \Maseuropa\GeneralServices\StructType\CancellationFeeDefinitionWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cancellation_fee_definitions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\RateTrainWSDO
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
