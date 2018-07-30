<?php
/**
 * Vport
 *
 * PHP version 5
 *
 * @category Class
 * @package  tpn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Telstra Programmable Network API
 *
 * Telstra Programmable Network is a self-provisioning platform that allows its users to create on-demand connectivity services between multiple end-points and add various network functions to those services. Programmable Network enables to connectivity to a global ecosystem of networking services as well as public and private cloud services. Once you are connected to the platform on one or more POPs (points of presence), you can start creating those services based on the use case that you want to accomplish. The Programmable Network API is available to all customers who have registered to use the Programmable Network. To register, please contact your account representative.
 *
 * OpenAPI spec version: 2.4.2
 * Contact: pnapi-support@team.telstra.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.1.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace tpn\Model;

use \ArrayAccess;
use \tpn\ObjectSerializer;

/**
 * Vport Class Doc Comment
 *
 * @category Class
 * @package  tpn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Vport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'vport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'bandwidth' => 'int',
        'interfacesequence' => 'int',
        'vporttype' => 'string',
        'vportuuid' => 'string',
        'vportvalue' => '\tpn\Model\RegvportrequestVportvalue'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'status' => null,
        'bandwidth' => 'int32',
        'interfacesequence' => 'int32',
        'vporttype' => null,
        'vportuuid' => null,
        'vportvalue' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'bandwidth' => 'bandwidth',
        'interfacesequence' => 'interfacesequence',
        'vporttype' => 'vporttype',
        'vportuuid' => 'vportuuid',
        'vportvalue' => 'vportvalue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'bandwidth' => 'setBandwidth',
        'interfacesequence' => 'setInterfacesequence',
        'vporttype' => 'setVporttype',
        'vportuuid' => 'setVportuuid',
        'vportvalue' => 'setVportvalue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'bandwidth' => 'getBandwidth',
        'interfacesequence' => 'getInterfacesequence',
        'vporttype' => 'getVporttype',
        'vportuuid' => 'getVportuuid',
        'vportvalue' => 'getVportvalue'
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
        return self::$openAPIModelName;
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['interfacesequence'] = isset($data['interfacesequence']) ? $data['interfacesequence'] : null;
        $this->container['vporttype'] = isset($data['vporttype']) ? $data['vporttype'] : null;
        $this->container['vportuuid'] = isset($data['vportuuid']) ? $data['vportuuid'] : null;
        $this->container['vportvalue'] = isset($data['vportvalue']) ? $data['vportvalue'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets bandwidth
     *
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
     * Sets bandwidth
     *
     * @param int|null $bandwidth bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * Gets interfacesequence
     *
     * @return int|null
     */
    public function getInterfacesequence()
    {
        return $this->container['interfacesequence'];
    }

    /**
     * Sets interfacesequence
     *
     * @param int|null $interfacesequence interfacesequence
     *
     * @return $this
     */
    public function setInterfacesequence($interfacesequence)
    {
        $this->container['interfacesequence'] = $interfacesequence;

        return $this;
    }

    /**
     * Gets vporttype
     *
     * @return string|null
     */
    public function getVporttype()
    {
        return $this->container['vporttype'];
    }

    /**
     * Sets vporttype
     *
     * @param string|null $vporttype vporttype
     *
     * @return $this
     */
    public function setVporttype($vporttype)
    {
        $this->container['vporttype'] = $vporttype;

        return $this;
    }

    /**
     * Gets vportuuid
     *
     * @return string|null
     */
    public function getVportuuid()
    {
        return $this->container['vportuuid'];
    }

    /**
     * Sets vportuuid
     *
     * @param string|null $vportuuid vportuuid
     *
     * @return $this
     */
    public function setVportuuid($vportuuid)
    {
        $this->container['vportuuid'] = $vportuuid;

        return $this;
    }

    /**
     * Gets vportvalue
     *
     * @return \tpn\Model\RegvportrequestVportvalue|null
     */
    public function getVportvalue()
    {
        return $this->container['vportvalue'];
    }

    /**
     * Sets vportvalue
     *
     * @param \tpn\Model\RegvportrequestVportvalue|null $vportvalue vportvalue
     *
     * @return $this
     */
    public function setVportvalue($vportvalue)
    {
        $this->container['vportvalue'] = $vportvalue;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

