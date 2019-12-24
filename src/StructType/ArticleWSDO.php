<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArticleWSDO StructType
 * @subpackage Structs
 */
class ArticleWSDO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The active
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $active;
    /**
     * The external
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $external;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The article_class_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_class_type_id;
    /**
     * The article_superclass_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_superclass_type_id;
    /**
     * The country_zone_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $country_zone_id;
    /**
     * The zone_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $zone_id;
    /**
     * The article_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_type_id;
    /**
     * Constructor method for ArticleWSDO
     * @uses ArticleWSDO::setId()
     * @uses ArticleWSDO::setActive()
     * @uses ArticleWSDO::setExternal()
     * @uses ArticleWSDO::setName()
     * @uses ArticleWSDO::setArticle_class_type_id()
     * @uses ArticleWSDO::setArticle_superclass_type_id()
     * @uses ArticleWSDO::setCountry_zone_id()
     * @uses ArticleWSDO::setZone_id()
     * @uses ArticleWSDO::setArticle_type_id()
     * @param int $id
     * @param int $active
     * @param int $external
     * @param string $name
     * @param int $article_class_type_id
     * @param int $article_superclass_type_id
     * @param int $country_zone_id
     * @param int $zone_id
     * @param int $article_type_id
     */
    public function __construct($id = null, $active = null, $external = null, $name = null, $article_class_type_id = null, $article_superclass_type_id = null, $country_zone_id = null, $zone_id = null, $article_type_id = null)
    {
        $this
            ->setId($id)
            ->setActive($active)
            ->setExternal($external)
            ->setName($name)
            ->setArticle_class_type_id($article_class_type_id)
            ->setArticle_superclass_type_id($article_superclass_type_id)
            ->setCountry_zone_id($country_zone_id)
            ->setZone_id($zone_id)
            ->setArticle_type_id($article_type_id);
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
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO
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
     * Get active value
     * @return int|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param int $active
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO
     */
    public function setActive($active = null)
    {
        // validation for constraint: int
        if (!is_null($active) && !(is_int($active) || ctype_digit($active))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get external value
     * @return int|null
     */
    public function getExternal()
    {
        return $this->external;
    }
    /**
     * Set external value
     * @param int $external
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO
     */
    public function setExternal($external = null)
    {
        // validation for constraint: int
        if (!is_null($external) && !(is_int($external) || ctype_digit($external))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($external, true), gettype($external)), __LINE__);
        }
        $this->external = $external;
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
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO
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
     * Get article_class_type_id value
     * @return int|null
     */
    public function getArticle_class_type_id()
    {
        return $this->article_class_type_id;
    }
    /**
     * Set article_class_type_id value
     * @param int $article_class_type_id
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO
     */
    public function setArticle_class_type_id($article_class_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($article_class_type_id) && !(is_int($article_class_type_id) || ctype_digit($article_class_type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($article_class_type_id, true), gettype($article_class_type_id)), __LINE__);
        }
        $this->article_class_type_id = $article_class_type_id;
        return $this;
    }
    /**
     * Get article_superclass_type_id value
     * @return int|null
     */
    public function getArticle_superclass_type_id()
    {
        return $this->article_superclass_type_id;
    }
    /**
     * Set article_superclass_type_id value
     * @param int $article_superclass_type_id
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO
     */
    public function setArticle_superclass_type_id($article_superclass_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($article_superclass_type_id) && !(is_int($article_superclass_type_id) || ctype_digit($article_superclass_type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($article_superclass_type_id, true), gettype($article_superclass_type_id)), __LINE__);
        }
        $this->article_superclass_type_id = $article_superclass_type_id;
        return $this;
    }
    /**
     * Get country_zone_id value
     * @return int|null
     */
    public function getCountry_zone_id()
    {
        return $this->country_zone_id;
    }
    /**
     * Set country_zone_id value
     * @param int $country_zone_id
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO
     */
    public function setCountry_zone_id($country_zone_id = null)
    {
        // validation for constraint: int
        if (!is_null($country_zone_id) && !(is_int($country_zone_id) || ctype_digit($country_zone_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($country_zone_id, true), gettype($country_zone_id)), __LINE__);
        }
        $this->country_zone_id = $country_zone_id;
        return $this;
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
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO
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
     * Get article_type_id value
     * @return int|null
     */
    public function getArticle_type_id()
    {
        return $this->article_type_id;
    }
    /**
     * Set article_type_id value
     * @param int $article_type_id
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO
     */
    public function setArticle_type_id($article_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($article_type_id) && !(is_int($article_type_id) || ctype_digit($article_type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($article_type_id, true), gettype($article_type_id)), __LINE__);
        }
        $this->article_type_id = $article_type_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\ArticleWSDO
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
