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
class DocumentSummary implements JsonSerializable
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
     * @var integer|null $lastUpdated public property
     */
    public $lastUpdated;

    /**
     * @todo Write general description for this property
     * @var integer|null $deadline public property
     */
    public $deadline;

    /**
     * @todo Write general description for this property
     * @var integer|null $signedDate public property
     */
    public $signedDate;

    /**
     * @todo Write general description for this property
     * @var Status|null $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @var string|null $externalId public property
     */
    public $externalId;

    /**
     * @todo Write general description for this property
     * @var ExtendedDocumentSignature[]|null $documentSignatures public property
     */
    public $documentSignatures;

    /**
     * @todo Write general description for this property
     * @var integer|null $requiredSignatures public property
     */
    public $requiredSignatures;

    /**
     * @todo Write general description for this property
     * @var integer|null $currentSignatures public property
     */
    public $currentSignatures;

    /**
     * @todo Write general description for this property
     * @var string|null $tags public property
     */
    public $tags;

    /**
     * @todo Write general description for this property
     * @var array|null $attachments public property
     */
    public $attachments;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $title              Initialization value for $this->title
     * @param string  $description        Initialization value for $this->description
     * @param integer $lastUpdated        Initialization value for $this->lastUpdated
     * @param integer $deadline           Initialization value for $this->deadline
     * @param integer $signedDate         Initialization value for $this->signedDate
     * @param Status  $status             Initialization value for $this->status
     * @param string  $externalId         Initialization value for $this->externalId
     * @param array   $documentSignatures Initialization value for $this->documentSignatures
     * @param integer $requiredSignatures Initialization value for $this->requiredSignatures
     * @param integer $currentSignatures  Initialization value for $this->currentSignatures
     * @param string  $tags               Initialization value for $this->tags
     * @param array   $attachments        Initialization value for $this->attachments
     */
    public function __construct()
    {
        if (12 == func_num_args()) {
            $this->title              = func_get_arg(0);
            $this->description        = func_get_arg(1);
            $this->lastUpdated        = func_get_arg(2);
            $this->deadline           = func_get_arg(3);
            $this->signedDate         = func_get_arg(4);
            $this->status             = func_get_arg(5);
            $this->externalId         = func_get_arg(6);
            $this->documentSignatures = func_get_arg(7);
            $this->requiredSignatures = func_get_arg(8);
            $this->currentSignatures  = func_get_arg(9);
            $this->tags               = func_get_arg(10);
            $this->attachments        = func_get_arg(11);
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
        $json['title']              = $this->title;
        $json['description']        = $this->description;
        $json['lastUpdated']        = $this->lastUpdated;
        $json['deadline']           = $this->deadline;
        $json['signedDate']         = $this->signedDate;
        $json['status']             = $this->status;
        $json['externalId']         = $this->externalId;
        $json['documentSignatures'] = $this->documentSignatures;
        $json['requiredSignatures'] = $this->requiredSignatures;
        $json['currentSignatures']  = $this->currentSignatures;
        $json['tags']               = $this->tags;
        $json['attachments']        = $this->attachments;

        return array_merge($json, $this->additionalProperties);
    }
}
