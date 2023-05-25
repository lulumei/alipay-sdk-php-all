<?php
/**
 * EcVoucherInfo
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
 * EcVoucherInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EcVoucherInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EcVoucherInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'employeeId' => 'string',
        'enterpriseId' => 'string',
        'openId' => 'string',
        'userId' => 'string',
        'voucherContent' => 'string',
        'voucherDate' => 'string',
        'voucherId' => 'string',
        'voucherSource' => 'string',
        'voucherType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'employeeId' => null,
        'enterpriseId' => null,
        'openId' => null,
        'userId' => null,
        'voucherContent' => null,
        'voucherDate' => null,
        'voucherId' => null,
        'voucherSource' => null,
        'voucherType' => null
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
        'accountId' => 'account_id',
        'employeeId' => 'employee_id',
        'enterpriseId' => 'enterprise_id',
        'openId' => 'open_id',
        'userId' => 'user_id',
        'voucherContent' => 'voucher_content',
        'voucherDate' => 'voucher_date',
        'voucherId' => 'voucher_id',
        'voucherSource' => 'voucher_source',
        'voucherType' => 'voucher_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'employeeId' => 'setEmployeeId',
        'enterpriseId' => 'setEnterpriseId',
        'openId' => 'setOpenId',
        'userId' => 'setUserId',
        'voucherContent' => 'setVoucherContent',
        'voucherDate' => 'setVoucherDate',
        'voucherId' => 'setVoucherId',
        'voucherSource' => 'setVoucherSource',
        'voucherType' => 'setVoucherType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'employeeId' => 'getEmployeeId',
        'enterpriseId' => 'getEnterpriseId',
        'openId' => 'getOpenId',
        'userId' => 'getUserId',
        'voucherContent' => 'getVoucherContent',
        'voucherDate' => 'getVoucherDate',
        'voucherId' => 'getVoucherId',
        'voucherSource' => 'getVoucherSource',
        'voucherType' => 'getVoucherType'
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['employeeId'] = $data['employeeId'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
        $this->container['voucherContent'] = $data['voucherContent'] ?? null;
        $this->container['voucherDate'] = $data['voucherDate'] ?? null;
        $this->container['voucherId'] = $data['voucherId'] ?? null;
        $this->container['voucherSource'] = $data['voucherSource'] ?? null;
        $this->container['voucherType'] = $data['voucherType'] ?? null;
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId 共同账户ID
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets employeeId
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employeeId'];
    }

    /**
     * Sets employeeId
     *
     * @param string|null $employeeId 员工ID，汇总发票该字段无效
     *
     * @return self
     */
    public function setEmployeeId($employeeId)
    {
        $this->container['employeeId'] = $employeeId;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return string|null
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param string|null $enterpriseId 企业ID
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId 员工支付宝UID
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 员工支付宝UID
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets voucherContent
     *
     * @return string|null
     */
    public function getVoucherContent()
    {
        return $this->container['voucherContent'];
    }

    /**
     * Sets voucherContent
     *
     * @param string|null $voucherContent 凭证内容
     *
     * @return self
     */
    public function setVoucherContent($voucherContent)
    {
        $this->container['voucherContent'] = $voucherContent;

        return $this;
    }

    /**
     * Gets voucherDate
     *
     * @return string|null
     */
    public function getVoucherDate()
    {
        return $this->container['voucherDate'];
    }

    /**
     * Sets voucherDate
     *
     * @param string|null $voucherDate 凭证创建时间，格式：yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setVoucherDate($voucherDate)
    {
        $this->container['voucherDate'] = $voucherDate;

        return $this;
    }

    /**
     * Gets voucherId
     *
     * @return string|null
     */
    public function getVoucherId()
    {
        return $this->container['voucherId'];
    }

    /**
     * Sets voucherId
     *
     * @param string|null $voucherId 凭证ID，幂等用
     *
     * @return self
     */
    public function setVoucherId($voucherId)
    {
        $this->container['voucherId'] = $voucherId;

        return $this;
    }

    /**
     * Gets voucherSource
     *
     * @return string|null
     */
    public function getVoucherSource()
    {
        return $this->container['voucherSource'];
    }

    /**
     * Sets voucherSource
     *
     * @param string|null $voucherSource 凭证来源
     *
     * @return self
     */
    public function setVoucherSource($voucherSource)
    {
        $this->container['voucherSource'] = $voucherSource;

        return $this;
    }

    /**
     * Gets voucherType
     *
     * @return string|null
     */
    public function getVoucherType()
    {
        return $this->container['voucherType'];
    }

    /**
     * Sets voucherType
     *
     * @param string|null $voucherType 凭证类型
     *
     * @return self
     */
    public function setVoucherType($voucherType)
    {
        $this->container['voucherType'] = $voucherType;

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


