<?php
/**
 * UserDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Apache OpenMeetings API
 *
 * Integration API enables to connect to an OpenMeetings instance, eg for generating users, create links to directly access conference rooms.<br/><br/>         <b>It is mainly designed for Server2Server integration, for example to integrate into your website, CMS or 3rd party application</b><br/><br/>         For examples how to use the Rest API see <a href=\"https://openmeetings.apache.org/RestAPISample.html\" target=\"_BLANK\">https://openmeetings.apache.org/RestAPISample.html</a>.<br/><br/>         Community contributed modules for using this API include for example:         <ul>          <li><a href=\"https://openmeetings.apache.org/RestAPISample.html#how-to-integrate-using-nodejs\" target=\"_BLANK\"> Node.js module for using API</a></li>         </ul>         Other community plugins using this API for Moodle, SugarCRM, Drupal, Joomla can be found in the Configuration>Plugins section at <a href=\"https://openmeetings.apache.org\" target=\"_BLANK\">https://openmeetings.apache.org</a>
 *
 * OpenAPI spec version: 7.0.0-SNAPSHOT
 * Contact: dev@openmeetings.apache.org
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.27
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
 * UserDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => '\Swagger\Client\Model\Address',
'external_id' => 'string',
'external_type' => 'string',
'firstname' => 'string',
'id' => 'int',
'language_id' => 'int',
'lastname' => 'string',
'login' => 'string',
'password' => 'string',
'picture_uri' => 'string',
'rights' => 'string[]',
'time_zone_id' => 'string',
'type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
'external_id' => null,
'external_type' => null,
'firstname' => null,
'id' => 'int64',
'language_id' => 'int64',
'lastname' => null,
'login' => null,
'password' => null,
'picture_uri' => null,
'rights' => null,
'time_zone_id' => null,
'type' => null    ];

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
        'address' => 'address',
'external_id' => 'externalId',
'external_type' => 'externalType',
'firstname' => 'firstname',
'id' => 'id',
'language_id' => 'languageId',
'lastname' => 'lastname',
'login' => 'login',
'password' => 'password',
'picture_uri' => 'pictureUri',
'rights' => 'rights',
'time_zone_id' => 'timeZoneId',
'type' => 'type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
'external_id' => 'setExternalId',
'external_type' => 'setExternalType',
'firstname' => 'setFirstname',
'id' => 'setId',
'language_id' => 'setLanguageId',
'lastname' => 'setLastname',
'login' => 'setLogin',
'password' => 'setPassword',
'picture_uri' => 'setPictureUri',
'rights' => 'setRights',
'time_zone_id' => 'setTimeZoneId',
'type' => 'setType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
'external_id' => 'getExternalId',
'external_type' => 'getExternalType',
'firstname' => 'getFirstname',
'id' => 'getId',
'language_id' => 'getLanguageId',
'lastname' => 'getLastname',
'login' => 'getLogin',
'password' => 'getPassword',
'picture_uri' => 'getPictureUri',
'rights' => 'getRights',
'time_zone_id' => 'getTimeZoneId',
'type' => 'getType'    ];

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

    const RIGHTS_ADMIN = 'ADMIN';
const RIGHTS_GROUP_ADMIN = 'GROUP_ADMIN';
const RIGHTS_ADMIN_CONFIG = 'ADMIN_CONFIG';
const RIGHTS_ADMIN_CONNECTIONS = 'ADMIN_CONNECTIONS';
const RIGHTS_ADMIN_BACKUP = 'ADMIN_BACKUP';
const RIGHTS_ADMIN_LABEL = 'ADMIN_LABEL';
const RIGHTS_ROOM = 'ROOM';
const RIGHTS_DASHBOARD = 'DASHBOARD';
const RIGHTS_LOGIN = 'LOGIN';
const RIGHTS_SOAP = 'SOAP';
const TYPE_USER = 'USER';
const TYPE_LDAP = 'LDAP';
const TYPE_OAUTH = 'OAUTH';
const TYPE_EXTERNAL = 'EXTERNAL';
const TYPE_CONTACT = 'CONTACT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRightsAllowableValues()
    {
        return [
            self::RIGHTS_ADMIN,
self::RIGHTS_GROUP_ADMIN,
self::RIGHTS_ADMIN_CONFIG,
self::RIGHTS_ADMIN_CONNECTIONS,
self::RIGHTS_ADMIN_BACKUP,
self::RIGHTS_ADMIN_LABEL,
self::RIGHTS_ROOM,
self::RIGHTS_DASHBOARD,
self::RIGHTS_LOGIN,
self::RIGHTS_SOAP,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_USER,
self::TYPE_LDAP,
self::TYPE_OAUTH,
self::TYPE_EXTERNAL,
self::TYPE_CONTACT,        ];
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['external_type'] = isset($data['external_type']) ? $data['external_type'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['language_id'] = isset($data['language_id']) ? $data['language_id'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['picture_uri'] = isset($data['picture_uri']) ? $data['picture_uri'] : null;
        $this->container['rights'] = isset($data['rights']) ? $data['rights'] : null;
        $this->container['time_zone_id'] = isset($data['time_zone_id']) ? $data['time_zone_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets address
     *
     * @return \Swagger\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external_id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets external_type
     *
     * @return string
     */
    public function getExternalType()
    {
        return $this->container['external_type'];
    }

    /**
     * Sets external_type
     *
     * @param string $external_type external_type
     *
     * @return $this
     */
    public function setExternalType($external_type)
    {
        $this->container['external_type'] = $external_type;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
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
     * Gets language_id
     *
     * @return int
     */
    public function getLanguageId()
    {
        return $this->container['language_id'];
    }

    /**
     * Sets language_id
     *
     * @param int $language_id language_id
     *
     * @return $this
     */
    public function setLanguageId($language_id)
    {
        $this->container['language_id'] = $language_id;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string $login login
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets picture_uri
     *
     * @return string
     */
    public function getPictureUri()
    {
        return $this->container['picture_uri'];
    }

    /**
     * Sets picture_uri
     *
     * @param string $picture_uri picture_uri
     *
     * @return $this
     */
    public function setPictureUri($picture_uri)
    {
        $this->container['picture_uri'] = $picture_uri;

        return $this;
    }

    /**
     * Gets rights
     *
     * @return string[]
     */
    public function getRights()
    {
        return $this->container['rights'];
    }

    /**
     * Sets rights
     *
     * @param string[] $rights rights
     *
     * @return $this
     */
    public function setRights($rights)
    {
        $allowedValues = $this->getRightsAllowableValues();
        if (!is_null($rights) && array_diff($rights, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rights', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rights'] = $rights;

        return $this;
    }

    /**
     * Gets time_zone_id
     *
     * @return string
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param string $time_zone_id time_zone_id
     *
     * @return $this
     */
    public function setTimeZoneId($time_zone_id)
    {
        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
