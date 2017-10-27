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
class SignRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var bool|null $enabled public property
     */
    public $enabled;

    /**
     * Create your own email messages.
     *
     * <span style="color: red;">Insert [signlink] where you want the sign url to be presented</span>
     * @var Email[]|null $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @var SMS[]|null $sms public property
     */
    public $sms;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param bool  $enabled Initialization value for $this->enabled
     * @param array $email   Initialization value for $this->email
     * @param array $sms     Initialization value for $this->sms
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->enabled = func_get_arg(0);
            $this->email   = func_get_arg(1);
            $this->sms     = func_get_arg(2);
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
        $json['enabled'] = $this->enabled;
        $json['email']   = $this->email;
        $json['sms']     = $this->sms;

        return array_merge($json, $this->additionalProperties);
    }
}
