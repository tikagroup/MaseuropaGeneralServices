<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferPlaceWSDO StructType
 * @subpackage Structs
 */
class TransferPlaceWSDO extends AbstractStructBase
{
    /**
     * The transfer_place_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $transfer_place_id;
    /**
     * The transfer_type_place_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $transfer_type_place_id;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The iata_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $iata_code;
    /**
     * Constructor method for TransferPlaceWSDO
     * @uses TransferPlaceWSDO::setTransfer_place_id()
     * @uses TransferPlaceWSDO::setTransfer_type_place_id()
     * @uses TransferPlaceWSDO::setName()
     * @uses TransferPlaceWSDO::setDescription()
     * @uses TransferPlaceWSDO::setIata_code()
     * @param int $transfer_place_id
     * @param int $transfer_type_place_id
     * @param string $name
     * @param string $description
     * @param string $iata_code
     */
    public function __construct($transfer_place_id = null, $transfer_type_place_id = null, $name = null, $description = null, $iata_code = null)
    {
        $this
            ->setTransfer_place_id($transfer_place_id)
            ->setTransfer_type_place_id($transfer_type_place_id)
            ->setName($name)
            ->setDescription($description)
            ->setIata_code($iata_code);
    }
    /**
     * Get transfer_place_id value
     * @return int|null
     */
    public function getTransfer_place_id()
    {
        return $this->transfer_place_id;
    }
    /**
     * Set transfer_place_id value
     * @param int $transfer_place_id
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceWSDO
     */
    public function setTransfer_place_id($transfer_place_id = null)
    {
        // validation for constraint: int
        if (!is_null($transfer_place_id) && !(is_int($transfer_place_id) || ctype_digit($transfer_place_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transfer_place_id, true), gettype($transfer_place_id)), __LINE__);
        }
        $this->transfer_place_id = $transfer_place_id;
        return $this;
    }
    /**
     * Get transfer_type_place_id value
     * @return int|null
     */
    public function getTransfer_type_place_id()
    {
        return $this->transfer_type_place_id;
    }
    /**
     * Set transfer_type_place_id value
     * @param int $transfer_type_place_id
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceWSDO
     */
    public function setTransfer_type_place_id($transfer_type_place_id = null)
    {
        // validation for constraint: int
        if (!is_null($transfer_type_place_id) && !(is_int($transfer_type_place_id) || ctype_digit($transfer_type_place_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transfer_type_place_id, true), gettype($transfer_type_place_id)), __LINE__);
        }
        $this->transfer_type_place_id = $transfer_type_place_id;
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
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceWSDO
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
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceWSDO
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get iata_code value
     * @return string|null
     */
    public function getIata_code()
    {
        return $this->iata_code;
    }
    /**
     * Set iata_code value
     * @param string $iata_code
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceWSDO
     */
    public function setIata_code($iata_code = null)
    {
        // validation for constraint: string
        if (!is_null($iata_code) && !is_string($iata_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iata_code, true), gettype($iata_code)), __LINE__);
        }
        $this->iata_code = $iata_code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceWSDO
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
