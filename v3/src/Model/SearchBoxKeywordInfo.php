<?php
/**
 * SearchBoxKeywordInfo
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
 * SearchBoxKeywordInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SearchBoxKeywordInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchBoxKeywordInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applyNo' => 'string',
        'failReason' => 'string',
        'gmtModified' => 'string',
        'keywords' => 'string[]',
        'moduleId' => 'string',
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
        'applyNo' => null,
        'failReason' => null,
        'gmtModified' => null,
        'keywords' => null,
        'moduleId' => null,
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
        'applyNo' => 'apply_no',
        'failReason' => 'fail_reason',
        'gmtModified' => 'gmt_modified',
        'keywords' => 'keywords',
        'moduleId' => 'module_id',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applyNo' => 'setApplyNo',
        'failReason' => 'setFailReason',
        'gmtModified' => 'setGmtModified',
        'keywords' => 'setKeywords',
        'moduleId' => 'setModuleId',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applyNo' => 'getApplyNo',
        'failReason' => 'getFailReason',
        'gmtModified' => 'getGmtModified',
        'keywords' => 'getKeywords',
        'moduleId' => 'getModuleId',
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
        $this->container['applyNo'] = $data['applyNo'] ?? null;
        $this->container['failReason'] = $data['failReason'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['keywords'] = $data['keywords'] ?? null;
        $this->container['moduleId'] = $data['moduleId'] ?? null;
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
     * Gets applyNo
     *
     * @return string|null
     */
    public function getApplyNo()
    {
        return $this->container['applyNo'];
    }

    /**
     * Sets applyNo
     *
     * @param string|null $applyNo 申请单号
     *
     * @return self
     */
    public function setApplyNo($applyNo)
    {
        $this->container['applyNo'] = $applyNo;

        return $this;
    }

    /**
     * Gets failReason
     *
     * @return string|null
     */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
     * Sets failReason
     *
     * @param string|null $failReason 审核失败原因
     *
     * @return self
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 修改时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[]|null $keywords 关键词
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets moduleId
     *
     * @return string|null
     */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
     * Sets moduleId
     *
     * @param string|null $moduleId 模块ID
     *
     * @return self
     */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;

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
     * @param string|null $status ONLINE--上架 REJECT--驳回 OFFLINE-已下架
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


