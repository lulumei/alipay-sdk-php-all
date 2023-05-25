<?php
/**
 * ZhimaCreditPeZmgoCumulationSyncModel
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
 * ZhimaCreditPeZmgoCumulationSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaCreditPeZmgoCumulationSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaCreditPeZmgoCumulationSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementNo' => 'string',
        'amountTypeData' => '\Alipay\OpenAPISDK\Model\AmountTypeData',
        'bizAction' => 'string',
        'bizTime' => 'string',
        'cumulateDataType' => 'string',
        'extInfo' => 'string',
        'hasAlipayTrade' => 'bool',
        'openId' => 'string',
        'outBizNo' => 'string',
        'partnerId' => 'string',
        'payOutBizNo' => 'string',
        'requestFrom' => 'string',
        'taskTypeData' => '\Alipay\OpenAPISDK\Model\TaskTypeData',
        'userId' => 'string'
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
        'amountTypeData' => null,
        'bizAction' => null,
        'bizTime' => null,
        'cumulateDataType' => null,
        'extInfo' => null,
        'hasAlipayTrade' => null,
        'openId' => null,
        'outBizNo' => null,
        'partnerId' => null,
        'payOutBizNo' => null,
        'requestFrom' => null,
        'taskTypeData' => null,
        'userId' => null
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
        'amountTypeData' => 'amount_type_data',
        'bizAction' => 'biz_action',
        'bizTime' => 'biz_time',
        'cumulateDataType' => 'cumulate_data_type',
        'extInfo' => 'ext_info',
        'hasAlipayTrade' => 'has_alipay_trade',
        'openId' => 'open_id',
        'outBizNo' => 'out_biz_no',
        'partnerId' => 'partner_id',
        'payOutBizNo' => 'pay_out_biz_no',
        'requestFrom' => 'request_from',
        'taskTypeData' => 'task_type_data',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementNo' => 'setAgreementNo',
        'amountTypeData' => 'setAmountTypeData',
        'bizAction' => 'setBizAction',
        'bizTime' => 'setBizTime',
        'cumulateDataType' => 'setCumulateDataType',
        'extInfo' => 'setExtInfo',
        'hasAlipayTrade' => 'setHasAlipayTrade',
        'openId' => 'setOpenId',
        'outBizNo' => 'setOutBizNo',
        'partnerId' => 'setPartnerId',
        'payOutBizNo' => 'setPayOutBizNo',
        'requestFrom' => 'setRequestFrom',
        'taskTypeData' => 'setTaskTypeData',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementNo' => 'getAgreementNo',
        'amountTypeData' => 'getAmountTypeData',
        'bizAction' => 'getBizAction',
        'bizTime' => 'getBizTime',
        'cumulateDataType' => 'getCumulateDataType',
        'extInfo' => 'getExtInfo',
        'hasAlipayTrade' => 'getHasAlipayTrade',
        'openId' => 'getOpenId',
        'outBizNo' => 'getOutBizNo',
        'partnerId' => 'getPartnerId',
        'payOutBizNo' => 'getPayOutBizNo',
        'requestFrom' => 'getRequestFrom',
        'taskTypeData' => 'getTaskTypeData',
        'userId' => 'getUserId'
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
        $this->container['amountTypeData'] = $data['amountTypeData'] ?? null;
        $this->container['bizAction'] = $data['bizAction'] ?? null;
        $this->container['bizTime'] = $data['bizTime'] ?? null;
        $this->container['cumulateDataType'] = $data['cumulateDataType'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['hasAlipayTrade'] = $data['hasAlipayTrade'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['payOutBizNo'] = $data['payOutBizNo'] ?? null;
        $this->container['requestFrom'] = $data['requestFrom'] ?? null;
        $this->container['taskTypeData'] = $data['taskTypeData'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
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
     * @param string|null $agreementNo 芝麻go协议号，唯一标识一个芝麻go协议。为必传入参。
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets amountTypeData
     *
     * @return \Alipay\OpenAPISDK\Model\AmountTypeData|null
     */
    public function getAmountTypeData()
    {
        return $this->container['amountTypeData'];
    }

    /**
     * Sets amountTypeData
     *
     * @param \Alipay\OpenAPISDK\Model\AmountTypeData|null $amountTypeData amountTypeData
     *
     * @return self
     */
    public function setAmountTypeData($amountTypeData)
    {
        $this->container['amountTypeData'] = $amountTypeData;

        return $this;
    }

    /**
     * Gets bizAction
     *
     * @return string|null
     */
    public function getBizAction()
    {
        return $this->container['bizAction'];
    }

    /**
     * Sets bizAction
     *
     * @param string|null $bizAction 数据回传的动作类型，为枚举值，为必传入参。 可取值： (\"ORDER_PAID\", \"正向支付\")，(\"ORDER_REFUND\", \"逆向退款\")。 其中ORDER_PAID表示回传为正向的，即订单金额累加，优惠累加，任务次数累加；而ORDER_REFUND表示回传为逆向的，即订单金额退款，优惠退款，任务次数回退。
     *
     * @return self
     */
    public function setBizAction($bizAction)
    {
        $this->container['bizAction'] = $bizAction;

        return $this;
    }

    /**
     * Gets bizTime
     *
     * @return string|null
     */
    public function getBizTime()
    {
        return $this->container['bizTime'];
    }

    /**
     * Sets bizTime
     *
     * @param string|null $bizTime 交易发生时间，包括：订单交易时间，优惠核销时间，以及任务完成时间。为必传入参。 如：用户在【2019-03-08 00:00:00】核销了一个红包，但是【2019-03-10 00:00:00】才进行数据回传，此时biz_time取值红包核销的时间，也就是【2019-03-08 00:00:00】。
     *
     * @return self
     */
    public function setBizTime($bizTime)
    {
        $this->container['bizTime'] = $bizTime;

        return $this;
    }

    /**
     * Gets cumulateDataType
     *
     * @return string|null
     */
    public function getCumulateDataType()
    {
        return $this->container['cumulateDataType'];
    }

    /**
     * Sets cumulateDataType
     *
     * @param string|null $cumulateDataType 累计类型。为枚举值，为必传入参。 可取值：(\"AMOUNT\", \"金额类型\")，(\"TASK\", \"任务类型\")，(\"AMOUNT_TASK\", \"额度和任务类型\")。 其中，交易解耦模式仅允许AMOUNT或TASK。而交易绑定模式下，仅允许AMOUNT_TASK。
     *
     * @return self
     */
    public function setCumulateDataType($cumulateDataType)
    {
        $this->container['cumulateDataType'] = $cumulateDataType;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return string|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param string|null $extInfo 扩展字段，格式为Json格式的字符串，非必传。
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets hasAlipayTrade
     *
     * @return bool|null
     */
    public function getHasAlipayTrade()
    {
        return $this->container['hasAlipayTrade'];
    }

    /**
     * Sets hasAlipayTrade
     *
     * @param bool|null $hasAlipayTrade 是否为支付宝交易。仅在累计模式为【交易绑定模式】下被消费。当芝麻Go模板配置的累计模式为交易绑定模式时，此时需传入扩展参数是否为支付宝交易。若是支付宝交易，传值true，否则为false。若不传此字段，默认为false。 若为true，则会对交易号trade_no进行校验，校验是否为支付宝交易，以及用户userId和商户partnerId是否一致，若校验不通过，累计失败。
     *
     * @return self
     */
    public function setHasAlipayTrade($hasAlipayTrade)
    {
        $this->container['hasAlipayTrade'] = $hasAlipayTrade;

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
     * @param string|null $openId 用户userId，蚂蚁统一会员ID，为必传入参。
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

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
     * @param string|null $outBizNo 外部业务号。需保证唯一，为必传入参。 若接口调用失败，提示信息为更换幂等号，商户更换此字段重新发起调用。
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId 商户ID，为必传入参。
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets payOutBizNo
     *
     * @return string|null
     */
    public function getPayOutBizNo()
    {
        return $this->container['payOutBizNo'];
    }

    /**
     * Sets payOutBizNo
     *
     * @param string|null $payOutBizNo 逆向对应的正向外部业务号。逆向场景为必传入参。也就是biz_action为ORDER_REFUND时为必传入参。 逆向时需通过此字段明确对应的正向的外部业务号。
     *
     * @return self
     */
    public function setPayOutBizNo($payOutBizNo)
    {
        $this->container['payOutBizNo'] = $payOutBizNo;

        return $this;
    }

    /**
     * Gets requestFrom
     *
     * @return string|null
     */
    public function getRequestFrom()
    {
        return $this->container['requestFrom'];
    }

    /**
     * Sets requestFrom
     *
     * @param string|null $requestFrom 取固定值ExternalMerchantSource，为必传入参。表示数据回传来源为外部商户，数据回传内部逻辑需感知。
     *
     * @return self
     */
    public function setRequestFrom($requestFrom)
    {
        $this->container['requestFrom'] = $requestFrom;

        return $this;
    }

    /**
     * Gets taskTypeData
     *
     * @return \Alipay\OpenAPISDK\Model\TaskTypeData|null
     */
    public function getTaskTypeData()
    {
        return $this->container['taskTypeData'];
    }

    /**
     * Sets taskTypeData
     *
     * @param \Alipay\OpenAPISDK\Model\TaskTypeData|null $taskTypeData taskTypeData
     *
     * @return self
     */
    public function setTaskTypeData($taskTypeData)
    {
        $this->container['taskTypeData'] = $taskTypeData;

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
     * @param string|null $userId 用户userId，蚂蚁统一会员ID，为必传入参。
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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


