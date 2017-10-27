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
class AttachmentRequest implements JsonSerializable
{
    /**
     * The document Id you retrieved when you created a new signature job
     * @required
     * @var uuid|string $documentId public property
     */
    public $documentId;

    /**
     * Filename with file extension.
     *
     * <span style="color:red;">We only support PDF for attachments</span>
     * @required
     * @var string $fileName public property
     */
    public $fileName;

    /**
     * Give the attachement a title that will be presented to the user
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * base 64 encoded attachement (utf-8)
     * @required
     * @var string $data public property
     */
    public $data;

    /**
     * Optional: Specify which signers that should be able to see / sign this attachment
     * @var array|null $signers public property
     */
    public $signers;

    /**
     * Optional: An optional description of the document
     * @var string|null $description public property
     */
    public $description;

    /**
     * Coming soon: Choose between the following:
     *
     * *
     *
     * <b>show_accept:</b> The signer will see the attachment before signing the main document (is
     * default now)
     *
     * *
     *
     * <b>read_accept:</b> The signer have to see the entire document before they can continue,
     *
     * *
     *
     * <b>sign:</b> The signer has to sign the attachment (extra cost per signature)
     * @var string|null $type public property
     */
    public $type;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param uuid|string $documentId  Initialization value for $this->documentId
     * @param string      $fileName    Initialization value for $this->fileName
     * @param string      $title       Initialization value for $this->title
     * @param string      $data        Initialization value for $this->data
     * @param array       $signers     Initialization value for $this->signers
     * @param string      $description Initialization value for $this->description
     * @param string      $type        Initialization value for $this->type
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->documentId  = func_get_arg(0);
            $this->fileName    = func_get_arg(1);
            $this->title       = func_get_arg(2);
            $this->data        = func_get_arg(3);
            $this->signers     = func_get_arg(4);
            $this->description = func_get_arg(5);
            $this->type        = func_get_arg(6);
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
        $json['documentId']  = $this->documentId;
        $json['fileName']    = $this->fileName;
        $json['title']       = $this->title;
        $json['data']        = $this->data;
        $json['signers']     = $this->signers;
        $json['description'] = $this->description;
        $json['type']        = $this->type;

        return array_merge($json, $this->additionalProperties);
    }
}
