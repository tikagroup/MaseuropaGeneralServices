<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuperclassWSDO StructType
 * @subpackage Structs
 */
class SuperclassWSDO extends AbstractStructBase
{
    /**
     * The article_type_superclass_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_type_superclass_id;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The orden
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $orden;
    /**
     * Constructor method for SuperclassWSDO
     * @uses SuperclassWSDO::setArticle_type_superclass_id()
     * @uses SuperclassWSDO::setName()
     * @uses SuperclassWSDO::setOrden()
     * @param int $article_type_superclass_id
     * @param string $name
     * @param int $orden
     */
    public function __construct($article_type_superclass_id = null, $name = null, $orden = null)
    {
        $this
            ->setArticle_type_superclass_id($article_type_superclass_id)
            ->setName($name)
            ->setOrden($orden);
    }
    /**
     * Get article_type_superclass_id value
     * @return int|null
     */
    public function getArticle_type_superclass_id()
    {
        return $this->article_type_superclass_id;
    }
    /**
     * Set article_type_superclass_id value
     * @param int $article_type_superclass_id
     * @return \Maseuropa\GeneralServices\StructType\SuperclassWSDO
     */
    public function setArticle_type_superclass_id($article_type_superclass_id = null)
    {
        // validation for constraint: int
        if (!is_null($article_type_superclass_id) && !(is_int($article_type_superclass_id) || ctype_digit($article_type_superclass_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($article_type_superclass_id, true), gettype($article_type_superclass_id)), __LINE__);
        }
        $this->article_type_superclass_id = $article_type_superclass_id;
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
     * @return \Maseuropa\GeneralServices\StructType\SuperclassWSDO
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
     * Get orden value
     * @return int|null
     */
    public function getOrden()
    {
        return $this->orden;
    }
    /**
     * Set orden value
     * @param int $orden
     * @return \Maseuropa\GeneralServices\StructType\SuperclassWSDO
     */
    public function setOrden($orden = null)
    {
        // validation for constraint: int
        if (!is_null($orden) && !(is_int($orden) || ctype_digit($orden))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orden, true), gettype($orden)), __LINE__);
        }
        $this->orden = $orden;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\SuperclassWSDO
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
