<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReleaseDayWSDO StructType
 * @subpackage Structs
 */
class ReleaseDayWSDO extends AbstractStructBase
{
    /**
     * The fecha_desde
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fecha_desde;
    /**
     * The release
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $release;
    /**
     * The fecha_hasta
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fecha_hasta;
    /**
     * Constructor method for ReleaseDayWSDO
     * @uses ReleaseDayWSDO::setFecha_desde()
     * @uses ReleaseDayWSDO::setRelease()
     * @uses ReleaseDayWSDO::setFecha_hasta()
     * @param string $fecha_desde
     * @param int $release
     * @param string $fecha_hasta
     */
    public function __construct($fecha_desde = null, $release = null, $fecha_hasta = null)
    {
        $this
            ->setFecha_desde($fecha_desde)
            ->setRelease($release)
            ->setFecha_hasta($fecha_hasta);
    }
    /**
     * Get fecha_desde value
     * @return string|null
     */
    public function getFecha_desde()
    {
        return $this->fecha_desde;
    }
    /**
     * Set fecha_desde value
     * @param string $fecha_desde
     * @return \Maseuropa\GeneralServices\StructType\ReleaseDayWSDO
     */
    public function setFecha_desde($fecha_desde = null)
    {
        // validation for constraint: string
        if (!is_null($fecha_desde) && !is_string($fecha_desde)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fecha_desde, true), gettype($fecha_desde)), __LINE__);
        }
        $this->fecha_desde = $fecha_desde;
        return $this;
    }
    /**
     * Get release value
     * @return int|null
     */
    public function getRelease()
    {
        return $this->release;
    }
    /**
     * Set release value
     * @param int $release
     * @return \Maseuropa\GeneralServices\StructType\ReleaseDayWSDO
     */
    public function setRelease($release = null)
    {
        // validation for constraint: int
        if (!is_null($release) && !(is_int($release) || ctype_digit($release))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($release, true), gettype($release)), __LINE__);
        }
        $this->release = $release;
        return $this;
    }
    /**
     * Get fecha_hasta value
     * @return string|null
     */
    public function getFecha_hasta()
    {
        return $this->fecha_hasta;
    }
    /**
     * Set fecha_hasta value
     * @param string $fecha_hasta
     * @return \Maseuropa\GeneralServices\StructType\ReleaseDayWSDO
     */
    public function setFecha_hasta($fecha_hasta = null)
    {
        // validation for constraint: string
        if (!is_null($fecha_hasta) && !is_string($fecha_hasta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fecha_hasta, true), gettype($fecha_hasta)), __LINE__);
        }
        $this->fecha_hasta = $fecha_hasta;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\ReleaseDayWSDO
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
