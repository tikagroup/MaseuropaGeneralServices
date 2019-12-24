<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Usersbb ServiceType
 * @subpackage Services
 */
class Usersbb extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named users_b2b
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $login
     * @param string $password
     * @param string $show_admin
     * @return struct|bool
     */
    public function users_b2b(\Maseuropa\GeneralServices\StructType\Auth $auth, $login, $password, $show_admin)
    {
        try {
            $this->setResult($this->getSoapClient()->users_b2b($auth, $login, $password, $show_admin));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return struct
     */
    public function getResult()
    {
        return parent::getResult();
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
