<?php
/**
 * OpportunityContact
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
 * OpportunityContact Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Sales
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OpportunityContact implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OpportunityContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'contact' => '\Spinen\ConnectWise\Clients\Sales\Model\ContactReference',
        'company' => '\Spinen\ConnectWise\Clients\Sales\Model\CompanyReference',
        'role' => '\Spinen\ConnectWise\Clients\Sales\Model\OpportunitySalesRoleReference',
        'notes' => 'string',
        'referral_flag' => 'bool',
        'opportunity_id' => 'int',
        'phone_number' => 'string',
        'email_address' => 'string',
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
        'contact' => 'contact',
        'company' => 'company',
        'role' => 'role',
        'notes' => 'notes',
        'referral_flag' => 'referralFlag',
        'opportunity_id' => 'opportunityId',
        'phone_number' => 'phoneNumber',
        'email_address' => 'emailAddress',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'contact' => 'setContact',
        'company' => 'setCompany',
        'role' => 'setRole',
        'notes' => 'setNotes',
        'referral_flag' => 'setReferralFlag',
        'opportunity_id' => 'setOpportunityId',
        'phone_number' => 'setPhoneNumber',
        'email_address' => 'setEmailAddress',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'contact' => 'getContact',
        'company' => 'getCompany',
        'role' => 'getRole',
        'notes' => 'getNotes',
        'referral_flag' => 'getReferralFlag',
        'opportunity_id' => 'getOpportunityId',
        'phone_number' => 'getPhoneNumber',
        'email_address' => 'getEmailAddress',
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
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['referral_flag'] = isset($data['referral_flag']) ? $data['referral_flag'] : null;
        $this->container['opportunity_id'] = isset($data['opportunity_id']) ? $data['opportunity_id'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
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
        if ($this->container['contact'] === null) {
            $invalid_properties[] = "'contact' can't be null";
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
        if ($this->container['contact'] === null) {
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
     * Gets contact
     * @return \Spinen\ConnectWise\Clients\Sales\Model\ContactReference
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param \Spinen\ConnectWise\Clients\Sales\Model\ContactReference $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets company
     * @return \Spinen\ConnectWise\Clients\Sales\Model\CompanyReference
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param \Spinen\ConnectWise\Clients\Sales\Model\CompanyReference $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets role
     * @return \Spinen\ConnectWise\Clients\Sales\Model\OpportunitySalesRoleReference
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param \Spinen\ConnectWise\Clients\Sales\Model\OpportunitySalesRoleReference $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets referral_flag
     * @return bool
     */
    public function getReferralFlag()
    {
        return $this->container['referral_flag'];
    }

    /**
     * Sets referral_flag
     * @param bool $referral_flag
     * @return $this
     */
    public function setReferralFlag($referral_flag)
    {
        $this->container['referral_flag'] = $referral_flag;

        return $this;
    }

    /**
     * Gets opportunity_id
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->container['opportunity_id'];
    }

    /**
     * Sets opportunity_id
     * @param int $opportunity_id
     * @return $this
     */
    public function setOpportunityId($opportunity_id)
    {
        $this->container['opportunity_id'] = $opportunity_id;

        return $this;
    }

    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     * @param string $phone_number
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets email_address
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     * @param string $email_address
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

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


