<?php
/**
 * MarketingDeliveryDetail
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2023-03-14
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * MarketingDeliveryDetail Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MarketingDeliveryDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MarketingDeliveryDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bindIdList' => 'string[]',
        'detailId' => 'string',
        'gmtEnd' => 'string',
        'gmtStart' => 'string',
        'name' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bindIdList' => null,
        'detailId' => null,
        'gmtEnd' => null,
        'gmtStart' => null,
        'name' => null,
        'status' => null
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
        'bindIdList' => 'bind_id_list',
        'detailId' => 'detail_id',
        'gmtEnd' => 'gmt_end',
        'gmtStart' => 'gmt_start',
        'name' => 'name',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bindIdList' => 'setBindIdList',
        'detailId' => 'setDetailId',
        'gmtEnd' => 'setGmtEnd',
        'gmtStart' => 'setGmtStart',
        'name' => 'setName',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bindIdList' => 'getBindIdList',
        'detailId' => 'getDetailId',
        'gmtEnd' => 'getGmtEnd',
        'gmtStart' => 'getGmtStart',
        'name' => 'getName',
        'status' => 'getStatus'
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
        $this->container['bindIdList'] = $data['bindIdList'] ?? null;
        $this->container['detailId'] = $data['detailId'] ?? null;
        $this->container['gmtEnd'] = $data['gmtEnd'] ?? null;
        $this->container['gmtStart'] = $data['gmtStart'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets bindIdList
     *
     * @return string[]|null
     */
    public function getBindIdList()
    {
        return $this->container['bindIdList'];
    }

    /**
     * Sets bindIdList
     *
     * @param string[]|null $bindIdList 投放详情绑定的模板id列表
     *
     * @return self
     */
    public function setBindIdList($bindIdList)
    {
        $this->container['bindIdList'] = $bindIdList;

        return $this;
    }

    /**
     * Gets detailId
     *
     * @return string|null
     */
    public function getDetailId()
    {
        return $this->container['detailId'];
    }

    /**
     * Sets detailId
     *
     * @param string|null $detailId 投放详情id
     *
     * @return self
     */
    public function setDetailId($detailId)
    {
        $this->container['detailId'] = $detailId;

        return $this;
    }

    /**
     * Gets gmtEnd
     *
     * @return string|null
     */
    public function getGmtEnd()
    {
        return $this->container['gmtEnd'];
    }

    /**
     * Sets gmtEnd
     *
     * @param string|null $gmtEnd 结束时间
     *
     * @return self
     */
    public function setGmtEnd($gmtEnd)
    {
        $this->container['gmtEnd'] = $gmtEnd;

        return $this;
    }

    /**
     * Gets gmtStart
     *
     * @return string|null
     */
    public function getGmtStart()
    {
        return $this->container['gmtStart'];
    }

    /**
     * Sets gmtStart
     *
     * @param string|null $gmtStart 开始时间
     *
     * @return self
     */
    public function setGmtStart($gmtStart)
    {
        $this->container['gmtStart'] = $gmtStart;

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
     * @param string|null $name 投放详情名称，取创建运营投放的title，未传title取券名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $status 投放详情状态，INIT:下线状态，ON_LINE:上线状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


