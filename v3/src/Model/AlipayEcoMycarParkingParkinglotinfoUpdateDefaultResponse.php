<?php
/**
 * AlipayEcoMycarParkingParkinglotinfoUpdateDefaultResponse
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
 * AlipayEcoMycarParkingParkinglotinfoUpdateDefaultResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEcoMycarParkingParkinglotinfoUpdateDefaultResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'alipay_eco_mycar_parking_parkinglotinfo_update_default_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'links' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'links' => null,
        'message' => null
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
        'code' => 'code',
        'links' => 'links',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'links' => 'setLinks',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'links' => 'getLinks',
        'message' => 'getMessage'
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

    public const CODE_INVALID_PARAMETER = 'INVALID_PARAMETER';
    public const CODE_BIZ_ERROR = 'BIZ_ERROR';
    public const CODE_MERCHANT_ID_IS_EMPTY = 'MERCHANT_ID_IS_EMPTY';
    public const CODE_MERCHANT_ID_FORMAT_ERROR = 'MERCHANT_ID_FORMAT_ERROR';
    public const CODE_PARKING_POI_ID_IS_EMPTY = 'PARKING_POI_ID_IS_EMPTY';
    public const CODE_PARKING_POI_NOT_FIND = 'PARKING_POI_NOT_FIND';
    public const CODE_PARKING_POI_TYPE_NOT_MATCH = 'PARKING_POI_TYPE_NOT_MATCH';
    public const CODE_PARKING_LEADS_HAS_REGISTERED = 'PARKING_LEADS_HAS_REGISTERED';
    public const CODE_PARKING_POI_HAS_REGISTERED = 'PARKING_POI_HAS_REGISTERED';
    public const CODE_PARKING_ID_FORMAT_ERROR = 'PARKING_ID_FORMAT_ERROR';
    public const CODE_PARKING_MOBILE_IS_EMPTY = 'PARKING_MOBILE_IS_EMPTY';
    public const CODE_PARKING_IS_SUPPORT_INVOICE_ILLEGAL = 'PARKING_IS_SUPPORT_INVOICE_ILLEGAL';
    public const CODE_PARKING_BIZ_TAGS_ILLEGAL = 'PARKING_BIZ_TAGS_ILLEGAL';
    public const CODE_PARKING_SUM_SPACE_ILLEGAL = 'PARKING_SUM_SPACE_ILLEGAL';
    public const CODE_PARKING_ISV_MOBILE_FORMAT_ERROR = 'PARKING_ISV_MOBILE_FORMAT_ERROR';
    public const CODE_PARKING_ORIGINAL_ISV_MOBILE_FORMAT_ERROR = 'PARKING_ORIGINAL_ISV_MOBILE_FORMAT_ERROR';
    public const CODE_PARKING_FEE_DESC_IMG_ILLEGAL = 'PARKING_FEE_DESC_IMG_ILLEGAL';
    public const CODE_PARKING_FEE_DESC_IMG_UPLOAD_ERROR = 'PARKING_FEE_DESC_IMG_UPLOAD_ERROR';
    public const CODE_PARKING_LOT_HAS_REGISTERED = 'PARKING_LOT_HAS_REGISTERED';
    public const CODE_PARKING_LOT_NOT_EXIST = 'PARKING_LOT_NOT_EXIST';
    public const CODE_PARKING_ISV_NOT_ALLOWED = 'PARKING_ISV_NOT_ALLOWED';
    public const CODE_INVALID_UPDATE_IN_BASE_STATUS = 'INVALID_UPDATE_IN_BASE_STATUS';
    public const CODE_SYSTEM_ERROR = 'SYSTEM_ERROR';
    public const CODE_INVALID_PARAMETER_BUSINESS_ID = 'INVALID_PARAMETER_BUSINESS_ID';
    public const CODE_INVALID_PARAMETER_BUSINESS_TYPE = 'INVALID_PARAMETER_BUSINESS_TYPE';
    public const CODE_ONLINET_ACCOUNT_BAD_NOT_APPS = 'ONLINET_ACCOUNT_BAD_NOT_APPS';
    public const CODE_AGREEMENT_ACCOUNT_BAD_NOT_APPS = 'AGREEMENT_ACCOUNT_BAD_NOT_APPS';
    public const CODE_AGREEMENT_ACCOUNT_BAD_NOT_SIGN = 'AGREEMENT_ACCOUNT_BAD_NOT_SIGN';
    public const CODE_AGREEMENT_ACCOUNT_BAD_INVALID_PAYEE_ID = 'AGREEMENT_ACCOUNT_BAD_INVALID_PAYEE_ID';
    public const CODE_PARKINGLOT_TYPE_ERROR = 'PARKINGLOT_TYPE_ERROR';
    public const CODE_PARKINGLOT_BIZ_TYPE_ERROR = 'PARKINGLOT_BIZ_TYPE_ERROR';
    public const CODE_PARKINGLOT_ONLINET_ACCOUNT_NOT_APPS = 'PARKINGLOT_ONLINET_ACCOUNT_NOT_APPS';
    public const CODE_PARKINGLOT_AGREEMENT_ACCOUNT_NOT_APPS = 'PARKINGLOT_AGREEMENT_ACCOUNT_NOT_APPS';
    public const CODE_PARKINGLOT_AGREEMENT_ACCOUNT_BAD_SIGN = 'PARKINGLOT_AGREEMENT_ACCOUNT_BAD_SIGN';
    public const CODE_PARKINGLOT_POI_TYPE_NOT_MATCH = 'PARKINGLOT_POI_TYPE_NOT_MATCH';
    public const CODE_PARKINGLOT_ISV_APP_ID_ILLEGAL = 'PARKINGLOT_ISV_APP_ID_ILLEGAL';
    public const CODE_PARKINGLOT_POI_NOT_FIND = 'PARKINGLOT_POI_NOT_FIND';
    public const CODE_PARKINGLOT_POI_PARSE_ERROR = 'PARKINGLOT_POI_PARSE_ERROR';
    public const CODE_PARKINGLOT_ISV_NOT_MATCH = 'PARKINGLOT_ISV_NOT_MATCH';
    public const CODE_PARKINGLOT_INVALID_UPDATE_IN_BASE_STATUS = 'PARKINGLOT_INVALID_UPDATE_IN_BASE_STATUS';
    public const CODE_PARKINGLOT_MODIFY_ERROR = 'PARKINGLOT_MODIFY_ERROR';
    public const CODE_PARKINGLOT_SEND_UPDATE_EVENT_FAIL = 'PARKINGLOT_SEND_UPDATE_EVENT_FAIL';
    public const CODE_PARKINGLOT_NOT_FIND = 'PARKINGLOT_NOT_FIND';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_INVALID_PARAMETER,
            self::CODE_BIZ_ERROR,
            self::CODE_MERCHANT_ID_IS_EMPTY,
            self::CODE_MERCHANT_ID_FORMAT_ERROR,
            self::CODE_PARKING_POI_ID_IS_EMPTY,
            self::CODE_PARKING_POI_NOT_FIND,
            self::CODE_PARKING_POI_TYPE_NOT_MATCH,
            self::CODE_PARKING_LEADS_HAS_REGISTERED,
            self::CODE_PARKING_POI_HAS_REGISTERED,
            self::CODE_PARKING_ID_FORMAT_ERROR,
            self::CODE_PARKING_MOBILE_IS_EMPTY,
            self::CODE_PARKING_IS_SUPPORT_INVOICE_ILLEGAL,
            self::CODE_PARKING_BIZ_TAGS_ILLEGAL,
            self::CODE_PARKING_SUM_SPACE_ILLEGAL,
            self::CODE_PARKING_ISV_MOBILE_FORMAT_ERROR,
            self::CODE_PARKING_ORIGINAL_ISV_MOBILE_FORMAT_ERROR,
            self::CODE_PARKING_FEE_DESC_IMG_ILLEGAL,
            self::CODE_PARKING_FEE_DESC_IMG_UPLOAD_ERROR,
            self::CODE_PARKING_LOT_HAS_REGISTERED,
            self::CODE_PARKING_LOT_NOT_EXIST,
            self::CODE_PARKING_ISV_NOT_ALLOWED,
            self::CODE_INVALID_UPDATE_IN_BASE_STATUS,
            self::CODE_SYSTEM_ERROR,
            self::CODE_INVALID_PARAMETER_BUSINESS_ID,
            self::CODE_INVALID_PARAMETER_BUSINESS_TYPE,
            self::CODE_ONLINET_ACCOUNT_BAD_NOT_APPS,
            self::CODE_AGREEMENT_ACCOUNT_BAD_NOT_APPS,
            self::CODE_AGREEMENT_ACCOUNT_BAD_NOT_SIGN,
            self::CODE_AGREEMENT_ACCOUNT_BAD_INVALID_PAYEE_ID,
            self::CODE_PARKINGLOT_TYPE_ERROR,
            self::CODE_PARKINGLOT_BIZ_TYPE_ERROR,
            self::CODE_PARKINGLOT_ONLINET_ACCOUNT_NOT_APPS,
            self::CODE_PARKINGLOT_AGREEMENT_ACCOUNT_NOT_APPS,
            self::CODE_PARKINGLOT_AGREEMENT_ACCOUNT_BAD_SIGN,
            self::CODE_PARKINGLOT_POI_TYPE_NOT_MATCH,
            self::CODE_PARKINGLOT_ISV_APP_ID_ILLEGAL,
            self::CODE_PARKINGLOT_POI_NOT_FIND,
            self::CODE_PARKINGLOT_POI_PARSE_ERROR,
            self::CODE_PARKINGLOT_ISV_NOT_MATCH,
            self::CODE_PARKINGLOT_INVALID_UPDATE_IN_BASE_STATUS,
            self::CODE_PARKINGLOT_MODIFY_ERROR,
            self::CODE_PARKINGLOT_SEND_UPDATE_EVENT_FAIL,
            self::CODE_PARKINGLOT_NOT_FIND,
        ];
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'code', must be one of '%s'",
                $this->container['code'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 错误码
     *
     * @return self
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'code', must be one of '%s'",
                    $code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets links
     *
     * @return string|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param string|null $links 解决方案链接
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 错误描述
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


