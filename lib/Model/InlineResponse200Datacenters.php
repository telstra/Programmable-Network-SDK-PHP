<?php
/**
 * InlineResponse200Datacenters
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
 * InlineResponse200Datacenters Class Doc Comment
 *
 * @category Class
 * @package  tpn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse200Datacenters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_datacenters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cityname' => 'string',
        'countryname' => 'string',
        'datacentername' => 'string',
        'datacentercode' => 'string',
        'datacenteruuid' => 'string',
        'interfacetypes' => 'string[]',
        'operatorname' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cityname' => null,
        'countryname' => null,
        'datacentername' => null,
        'datacentercode' => null,
        'datacenteruuid' => null,
        'interfacetypes' => null,
        'operatorname' => null
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
        'cityname' => 'cityname',
        'countryname' => 'countryname',
        'datacentername' => 'datacentername',
        'datacentercode' => 'datacentercode',
        'datacenteruuid' => 'datacenteruuid',
        'interfacetypes' => 'interfacetypes',
        'operatorname' => 'operatorname'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cityname' => 'setCityname',
        'countryname' => 'setCountryname',
        'datacentername' => 'setDatacentername',
        'datacentercode' => 'setDatacentercode',
        'datacenteruuid' => 'setDatacenteruuid',
        'interfacetypes' => 'setInterfacetypes',
        'operatorname' => 'setOperatorname'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cityname' => 'getCityname',
        'countryname' => 'getCountryname',
        'datacentername' => 'getDatacentername',
        'datacentercode' => 'getDatacentercode',
        'datacenteruuid' => 'getDatacenteruuid',
        'interfacetypes' => 'getInterfacetypes',
        'operatorname' => 'getOperatorname'
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
        $this->container['cityname'] = isset($data['cityname']) ? $data['cityname'] : null;
        $this->container['countryname'] = isset($data['countryname']) ? $data['countryname'] : null;
        $this->container['datacentername'] = isset($data['datacentername']) ? $data['datacentername'] : null;
        $this->container['datacentercode'] = isset($data['datacentercode']) ? $data['datacentercode'] : null;
        $this->container['datacenteruuid'] = isset($data['datacenteruuid']) ? $data['datacenteruuid'] : null;
        $this->container['interfacetypes'] = isset($data['interfacetypes']) ? $data['interfacetypes'] : null;
        $this->container['operatorname'] = isset($data['operatorname']) ? $data['operatorname'] : null;
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
     * Gets cityname
     *
     * @return string|null
     */
    public function getCityname()
    {
        return $this->container['cityname'];
    }

    /**
     * Sets cityname
     *
     * @param string|null $cityname cityname
     *
     * @return $this
     */
    public function setCityname($cityname)
    {
        $this->container['cityname'] = $cityname;

        return $this;
    }

    /**
     * Gets countryname
     *
     * @return string|null
     */
    public function getCountryname()
    {
        return $this->container['countryname'];
    }

    /**
     * Sets countryname
     *
     * @param string|null $countryname countryname
     *
     * @return $this
     */
    public function setCountryname($countryname)
    {
        $this->container['countryname'] = $countryname;

        return $this;
    }

    /**
     * Gets datacentername
     *
     * @return string|null
     */
    public function getDatacentername()
    {
        return $this->container['datacentername'];
    }

    /**
     * Sets datacentername
     *
     * @param string|null $datacentername datacentername
     *
     * @return $this
     */
    public function setDatacentername($datacentername)
    {
        $this->container['datacentername'] = $datacentername;

        return $this;
    }

    /**
     * Gets datacentercode
     *
     * @return string|null
     */
    public function getDatacentercode()
    {
        return $this->container['datacentercode'];
    }

    /**
     * Sets datacentercode
     *
     * @param string|null $datacentercode datacentercode
     *
     * @return $this
     */
    public function setDatacentercode($datacentercode)
    {
        $this->container['datacentercode'] = $datacentercode;

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
     * Gets interfacetypes
     *
     * @return string[]|null
     */
    public function getInterfacetypes()
    {
        return $this->container['interfacetypes'];
    }

    /**
     * Sets interfacetypes
     *
     * @param string[]|null $interfacetypes interfacetypes
     *
     * @return $this
     */
    public function setInterfacetypes($interfacetypes)
    {
        $this->container['interfacetypes'] = $interfacetypes;

        return $this;
    }

    /**
     * Gets operatorname
     *
     * @return string|null
     */
    public function getOperatorname()
    {
        return $this->container['operatorname'];
    }

    /**
     * Sets operatorname
     *
     * @param string|null $operatorname operatorname
     *
     * @return $this
     */
    public function setOperatorname($operatorname)
    {
        $this->container['operatorname'] = $operatorname;

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


