<?php
/**
 * OrderStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Sales
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sales API
 *
 * ConnectWise Sales API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Sales\Model;

use \ArrayAccess;

/**
 * OrderStatus Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Sales
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderStatus implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'default_flag' => 'bool',
        'inactive_flag' => 'bool',
        'sort_order' => 'int',
        'closed_flag' => 'bool',
        '_info' => '\Spinen\ConnectWise\Clients\Sales\Model\Metadata'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'default_flag' => 'defaultFlag',
        'inactive_flag' => 'inactiveFlag',
        'sort_order' => 'sortOrder',
        'closed_flag' => 'closedFlag',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'default_flag' => 'setDefaultFlag',
        'inactive_flag' => 'setInactiveFlag',
        'sort_order' => 'setSortOrder',
        'closed_flag' => 'setClosedFlag',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'default_flag' => 'getDefaultFlag',
        'inactive_flag' => 'getInactiveFlag',
        'sort_order' => 'getSortOrder',
        'closed_flag' => 'getClosedFlag',
        '_info' => 'getInfo'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['default_flag'] = isset($data['default_flag']) ? $data['default_flag'] : null;
        $this->container['inactive_flag'] = isset($data['inactive_flag']) ? $data['inactive_flag'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['closed_flag'] = isset($data['closed_flag']) ? $data['closed_flag'] : null;
        $this->container['_info'] = isset($data['_info']) ? $data['_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 50)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['name'] === null) {
            return false;
        }
        if (strlen($this->container['name']) > 50) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling OrderStatus., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets default_flag
     * @return bool
     */
    public function getDefaultFlag()
    {
        return $this->container['default_flag'];
    }

    /**
     * Sets default_flag
     * @param bool $default_flag
     * @return $this
     */
    public function setDefaultFlag($default_flag)
    {
        $this->container['default_flag'] = $default_flag;

        return $this;
    }

    /**
     * Gets inactive_flag
     * @return bool
     */
    public function getInactiveFlag()
    {
        return $this->container['inactive_flag'];
    }

    /**
     * Sets inactive_flag
     * @param bool $inactive_flag
     * @return $this
     */
    public function setInactiveFlag($inactive_flag)
    {
        $this->container['inactive_flag'] = $inactive_flag;

        return $this;
    }

    /**
     * Gets sort_order
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     * @param int $sort_order
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets closed_flag
     * @return bool
     */
    public function getClosedFlag()
    {
        return $this->container['closed_flag'];
    }

    /**
     * Sets closed_flag
     * @param bool $closed_flag
     * @return $this
     */
    public function setClosedFlag($closed_flag)
    {
        $this->container['closed_flag'] = $closed_flag;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Sales\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Sales\Model\Metadata $_info Metadata of the entity
     * @return $this
     */
    public function setInfo($_info)
    {
        $this->container['_info'] = $_info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Spinen\ConnectWise\Clients\Sales\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Sales\ObjectSerializer::sanitizeForSerialization($this));
    }
}


