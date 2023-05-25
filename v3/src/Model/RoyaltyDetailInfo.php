<?php
/**
 * RoyaltyDetailInfo
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
 * RoyaltyDetailInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RoyaltyDetailInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RoyaltyDetailInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'desc' => 'string',
        'transInAccountId' => 'string',
        'transInAccountIdType' => 'string',
        'transInAccountType' => 'string',
        'transInEntityId' => 'string',
        'transInEntityType' => 'string',
        'transInSubMerchant' => '\Alipay\OpenAPISDK\Model\SubMerchant',
        'transOutEntityId' => 'string',
        'transOutEntityType' => 'string',
        'transOutSubMerchant' => '\Alipay\OpenAPISDK\Model\SubMerchant'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'desc' => null,
        'transInAccountId' => null,
        'transInAccountIdType' => null,
        'transInAccountType' => null,
        'transInEntityId' => null,
        'transInEntityType' => null,
        'transInSubMerchant' => null,
        'transOutEntityId' => null,
        'transOutEntityType' => null,
        'transOutSubMerchant' => null
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
        'amount' => 'amount',
        'desc' => 'desc',
        'transInAccountId' => 'trans_in_account_id',
        'transInAccountIdType' => 'trans_in_account_id_type',
        'transInAccountType' => 'trans_in_account_type',
        'transInEntityId' => 'trans_in_entity_id',
        'transInEntityType' => 'trans_in_entity_type',
        'transInSubMerchant' => 'trans_in_sub_merchant',
        'transOutEntityId' => 'trans_out_entity_id',
        'transOutEntityType' => 'trans_out_entity_type',
        'transOutSubMerchant' => 'trans_out_sub_merchant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'desc' => 'setDesc',
        'transInAccountId' => 'setTransInAccountId',
        'transInAccountIdType' => 'setTransInAccountIdType',
        'transInAccountType' => 'setTransInAccountType',
        'transInEntityId' => 'setTransInEntityId',
        'transInEntityType' => 'setTransInEntityType',
        'transInSubMerchant' => 'setTransInSubMerchant',
        'transOutEntityId' => 'setTransOutEntityId',
        'transOutEntityType' => 'setTransOutEntityType',
        'transOutSubMerchant' => 'setTransOutSubMerchant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'desc' => 'getDesc',
        'transInAccountId' => 'getTransInAccountId',
        'transInAccountIdType' => 'getTransInAccountIdType',
        'transInAccountType' => 'getTransInAccountType',
        'transInEntityId' => 'getTransInEntityId',
        'transInEntityType' => 'getTransInEntityType',
        'transInSubMerchant' => 'getTransInSubMerchant',
        'transOutEntityId' => 'getTransOutEntityId',
        'transOutEntityType' => 'getTransOutEntityType',
        'transOutSubMerchant' => 'getTransOutSubMerchant'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['transInAccountId'] = $data['transInAccountId'] ?? null;
        $this->container['transInAccountIdType'] = $data['transInAccountIdType'] ?? null;
        $this->container['transInAccountType'] = $data['transInAccountType'] ?? null;
        $this->container['transInEntityId'] = $data['transInEntityId'] ?? null;
        $this->container['transInEntityType'] = $data['transInEntityType'] ?? null;
        $this->container['transInSubMerchant'] = $data['transInSubMerchant'] ?? null;
        $this->container['transOutEntityId'] = $data['transOutEntityId'] ?? null;
        $this->container['transOutEntityType'] = $data['transOutEntityType'] ?? null;
        $this->container['transOutSubMerchant'] = $data['transOutSubMerchant'] ?? null;
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 分账金额，单位为元
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param string|null $desc 分账描述
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets transInAccountId
     *
     * @return string|null
     */
    public function getTransInAccountId()
    {
        return $this->container['transInAccountId'];
    }

    /**
     * Sets transInAccountId
     *
     * @param string|null $transInAccountId 分账转入账户id。当分账账户id类型是cardSerialNo时，本参数为用户在支付宝绑定的卡编号；当分账账户id类型是userId时，本参数为用户的支付宝账号对应的支付宝唯一用户号；当分账账户id类型是loginName时，本参数为用户的支付宝登录号;当分账账户id类型是openId时，本参数为用户的在该应用下的支付宝OpenId; 当 trans_in_account_type 为defaultSettle时，本参数必须为空
     *
     * @return self
     */
    public function setTransInAccountId($transInAccountId)
    {
        $this->container['transInAccountId'] = $transInAccountId;

        return $this;
    }

    /**
     * Gets transInAccountIdType
     *
     * @return string|null
     */
    public function getTransInAccountIdType()
    {
        return $this->container['transInAccountIdType'];
    }

    /**
     * Sets transInAccountIdType
     *
     * @param string|null $transInAccountIdType 分账转入账户id类型。 当trans_in_account_type 为bankCard时，本参数为cardSerialNo，表示分账账户id是银行卡编号; 当trans_in_account_type 为alipayBalance时，本参数为userId或者loginName或者openId，其中userId表示分账账户id是支付宝唯一用户号，loginName表示分账账户id是支付宝登录号，openId表示分账账户id是支付宝OpenId; 当 trans_in_account_type 为 defaultSettle 时，本参数必须为空。
     *
     * @return self
     */
    public function setTransInAccountIdType($transInAccountIdType)
    {
        $this->container['transInAccountIdType'] = $transInAccountIdType;

        return $this;
    }

    /**
     * Gets transInAccountType
     *
     * @return string|null
     */
    public function getTransInAccountType()
    {
        return $this->container['transInAccountType'];
    }

    /**
     * Sets transInAccountType
     *
     * @param string|null $transInAccountType 分账账户类型。 bankCard: 分账账户为银行卡； alipayBalance: 分账账户为支付宝余额户; defaultSettle: 按默认结算规则分账
     *
     * @return self
     */
    public function setTransInAccountType($transInAccountType)
    {
        $this->container['transInAccountType'] = $transInAccountType;

        return $this;
    }

    /**
     * Gets transInEntityId
     *
     * @return string|null
     */
    public function getTransInEntityId()
    {
        return $this->container['transInEntityId'];
    }

    /**
     * Sets transInEntityId
     *
     * @param string|null $transInEntityId 分账转出主体账 号。    当分账转出主体类型为SecondMerchant，本参数为二级商户的SecondMerchantID    当分账转出类型为Store，本参数为StoreID
     *
     * @return self
     */
    public function setTransInEntityId($transInEntityId)
    {
        $this->container['transInEntityId'] = $transInEntityId;

        return $this;
    }

    /**
     * Gets transInEntityType
     *
     * @return string|null
     */
    public function getTransInEntityType()
    {
        return $this->container['transInEntityType'];
    }

    /**
     * Sets transInEntityType
     *
     * @param string|null $transInEntityType 分账转入主体类型。 SecondMerchant：分账转入主体为二级商户    Store: 结算门店
     *
     * @return self
     */
    public function setTransInEntityType($transInEntityType)
    {
        $this->container['transInEntityType'] = $transInEntityType;

        return $this;
    }

    /**
     * Gets transInSubMerchant
     *
     * @return \Alipay\OpenAPISDK\Model\SubMerchant|null
     */
    public function getTransInSubMerchant()
    {
        return $this->container['transInSubMerchant'];
    }

    /**
     * Sets transInSubMerchant
     *
     * @param \Alipay\OpenAPISDK\Model\SubMerchant|null $transInSubMerchant transInSubMerchant
     *
     * @return self
     */
    public function setTransInSubMerchant($transInSubMerchant)
    {
        $this->container['transInSubMerchant'] = $transInSubMerchant;

        return $this;
    }

    /**
     * Gets transOutEntityId
     *
     * @return string|null
     */
    public function getTransOutEntityId()
    {
        return $this->container['transOutEntityId'];
    }

    /**
     * Sets transOutEntityId
     *
     * @param string|null $transOutEntityId 分账转出主体账。    当分账转出主体类型为SecondMerchant，本参数为二级商户的SecondMerchantId    当分账转出类型为Store，本参数为StoreID
     *
     * @return self
     */
    public function setTransOutEntityId($transOutEntityId)
    {
        $this->container['transOutEntityId'] = $transOutEntityId;

        return $this;
    }

    /**
     * Gets transOutEntityType
     *
     * @return string|null
     */
    public function getTransOutEntityType()
    {
        return $this->container['transOutEntityType'];
    }

    /**
     * Sets transOutEntityType
     *
     * @param string|null $transOutEntityType 分账转出主体类型。 SecondMerchant：结算主体为二级商户    Store: 结算门店
     *
     * @return self
     */
    public function setTransOutEntityType($transOutEntityType)
    {
        $this->container['transOutEntityType'] = $transOutEntityType;

        return $this;
    }

    /**
     * Gets transOutSubMerchant
     *
     * @return \Alipay\OpenAPISDK\Model\SubMerchant|null
     */
    public function getTransOutSubMerchant()
    {
        return $this->container['transOutSubMerchant'];
    }

    /**
     * Sets transOutSubMerchant
     *
     * @param \Alipay\OpenAPISDK\Model\SubMerchant|null $transOutSubMerchant transOutSubMerchant
     *
     * @return self
     */
    public function setTransOutSubMerchant($transOutSubMerchant)
    {
        $this->container['transOutSubMerchant'] = $transOutSubMerchant;

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


