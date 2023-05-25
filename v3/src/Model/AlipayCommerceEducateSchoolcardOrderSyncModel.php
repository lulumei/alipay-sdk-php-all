<?php
/**
 * AlipayCommerceEducateSchoolcardOrderSyncModel
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
 * AlipayCommerceEducateSchoolcardOrderSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayCommerceEducateSchoolcardOrderSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayCommerceEducateSchoolcardOrderSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actualAmount' => 'string',
        'appletAppId' => 'string',
        'cardBalance' => 'string',
        'cardNo' => 'string',
        'cardType' => 'string',
        'createTime' => 'string',
        'discountAmount' => 'string',
        'goodsOrders' => '\Alipay\OpenAPISDK\Model\GoodsOrder',
        'merchantName' => 'string',
        'modifiedTime' => 'string',
        'openId' => 'string',
        'orderAmount' => 'string',
        'orderDetailUrl' => 'string',
        'orderStatus' => 'string',
        'outBizNo' => 'string',
        'payAddress' => 'string',
        'payMode' => 'string',
        'rakeBackPid' => 'string',
        'schoolId' => 'string',
        'schoolPid' => 'string',
        'serviceProviderName' => 'string',
        'type' => 'string',
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
        'actualAmount' => null,
        'appletAppId' => null,
        'cardBalance' => null,
        'cardNo' => null,
        'cardType' => null,
        'createTime' => null,
        'discountAmount' => null,
        'goodsOrders' => null,
        'merchantName' => null,
        'modifiedTime' => null,
        'openId' => null,
        'orderAmount' => null,
        'orderDetailUrl' => null,
        'orderStatus' => null,
        'outBizNo' => null,
        'payAddress' => null,
        'payMode' => null,
        'rakeBackPid' => null,
        'schoolId' => null,
        'schoolPid' => null,
        'serviceProviderName' => null,
        'type' => null,
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
        'actualAmount' => 'actual_amount',
        'appletAppId' => 'applet_app_id',
        'cardBalance' => 'card_balance',
        'cardNo' => 'card_no',
        'cardType' => 'card_type',
        'createTime' => 'create_time',
        'discountAmount' => 'discount_amount',
        'goodsOrders' => 'goods_orders',
        'merchantName' => 'merchant_name',
        'modifiedTime' => 'modified_time',
        'openId' => 'open_id',
        'orderAmount' => 'order_amount',
        'orderDetailUrl' => 'order_detail_url',
        'orderStatus' => 'order_status',
        'outBizNo' => 'out_biz_no',
        'payAddress' => 'pay_address',
        'payMode' => 'pay_mode',
        'rakeBackPid' => 'rake_back_pid',
        'schoolId' => 'school_id',
        'schoolPid' => 'school_pid',
        'serviceProviderName' => 'service_provider_name',
        'type' => 'type',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actualAmount' => 'setActualAmount',
        'appletAppId' => 'setAppletAppId',
        'cardBalance' => 'setCardBalance',
        'cardNo' => 'setCardNo',
        'cardType' => 'setCardType',
        'createTime' => 'setCreateTime',
        'discountAmount' => 'setDiscountAmount',
        'goodsOrders' => 'setGoodsOrders',
        'merchantName' => 'setMerchantName',
        'modifiedTime' => 'setModifiedTime',
        'openId' => 'setOpenId',
        'orderAmount' => 'setOrderAmount',
        'orderDetailUrl' => 'setOrderDetailUrl',
        'orderStatus' => 'setOrderStatus',
        'outBizNo' => 'setOutBizNo',
        'payAddress' => 'setPayAddress',
        'payMode' => 'setPayMode',
        'rakeBackPid' => 'setRakeBackPid',
        'schoolId' => 'setSchoolId',
        'schoolPid' => 'setSchoolPid',
        'serviceProviderName' => 'setServiceProviderName',
        'type' => 'setType',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actualAmount' => 'getActualAmount',
        'appletAppId' => 'getAppletAppId',
        'cardBalance' => 'getCardBalance',
        'cardNo' => 'getCardNo',
        'cardType' => 'getCardType',
        'createTime' => 'getCreateTime',
        'discountAmount' => 'getDiscountAmount',
        'goodsOrders' => 'getGoodsOrders',
        'merchantName' => 'getMerchantName',
        'modifiedTime' => 'getModifiedTime',
        'openId' => 'getOpenId',
        'orderAmount' => 'getOrderAmount',
        'orderDetailUrl' => 'getOrderDetailUrl',
        'orderStatus' => 'getOrderStatus',
        'outBizNo' => 'getOutBizNo',
        'payAddress' => 'getPayAddress',
        'payMode' => 'getPayMode',
        'rakeBackPid' => 'getRakeBackPid',
        'schoolId' => 'getSchoolId',
        'schoolPid' => 'getSchoolPid',
        'serviceProviderName' => 'getServiceProviderName',
        'type' => 'getType',
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
        $this->container['actualAmount'] = $data['actualAmount'] ?? null;
        $this->container['appletAppId'] = $data['appletAppId'] ?? null;
        $this->container['cardBalance'] = $data['cardBalance'] ?? null;
        $this->container['cardNo'] = $data['cardNo'] ?? null;
        $this->container['cardType'] = $data['cardType'] ?? null;
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['discountAmount'] = $data['discountAmount'] ?? null;
        $this->container['goodsOrders'] = $data['goodsOrders'] ?? null;
        $this->container['merchantName'] = $data['merchantName'] ?? null;
        $this->container['modifiedTime'] = $data['modifiedTime'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['orderAmount'] = $data['orderAmount'] ?? null;
        $this->container['orderDetailUrl'] = $data['orderDetailUrl'] ?? null;
        $this->container['orderStatus'] = $data['orderStatus'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['payAddress'] = $data['payAddress'] ?? null;
        $this->container['payMode'] = $data['payMode'] ?? null;
        $this->container['rakeBackPid'] = $data['rakeBackPid'] ?? null;
        $this->container['schoolId'] = $data['schoolId'] ?? null;
        $this->container['schoolPid'] = $data['schoolPid'] ?? null;
        $this->container['serviceProviderName'] = $data['serviceProviderName'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * Gets actualAmount
     *
     * @return string|null
     */
    public function getActualAmount()
    {
        return $this->container['actualAmount'];
    }

    /**
     * Sets actualAmount
     *
     * @param string|null $actualAmount 实际金额（总支付金额）
     *
     * @return self
     */
    public function setActualAmount($actualAmount)
    {
        $this->container['actualAmount'] = $actualAmount;

        return $this;
    }

    /**
     * Gets appletAppId
     *
     * @return string|null
     */
    public function getAppletAppId()
    {
        return $this->container['appletAppId'];
    }

    /**
     * Sets appletAppId
     *
     * @param string|null $appletAppId 小程序appid
     *
     * @return self
     */
    public function setAppletAppId($appletAppId)
    {
        $this->container['appletAppId'] = $appletAppId;

        return $this;
    }

    /**
     * Gets cardBalance
     *
     * @return string|null
     */
    public function getCardBalance()
    {
        return $this->container['cardBalance'];
    }

    /**
     * Sets cardBalance
     *
     * @param string|null $cardBalance 校园卡余额
     *
     * @return self
     */
    public function setCardBalance($cardBalance)
    {
        $this->container['cardBalance'] = $cardBalance;

        return $this;
    }

    /**
     * Gets cardNo
     *
     * @return string|null
     */
    public function getCardNo()
    {
        return $this->container['cardNo'];
    }

    /**
     * Sets cardNo
     *
     * @param string|null $cardNo 卡号
     *
     * @return self
     */
    public function setCardNo($cardNo)
    {
        $this->container['cardNo'] = $cardNo;

        return $this;
    }

    /**
     * Gets cardType
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['cardType'];
    }

    /**
     * Sets cardType
     *
     * @param string|null $cardType 卡类型
     *
     * @return self
     */
    public function setCardType($cardType)
    {
        $this->container['cardType'] = $cardType;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string|null $createTime 该笔订单真实的创建时间，需精确到毫秒。时间格式为 yyyy-MM-dd HH:mm:ss.SSS。同一笔订单保持不变
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets discountAmount
     *
     * @return string|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     *
     * @param string|null $discountAmount 优惠金额
     *
     * @return self
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets goodsOrders
     *
     * @return \Alipay\OpenAPISDK\Model\GoodsOrder|null
     */
    public function getGoodsOrders()
    {
        return $this->container['goodsOrders'];
    }

    /**
     * Sets goodsOrders
     *
     * @param \Alipay\OpenAPISDK\Model\GoodsOrder|null $goodsOrders goodsOrders
     *
     * @return self
     */
    public function setGoodsOrders($goodsOrders)
    {
        $this->container['goodsOrders'] = $goodsOrders;

        return $this;
    }

    /**
     * Gets merchantName
     *
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     *
     * @param string|null $merchantName 商家名称，不传默认展示学校名称
     *
     * @return self
     */
    public function setMerchantName($merchantName)
    {
        $this->container['merchantName'] = $merchantName;

        return $this;
    }

    /**
     * Gets modifiedTime
     *
     * @return string|null
     */
    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    /**
     * Sets modifiedTime
     *
     * @param string|null $modifiedTime 订单修改时间，时间格式为 yyyy-MM-dd HH:mm:ss.SSS。用于订单状态或数据变化较快的顺序控制，防止乱序。order_modified_time较晚的同步会被最终存储，order_modified_time相同的两次同步会被幂等处理。
     *
     * @return self
     */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;

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
     * @param string|null $openId 蚂蚁统一会员ID
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets orderAmount
     *
     * @return string|null
     */
    public function getOrderAmount()
    {
        return $this->container['orderAmount'];
    }

    /**
     * Sets orderAmount
     *
     * @param string|null $orderAmount 订单金额
     *
     * @return self
     */
    public function setOrderAmount($orderAmount)
    {
        $this->container['orderAmount'] = $orderAmount;

        return $this;
    }

    /**
     * Gets orderDetailUrl
     *
     * @return string|null
     */
    public function getOrderDetailUrl()
    {
        return $this->container['orderDetailUrl'];
    }

    /**
     * Sets orderDetailUrl
     *
     * @param string|null $orderDetailUrl 订单详情链接
     *
     * @return self
     */
    public function setOrderDetailUrl($orderDetailUrl)
    {
        $this->container['orderDetailUrl'] = $orderDetailUrl;

        return $this;
    }

    /**
     * Gets orderStatus
     *
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     *
     * @param string|null $orderStatus 订单状态 消费成功 CONSUME_S ；已退款：REFUNDED； 开卡成功 CARD_ACTIVED；消费失败：UN_CHARGE 充值成功 RECHARGE_S
     *
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

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
     * @param string|null $outBizNo 外部业务号
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets payAddress
     *
     * @return string|null
     */
    public function getPayAddress()
    {
        return $this->container['payAddress'];
    }

    /**
     * Sets payAddress
     *
     * @param string|null $payAddress 支付地点
     *
     * @return self
     */
    public function setPayAddress($payAddress)
    {
        $this->container['payAddress'] = $payAddress;

        return $this;
    }

    /**
     * Gets payMode
     *
     * @return string|null
     */
    public function getPayMode()
    {
        return $this->container['payMode'];
    }

    /**
     * Sets payMode
     *
     * @param string|null $payMode 付款方式，不传默认展示学校名称+校园卡+（卡号后四位）
     *
     * @return self
     */
    public function setPayMode($payMode)
    {
        $this->container['payMode'] = $payMode;

        return $this;
    }

    /**
     * Gets rakeBackPid
     *
     * @return string|null
     */
    public function getRakeBackPid()
    {
        return $this->container['rakeBackPid'];
    }

    /**
     * Sets rakeBackPid
     *
     * @param string|null $rakeBackPid 返佣pid
     *
     * @return self
     */
    public function setRakeBackPid($rakeBackPid)
    {
        $this->container['rakeBackPid'] = $rakeBackPid;

        return $this;
    }

    /**
     * Gets schoolId
     *
     * @return string|null
     */
    public function getSchoolId()
    {
        return $this->container['schoolId'];
    }

    /**
     * Sets schoolId
     *
     * @param string|null $schoolId 学校内标
     *
     * @return self
     */
    public function setSchoolId($schoolId)
    {
        $this->container['schoolId'] = $schoolId;

        return $this;
    }

    /**
     * Gets schoolPid
     *
     * @return string|null
     */
    public function getSchoolPid()
    {
        return $this->container['schoolPid'];
    }

    /**
     * Sets schoolPid
     *
     * @param string|null $schoolPid 学校pid
     *
     * @return self
     */
    public function setSchoolPid($schoolPid)
    {
        $this->container['schoolPid'] = $schoolPid;

        return $this;
    }

    /**
     * Gets serviceProviderName
     *
     * @return string|null
     */
    public function getServiceProviderName()
    {
        return $this->container['serviceProviderName'];
    }

    /**
     * Sets serviceProviderName
     *
     * @param string|null $serviceProviderName 服务提供者名称
     *
     * @return self
     */
    public function setServiceProviderName($serviceProviderName)
    {
        $this->container['serviceProviderName'] = $serviceProviderName;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 业务类型
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string|null $userId 蚂蚁统一会员ID
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


