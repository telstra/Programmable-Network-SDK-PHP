<?php
/**
 * Topology
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
 * Topology Class Doc Comment
 *
 * @category Class
 * @package  tpn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Topology implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'topology';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'name' => 'string',
        'description' => 'string',
        'status' => 'string',
        'customer_uuid' => 'string',
        'nsd_uuid' => 'string',
        'guid_topology_id' => 'string',
        'created_by' => 'string',
        'creation_date' => 'int',
        'deletion_date' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'uuid' => null,
        'name' => null,
        'description' => null,
        'status' => null,
        'customer_uuid' => null,
        'nsd_uuid' => null,
        'guid_topology_id' => null,
        'created_by' => null,
        'creation_date' => 'int32',
        'deletion_date' => 'int32'
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
        'uuid' => 'uuid',
        'name' => 'name',
        'description' => 'description',
        'status' => 'status',
        'customer_uuid' => 'customer_uuid',
        'nsd_uuid' => 'nsd_uuid',
        'guid_topology_id' => 'guid_topology_id',
        'created_by' => 'created_by',
        'creation_date' => 'creation_date',
        'deletion_date' => 'deletion_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'name' => 'setName',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'customer_uuid' => 'setCustomerUuid',
        'nsd_uuid' => 'setNsdUuid',
        'guid_topology_id' => 'setGuidTopologyId',
        'created_by' => 'setCreatedBy',
        'creation_date' => 'setCreationDate',
        'deletion_date' => 'setDeletionDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'name' => 'getName',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'customer_uuid' => 'getCustomerUuid',
        'nsd_uuid' => 'getNsdUuid',
        'guid_topology_id' => 'getGuidTopologyId',
        'created_by' => 'getCreatedBy',
        'creation_date' => 'getCreationDate',
        'deletion_date' => 'getDeletionDate'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['customer_uuid'] = isset($data['customer_uuid']) ? $data['customer_uuid'] : null;
        $this->container['nsd_uuid'] = isset($data['nsd_uuid']) ? $data['nsd_uuid'] : null;
        $this->container['guid_topology_id'] = isset($data['guid_topology_id']) ? $data['guid_topology_id'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['deletion_date'] = isset($data['deletion_date']) ? $data['deletion_date'] : null;
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
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets customer_uuid
     *
     * @return string|null
     */
    public function getCustomerUuid()
    {
        return $this->container['customer_uuid'];
    }

    /**
     * Sets customer_uuid
     *
     * @param string|null $customer_uuid customer_uuid
     *
     * @return $this
     */
    public function setCustomerUuid($customer_uuid)
    {
        $this->container['customer_uuid'] = $customer_uuid;

        return $this;
    }

    /**
     * Gets nsd_uuid
     *
     * @return string|null
     */
    public function getNsdUuid()
    {
        return $this->container['nsd_uuid'];
    }

    /**
     * Sets nsd_uuid
     *
     * @param string|null $nsd_uuid no longer used
     *
     * @return $this
     */
    public function setNsdUuid($nsd_uuid)
    {
        $this->container['nsd_uuid'] = $nsd_uuid;

        return $this;
    }

    /**
     * Gets guid_topology_id
     *
     * @return string|null
     */
    public function getGuidTopologyId()
    {
        return $this->container['guid_topology_id'];
    }

    /**
     * Sets guid_topology_id
     *
     * @param string|null $guid_topology_id guid_topology_id
     *
     * @return $this
     */
    public function setGuidTopologyId($guid_topology_id)
    {
        $this->container['guid_topology_id'] = $guid_topology_id;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return int|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param int|null $creation_date creation_date
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets deletion_date
     *
     * @return int|null
     */
    public function getDeletionDate()
    {
        return $this->container['deletion_date'];
    }

    /**
     * Sets deletion_date
     *
     * @param int|null $deletion_date deletion_date
     *
     * @return $this
     */
    public function setDeletionDate($deletion_date)
    {
        $this->container['deletion_date'] = $deletion_date;

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


