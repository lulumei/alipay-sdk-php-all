<?php
/**
 * AlipayEbppPdeductBillPayStatusResponseModel
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
 * AlipayEbppPdeductBillPayStatusResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppPdeductBillPayStatusResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppPdeductBillPayStatusResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementId' => 'string',
        'openId' => 'string',
        'orderNo' => 'string',
        'orderResultCode' => 'string',
        'orderResultMsg' => 'string',
        'outOrderNo' => 'string',
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
        'agreementId' => null,
        'openId' => null,
        'orderNo' => null,
        'orderResultCode' => null,
        'orderResultMsg' => null,
        'outOrderNo' => null,
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
        'agreementId' => 'agreement_id',
        'openId' => 'open_id',
        'orderNo' => 'order_no',
        'orderResultCode' => 'order_result_code',
        'orderResultMsg' => 'order_result_msg',
        'outOrderNo' => 'out_order_no',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementId' => 'setAgreementId',
        'openId' => 'setOpenId',
        'orderNo' => 'setOrderNo',
        'orderResultCode' => 'setOrderResultCode',
        'orderResultMsg' => 'setOrderResultMsg',
        'outOrderNo' => 'setOutOrderNo',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementId' => 'getAgreementId',
        'openId' => 'getOpenId',
        'orderNo' => 'getOrderNo',
        'orderResultCode' => 'getOrderResultCode',
        'orderResultMsg' => 'getOrderResultMsg',
        'outOrderNo' => 'getOutOrderNo',
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
        $this->container['agreementId'] = $data['agreementId'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['orderNo'] = $data['orderNo'] ?? null;
        $this->container['orderResultCode'] = $data['orderResultCode'] ?? null;
        $this->container['orderResultMsg'] = $data['orderResultMsg'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
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
     * @param string|null $agreementId 支付宝协议流水
     *
     * @return self
     */
    public function setAgreementId($agreementId)
    {
        $this->container['agreementId'] = $agreementId;

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
     * @param string|null $openId 用户UserId在应用AppId下的唯一用户标识
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets orderNo
     *
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
     * Sets orderNo
     *
     * @param string|null $orderNo 支付宝流billNo
     *
     * @return self
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

        return $this;
    }

    /**
     * Gets orderResultCode
     *
     * @return string|null
     */
    public function getOrderResultCode()
    {
        return $this->container['orderResultCode'];
    }

    /**
     * Sets orderResultCode
     *
     * @param string|null $orderResultCode 订单的结果码
     *
     * @return self
     */
    public function setOrderResultCode($orderResultCode)
    {
        $this->container['orderResultCode'] = $orderResultCode;

        return $this;
    }

    /**
     * Gets orderResultMsg
     *
     * @return string|null
     */
    public function getOrderResultMsg()
    {
        return $this->container['orderResultMsg'];
    }

    /**
     * Sets orderResultMsg
     *
     * @param string|null $orderResultMsg 订单的结果描述
     *
     * @return self
     */
    public function setOrderResultMsg($orderResultMsg)
    {
        $this->container['orderResultMsg'] = $orderResultMsg;

        return $this;
    }

    /**
     * Gets outOrderNo
     *
     * @return string|null
     */
    public function getOutOrderNo()
    {
        return $this->container['outOrderNo'];
    }

    /**
     * Sets outOrderNo
     *
     * @param string|null $outOrderNo 外部订单流水
     *
     * @return self
     */
    public function setOutOrderNo($outOrderNo)
    {
        $this->container['outOrderNo'] = $outOrderNo;

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
     * @param string|null $status 支付宝订单支付状态。  0：未知状态。  1：支付成功。  2：支付失败。
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


