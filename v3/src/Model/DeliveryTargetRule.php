<?php
/**
 * DeliveryTargetRule
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
 * DeliveryTargetRule Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeliveryTargetRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryTargetRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brandIdList' => 'string[]',
        'deliveryAvailableScope' => '\Alipay\OpenAPISDK\Model\DeliveryAvailableScope',
        'deliveryCityCodeRule' => '\Alipay\OpenAPISDK\Model\DeliveryCityCodeRule',
        'deliveryMerchantInfos' => '\Alipay\OpenAPISDK\Model\DeliveryMerchantInfo[]',
        'deliveryMerchantMode' => 'string',
        'deliveryMerchantRule' => '\Alipay\OpenAPISDK\Model\DeliveryMerchantRule',
        'deliveryPromoTags' => 'string',
        'deliveryRecallMode' => 'string',
        'deliverySearchBoxRule' => '\Alipay\OpenAPISDK\Model\DeliverySearchBoxRule',
        'deliveryType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brandIdList' => null,
        'deliveryAvailableScope' => null,
        'deliveryCityCodeRule' => null,
        'deliveryMerchantInfos' => null,
        'deliveryMerchantMode' => null,
        'deliveryMerchantRule' => null,
        'deliveryPromoTags' => null,
        'deliveryRecallMode' => null,
        'deliverySearchBoxRule' => null,
        'deliveryType' => null
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
        'brandIdList' => 'brand_id_list',
        'deliveryAvailableScope' => 'delivery_available_scope',
        'deliveryCityCodeRule' => 'delivery_city_code_rule',
        'deliveryMerchantInfos' => 'delivery_merchant_infos',
        'deliveryMerchantMode' => 'delivery_merchant_mode',
        'deliveryMerchantRule' => 'delivery_merchant_rule',
        'deliveryPromoTags' => 'delivery_promo_tags',
        'deliveryRecallMode' => 'delivery_recall_mode',
        'deliverySearchBoxRule' => 'delivery_search_box_rule',
        'deliveryType' => 'delivery_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brandIdList' => 'setBrandIdList',
        'deliveryAvailableScope' => 'setDeliveryAvailableScope',
        'deliveryCityCodeRule' => 'setDeliveryCityCodeRule',
        'deliveryMerchantInfos' => 'setDeliveryMerchantInfos',
        'deliveryMerchantMode' => 'setDeliveryMerchantMode',
        'deliveryMerchantRule' => 'setDeliveryMerchantRule',
        'deliveryPromoTags' => 'setDeliveryPromoTags',
        'deliveryRecallMode' => 'setDeliveryRecallMode',
        'deliverySearchBoxRule' => 'setDeliverySearchBoxRule',
        'deliveryType' => 'setDeliveryType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brandIdList' => 'getBrandIdList',
        'deliveryAvailableScope' => 'getDeliveryAvailableScope',
        'deliveryCityCodeRule' => 'getDeliveryCityCodeRule',
        'deliveryMerchantInfos' => 'getDeliveryMerchantInfos',
        'deliveryMerchantMode' => 'getDeliveryMerchantMode',
        'deliveryMerchantRule' => 'getDeliveryMerchantRule',
        'deliveryPromoTags' => 'getDeliveryPromoTags',
        'deliveryRecallMode' => 'getDeliveryRecallMode',
        'deliverySearchBoxRule' => 'getDeliverySearchBoxRule',
        'deliveryType' => 'getDeliveryType'
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
        $this->container['brandIdList'] = $data['brandIdList'] ?? null;
        $this->container['deliveryAvailableScope'] = $data['deliveryAvailableScope'] ?? null;
        $this->container['deliveryCityCodeRule'] = $data['deliveryCityCodeRule'] ?? null;
        $this->container['deliveryMerchantInfos'] = $data['deliveryMerchantInfos'] ?? null;
        $this->container['deliveryMerchantMode'] = $data['deliveryMerchantMode'] ?? null;
        $this->container['deliveryMerchantRule'] = $data['deliveryMerchantRule'] ?? null;
        $this->container['deliveryPromoTags'] = $data['deliveryPromoTags'] ?? null;
        $this->container['deliveryRecallMode'] = $data['deliveryRecallMode'] ?? null;
        $this->container['deliverySearchBoxRule'] = $data['deliverySearchBoxRule'] ?? null;
        $this->container['deliveryType'] = $data['deliveryType'] ?? null;
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
     * Gets brandIdList
     *
     * @return string[]|null
     */
    public function getBrandIdList()
    {
        return $this->container['brandIdList'];
    }

    /**
     * Sets brandIdList
     *
     * @param string[]|null $brandIdList 指定品牌id。 说明：如商户需选择某个品牌下维护的收款账号，请上传相关品牌id
     *
     * @return self
     */
    public function setBrandIdList($brandIdList)
    {
        $this->container['brandIdList'] = $brandIdList;

        return $this;
    }

    /**
     * Gets deliveryAvailableScope
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryAvailableScope|null
     */
    public function getDeliveryAvailableScope()
    {
        return $this->container['deliveryAvailableScope'];
    }

    /**
     * Sets deliveryAvailableScope
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryAvailableScope|null $deliveryAvailableScope deliveryAvailableScope
     *
     * @return self
     */
    public function setDeliveryAvailableScope($deliveryAvailableScope)
    {
        $this->container['deliveryAvailableScope'] = $deliveryAvailableScope;

        return $this;
    }

    /**
     * Gets deliveryCityCodeRule
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryCityCodeRule|null
     */
    public function getDeliveryCityCodeRule()
    {
        return $this->container['deliveryCityCodeRule'];
    }

    /**
     * Sets deliveryCityCodeRule
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryCityCodeRule|null $deliveryCityCodeRule deliveryCityCodeRule
     *
     * @return self
     */
    public function setDeliveryCityCodeRule($deliveryCityCodeRule)
    {
        $this->container['deliveryCityCodeRule'] = $deliveryCityCodeRule;

        return $this;
    }

    /**
     * Gets deliveryMerchantInfos
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryMerchantInfo[]|null
     */
    public function getDeliveryMerchantInfos()
    {
        return $this->container['deliveryMerchantInfos'];
    }

    /**
     * Sets deliveryMerchantInfos
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryMerchantInfo[]|null $deliveryMerchantInfos 曝光商户选取列表。 说明：需要传入您期望曝光的商户的商户号，传入为空时默认使用投放优惠券活动的适用范围。 限制：曝光商户号需与投放归属商户号相同，或传入有跨主体授权关系的商户号或有弱绑定关系的M3账号
     *
     * @return self
     */
    public function setDeliveryMerchantInfos($deliveryMerchantInfos)
    {
        $this->container['deliveryMerchantInfos'] = $deliveryMerchantInfos;

        return $this;
    }

    /**
     * Gets deliveryMerchantMode
     *
     * @return string|null
     */
    public function getDeliveryMerchantMode()
    {
        return $this->container['deliveryMerchantMode'];
    }

    /**
     * Sets deliveryMerchantMode
     *
     * @param string|null $deliveryMerchantMode 指定支付成功页模式。 枚举值： MANUAL_INPUT_MERCHANT：指定收款账号 IN_SERVICE_VOUCHER_MERCHANT：优惠券可核收款账号（仅支持支付券） 收款账号相关规则:接入指南
     *
     * @return self
     */
    public function setDeliveryMerchantMode($deliveryMerchantMode)
    {
        $this->container['deliveryMerchantMode'] = $deliveryMerchantMode;

        return $this;
    }

    /**
     * Gets deliveryMerchantRule
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryMerchantRule|null
     */
    public function getDeliveryMerchantRule()
    {
        return $this->container['deliveryMerchantRule'];
    }

    /**
     * Sets deliveryMerchantRule
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryMerchantRule|null $deliveryMerchantRule deliveryMerchantRule
     *
     * @return self
     */
    public function setDeliveryMerchantRule($deliveryMerchantRule)
    {
        $this->container['deliveryMerchantRule'] = $deliveryMerchantRule;

        return $this;
    }

    /**
     * Gets deliveryPromoTags
     *
     * @return string|null
     */
    public function getDeliveryPromoTags()
    {
        return $this->container['deliveryPromoTags'];
    }

    /**
     * Sets deliveryPromoTags
     *
     * @param string|null $deliveryPromoTags 推荐定向曝光订单优惠标记。 1. 创建交易订单时，上传符合的订单优惠标。在业务参数信息“business_params”的子字段“delivery_promo_tags”填充订单优惠标。“统一收单交易支付接口”详情查看：https://opendocs.alipay.com/open/02ekfp?scene=32。 2. 订单优惠标，检验规则： * 单个优惠标最大长度32字节。多个标记值以英文逗号分隔。 * 单个优惠标仅支持字母/数字/下划线。 3. 订单优惠标规则和其他推荐规则同时叠加。
     *
     * @return self
     */
    public function setDeliveryPromoTags($deliveryPromoTags)
    {
        $this->container['deliveryPromoTags'] = $deliveryPromoTags;

        return $this;
    }

    /**
     * Gets deliveryRecallMode
     *
     * @return string|null
     */
    public function getDeliveryRecallMode()
    {
        return $this->container['deliveryRecallMode'];
    }

    /**
     * Sets deliveryRecallMode
     *
     * @param string|null $deliveryRecallMode 投放召回模式，现在支持CITY_RECALL（城市召回)和SHOP_RECALL（门店召回)两种模式。城市召回即当前城市投放，用户当前城市可领取；门店模式即门店附近投放，用户距离门店附近可领取。
     *
     * @return self
     */
    public function setDeliveryRecallMode($deliveryRecallMode)
    {
        $this->container['deliveryRecallMode'] = $deliveryRecallMode;

        return $this;
    }

    /**
     * Gets deliverySearchBoxRule
     *
     * @return \Alipay\OpenAPISDK\Model\DeliverySearchBoxRule|null
     */
    public function getDeliverySearchBoxRule()
    {
        return $this->container['deliverySearchBoxRule'];
    }

    /**
     * Sets deliverySearchBoxRule
     *
     * @param \Alipay\OpenAPISDK\Model\DeliverySearchBoxRule|null $deliverySearchBoxRule deliverySearchBoxRule
     *
     * @return self
     */
    public function setDeliverySearchBoxRule($deliverySearchBoxRule)
    {
        $this->container['deliverySearchBoxRule'] = $deliverySearchBoxRule;

        return $this;
    }

    /**
     * Gets deliveryType
     *
     * @return string|null
     */
    public function getDeliveryType()
    {
        return $this->container['deliveryType'];
    }

    /**
     * Sets deliveryType
     *
     * @param string|null $deliveryType 小程序推广可用。枚举值：SERVICE_DIRECT
     *
     * @return self
     */
    public function setDeliveryType($deliveryType)
    {
        $this->container['deliveryType'] = $deliveryType;

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


