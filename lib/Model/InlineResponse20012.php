<?php
/**
 * InlineResponse20012
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
 * InlineResponse20012 Class Doc Comment
 *
 * @category Class
 * @package  tpn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20012 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_12';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'is_provider' => 'bool',
        'visit_card_uuid' => 'string',
        'is_public' => 'bool',
        'pops' => 'string[]',
        'pending_requests_count' => 'int',
        'approved_requests_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'uuid' => null,
        'is_provider' => null,
        'visit_card_uuid' => null,
        'is_public' => null,
        'pops' => null,
        'pending_requests_count' => 'int32',
        'approved_requests_count' => 'int32'
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
        'is_provider' => 'is_provider',
        'visit_card_uuid' => 'visit_card_uuid',
        'is_public' => 'is_public',
        'pops' => 'pops',
        'pending_requests_count' => 'pending_requests_count',
        'approved_requests_count' => 'approved_requests_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'is_provider' => 'setIsProvider',
        'visit_card_uuid' => 'setVisitCardUuid',
        'is_public' => 'setIsPublic',
        'pops' => 'setPops',
        'pending_requests_count' => 'setPendingRequestsCount',
        'approved_requests_count' => 'setApprovedRequestsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'is_provider' => 'getIsProvider',
        'visit_card_uuid' => 'getVisitCardUuid',
        'is_public' => 'getIsPublic',
        'pops' => 'getPops',
        'pending_requests_count' => 'getPendingRequestsCount',
        'approved_requests_count' => 'getApprovedRequestsCount'
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
        $this->container['is_provider'] = isset($data['is_provider']) ? $data['is_provider'] : null;
        $this->container['visit_card_uuid'] = isset($data['visit_card_uuid']) ? $data['visit_card_uuid'] : null;
        $this->container['is_public'] = isset($data['is_public']) ? $data['is_public'] : null;
        $this->container['pops'] = isset($data['pops']) ? $data['pops'] : null;
        $this->container['pending_requests_count'] = isset($data['pending_requests_count']) ? $data['pending_requests_count'] : null;
        $this->container['approved_requests_count'] = isset($data['approved_requests_count']) ? $data['approved_requests_count'] : null;
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
     * Gets is_provider
     *
     * @return bool|null
     */
    public function getIsProvider()
    {
        return $this->container['is_provider'];
    }

    /**
     * Sets is_provider
     *
     * @param bool|null $is_provider is_provider
     *
     * @return $this
     */
    public function setIsProvider($is_provider)
    {
        $this->container['is_provider'] = $is_provider;

        return $this;
    }

    /**
     * Gets visit_card_uuid
     *
     * @return string|null
     */
    public function getVisitCardUuid()
    {
        return $this->container['visit_card_uuid'];
    }

    /**
     * Sets visit_card_uuid
     *
     * @param string|null $visit_card_uuid visit_card_uuid
     *
     * @return $this
     */
    public function setVisitCardUuid($visit_card_uuid)
    {
        $this->container['visit_card_uuid'] = $visit_card_uuid;

        return $this;
    }

    /**
     * Gets is_public
     *
     * @return bool|null
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param bool|null $is_public is_public
     *
     * @return $this
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets pops
     *
     * @return string[]|null
     */
    public function getPops()
    {
        return $this->container['pops'];
    }

    /**
     * Sets pops
     *
     * @param string[]|null $pops XXX fix me
     *
     * @return $this
     */
    public function setPops($pops)
    {
        $this->container['pops'] = $pops;

        return $this;
    }

    /**
     * Gets pending_requests_count
     *
     * @return int|null
     */
    public function getPendingRequestsCount()
    {
        return $this->container['pending_requests_count'];
    }

    /**
     * Sets pending_requests_count
     *
     * @param int|null $pending_requests_count pending_requests_count
     *
     * @return $this
     */
    public function setPendingRequestsCount($pending_requests_count)
    {
        $this->container['pending_requests_count'] = $pending_requests_count;

        return $this;
    }

    /**
     * Gets approved_requests_count
     *
     * @return int|null
     */
    public function getApprovedRequestsCount()
    {
        return $this->container['approved_requests_count'];
    }

    /**
     * Sets approved_requests_count
     *
     * @param int|null $approved_requests_count approved_requests_count
     *
     * @return $this
     */
    public function setApprovedRequestsCount($approved_requests_count)
    {
        $this->container['approved_requests_count'] = $approved_requests_count;

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

