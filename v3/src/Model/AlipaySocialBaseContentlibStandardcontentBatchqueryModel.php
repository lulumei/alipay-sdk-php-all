<?php
/**
 * AlipaySocialBaseContentlibStandardcontentBatchqueryModel
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
 * AlipaySocialBaseContentlibStandardcontentBatchqueryModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipaySocialBaseContentlibStandardcontentBatchqueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipaySocialBaseContentlibStandardcontentBatchqueryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'needDetail' => 'bool',
        'pageNum' => 'int',
        'pageSize' => 'int',
        'publicId' => 'string',
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
        'needDetail' => null,
        'pageNum' => null,
        'pageSize' => null,
        'publicId' => null,
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
        'needDetail' => 'need_detail',
        'pageNum' => 'page_num',
        'pageSize' => 'page_size',
        'publicId' => 'public_id',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'needDetail' => 'setNeedDetail',
        'pageNum' => 'setPageNum',
        'pageSize' => 'setPageSize',
        'publicId' => 'setPublicId',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'needDetail' => 'getNeedDetail',
        'pageNum' => 'getPageNum',
        'pageSize' => 'getPageSize',
        'publicId' => 'getPublicId',
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
        $this->container['needDetail'] = $data['needDetail'] ?? null;
        $this->container['pageNum'] = $data['pageNum'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
        $this->container['publicId'] = $data['publicId'] ?? null;
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
     * Gets needDetail
     *
     * @return bool|null
     */
    public function getNeedDetail()
    {
        return $this->container['needDetail'];
    }

    /**
     * Sets needDetail
     *
     * @param bool|null $needDetail 指示是否返回内容详情,  默认为false false: 仅返回内容ID列表 true:返回 content_details
     *
     * @return self
     */
    public function setNeedDetail($needDetail)
    {
        $this->container['needDetail'] = $needDetail;

        return $this;
    }

    /**
     * Gets pageNum
     *
     * @return int|null
     */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
     * Sets pageNum
     *
     * @param int|null $pageNum 当页分页,默认为1
     *
     * @return self
     */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|null $pageSize 分页记录数，最大20,默认20
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets publicId
     *
     * @return string|null
     */
    public function getPublicId()
    {
        return $this->container['publicId'];
    }

    /**
     * Sets publicId
     *
     * @param string|null $publicId 生活号+号ID，只有MCN机构为达人号ID查询内容才需要传入
     *
     * @return self
     */
    public function setPublicId($publicId)
    {
        $this->container['publicId'] = $publicId;

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
     * @param string|null $status 内容状态，默认查询所有状态 0-审核中  1-发布成功  2-审核不通过  3-己删除
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


