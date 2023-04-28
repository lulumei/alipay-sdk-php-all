<?php
/**
 * OrderExtIstd
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
 * OrderExtIstd Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderExtIstd implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderExtIstd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cashOnDelivery' => 'string',
        'cashOnPickup' => 'string',
        'consumerOrderTime' => 'string',
        'deliveryDirection' => 'int',
        'deliveryType' => 'int',
        'desc' => 'string',
        'expectedDeliveryTime' => 'string',
        'expectedFinishTime' => 'string',
        'expectedPickTime' => 'string',
        'insurePrice' => 'string',
        'isDirectDelivery' => 'int',
        'isFinishCodeNeeded' => 'int',
        'isInsured' => 'int',
        'isPickupCodeNeeded' => 'int',
        'poiSeq' => 'string',
        'serviceCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cashOnDelivery' => null,
        'cashOnPickup' => null,
        'consumerOrderTime' => null,
        'deliveryDirection' => null,
        'deliveryType' => null,
        'desc' => null,
        'expectedDeliveryTime' => null,
        'expectedFinishTime' => null,
        'expectedPickTime' => null,
        'insurePrice' => null,
        'isDirectDelivery' => null,
        'isFinishCodeNeeded' => null,
        'isInsured' => null,
        'isPickupCodeNeeded' => null,
        'poiSeq' => null,
        'serviceCode' => null
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
        'cashOnDelivery' => 'cash_on_delivery',
        'cashOnPickup' => 'cash_on_pickup',
        'consumerOrderTime' => 'consumer_order_time',
        'deliveryDirection' => 'delivery_direction',
        'deliveryType' => 'delivery_type',
        'desc' => 'desc',
        'expectedDeliveryTime' => 'expected_delivery_time',
        'expectedFinishTime' => 'expected_finish_time',
        'expectedPickTime' => 'expected_pick_time',
        'insurePrice' => 'insure_price',
        'isDirectDelivery' => 'is_direct_delivery',
        'isFinishCodeNeeded' => 'is_finish_code_needed',
        'isInsured' => 'is_insured',
        'isPickupCodeNeeded' => 'is_pickup_code_needed',
        'poiSeq' => 'poi_seq',
        'serviceCode' => 'service_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cashOnDelivery' => 'setCashOnDelivery',
        'cashOnPickup' => 'setCashOnPickup',
        'consumerOrderTime' => 'setConsumerOrderTime',
        'deliveryDirection' => 'setDeliveryDirection',
        'deliveryType' => 'setDeliveryType',
        'desc' => 'setDesc',
        'expectedDeliveryTime' => 'setExpectedDeliveryTime',
        'expectedFinishTime' => 'setExpectedFinishTime',
        'expectedPickTime' => 'setExpectedPickTime',
        'insurePrice' => 'setInsurePrice',
        'isDirectDelivery' => 'setIsDirectDelivery',
        'isFinishCodeNeeded' => 'setIsFinishCodeNeeded',
        'isInsured' => 'setIsInsured',
        'isPickupCodeNeeded' => 'setIsPickupCodeNeeded',
        'poiSeq' => 'setPoiSeq',
        'serviceCode' => 'setServiceCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cashOnDelivery' => 'getCashOnDelivery',
        'cashOnPickup' => 'getCashOnPickup',
        'consumerOrderTime' => 'getConsumerOrderTime',
        'deliveryDirection' => 'getDeliveryDirection',
        'deliveryType' => 'getDeliveryType',
        'desc' => 'getDesc',
        'expectedDeliveryTime' => 'getExpectedDeliveryTime',
        'expectedFinishTime' => 'getExpectedFinishTime',
        'expectedPickTime' => 'getExpectedPickTime',
        'insurePrice' => 'getInsurePrice',
        'isDirectDelivery' => 'getIsDirectDelivery',
        'isFinishCodeNeeded' => 'getIsFinishCodeNeeded',
        'isInsured' => 'getIsInsured',
        'isPickupCodeNeeded' => 'getIsPickupCodeNeeded',
        'poiSeq' => 'getPoiSeq',
        'serviceCode' => 'getServiceCode'
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
        $this->container['cashOnDelivery'] = $data['cashOnDelivery'] ?? null;
        $this->container['cashOnPickup'] = $data['cashOnPickup'] ?? null;
        $this->container['consumerOrderTime'] = $data['consumerOrderTime'] ?? null;
        $this->container['deliveryDirection'] = $data['deliveryDirection'] ?? null;
        $this->container['deliveryType'] = $data['deliveryType'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['expectedDeliveryTime'] = $data['expectedDeliveryTime'] ?? null;
        $this->container['expectedFinishTime'] = $data['expectedFinishTime'] ?? null;
        $this->container['expectedPickTime'] = $data['expectedPickTime'] ?? null;
        $this->container['insurePrice'] = $data['insurePrice'] ?? null;
        $this->container['isDirectDelivery'] = $data['isDirectDelivery'] ?? null;
        $this->container['isFinishCodeNeeded'] = $data['isFinishCodeNeeded'] ?? null;
        $this->container['isInsured'] = $data['isInsured'] ?? null;
        $this->container['isPickupCodeNeeded'] = $data['isPickupCodeNeeded'] ?? null;
        $this->container['poiSeq'] = $data['poiSeq'] ?? null;
        $this->container['serviceCode'] = $data['serviceCode'] ?? null;
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
     * Gets cashOnDelivery
     *
     * @return string|null
     */
    public function getCashOnDelivery()
    {
        return $this->container['cashOnDelivery'];
    }

    /**
     * Sets cashOnDelivery
     *
     * @param string|null $cashOnDelivery 骑手应付金额
     *
     * @return self
     */
    public function setCashOnDelivery($cashOnDelivery)
    {
        $this->container['cashOnDelivery'] = $cashOnDelivery;

        return $this;
    }

    /**
     * Gets cashOnPickup
     *
     * @return string|null
     */
    public function getCashOnPickup()
    {
        return $this->container['cashOnPickup'];
    }

    /**
     * Sets cashOnPickup
     *
     * @param string|null $cashOnPickup 骑手应收金额
     *
     * @return self
     */
    public function setCashOnPickup($cashOnPickup)
    {
        $this->container['cashOnPickup'] = $cashOnPickup;

        return $this;
    }

    /**
     * Gets consumerOrderTime
     *
     * @return string|null
     */
    public function getConsumerOrderTime()
    {
        return $this->container['consumerOrderTime'];
    }

    /**
     * Sets consumerOrderTime
     *
     * @param string|null $consumerOrderTime 消费者下单时间
     *
     * @return self
     */
    public function setConsumerOrderTime($consumerOrderTime)
    {
        $this->container['consumerOrderTime'] = $consumerOrderTime;

        return $this;
    }

    /**
     * Gets deliveryDirection
     *
     * @return int|null
     */
    public function getDeliveryDirection()
    {
        return $this->container['deliveryDirection'];
    }

    /**
     * Sets deliveryDirection
     *
     * @param int|null $deliveryDirection 物流流向，1：从门店取件送至用户；2：从用户取件送至门店
     *
     * @return self
     */
    public function setDeliveryDirection($deliveryDirection)
    {
        $this->container['deliveryDirection'] = $deliveryDirection;

        return $this;
    }

    /**
     * Gets deliveryType
     *
     * @return int|null
     */
    public function getDeliveryType()
    {
        return $this->container['deliveryType'];
    }

    /**
     * Sets deliveryType
     *
     * @param int|null $deliveryType 配送类型, 0: 即时单 1 预约单
     *
     * @return self
     */
    public function setDeliveryType($deliveryType)
    {
        $this->container['deliveryType'] = $deliveryType;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc 备注
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets expectedDeliveryTime
     *
     * @return string|null
     */
    public function getExpectedDeliveryTime()
    {
        return $this->container['expectedDeliveryTime'];
    }

    /**
     * Sets expectedDeliveryTime
     *
     * @param string|null $expectedDeliveryTime 期望派单时间
     *
     * @return self
     */
    public function setExpectedDeliveryTime($expectedDeliveryTime)
    {
        $this->container['expectedDeliveryTime'] = $expectedDeliveryTime;

        return $this;
    }

    /**
     * Gets expectedFinishTime
     *
     * @return string|null
     */
    public function getExpectedFinishTime()
    {
        return $this->container['expectedFinishTime'];
    }

    /**
     * Sets expectedFinishTime
     *
     * @param string|null $expectedFinishTime 期望送达时间
     *
     * @return self
     */
    public function setExpectedFinishTime($expectedFinishTime)
    {
        $this->container['expectedFinishTime'] = $expectedFinishTime;

        return $this;
    }

    /**
     * Gets expectedPickTime
     *
     * @return string|null
     */
    public function getExpectedPickTime()
    {
        return $this->container['expectedPickTime'];
    }

    /**
     * Sets expectedPickTime
     *
     * @param string|null $expectedPickTime 期望取件时间
     *
     * @return self
     */
    public function setExpectedPickTime($expectedPickTime)
    {
        $this->container['expectedPickTime'] = $expectedPickTime;

        return $this;
    }

    /**
     * Gets insurePrice
     *
     * @return string|null
     */
    public function getInsurePrice()
    {
        return $this->container['insurePrice'];
    }

    /**
     * Sets insurePrice
     *
     * @param string|null $insurePrice 保价金额
     *
     * @return self
     */
    public function setInsurePrice($insurePrice)
    {
        $this->container['insurePrice'] = $insurePrice;

        return $this;
    }

    /**
     * Gets isDirectDelivery
     *
     * @return int|null
     */
    public function getIsDirectDelivery()
    {
        return $this->container['isDirectDelivery'];
    }

    /**
     * Sets isDirectDelivery
     *
     * @param int|null $isDirectDelivery 是否直拿直送，1:直拿直送 0:非直拿直送
     *
     * @return self
     */
    public function setIsDirectDelivery($isDirectDelivery)
    {
        $this->container['isDirectDelivery'] = $isDirectDelivery;

        return $this;
    }

    /**
     * Gets isFinishCodeNeeded
     *
     * @return int|null
     */
    public function getIsFinishCodeNeeded()
    {
        return $this->container['isFinishCodeNeeded'];
    }

    /**
     * Sets isFinishCodeNeeded
     *
     * @param int|null $isFinishCodeNeeded 是否需要收货码，1:需要 0:不需要
     *
     * @return self
     */
    public function setIsFinishCodeNeeded($isFinishCodeNeeded)
    {
        $this->container['isFinishCodeNeeded'] = $isFinishCodeNeeded;

        return $this;
    }

    /**
     * Gets isInsured
     *
     * @return int|null
     */
    public function getIsInsured()
    {
        return $this->container['isInsured'];
    }

    /**
     * Sets isInsured
     *
     * @param int|null $isInsured 是否保价，1:保价 0:不保价
     *
     * @return self
     */
    public function setIsInsured($isInsured)
    {
        $this->container['isInsured'] = $isInsured;

        return $this;
    }

    /**
     * Gets isPickupCodeNeeded
     *
     * @return int|null
     */
    public function getIsPickupCodeNeeded()
    {
        return $this->container['isPickupCodeNeeded'];
    }

    /**
     * Sets isPickupCodeNeeded
     *
     * @param int|null $isPickupCodeNeeded 是否需要取货码，1:需要 0:不需要
     *
     * @return self
     */
    public function setIsPickupCodeNeeded($isPickupCodeNeeded)
    {
        $this->container['isPickupCodeNeeded'] = $isPickupCodeNeeded;

        return $this;
    }

    /**
     * Gets poiSeq
     *
     * @return string|null
     */
    public function getPoiSeq()
    {
        return $this->container['poiSeq'];
    }

    /**
     * Sets poiSeq
     *
     * @param string|null $poiSeq 门店订单流水号
     *
     * @return self
     */
    public function setPoiSeq($poiSeq)
    {
        $this->container['poiSeq'] = $poiSeq;

        return $this;
    }

    /**
     * Gets serviceCode
     *
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->container['serviceCode'];
    }

    /**
     * Sets serviceCode
     *
     * @param string|null $serviceCode 即时配送公司的服务代码
     *
     * @return self
     */
    public function setServiceCode($serviceCode)
    {
        $this->container['serviceCode'] = $serviceCode;

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

