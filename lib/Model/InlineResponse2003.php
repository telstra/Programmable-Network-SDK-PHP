<?php
/**
 * InlineResponse2003
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
 * InlineResponse2003 Class Doc Comment
 *
 * @category Class
 * @package  tpn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse2003 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'compute_hostname' => 'string',
        'customeruuid' => 'string',
        'datacenteruuid' => 'string',
        'flavoruuid' => 'int',
        'floating_ip' => 'string',
        'imageuuid' => 'int',
        'instance_uuid' => 'string',
        'status' => 'string',
        'vnfuuid' => 'string',
        'vportcount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'compute_hostname' => null,
        'customeruuid' => null,
        'datacenteruuid' => null,
        'flavoruuid' => 'int32',
        'floating_ip' => null,
        'imageuuid' => 'int32',
        'instance_uuid' => null,
        'status' => null,
        'vnfuuid' => null,
        'vportcount' => 'int32'
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
        'compute_hostname' => 'compute_hostname',
        'customeruuid' => 'customeruuid',
        'datacenteruuid' => 'datacenteruuid',
        'flavoruuid' => 'flavoruuid',
        'floating_ip' => 'floating_ip',
        'imageuuid' => 'imageuuid',
        'instance_uuid' => 'instance_uuid',
        'status' => 'status',
        'vnfuuid' => 'vnfuuid',
        'vportcount' => 'vportcount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compute_hostname' => 'setComputeHostname',
        'customeruuid' => 'setCustomeruuid',
        'datacenteruuid' => 'setDatacenteruuid',
        'flavoruuid' => 'setFlavoruuid',
        'floating_ip' => 'setFloatingIp',
        'imageuuid' => 'setImageuuid',
        'instance_uuid' => 'setInstanceUuid',
        'status' => 'setStatus',
        'vnfuuid' => 'setVnfuuid',
        'vportcount' => 'setVportcount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compute_hostname' => 'getComputeHostname',
        'customeruuid' => 'getCustomeruuid',
        'datacenteruuid' => 'getDatacenteruuid',
        'flavoruuid' => 'getFlavoruuid',
        'floating_ip' => 'getFloatingIp',
        'imageuuid' => 'getImageuuid',
        'instance_uuid' => 'getInstanceUuid',
        'status' => 'getStatus',
        'vnfuuid' => 'getVnfuuid',
        'vportcount' => 'getVportcount'
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
        $this->container['compute_hostname'] = isset($data['compute_hostname']) ? $data['compute_hostname'] : null;
        $this->container['customeruuid'] = isset($data['customeruuid']) ? $data['customeruuid'] : null;
        $this->container['datacenteruuid'] = isset($data['datacenteruuid']) ? $data['datacenteruuid'] : null;
        $this->container['flavoruuid'] = isset($data['flavoruuid']) ? $data['flavoruuid'] : null;
        $this->container['floating_ip'] = isset($data['floating_ip']) ? $data['floating_ip'] : null;
        $this->container['imageuuid'] = isset($data['imageuuid']) ? $data['imageuuid'] : null;
        $this->container['instance_uuid'] = isset($data['instance_uuid']) ? $data['instance_uuid'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vnfuuid'] = isset($data['vnfuuid']) ? $data['vnfuuid'] : null;
        $this->container['vportcount'] = isset($data['vportcount']) ? $data['vportcount'] : null;
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
     * Gets compute_hostname
     *
     * @return string|null
     */
    public function getComputeHostname()
    {
        return $this->container['compute_hostname'];
    }

    /**
     * Sets compute_hostname
     *
     * @param string|null $compute_hostname compute_hostname
     *
     * @return $this
     */
    public function setComputeHostname($compute_hostname)
    {
        $this->container['compute_hostname'] = $compute_hostname;

        return $this;
    }

    /**
     * Gets customeruuid
     *
     * @return string|null
     */
    public function getCustomeruuid()
    {
        return $this->container['customeruuid'];
    }

    /**
     * Sets customeruuid
     *
     * @param string|null $customeruuid customeruuid
     *
     * @return $this
     */
    public function setCustomeruuid($customeruuid)
    {
        $this->container['customeruuid'] = $customeruuid;

        return $this;
    }

    /**
     * Gets datacenteruuid
     *
     * @return string|null
     */
    public function getDatacenteruuid()
    {
        return $this->container['datacenteruuid'];
    }

    /**
     * Sets datacenteruuid
     *
     * @param string|null $datacenteruuid datacenteruuid
     *
     * @return $this
     */
    public function setDatacenteruuid($datacenteruuid)
    {
        $this->container['datacenteruuid'] = $datacenteruuid;

        return $this;
    }

    /**
     * Gets flavoruuid
     *
     * @return int|null
     */
    public function getFlavoruuid()
    {
        return $this->container['flavoruuid'];
    }

    /**
     * Sets flavoruuid
     *
     * @param int|null $flavoruuid flavoruuid
     *
     * @return $this
     */
    public function setFlavoruuid($flavoruuid)
    {
        $this->container['flavoruuid'] = $flavoruuid;

        return $this;
    }

    /**
     * Gets floating_ip
     *
     * @return string|null
     */
    public function getFloatingIp()
    {
        return $this->container['floating_ip'];
    }

    /**
     * Sets floating_ip
     *
     * @param string|null $floating_ip floating_ip
     *
     * @return $this
     */
    public function setFloatingIp($floating_ip)
    {
        $this->container['floating_ip'] = $floating_ip;

        return $this;
    }

    /**
     * Gets imageuuid
     *
     * @return int|null
     */
    public function getImageuuid()
    {
        return $this->container['imageuuid'];
    }

    /**
     * Sets imageuuid
     *
     * @param int|null $imageuuid imageuuid
     *
     * @return $this
     */
    public function setImageuuid($imageuuid)
    {
        $this->container['imageuuid'] = $imageuuid;

        return $this;
    }

    /**
     * Gets instance_uuid
     *
     * @return string|null
     */
    public function getInstanceUuid()
    {
        return $this->container['instance_uuid'];
    }

    /**
     * Sets instance_uuid
     *
     * @param string|null $instance_uuid instance_uuid
     *
     * @return $this
     */
    public function setInstanceUuid($instance_uuid)
    {
        $this->container['instance_uuid'] = $instance_uuid;

        return $this;
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
     * Gets vnfuuid
     *
     * @return string|null
     */
    public function getVnfuuid()
    {
        return $this->container['vnfuuid'];
    }

    /**
     * Sets vnfuuid
     *
     * @param string|null $vnfuuid vnfuuid
     *
     * @return $this
     */
    public function setVnfuuid($vnfuuid)
    {
        $this->container['vnfuuid'] = $vnfuuid;

        return $this;
    }

    /**
     * Gets vportcount
     *
     * @return int|null
     */
    public function getVportcount()
    {
        return $this->container['vportcount'];
    }

    /**
     * Sets vportcount
     *
     * @param int|null $vportcount vportcount
     *
     * @return $this
     */
    public function setVportcount($vportcount)
    {
        $this->container['vportcount'] = $vportcount;

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


