<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalBookingCancelTicketNumberWSDO StructType
 * @subpackage Structs
 */
class ExternalBookingCancelTicketNumberWSDO extends AbstractStructBase
{
    /**
     * The ticket_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ticket_number;
    /**
     * The cancelled_ticket_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $cancelled_ticket_number;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for ExternalBookingCancelTicketNumberWSDO
     * @uses ExternalBookingCancelTicketNumberWSDO::setTicket_number()
     * @uses ExternalBookingCancelTicketNumberWSDO::setCancelled_ticket_number()
     * @uses ExternalBookingCancelTicketNumberWSDO::setError()
     * @param string $ticket_number
     * @param string $cancelled_ticket_number
     * @param string $error
     */
    public function __construct($ticket_number = null, $cancelled_ticket_number = null, $error = null)
    {
        $this
            ->setTicket_number($ticket_number)
            ->setCancelled_ticket_number($cancelled_ticket_number)
            ->setError($error);
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO
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
     * Get cancelled_ticket_number value
     * @return string|null
     */
    public function getCancelled_ticket_number()
    {
        return $this->cancelled_ticket_number;
    }
    /**
     * Set cancelled_ticket_number value
     * @param string $cancelled_ticket_number
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO
     */
    public function setCancelled_ticket_number($cancelled_ticket_number = null)
    {
        // validation for constraint: string
        if (!is_null($cancelled_ticket_number) && !is_string($cancelled_ticket_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelled_ticket_number, true), gettype($cancelled_ticket_number)), __LINE__);
        }
        $this->cancelled_ticket_number = $cancelled_ticket_number;
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO
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
     * @return \Maseuropa\GeneralServices\StructType\ExternalBookingCancelTicketNumberWSDO
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
