<?php
/**
 * CompanyNumber
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
 * CompanyNumber Class Doc Comment
 *
 * @category Class
 * @description CompanyNumber(id, company, location, type, series, number, length, default, from_date, to_date)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyNumber implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyNumber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'location' => 'int',
        'type' => 'int',
        'series' => 'string',
        'number' => 'int',
        'length' => 'int',
        'default' => 'bool',
        'from_date' => '\DateTime',
        'to_date' => '\DateTime',
        'users' => 'string[]',
        'next_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'location' => null,
        'type' => null,
        'series' => null,
        'number' => null,
        'length' => null,
        'default' => null,
        'from_date' => 'date',
        'to_date' => 'date',
        'users' => 'uuid',
        'next_number' => null
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
        'location' => 'location',
        'type' => 'type',
        'series' => 'series',
        'number' => 'number',
        'length' => 'length',
        'default' => 'default',
        'from_date' => 'from_date',
        'to_date' => 'to_date',
        'users' => 'users',
        'next_number' => 'next_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'location' => 'setLocation',
        'type' => 'setType',
        'series' => 'setSeries',
        'number' => 'setNumber',
        'length' => 'setLength',
        'default' => 'setDefault',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'users' => 'setUsers',
        'next_number' => 'setNextNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'location' => 'getLocation',
        'type' => 'getType',
        'series' => 'getSeries',
        'number' => 'getNumber',
        'length' => 'getLength',
        'default' => 'getDefault',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'users' => 'getUsers',
        'next_number' => 'getNextNumber'
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
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['next_number'] = isset($data['next_number']) ? $data['next_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['series'] === null) {
            $invalidProperties[] = "'series' can't be null";
        }
        if ((mb_strlen($this->container['series']) > 10)) {
            $invalidProperties[] = "invalid value for 'series', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['series']) < 1)) {
            $invalidProperties[] = "invalid value for 'series', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['number']) && ($this->container['number'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'number', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['number']) && ($this->container['number'] < 0)) {
            $invalidProperties[] = "invalid value for 'number', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['length']) && ($this->container['length'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'length', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['length']) && ($this->container['length'] < 0)) {
            $invalidProperties[] = "invalid value for 'length', must be bigger than or equal to 0.";
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
     * Gets location
     *
     * @return int
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param int $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets series
     *
     * @return string
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param string $series series
     *
     * @return $this
     */
    public function setSeries($series)
    {
        if ((mb_strlen($series) > 10)) {
            throw new \InvalidArgumentException('invalid length for $series when calling CompanyNumber., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($series) < 1)) {
            throw new \InvalidArgumentException('invalid length for $series when calling CompanyNumber., must be bigger than or equal to 1.');
        }

        $this->container['series'] = $series;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {

        if (!is_null($number) && ($number > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $number when calling CompanyNumber., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($number) && ($number < 0)) {
            throw new \InvalidArgumentException('invalid value for $number when calling CompanyNumber., must be bigger than or equal to 0.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int $length length
     *
     * @return $this
     */
    public function setLength($length)
    {

        if (!is_null($length) && ($length > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $length when calling CompanyNumber., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($length) && ($length < 0)) {
            throw new \InvalidArgumentException('invalid value for $length when calling CompanyNumber., must be bigger than or equal to 0.');
        }

        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool $default default
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime $from_date from_date
     *
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime $to_date to_date
     *
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets users
     *
     * @return string[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param string[] $users users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets next_number
     *
     * @return string
     */
    public function getNextNumber()
    {
        return $this->container['next_number'];
    }

    /**
     * Sets next_number
     *
     * @param string $next_number next_number
     *
     * @return $this
     */
    public function setNextNumber($next_number)
    {
        $this->container['next_number'] = $next_number;

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


