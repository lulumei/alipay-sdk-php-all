<?php
/**
 * SchoolSimpleInfo
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
 * SchoolSimpleInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SchoolSimpleInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SchoolSimpleInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campusInfo' => '\Alipay\OpenAPISDK\Model\CampusInfo',
        'cityCode' => 'string',
        'instId' => 'string',
        'instName' => 'string',
        'instStdCode' => 'string',
        'provinceCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'campusInfo' => null,
        'cityCode' => null,
        'instId' => null,
        'instName' => null,
        'instStdCode' => null,
        'provinceCode' => null
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
        'campusInfo' => 'campus_info',
        'cityCode' => 'city_code',
        'instId' => 'inst_id',
        'instName' => 'inst_name',
        'instStdCode' => 'inst_std_code',
        'provinceCode' => 'province_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campusInfo' => 'setCampusInfo',
        'cityCode' => 'setCityCode',
        'instId' => 'setInstId',
        'instName' => 'setInstName',
        'instStdCode' => 'setInstStdCode',
        'provinceCode' => 'setProvinceCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campusInfo' => 'getCampusInfo',
        'cityCode' => 'getCityCode',
        'instId' => 'getInstId',
        'instName' => 'getInstName',
        'instStdCode' => 'getInstStdCode',
        'provinceCode' => 'getProvinceCode'
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
        $this->container['campusInfo'] = $data['campusInfo'] ?? null;
        $this->container['cityCode'] = $data['cityCode'] ?? null;
        $this->container['instId'] = $data['instId'] ?? null;
        $this->container['instName'] = $data['instName'] ?? null;
        $this->container['instStdCode'] = $data['instStdCode'] ?? null;
        $this->container['provinceCode'] = $data['provinceCode'] ?? null;
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
     * Gets campusInfo
     *
     * @return \Alipay\OpenAPISDK\Model\CampusInfo|null
     */
    public function getCampusInfo()
    {
        return $this->container['campusInfo'];
    }

    /**
     * Sets campusInfo
     *
     * @param \Alipay\OpenAPISDK\Model\CampusInfo|null $campusInfo campusInfo
     *
     * @return self
     */
    public function setCampusInfo($campusInfo)
    {
        $this->container['campusInfo'] = $campusInfo;

        return $this;
    }

    /**
     * Gets cityCode
     *
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->container['cityCode'];
    }

    /**
     * Sets cityCode
     *
     * @param string|null $cityCode 城市编码
     *
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->container['cityCode'] = $cityCode;

        return $this;
    }

    /**
     * Gets instId
     *
     * @return string|null
     */
    public function getInstId()
    {
        return $this->container['instId'];
    }

    /**
     * Sets instId
     *
     * @param string|null $instId 学校内标
     *
     * @return self
     */
    public function setInstId($instId)
    {
        $this->container['instId'] = $instId;

        return $this;
    }

    /**
     * Gets instName
     *
     * @return string|null
     */
    public function getInstName()
    {
        return $this->container['instName'];
    }

    /**
     * Sets instName
     *
     * @param string|null $instName 学校名称
     *
     * @return self
     */
    public function setInstName($instName)
    {
        $this->container['instName'] = $instName;

        return $this;
    }

    /**
     * Gets instStdCode
     *
     * @return string|null
     */
    public function getInstStdCode()
    {
        return $this->container['instStdCode'];
    }

    /**
     * Sets instStdCode
     *
     * @param string|null $instStdCode 学校外标
     *
     * @return self
     */
    public function setInstStdCode($instStdCode)
    {
        $this->container['instStdCode'] = $instStdCode;

        return $this;
    }

    /**
     * Gets provinceCode
     *
     * @return string|null
     */
    public function getProvinceCode()
    {
        return $this->container['provinceCode'];
    }

    /**
     * Sets provinceCode
     *
     * @param string|null $provinceCode 省份编码
     *
     * @return self
     */
    public function setProvinceCode($provinceCode)
    {
        $this->container['provinceCode'] = $provinceCode;

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


