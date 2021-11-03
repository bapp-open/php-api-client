<?php
/**
 * Announcement
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
 * Announcement Class Doc Comment
 *
 * @category Class
 * @description Announcement(id, created_at, modified_at, created_by, modified_by, company, published, published_at, publish_after, all_users, title, content)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Announcement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Announcement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'published' => 'bool',
        'published_at' => '\DateTime',
        'publish_after' => '\DateTime',
        'all_users' => 'bool',
        'title' => 'string',
        'content' => 'string',
        'locations' => 'int[]',
        'departments' => 'int[]',
        'employees' => 'int[]',
        'created_at' => '\DateTime',
        'modified_at' => '\DateTime',
        'created_by' => 'string',
        'modified_by' => 'string',
        'attachments_set' => '\Swagger\Client\Model\Attachment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'published' => null,
        'published_at' => 'date-time',
        'publish_after' => 'date-time',
        'all_users' => null,
        'title' => null,
        'content' => null,
        'locations' => null,
        'departments' => null,
        'employees' => null,
        'created_at' => 'date-time',
        'modified_at' => 'date-time',
        'created_by' => 'uuid',
        'modified_by' => 'uuid',
        'attachments_set' => null
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
        'published' => 'published',
        'published_at' => 'published_at',
        'publish_after' => 'publish_after',
        'all_users' => 'all_users',
        'title' => 'title',
        'content' => 'content',
        'locations' => 'locations',
        'departments' => 'departments',
        'employees' => 'employees',
        'created_at' => 'created_at',
        'modified_at' => 'modified_at',
        'created_by' => 'created_by',
        'modified_by' => 'modified_by',
        'attachments_set' => 'attachments_set'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'published' => 'setPublished',
        'published_at' => 'setPublishedAt',
        'publish_after' => 'setPublishAfter',
        'all_users' => 'setAllUsers',
        'title' => 'setTitle',
        'content' => 'setContent',
        'locations' => 'setLocations',
        'departments' => 'setDepartments',
        'employees' => 'setEmployees',
        'created_at' => 'setCreatedAt',
        'modified_at' => 'setModifiedAt',
        'created_by' => 'setCreatedBy',
        'modified_by' => 'setModifiedBy',
        'attachments_set' => 'setAttachmentsSet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'published' => 'getPublished',
        'published_at' => 'getPublishedAt',
        'publish_after' => 'getPublishAfter',
        'all_users' => 'getAllUsers',
        'title' => 'getTitle',
        'content' => 'getContent',
        'locations' => 'getLocations',
        'departments' => 'getDepartments',
        'employees' => 'getEmployees',
        'created_at' => 'getCreatedAt',
        'modified_at' => 'getModifiedAt',
        'created_by' => 'getCreatedBy',
        'modified_by' => 'getModifiedBy',
        'attachments_set' => 'getAttachmentsSet'
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
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['published_at'] = isset($data['published_at']) ? $data['published_at'] : null;
        $this->container['publish_after'] = isset($data['publish_after']) ? $data['publish_after'] : null;
        $this->container['all_users'] = isset($data['all_users']) ? $data['all_users'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['departments'] = isset($data['departments']) ? $data['departments'] : null;
        $this->container['employees'] = isset($data['employees']) ? $data['employees'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['modified_at'] = isset($data['modified_at']) ? $data['modified_at'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['modified_by'] = isset($data['modified_by']) ? $data['modified_by'] : null;
        $this->container['attachments_set'] = isset($data['attachments_set']) ? $data['attachments_set'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 200)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ((mb_strlen($this->container['content']) < 1)) {
            $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
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
     * Gets published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool $published published
     *
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets published_at
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->container['published_at'];
    }

    /**
     * Sets published_at
     *
     * @param \DateTime $published_at published_at
     *
     * @return $this
     */
    public function setPublishedAt($published_at)
    {
        $this->container['published_at'] = $published_at;

        return $this;
    }

    /**
     * Gets publish_after
     *
     * @return \DateTime
     */
    public function getPublishAfter()
    {
        return $this->container['publish_after'];
    }

    /**
     * Sets publish_after
     *
     * @param \DateTime $publish_after publish_after
     *
     * @return $this
     */
    public function setPublishAfter($publish_after)
    {
        $this->container['publish_after'] = $publish_after;

        return $this;
    }

    /**
     * Gets all_users
     *
     * @return bool
     */
    public function getAllUsers()
    {
        return $this->container['all_users'];
    }

    /**
     * Sets all_users
     *
     * @param bool $all_users all_users
     *
     * @return $this
     */
    public function setAllUsers($all_users)
    {
        $this->container['all_users'] = $all_users;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if ((mb_strlen($title) > 200)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Announcement., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Announcement., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {

        if ((mb_strlen($content) < 1)) {
            throw new \InvalidArgumentException('invalid length for $content when calling Announcement., must be bigger than or equal to 1.');
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return int[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param int[] $locations locations
     *
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets departments
     *
     * @return int[]
     */
    public function getDepartments()
    {
        return $this->container['departments'];
    }

    /**
     * Sets departments
     *
     * @param int[] $departments departments
     *
     * @return $this
     */
    public function setDepartments($departments)
    {
        $this->container['departments'] = $departments;

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
     * @param int[] $employees employees
     *
     * @return $this
     */
    public function setEmployees($employees)
    {
        $this->container['employees'] = $employees;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Date and time at which this record was added
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets modified_at
     *
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     *
     * @param \DateTime $modified_at Date and time at which this record was modified
     *
     * @return $this
     */
    public function setModifiedAt($modified_at)
    {
        $this->container['modified_at'] = $modified_at;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string $created_by User id that created this record
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets modified_by
     *
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->container['modified_by'];
    }

    /**
     * Sets modified_by
     *
     * @param string $modified_by Last user id that modified this record
     *
     * @return $this
     */
    public function setModifiedBy($modified_by)
    {
        $this->container['modified_by'] = $modified_by;

        return $this;
    }

    /**
     * Gets attachments_set
     *
     * @return \Swagger\Client\Model\Attachment[]
     */
    public function getAttachmentsSet()
    {
        return $this->container['attachments_set'];
    }

    /**
     * Sets attachments_set
     *
     * @param \Swagger\Client\Model\Attachment[] $attachments_set 
     *
     * @return $this
     */
    public function setAttachmentsSet($attachments_set)
    {
        $this->container['attachments_set'] = $attachments_set;

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


