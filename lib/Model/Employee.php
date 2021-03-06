<?php
/**
 * Employee
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
 * Employee Class Doc Comment
 *
 * @category Class
 * @description Employee(id, company, profile_photo, first_name, last_name, user, location, department, department_head, active, date_start, contractor, partner, hourly_rate, monthly_rate, currency, extra)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Employee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Employee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'first_name' => 'string',
        'last_name' => 'string',
        'user' => 'string',
        'location' => 'int',
        'department' => 'int',
        'department_head' => 'bool',
        'active' => 'bool',
        'date_start' => '\DateTime',
        'user_agrees' => 'bool',
        'contractor' => 'bool',
        'partner' => 'int',
        'hourly_rate' => 'string',
        'monthly_rate' => 'string',
        'currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'first_name' => null,
        'last_name' => null,
        'user' => 'uuid',
        'location' => null,
        'department' => null,
        'department_head' => null,
        'active' => null,
        'date_start' => 'date',
        'user_agrees' => null,
        'contractor' => null,
        'partner' => null,
        'hourly_rate' => 'decimal',
        'monthly_rate' => 'decimal',
        'currency' => null
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
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'user' => 'user',
        'location' => 'location',
        'department' => 'department',
        'department_head' => 'department_head',
        'active' => 'active',
        'date_start' => 'date_start',
        'user_agrees' => 'user_agrees',
        'contractor' => 'contractor',
        'partner' => 'partner',
        'hourly_rate' => 'hourly_rate',
        'monthly_rate' => 'monthly_rate',
        'currency' => 'currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'user' => 'setUser',
        'location' => 'setLocation',
        'department' => 'setDepartment',
        'department_head' => 'setDepartmentHead',
        'active' => 'setActive',
        'date_start' => 'setDateStart',
        'user_agrees' => 'setUserAgrees',
        'contractor' => 'setContractor',
        'partner' => 'setPartner',
        'hourly_rate' => 'setHourlyRate',
        'monthly_rate' => 'setMonthlyRate',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'user' => 'getUser',
        'location' => 'getLocation',
        'department' => 'getDepartment',
        'department_head' => 'getDepartmentHead',
        'active' => 'getActive',
        'date_start' => 'getDateStart',
        'user_agrees' => 'getUserAgrees',
        'contractor' => 'getContractor',
        'partner' => 'getPartner',
        'hourly_rate' => 'getHourlyRate',
        'monthly_rate' => 'getMonthlyRate',
        'currency' => 'getCurrency'
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['department_head'] = isset($data['department_head']) ? $data['department_head'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['date_start'] = isset($data['date_start']) ? $data['date_start'] : null;
        $this->container['user_agrees'] = isset($data['user_agrees']) ? $data['user_agrees'] : false;
        $this->container['contractor'] = isset($data['contractor']) ? $data['contractor'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['hourly_rate'] = isset($data['hourly_rate']) ? $data['hourly_rate'] : null;
        $this->container['monthly_rate'] = isset($data['monthly_rate']) ? $data['monthly_rate'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 200)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ((mb_strlen($this->container['last_name']) > 200)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['last_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 1.";
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if ((mb_strlen($first_name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling Employee., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling Employee., must be bigger than or equal to 1.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        if ((mb_strlen($last_name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling Employee., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($last_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling Employee., must be bigger than or equal to 1.');
        }

        $this->container['last_name'] = $last_name;

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
     * @param string $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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
     * Gets department
     *
     * @return int
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param int $department department
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets department_head
     *
     * @return bool
     */
    public function getDepartmentHead()
    {
        return $this->container['department_head'];
    }

    /**
     * Sets department_head
     *
     * @param bool $department_head department_head
     *
     * @return $this
     */
    public function setDepartmentHead($department_head)
    {
        $this->container['department_head'] = $department_head;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets date_start
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->container['date_start'];
    }

    /**
     * Sets date_start
     *
     * @param \DateTime $date_start date_start
     *
     * @return $this
     */
    public function setDateStart($date_start)
    {
        $this->container['date_start'] = $date_start;

        return $this;
    }

    /**
     * Gets user_agrees
     *
     * @return bool
     */
    public function getUserAgrees()
    {
        return $this->container['user_agrees'];
    }

    /**
     * Sets user_agrees
     *
     * @param bool $user_agrees user_agrees
     *
     * @return $this
     */
    public function setUserAgrees($user_agrees)
    {
        $this->container['user_agrees'] = $user_agrees;

        return $this;
    }

    /**
     * Gets contractor
     *
     * @return bool
     */
    public function getContractor()
    {
        return $this->container['contractor'];
    }

    /**
     * Sets contractor
     *
     * @param bool $contractor contractor
     *
     * @return $this
     */
    public function setContractor($contractor)
    {
        $this->container['contractor'] = $contractor;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return int
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param int $partner partner
     *
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets hourly_rate
     *
     * @return string
     */
    public function getHourlyRate()
    {
        return $this->container['hourly_rate'];
    }

    /**
     * Sets hourly_rate
     *
     * @param string $hourly_rate hourly_rate
     *
     * @return $this
     */
    public function setHourlyRate($hourly_rate)
    {
        $this->container['hourly_rate'] = $hourly_rate;

        return $this;
    }

    /**
     * Gets monthly_rate
     *
     * @return string
     */
    public function getMonthlyRate()
    {
        return $this->container['monthly_rate'];
    }

    /**
     * Sets monthly_rate
     *
     * @param string $monthly_rate monthly_rate
     *
     * @return $this
     */
    public function setMonthlyRate($monthly_rate)
    {
        $this->container['monthly_rate'] = $monthly_rate;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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


