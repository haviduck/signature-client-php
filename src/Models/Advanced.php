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
class Advanced implements JsonSerializable
{
    /**
     * Mark the document with tags, these tags can be used to query for document data / events at a later
     * time. Please separate the tags with comma (ie: "Tags":"awesome,contract")
     * @var string|null $tags public property
     */
    public $tags;

    /**
     * Set how many attachments this signjob should have, when the document is created you can upload the
     * attachments [here](#operation/Attachment_Create).
     *
     * <span style="color: red">
     *
     * Beware: if you set this value to 3, you MUST upload 3 attachments before anyone can sign this
     * document.</span>
     * @var integer|null $attachments public property
     */
    public $attachments;

    /**
     * Set how many signatures this document needs before it can be sealed and sat to complete
     * @var integer|null $requiredSignatures public property
     */
    public $requiredSignatures;

    /**
     * @todo Write general description for this property
     * @var string|null $createdByApplication public property
     */
    public $createdByApplication;

    /**
     * If your certificate allows it you can retrieve the signers social security number after a successful
     * sign session
     * @var bool|null $getSocialSecurityNumber public property
     */
    public $getSocialSecurityNumber;

    /**
     * Define this to get information about the sign process in a webhook
     * @var string|null $webhook public property
     */
    public $webhook;

    /**
     * Coming soon: Do you want to collect extra info about the signature process? (for example prokura
     * info)
     * @var ExtraInfo|null $extraInfo public property
     */
    public $extraInfo;

    /**
     * Security settings
     * @var Security|null $security public property
     */
    public $security;

    /**
     * Customize the time to live for the document and urls
     * @var TimeToLive|null $timeToLive public property
     */
    public $timeToLive;

    /**
     * @todo Write general description for this property
     * @var string|null $padesTemplateId public property
     */
    public $padesTemplateId;

    /**
     * @todo Write general description for this property
     * @var string|null $departmentId public property
     */
    public $departmentId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string     $tags                    Initialization value for $this->tags
     * @param integer    $attachments             Initialization value for $this->attachments
     * @param integer    $requiredSignatures      Initialization value for $this->requiredSignatures
     * @param string     $createdByApplication    Initialization value for $this->createdByApplication
     * @param bool       $getSocialSecurityNumber Initialization value for $this->getSocialSecurityNumber
     * @param string     $webhook                 Initialization value for $this->webhook
     * @param ExtraInfo  $extraInfo               Initialization value for $this->extraInfo
     * @param Security   $security                Initialization value for $this->security
     * @param TimeToLive $timeToLive              Initialization value for $this->timeToLive
     * @param string     $padesTemplateId         Initialization value for $this->padesTemplateId
     * @param string     $departmentId            Initialization value for $this->departmentId
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->tags                    = func_get_arg(0);
            $this->attachments             = func_get_arg(1);
            $this->requiredSignatures      = func_get_arg(2);
            $this->createdByApplication    = func_get_arg(3);
            $this->getSocialSecurityNumber = func_get_arg(4);
            $this->webhook                 = func_get_arg(5);
            $this->extraInfo               = func_get_arg(6);
            $this->security                = func_get_arg(7);
            $this->timeToLive              = func_get_arg(8);
            $this->padesTemplateId         = func_get_arg(9);
            $this->departmentId            = func_get_arg(10);
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
        $json['tags']                    = $this->tags;
        $json['attachments']             = $this->attachments;
        $json['requiredSignatures']      = $this->requiredSignatures;
        $json['createdByApplication']    = $this->createdByApplication;
        $json['getSocialSecurityNumber'] = $this->getSocialSecurityNumber;
        $json['webhook']                 = $this->webhook;
        $json['extraInfo']               = $this->extraInfo;
        $json['security']                = $this->security;
        $json['timeToLive']              = $this->timeToLive;
        $json['padesTemplateId']         = $this->padesTemplateId;
        $json['departmentId']            = $this->departmentId;

        return array_merge($json, $this->additionalProperties);
    }
}
