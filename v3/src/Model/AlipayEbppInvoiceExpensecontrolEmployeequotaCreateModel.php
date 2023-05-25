<?php
/**
 * AlipayEbppInvoiceExpensecontrolEmployeequotaCreateModel
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
 * AlipayEbppInvoiceExpensecontrolEmployeequotaCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceExpensecontrolEmployeequotaCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceExpensecontrolEmployeequotaCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'agreementNo' => 'string',
        'effectiveEndDate' => 'string',
        'effectiveStartDate' => 'string',
        'outerSourceId' => 'string',
        'ownerId' => 'string',
        'ownerOpenId' => 'string',
        'ownerType' => 'string',
        'platform' => 'string',
        'quotaModel' => 'string',
        'quotaValue' => 'string'
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
        'agreementNo' => null,
        'effectiveEndDate' => null,
        'effectiveStartDate' => null,
        'outerSourceId' => null,
        'ownerId' => null,
        'ownerOpenId' => null,
        'ownerType' => null,
        'platform' => null,
        'quotaModel' => null,
        'quotaValue' => null
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
        'agreementNo' => 'agreement_no',
        'effectiveEndDate' => 'effective_end_date',
        'effectiveStartDate' => 'effective_start_date',
        'outerSourceId' => 'outer_source_id',
        'ownerId' => 'owner_id',
        'ownerOpenId' => 'owner_open_id',
        'ownerType' => 'owner_type',
        'platform' => 'platform',
        'quotaModel' => 'quota_model',
        'quotaValue' => 'quota_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'agreementNo' => 'setAgreementNo',
        'effectiveEndDate' => 'setEffectiveEndDate',
        'effectiveStartDate' => 'setEffectiveStartDate',
        'outerSourceId' => 'setOuterSourceId',
        'ownerId' => 'setOwnerId',
        'ownerOpenId' => 'setOwnerOpenId',
        'ownerType' => 'setOwnerType',
        'platform' => 'setPlatform',
        'quotaModel' => 'setQuotaModel',
        'quotaValue' => 'setQuotaValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'agreementNo' => 'getAgreementNo',
        'effectiveEndDate' => 'getEffectiveEndDate',
        'effectiveStartDate' => 'getEffectiveStartDate',
        'outerSourceId' => 'getOuterSourceId',
        'ownerId' => 'getOwnerId',
        'ownerOpenId' => 'getOwnerOpenId',
        'ownerType' => 'getOwnerType',
        'platform' => 'getPlatform',
        'quotaModel' => 'getQuotaModel',
        'quotaValue' => 'getQuotaValue'
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
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['effectiveEndDate'] = $data['effectiveEndDate'] ?? null;
        $this->container['effectiveStartDate'] = $data['effectiveStartDate'] ?? null;
        $this->container['outerSourceId'] = $data['outerSourceId'] ?? null;
        $this->container['ownerId'] = $data['ownerId'] ?? null;
        $this->container['ownerOpenId'] = $data['ownerOpenId'] ?? null;
        $this->container['ownerType'] = $data['ownerType'] ?? null;
        $this->container['platform'] = $data['platform'] ?? null;
        $this->container['quotaModel'] = $data['quotaModel'] ?? null;
        $this->container['quotaValue'] = $data['quotaValue'] ?? null;
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
     * @param string|null $accountId 共同账号ID
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets agreementNo
     *
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->container['agreementNo'];
    }

    /**
     * Sets agreementNo
     *
     * @param string|null $agreementNo 授权签约协议号
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets effectiveEndDate
     *
     * @return string|null
     */
    public function getEffectiveEndDate()
    {
        return $this->container['effectiveEndDate'];
    }

    /**
     * Sets effectiveEndDate
     *
     * @param string|null $effectiveEndDate 余额失效时间（默认有效期100年）
     *
     * @return self
     */
    public function setEffectiveEndDate($effectiveEndDate)
    {
        $this->container['effectiveEndDate'] = $effectiveEndDate;

        return $this;
    }

    /**
     * Gets effectiveStartDate
     *
     * @return string|null
     */
    public function getEffectiveStartDate()
    {
        return $this->container['effectiveStartDate'];
    }

    /**
     * Sets effectiveStartDate
     *
     * @param string|null $effectiveStartDate 余额生效时间(默认当前时间)
     *
     * @return self
     */
    public function setEffectiveStartDate($effectiveStartDate)
    {
        $this->container['effectiveStartDate'] = $effectiveStartDate;

        return $this;
    }

    /**
     * Gets outerSourceId
     *
     * @return string|null
     */
    public function getOuterSourceId()
    {
        return $this->container['outerSourceId'];
    }

    /**
     * Sets outerSourceId
     *
     * @param string|null $outerSourceId 外部操作幂等ID（接入方接口调用幂等控制ID）
     *
     * @return self
     */
    public function setOuterSourceId($outerSourceId)
    {
        $this->container['outerSourceId'] = $outerSourceId;

        return $this;
    }

    /**
     * Gets ownerId
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
     * Sets ownerId
     *
     * @param string|null $ownerId 切换open_id前请使用：余额所属者ID owner_type为员工时为员工支付宝ID
     *
     * @return self
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

        return $this;
    }

    /**
     * Gets ownerOpenId
     *
     * @return string|null
     */
    public function getOwnerOpenId()
    {
        return $this->container['ownerOpenId'];
    }

    /**
     * Sets ownerOpenId
     *
     * @param string|null $ownerOpenId 切换open_id后请使用：余额所属者ID owner_type为员工时为员工open_id
     *
     * @return self
     */
    public function setOwnerOpenId($ownerOpenId)
    {
        $this->container['ownerOpenId'] = $ownerOpenId;

        return $this;
    }

    /**
     * Gets ownerType
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->container['ownerType'];
    }

    /**
     * Sets ownerType
     *
     * @param string|null $ownerType 余额所属者类型 EMPLOYEE: 员工
     *
     * @return self
     */
    public function setOwnerType($ownerType)
    {
        $this->container['ownerType'] = $ownerType;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string|null $platform 外部平台编码（通常为接入方大写英文缩写）
     *
     * @return self
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets quotaModel
     *
     * @return string|null
     */
    public function getQuotaModel()
    {
        return $this->container['quotaModel'];
    }

    /**
     * Sets quotaModel
     *
     * @param string|null $quotaModel 余额同步模式，默认 DEFAULT_STANDARD
     *
     * @return self
     */
    public function setQuotaModel($quotaModel)
    {
        $this->container['quotaModel'] = $quotaModel;

        return $this;
    }

    /**
     * Gets quotaValue
     *
     * @return string|null
     */
    public function getQuotaValue()
    {
        return $this->container['quotaValue'];
    }

    /**
     * Sets quotaValue
     *
     * @param string|null $quotaValue 余额，以（分）为单位 特殊说明：余额不超过100000元
     *
     * @return self
     */
    public function setQuotaValue($quotaValue)
    {
        $this->container['quotaValue'] = $quotaValue;

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


