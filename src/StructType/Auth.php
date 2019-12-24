<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Auth StructType
 * @subpackage Structs
 */
class Auth extends AbstractStructBase
{
    /**
     * The domain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The user
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $user;
    /**
     * The pass
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pass;
    /**
     * Constructor method for Auth
     * @uses Auth::setDomain()
     * @uses Auth::setUser()
     * @uses Auth::setPass()
     * @param string $domain
     * @param string $user
     * @param string $pass
     */
    public function __construct($domain = null, $user = null, $pass = null)
    {
        $this
            ->setDomain($domain)
            ->setUser($user)
            ->setPass($pass);
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Maseuropa\GeneralServices\StructType\Auth
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get user value
     * @return string|null
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \Maseuropa\GeneralServices\StructType\Auth
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->user = $user;
        return $this;
    }
    /**
     * Get pass value
     * @return string|null
     */
    public function getPass()
    {
        return $this->pass;
    }
    /**
     * Set pass value
     * @param string $pass
     * @return \Maseuropa\GeneralServices\StructType\Auth
     */
    public function setPass($pass = null)
    {
        // validation for constraint: string
        if (!is_null($pass) && !is_string($pass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pass, true), gettype($pass)), __LINE__);
        }
        $this->pass = $pass;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\Auth
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
