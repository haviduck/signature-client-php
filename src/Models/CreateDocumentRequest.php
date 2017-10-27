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
class CreateDocumentRequest implements JsonSerializable
{
    /**
     * Signers list
     * @required
     * @var Signer[] $signers public property
     */
    public $signers;

    /**
     * Signjob title
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * Signjob description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Your reference to this signjob
     * @required
     * @var string $externalId public property
     */
    public $externalId;

    /**
     * Data that should be signed
     * @required
     * @var DataToSign $dataToSign public property
     */
    public $dataToSign;

    /**
     * The companys contact information
     * @required
     * @var ContactDetails $contactDetails public property
     */
    public $contactDetails;

    /**
     * For advanced users
     * @var Advanced|null $advanced public property
     */
    public $advanced;

    /**
     * Manage notifications
     * @var Notification|null $notification public property
     */
    public $notification;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param array          $signers        Initialization value for $this->signers
     * @param string         $title          Initialization value for $this->title
     * @param string         $description    Initialization value for $this->description
     * @param string         $externalId     Initialization value for $this->externalId
     * @param DataToSign     $dataToSign     Initialization value for $this->dataToSign
     * @param ContactDetails $contactDetails Initialization value for $this->contactDetails
     * @param Advanced       $advanced       Initialization value for $this->advanced
     * @param Notification   $notification   Initialization value for $this->notification
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->signers        = func_get_arg(0);
            $this->title          = func_get_arg(1);
            $this->description    = func_get_arg(2);
            $this->externalId     = func_get_arg(3);
            $this->dataToSign     = func_get_arg(4);
            $this->contactDetails = func_get_arg(5);
            $this->advanced       = func_get_arg(6);
            $this->notification   = func_get_arg(7);
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
        $json['signers']        = $this->signers;
        $json['title']          = $this->title;
        $json['description']    = $this->description;
        $json['externalId']     = $this->externalId;
        $json['dataToSign']     = $this->dataToSign;
        $json['contactDetails'] = $this->contactDetails;
        $json['advanced']       = $this->advanced;
        $json['notification']   = $this->notification;

        return array_merge($json, $this->additionalProperties);
    }
}
