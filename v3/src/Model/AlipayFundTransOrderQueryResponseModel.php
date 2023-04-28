<?php
/**
 * AlipayFundTransOrderQueryResponseModel
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
 * AlipayFundTransOrderQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundTransOrderQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundTransOrderQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'arrivalTimeEnd' => 'string',
        'errorCode' => 'string',
        'failReason' => 'string',
        'orderFee' => 'string',
        'orderId' => 'string',
        'outBizNo' => 'string',
        'payDate' => 'string',
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
        'arrivalTimeEnd' => null,
        'errorCode' => null,
        'failReason' => null,
        'orderFee' => null,
        'orderId' => null,
        'outBizNo' => null,
        'payDate' => null,
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
        'arrivalTimeEnd' => 'arrival_time_end',
        'errorCode' => 'error_code',
        'failReason' => 'fail_reason',
        'orderFee' => 'order_fee',
        'orderId' => 'order_id',
        'outBizNo' => 'out_biz_no',
        'payDate' => 'pay_date',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrivalTimeEnd' => 'setArrivalTimeEnd',
        'errorCode' => 'setErrorCode',
        'failReason' => 'setFailReason',
        'orderFee' => 'setOrderFee',
        'orderId' => 'setOrderId',
        'outBizNo' => 'setOutBizNo',
        'payDate' => 'setPayDate',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrivalTimeEnd' => 'getArrivalTimeEnd',
        'errorCode' => 'getErrorCode',
        'failReason' => 'getFailReason',
        'orderFee' => 'getOrderFee',
        'orderId' => 'getOrderId',
        'outBizNo' => 'getOutBizNo',
        'payDate' => 'getPayDate',
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
        $this->container['arrivalTimeEnd'] = $data['arrivalTimeEnd'] ?? null;
        $this->container['errorCode'] = $data['errorCode'] ?? null;
        $this->container['failReason'] = $data['failReason'] ?? null;
        $this->container['orderFee'] = $data['orderFee'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['payDate'] = $data['payDate'] ?? null;
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
     * Gets arrivalTimeEnd
     *
     * @return string|null
     */
    public function getArrivalTimeEnd()
    {
        return $this->container['arrivalTimeEnd'];
    }

    /**
     * Sets arrivalTimeEnd
     *
     * @param string|null $arrivalTimeEnd 预计到账时间，转账到银行卡专用，格式为yyyy-MM-dd HH:mm:ss，转账受理失败不返回。     注意：  此参数为预计时间，可能与实际到账时间有较大误差，不能作为实际到账时间使用，仅供参考用途。
     *
     * @return self
     */
    public function setArrivalTimeEnd($arrivalTimeEnd)
    {
        $this->container['arrivalTimeEnd'] = $arrivalTimeEnd;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param string|null $errorCode 查询失败时，本参数为错误代 码。   查询成功不返回。 对于退票订单，不返回该参数。
     *
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;

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
     * @param string|null $failReason 查询到的订单状态为FAIL失败或REFUND退票时，返回具体的原因。
     *
     * @return self
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

        return $this;
    }

    /**
     * Gets orderFee
     *
     * @return string|null
     */
    public function getOrderFee()
    {
        return $this->container['orderFee'];
    }

    /**
     * Sets orderFee
     *
     * @param string|null $orderFee 预计收费金额（元），转账到银行卡专用，数字格式，精确到小数点后2位，转账失败或转账受理失败不返回。
     *
     * @return self
     */
    public function setOrderFee($orderFee)
    {
        $this->container['orderFee'] = $orderFee;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId 支付宝转账单据号，查询失败不返回。
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 发起转账来源方定义的转账单据号。   该参数的赋值均以查询结果中 的 out_biz_no 为准。   如果查询失败，不返回该参数。
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets payDate
     *
     * @return string|null
     */
    public function getPayDate()
    {
        return $this->container['payDate'];
    }

    /**
     * Sets payDate
     *
     * @param string|null $payDate 支付时间，格式为yyyy-MM-dd HH:mm:ss，转账失败不返回。
     *
     * @return self
     */
    public function setPayDate($payDate)
    {
        $this->container['payDate'] = $payDate;

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
     * @param string|null $status 转账单据状态。   SUCCESS：成功（配合\"单笔转账到银行账户接口\"产品使用时, 同一笔单据多次查询有可能从成功变成退票状态）；   FAIL：失败（具体失败原因请参见error_code以及fail_reason返回值）；   INIT：等待处理；   DEALING：处理中；   REFUND：退票（仅配合\"单笔转账到银行账户接口\"产品使用时会涉及, 具体退票原因请参见fail_reason返回值）；   UNKNOWN：状态未知。
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

