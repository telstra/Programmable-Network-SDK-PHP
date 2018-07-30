<?php
/**
 * Contract
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
 * Contract Class Doc Comment
 *
 * @category Class
 * @package  tpn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Contract implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'contract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contractid' => 'string',
        'duration' => 'int',
        'bandwidth' => 'int',
        'price' => 'int',
        'contract_status' => 'int',
        'version' => 'int',
        'deletedtimestamp' => 'int',
        'currency_code' => 'string',
        'currency_id' => 'string',
        'renewal_option' => 'int',
        'contract_start_time' => 'int',
        'contract_end_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contractid' => null,
        'duration' => 'int32',
        'bandwidth' => 'int32',
        'price' => 'int32',
        'contract_status' => 'int32',
        'version' => 'int32',
        'deletedtimestamp' => 'int32',
        'currency_code' => null,
        'currency_id' => null,
        'renewal_option' => 'int32',
        'contract_start_time' => 'int32',
        'contract_end_time' => 'int32'
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
        'contractid' => 'contractid',
        'duration' => 'duration',
        'bandwidth' => 'bandwidth',
        'price' => 'price',
        'contract_status' => 'contractStatus',
        'version' => 'version',
        'deletedtimestamp' => 'deletedtimestamp',
        'currency_code' => 'currencyCode',
        'currency_id' => 'currencyID',
        'renewal_option' => 'renewal-option',
        'contract_start_time' => 'contract-start-time',
        'contract_end_time' => 'contract-end-time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contractid' => 'setContractid',
        'duration' => 'setDuration',
        'bandwidth' => 'setBandwidth',
        'price' => 'setPrice',
        'contract_status' => 'setContractStatus',
        'version' => 'setVersion',
        'deletedtimestamp' => 'setDeletedtimestamp',
        'currency_code' => 'setCurrencyCode',
        'currency_id' => 'setCurrencyId',
        'renewal_option' => 'setRenewalOption',
        'contract_start_time' => 'setContractStartTime',
        'contract_end_time' => 'setContractEndTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contractid' => 'getContractid',
        'duration' => 'getDuration',
        'bandwidth' => 'getBandwidth',
        'price' => 'getPrice',
        'contract_status' => 'getContractStatus',
        'version' => 'getVersion',
        'deletedtimestamp' => 'getDeletedtimestamp',
        'currency_code' => 'getCurrencyCode',
        'currency_id' => 'getCurrencyId',
        'renewal_option' => 'getRenewalOption',
        'contract_start_time' => 'getContractStartTime',
        'contract_end_time' => 'getContractEndTime'
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
        $this->container['contractid'] = isset($data['contractid']) ? $data['contractid'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['contract_status'] = isset($data['contract_status']) ? $data['contract_status'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['deletedtimestamp'] = isset($data['deletedtimestamp']) ? $data['deletedtimestamp'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['renewal_option'] = isset($data['renewal_option']) ? $data['renewal_option'] : null;
        $this->container['contract_start_time'] = isset($data['contract_start_time']) ? $data['contract_start_time'] : null;
        $this->container['contract_end_time'] = isset($data['contract_end_time']) ? $data['contract_end_time'] : null;
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
     * Gets contractid
     *
     * @return string|null
     */
    public function getContractid()
    {
        return $this->container['contractid'];
    }

    /**
     * Sets contractid
     *
     * @param string|null $contractid Identifier of a contract
     *
     * @return $this
     */
    public function setContractid($contractid)
    {
        $this->container['contractid'] = $contractid;

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
            throw new \InvalidArgumentException('invalid value for $duration when calling Contract., must be bigger than or equal to 3600.');
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
            throw new \InvalidArgumentException('invalid value for $bandwidth when calling Contract., must be smaller than or equal to 10000000.');
        }
        if (!is_null($bandwidth) && ($bandwidth < 1000)) {
            throw new \InvalidArgumentException('invalid value for $bandwidth when calling Contract., must be bigger than or equal to 1000.');
        }

        $this->container['bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int|null $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets contract_status
     *
     * @return int|null
     */
    public function getContractStatus()
    {
        return $this->container['contract_status'];
    }

    /**
     * Sets contract_status
     *
     * @param int|null $contract_status contract_status
     *
     * @return $this
     */
    public function setContractStatus($contract_status)
    {
        $this->container['contract_status'] = $contract_status;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets deletedtimestamp
     *
     * @return int|null
     */
    public function getDeletedtimestamp()
    {
        return $this->container['deletedtimestamp'];
    }

    /**
     * Sets deletedtimestamp
     *
     * @param int|null $deletedtimestamp deletedtimestamp
     *
     * @return $this
     */
    public function setDeletedtimestamp($deletedtimestamp)
    {
        $this->container['deletedtimestamp'] = $deletedtimestamp;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string|null
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string|null $currency_id currency_id
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

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
     * Gets contract_start_time
     *
     * @return int|null
     */
    public function getContractStartTime()
    {
        return $this->container['contract_start_time'];
    }

    /**
     * Sets contract_start_time
     *
     * @param int|null $contract_start_time contract_start_time
     *
     * @return $this
     */
    public function setContractStartTime($contract_start_time)
    {
        $this->container['contract_start_time'] = $contract_start_time;

        return $this;
    }

    /**
     * Gets contract_end_time
     *
     * @return int|null
     */
    public function getContractEndTime()
    {
        return $this->container['contract_end_time'];
    }

    /**
     * Sets contract_end_time
     *
     * @param int|null $contract_end_time contract_end_time
     *
     * @return $this
     */
    public function setContractEndTime($contract_end_time)
    {
        $this->container['contract_end_time'] = $contract_end_time;

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

