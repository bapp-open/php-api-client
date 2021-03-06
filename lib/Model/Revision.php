<?php
/**
 * Revision
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
 * Revision Class Doc Comment
 *
 * @category Class
 * @description Revision(id, company, document, edition, version, file, date_start, date_stop, message, employees, is_active)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Revision implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Revision';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'document' => 'int',
        'edition' => 'string',
        'version' => 'string',
        'file' => 'string',
        'date_start' => '\DateTime',
        'date_stop' => '\DateTime',
        'message' => 'string',
        'acceptance_data' => 'string',
        'employees' => 'int[]',
        'is_active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'document' => null,
        'edition' => null,
        'version' => null,
        'file' => 'uri',
        'date_start' => 'date',
        'date_stop' => 'date',
        'message' => null,
        'acceptance_data' => null,
        'employees' => null,
        'is_active' => null
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
        'document' => 'document',
        'edition' => 'edition',
        'version' => 'version',
        'file' => 'file',
        'date_start' => 'date_start',
        'date_stop' => 'date_stop',
        'message' => 'message',
        'acceptance_data' => 'acceptance_data',
        'employees' => 'employees',
        'is_active' => 'is_active'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'document' => 'setDocument',
        'edition' => 'setEdition',
        'version' => 'setVersion',
        'file' => 'setFile',
        'date_start' => 'setDateStart',
        'date_stop' => 'setDateStop',
        'message' => 'setMessage',
        'acceptance_data' => 'setAcceptanceData',
        'employees' => 'setEmployees',
        'is_active' => 'setIsActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'document' => 'getDocument',
        'edition' => 'getEdition',
        'version' => 'getVersion',
        'file' => 'getFile',
        'date_start' => 'getDateStart',
        'date_stop' => 'getDateStop',
        'message' => 'getMessage',
        'acceptance_data' => 'getAcceptanceData',
        'employees' => 'getEmployees',
        'is_active' => 'getIsActive'
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
        $this->container['document'] = isset($data['document']) ? $data['document'] : null;
        $this->container['edition'] = isset($data['edition']) ? $data['edition'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['date_start'] = isset($data['date_start']) ? $data['date_start'] : null;
        $this->container['date_stop'] = isset($data['date_stop']) ? $data['date_stop'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['acceptance_data'] = isset($data['acceptance_data']) ? $data['acceptance_data'] : null;
        $this->container['employees'] = isset($data['employees']) ? $data['employees'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['document'] === null) {
            $invalidProperties[] = "'document' can't be null";
        }
        if (!is_null($this->container['edition']) && (mb_strlen($this->container['edition']) > 100)) {
            $invalidProperties[] = "invalid value for 'edition', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 100)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['date_start'] === null) {
            $invalidProperties[] = "'date_start' can't be null";
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
     * Gets document
     *
     * @return int
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param int $document document
     *
     * @return $this
     */
    public function setDocument($document)
    {
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets edition
     *
     * @return string
     */
    public function getEdition()
    {
        return $this->container['edition'];
    }

    /**
     * Sets edition
     *
     * @param string $edition edition
     *
     * @return $this
     */
    public function setEdition($edition)
    {
        if (!is_null($edition) && (mb_strlen($edition) > 100)) {
            throw new \InvalidArgumentException('invalid length for $edition when calling Revision., must be smaller than or equal to 100.');
        }

        $this->container['edition'] = $edition;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        if (!is_null($version) && (mb_strlen($version) > 100)) {
            throw new \InvalidArgumentException('invalid length for $version when calling Revision., must be smaller than or equal to 100.');
        }

        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string $file file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

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
     * Gets date_stop
     *
     * @return \DateTime
     */
    public function getDateStop()
    {
        return $this->container['date_stop'];
    }

    /**
     * Sets date_stop
     *
     * @param \DateTime $date_stop date_stop
     *
     * @return $this
     */
    public function setDateStop($date_stop)
    {
        $this->container['date_stop'] = $date_stop;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets acceptance_data
     *
     * @return string
     */
    public function getAcceptanceData()
    {
        return $this->container['acceptance_data'];
    }

    /**
     * Sets acceptance_data
     *
     * @param string $acceptance_data acceptance_data
     *
     * @return $this
     */
    public function setAcceptanceData($acceptance_data)
    {
        $this->container['acceptance_data'] = $acceptance_data;

        return $this;
    }

    /**
     * Gets employees
     *
     * @return int[]
     */
    public function getEmployees()
    {
        return $this->container['employees'];
    }

    /**
     * Sets employees
     *
     * @param int[] $employees 
     *
     * @return $this
     */
    public function setEmployees($employees)
    {
        $this->container['employees'] = $employees;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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


