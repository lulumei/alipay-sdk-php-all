<?php
/**
 * ZhimaMerchantZmgoCumulateQueryResponseModel
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
 * The version of the OpenAPI document: 2023-04-19
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
 * ZhimaMerchantZmgoCumulateQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaMerchantZmgoCumulateQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaMerchantZmgoCumulateQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aggrAmount' => 'string',
        'aggrDiscountAmount' => 'string',
        'aggrTimes' => 'int',
        'agreementId' => 'string',
        'detailList' => '\Alipay\OpenAPISDK\Model\CumulateDataDetail[]',
        'failReason' => 'string',
        'pageNo' => 'int',
        'pageSize' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aggrAmount' => null,
        'aggrDiscountAmount' => null,
        'aggrTimes' => null,
        'agreementId' => null,
        'detailList' => null,
        'failReason' => null,
        'pageNo' => null,
        'pageSize' => null
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
        'aggrAmount' => 'aggr_amount',
        'aggrDiscountAmount' => 'aggr_discount_amount',
        'aggrTimes' => 'aggr_times',
        'agreementId' => 'agreement_id',
        'detailList' => 'detail_list',
        'failReason' => 'fail_reason',
        'pageNo' => 'page_no',
        'pageSize' => 'page_size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aggrAmount' => 'setAggrAmount',
        'aggrDiscountAmount' => 'setAggrDiscountAmount',
        'aggrTimes' => 'setAggrTimes',
        'agreementId' => 'setAgreementId',
        'detailList' => 'setDetailList',
        'failReason' => 'setFailReason',
        'pageNo' => 'setPageNo',
        'pageSize' => 'setPageSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aggrAmount' => 'getAggrAmount',
        'aggrDiscountAmount' => 'getAggrDiscountAmount',
        'aggrTimes' => 'getAggrTimes',
        'agreementId' => 'getAgreementId',
        'detailList' => 'getDetailList',
        'failReason' => 'getFailReason',
        'pageNo' => 'getPageNo',
        'pageSize' => 'getPageSize'
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
        $this->container['aggrAmount'] = $data['aggrAmount'] ?? null;
        $this->container['aggrDiscountAmount'] = $data['aggrDiscountAmount'] ?? null;
        $this->container['aggrTimes'] = $data['aggrTimes'] ?? null;
        $this->container['agreementId'] = $data['agreementId'] ?? null;
        $this->container['detailList'] = $data['detailList'] ?? null;
        $this->container['failReason'] = $data['failReason'] ?? null;
        $this->container['pageNo'] = $data['pageNo'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
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
     * Gets aggrAmount
     *
     * @return string|null
     */
    public function getAggrAmount()
    {
        return $this->container['aggrAmount'];
    }

    /**
     * Sets aggrAmount
     *
     * @param string|null $aggrAmount 总共累计金额
     *
     * @return self
     */
    public function setAggrAmount($aggrAmount)
    {
        $this->container['aggrAmount'] = $aggrAmount;

        return $this;
    }

    /**
     * Gets aggrDiscountAmount
     *
     * @return string|null
     */
    public function getAggrDiscountAmount()
    {
        return $this->container['aggrDiscountAmount'];
    }

    /**
     * Sets aggrDiscountAmount
     *
     * @param string|null $aggrDiscountAmount 总共累计优惠金额
     *
     * @return self
     */
    public function setAggrDiscountAmount($aggrDiscountAmount)
    {
        $this->container['aggrDiscountAmount'] = $aggrDiscountAmount;

        return $this;
    }

    /**
     * Gets aggrTimes
     *
     * @return int|null
     */
    public function getAggrTimes()
    {
        return $this->container['aggrTimes'];
    }

    /**
     * Sets aggrTimes
     *
     * @param int|null $aggrTimes 总共累计次数
     *
     * @return self
     */
    public function setAggrTimes($aggrTimes)
    {
        $this->container['aggrTimes'] = $aggrTimes;

        return $this;
    }

    /**
     * Gets agreementId
     *
     * @return string|null
     */
    public function getAgreementId()
    {
        return $this->container['agreementId'];
    }

    /**
     * Sets agreementId
     *
     * @param string|null $agreementId 芝麻go协议号，唯一标识一个芝麻go协议。
     *
     * @return self
     */
    public function setAgreementId($agreementId)
    {
        $this->container['agreementId'] = $agreementId;

        return $this;
    }

    /**
     * Gets detailList
     *
     * @return \Alipay\OpenAPISDK\Model\CumulateDataDetail[]|null
     */
    public function getDetailList()
    {
        return $this->container['detailList'];
    }

    /**
     * Sets detailList
     *
     * @param \Alipay\OpenAPISDK\Model\CumulateDataDetail[]|null $detailList 详情数据列表
     *
     * @return self
     */
    public function setDetailList($detailList)
    {
        $this->container['detailList'] = $detailList;

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
     * @param string|null $failReason 查询失败原因
     *
     * @return self
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

        return $this;
    }

    /**
     * Gets pageNo
     *
     * @return int|null
     */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
     * Sets pageNo
     *
     * @param int|null $pageNo 分页参数，返回传入的值。
     *
     * @return self
     */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;

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
     * @param int|null $pageSize 分页参数，返回传入的值。
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

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

