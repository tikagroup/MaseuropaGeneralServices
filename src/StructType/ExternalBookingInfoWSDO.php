<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalBookingInfoWSDO StructType
 * @subpackage Structs
 */
class ExternalBookingInfoWSDO extends AbstractStructBase
{
    /**
     * The traveller
     * Meta information extracted from the WSDL
     * - arrayType: tns:ExternalBookingTravellerWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO[]
     */
    public $traveller;
    /**
     * The flight
     * Meta information extracted from the WSDL
     * - arrayType: tns:ExternalBookingFlightWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO[]
     */
    public $flight;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - arrayType: tns:ExternalBookingRemarkWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\ExternalBookingRemarkWSDO[]
     */
    public $remark;
    /**
     * The ticket_number
     * Meta information extracted from the WSDL
     * - arrayType: tns:ExternalBookingTicketNumberWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO[]
     */
    public $ticket_number;
    /**
     * The tktl
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tktl;
    /**
     * Constructor method for ExternalBookingInfoWSDO
     * @uses ExternalBookingInfoWSDO::setTraveller()
     * @uses ExternalBookingInfoWSDO::setFlight()
     * @uses ExternalBookingInfoWSDO::setRemark()
     * @uses ExternalBookingInfoWSDO::setTicket_number()
     * @uses ExternalBookingInfoWSDO::setTktl()
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO[] $traveller
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO[] $flight
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingRemarkWSDO[] $remark
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO[] $ticket_number
     * @param string $tktl
     */
    public function __construct(array $traveller = array(), array $flight = array(), array $remark = array(), array $ticket_number = array(), $tktl = null)
    {
        $this
            ->setTraveller($traveller)
            ->setFlight($flight)
            ->setRemark($remark)
            ->setTicket_number($ticket_number)
            ->setTktl($tktl);
    }
    /**
     * Get traveller value
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO[]|null
     */
    public function getTraveller()
    {
        return $this->traveller;
    }
    /**
     * This method is responsible for validating the values passed to the setTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTraveller method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravellerForArrayConstraintsFromSetTraveller(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $externalBookingInfoWSDOTravellerItem) {
            // validation for constraint: itemType
            if (!$externalBookingInfoWSDOTravellerItem instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO) {
                $invalidValues[] = is_object($externalBookingInfoWSDOTravellerItem) ? get_class($externalBookingInfoWSDOTravellerItem) : sprintf('%s(%s)', gettype($externalBookingInfoWSDOTravellerItem), var_export($externalBookingInfoWSDOTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The traveller property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set traveller value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO[] $traveller
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO
     */
    public function setTraveller(array $traveller = array())
    {
        // validation for constraint: array
        if ('' !== ($travellerArrayErrorMessage = self::validateTravellerForArrayConstraintsFromSetTraveller($traveller))) {
            throw new \InvalidArgumentException($travellerArrayErrorMessage, __LINE__);
        }
        $this->traveller = $traveller;
        return $this;
    }
    /**
     * Add item to traveller value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO
     */
    public function addToTraveller(\Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO) {
            throw new \InvalidArgumentException(sprintf('The traveller property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingTravellerWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->traveller[] = $item;
        return $this;
    }
    /**
     * Get flight value
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO[]|null
     */
    public function getFlight()
    {
        return $this->flight;
    }
    /**
     * This method is responsible for validating the values passed to the setFlight method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlight method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightForArrayConstraintsFromSetFlight(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $externalBookingInfoWSDOFlightItem) {
            // validation for constraint: itemType
            if (!$externalBookingInfoWSDOFlightItem instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO) {
                $invalidValues[] = is_object($externalBookingInfoWSDOFlightItem) ? get_class($externalBookingInfoWSDOFlightItem) : sprintf('%s(%s)', gettype($externalBookingInfoWSDOFlightItem), var_export($externalBookingInfoWSDOFlightItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The flight property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set flight value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO[] $flight
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO
     */
    public function setFlight(array $flight = array())
    {
        // validation for constraint: array
        if ('' !== ($flightArrayErrorMessage = self::validateFlightForArrayConstraintsFromSetFlight($flight))) {
            throw new \InvalidArgumentException($flightArrayErrorMessage, __LINE__);
        }
        $this->flight = $flight;
        return $this;
    }
    /**
     * Add item to flight value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO
     */
    public function addToFlight(\Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO) {
            throw new \InvalidArgumentException(sprintf('The flight property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingFlightWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->flight[] = $item;
        return $this;
    }
    /**
     * Get remark value
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingRemarkWSDO[]|null
     */
    public function getRemark()
    {
        return $this->remark;
    }
    /**
     * This method is responsible for validating the values passed to the setRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRemarkForArrayConstraintsFromSetRemark(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $externalBookingInfoWSDORemarkItem) {
            // validation for constraint: itemType
            if (!$externalBookingInfoWSDORemarkItem instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingRemarkWSDO) {
                $invalidValues[] = is_object($externalBookingInfoWSDORemarkItem) ? get_class($externalBookingInfoWSDORemarkItem) : sprintf('%s(%s)', gettype($externalBookingInfoWSDORemarkItem), var_export($externalBookingInfoWSDORemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The remark property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingRemarkWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set remark value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingRemarkWSDO[] $remark
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO
     */
    public function setRemark(array $remark = array())
    {
        // validation for constraint: array
        if ('' !== ($remarkArrayErrorMessage = self::validateRemarkForArrayConstraintsFromSetRemark($remark))) {
            throw new \InvalidArgumentException($remarkArrayErrorMessage, __LINE__);
        }
        $this->remark = $remark;
        return $this;
    }
    /**
     * Add item to remark value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingRemarkWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO
     */
    public function addToRemark(\Maseuropa\GeneralServices\StructType\ExternalBookingRemarkWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingRemarkWSDO) {
            throw new \InvalidArgumentException(sprintf('The remark property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingRemarkWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->remark[] = $item;
        return $this;
    }
    /**
     * Get ticket_number value
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO[]|null
     */
    public function getTicket_number()
    {
        return $this->ticket_number;
    }
    /**
     * This method is responsible for validating the values passed to the setTicket_number method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicket_number method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicket_numberForArrayConstraintsFromSetTicket_number(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $externalBookingInfoWSDOTicket_numberItem) {
            // validation for constraint: itemType
            if (!$externalBookingInfoWSDOTicket_numberItem instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO) {
                $invalidValues[] = is_object($externalBookingInfoWSDOTicket_numberItem) ? get_class($externalBookingInfoWSDOTicket_numberItem) : sprintf('%s(%s)', gettype($externalBookingInfoWSDOTicket_numberItem), var_export($externalBookingInfoWSDOTicket_numberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ticket_number property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ticket_number value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO[] $ticket_number
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO
     */
    public function setTicket_number(array $ticket_number = array())
    {
        // validation for constraint: array
        if ('' !== ($ticket_numberArrayErrorMessage = self::validateTicket_numberForArrayConstraintsFromSetTicket_number($ticket_number))) {
            throw new \InvalidArgumentException($ticket_numberArrayErrorMessage, __LINE__);
        }
        $this->ticket_number = $ticket_number;
        return $this;
    }
    /**
     * Add item to ticket_number value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO $item
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO
     */
    public function addToTicket_number(\Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO) {
            throw new \InvalidArgumentException(sprintf('The ticket_number property can only contain items of type \Maseuropa\GeneralServices\StructType\ExternalBookingTicketNumberWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ticket_number[] = $item;
        return $this;
    }
    /**
     * Get tktl value
     * @return string|null
     */
    public function getTktl()
    {
        return $this->tktl;
    }
    /**
     * Set tktl value
     * @param string $tktl
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO
     */
    public function setTktl($tktl = null)
    {
        // validation for constraint: string
        if (!is_null($tktl) && !is_string($tktl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tktl, true), gettype($tktl)), __LINE__);
        }
        $this->tktl = $tktl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingInfoWSDO
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
