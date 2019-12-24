<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalBookingCancelTicketWSDO StructType
 * @subpackage Structs
 */
class ExternalBookingCancelTicketWSDO extends AbstractStructBase
{
    /**
     * The external_locator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $external_locator;
    /**
     * The cancelled_ticket_numbers
     * Meta information extracted from the WSDL
     * - arrayType: tns:ExternalBookingCancelTicketNumberWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO[]
     */
    public $cancelled_ticket_numbers;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for ExternalBookingCancelTicketWSDO
     * @uses ExternalBookingCancelTicketWSDO::setExternal_locator()
     * @uses ExternalBookingCancelTicketWSDO::setCancelled_ticket_numbers()
     * @uses ExternalBookingCancelTicketWSDO::setError()
     * @param string $external_locator
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO[] $cancelled_ticket_numbers
     * @param string $error
     */
    public function __construct($external_locator = null, array $cancelled_ticket_numbers = array(), $error = null)
    {
        $this
            ->setExternal_locator($external_locator)
            ->setCancelled_ticket_numbers($cancelled_ticket_numbers)
            ->setError($error);
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketWSDO
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
     * Get cancelled_ticket_numbers value
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO[]|null
     */
    public function getCancelled_ticket_numbers()
    {
        return $this->cancelled_ticket_numbers;
    }
    /**
     * This method is responsible for validating the values passed to the setCancelled_ticket_numbers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCancelled_ticket_numbers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCancelled_ticket_numbersForArrayConstraintsFromSetCancelled_ticket_numbers(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $externalBookingCancelTicketWSDOCancelled_ticket_numbersItem) {
            // validation for constraint: itemType
            if (!$externalBookingCancelTicketWSDOCancelled_ticket_numbersItem instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO) {
                $invalidValues[] = is_object($externalBookingCancelTicketWSDOCancelled_ticket_numbersItem) ? get_class($externalBookingCancelTicketWSDOCancelled_ticket_numbersItem) : sprintf('%s(%s)', gettype($externalBookingCancelTicketWSDOCancelled_ticket_numbersItem), var_export($externalBookingCancelTicketWSDOCancelled_ticket_numbersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cancelled_ticket_numbers property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set cancelled_ticket_numbers value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO[] $cancelled_ticket_numbers
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketWSDO
     */
    public function setCancelled_ticket_numbers(array $cancelled_ticket_numbers = array())
    {
        // validation for constraint: array
        if ('' !== ($cancelled_ticket_numbersArrayErrorMessage = self::validateCancelled_ticket_numbersForArrayConstraintsFromSetCancelled_ticket_numbers($cancelled_ticket_numbers))) {
            throw new \InvalidArgumentException($cancelled_ticket_numbersArrayErrorMessage, __LINE__);
        }
        $this->cancelled_ticket_numbers = $cancelled_ticket_numbers;
        return $this;
    }
    /**
     * Add item to cancelled_ticket_numbers value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketWSDO
     */
    public function addToCancelled_ticket_numbers(\Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO) {
            throw new \InvalidArgumentException(sprintf('The cancelled_ticket_numbers property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cancelled_ticket_numbers[] = $item;
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketWSDO
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketWSDO
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
