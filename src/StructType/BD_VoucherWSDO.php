<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BD_VoucherWSDO StructType
 * @subpackage Structs
 */
class BD_VoucherWSDO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The locator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $locator;
    /**
     * The formalized
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $formalized;
    /**
     * The titular
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $titular;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The begin_date_service
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $begin_date_service;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The provider
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $provider;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The pvp_commissionable
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pvp_commissionable;
    /**
     * The commission
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $commission;
    /**
     * The commission_percent_gross
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $commission_percent_gross;
    /**
     * The pvp_not_commissionable
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pvp_not_commissionable;
    /**
     * The rates
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $rates;
    /**
     * The fees
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fees;
    /**
     * The pvp_total_agency
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pvp_total_agency;
    /**
     * The total_hf
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $total_hf;
    /**
     * The pvp_total_client
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pvp_total_client;
    /**
     * The services
     * Meta information extracted from the WSDL
     * - arrayType: tns:BD_ServiceNormalWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO[]
     */
    public $services;
    /**
     * Constructor method for BD_VoucherWSDO
     * @uses BD_VoucherWSDO::setId()
     * @uses BD_VoucherWSDO::setLocator()
     * @uses BD_VoucherWSDO::setFormalized()
     * @uses BD_VoucherWSDO::setTitular()
     * @uses BD_VoucherWSDO::setDate()
     * @uses BD_VoucherWSDO::setBegin_date_service()
     * @uses BD_VoucherWSDO::setStatus()
     * @uses BD_VoucherWSDO::setProvider()
     * @uses BD_VoucherWSDO::setDescription()
     * @uses BD_VoucherWSDO::setPvp_commissionable()
     * @uses BD_VoucherWSDO::setCommission()
     * @uses BD_VoucherWSDO::setCommission_percent_gross()
     * @uses BD_VoucherWSDO::setPvp_not_commissionable()
     * @uses BD_VoucherWSDO::setRates()
     * @uses BD_VoucherWSDO::setFees()
     * @uses BD_VoucherWSDO::setPvp_total_agency()
     * @uses BD_VoucherWSDO::setTotal_hf()
     * @uses BD_VoucherWSDO::setPvp_total_client()
     * @uses BD_VoucherWSDO::setServices()
     * @param int $id
     * @param string $locator
     * @param string $formalized
     * @param string $titular
     * @param string $date
     * @param string $begin_date_service
     * @param string $status
     * @param string $provider
     * @param string $description
     * @param string $pvp_commissionable
     * @param string $commission
     * @param string $commission_percent_gross
     * @param string $pvp_not_commissionable
     * @param string $rates
     * @param string $fees
     * @param string $pvp_total_agency
     * @param string $total_hf
     * @param string $pvp_total_client
     * @param \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO[] $services
     */
    public function __construct($id = null, $locator = null, $formalized = null, $titular = null, $date = null, $begin_date_service = null, $status = null, $provider = null, $description = null, $pvp_commissionable = null, $commission = null, $commission_percent_gross = null, $pvp_not_commissionable = null, $rates = null, $fees = null, $pvp_total_agency = null, $total_hf = null, $pvp_total_client = null, array $services = array())
    {
        $this
            ->setId($id)
            ->setLocator($locator)
            ->setFormalized($formalized)
            ->setTitular($titular)
            ->setDate($date)
            ->setBegin_date_service($begin_date_service)
            ->setStatus($status)
            ->setProvider($provider)
            ->setDescription($description)
            ->setPvp_commissionable($pvp_commissionable)
            ->setCommission($commission)
            ->setCommission_percent_gross($commission_percent_gross)
            ->setPvp_not_commissionable($pvp_not_commissionable)
            ->setRates($rates)
            ->setFees($fees)
            ->setPvp_total_agency($pvp_total_agency)
            ->setTotal_hf($total_hf)
            ->setPvp_total_client($pvp_total_client)
            ->setServices($services);
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
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
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
     * Get locator value
     * @return string|null
     */
    public function getLocator()
    {
        return $this->locator;
    }
    /**
     * Set locator value
     * @param string $locator
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setLocator($locator = null)
    {
        // validation for constraint: string
        if (!is_null($locator) && !is_string($locator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locator, true), gettype($locator)), __LINE__);
        }
        $this->locator = $locator;
        return $this;
    }
    /**
     * Get formalized value
     * @return string|null
     */
    public function getFormalized()
    {
        return $this->formalized;
    }
    /**
     * Set formalized value
     * @param string $formalized
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setFormalized($formalized = null)
    {
        // validation for constraint: string
        if (!is_null($formalized) && !is_string($formalized)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formalized, true), gettype($formalized)), __LINE__);
        }
        $this->formalized = $formalized;
        return $this;
    }
    /**
     * Get titular value
     * @return string|null
     */
    public function getTitular()
    {
        return $this->titular;
    }
    /**
     * Set titular value
     * @param string $titular
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setTitular($titular = null)
    {
        // validation for constraint: string
        if (!is_null($titular) && !is_string($titular)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titular, true), gettype($titular)), __LINE__);
        }
        $this->titular = $titular;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get begin_date_service value
     * @return string|null
     */
    public function getBegin_date_service()
    {
        return $this->begin_date_service;
    }
    /**
     * Set begin_date_service value
     * @param string $begin_date_service
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setBegin_date_service($begin_date_service = null)
    {
        // validation for constraint: string
        if (!is_null($begin_date_service) && !is_string($begin_date_service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($begin_date_service, true), gettype($begin_date_service)), __LINE__);
        }
        $this->begin_date_service = $begin_date_service;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get provider value
     * @return string|null
     */
    public function getProvider()
    {
        return $this->provider;
    }
    /**
     * Set provider value
     * @param string $provider
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setProvider($provider = null)
    {
        // validation for constraint: string
        if (!is_null($provider) && !is_string($provider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provider, true), gettype($provider)), __LINE__);
        }
        $this->provider = $provider;
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
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
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
     * Get pvp_commissionable value
     * @return string|null
     */
    public function getPvp_commissionable()
    {
        return $this->pvp_commissionable;
    }
    /**
     * Set pvp_commissionable value
     * @param string $pvp_commissionable
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setPvp_commissionable($pvp_commissionable = null)
    {
        // validation for constraint: string
        if (!is_null($pvp_commissionable) && !is_string($pvp_commissionable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pvp_commissionable, true), gettype($pvp_commissionable)), __LINE__);
        }
        $this->pvp_commissionable = $pvp_commissionable;
        return $this;
    }
    /**
     * Get commission value
     * @return string|null
     */
    public function getCommission()
    {
        return $this->commission;
    }
    /**
     * Set commission value
     * @param string $commission
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setCommission($commission = null)
    {
        // validation for constraint: string
        if (!is_null($commission) && !is_string($commission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commission, true), gettype($commission)), __LINE__);
        }
        $this->commission = $commission;
        return $this;
    }
    /**
     * Get commission_percent_gross value
     * @return string|null
     */
    public function getCommission_percent_gross()
    {
        return $this->commission_percent_gross;
    }
    /**
     * Set commission_percent_gross value
     * @param string $commission_percent_gross
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setCommission_percent_gross($commission_percent_gross = null)
    {
        // validation for constraint: string
        if (!is_null($commission_percent_gross) && !is_string($commission_percent_gross)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commission_percent_gross, true), gettype($commission_percent_gross)), __LINE__);
        }
        $this->commission_percent_gross = $commission_percent_gross;
        return $this;
    }
    /**
     * Get pvp_not_commissionable value
     * @return string|null
     */
    public function getPvp_not_commissionable()
    {
        return $this->pvp_not_commissionable;
    }
    /**
     * Set pvp_not_commissionable value
     * @param string $pvp_not_commissionable
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setPvp_not_commissionable($pvp_not_commissionable = null)
    {
        // validation for constraint: string
        if (!is_null($pvp_not_commissionable) && !is_string($pvp_not_commissionable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pvp_not_commissionable, true), gettype($pvp_not_commissionable)), __LINE__);
        }
        $this->pvp_not_commissionable = $pvp_not_commissionable;
        return $this;
    }
    /**
     * Get rates value
     * @return string|null
     */
    public function getRates()
    {
        return $this->rates;
    }
    /**
     * Set rates value
     * @param string $rates
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setRates($rates = null)
    {
        // validation for constraint: string
        if (!is_null($rates) && !is_string($rates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rates, true), gettype($rates)), __LINE__);
        }
        $this->rates = $rates;
        return $this;
    }
    /**
     * Get fees value
     * @return string|null
     */
    public function getFees()
    {
        return $this->fees;
    }
    /**
     * Set fees value
     * @param string $fees
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setFees($fees = null)
    {
        // validation for constraint: string
        if (!is_null($fees) && !is_string($fees)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fees, true), gettype($fees)), __LINE__);
        }
        $this->fees = $fees;
        return $this;
    }
    /**
     * Get pvp_total_agency value
     * @return string|null
     */
    public function getPvp_total_agency()
    {
        return $this->pvp_total_agency;
    }
    /**
     * Set pvp_total_agency value
     * @param string $pvp_total_agency
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setPvp_total_agency($pvp_total_agency = null)
    {
        // validation for constraint: string
        if (!is_null($pvp_total_agency) && !is_string($pvp_total_agency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pvp_total_agency, true), gettype($pvp_total_agency)), __LINE__);
        }
        $this->pvp_total_agency = $pvp_total_agency;
        return $this;
    }
    /**
     * Get total_hf value
     * @return string|null
     */
    public function getTotal_hf()
    {
        return $this->total_hf;
    }
    /**
     * Set total_hf value
     * @param string $total_hf
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setTotal_hf($total_hf = null)
    {
        // validation for constraint: string
        if (!is_null($total_hf) && !is_string($total_hf)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($total_hf, true), gettype($total_hf)), __LINE__);
        }
        $this->total_hf = $total_hf;
        return $this;
    }
    /**
     * Get pvp_total_client value
     * @return string|null
     */
    public function getPvp_total_client()
    {
        return $this->pvp_total_client;
    }
    /**
     * Set pvp_total_client value
     * @param string $pvp_total_client
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setPvp_total_client($pvp_total_client = null)
    {
        // validation for constraint: string
        if (!is_null($pvp_total_client) && !is_string($pvp_total_client)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pvp_total_client, true), gettype($pvp_total_client)), __LINE__);
        }
        $this->pvp_total_client = $pvp_total_client;
        return $this;
    }
    /**
     * Get services value
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO[]|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * This method is responsible for validating the values passed to the setServices method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServices method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServicesForArrayConstraintsFromSetServices(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bD_VoucherWSDOServicesItem) {
            // validation for constraint: itemType
            if (!$bD_VoucherWSDOServicesItem instanceof \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO) {
                $invalidValues[] = is_object($bD_VoucherWSDOServicesItem) ? get_class($bD_VoucherWSDOServicesItem) : sprintf('%s(%s)', gettype($bD_VoucherWSDOServicesItem), var_export($bD_VoucherWSDOServicesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The services property can only contain items of type \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set services value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO[] $services
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function setServices(array $services = array())
    {
        // validation for constraint: array
        if ('' !== ($servicesArrayErrorMessage = self::validateServicesForArrayConstraintsFromSetServices($services))) {
            throw new \InvalidArgumentException($servicesArrayErrorMessage, __LINE__);
        }
        $this->services = $services;
        return $this;
    }
    /**
     * Add item to services value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
     */
    public function addToServices(\Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO) {
            throw new \InvalidArgumentException(sprintf('The services property can only contain items of type \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->services[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\BD_VoucherWSDO
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
