<?php
/**
 * ActivityLiteInfo
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
 * ActivityLiteInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActivityLiteInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActivityLiteInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityBaseInfo' => '\Alipay\OpenAPISDK\Model\ActivityBaseInfo',
        'activityId' => 'string',
        'activityName' => 'string',
        'activityStatus' => 'string',
        'belongMerchantId' => 'string',
        'createTime' => 'string',
        'publishEndTime' => 'string',
        'publishStartTime' => 'string',
        'voucherAvailableScopeInfo' => '\Alipay\OpenAPISDK\Model\VoucherAvailableScopeInfo',
        'voucherDeductInfo' => '\Alipay\OpenAPISDK\Model\VoucherDeductInfo',
        'voucherDisplayLiteInfo' => '\Alipay\OpenAPISDK\Model\CommonVoucherDisplayLiteInfo',
        'voucherDisplayPatternInfo' => '\Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo',
        'voucherSendModeInfo' => '\Alipay\OpenAPISDK\Model\VoucherSendModeInfo',
        'voucherType' => 'string',
        'voucherUseRuleInfo' => '\Alipay\OpenAPISDK\Model\VoucherUseRuleInfo',
        'voucherUseRuleLiteInfo' => '\Alipay\OpenAPISDK\Model\CommonVoucherUseRuleLiteInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activityBaseInfo' => null,
        'activityId' => null,
        'activityName' => null,
        'activityStatus' => null,
        'belongMerchantId' => null,
        'createTime' => null,
        'publishEndTime' => null,
        'publishStartTime' => null,
        'voucherAvailableScopeInfo' => null,
        'voucherDeductInfo' => null,
        'voucherDisplayLiteInfo' => null,
        'voucherDisplayPatternInfo' => null,
        'voucherSendModeInfo' => null,
        'voucherType' => null,
        'voucherUseRuleInfo' => null,
        'voucherUseRuleLiteInfo' => null
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
        'activityBaseInfo' => 'activity_base_info',
        'activityId' => 'activity_id',
        'activityName' => 'activity_name',
        'activityStatus' => 'activity_status',
        'belongMerchantId' => 'belong_merchant_id',
        'createTime' => 'create_time',
        'publishEndTime' => 'publish_end_time',
        'publishStartTime' => 'publish_start_time',
        'voucherAvailableScopeInfo' => 'voucher_available_scope_info',
        'voucherDeductInfo' => 'voucher_deduct_info',
        'voucherDisplayLiteInfo' => 'voucher_display_lite_info',
        'voucherDisplayPatternInfo' => 'voucher_display_pattern_info',
        'voucherSendModeInfo' => 'voucher_send_mode_info',
        'voucherType' => 'voucher_type',
        'voucherUseRuleInfo' => 'voucher_use_rule_info',
        'voucherUseRuleLiteInfo' => 'voucher_use_rule_lite_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityBaseInfo' => 'setActivityBaseInfo',
        'activityId' => 'setActivityId',
        'activityName' => 'setActivityName',
        'activityStatus' => 'setActivityStatus',
        'belongMerchantId' => 'setBelongMerchantId',
        'createTime' => 'setCreateTime',
        'publishEndTime' => 'setPublishEndTime',
        'publishStartTime' => 'setPublishStartTime',
        'voucherAvailableScopeInfo' => 'setVoucherAvailableScopeInfo',
        'voucherDeductInfo' => 'setVoucherDeductInfo',
        'voucherDisplayLiteInfo' => 'setVoucherDisplayLiteInfo',
        'voucherDisplayPatternInfo' => 'setVoucherDisplayPatternInfo',
        'voucherSendModeInfo' => 'setVoucherSendModeInfo',
        'voucherType' => 'setVoucherType',
        'voucherUseRuleInfo' => 'setVoucherUseRuleInfo',
        'voucherUseRuleLiteInfo' => 'setVoucherUseRuleLiteInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityBaseInfo' => 'getActivityBaseInfo',
        'activityId' => 'getActivityId',
        'activityName' => 'getActivityName',
        'activityStatus' => 'getActivityStatus',
        'belongMerchantId' => 'getBelongMerchantId',
        'createTime' => 'getCreateTime',
        'publishEndTime' => 'getPublishEndTime',
        'publishStartTime' => 'getPublishStartTime',
        'voucherAvailableScopeInfo' => 'getVoucherAvailableScopeInfo',
        'voucherDeductInfo' => 'getVoucherDeductInfo',
        'voucherDisplayLiteInfo' => 'getVoucherDisplayLiteInfo',
        'voucherDisplayPatternInfo' => 'getVoucherDisplayPatternInfo',
        'voucherSendModeInfo' => 'getVoucherSendModeInfo',
        'voucherType' => 'getVoucherType',
        'voucherUseRuleInfo' => 'getVoucherUseRuleInfo',
        'voucherUseRuleLiteInfo' => 'getVoucherUseRuleLiteInfo'
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
        $this->container['activityBaseInfo'] = $data['activityBaseInfo'] ?? null;
        $this->container['activityId'] = $data['activityId'] ?? null;
        $this->container['activityName'] = $data['activityName'] ?? null;
        $this->container['activityStatus'] = $data['activityStatus'] ?? null;
        $this->container['belongMerchantId'] = $data['belongMerchantId'] ?? null;
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['publishEndTime'] = $data['publishEndTime'] ?? null;
        $this->container['publishStartTime'] = $data['publishStartTime'] ?? null;
        $this->container['voucherAvailableScopeInfo'] = $data['voucherAvailableScopeInfo'] ?? null;
        $this->container['voucherDeductInfo'] = $data['voucherDeductInfo'] ?? null;
        $this->container['voucherDisplayLiteInfo'] = $data['voucherDisplayLiteInfo'] ?? null;
        $this->container['voucherDisplayPatternInfo'] = $data['voucherDisplayPatternInfo'] ?? null;
        $this->container['voucherSendModeInfo'] = $data['voucherSendModeInfo'] ?? null;
        $this->container['voucherType'] = $data['voucherType'] ?? null;
        $this->container['voucherUseRuleInfo'] = $data['voucherUseRuleInfo'] ?? null;
        $this->container['voucherUseRuleLiteInfo'] = $data['voucherUseRuleLiteInfo'] ?? null;
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
     * Gets activityBaseInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ActivityBaseInfo|null
     */
    public function getActivityBaseInfo()
    {
        return $this->container['activityBaseInfo'];
    }

    /**
     * Sets activityBaseInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ActivityBaseInfo|null $activityBaseInfo activityBaseInfo
     *
     * @return self
     */
    public function setActivityBaseInfo($activityBaseInfo)
    {
        $this->container['activityBaseInfo'] = $activityBaseInfo;

        return $this;
    }

    /**
     * Gets activityId
     *
     * @return string|null
     */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
     * Sets activityId
     *
     * @param string|null $activityId 活动 id。
     *
     * @return self
     */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;

        return $this;
    }

    /**
     * Gets activityName
     *
     * @return string|null
     */
    public function getActivityName()
    {
        return $this->container['activityName'];
    }

    /**
     * Sets activityName
     *
     * @param string|null $activityName 活动名称。 不对支付宝用户进行展示，仅供商家在后台管理活动使用。
     *
     * @return self
     */
    public function setActivityName($activityName)
    {
        $this->container['activityName'] = $activityName;

        return $this;
    }

    /**
     * Gets activityStatus
     *
     * @return string|null
     */
    public function getActivityStatus()
    {
        return $this->container['activityStatus'];
    }

    /**
     * Sets activityStatus
     *
     * @param string|null $activityStatus 活动状态。
     *
     * @return self
     */
    public function setActivityStatus($activityStatus)
    {
        $this->container['activityStatus'] = $activityStatus;

        return $this;
    }

    /**
     * Gets belongMerchantId
     *
     * @return string|null
     */
    public function getBelongMerchantId()
    {
        return $this->container['belongMerchantId'];
    }

    /**
     * Sets belongMerchantId
     *
     * @param string|null $belongMerchantId 归属商户 PID。
     *
     * @return self
     */
    public function setBelongMerchantId($belongMerchantId)
    {
        $this->container['belongMerchantId'] = $belongMerchantId;

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
     * @param string|null $createTime 活动创建时间。
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets publishEndTime
     *
     * @return string|null
     */
    public function getPublishEndTime()
    {
        return $this->container['publishEndTime'];
    }

    /**
     * Sets publishEndTime
     *
     * @param string|null $publishEndTime 券发放结束时间。格式为：yyyy-MM-dd HH:mm:ss。
     *
     * @return self
     */
    public function setPublishEndTime($publishEndTime)
    {
        $this->container['publishEndTime'] = $publishEndTime;

        return $this;
    }

    /**
     * Gets publishStartTime
     *
     * @return string|null
     */
    public function getPublishStartTime()
    {
        return $this->container['publishStartTime'];
    }

    /**
     * Sets publishStartTime
     *
     * @param string|null $publishStartTime 券发放开始时间。格式为：yyyy-MM-dd HH:mm:ss。
     *
     * @return self
     */
    public function setPublishStartTime($publishStartTime)
    {
        $this->container['publishStartTime'] = $publishStartTime;

        return $this;
    }

    /**
     * Gets voucherAvailableScopeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherAvailableScopeInfo|null
     */
    public function getVoucherAvailableScopeInfo()
    {
        return $this->container['voucherAvailableScopeInfo'];
    }

    /**
     * Sets voucherAvailableScopeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherAvailableScopeInfo|null $voucherAvailableScopeInfo voucherAvailableScopeInfo
     *
     * @return self
     */
    public function setVoucherAvailableScopeInfo($voucherAvailableScopeInfo)
    {
        $this->container['voucherAvailableScopeInfo'] = $voucherAvailableScopeInfo;

        return $this;
    }

    /**
     * Gets voucherDeductInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDeductInfo|null
     */
    public function getVoucherDeductInfo()
    {
        return $this->container['voucherDeductInfo'];
    }

    /**
     * Sets voucherDeductInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDeductInfo|null $voucherDeductInfo voucherDeductInfo
     *
     * @return self
     */
    public function setVoucherDeductInfo($voucherDeductInfo)
    {
        $this->container['voucherDeductInfo'] = $voucherDeductInfo;

        return $this;
    }

    /**
     * Gets voucherDisplayLiteInfo
     *
     * @return \Alipay\OpenAPISDK\Model\CommonVoucherDisplayLiteInfo|null
     */
    public function getVoucherDisplayLiteInfo()
    {
        return $this->container['voucherDisplayLiteInfo'];
    }

    /**
     * Sets voucherDisplayLiteInfo
     *
     * @param \Alipay\OpenAPISDK\Model\CommonVoucherDisplayLiteInfo|null $voucherDisplayLiteInfo voucherDisplayLiteInfo
     *
     * @return self
     */
    public function setVoucherDisplayLiteInfo($voucherDisplayLiteInfo)
    {
        $this->container['voucherDisplayLiteInfo'] = $voucherDisplayLiteInfo;

        return $this;
    }

    /**
     * Gets voucherDisplayPatternInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo|null
     */
    public function getVoucherDisplayPatternInfo()
    {
        return $this->container['voucherDisplayPatternInfo'];
    }

    /**
     * Sets voucherDisplayPatternInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo|null $voucherDisplayPatternInfo voucherDisplayPatternInfo
     *
     * @return self
     */
    public function setVoucherDisplayPatternInfo($voucherDisplayPatternInfo)
    {
        $this->container['voucherDisplayPatternInfo'] = $voucherDisplayPatternInfo;

        return $this;
    }

    /**
     * Gets voucherSendModeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherSendModeInfo|null
     */
    public function getVoucherSendModeInfo()
    {
        return $this->container['voucherSendModeInfo'];
    }

    /**
     * Sets voucherSendModeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherSendModeInfo|null $voucherSendModeInfo voucherSendModeInfo
     *
     * @return self
     */
    public function setVoucherSendModeInfo($voucherSendModeInfo)
    {
        $this->container['voucherSendModeInfo'] = $voucherSendModeInfo;

        return $this;
    }

    /**
     * Gets voucherType
     *
     * @return string|null
     */
    public function getVoucherType()
    {
        return $this->container['voucherType'];
    }

    /**
     * Sets voucherType
     *
     * @param string|null $voucherType 券类型。
     *
     * @return self
     */
    public function setVoucherType($voucherType)
    {
        $this->container['voucherType'] = $voucherType;

        return $this;
    }

    /**
     * Gets voucherUseRuleInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherUseRuleInfo|null
     */
    public function getVoucherUseRuleInfo()
    {
        return $this->container['voucherUseRuleInfo'];
    }

    /**
     * Sets voucherUseRuleInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherUseRuleInfo|null $voucherUseRuleInfo voucherUseRuleInfo
     *
     * @return self
     */
    public function setVoucherUseRuleInfo($voucherUseRuleInfo)
    {
        $this->container['voucherUseRuleInfo'] = $voucherUseRuleInfo;

        return $this;
    }

    /**
     * Gets voucherUseRuleLiteInfo
     *
     * @return \Alipay\OpenAPISDK\Model\CommonVoucherUseRuleLiteInfo|null
     */
    public function getVoucherUseRuleLiteInfo()
    {
        return $this->container['voucherUseRuleLiteInfo'];
    }

    /**
     * Sets voucherUseRuleLiteInfo
     *
     * @param \Alipay\OpenAPISDK\Model\CommonVoucherUseRuleLiteInfo|null $voucherUseRuleLiteInfo voucherUseRuleLiteInfo
     *
     * @return self
     */
    public function setVoucherUseRuleLiteInfo($voucherUseRuleLiteInfo)
    {
        $this->container['voucherUseRuleLiteInfo'] = $voucherUseRuleLiteInfo;

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


