<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransfersWSDO StructType
 * @subpackage Structs
 */
class TransfersWSDO extends AbstractStructBase
{
    /**
     * The transfer_origin_place_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $transfer_origin_place_id;
    /**
     * The transfer_destiny_place_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $transfer_destiny_place_id;
    /**
     * Constructor method for TransfersWSDO
     * @uses TransfersWSDO::setTransfer_origin_place_id()
     * @uses TransfersWSDO::setTransfer_destiny_place_id()
     * @param int $transfer_origin_place_id
     * @param int $transfer_destiny_place_id
     */
    public function __construct($transfer_origin_place_id = null, $transfer_destiny_place_id = null)
    {
        $this
            ->setTransfer_origin_place_id($transfer_origin_place_id)
            ->setTransfer_destiny_place_id($transfer_destiny_place_id);
    }
    /**
     * Get transfer_origin_place_id value
     * @return int|null
     */
    public function getTransfer_origin_place_id()
    {
        return $this->transfer_origin_place_id;
    }
    /**
     * Set transfer_origin_place_id value
     * @param int $transfer_origin_place_id
     * @return \Maseuropa\GeneralServices\StructType\TransfersWSDO
     */
    public function setTransfer_origin_place_id($transfer_origin_place_id = null)
    {
        // validation for constraint: int
        if (!is_null($transfer_origin_place_id) && !(is_int($transfer_origin_place_id) || ctype_digit($transfer_origin_place_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transfer_origin_place_id, true), gettype($transfer_origin_place_id)), __LINE__);
        }
        $this->transfer_origin_place_id = $transfer_origin_place_id;
        return $this;
    }
    /**
     * Get transfer_destiny_place_id value
     * @return int|null
     */
    public function getTransfer_destiny_place_id()
    {
        return $this->transfer_destiny_place_id;
    }
    /**
     * Set transfer_destiny_place_id value
     * @param int $transfer_destiny_place_id
     * @return \Maseuropa\GeneralServices\StructType\TransfersWSDO
     */
    public function setTransfer_destiny_place_id($transfer_destiny_place_id = null)
    {
        // validation for constraint: int
        if (!is_null($transfer_destiny_place_id) && !(is_int($transfer_destiny_place_id) || ctype_digit($transfer_destiny_place_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transfer_destiny_place_id, true), gettype($transfer_destiny_place_id)), __LINE__);
        }
        $this->transfer_destiny_place_id = $transfer_destiny_place_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\TransfersWSDO
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
