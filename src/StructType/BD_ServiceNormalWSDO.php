<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BD_ServiceNormalWSDO StructType
 * @subpackage Structs
 */
class BD_ServiceNormalWSDO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The begin_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $begin_date;
    /**
     * The end_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $end_date;
    /**
     * The external_locator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $external_locator;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The board
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $board;
    /**
     * The supplier_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_name;
    /**
     * The supplier_country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_country;
    /**
     * The supplier_zone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_zone;
    /**
     * The supplier_province
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_province;
    /**
     * The supplier_city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_city;
    /**
     * The supplier_address
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_address;
    /**
     * The supplier_phone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_phone;
    /**
     * The paxes
     * Meta information extracted from the WSDL
     * - arrayType: tns:BD_PaxWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\BD_PaxWSDO[]
     */
    public $paxes;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $price;
    /**
     * The comision
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comision;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currency;
    /**
     * The supplier_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $supplier_id;
    /**
     * The article_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_type_id;
    /**
     * The notes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $notes;
    /**
     * The observations
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $observations;
    /**
     * The suplements
     * Meta information extracted from the WSDL
     * - arrayType: tns:BD_SuplementWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\BD_SuplementWSDO[]
     */
    public $suplements;
    /**
     * The offers
     * Meta information extracted from the WSDL
     * - arrayType: tns:BD_OfferWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\BD_OfferWSDO[]
     */
    public $offers;
    /**
     * The num_adults
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $num_adults;
    /**
     * The num_children
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $num_children;
    /**
     * The age
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $age;
    /**
     * Constructor method for BD_ServiceNormalWSDO
     * @uses BD_ServiceNormalWSDO::setId()
     * @uses BD_ServiceNormalWSDO::setStatus()
     * @uses BD_ServiceNormalWSDO::setBegin_date()
     * @uses BD_ServiceNormalWSDO::setEnd_date()
     * @uses BD_ServiceNormalWSDO::setExternal_locator()
     * @uses BD_ServiceNormalWSDO::setDescription()
     * @uses BD_ServiceNormalWSDO::setBoard()
     * @uses BD_ServiceNormalWSDO::setSupplier_name()
     * @uses BD_ServiceNormalWSDO::setSupplier_country()
     * @uses BD_ServiceNormalWSDO::setSupplier_zone()
     * @uses BD_ServiceNormalWSDO::setSupplier_province()
     * @uses BD_ServiceNormalWSDO::setSupplier_city()
     * @uses BD_ServiceNormalWSDO::setSupplier_address()
     * @uses BD_ServiceNormalWSDO::setSupplier_phone()
     * @uses BD_ServiceNormalWSDO::setPaxes()
     * @uses BD_ServiceNormalWSDO::setPrice()
     * @uses BD_ServiceNormalWSDO::setComision()
     * @uses BD_ServiceNormalWSDO::setCurrency()
     * @uses BD_ServiceNormalWSDO::setSupplier_id()
     * @uses BD_ServiceNormalWSDO::setArticle_type_id()
     * @uses BD_ServiceNormalWSDO::setNotes()
     * @uses BD_ServiceNormalWSDO::setObservations()
     * @uses BD_ServiceNormalWSDO::setSuplements()
     * @uses BD_ServiceNormalWSDO::setOffers()
     * @uses BD_ServiceNormalWSDO::setNum_adults()
     * @uses BD_ServiceNormalWSDO::setNum_children()
     * @uses BD_ServiceNormalWSDO::setAge()
     * @param int $id
     * @param string $status
     * @param string $begin_date
     * @param string $end_date
     * @param string $external_locator
     * @param string $description
     * @param string $board
     * @param string $supplier_name
     * @param string $supplier_country
     * @param string $supplier_zone
     * @param string $supplier_province
     * @param string $supplier_city
     * @param string $supplier_address
     * @param string $supplier_phone
     * @param \Maseuropa\GeneralServices\StructType\BD_PaxWSDO[] $paxes
     * @param string $price
     * @param string $comision
     * @param string $currency
     * @param int $supplier_id
     * @param int $article_type_id
     * @param string $notes
     * @param string $observations
     * @param \Maseuropa\GeneralServices\StructType\BD_SuplementWSDO[] $suplements
     * @param \Maseuropa\GeneralServices\StructType\BD_OfferWSDO[] $offers
     * @param int $num_adults
     * @param int $num_children
     * @param string $age
     */
    public function __construct($id = null, $status = null, $begin_date = null, $end_date = null, $external_locator = null, $description = null, $board = null, $supplier_name = null, $supplier_country = null, $supplier_zone = null, $supplier_province = null, $supplier_city = null, $supplier_address = null, $supplier_phone = null, array $paxes = array(), $price = null, $comision = null, $currency = null, $supplier_id = null, $article_type_id = null, $notes = null, $observations = null, array $suplements = array(), array $offers = array(), $num_adults = null, $num_children = null, $age = null)
    {
        $this
            ->setId($id)
            ->setStatus($status)
            ->setBegin_date($begin_date)
            ->setEnd_date($end_date)
            ->setExternal_locator($external_locator)
            ->setDescription($description)
            ->setBoard($board)
            ->setSupplier_name($supplier_name)
            ->setSupplier_country($supplier_country)
            ->setSupplier_zone($supplier_zone)
            ->setSupplier_province($supplier_province)
            ->setSupplier_city($supplier_city)
            ->setSupplier_address($supplier_address)
            ->setSupplier_phone($supplier_phone)
            ->setPaxes($paxes)
            ->setPrice($price)
            ->setComision($comision)
            ->setCurrency($currency)
            ->setSupplier_id($supplier_id)
            ->setArticle_type_id($article_type_id)
            ->setNotes($notes)
            ->setObservations($observations)
            ->setSuplements($suplements)
            ->setOffers($offers)
            ->setNum_adults($num_adults)
            ->setNum_children($num_children)
            ->setAge($age);
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
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
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
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
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
     * Get begin_date value
     * @return string|null
     */
    public function getBegin_date()
    {
        return $this->begin_date;
    }
    /**
     * Set begin_date value
     * @param string $begin_date
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setBegin_date($begin_date = null)
    {
        // validation for constraint: string
        if (!is_null($begin_date) && !is_string($begin_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($begin_date, true), gettype($begin_date)), __LINE__);
        }
        $this->begin_date = $begin_date;
        return $this;
    }
    /**
     * Get end_date value
     * @return string|null
     */
    public function getEnd_date()
    {
        return $this->end_date;
    }
    /**
     * Set end_date value
     * @param string $end_date
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setEnd_date($end_date = null)
    {
        // validation for constraint: string
        if (!is_null($end_date) && !is_string($end_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_date, true), gettype($end_date)), __LINE__);
        }
        $this->end_date = $end_date;
        return $this;
    }
    /**
     * Get external_locator value
     * @return string|null
     */
    public function getExternal_locator()
    {
        return $this->external_locator;
    }
    /**
     * Set external_locator value
     * @param string $external_locator
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setExternal_locator($external_locator = null)
    {
        // validation for constraint: string
        if (!is_null($external_locator) && !is_string($external_locator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($external_locator, true), gettype($external_locator)), __LINE__);
        }
        $this->external_locator = $external_locator;
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
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
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
     * Get board value
     * @return string|null
     */
    public function getBoard()
    {
        return $this->board;
    }
    /**
     * Set board value
     * @param string $board
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setBoard($board = null)
    {
        // validation for constraint: string
        if (!is_null($board) && !is_string($board)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($board, true), gettype($board)), __LINE__);
        }
        $this->board = $board;
        return $this;
    }
    /**
     * Get supplier_name value
     * @return string|null
     */
    public function getSupplier_name()
    {
        return $this->supplier_name;
    }
    /**
     * Set supplier_name value
     * @param string $supplier_name
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setSupplier_name($supplier_name = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_name) && !is_string($supplier_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_name, true), gettype($supplier_name)), __LINE__);
        }
        $this->supplier_name = $supplier_name;
        return $this;
    }
    /**
     * Get supplier_country value
     * @return string|null
     */
    public function getSupplier_country()
    {
        return $this->supplier_country;
    }
    /**
     * Set supplier_country value
     * @param string $supplier_country
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setSupplier_country($supplier_country = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_country) && !is_string($supplier_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_country, true), gettype($supplier_country)), __LINE__);
        }
        $this->supplier_country = $supplier_country;
        return $this;
    }
    /**
     * Get supplier_zone value
     * @return string|null
     */
    public function getSupplier_zone()
    {
        return $this->supplier_zone;
    }
    /**
     * Set supplier_zone value
     * @param string $supplier_zone
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setSupplier_zone($supplier_zone = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_zone) && !is_string($supplier_zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_zone, true), gettype($supplier_zone)), __LINE__);
        }
        $this->supplier_zone = $supplier_zone;
        return $this;
    }
    /**
     * Get supplier_province value
     * @return string|null
     */
    public function getSupplier_province()
    {
        return $this->supplier_province;
    }
    /**
     * Set supplier_province value
     * @param string $supplier_province
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setSupplier_province($supplier_province = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_province) && !is_string($supplier_province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_province, true), gettype($supplier_province)), __LINE__);
        }
        $this->supplier_province = $supplier_province;
        return $this;
    }
    /**
     * Get supplier_city value
     * @return string|null
     */
    public function getSupplier_city()
    {
        return $this->supplier_city;
    }
    /**
     * Set supplier_city value
     * @param string $supplier_city
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setSupplier_city($supplier_city = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_city) && !is_string($supplier_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_city, true), gettype($supplier_city)), __LINE__);
        }
        $this->supplier_city = $supplier_city;
        return $this;
    }
    /**
     * Get supplier_address value
     * @return string|null
     */
    public function getSupplier_address()
    {
        return $this->supplier_address;
    }
    /**
     * Set supplier_address value
     * @param string $supplier_address
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setSupplier_address($supplier_address = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_address) && !is_string($supplier_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_address, true), gettype($supplier_address)), __LINE__);
        }
        $this->supplier_address = $supplier_address;
        return $this;
    }
    /**
     * Get supplier_phone value
     * @return string|null
     */
    public function getSupplier_phone()
    {
        return $this->supplier_phone;
    }
    /**
     * Set supplier_phone value
     * @param string $supplier_phone
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setSupplier_phone($supplier_phone = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_phone) && !is_string($supplier_phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_phone, true), gettype($supplier_phone)), __LINE__);
        }
        $this->supplier_phone = $supplier_phone;
        return $this;
    }
    /**
     * Get paxes value
     * @return \Maseuropa\GeneralServices\StructType\BD_PaxWSDO[]|null
     */
    public function getPaxes()
    {
        return $this->paxes;
    }
    /**
     * This method is responsible for validating the values passed to the setPaxes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaxes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaxesForArrayConstraintsFromSetPaxes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bD_ServiceNormalWSDOPaxesItem) {
            // validation for constraint: itemType
            if (!$bD_ServiceNormalWSDOPaxesItem instanceof \Maseuropa\GeneralServices\StructType\BD_PaxWSDO) {
                $invalidValues[] = is_object($bD_ServiceNormalWSDOPaxesItem) ? get_class($bD_ServiceNormalWSDOPaxesItem) : sprintf('%s(%s)', gettype($bD_ServiceNormalWSDOPaxesItem), var_export($bD_ServiceNormalWSDOPaxesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The paxes property can only contain items of type \Maseuropa\GeneralServices\StructType\BD_PaxWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set paxes value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\BD_PaxWSDO[] $paxes
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setPaxes(array $paxes = array())
    {
        // validation for constraint: array
        if ('' !== ($paxesArrayErrorMessage = self::validatePaxesForArrayConstraintsFromSetPaxes($paxes))) {
            throw new \InvalidArgumentException($paxesArrayErrorMessage, __LINE__);
        }
        $this->paxes = $paxes;
        return $this;
    }
    /**
     * Add item to paxes value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\BD_PaxWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function addToPaxes(\Maseuropa\GeneralServices\StructType\BD_PaxWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\BD_PaxWSDO) {
            throw new \InvalidArgumentException(sprintf('The paxes property can only contain items of type \Maseuropa\GeneralServices\StructType\BD_PaxWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->paxes[] = $item;
        return $this;
    }
    /**
     * Get price value
     * @return string|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param string $price
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setPrice($price = null)
    {
        // validation for constraint: string
        if (!is_null($price) && !is_string($price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        return $this;
    }
    /**
     * Get comision value
     * @return string|null
     */
    public function getComision()
    {
        return $this->comision;
    }
    /**
     * Set comision value
     * @param string $comision
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setComision($comision = null)
    {
        // validation for constraint: string
        if (!is_null($comision) && !is_string($comision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comision, true), gettype($comision)), __LINE__);
        }
        $this->comision = $comision;
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        return $this;
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
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
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
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
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
     * Get notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->notes;
    }
    /**
     * Set notes value
     * @param string $notes
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        $this->notes = $notes;
        return $this;
    }
    /**
     * Get observations value
     * @return string|null
     */
    public function getObservations()
    {
        return $this->observations;
    }
    /**
     * Set observations value
     * @param string $observations
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setObservations($observations = null)
    {
        // validation for constraint: string
        if (!is_null($observations) && !is_string($observations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observations, true), gettype($observations)), __LINE__);
        }
        $this->observations = $observations;
        return $this;
    }
    /**
     * Get suplements value
     * @return \Maseuropa\GeneralServices\StructType\BD_SuplementWSDO[]|null
     */
    public function getSuplements()
    {
        return $this->suplements;
    }
    /**
     * This method is responsible for validating the values passed to the setSuplements method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuplements method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuplementsForArrayConstraintsFromSetSuplements(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bD_ServiceNormalWSDOSuplementsItem) {
            // validation for constraint: itemType
            if (!$bD_ServiceNormalWSDOSuplementsItem instanceof \Maseuropa\GeneralServices\StructType\BD_SuplementWSDO) {
                $invalidValues[] = is_object($bD_ServiceNormalWSDOSuplementsItem) ? get_class($bD_ServiceNormalWSDOSuplementsItem) : sprintf('%s(%s)', gettype($bD_ServiceNormalWSDOSuplementsItem), var_export($bD_ServiceNormalWSDOSuplementsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The suplements property can only contain items of type \Maseuropa\GeneralServices\StructType\BD_SuplementWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set suplements value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\BD_SuplementWSDO[] $suplements
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setSuplements(array $suplements = array())
    {
        // validation for constraint: array
        if ('' !== ($suplementsArrayErrorMessage = self::validateSuplementsForArrayConstraintsFromSetSuplements($suplements))) {
            throw new \InvalidArgumentException($suplementsArrayErrorMessage, __LINE__);
        }
        $this->suplements = $suplements;
        return $this;
    }
    /**
     * Add item to suplements value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\BD_SuplementWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function addToSuplements(\Maseuropa\GeneralServices\StructType\BD_SuplementWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\BD_SuplementWSDO) {
            throw new \InvalidArgumentException(sprintf('The suplements property can only contain items of type \Maseuropa\GeneralServices\StructType\BD_SuplementWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->suplements[] = $item;
        return $this;
    }
    /**
     * Get offers value
     * @return \Maseuropa\GeneralServices\StructType\BD_OfferWSDO[]|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    /**
     * This method is responsible for validating the values passed to the setOffers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOffers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOffersForArrayConstraintsFromSetOffers(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bD_ServiceNormalWSDOOffersItem) {
            // validation for constraint: itemType
            if (!$bD_ServiceNormalWSDOOffersItem instanceof \Maseuropa\GeneralServices\StructType\BD_OfferWSDO) {
                $invalidValues[] = is_object($bD_ServiceNormalWSDOOffersItem) ? get_class($bD_ServiceNormalWSDOOffersItem) : sprintf('%s(%s)', gettype($bD_ServiceNormalWSDOOffersItem), var_export($bD_ServiceNormalWSDOOffersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The offers property can only contain items of type \Maseuropa\GeneralServices\StructType\BD_OfferWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set offers value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\BD_OfferWSDO[] $offers
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setOffers(array $offers = array())
    {
        // validation for constraint: array
        if ('' !== ($offersArrayErrorMessage = self::validateOffersForArrayConstraintsFromSetOffers($offers))) {
            throw new \InvalidArgumentException($offersArrayErrorMessage, __LINE__);
        }
        $this->offers = $offers;
        return $this;
    }
    /**
     * Add item to offers value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\BD_OfferWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function addToOffers(\Maseuropa\GeneralServices\StructType\BD_OfferWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\BD_OfferWSDO) {
            throw new \InvalidArgumentException(sprintf('The offers property can only contain items of type \Maseuropa\GeneralServices\StructType\BD_OfferWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->offers[] = $item;
        return $this;
    }
    /**
     * Get num_adults value
     * @return int|null
     */
    public function getNum_adults()
    {
        return $this->num_adults;
    }
    /**
     * Set num_adults value
     * @param int $num_adults
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setNum_adults($num_adults = null)
    {
        // validation for constraint: int
        if (!is_null($num_adults) && !(is_int($num_adults) || ctype_digit($num_adults))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_adults, true), gettype($num_adults)), __LINE__);
        }
        $this->num_adults = $num_adults;
        return $this;
    }
    /**
     * Get num_children value
     * @return int|null
     */
    public function getNum_children()
    {
        return $this->num_children;
    }
    /**
     * Set num_children value
     * @param int $num_children
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setNum_children($num_children = null)
    {
        // validation for constraint: int
        if (!is_null($num_children) && !(is_int($num_children) || ctype_digit($num_children))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_children, true), gettype($num_children)), __LINE__);
        }
        $this->num_children = $num_children;
        return $this;
    }
    /**
     * Get age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->age;
    }
    /**
     * Set age value
     * @param string $age
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
     */
    public function setAge($age = null)
    {
        // validation for constraint: string
        if (!is_null($age) && !is_string($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        $this->age = $age;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\BD_ServiceNormalWSDO
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
