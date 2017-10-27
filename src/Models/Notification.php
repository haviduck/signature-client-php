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
class Notification implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var SignRequest|null $signRequest public property
     */
    public $signRequest;

    /**
     * @todo Write general description for this property
     * @var Receipt|null $receipt public property
     */
    public $receipt;

    /**
     * @todo Write general description for this property
     * @var Reminder|null $reminder public property
     */
    public $reminder;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param SignRequest $signRequest Initialization value for $this->signRequest
     * @param Receipt     $receipt     Initialization value for $this->receipt
     * @param Reminder    $reminder    Initialization value for $this->reminder
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->signRequest = func_get_arg(0);
            $this->receipt     = func_get_arg(1);
            $this->reminder    = func_get_arg(2);
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
        $json['signRequest'] = $this->signRequest;
        $json['receipt']     = $this->receipt;
        $json['reminder']    = $this->reminder;

        return array_merge($json, $this->additionalProperties);
    }
}
