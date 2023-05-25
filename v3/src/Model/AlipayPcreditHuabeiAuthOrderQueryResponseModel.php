<?php
/**
 * AlipayPcreditHuabeiAuthOrderQueryResponseModel
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
 * AlipayPcreditHuabeiAuthOrderQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayPcreditHuabeiAuthOrderQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayPcreditHuabeiAuthOrderQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementNo' => 'string',
        'alipayUserId' => 'string',
        'authOptId' => 'string',
        'gmtTrans' => 'string',
        'openId' => 'string',
        'orderTitle' => 'string',
        'outRequestNo' => 'string',
        'restFreezeAmount' => 'string',
        'sellerId' => 'string',
        'transAmount' => 'string',
        'transStatus' => 'string',
        'transType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agreementNo' => null,
        'alipayUserId' => null,
        'authOptId' => null,
        'gmtTrans' => null,
        'openId' => null,
        'orderTitle' => null,
        'outRequestNo' => null,
        'restFreezeAmount' => null,
        'sellerId' => null,
        'transAmount' => null,
        'transStatus' => null,
        'transType' => null
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
        'agreementNo' => 'agreement_no',
        'alipayUserId' => 'alipay_user_id',
        'authOptId' => 'auth_opt_id',
        'gmtTrans' => 'gmt_trans',
        'openId' => 'open_id',
        'orderTitle' => 'order_title',
        'outRequestNo' => 'out_request_no',
        'restFreezeAmount' => 'rest_freeze_amount',
        'sellerId' => 'seller_id',
        'transAmount' => 'trans_amount',
        'transStatus' => 'trans_status',
        'transType' => 'trans_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementNo' => 'setAgreementNo',
        'alipayUserId' => 'setAlipayUserId',
        'authOptId' => 'setAuthOptId',
        'gmtTrans' => 'setGmtTrans',
        'openId' => 'setOpenId',
        'orderTitle' => 'setOrderTitle',
        'outRequestNo' => 'setOutRequestNo',
        'restFreezeAmount' => 'setRestFreezeAmount',
        'sellerId' => 'setSellerId',
        'transAmount' => 'setTransAmount',
        'transStatus' => 'setTransStatus',
        'transType' => 'setTransType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementNo' => 'getAgreementNo',
        'alipayUserId' => 'getAlipayUserId',
        'authOptId' => 'getAuthOptId',
        'gmtTrans' => 'getGmtTrans',
        'openId' => 'getOpenId',
        'orderTitle' => 'getOrderTitle',
        'outRequestNo' => 'getOutRequestNo',
        'restFreezeAmount' => 'getRestFreezeAmount',
        'sellerId' => 'getSellerId',
        'transAmount' => 'getTransAmount',
        'transStatus' => 'getTransStatus',
        'transType' => 'getTransType'
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
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['alipayUserId'] = $data['alipayUserId'] ?? null;
        $this->container['authOptId'] = $data['authOptId'] ?? null;
        $this->container['gmtTrans'] = $data['gmtTrans'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['orderTitle'] = $data['orderTitle'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['restFreezeAmount'] = $data['restFreezeAmount'] ?? null;
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['transAmount'] = $data['transAmount'] ?? null;
        $this->container['transStatus'] = $data['transStatus'] ?? null;
        $this->container['transType'] = $data['transType'] ?? null;
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
     * @param string|null $agreementNo 支付宝系统中用以唯一标识用户签约记录的编号，即花呗先享协议号。
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets alipayUserId
     *
     * @return string|null
     */
    public function getAlipayUserId()
    {
        return $this->container['alipayUserId'];
    }

    /**
     * Sets alipayUserId
     *
     * @param string|null $alipayUserId 支付宝用户userId
     *
     * @return self
     */
    public function setAlipayUserId($alipayUserId)
    {
        $this->container['alipayUserId'] = $alipayUserId;

        return $this;
    }

    /**
     * Gets authOptId
     *
     * @return string|null
     */
    public function getAuthOptId()
    {
        return $this->container['authOptId'];
    }

    /**
     * Sets authOptId
     *
     * @param string|null $authOptId 支付宝侧花呗冻结解冻操作单据id
     *
     * @return self
     */
    public function setAuthOptId($authOptId)
    {
        $this->container['authOptId'] = $authOptId;

        return $this;
    }

    /**
     * Gets gmtTrans
     *
     * @return string|null
     */
    public function getGmtTrans()
    {
        return $this->container['gmtTrans'];
    }

    /**
     * Sets gmtTrans
     *
     * @param string|null $gmtTrans 业务操作完成时间
     *
     * @return self
     */
    public function setGmtTrans($gmtTrans)
    {
        $this->container['gmtTrans'] = $gmtTrans;

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
     * @param string|null $openId 支付宝用户userId
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets orderTitle
     *
     * @return string|null
     */
    public function getOrderTitle()
    {
        return $this->container['orderTitle'];
    }

    /**
     * Sets orderTitle
     *
     * @param string|null $orderTitle 商户业务订单的简单描述，如商品名称等，长度不超过100个字母或50个汉字
     *
     * @return self
     */
    public function setOrderTitle($orderTitle)
    {
        $this->container['orderTitle'] = $orderTitle;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 商户本次操作的请求流水号
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets restFreezeAmount
     *
     * @return string|null
     */
    public function getRestFreezeAmount()
    {
        return $this->container['restFreezeAmount'];
    }

    /**
     * Sets restFreezeAmount
     *
     * @param string|null $restFreezeAmount 完成本次操作时，用户资金池余额快照。仅作提示用，请勿用于核对，并发情况下数值有可能不准确。两位小数，单位元。
     *
     * @return self
     */
    public function setRestFreezeAmount($restFreezeAmount)
    {
        $this->container['restFreezeAmount'] = $restFreezeAmount;

        return $this;
    }

    /**
     * Gets sellerId
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string|null $sellerId 商户的支付宝用户id
     *
     * @return self
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets transAmount
     *
     * @return string|null
     */
    public function getTransAmount()
    {
        return $this->container['transAmount'];
    }

    /**
     * Sets transAmount
     *
     * @param string|null $transAmount 冻结或者解冻金额
     *
     * @return self
     */
    public function setTransAmount($transAmount)
    {
        $this->container['transAmount'] = $transAmount;

        return $this;
    }

    /**
     * Gets transStatus
     *
     * @return string|null
     */
    public function getTransStatus()
    {
        return $this->container['transStatus'];
    }

    /**
     * Sets transStatus
     *
     * @param string|null $transStatus 业务操作状态，Y表示成功结束；N表示失败结束；I表示进行中。
     *
     * @return self
     */
    public function setTransStatus($transStatus)
    {
        $this->container['transStatus'] = $transStatus;

        return $this;
    }

    /**
     * Gets transType
     *
     * @return string|null
     */
    public function getTransType()
    {
        return $this->container['transType'];
    }

    /**
     * Sets transType
     *
     * @param string|null $transType 操作类型，FREEZE表示冻结操作；UNFREEZE表示解冻操作；PAY表示支付操作；SETTLE表示结算操作
     *
     * @return self
     */
    public function setTransType($transType)
    {
        $this->container['transType'] = $transType;

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


