<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClassWSDO StructType
 * @subpackage Structs
 */
class ClassWSDO extends AbstractStructBase
{
    /**
     * The article_class_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_class_type_id;
    /**
     * The menu_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $menu_type_id;
    /**
     * The article_class
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $article_class;
    /**
     * The default_search
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $default_search;
    /**
     * The default_zone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $default_zone;
    /**
     * The default_board
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $default_board;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $order;
    /**
     * The visible_retail
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $visible_retail;
    /**
     * The unlike_days_search_filters
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Array
     */
    public $unlike_days_search_filters;
    /**
     * The max_age_children
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $max_age_children;
    /**
     * The min_adults
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $min_adults;
    /**
     * The max_adults
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $max_adults;
    /**
     * The max_children
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $max_children;
    /**
     * Constructor method for ClassWSDO
     * @uses ClassWSDO::setArticle_class_type_id()
     * @uses ClassWSDO::setMenu_type_id()
     * @uses ClassWSDO::setArticle_class()
     * @uses ClassWSDO::setDefault_search()
     * @uses ClassWSDO::setDefault_zone()
     * @uses ClassWSDO::setDefault_board()
     * @uses ClassWSDO::setOrder()
     * @uses ClassWSDO::setVisible_retail()
     * @uses ClassWSDO::setUnlike_days_search_filters()
     * @uses ClassWSDO::setMax_age_children()
     * @uses ClassWSDO::setMin_adults()
     * @uses ClassWSDO::setMax_adults()
     * @uses ClassWSDO::setMax_children()
     * @param int $article_class_type_id
     * @param int $menu_type_id
     * @param string $article_class
     * @param string $default_search
     * @param string $default_zone
     * @param string $default_board
     * @param int $order
     * @param string $visible_retail
     * @param Array $unlike_days_search_filters
     * @param int $max_age_children
     * @param int $min_adults
     * @param int $max_adults
     * @param int $max_children
     */
    public function __construct($article_class_type_id = null, $menu_type_id = null, $article_class = null, $default_search = null, $default_zone = null, $default_board = null, $order = null, $visible_retail = null, Array $unlike_days_search_filters = null, $max_age_children = null, $min_adults = null, $max_adults = null, $max_children = null)
    {
        $this
            ->setArticle_class_type_id($article_class_type_id)
            ->setMenu_type_id($menu_type_id)
            ->setArticle_class($article_class)
            ->setDefault_search($default_search)
            ->setDefault_zone($default_zone)
            ->setDefault_board($default_board)
            ->setOrder($order)
            ->setVisible_retail($visible_retail)
            ->setUnlike_days_search_filters($unlike_days_search_filters)
            ->setMax_age_children($max_age_children)
            ->setMin_adults($min_adults)
            ->setMax_adults($max_adults)
            ->setMax_children($max_children);
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
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
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
     * Get menu_type_id value
     * @return int|null
     */
    public function getMenu_type_id()
    {
        return $this->menu_type_id;
    }
    /**
     * Set menu_type_id value
     * @param int $menu_type_id
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setMenu_type_id($menu_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($menu_type_id) && !(is_int($menu_type_id) || ctype_digit($menu_type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($menu_type_id, true), gettype($menu_type_id)), __LINE__);
        }
        $this->menu_type_id = $menu_type_id;
        return $this;
    }
    /**
     * Get article_class value
     * @return string|null
     */
    public function getArticle_class()
    {
        return $this->article_class;
    }
    /**
     * Set article_class value
     * @param string $article_class
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setArticle_class($article_class = null)
    {
        // validation for constraint: string
        if (!is_null($article_class) && !is_string($article_class)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($article_class, true), gettype($article_class)), __LINE__);
        }
        $this->article_class = $article_class;
        return $this;
    }
    /**
     * Get default_search value
     * @return string|null
     */
    public function getDefault_search()
    {
        return $this->default_search;
    }
    /**
     * Set default_search value
     * @param string $default_search
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setDefault_search($default_search = null)
    {
        // validation for constraint: string
        if (!is_null($default_search) && !is_string($default_search)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default_search, true), gettype($default_search)), __LINE__);
        }
        $this->default_search = $default_search;
        return $this;
    }
    /**
     * Get default_zone value
     * @return string|null
     */
    public function getDefault_zone()
    {
        return $this->default_zone;
    }
    /**
     * Set default_zone value
     * @param string $default_zone
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setDefault_zone($default_zone = null)
    {
        // validation for constraint: string
        if (!is_null($default_zone) && !is_string($default_zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default_zone, true), gettype($default_zone)), __LINE__);
        }
        $this->default_zone = $default_zone;
        return $this;
    }
    /**
     * Get default_board value
     * @return string|null
     */
    public function getDefault_board()
    {
        return $this->default_board;
    }
    /**
     * Set default_board value
     * @param string $default_board
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setDefault_board($default_board = null)
    {
        // validation for constraint: string
        if (!is_null($default_board) && !is_string($default_board)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default_board, true), gettype($default_board)), __LINE__);
        }
        $this->default_board = $default_board;
        return $this;
    }
    /**
     * Get order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Get visible_retail value
     * @return string|null
     */
    public function getVisible_retail()
    {
        return $this->visible_retail;
    }
    /**
     * Set visible_retail value
     * @param string $visible_retail
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setVisible_retail($visible_retail = null)
    {
        // validation for constraint: string
        if (!is_null($visible_retail) && !is_string($visible_retail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($visible_retail, true), gettype($visible_retail)), __LINE__);
        }
        $this->visible_retail = $visible_retail;
        return $this;
    }
    /**
     * Get unlike_days_search_filters value
     * @return Array|null
     */
    public function getUnlike_days_search_filters()
    {
        return $this->unlike_days_search_filters;
    }
    /**
     * Set unlike_days_search_filters value
     * @param Array $unlike_days_search_filters
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setUnlike_days_search_filters(Array $unlike_days_search_filters = null)
    {
        $this->unlike_days_search_filters = $unlike_days_search_filters;
        return $this;
    }
    /**
     * Get max_age_children value
     * @return int|null
     */
    public function getMax_age_children()
    {
        return $this->max_age_children;
    }
    /**
     * Set max_age_children value
     * @param int $max_age_children
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setMax_age_children($max_age_children = null)
    {
        // validation for constraint: int
        if (!is_null($max_age_children) && !(is_int($max_age_children) || ctype_digit($max_age_children))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($max_age_children, true), gettype($max_age_children)), __LINE__);
        }
        $this->max_age_children = $max_age_children;
        return $this;
    }
    /**
     * Get min_adults value
     * @return int|null
     */
    public function getMin_adults()
    {
        return $this->min_adults;
    }
    /**
     * Set min_adults value
     * @param int $min_adults
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setMin_adults($min_adults = null)
    {
        // validation for constraint: int
        if (!is_null($min_adults) && !(is_int($min_adults) || ctype_digit($min_adults))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($min_adults, true), gettype($min_adults)), __LINE__);
        }
        $this->min_adults = $min_adults;
        return $this;
    }
    /**
     * Get max_adults value
     * @return int|null
     */
    public function getMax_adults()
    {
        return $this->max_adults;
    }
    /**
     * Set max_adults value
     * @param int $max_adults
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setMax_adults($max_adults = null)
    {
        // validation for constraint: int
        if (!is_null($max_adults) && !(is_int($max_adults) || ctype_digit($max_adults))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($max_adults, true), gettype($max_adults)), __LINE__);
        }
        $this->max_adults = $max_adults;
        return $this;
    }
    /**
     * Get max_children value
     * @return int|null
     */
    public function getMax_children()
    {
        return $this->max_children;
    }
    /**
     * Set max_children value
     * @param int $max_children
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
     */
    public function setMax_children($max_children = null)
    {
        // validation for constraint: int
        if (!is_null($max_children) && !(is_int($max_children) || ctype_digit($max_children))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($max_children, true), gettype($max_children)), __LINE__);
        }
        $this->max_children = $max_children;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\ClassWSDO
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
