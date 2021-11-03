<?php
/**
 * ReceptionNoteModel
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
 * ReceptionNoteModel Class Doc Comment
 *
 * @category Class
 * @description ReceptionNote(id, created_at, modified_at, snapshot, company, stock, supplier, currency, delegate, series, number, document_type, document_number, auto, date, status, observations, subtotal, tax_value, total, subtotal_currency, tax_value_currency, total_currency, exchange_rate, exchange_date, created_by, modified_by)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReceptionNoteModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReceptionNoteModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'stock' => 'int',
        'supplier' => 'int',
        'delegate' => 'int',
        'series' => 'int',
        'number' => 'string',
        'document_type' => 'int',
        'document_number' => 'string',
        'auto' => 'string',
        'date' => '\DateTime',
        'status' => 'int',
        'observations' => 'string',
        'exchange_rate' => 'string',
        'subtotal' => 'string',
        'tax_value' => 'string',
        'total' => 'string',
        'subtotal_currency' => 'string',
        'tax_value_currency' => 'string',
        'total_currency' => 'string',
        'items' => '\Swagger\Client\Model\ReceptionNoteItemModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'stock' => null,
        'supplier' => null,
        'delegate' => null,
        'series' => null,
        'number' => null,
        'document_type' => null,
        'document_number' => null,
        'auto' => null,
        'date' => 'date',
        'status' => null,
        'observations' => null,
        'exchange_rate' => 'decimal',
        'subtotal' => 'decimal',
        'tax_value' => 'decimal',
        'total' => 'decimal',
        'subtotal_currency' => 'decimal',
        'tax_value_currency' => 'decimal',
        'total_currency' => 'decimal',
        'items' => null
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
        'stock' => 'stock',
        'supplier' => 'supplier',
        'delegate' => 'delegate',
        'series' => 'series',
        'number' => 'number',
        'document_type' => 'document_type',
        'document_number' => 'document_number',
        'auto' => 'auto',
        'date' => 'date',
        'status' => 'status',
        'observations' => 'observations',
        'exchange_rate' => 'exchange_rate',
        'subtotal' => 'subtotal',
        'tax_value' => 'tax_value',
        'total' => 'total',
        'subtotal_currency' => 'subtotal_currency',
        'tax_value_currency' => 'tax_value_currency',
        'total_currency' => 'total_currency',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'stock' => 'setStock',
        'supplier' => 'setSupplier',
        'delegate' => 'setDelegate',
        'series' => 'setSeries',
        'number' => 'setNumber',
        'document_type' => 'setDocumentType',
        'document_number' => 'setDocumentNumber',
        'auto' => 'setAuto',
        'date' => 'setDate',
        'status' => 'setStatus',
        'observations' => 'setObservations',
        'exchange_rate' => 'setExchangeRate',
        'subtotal' => 'setSubtotal',
        'tax_value' => 'setTaxValue',
        'total' => 'setTotal',
        'subtotal_currency' => 'setSubtotalCurrency',
        'tax_value_currency' => 'setTaxValueCurrency',
        'total_currency' => 'setTotalCurrency',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'stock' => 'getStock',
        'supplier' => 'getSupplier',
        'delegate' => 'getDelegate',
        'series' => 'getSeries',
        'number' => 'getNumber',
        'document_type' => 'getDocumentType',
        'document_number' => 'getDocumentNumber',
        'auto' => 'getAuto',
        'date' => 'getDate',
        'status' => 'getStatus',
        'observations' => 'getObservations',
        'exchange_rate' => 'getExchangeRate',
        'subtotal' => 'getSubtotal',
        'tax_value' => 'getTaxValue',
        'total' => 'getTotal',
        'subtotal_currency' => 'getSubtotalCurrency',
        'tax_value_currency' => 'getTaxValueCurrency',
        'total_currency' => 'getTotalCurrency',
        'items' => 'getItems'
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
        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['delegate'] = isset($data['delegate']) ? $data['delegate'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['document_number'] = isset($data['document_number']) ? $data['document_number'] : null;
        $this->container['auto'] = isset($data['auto']) ? $data['auto'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['observations'] = isset($data['observations']) ? $data['observations'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['tax_value'] = isset($data['tax_value']) ? $data['tax_value'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['subtotal_currency'] = isset($data['subtotal_currency']) ? $data['subtotal_currency'] : null;
        $this->container['tax_value_currency'] = isset($data['tax_value_currency']) ? $data['tax_value_currency'] : null;
        $this->container['total_currency'] = isset($data['total_currency']) ? $data['total_currency'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['stock'] === null) {
            $invalidProperties[] = "'stock' can't be null";
        }
        if ($this->container['supplier'] === null) {
            $invalidProperties[] = "'supplier' can't be null";
        }
        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) < 1)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['document_number']) && (mb_strlen($this->container['document_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'document_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['auto']) && (mb_strlen($this->container['auto']) > 100)) {
            $invalidProperties[] = "invalid value for 'auto', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets stock
     *
     * @return int
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param int $stock stock
     *
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return int
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param int $supplier supplier
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets delegate
     *
     * @return int
     */
    public function getDelegate()
    {
        return $this->container['delegate'];
    }

    /**
     * Sets delegate
     *
     * @param int $delegate delegate
     *
     * @return $this
     */
    public function setDelegate($delegate)
    {
        $this->container['delegate'] = $delegate;

        return $this;
    }

    /**
     * Gets series
     *
     * @return int
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param int $series series
     *
     * @return $this
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {

        if (!is_null($number) && (mb_strlen($number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $number when calling ReceptionNoteModel., must be bigger than or equal to 1.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return int
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param int $document_type document_type
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string $document_number document_number
     *
     * @return $this
     */
    public function setDocumentNumber($document_number)
    {
        if (!is_null($document_number) && (mb_strlen($document_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $document_number when calling ReceptionNoteModel., must be smaller than or equal to 100.');
        }

        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets auto
     *
     * @return string
     */
    public function getAuto()
    {
        return $this->container['auto'];
    }

    /**
     * Sets auto
     *
     * @param string $auto auto
     *
     * @return $this
     */
    public function setAuto($auto)
    {
        if (!is_null($auto) && (mb_strlen($auto) > 100)) {
            throw new \InvalidArgumentException('invalid length for $auto when calling ReceptionNoteModel., must be smaller than or equal to 100.');
        }

        $this->container['auto'] = $auto;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * Gets observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->container['observations'];
    }

    /**
     * Sets observations
     *
     * @param string $observations observations
     *
     * @return $this
     */
    public function setObservations($observations)
    {
        $this->container['observations'] = $observations;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return string
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param string $exchange_rate exchange_rate
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return string
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param string $subtotal Subtotal RON
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets tax_value
     *
     * @return string
     */
    public function getTaxValue()
    {
        return $this->container['tax_value'];
    }

    /**
     * Sets tax_value
     *
     * @param string $tax_value TVA RON
     *
     * @return $this
     */
    public function setTaxValue($tax_value)
    {
        $this->container['tax_value'] = $tax_value;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string $total Total RON
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets subtotal_currency
     *
     * @return string
     */
    public function getSubtotalCurrency()
    {
        return $this->container['subtotal_currency'];
    }

    /**
     * Sets subtotal_currency
     *
     * @param string $subtotal_currency Subtotal valută
     *
     * @return $this
     */
    public function setSubtotalCurrency($subtotal_currency)
    {
        $this->container['subtotal_currency'] = $subtotal_currency;

        return $this;
    }

    /**
     * Gets tax_value_currency
     *
     * @return string
     */
    public function getTaxValueCurrency()
    {
        return $this->container['tax_value_currency'];
    }

    /**
     * Sets tax_value_currency
     *
     * @param string $tax_value_currency TVA valută
     *
     * @return $this
     */
    public function setTaxValueCurrency($tax_value_currency)
    {
        $this->container['tax_value_currency'] = $tax_value_currency;

        return $this;
    }

    /**
     * Gets total_currency
     *
     * @return string
     */
    public function getTotalCurrency()
    {
        return $this->container['total_currency'];
    }

    /**
     * Sets total_currency
     *
     * @param string $total_currency Total valută
     *
     * @return $this
     */
    public function setTotalCurrency($total_currency)
    {
        $this->container['total_currency'] = $total_currency;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\ReceptionNoteItemModel[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\ReceptionNoteItemModel[] $items 
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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

