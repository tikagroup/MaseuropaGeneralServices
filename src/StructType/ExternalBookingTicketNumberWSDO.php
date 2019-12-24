<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalBookingTicketNumberWSDO StructType
 * @subpackage Structs
 */
class ExternalBookingTicketNumberWSDO extends AbstractStructBase
{
    /**
     * The ticket_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ticket_number;
    /**
     * The reference
     * Meta information extracted from the WSDL
     * - arrayType: tns:ExternalBookingReferenceWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO[]
     */
    public $reference;
    /**
     * Constructor method for ExternalBookingTicketNumberWSDO
     * @uses ExternalBookingTicketNumberWSDO::setTicket_number()
     * @uses ExternalBookingTicketNumberWSDO::setReference()
     * @param string $ticket_number
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO[] $reference
     */
    public function __construct($ticket_number = null, array $reference = array())
    {
        $this
            ->setTicket_number($ticket_number)
            ->setReference($reference);
    }
    /**
     * Get ticket_number value
     * @return string|null
     */
    public function getTicket_number()
    {
        return $this->ticket_number;
    }
    /**
     * Set ticket_number value
     * @param string $ticket_number
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO
     */
    public function setTicket_number($ticket_number = null)
    {
        // validation for constraint: string
        if (!is_null($ticket_number) && !is_string($ticket_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticket_number, true), gettype($ticket_number)), __LINE__);
        }
        $this->ticket_number = $ticket_number;
        return $this;
    }
    /**
     * Get reference value
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO[]|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * This method is responsible for validating the values passed to the setReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReferenceForArrayConstraintsFromSetReference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $externalBookingTicketNumberWSDOReferenceItem) {
            // validation for constraint: itemType
            if (!$externalBookingTicketNumberWSDOReferenceItem instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO) {
                $invalidValues[] = is_object($externalBookingTicketNumberWSDOReferenceItem) ? get_class($externalBookingTicketNumberWSDOReferenceItem) : sprintf('%s(%s)', gettype($externalBookingTicketNumberWSDOReferenceItem), var_export($externalBookingTicketNumberWSDOReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The reference property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set reference value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO[] $reference
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO
     */
    public function setReference(array $reference = array())
    {
        // validation for constraint: array
        if ('' !== ($referenceArrayErrorMessage = self::validateReferenceForArrayConstraintsFromSetReference($reference))) {
            throw new \InvalidArgumentException($referenceArrayErrorMessage, __LINE__);
        }
        $this->reference = $reference;
        return $this;
    }
    /**
     * Add item to reference value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO
     */
    public function addToReference(\Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO) {
            throw new \InvalidArgumentException(sprintf('The reference property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingReferenceWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO
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
