<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmadeusSalesReportWSDO StructType
 * @subpackage Structs
 */
class AmadeusSalesReportWSDO extends AbstractStructBase
{
    /**
     * The currencyIsoCode
     * @var string
     */
    public $currencyIsoCode;
    /**
     * The documents_sales
     * Meta information extracted from the WSDL
     * - arrayType: tns:DocumentSaleWSDO[]
     * - base: soap-enc:Array
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO[]
     */
    public $documents_sales;
    /**
     * Constructor method for AmadeusSalesReportWSDO
     * @uses AmadeusSalesReportWSDO::setCurrencyIsoCode()
     * @uses AmadeusSalesReportWSDO::setDocuments_sales()
     * @param string $currencyIsoCode
     * @param \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO[] $documents_sales
     */
    public function __construct($currencyIsoCode = null, array $documents_sales = array())
    {
        $this
            ->setCurrencyIsoCode($currencyIsoCode)
            ->setDocuments_sales($documents_sales);
    }
    /**
     * Get currencyIsoCode value
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }
    /**
     * Set currencyIsoCode value
     * @param string $currencyIsoCode
     * @return \Maseuropa\GeneralServices\StructType\AmadeusSalesReportWSDO
     */
    public function setCurrencyIsoCode($currencyIsoCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyIsoCode) && !is_string($currencyIsoCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyIsoCode, true), gettype($currencyIsoCode)), __LINE__);
        }
        $this->currencyIsoCode = $currencyIsoCode;
        return $this;
    }
    /**
     * Get documents_sales value
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO[]|null
     */
    public function getDocuments_sales()
    {
        return $this->documents_sales;
    }
    /**
     * This method is responsible for validating the values passed to the setDocuments_sales method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocuments_sales method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocuments_salesForArrayConstraintsFromSetDocuments_sales(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $amadeusSalesReportWSDODocuments_salesItem) {
            // validation for constraint: itemType
            if (!$amadeusSalesReportWSDODocuments_salesItem instanceof \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO) {
                $invalidValues[] = is_object($amadeusSalesReportWSDODocuments_salesItem) ? get_class($amadeusSalesReportWSDODocuments_salesItem) : sprintf('%s(%s)', gettype($amadeusSalesReportWSDODocuments_salesItem), var_export($amadeusSalesReportWSDODocuments_salesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The documents_sales property can only contain items of type \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set documents_sales value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO[] $documents_sales
     * @return \Maseuropa\GeneralServices\StructType\AmadeusSalesReportWSDO
     */
    public function setDocuments_sales(array $documents_sales = array())
    {
        // validation for constraint: array
        if ('' !== ($documents_salesArrayErrorMessage = self::validateDocuments_salesForArrayConstraintsFromSetDocuments_sales($documents_sales))) {
            throw new \InvalidArgumentException($documents_salesArrayErrorMessage, __LINE__);
        }
        $this->documents_sales = $documents_sales;
        return $this;
    }
    /**
     * Add item to documents_sales value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\AmadeusSalesReportWSDO
     */
    public function addToDocuments_sales(\Maseuropa\GeneralServices\StructType\DocumentSaleWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO) {
            throw new \InvalidArgumentException(sprintf('The documents_sales property can only contain items of type \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->documents_sales[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\AmadeusSalesReportWSDO
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
