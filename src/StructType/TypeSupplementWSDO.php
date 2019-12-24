<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeSupplementWSDO StructType
 * @subpackage Structs
 */
class TypeSupplementWSDO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The supplement_class_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $supplement_class_type_id;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The abbreviation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $abbreviation;
    /**
     * The required
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $required;
    /**
     * The pax_count
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $pax_count;
    /**
     * The children_count
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $children_count;
    /**
     * The stay_affects
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $stay_affects;
    /**
     * The quota_affects
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $quota_affects;
    /**
     * The affects_to
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $affects_to;
    /**
     * The ordinal_child
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ordinal_child;
    /**
     * The deducts_quota
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $deducts_quota;
    /**
     * Constructor method for TypeSupplementWSDO
     * @uses TypeSupplementWSDO::setId()
     * @uses TypeSupplementWSDO::setSupplement_class_type_id()
     * @uses TypeSupplementWSDO::setName()
     * @uses TypeSupplementWSDO::setAbbreviation()
     * @uses TypeSupplementWSDO::setRequired()
     * @uses TypeSupplementWSDO::setPax_count()
     * @uses TypeSupplementWSDO::setChildren_count()
     * @uses TypeSupplementWSDO::setStay_affects()
     * @uses TypeSupplementWSDO::setQuota_affects()
     * @uses TypeSupplementWSDO::setAffects_to()
     * @uses TypeSupplementWSDO::setOrdinal_child()
     * @uses TypeSupplementWSDO::setDeducts_quota()
     * @param int $id
     * @param int $supplement_class_type_id
     * @param string $name
     * @param string $abbreviation
     * @param int $required
     * @param int $pax_count
     * @param int $children_count
     * @param int $stay_affects
     * @param int $quota_affects
     * @param int $affects_to
     * @param int $ordinal_child
     * @param int $deducts_quota
     */
    public function __construct($id = null, $supplement_class_type_id = null, $name = null, $abbreviation = null, $required = null, $pax_count = null, $children_count = null, $stay_affects = null, $quota_affects = null, $affects_to = null, $ordinal_child = null, $deducts_quota = null)
    {
        $this
            ->setId($id)
            ->setSupplement_class_type_id($supplement_class_type_id)
            ->setName($name)
            ->setAbbreviation($abbreviation)
            ->setRequired($required)
            ->setPax_count($pax_count)
            ->setChildren_count($children_count)
            ->setStay_affects($stay_affects)
            ->setQuota_affects($quota_affects)
            ->setAffects_to($affects_to)
            ->setOrdinal_child($ordinal_child)
            ->setDeducts_quota($deducts_quota);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get supplement_class_type_id value
     * @return int|null
     */
    public function getSupplement_class_type_id()
    {
        return $this->supplement_class_type_id;
    }
    /**
     * Set supplement_class_type_id value
     * @param int $supplement_class_type_id
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
     */
    public function setSupplement_class_type_id($supplement_class_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($supplement_class_type_id) && !(is_int($supplement_class_type_id) || ctype_digit($supplement_class_type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($supplement_class_type_id, true), gettype($supplement_class_type_id)), __LINE__);
        }
        $this->supplement_class_type_id = $supplement_class_type_id;
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
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
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
     * Get abbreviation value
     * @return string|null
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }
    /**
     * Set abbreviation value
     * @param string $abbreviation
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
     */
    public function setAbbreviation($abbreviation = null)
    {
        // validation for constraint: string
        if (!is_null($abbreviation) && !is_string($abbreviation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($abbreviation, true), gettype($abbreviation)), __LINE__);
        }
        $this->abbreviation = $abbreviation;
        return $this;
    }
    /**
     * Get required value
     * @return int|null
     */
    public function getRequired()
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param int $required
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
     */
    public function setRequired($required = null)
    {
        // validation for constraint: int
        if (!is_null($required) && !(is_int($required) || ctype_digit($required))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->required = $required;
        return $this;
    }
    /**
     * Get pax_count value
     * @return int|null
     */
    public function getPax_count()
    {
        return $this->pax_count;
    }
    /**
     * Set pax_count value
     * @param int $pax_count
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
     */
    public function setPax_count($pax_count = null)
    {
        // validation for constraint: int
        if (!is_null($pax_count) && !(is_int($pax_count) || ctype_digit($pax_count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pax_count, true), gettype($pax_count)), __LINE__);
        }
        $this->pax_count = $pax_count;
        return $this;
    }
    /**
     * Get children_count value
     * @return int|null
     */
    public function getChildren_count()
    {
        return $this->children_count;
    }
    /**
     * Set children_count value
     * @param int $children_count
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
     */
    public function setChildren_count($children_count = null)
    {
        // validation for constraint: int
        if (!is_null($children_count) && !(is_int($children_count) || ctype_digit($children_count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($children_count, true), gettype($children_count)), __LINE__);
        }
        $this->children_count = $children_count;
        return $this;
    }
    /**
     * Get stay_affects value
     * @return int|null
     */
    public function getStay_affects()
    {
        return $this->stay_affects;
    }
    /**
     * Set stay_affects value
     * @param int $stay_affects
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
     */
    public function setStay_affects($stay_affects = null)
    {
        // validation for constraint: int
        if (!is_null($stay_affects) && !(is_int($stay_affects) || ctype_digit($stay_affects))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stay_affects, true), gettype($stay_affects)), __LINE__);
        }
        $this->stay_affects = $stay_affects;
        return $this;
    }
    /**
     * Get quota_affects value
     * @return int|null
     */
    public function getQuota_affects()
    {
        return $this->quota_affects;
    }
    /**
     * Set quota_affects value
     * @param int $quota_affects
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
     */
    public function setQuota_affects($quota_affects = null)
    {
        // validation for constraint: int
        if (!is_null($quota_affects) && !(is_int($quota_affects) || ctype_digit($quota_affects))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quota_affects, true), gettype($quota_affects)), __LINE__);
        }
        $this->quota_affects = $quota_affects;
        return $this;
    }
    /**
     * Get affects_to value
     * @return int|null
     */
    public function getAffects_to()
    {
        return $this->affects_to;
    }
    /**
     * Set affects_to value
     * @param int $affects_to
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
     */
    public function setAffects_to($affects_to = null)
    {
        // validation for constraint: int
        if (!is_null($affects_to) && !(is_int($affects_to) || ctype_digit($affects_to))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($affects_to, true), gettype($affects_to)), __LINE__);
        }
        $this->affects_to = $affects_to;
        return $this;
    }
    /**
     * Get ordinal_child value
     * @return int|null
     */
    public function getOrdinal_child()
    {
        return $this->ordinal_child;
    }
    /**
     * Set ordinal_child value
     * @param int $ordinal_child
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
     */
    public function setOrdinal_child($ordinal_child = null)
    {
        // validation for constraint: int
        if (!is_null($ordinal_child) && !(is_int($ordinal_child) || ctype_digit($ordinal_child))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ordinal_child, true), gettype($ordinal_child)), __LINE__);
        }
        $this->ordinal_child = $ordinal_child;
        return $this;
    }
    /**
     * Get deducts_quota value
     * @return int|null
     */
    public function getDeducts_quota()
    {
        return $this->deducts_quota;
    }
    /**
     * Set deducts_quota value
     * @param int $deducts_quota
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
     */
    public function setDeducts_quota($deducts_quota = null)
    {
        // validation for constraint: int
        if (!is_null($deducts_quota) && !(is_int($deducts_quota) || ctype_digit($deducts_quota))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deducts_quota, true), gettype($deducts_quota)), __LINE__);
        }
        $this->deducts_quota = $deducts_quota;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\TypeSupplementWSDO
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
