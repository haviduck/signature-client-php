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
class UpdateDocumentRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @var string|null $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @var Notification|null $notification public property
     */
    public $notification;

    /**
     * @todo Write general description for this property
     * @var ContactDetails|null $contactDetails public property
     */
    public $contactDetails;

    /**
     * @todo Write general description for this property
     * @var Advanced|null $advanced public property
     */
    public $advanced;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string         $title          Initialization value for $this->title
     * @param string         $description    Initialization value for $this->description
     * @param Notification   $notification   Initialization value for $this->notification
     * @param ContactDetails $contactDetails Initialization value for $this->contactDetails
     * @param Advanced       $advanced       Initialization value for $this->advanced
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->title          = func_get_arg(0);
            $this->description    = func_get_arg(1);
            $this->notification   = func_get_arg(2);
            $this->contactDetails = func_get_arg(3);
            $this->advanced       = func_get_arg(4);
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
        $json['title']          = $this->title;
        $json['description']    = $this->description;
        $json['notification']   = $this->notification;
        $json['contactDetails'] = $this->contactDetails;
        $json['advanced']       = $this->advanced;

        return array_merge($json, $this->additionalProperties);
    }
}
