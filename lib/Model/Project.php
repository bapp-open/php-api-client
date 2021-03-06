<?php
/**
 * Project
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
 * Project Class Doc Comment
 *
 * @category Class
 * @description Subtasks should be stored as name|timestamp when completed or name| when not completed
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Project implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Project';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'client' => 'int',
        'currency' => 'string',
        'managers' => 'int[]',
        'workflow' => 'int',
        'workflow_steps' => 'int[]',
        'billable' => 'int',
        'name' => 'string',
        'description' => 'string',
        'billed' => 'bool',
        'price' => 'string',
        'status' => 'int',
        'project_task_data' => 'string',
        'template' => 'int',
        'priority' => 'int',
        'due_date' => '\DateTime',
        'cached_employees' => 'int[]',
        'order' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'client' => null,
        'currency' => null,
        'managers' => null,
        'workflow' => null,
        'workflow_steps' => null,
        'billable' => null,
        'name' => null,
        'description' => null,
        'billed' => null,
        'price' => 'decimal',
        'status' => null,
        'project_task_data' => null,
        'template' => null,
        'priority' => null,
        'due_date' => 'date-time',
        'cached_employees' => null,
        'order' => null
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
        'client' => 'client',
        'currency' => 'currency',
        'managers' => 'managers',
        'workflow' => 'workflow',
        'workflow_steps' => 'workflow_steps',
        'billable' => 'billable',
        'name' => 'name',
        'description' => 'description',
        'billed' => 'billed',
        'price' => 'price',
        'status' => 'status',
        'project_task_data' => 'project_task_data',
        'template' => 'template',
        'priority' => 'priority',
        'due_date' => 'due_date',
        'cached_employees' => 'cached_employees',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'client' => 'setClient',
        'currency' => 'setCurrency',
        'managers' => 'setManagers',
        'workflow' => 'setWorkflow',
        'workflow_steps' => 'setWorkflowSteps',
        'billable' => 'setBillable',
        'name' => 'setName',
        'description' => 'setDescription',
        'billed' => 'setBilled',
        'price' => 'setPrice',
        'status' => 'setStatus',
        'project_task_data' => 'setProjectTaskData',
        'template' => 'setTemplate',
        'priority' => 'setPriority',
        'due_date' => 'setDueDate',
        'cached_employees' => 'setCachedEmployees',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'client' => 'getClient',
        'currency' => 'getCurrency',
        'managers' => 'getManagers',
        'workflow' => 'getWorkflow',
        'workflow_steps' => 'getWorkflowSteps',
        'billable' => 'getBillable',
        'name' => 'getName',
        'description' => 'getDescription',
        'billed' => 'getBilled',
        'price' => 'getPrice',
        'status' => 'getStatus',
        'project_task_data' => 'getProjectTaskData',
        'template' => 'getTemplate',
        'priority' => 'getPriority',
        'due_date' => 'getDueDate',
        'cached_employees' => 'getCachedEmployees',
        'order' => 'getOrder'
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
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['managers'] = isset($data['managers']) ? $data['managers'] : null;
        $this->container['workflow'] = isset($data['workflow']) ? $data['workflow'] : null;
        $this->container['workflow_steps'] = isset($data['workflow_steps']) ? $data['workflow_steps'] : null;
        $this->container['billable'] = isset($data['billable']) ? $data['billable'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['billed'] = isset($data['billed']) ? $data['billed'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['project_task_data'] = isset($data['project_task_data']) ? $data['project_task_data'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['cached_employees'] = isset($data['cached_employees']) ? $data['cached_employees'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
     * Gets client
     *
     * @return int
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param int $client client
     *
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

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
     * Gets managers
     *
     * @return int[]
     */
    public function getManagers()
    {
        return $this->container['managers'];
    }

    /**
     * Sets managers
     *
     * @param int[] $managers managers
     *
     * @return $this
     */
    public function setManagers($managers)
    {
        $this->container['managers'] = $managers;

        return $this;
    }

    /**
     * Gets workflow
     *
     * @return int
     */
    public function getWorkflow()
    {
        return $this->container['workflow'];
    }

    /**
     * Sets workflow
     *
     * @param int $workflow workflow
     *
     * @return $this
     */
    public function setWorkflow($workflow)
    {
        $this->container['workflow'] = $workflow;

        return $this;
    }

    /**
     * Gets workflow_steps
     *
     * @return int[]
     */
    public function getWorkflowSteps()
    {
        return $this->container['workflow_steps'];
    }

    /**
     * Sets workflow_steps
     *
     * @param int[] $workflow_steps 
     *
     * @return $this
     */
    public function setWorkflowSteps($workflow_steps)
    {
        $this->container['workflow_steps'] = $workflow_steps;

        return $this;
    }

    /**
     * Gets billable
     *
     * @return int
     */
    public function getBillable()
    {
        return $this->container['billable'];
    }

    /**
     * Sets billable
     *
     * @param int $billable billable
     *
     * @return $this
     */
    public function setBillable($billable)
    {
        $this->container['billable'] = $billable;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Project., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Project., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets billed
     *
     * @return bool
     */
    public function getBilled()
    {
        return $this->container['billed'];
    }

    /**
     * Sets billed
     *
     * @param bool $billed billed
     *
     * @return $this
     */
    public function setBilled($billed)
    {
        $this->container['billed'] = $billed;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets project_task_data
     *
     * @return string
     */
    public function getProjectTaskData()
    {
        return $this->container['project_task_data'];
    }

    /**
     * Sets project_task_data
     *
     * @param string $project_task_data project_task_data
     *
     * @return $this
     */
    public function setProjectTaskData($project_task_data)
    {
        $this->container['project_task_data'] = $project_task_data;

        return $this;
    }

    /**
     * Gets template
     *
     * @return int
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param int $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets cached_employees
     *
     * @return int[]
     */
    public function getCachedEmployees()
    {
        return $this->container['cached_employees'];
    }

    /**
     * Sets cached_employees
     *
     * @param int[] $cached_employees 
     *
     * @return $this
     */
    public function setCachedEmployees($cached_employees)
    {
        $this->container['cached_employees'] = $cached_employees;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

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


