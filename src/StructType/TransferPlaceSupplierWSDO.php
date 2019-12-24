<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferPlaceSupplierWSDO StructType
 * @subpackage Structs
 */
class TransferPlaceSupplierWSDO extends AbstractStructBase
{
    /**
     * The supplier_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $supplier_id;
    /**
     * The companyname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $companyname;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $category;
    /**
     * The province
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $province;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $phone;
    /**
     * Constructor method for TransferPlaceSupplierWSDO
     * @uses TransferPlaceSupplierWSDO::setSupplier_id()
     * @uses TransferPlaceSupplierWSDO::setCompanyname()
     * @uses TransferPlaceSupplierWSDO::setCategory()
     * @uses TransferPlaceSupplierWSDO::setProvince()
     * @uses TransferPlaceSupplierWSDO::setCity()
     * @uses TransferPlaceSupplierWSDO::setAddress()
     * @uses TransferPlaceSupplierWSDO::setPhone()
     * @param int $supplier_id
     * @param string $companyname
     * @param int $category
     * @param string $province
     * @param string $city
     * @param string $address
     * @param string $phone
     */
    public function __construct($supplier_id = null, $companyname = null, $category = null, $province = null, $city = null, $address = null, $phone = null)
    {
        $this
            ->setSupplier_id($supplier_id)
            ->setCompanyname($companyname)
            ->setCategory($category)
            ->setProvince($province)
            ->setCity($city)
            ->setAddress($address)
            ->setPhone($phone);
    }
    /**
     * Get supplier_id value
     * @return int|null
     */
    public function getSupplier_id()
    {
        return $this->supplier_id;
    }
    /**
     * Set supplier_id value
     * @param int $supplier_id
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceSupplierWSDO
     */
    public function setSupplier_id($supplier_id = null)
    {
        // validation for constraint: int
        if (!is_null($supplier_id) && !(is_int($supplier_id) || ctype_digit($supplier_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($supplier_id, true), gettype($supplier_id)), __LINE__);
        }
        $this->supplier_id = $supplier_id;
        return $this;
    }
    /**
     * Get companyname value
     * @return string|null
     */
    public function getCompanyname()
    {
        return $this->companyname;
    }
    /**
     * Set companyname value
     * @param string $companyname
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceSupplierWSDO
     */
    public function setCompanyname($companyname = null)
    {
        // validation for constraint: string
        if (!is_null($companyname) && !is_string($companyname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyname, true), gettype($companyname)), __LINE__);
        }
        $this->companyname = $companyname;
        return $this;
    }
    /**
     * Get category value
     * @return int|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param int $category
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceSupplierWSDO
     */
    public function setCategory($category = null)
    {
        // validation for constraint: int
        if (!is_null($category) && !(is_int($category) || ctype_digit($category))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get province value
     * @return string|null
     */
    public function getProvince()
    {
        return $this->province;
    }
    /**
     * Set province value
     * @param string $province
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceSupplierWSDO
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($province, true), gettype($province)), __LINE__);
        }
        $this->province = $province;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceSupplierWSDO
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceSupplierWSDO
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceSupplierWSDO
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\TransferPlaceSupplierWSDO
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
