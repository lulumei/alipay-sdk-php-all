<?php
/**
 * BrandDetail
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
 * BrandDetail Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BrandDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BrandDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'blockType' => 'string',
        'boxVersion' => 'string',
        'desc' => 'string',
        'img' => 'string',
        'index' => 'string',
        'key' => 'string',
        'materialId' => 'string',
        'name' => 'string',
        'publicBindAppId' => 'string',
        'serviceCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'blockType' => null,
        'boxVersion' => null,
        'desc' => null,
        'img' => null,
        'index' => null,
        'key' => null,
        'materialId' => null,
        'name' => null,
        'publicBindAppId' => null,
        'serviceCode' => null
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
        'blockType' => 'block_type',
        'boxVersion' => 'box_version',
        'desc' => 'desc',
        'img' => 'img',
        'index' => 'index',
        'key' => 'key',
        'materialId' => 'material_id',
        'name' => 'name',
        'publicBindAppId' => 'public_bind_app_id',
        'serviceCode' => 'service_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blockType' => 'setBlockType',
        'boxVersion' => 'setBoxVersion',
        'desc' => 'setDesc',
        'img' => 'setImg',
        'index' => 'setIndex',
        'key' => 'setKey',
        'materialId' => 'setMaterialId',
        'name' => 'setName',
        'publicBindAppId' => 'setPublicBindAppId',
        'serviceCode' => 'setServiceCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blockType' => 'getBlockType',
        'boxVersion' => 'getBoxVersion',
        'desc' => 'getDesc',
        'img' => 'getImg',
        'index' => 'getIndex',
        'key' => 'getKey',
        'materialId' => 'getMaterialId',
        'name' => 'getName',
        'publicBindAppId' => 'getPublicBindAppId',
        'serviceCode' => 'getServiceCode'
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
        $this->container['blockType'] = $data['blockType'] ?? null;
        $this->container['boxVersion'] = $data['boxVersion'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['img'] = $data['img'] ?? null;
        $this->container['index'] = $data['index'] ?? null;
        $this->container['key'] = $data['key'] ?? null;
        $this->container['materialId'] = $data['materialId'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['publicBindAppId'] = $data['publicBindAppId'] ?? null;
        $this->container['serviceCode'] = $data['serviceCode'] ?? null;
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
     * Gets blockType
     *
     * @return string|null
     */
    public function getBlockType()
    {
        return $this->container['blockType'];
    }

    /**
     * Sets blockType
     *
     * @param string|null $blockType 搜索工单详情数据block_type
     *
     * @return self
     */
    public function setBlockType($blockType)
    {
        $this->container['blockType'] = $blockType;

        return $this;
    }

    /**
     * Gets boxVersion
     *
     * @return string|null
     */
    public function getBoxVersion()
    {
        return $this->container['boxVersion'];
    }

    /**
     * Sets boxVersion
     *
     * @param string|null $boxVersion 版本号
     *
     * @return self
     */
    public function setBoxVersion($boxVersion)
    {
        $this->container['boxVersion'] = $boxVersion;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc 描述信息
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets img
     *
     * @return string|null
     */
    public function getImg()
    {
        return $this->container['img'];
    }

    /**
     * Sets img
     *
     * @param string|null $img img地址
     *
     * @return self
     */
    public function setImg($img)
    {
        $this->container['img'] = $img;

        return $this;
    }

    /**
     * Gets index
     *
     * @return string|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param string|null $index 索引信息
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key 工单详情数据key
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets materialId
     *
     * @return string|null
     */
    public function getMaterialId()
    {
        return $this->container['materialId'];
    }

    /**
     * Sets materialId
     *
     * @param string|null $materialId 工单详情数据material_id
     *
     * @return self
     */
    public function setMaterialId($materialId)
    {
        $this->container['materialId'] = $materialId;

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
     * @param string|null $name 应用名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets publicBindAppId
     *
     * @return string|null
     */
    public function getPublicBindAppId()
    {
        return $this->container['publicBindAppId'];
    }

    /**
     * Sets publicBindAppId
     *
     * @param string|null $publicBindAppId 搜索运营工单详情数据public_bind_app_id
     *
     * @return self
     */
    public function setPublicBindAppId($publicBindAppId)
    {
        $this->container['publicBindAppId'] = $publicBindAppId;

        return $this;
    }

    /**
     * Gets serviceCode
     *
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->container['serviceCode'];
    }

    /**
     * Sets serviceCode
     *
     * @param string|null $serviceCode 服务码
     *
     * @return self
     */
    public function setServiceCode($serviceCode)
    {
        $this->container['serviceCode'] = $serviceCode;

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


