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
class JwtValidationResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var bool|null $jwtValid public property
     */
    public $jwtValid;

    /**
     * @todo Write general description for this property
     * @var bool|null $expired public property
     */
    public $expired;

    /**
     * @todo Write general description for this property
     * @var JwtPayload|null $jwtPayload public property
     */
    public $jwtPayload;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param bool       $jwtValid   Initialization value for $this->jwtValid
     * @param bool       $expired    Initialization value for $this->expired
     * @param JwtPayload $jwtPayload Initialization value for $this->jwtPayload
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->jwtValid   = func_get_arg(0);
            $this->expired    = func_get_arg(1);
            $this->jwtPayload = func_get_arg(2);
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
        $json['jwtValid']   = $this->jwtValid;
        $json['expired']    = $this->expired;
        $json['jwtPayload'] = $this->jwtPayload;

        return array_merge($json, $this->additionalProperties);
    }
}
