<?php
/**
 * UserNotificationConfigIdent
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BAPP API
 *
 * Test description
 *
 * OpenAPI spec version: v1
 * Contact: contact@snippets.local
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.23
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UserNotificationConfigIdent Class Doc Comment
 *
 * @category Class
 * @description NotificationConfig(id, user, app, notification, company, channels, identifier, enabled)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserNotificationConfigIdent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserNotificationConfigIdent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'user' => 'string',
        'app' => 'string',
        'notification' => 'int',
        'company' => 'int',
        'channels' => 'string[]',
        'enabled' => 'bool',
        'modifies_module_config' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'user' => 'uuid',
        'app' => null,
        'notification' => null,
        'company' => null,
        'channels' => null,
        'enabled' => null,
        'modifies_module_config' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'user' => 'user',
        'app' => 'app',
        'notification' => 'notification',
        'company' => 'company',
        'channels' => 'channels',
        'enabled' => 'enabled',
        'modifies_module_config' => 'modifies_module_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user' => 'setUser',
        'app' => 'setApp',
        'notification' => 'setNotification',
        'company' => 'setCompany',
        'channels' => 'setChannels',
        'enabled' => 'setEnabled',
        'modifies_module_config' => 'setModifiesModuleConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user' => 'getUser',
        'app' => 'getApp',
        'notification' => 'getNotification',
        'company' => 'getCompany',
        'channels' => 'getChannels',
        'enabled' => 'getEnabled',
        'modifies_module_config' => 'getModifiesModuleConfig'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const CHANNELS_EMAIL = 'email';
    const CHANNELS_EMAIL_IF_OFFLINE = 'email_if_offline';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChannelsAllowableValues()
    {
        return [
            self::CHANNELS_EMAIL,
            self::CHANNELS_EMAIL_IF_OFFLINE,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['channels'] = isset($data['channels']) ? $data['channels'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['modifies_module_config'] = isset($data['modifies_module_config']) ? $data['modifies_module_config'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) < 1)) {
            $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['channels'] === null) {
            $invalidProperties[] = "'channels' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user Utilizatorul care de??ine aceast?? ??nregistrare.
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets app
     *
     * @return string
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     *
     * @param string $app app
     *
     * @return $this
     */
    public function setApp($app)
    {

        if (!is_null($app) && (mb_strlen($app) < 1)) {
            throw new \InvalidArgumentException('invalid length for $app when calling UserNotificationConfigIdent., must be bigger than or equal to 1.');
        }

        $this->container['app'] = $app;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return int
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param int $notification notification
     *
     * @return $this
     */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;

        return $this;
    }

    /**
     * Gets company
     *
     * @return int
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param int $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return string[]
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param string[] $channels channels
     *
     * @return $this
     */
    public function setChannels($channels)
    {
        $allowedValues = $this->getChannelsAllowableValues();
        if (array_diff($channels, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'channels', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets modifies_module_config
     *
     * @return string
     */
    public function getModifiesModuleConfig()
    {
        return $this->container['modifies_module_config'];
    }

    /**
     * Sets modifies_module_config
     *
     * @param string $modifies_module_config modifies_module_config
     *
     * @return $this
     */
    public function setModifiesModuleConfig($modifies_module_config)
    {
        $this->container['modifies_module_config'] = $modifies_module_config;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


