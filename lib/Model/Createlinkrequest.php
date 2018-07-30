<?php
/**
 * Createlinkrequest
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
 * Createlinkrequest Class Doc Comment
 *
 * @category Class
 * @package  tpn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Createlinkrequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createlinkrequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billing_id' => 'string',
        'description' => 'string',
        'connections' => '\tpn\Model\Connections',
        'tag' => 'string',
        'latency' => 'int',
        'duration' => 'int',
        'bandwidth' => 'int',
        'renewal_option' => 'int',
        'link_type' => 'int',
        'topology_tag_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'billing_id' => null,
        'description' => null,
        'connections' => null,
        'tag' => null,
        'latency' => 'int32',
        'duration' => 'int32',
        'bandwidth' => 'int32',
        'renewal_option' => 'int32',
        'link_type' => 'int32',
        'topology_tag_uuid' => null
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
        'billing_id' => 'billing-id',
        'description' => 'description',
        'connections' => 'connections',
        'tag' => 'tag',
        'latency' => 'latency',
        'duration' => 'duration',
        'bandwidth' => 'bandwidth',
        'renewal_option' => 'renewal-option',
        'link_type' => 'link-type',
        'topology_tag_uuid' => 'topology_tag_uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_id' => 'setBillingId',
        'description' => 'setDescription',
        'connections' => 'setConnections',
        'tag' => 'setTag',
        'latency' => 'setLatency',
        'duration' => 'setDuration',
        'bandwidth' => 'setBandwidth',
        'renewal_option' => 'setRenewalOption',
        'link_type' => 'setLinkType',
        'topology_tag_uuid' => 'setTopologyTagUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_id' => 'getBillingId',
        'description' => 'getDescription',
        'connections' => 'getConnections',
        'tag' => 'getTag',
        'latency' => 'getLatency',
        'duration' => 'getDuration',
        'bandwidth' => 'getBandwidth',
        'renewal_option' => 'getRenewalOption',
        'link_type' => 'getLinkType',
        'topology_tag_uuid' => 'getTopologyTagUuid'
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
        $this->container['billing_id'] = isset($data['billing_id']) ? $data['billing_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['connections'] = isset($data['connections']) ? $data['connections'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['latency'] = isset($data['latency']) ? $data['latency'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['renewal_option'] = isset($data['renewal_option']) ? $data['renewal_option'] : null;
        $this->container['link_type'] = isset($data['link_type']) ? $data['link_type'] : null;
        $this->container['topology_tag_uuid'] = isset($data['topology_tag_uuid']) ? $data['topology_tag_uuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['duration']) && ($this->container['duration'] < 3600)) {
            $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 3600.";
        }

        if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 10000000)) {
            $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 10000000.";
        }

        if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 1000)) {
            $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 1000.";
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
     * Gets billing_id
     *
     * @return string|null
     */
    public function getBillingId()
    {
        return $this->container['billing_id'];
    }

    /**
     * Sets billing_id
     *
     * @param string|null $billing_id billing_id
     *
     * @return $this
     */
    public function setBillingId($billing_id)
    {
        $this->container['billing_id'] = $billing_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets connections
     *
     * @return \tpn\Model\Connections|null
     */
    public function getConnections()
    {
        return $this->container['connections'];
    }

    /**
     * Sets connections
     *
     * @param \tpn\Model\Connections|null $connections connections
     *
     * @return $this
     */
    public function setConnections($connections)
    {
        $this->container['connections'] = $connections;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string|null $tag tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets latency
     *
     * @return int|null
     */
    public function getLatency()
    {
        return $this->container['latency'];
    }

    /**
     * Sets latency
     *
     * @param int|null $latency Latency: 0=Low, 1=Standard, 2=Best Effort
     *
     * @return $this
     */
    public function setLatency($latency)
    {
        $this->container['latency'] = $latency;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration Duration of contract in minutes
     *
     * @return $this
     */
    public function setDuration($duration)
    {

        if (!is_null($duration) && ($duration < 3600)) {
            throw new \InvalidArgumentException('invalid value for $duration when calling Createlinkrequest., must be bigger than or equal to 3600.');
        }

        $this->container['duration'] = $duration;

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
     * @param int|null $bandwidth Bandwidth in kB/s
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {

        if (!is_null($bandwidth) && ($bandwidth > 10000000)) {
            throw new \InvalidArgumentException('invalid value for $bandwidth when calling Createlinkrequest., must be smaller than or equal to 10000000.');
        }
        if (!is_null($bandwidth) && ($bandwidth < 1000)) {
            throw new \InvalidArgumentException('invalid value for $bandwidth when calling Createlinkrequest., must be bigger than or equal to 1000.');
        }

        $this->container['bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * Gets renewal_option
     *
     * @return int|null
     */
    public function getRenewalOption()
    {
        return $this->container['renewal_option'];
    }

    /**
     * Sets renewal_option
     *
     * @param int|null $renewal_option \"Renewal Option: 0=Auto Disconnect, 1=Auto Renew, 2=Pay per hour\"
     *
     * @return $this
     */
    public function setRenewalOption($renewal_option)
    {
        $this->container['renewal_option'] = $renewal_option;

        return $this;
    }

    /**
     * Gets link_type
     *
     * @return int|null
     */
    public function getLinkType()
    {
        return $this->container['link_type'];
    }

    /**
     * Sets link_type
     *
     * @param int|null $link_type 1=VLAN, 2=VNF
     *
     * @return $this
     */
    public function setLinkType($link_type)
    {
        $this->container['link_type'] = $link_type;

        return $this;
    }

    /**
     * Gets topology_tag_uuid
     *
     * @return string|null
     */
    public function getTopologyTagUuid()
    {
        return $this->container['topology_tag_uuid'];
    }

    /**
     * Sets topology_tag_uuid
     *
     * @param string|null $topology_tag_uuid topology_tag_uuid
     *
     * @return $this
     */
    public function setTopologyTagUuid($topology_tag_uuid)
    {
        $this->container['topology_tag_uuid'] = $topology_tag_uuid;

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

