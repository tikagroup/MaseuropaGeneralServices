<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentSaleWSDO StructType
 * @subpackage Structs
 */
class DocumentSaleWSDO extends AbstractStructBase
{
    /**
     * The sequence_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sequence_number;
    /**
     * The document_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $document_number;
    /**
     * The document_status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $document_status;
    /**
     * The total_fare_amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $total_fare_amount;
    /**
     * The total_taxes_amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $total_taxes_amount;
    /**
     * The commission_amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $commission_amount;
    /**
     * The total_carrier_fees
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $total_carrier_fees;
    /**
     * The ticket_document_amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ticket_document_amount;
    /**
     * The transaction_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $transaction_code;
    /**
     * The formOfPayment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $formOfPayment;
    /**
     * The pax_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pax_name;
    /**
     * The locator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $locator;
    /**
     * Constructor method for DocumentSaleWSDO
     * @uses DocumentSaleWSDO::setSequence_number()
     * @uses DocumentSaleWSDO::setDocument_number()
     * @uses DocumentSaleWSDO::setDocument_status()
     * @uses DocumentSaleWSDO::setTotal_fare_amount()
     * @uses DocumentSaleWSDO::setTotal_taxes_amount()
     * @uses DocumentSaleWSDO::setCommission_amount()
     * @uses DocumentSaleWSDO::setTotal_carrier_fees()
     * @uses DocumentSaleWSDO::setTicket_document_amount()
     * @uses DocumentSaleWSDO::setTransaction_code()
     * @uses DocumentSaleWSDO::setFormOfPayment()
     * @uses DocumentSaleWSDO::setPax_name()
     * @uses DocumentSaleWSDO::setLocator()
     * @param string $sequence_number
     * @param string $document_number
     * @param string $document_status
     * @param string $total_fare_amount
     * @param string $total_taxes_amount
     * @param string $commission_amount
     * @param string $total_carrier_fees
     * @param string $ticket_document_amount
     * @param string $transaction_code
     * @param string $formOfPayment
     * @param string $pax_name
     * @param string $locator
     */
    public function __construct($sequence_number = null, $document_number = null, $document_status = null, $total_fare_amount = null, $total_taxes_amount = null, $commission_amount = null, $total_carrier_fees = null, $ticket_document_amount = null, $transaction_code = null, $formOfPayment = null, $pax_name = null, $locator = null)
    {
        $this
            ->setSequence_number($sequence_number)
            ->setDocument_number($document_number)
            ->setDocument_status($document_status)
            ->setTotal_fare_amount($total_fare_amount)
            ->setTotal_taxes_amount($total_taxes_amount)
            ->setCommission_amount($commission_amount)
            ->setTotal_carrier_fees($total_carrier_fees)
            ->setTicket_document_amount($ticket_document_amount)
            ->setTransaction_code($transaction_code)
            ->setFormOfPayment($formOfPayment)
            ->setPax_name($pax_name)
            ->setLocator($locator);
    }
    /**
     * Get sequence_number value
     * @return string|null
     */
    public function getSequence_number()
    {
        return $this->sequence_number;
    }
    /**
     * Set sequence_number value
     * @param string $sequence_number
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
     */
    public function setSequence_number($sequence_number = null)
    {
        // validation for constraint: string
        if (!is_null($sequence_number) && !is_string($sequence_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequence_number, true), gettype($sequence_number)), __LINE__);
        }
        $this->sequence_number = $sequence_number;
        return $this;
    }
    /**
     * Get document_number value
     * @return string|null
     */
    public function getDocument_number()
    {
        return $this->document_number;
    }
    /**
     * Set document_number value
     * @param string $document_number
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
     */
    public function setDocument_number($document_number = null)
    {
        // validation for constraint: string
        if (!is_null($document_number) && !is_string($document_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($document_number, true), gettype($document_number)), __LINE__);
        }
        $this->document_number = $document_number;
        return $this;
    }
    /**
     * Get document_status value
     * @return string|null
     */
    public function getDocument_status()
    {
        return $this->document_status;
    }
    /**
     * Set document_status value
     * @param string $document_status
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
     */
    public function setDocument_status($document_status = null)
    {
        // validation for constraint: string
        if (!is_null($document_status) && !is_string($document_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($document_status, true), gettype($document_status)), __LINE__);
        }
        $this->document_status = $document_status;
        return $this;
    }
    /**
     * Get total_fare_amount value
     * @return string|null
     */
    public function getTotal_fare_amount()
    {
        return $this->total_fare_amount;
    }
    /**
     * Set total_fare_amount value
     * @param string $total_fare_amount
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
     */
    public function setTotal_fare_amount($total_fare_amount = null)
    {
        // validation for constraint: string
        if (!is_null($total_fare_amount) && !is_string($total_fare_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($total_fare_amount, true), gettype($total_fare_amount)), __LINE__);
        }
        $this->total_fare_amount = $total_fare_amount;
        return $this;
    }
    /**
     * Get total_taxes_amount value
     * @return string|null
     */
    public function getTotal_taxes_amount()
    {
        return $this->total_taxes_amount;
    }
    /**
     * Set total_taxes_amount value
     * @param string $total_taxes_amount
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
     */
    public function setTotal_taxes_amount($total_taxes_amount = null)
    {
        // validation for constraint: string
        if (!is_null($total_taxes_amount) && !is_string($total_taxes_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($total_taxes_amount, true), gettype($total_taxes_amount)), __LINE__);
        }
        $this->total_taxes_amount = $total_taxes_amount;
        return $this;
    }
    /**
     * Get commission_amount value
     * @return string|null
     */
    public function getCommission_amount()
    {
        return $this->commission_amount;
    }
    /**
     * Set commission_amount value
     * @param string $commission_amount
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
     */
    public function setCommission_amount($commission_amount = null)
    {
        // validation for constraint: string
        if (!is_null($commission_amount) && !is_string($commission_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commission_amount, true), gettype($commission_amount)), __LINE__);
        }
        $this->commission_amount = $commission_amount;
        return $this;
    }
    /**
     * Get total_carrier_fees value
     * @return string|null
     */
    public function getTotal_carrier_fees()
    {
        return $this->total_carrier_fees;
    }
    /**
     * Set total_carrier_fees value
     * @param string $total_carrier_fees
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
     */
    public function setTotal_carrier_fees($total_carrier_fees = null)
    {
        // validation for constraint: string
        if (!is_null($total_carrier_fees) && !is_string($total_carrier_fees)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($total_carrier_fees, true), gettype($total_carrier_fees)), __LINE__);
        }
        $this->total_carrier_fees = $total_carrier_fees;
        return $this;
    }
    /**
     * Get ticket_document_amount value
     * @return string|null
     */
    public function getTicket_document_amount()
    {
        return $this->ticket_document_amount;
    }
    /**
     * Set ticket_document_amount value
     * @param string $ticket_document_amount
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
     */
    public function setTicket_document_amount($ticket_document_amount = null)
    {
        // validation for constraint: string
        if (!is_null($ticket_document_amount) && !is_string($ticket_document_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticket_document_amount, true), gettype($ticket_document_amount)), __LINE__);
        }
        $this->ticket_document_amount = $ticket_document_amount;
        return $this;
    }
    /**
     * Get transaction_code value
     * @return string|null
     */
    public function getTransaction_code()
    {
        return $this->transaction_code;
    }
    /**
     * Set transaction_code value
     * @param string $transaction_code
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
     */
    public function setTransaction_code($transaction_code = null)
    {
        // validation for constraint: string
        if (!is_null($transaction_code) && !is_string($transaction_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction_code, true), gettype($transaction_code)), __LINE__);
        }
        $this->transaction_code = $transaction_code;
        return $this;
    }
    /**
     * Get formOfPayment value
     * @return string|null
     */
    public function getFormOfPayment()
    {
        return $this->formOfPayment;
    }
    /**
     * Set formOfPayment value
     * @param string $formOfPayment
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
     */
    public function setFormOfPayment($formOfPayment = null)
    {
        // validation for constraint: string
        if (!is_null($formOfPayment) && !is_string($formOfPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formOfPayment, true), gettype($formOfPayment)), __LINE__);
        }
        $this->formOfPayment = $formOfPayment;
        return $this;
    }
    /**
     * Get pax_name value
     * @return string|null
     */
    public function getPax_name()
    {
        return $this->pax_name;
    }
    /**
     * Set pax_name value
     * @param string $pax_name
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
     */
    public function setPax_name($pax_name = null)
    {
        // validation for constraint: string
        if (!is_null($pax_name) && !is_string($pax_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pax_name, true), gettype($pax_name)), __LINE__);
        }
        $this->pax_name = $pax_name;
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
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\DocumentSaleWSDO
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
