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
class Email implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $language public property
     */
    public $language;

    /**
     * @todo Write general description for this property
     * @var string|null $subject public property
     */
    public $subject;

    /**
     * @todo Write general description for this property
     * @var string|null $body public property
     */
    public $body;

    /**
     * @todo Write general description for this property
     * @var string|null $senderName public property
     */
    public $senderName;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $language   Initialization value for $this->language
     * @param string $subject    Initialization value for $this->subject
     * @param string $body       Initialization value for $this->body
     * @param string $senderName Initialization value for $this->senderName
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->language   = func_get_arg(0);
            $this->subject    = func_get_arg(1);
            $this->body       = func_get_arg(2);
            $this->senderName = func_get_arg(3);
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
        $json['language']   = $this->language;
        $json['subject']    = $this->subject;
        $json['body']       = $this->body;
        $json['senderName'] = $this->senderName;

        return array_merge($json, $this->additionalProperties);
    }
}
