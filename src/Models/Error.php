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
class Error implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $errorMessage public property
     */
    public $errorMessage;

    /**
     * @todo Write general description for this property
     * @var string|null $errorCode public property
     */
    public $errorCode;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $errorMessage Initialization value for $this->errorMessage
     * @param string $errorCode    Initialization value for $this->errorCode
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->errorMessage = func_get_arg(0);
            $this->errorCode    = func_get_arg(1);
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
        $json['errorMessage'] = $this->errorMessage;
        $json['errorCode']    = $this->errorCode;

        return array_merge($json, $this->additionalProperties);
    }
}
