<?php
/**
 * VoucherSendRuleDetailModify
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
 * VoucherSendRuleDetailModify Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VoucherSendRuleDetailModify implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherSendRuleDetailModify';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'naturalPersonLimit' => 'bool',
        'phoneNumberLimit' => 'string',
        'voucherQuantityLimitPerUser' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'naturalPersonLimit' => null,
        'phoneNumberLimit' => null,
        'voucherQuantityLimitPerUser' => null
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
        'naturalPersonLimit' => 'natural_person_limit',
        'phoneNumberLimit' => 'phone_number_limit',
        'voucherQuantityLimitPerUser' => 'voucher_quantity_limit_per_user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'naturalPersonLimit' => 'setNaturalPersonLimit',
        'phoneNumberLimit' => 'setPhoneNumberLimit',
        'voucherQuantityLimitPerUser' => 'setVoucherQuantityLimitPerUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'naturalPersonLimit' => 'getNaturalPersonLimit',
        'phoneNumberLimit' => 'getPhoneNumberLimit',
        'voucherQuantityLimitPerUser' => 'getVoucherQuantityLimitPerUser'
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
        $this->container['naturalPersonLimit'] = $data['naturalPersonLimit'] ?? null;
        $this->container['phoneNumberLimit'] = $data['phoneNumberLimit'] ?? null;
        $this->container['voucherQuantityLimitPerUser'] = $data['voucherQuantityLimitPerUser'] ?? null;
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
     * Gets naturalPersonLimit
     *
     * @return bool|null
     */
    public function getNaturalPersonLimit()
    {
        return $this->container['naturalPersonLimit'];
    }

    /**
     * Sets naturalPersonLimit
     *
     * @param bool|null $naturalPersonLimit 是否开启自然人领取限制。 自然人表示按照身份证纬度进行领取限制。
     *
     * @return self
     */
    public function setNaturalPersonLimit($naturalPersonLimit)
    {
        $this->container['naturalPersonLimit'] = $naturalPersonLimit;

        return $this;
    }

    /**
     * Gets phoneNumberLimit
     *
     * @return string|null
     */
    public function getPhoneNumberLimit()
    {
        return $this->container['phoneNumberLimit'];
    }

    /**
     * Sets phoneNumberLimit
     *
     * @param string|null $phoneNumberLimit 是否开启电话号码领取限制。
     *
     * @return self
     */
    public function setPhoneNumberLimit($phoneNumberLimit)
    {
        $this->container['phoneNumberLimit'] = $phoneNumberLimit;

        return $this;
    }

    /**
     * Gets voucherQuantityLimitPerUser
     *
     * @return int|null
     */
    public function getVoucherQuantityLimitPerUser()
    {
        return $this->container['voucherQuantityLimitPerUser'];
    }

    /**
     * Sets voucherQuantityLimitPerUser
     *
     * @param int|null $voucherQuantityLimitPerUser 每人领取限制。 默认按照支付宝uid进行领取限制;
     *
     * @return self
     */
    public function setVoucherQuantityLimitPerUser($voucherQuantityLimitPerUser)
    {
        $this->container['voucherQuantityLimitPerUser'] = $voucherQuantityLimitPerUser;

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


