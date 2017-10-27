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
class Reminder implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var bool|null $enabled public property
     */
    public $enabled;

    /**
     * @todo Write general description for this property
     * @var Email[]|null $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @var SMS[]|null $sms public property
     */
    public $sms;

    /**
     * Define a chron expression to control the interval of the reminders (Use utc time). We use quartz
     * cron expressions, read more about it here: http://www.quartz-scheduler.org/documentation/quartz-2.
     * x/tutorials/crontrigger.html
     * @var string|null $chronSchedule public property
     */
    public $chronSchedule;

    /**
     * Set the maximum number of reminders to be sent for each signer
     * @var integer|null $maxReminders public property
     */
    public $maxReminders;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param bool    $enabled       Initialization value for $this->enabled
     * @param array   $email         Initialization value for $this->email
     * @param array   $sms           Initialization value for $this->sms
     * @param string  $chronSchedule Initialization value for $this->chronSchedule
     * @param integer $maxReminders  Initialization value for $this->maxReminders
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->enabled       = func_get_arg(0);
            $this->email         = func_get_arg(1);
            $this->sms           = func_get_arg(2);
            $this->chronSchedule = func_get_arg(3);
            $this->maxReminders  = func_get_arg(4);
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
        $json['enabled']       = $this->enabled;
        $json['email']         = $this->email;
        $json['sms']           = $this->sms;
        $json['chronSchedule'] = $this->chronSchedule;
        $json['maxReminders']  = $this->maxReminders;

        return array_merge($json, $this->additionalProperties);
    }
}
