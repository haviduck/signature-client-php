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
class Status implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $documentStatus public property
     */
    public $documentStatus;

    /**
     * @todo Write general description for this property
     * @var array|null $completedPackages public property
     */
    public $completedPackages;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $documentStatus    Initialization value for $this->documentStatus
     * @param array  $completedPackages Initialization value for $this->completedPackages
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->documentStatus    = func_get_arg(0);
            $this->completedPackages = func_get_arg(1);
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
        $json['documentStatus']    = $this->documentStatus;
        $json['completedPackages'] = $this->completedPackages;

        return array_merge($json, $this->additionalProperties);
    }
}
