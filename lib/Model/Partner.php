<?php
/**
 * Partner
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
 * Partner Class Doc Comment
 *
 * @category Class
 * @description Partner(id, company, country, region, city, address, created, bapp_company, bapp_user, name, vat_id, reg_com, sale_discount, purchase_discount, markup, category, sale_due_days, purchase_due_days, is_company, supplier, pays_vat, email, phone, data_access, agent, bank, iban, former_partner_id, extra, related_partner)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Partner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Partner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'vat_id' => 'string',
        'reg_com' => 'string',
        'sale_discount' => 'string',
        'purchase_discount' => 'string',
        'sale_due_days' => 'int',
        'purchase_due_days' => 'int',
        'is_company' => 'bool',
        'country' => 'string',
        'region' => 'int',
        'city' => 'int',
        'address' => 'string',
        'supplier' => 'bool',
        'email' => 'string',
        'phone' => 'string',
        'data_access' => 'string[]',
        'connected_company' => 'string',
        'agent' => 'string',
        'bank' => 'string',
        'iban' => 'string',
        'former_partner_id' => 'int',
        'balance_data' => 'string',
        'markup' => 'string',
        'category' => 'int',
        'pays_vat' => 'bool',
        'bapp_company_id' => 'string',
        'related_partner' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'vat_id' => null,
        'reg_com' => null,
        'sale_discount' => 'decimal',
        'purchase_discount' => 'decimal',
        'sale_due_days' => null,
        'purchase_due_days' => null,
        'is_company' => null,
        'country' => null,
        'region' => null,
        'city' => null,
        'address' => null,
        'supplier' => null,
        'email' => 'email',
        'phone' => null,
        'data_access' => null,
        'connected_company' => null,
        'agent' => 'uuid',
        'bank' => null,
        'iban' => null,
        'former_partner_id' => null,
        'balance_data' => null,
        'markup' => 'decimal',
        'category' => null,
        'pays_vat' => null,
        'bapp_company_id' => null,
        'related_partner' => null
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
        'name' => 'name',
        'vat_id' => 'vat_id',
        'reg_com' => 'reg_com',
        'sale_discount' => 'sale_discount',
        'purchase_discount' => 'purchase_discount',
        'sale_due_days' => 'sale_due_days',
        'purchase_due_days' => 'purchase_due_days',
        'is_company' => 'is_company',
        'country' => 'country',
        'region' => 'region',
        'city' => 'city',
        'address' => 'address',
        'supplier' => 'supplier',
        'email' => 'email',
        'phone' => 'phone',
        'data_access' => 'data_access',
        'connected_company' => 'connected_company',
        'agent' => 'agent',
        'bank' => 'bank',
        'iban' => 'iban',
        'former_partner_id' => 'former_partner_id',
        'balance_data' => 'balance_data',
        'markup' => 'markup',
        'category' => 'category',
        'pays_vat' => 'pays_vat',
        'bapp_company_id' => 'bapp_company_id',
        'related_partner' => 'related_partner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'vat_id' => 'setVatId',
        'reg_com' => 'setRegCom',
        'sale_discount' => 'setSaleDiscount',
        'purchase_discount' => 'setPurchaseDiscount',
        'sale_due_days' => 'setSaleDueDays',
        'purchase_due_days' => 'setPurchaseDueDays',
        'is_company' => 'setIsCompany',
        'country' => 'setCountry',
        'region' => 'setRegion',
        'city' => 'setCity',
        'address' => 'setAddress',
        'supplier' => 'setSupplier',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'data_access' => 'setDataAccess',
        'connected_company' => 'setConnectedCompany',
        'agent' => 'setAgent',
        'bank' => 'setBank',
        'iban' => 'setIban',
        'former_partner_id' => 'setFormerPartnerId',
        'balance_data' => 'setBalanceData',
        'markup' => 'setMarkup',
        'category' => 'setCategory',
        'pays_vat' => 'setPaysVat',
        'bapp_company_id' => 'setBappCompanyId',
        'related_partner' => 'setRelatedPartner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'vat_id' => 'getVatId',
        'reg_com' => 'getRegCom',
        'sale_discount' => 'getSaleDiscount',
        'purchase_discount' => 'getPurchaseDiscount',
        'sale_due_days' => 'getSaleDueDays',
        'purchase_due_days' => 'getPurchaseDueDays',
        'is_company' => 'getIsCompany',
        'country' => 'getCountry',
        'region' => 'getRegion',
        'city' => 'getCity',
        'address' => 'getAddress',
        'supplier' => 'getSupplier',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'data_access' => 'getDataAccess',
        'connected_company' => 'getConnectedCompany',
        'agent' => 'getAgent',
        'bank' => 'getBank',
        'iban' => 'getIban',
        'former_partner_id' => 'getFormerPartnerId',
        'balance_data' => 'getBalanceData',
        'markup' => 'getMarkup',
        'category' => 'getCategory',
        'pays_vat' => 'getPaysVat',
        'bapp_company_id' => 'getBappCompanyId',
        'related_partner' => 'getRelatedPartner'
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

    const DATA_ACCESS__0 = '0';
    const DATA_ACCESS__1 = '1';
    const DATA_ACCESS__2 = '2';
    const DATA_ACCESS__3 = '3';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataAccessAllowableValues()
    {
        return [
            self::DATA_ACCESS__0,
            self::DATA_ACCESS__1,
            self::DATA_ACCESS__2,
            self::DATA_ACCESS__3,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vat_id'] = isset($data['vat_id']) ? $data['vat_id'] : null;
        $this->container['reg_com'] = isset($data['reg_com']) ? $data['reg_com'] : null;
        $this->container['sale_discount'] = isset($data['sale_discount']) ? $data['sale_discount'] : null;
        $this->container['purchase_discount'] = isset($data['purchase_discount']) ? $data['purchase_discount'] : null;
        $this->container['sale_due_days'] = isset($data['sale_due_days']) ? $data['sale_due_days'] : null;
        $this->container['purchase_due_days'] = isset($data['purchase_due_days']) ? $data['purchase_due_days'] : null;
        $this->container['is_company'] = isset($data['is_company']) ? $data['is_company'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['data_access'] = isset($data['data_access']) ? $data['data_access'] : null;
        $this->container['connected_company'] = isset($data['connected_company']) ? $data['connected_company'] : null;
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['bank'] = isset($data['bank']) ? $data['bank'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['former_partner_id'] = isset($data['former_partner_id']) ? $data['former_partner_id'] : null;
        $this->container['balance_data'] = isset($data['balance_data']) ? $data['balance_data'] : null;
        $this->container['markup'] = isset($data['markup']) ? $data['markup'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['pays_vat'] = isset($data['pays_vat']) ? $data['pays_vat'] : null;
        $this->container['bapp_company_id'] = isset($data['bapp_company_id']) ? $data['bapp_company_id'] : null;
        $this->container['related_partner'] = isset($data['related_partner']) ? $data['related_partner'] : null;
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
        if ((mb_strlen($this->container['name']) > 200)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['vat_id']) && (mb_strlen($this->container['vat_id']) > 60)) {
            $invalidProperties[] = "invalid value for 'vat_id', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['reg_com']) && (mb_strlen($this->container['reg_com']) > 60)) {
            $invalidProperties[] = "invalid value for 'reg_com', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['sale_due_days']) && ($this->container['sale_due_days'] > 32767)) {
            $invalidProperties[] = "invalid value for 'sale_due_days', must be smaller than or equal to 32767.";
        }

        if (!is_null($this->container['sale_due_days']) && ($this->container['sale_due_days'] < 0)) {
            $invalidProperties[] = "invalid value for 'sale_due_days', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['purchase_due_days']) && ($this->container['purchase_due_days'] > 32767)) {
            $invalidProperties[] = "invalid value for 'purchase_due_days', must be smaller than or equal to 32767.";
        }

        if (!is_null($this->container['purchase_due_days']) && ($this->container['purchase_due_days'] < 0)) {
            $invalidProperties[] = "invalid value for 'purchase_due_days', must be bigger than or equal to 0.";
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ((mb_strlen($this->container['address']) > 200)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['address']) < 1)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 254)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 200)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['bank']) && (mb_strlen($this->container['bank']) > 100)) {
            $invalidProperties[] = "invalid value for 'bank', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['iban']) && (mb_strlen($this->container['iban']) > 29)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be smaller than or equal to 29.";
        }

        if (!is_null($this->container['former_partner_id']) && ($this->container['former_partner_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'former_partner_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['former_partner_id']) && ($this->container['former_partner_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'former_partner_id', must be bigger than or equal to 0.";
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
        if ((mb_strlen($name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Partner., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Partner., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets vat_id
     *
     * @return string
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     *
     * @param string $vat_id vat_id
     *
     * @return $this
     */
    public function setVatId($vat_id)
    {
        if (!is_null($vat_id) && (mb_strlen($vat_id) > 60)) {
            throw new \InvalidArgumentException('invalid length for $vat_id when calling Partner., must be smaller than or equal to 60.');
        }

        $this->container['vat_id'] = $vat_id;

        return $this;
    }

    /**
     * Gets reg_com
     *
     * @return string
     */
    public function getRegCom()
    {
        return $this->container['reg_com'];
    }

    /**
     * Sets reg_com
     *
     * @param string $reg_com reg_com
     *
     * @return $this
     */
    public function setRegCom($reg_com)
    {
        if (!is_null($reg_com) && (mb_strlen($reg_com) > 60)) {
            throw new \InvalidArgumentException('invalid length for $reg_com when calling Partner., must be smaller than or equal to 60.');
        }

        $this->container['reg_com'] = $reg_com;

        return $this;
    }

    /**
     * Gets sale_discount
     *
     * @return string
     */
    public function getSaleDiscount()
    {
        return $this->container['sale_discount'];
    }

    /**
     * Sets sale_discount
     *
     * @param string $sale_discount Reducere oferită acestui partener la cumpărarea de la dvs.
     *
     * @return $this
     */
    public function setSaleDiscount($sale_discount)
    {
        $this->container['sale_discount'] = $sale_discount;

        return $this;
    }

    /**
     * Gets purchase_discount
     *
     * @return string
     */
    public function getPurchaseDiscount()
    {
        return $this->container['purchase_discount'];
    }

    /**
     * Sets purchase_discount
     *
     * @param string $purchase_discount Reducere oferită de acest partener atunci când cumpărați de la el.
     *
     * @return $this
     */
    public function setPurchaseDiscount($purchase_discount)
    {
        $this->container['purchase_discount'] = $purchase_discount;

        return $this;
    }

    /**
     * Gets sale_due_days
     *
     * @return int
     */
    public function getSaleDueDays()
    {
        return $this->container['sale_due_days'];
    }

    /**
     * Sets sale_due_days
     *
     * @param int $sale_due_days Termenul limită pentru plățile oferite de dvs. către acest partener.
     *
     * @return $this
     */
    public function setSaleDueDays($sale_due_days)
    {

        if (!is_null($sale_due_days) && ($sale_due_days > 32767)) {
            throw new \InvalidArgumentException('invalid value for $sale_due_days when calling Partner., must be smaller than or equal to 32767.');
        }
        if (!is_null($sale_due_days) && ($sale_due_days < 0)) {
            throw new \InvalidArgumentException('invalid value for $sale_due_days when calling Partner., must be bigger than or equal to 0.');
        }

        $this->container['sale_due_days'] = $sale_due_days;

        return $this;
    }

    /**
     * Gets purchase_due_days
     *
     * @return int
     */
    public function getPurchaseDueDays()
    {
        return $this->container['purchase_due_days'];
    }

    /**
     * Sets purchase_due_days
     *
     * @param int $purchase_due_days Termenul limită pentru plățile oferite de acest partener.
     *
     * @return $this
     */
    public function setPurchaseDueDays($purchase_due_days)
    {

        if (!is_null($purchase_due_days) && ($purchase_due_days > 32767)) {
            throw new \InvalidArgumentException('invalid value for $purchase_due_days when calling Partner., must be smaller than or equal to 32767.');
        }
        if (!is_null($purchase_due_days) && ($purchase_due_days < 0)) {
            throw new \InvalidArgumentException('invalid value for $purchase_due_days when calling Partner., must be bigger than or equal to 0.');
        }

        $this->container['purchase_due_days'] = $purchase_due_days;

        return $this;
    }

    /**
     * Gets is_company
     *
     * @return bool
     */
    public function getIsCompany()
    {
        return $this->container['is_company'];
    }

    /**
     * Sets is_company
     *
     * @param bool $is_company is_company
     *
     * @return $this
     */
    public function setIsCompany($is_company)
    {
        $this->container['is_company'] = $is_company;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets region
     *
     * @return int
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param int $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets city
     *
     * @return int
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param int $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        if ((mb_strlen($address) > 200)) {
            throw new \InvalidArgumentException('invalid length for $address when calling Partner., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address when calling Partner., must be bigger than or equal to 1.');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return bool
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param bool $supplier supplier
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Partner., must be smaller than or equal to 254.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 200)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Partner., must be smaller than or equal to 200.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets data_access
     *
     * @return string[]
     */
    public function getDataAccess()
    {
        return $this->container['data_access'];
    }

    /**
     * Sets data_access
     *
     * @param string[] $data_access data_access
     *
     * @return $this
     */
    public function setDataAccess($data_access)
    {
        $allowedValues = $this->getDataAccessAllowableValues();
        if (!is_null($data_access) && array_diff($data_access, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'data_access', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_access'] = $data_access;

        return $this;
    }

    /**
     * Gets connected_company
     *
     * @return string
     */
    public function getConnectedCompany()
    {
        return $this->container['connected_company'];
    }

    /**
     * Sets connected_company
     *
     * @param string $connected_company connected_company
     *
     * @return $this
     */
    public function setConnectedCompany($connected_company)
    {
        $this->container['connected_company'] = $connected_company;

        return $this;
    }

    /**
     * Gets agent
     *
     * @return string
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param string $agent agent
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets bank
     *
     * @return string
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     *
     * @param string $bank bank
     *
     * @return $this
     */
    public function setBank($bank)
    {
        if (!is_null($bank) && (mb_strlen($bank) > 100)) {
            throw new \InvalidArgumentException('invalid length for $bank when calling Partner., must be smaller than or equal to 100.');
        }

        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban iban
     *
     * @return $this
     */
    public function setIban($iban)
    {
        if (!is_null($iban) && (mb_strlen($iban) > 29)) {
            throw new \InvalidArgumentException('invalid length for $iban when calling Partner., must be smaller than or equal to 29.');
        }

        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets former_partner_id
     *
     * @return int
     */
    public function getFormerPartnerId()
    {
        return $this->container['former_partner_id'];
    }

    /**
     * Sets former_partner_id
     *
     * @param int $former_partner_id former_partner_id
     *
     * @return $this
     */
    public function setFormerPartnerId($former_partner_id)
    {

        if (!is_null($former_partner_id) && ($former_partner_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $former_partner_id when calling Partner., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($former_partner_id) && ($former_partner_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $former_partner_id when calling Partner., must be bigger than or equal to 0.');
        }

        $this->container['former_partner_id'] = $former_partner_id;

        return $this;
    }

    /**
     * Gets balance_data
     *
     * @return string
     */
    public function getBalanceData()
    {
        return $this->container['balance_data'];
    }

    /**
     * Sets balance_data
     *
     * @param string $balance_data balance_data
     *
     * @return $this
     */
    public function setBalanceData($balance_data)
    {
        $this->container['balance_data'] = $balance_data;

        return $this;
    }

    /**
     * Gets markup
     *
     * @return string
     */
    public function getMarkup()
    {
        return $this->container['markup'];
    }

    /**
     * Sets markup
     *
     * @param string $markup Adaos la pretul de baza al produsului impus acestui partener.
     *
     * @return $this
     */
    public function setMarkup($markup)
    {
        $this->container['markup'] = $markup;

        return $this;
    }

    /**
     * Gets category
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param int $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets pays_vat
     *
     * @return bool
     */
    public function getPaysVat()
    {
        return $this->container['pays_vat'];
    }

    /**
     * Sets pays_vat
     *
     * @param bool $pays_vat pays_vat
     *
     * @return $this
     */
    public function setPaysVat($pays_vat)
    {
        $this->container['pays_vat'] = $pays_vat;

        return $this;
    }

    /**
     * Gets bapp_company_id
     *
     * @return string
     */
    public function getBappCompanyId()
    {
        return $this->container['bapp_company_id'];
    }

    /**
     * Sets bapp_company_id
     *
     * @param string $bapp_company_id bapp_company_id
     *
     * @return $this
     */
    public function setBappCompanyId($bapp_company_id)
    {
        $this->container['bapp_company_id'] = $bapp_company_id;

        return $this;
    }

    /**
     * Gets related_partner
     *
     * @return int
     */
    public function getRelatedPartner()
    {
        return $this->container['related_partner'];
    }

    /**
     * Sets related_partner
     *
     * @param int $related_partner related_partner
     *
     * @return $this
     */
    public function setRelatedPartner($related_partner)
    {
        $this->container['related_partner'] = $related_partner;

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


