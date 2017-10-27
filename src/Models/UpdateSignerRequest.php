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
class UpdateSignerRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var RedirectSettings $redirectSettings public property
     */
    public $redirectSettings;

    /**
     * @todo Write general description for this property
     * @var SignerInfo|null $signerInfo public property
     */
    public $signerInfo;

    /**
     * @todo Write general description for this property
     * @var ExtraInfo|null $extraInfo public property
     */
    public $extraInfo;

    /**
     * @todo Write general description for this property
     * @var UI|null $ui public property
     */
    public $ui;

    /**
     * @todo Write general description for this property
     * @var bool|null $notificationsEnabled public property
     */
    public $notificationsEnabled;

    /**
     * @todo Write general description for this property
     * @var string|null $tags public property
     */
    public $tags;

    /**
     * @todo Write general description for this property
     * @var integer|null $order public property
     */
    public $order;

    /**
     * @todo Write general description for this property
     * @var bool|null $required public property
     */
    public $required;

    /**
     * @todo Write general description for this property
     * @var integer|null $signUrlExpires public property
     */
    public $signUrlExpires;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param RedirectSettings $redirectSettings     Initialization value for $this->redirectSettings
     * @param SignerInfo       $signerInfo           Initialization value for $this->signerInfo
     * @param ExtraInfo        $extraInfo            Initialization value for $this->extraInfo
     * @param UI               $ui                   Initialization value for $this->ui
     * @param bool             $notificationsEnabled Initialization value for $this->notificationsEnabled
     * @param string           $tags                 Initialization value for $this->tags
     * @param integer          $order                Initialization value for $this->order
     * @param bool             $required             Initialization value for $this->required
     * @param integer          $signUrlExpires       Initialization value for $this->signUrlExpires
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->redirectSettings     = func_get_arg(0);
            $this->signerInfo           = func_get_arg(1);
            $this->extraInfo            = func_get_arg(2);
            $this->ui                   = func_get_arg(3);
            $this->notificationsEnabled = func_get_arg(4);
            $this->tags                 = func_get_arg(5);
            $this->order                = func_get_arg(6);
            $this->required             = func_get_arg(7);
            $this->signUrlExpires       = func_get_arg(8);
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
        $json['redirectSettings']     = $this->redirectSettings;
        $json['signerInfo']           = $this->signerInfo;
        $json['extraInfo']            = $this->extraInfo;
        $json['ui']                   = $this->ui;
        $json['notificationsEnabled'] = $this->notificationsEnabled;
        $json['tags']                 = $this->tags;
        $json['order']                = $this->order;
        $json['required']             = $this->required;
        $json['signUrlExpires']       = $this->signUrlExpires;

        return array_merge($json, $this->additionalProperties);
    }
}
