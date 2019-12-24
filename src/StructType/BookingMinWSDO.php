<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingMinWSDO StructType
 * @subpackage Structs
 */
class BookingMinWSDO extends AbstractStructBase
{
    /**
     * The booking_reference
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $booking_reference;
    /**
     * The locator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $locator;
    /**
     * The titular
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $titular;
    /**
     * The numAdultos
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $numAdultos;
    /**
     * The numNinyos
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $numNinyos;
    /**
     * The hotel
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hotel;
    /**
     * The tipoHabitacion
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tipoHabitacion;
    /**
     * The fechaEntrada
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fechaEntrada;
    /**
     * The fechaSalida
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fechaSalida;
    /**
     * Constructor method for BookingMinWSDO
     * @uses BookingMinWSDO::setBooking_reference()
     * @uses BookingMinWSDO::setLocator()
     * @uses BookingMinWSDO::setTitular()
     * @uses BookingMinWSDO::setNumAdultos()
     * @uses BookingMinWSDO::setNumNinyos()
     * @uses BookingMinWSDO::setHotel()
     * @uses BookingMinWSDO::setTipoHabitacion()
     * @uses BookingMinWSDO::setFechaEntrada()
     * @uses BookingMinWSDO::setFechaSalida()
     * @param string $booking_reference
     * @param string $locator
     * @param string $titular
     * @param string $numAdultos
     * @param string $numNinyos
     * @param string $hotel
     * @param string $tipoHabitacion
     * @param string $fechaEntrada
     * @param string $fechaSalida
     */
    public function __construct($booking_reference = null, $locator = null, $titular = null, $numAdultos = null, $numNinyos = null, $hotel = null, $tipoHabitacion = null, $fechaEntrada = null, $fechaSalida = null)
    {
        $this
            ->setBooking_reference($booking_reference)
            ->setLocator($locator)
            ->setTitular($titular)
            ->setNumAdultos($numAdultos)
            ->setNumNinyos($numNinyos)
            ->setHotel($hotel)
            ->setTipoHabitacion($tipoHabitacion)
            ->setFechaEntrada($fechaEntrada)
            ->setFechaSalida($fechaSalida);
    }
    /**
     * Get booking_reference value
     * @return string|null
     */
    public function getBooking_reference()
    {
        return $this->booking_reference;
    }
    /**
     * Set booking_reference value
     * @param string $booking_reference
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO
     */
    public function setBooking_reference($booking_reference = null)
    {
        // validation for constraint: string
        if (!is_null($booking_reference) && !is_string($booking_reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($booking_reference, true), gettype($booking_reference)), __LINE__);
        }
        $this->booking_reference = $booking_reference;
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
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO
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
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO
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
     * Get numAdultos value
     * @return string|null
     */
    public function getNumAdultos()
    {
        return $this->numAdultos;
    }
    /**
     * Set numAdultos value
     * @param string $numAdultos
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO
     */
    public function setNumAdultos($numAdultos = null)
    {
        // validation for constraint: string
        if (!is_null($numAdultos) && !is_string($numAdultos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numAdultos, true), gettype($numAdultos)), __LINE__);
        }
        $this->numAdultos = $numAdultos;
        return $this;
    }
    /**
     * Get numNinyos value
     * @return string|null
     */
    public function getNumNinyos()
    {
        return $this->numNinyos;
    }
    /**
     * Set numNinyos value
     * @param string $numNinyos
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO
     */
    public function setNumNinyos($numNinyos = null)
    {
        // validation for constraint: string
        if (!is_null($numNinyos) && !is_string($numNinyos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numNinyos, true), gettype($numNinyos)), __LINE__);
        }
        $this->numNinyos = $numNinyos;
        return $this;
    }
    /**
     * Get hotel value
     * @return string|null
     */
    public function getHotel()
    {
        return $this->hotel;
    }
    /**
     * Set hotel value
     * @param string $hotel
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO
     */
    public function setHotel($hotel = null)
    {
        // validation for constraint: string
        if (!is_null($hotel) && !is_string($hotel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotel, true), gettype($hotel)), __LINE__);
        }
        $this->hotel = $hotel;
        return $this;
    }
    /**
     * Get tipoHabitacion value
     * @return string|null
     */
    public function getTipoHabitacion()
    {
        return $this->tipoHabitacion;
    }
    /**
     * Set tipoHabitacion value
     * @param string $tipoHabitacion
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO
     */
    public function setTipoHabitacion($tipoHabitacion = null)
    {
        // validation for constraint: string
        if (!is_null($tipoHabitacion) && !is_string($tipoHabitacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoHabitacion, true), gettype($tipoHabitacion)), __LINE__);
        }
        $this->tipoHabitacion = $tipoHabitacion;
        return $this;
    }
    /**
     * Get fechaEntrada value
     * @return string|null
     */
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }
    /**
     * Set fechaEntrada value
     * @param string $fechaEntrada
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO
     */
    public function setFechaEntrada($fechaEntrada = null)
    {
        // validation for constraint: string
        if (!is_null($fechaEntrada) && !is_string($fechaEntrada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaEntrada, true), gettype($fechaEntrada)), __LINE__);
        }
        $this->fechaEntrada = $fechaEntrada;
        return $this;
    }
    /**
     * Get fechaSalida value
     * @return string|null
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }
    /**
     * Set fechaSalida value
     * @param string $fechaSalida
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO
     */
    public function setFechaSalida($fechaSalida = null)
    {
        // validation for constraint: string
        if (!is_null($fechaSalida) && !is_string($fechaSalida)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaSalida, true), gettype($fechaSalida)), __LINE__);
        }
        $this->fechaSalida = $fechaSalida;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\BookingMinWSDO
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
