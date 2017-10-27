<?php
/*
 * IdfySignature
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfySignatureLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class ExtraInfo implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $addon public property
     */
    public $addon;

    /**
     * @todo Write general description for this property
     * @var array|null $specialProperties public property
     */
    public $specialProperties;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $addon             Initialization value for $this->addon
     * @param array  $specialProperties Initialization value for $this->specialProperties
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->addon             = func_get_arg(0);
            $this->specialProperties = func_get_arg(1);
        }
    }

    
    /**
     * Add an additional property to this model.
     * @param string $name  Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty($name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['addon']             = $this->addon;
        $json['specialProperties'] = $this->specialProperties;

        return array_merge($json, $this->additionalProperties);
    }
}
