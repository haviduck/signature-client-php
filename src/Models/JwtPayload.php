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
class JwtPayload implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var uuid|string|null $accountId public property
     */
    public $accountId;

    /**
     * @todo Write general description for this property
     * @var uuid|string|null $documentId public property
     */
    public $documentId;

    /**
     * @todo Write general description for this property
     * @var string|null $externalId public property
     */
    public $externalId;

    /**
     * @todo Write general description for this property
     * @var uuid|string|null $signerId public property
     */
    public $signerId;

    /**
     * @todo Write general description for this property
     * @var string|null $externalSignerId public property
     */
    public $externalSignerId;

    /**
     * @todo Write general description for this property
     * @var Error|null $error public property
     */
    public $error;

    /**
     * @todo Write general description for this property
     * @var SignSuccess|null $signSuccess public property
     */
    public $signSuccess;

    /**
     * @todo Write general description for this property
     * @var string|null $expires public property
     */
    public $expires;

    /**
     * @todo Write general description for this property
     * @var bool|null $aborted public property
     */
    public $aborted;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param uuid|string $accountId        Initialization value for $this->accountId
     * @param uuid|string $documentId       Initialization value for $this->documentId
     * @param string      $externalId       Initialization value for $this->externalId
     * @param uuid|string $signerId         Initialization value for $this->signerId
     * @param string      $externalSignerId Initialization value for $this->externalSignerId
     * @param Error       $error            Initialization value for $this->error
     * @param SignSuccess $signSuccess      Initialization value for $this->signSuccess
     * @param string      $expires          Initialization value for $this->expires
     * @param bool        $aborted          Initialization value for $this->aborted
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->accountId        = func_get_arg(0);
            $this->documentId       = func_get_arg(1);
            $this->externalId       = func_get_arg(2);
            $this->signerId         = func_get_arg(3);
            $this->externalSignerId = func_get_arg(4);
            $this->error            = func_get_arg(5);
            $this->signSuccess      = func_get_arg(6);
            $this->expires          = func_get_arg(7);
            $this->aborted          = func_get_arg(8);
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
        $json['accountId']        = $this->accountId;
        $json['documentId']       = $this->documentId;
        $json['externalId']       = $this->externalId;
        $json['signerId']         = $this->signerId;
        $json['externalSignerId'] = $this->externalSignerId;
        $json['error']            = $this->error;
        $json['signSuccess']      = $this->signSuccess;
        $json['expires']          = $this->expires;
        $json['aborted']          = $this->aborted;

        return array_merge($json, $this->additionalProperties);
    }
}
