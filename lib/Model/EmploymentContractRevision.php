<?php
/**
 * EmploymentContractRevision
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
 * EmploymentContractRevision Class Doc Comment
 *
 * @category Class
 * @description EmploymentContract(id, company, employee, contract_number, contract_date, work_start, cod_cor, details, work_end, end_date_exception, contract_type, full_time, contract_time, shift_type, hour_split, working_hours, extra, status, contract_ended, from_date, revision, revision_date, salary, uuid, document)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmploymentContractRevision implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmploymentContractRevision';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'work_start' => '\DateTime',
        'cod_cor' => 'string',
        'work_end' => '\DateTime',
        'end_date_exception' => 'int',
        'contract_type' => 'string',
        'full_time' => 'bool',
        'contract_time' => 'int',
        'shift_type' => 'int',
        'hour_split' => 'int',
        'working_hours' => 'int',
        'extra' => 'object',
        'from_date' => '\DateTime',
        'salary' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'work_start' => 'date',
        'cod_cor' => null,
        'work_end' => 'date',
        'end_date_exception' => null,
        'contract_type' => null,
        'full_time' => null,
        'contract_time' => null,
        'shift_type' => null,
        'hour_split' => null,
        'working_hours' => null,
        'extra' => null,
        'from_date' => 'date',
        'salary' => 'decimal'
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
        'work_start' => 'work_start',
        'cod_cor' => 'cod_cor',
        'work_end' => 'work_end',
        'end_date_exception' => 'end_date_exception',
        'contract_type' => 'contract_type',
        'full_time' => 'full_time',
        'contract_time' => 'contract_time',
        'shift_type' => 'shift_type',
        'hour_split' => 'hour_split',
        'working_hours' => 'working_hours',
        'extra' => 'extra',
        'from_date' => 'from_date',
        'salary' => 'salary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'work_start' => 'setWorkStart',
        'cod_cor' => 'setCodCor',
        'work_end' => 'setWorkEnd',
        'end_date_exception' => 'setEndDateException',
        'contract_type' => 'setContractType',
        'full_time' => 'setFullTime',
        'contract_time' => 'setContractTime',
        'shift_type' => 'setShiftType',
        'hour_split' => 'setHourSplit',
        'working_hours' => 'setWorkingHours',
        'extra' => 'setExtra',
        'from_date' => 'setFromDate',
        'salary' => 'setSalary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'work_start' => 'getWorkStart',
        'cod_cor' => 'getCodCor',
        'work_end' => 'getWorkEnd',
        'end_date_exception' => 'getEndDateException',
        'contract_type' => 'getContractType',
        'full_time' => 'getFullTime',
        'contract_time' => 'getContractTime',
        'shift_type' => 'getShiftType',
        'hour_split' => 'getHourSplit',
        'working_hours' => 'getWorkingHours',
        'extra' => 'getExtra',
        'from_date' => 'getFromDate',
        'salary' => 'getSalary'
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

    const CONTRACT_TYPE_INDIVIDUAL = 'individual';
    const CONTRACT_TYPE_UCENICIE = 'ucenicie';
    const CONTRACT_TYPE_DOMICILIU = 'domiciliu';
    const CONTRACT_TYPE_TEMPORAR = 'temporar';
    const CONTRACT_TYPE_DEZAVANTAJATI = 'dezavantajati';
    const CONTRACT_TYPE_TELEMUNCA = 'telemunca';
    const CONTRACT_TYPE_TELEMUNCA_TEMPORAR = 'telemunca_temporar';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContractTypeAllowableValues()
    {
        return [
            self::CONTRACT_TYPE_INDIVIDUAL,
            self::CONTRACT_TYPE_UCENICIE,
            self::CONTRACT_TYPE_DOMICILIU,
            self::CONTRACT_TYPE_TEMPORAR,
            self::CONTRACT_TYPE_DEZAVANTAJATI,
            self::CONTRACT_TYPE_TELEMUNCA,
            self::CONTRACT_TYPE_TELEMUNCA_TEMPORAR,
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
        $this->container['work_start'] = isset($data['work_start']) ? $data['work_start'] : null;
        $this->container['cod_cor'] = isset($data['cod_cor']) ? $data['cod_cor'] : null;
        $this->container['work_end'] = isset($data['work_end']) ? $data['work_end'] : null;
        $this->container['end_date_exception'] = isset($data['end_date_exception']) ? $data['end_date_exception'] : null;
        $this->container['contract_type'] = isset($data['contract_type']) ? $data['contract_type'] : null;
        $this->container['full_time'] = isset($data['full_time']) ? $data['full_time'] : null;
        $this->container['contract_time'] = isset($data['contract_time']) ? $data['contract_time'] : null;
        $this->container['shift_type'] = isset($data['shift_type']) ? $data['shift_type'] : null;
        $this->container['hour_split'] = isset($data['hour_split']) ? $data['hour_split'] : null;
        $this->container['working_hours'] = isset($data['working_hours']) ? $data['working_hours'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['salary'] = isset($data['salary']) ? $data['salary'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['cod_cor']) && (mb_strlen($this->container['cod_cor']) > 6)) {
            $invalidProperties[] = "invalid value for 'cod_cor', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['cod_cor']) && (mb_strlen($this->container['cod_cor']) < 1)) {
            $invalidProperties[] = "invalid value for 'cod_cor', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getContractTypeAllowableValues();
        if (!is_null($this->container['contract_type']) && !in_array($this->container['contract_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'contract_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['working_hours']) && ($this->container['working_hours'] > 32767)) {
            $invalidProperties[] = "invalid value for 'working_hours', must be smaller than or equal to 32767.";
        }

        if (!is_null($this->container['working_hours']) && ($this->container['working_hours'] < 0)) {
            $invalidProperties[] = "invalid value for 'working_hours', must be bigger than or equal to 0.";
        }

        if ($this->container['from_date'] === null) {
            $invalidProperties[] = "'from_date' can't be null";
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
     * Gets work_start
     *
     * @return \DateTime
     */
    public function getWorkStart()
    {
        return $this->container['work_start'];
    }

    /**
     * Sets work_start
     *
     * @param \DateTime $work_start work_start
     *
     * @return $this
     */
    public function setWorkStart($work_start)
    {
        $this->container['work_start'] = $work_start;

        return $this;
    }

    /**
     * Gets cod_cor
     *
     * @return string
     */
    public function getCodCor()
    {
        return $this->container['cod_cor'];
    }

    /**
     * Sets cod_cor
     *
     * @param string $cod_cor cod_cor
     *
     * @return $this
     */
    public function setCodCor($cod_cor)
    {
        if (!is_null($cod_cor) && (mb_strlen($cod_cor) > 6)) {
            throw new \InvalidArgumentException('invalid length for $cod_cor when calling EmploymentContractRevision., must be smaller than or equal to 6.');
        }
        if (!is_null($cod_cor) && (mb_strlen($cod_cor) < 1)) {
            throw new \InvalidArgumentException('invalid length for $cod_cor when calling EmploymentContractRevision., must be bigger than or equal to 1.');
        }

        $this->container['cod_cor'] = $cod_cor;

        return $this;
    }

    /**
     * Gets work_end
     *
     * @return \DateTime
     */
    public function getWorkEnd()
    {
        return $this->container['work_end'];
    }

    /**
     * Sets work_end
     *
     * @param \DateTime $work_end work_end
     *
     * @return $this
     */
    public function setWorkEnd($work_end)
    {
        $this->container['work_end'] = $work_end;

        return $this;
    }

    /**
     * Gets end_date_exception
     *
     * @return int
     */
    public function getEndDateException()
    {
        return $this->container['end_date_exception'];
    }

    /**
     * Sets end_date_exception
     *
     * @param int $end_date_exception end_date_exception
     *
     * @return $this
     */
    public function setEndDateException($end_date_exception)
    {
        $this->container['end_date_exception'] = $end_date_exception;

        return $this;
    }

    /**
     * Gets contract_type
     *
     * @return string
     */
    public function getContractType()
    {
        return $this->container['contract_type'];
    }

    /**
     * Sets contract_type
     *
     * @param string $contract_type contract_type
     *
     * @return $this
     */
    public function setContractType($contract_type)
    {
        $allowedValues = $this->getContractTypeAllowableValues();
        if (!is_null($contract_type) && !in_array($contract_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contract_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contract_type'] = $contract_type;

        return $this;
    }

    /**
     * Gets full_time
     *
     * @return bool
     */
    public function getFullTime()
    {
        return $this->container['full_time'];
    }

    /**
     * Sets full_time
     *
     * @param bool $full_time full_time
     *
     * @return $this
     */
    public function setFullTime($full_time)
    {
        $this->container['full_time'] = $full_time;

        return $this;
    }

    /**
     * Gets contract_time
     *
     * @return int
     */
    public function getContractTime()
    {
        return $this->container['contract_time'];
    }

    /**
     * Sets contract_time
     *
     * @param int $contract_time contract_time
     *
     * @return $this
     */
    public function setContractTime($contract_time)
    {
        $this->container['contract_time'] = $contract_time;

        return $this;
    }

    /**
     * Gets shift_type
     *
     * @return int
     */
    public function getShiftType()
    {
        return $this->container['shift_type'];
    }

    /**
     * Sets shift_type
     *
     * @param int $shift_type shift_type
     *
     * @return $this
     */
    public function setShiftType($shift_type)
    {
        $this->container['shift_type'] = $shift_type;

        return $this;
    }

    /**
     * Gets hour_split
     *
     * @return int
     */
    public function getHourSplit()
    {
        return $this->container['hour_split'];
    }

    /**
     * Sets hour_split
     *
     * @param int $hour_split hour_split
     *
     * @return $this
     */
    public function setHourSplit($hour_split)
    {
        $this->container['hour_split'] = $hour_split;

        return $this;
    }

    /**
     * Gets working_hours
     *
     * @return int
     */
    public function getWorkingHours()
    {
        return $this->container['working_hours'];
    }

    /**
     * Sets working_hours
     *
     * @param int $working_hours working_hours
     *
     * @return $this
     */
    public function setWorkingHours($working_hours)
    {

        if (!is_null($working_hours) && ($working_hours > 32767)) {
            throw new \InvalidArgumentException('invalid value for $working_hours when calling EmploymentContractRevision., must be smaller than or equal to 32767.');
        }
        if (!is_null($working_hours) && ($working_hours < 0)) {
            throw new \InvalidArgumentException('invalid value for $working_hours when calling EmploymentContractRevision., must be bigger than or equal to 0.');
        }

        $this->container['working_hours'] = $working_hours;

        return $this;
    }

    /**
     * Gets extra
     *
     * @return object
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param object $extra extra
     *
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;

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
     * Gets salary
     *
     * @return string
     */
    public function getSalary()
    {
        return $this->container['salary'];
    }

    /**
     * Sets salary
     *
     * @param string $salary salary
     *
     * @return $this
     */
    public function setSalary($salary)
    {
        $this->container['salary'] = $salary;

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


