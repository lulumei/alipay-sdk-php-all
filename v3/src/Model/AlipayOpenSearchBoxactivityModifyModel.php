<?php
/**
 * AlipayOpenSearchBoxactivityModifyModel
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
 * AlipayOpenSearchBoxactivityModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenSearchBoxactivityModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenSearchBoxactivityModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actionUrl' => 'string',
        'backgroundWord' => 'string',
        'boxActivityId' => 'string',
        'endTime' => 'string',
        'materialId' => 'string',
        'materialType' => 'string',
        'merchantId' => 'string',
        'startTime' => 'string',
        'targetAppid' => 'string',
        'targetAppname' => 'string',
        'targetRegions' => '\Alipay\OpenAPISDK\Model\DeliveryTargetRegion[]',
        'title' => 'string',
        'videoInfo' => '\Alipay\OpenAPISDK\Model\SearchBoxActivityVideoInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actionUrl' => null,
        'backgroundWord' => null,
        'boxActivityId' => null,
        'endTime' => null,
        'materialId' => null,
        'materialType' => null,
        'merchantId' => null,
        'startTime' => null,
        'targetAppid' => null,
        'targetAppname' => null,
        'targetRegions' => null,
        'title' => null,
        'videoInfo' => null
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
        'actionUrl' => 'action_url',
        'backgroundWord' => 'background_word',
        'boxActivityId' => 'box_activity_id',
        'endTime' => 'end_time',
        'materialId' => 'material_id',
        'materialType' => 'material_type',
        'merchantId' => 'merchant_id',
        'startTime' => 'start_time',
        'targetAppid' => 'target_appid',
        'targetAppname' => 'target_appname',
        'targetRegions' => 'target_regions',
        'title' => 'title',
        'videoInfo' => 'video_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionUrl' => 'setActionUrl',
        'backgroundWord' => 'setBackgroundWord',
        'boxActivityId' => 'setBoxActivityId',
        'endTime' => 'setEndTime',
        'materialId' => 'setMaterialId',
        'materialType' => 'setMaterialType',
        'merchantId' => 'setMerchantId',
        'startTime' => 'setStartTime',
        'targetAppid' => 'setTargetAppid',
        'targetAppname' => 'setTargetAppname',
        'targetRegions' => 'setTargetRegions',
        'title' => 'setTitle',
        'videoInfo' => 'setVideoInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionUrl' => 'getActionUrl',
        'backgroundWord' => 'getBackgroundWord',
        'boxActivityId' => 'getBoxActivityId',
        'endTime' => 'getEndTime',
        'materialId' => 'getMaterialId',
        'materialType' => 'getMaterialType',
        'merchantId' => 'getMerchantId',
        'startTime' => 'getStartTime',
        'targetAppid' => 'getTargetAppid',
        'targetAppname' => 'getTargetAppname',
        'targetRegions' => 'getTargetRegions',
        'title' => 'getTitle',
        'videoInfo' => 'getVideoInfo'
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
        $this->container['actionUrl'] = $data['actionUrl'] ?? null;
        $this->container['backgroundWord'] = $data['backgroundWord'] ?? null;
        $this->container['boxActivityId'] = $data['boxActivityId'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['materialId'] = $data['materialId'] ?? null;
        $this->container['materialType'] = $data['materialType'] ?? null;
        $this->container['merchantId'] = $data['merchantId'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['targetAppid'] = $data['targetAppid'] ?? null;
        $this->container['targetAppname'] = $data['targetAppname'] ?? null;
        $this->container['targetRegions'] = $data['targetRegions'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['videoInfo'] = $data['videoInfo'] ?? null;
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
     * Gets actionUrl
     *
     * @return string|null
     */
    public function getActionUrl()
    {
        return $this->container['actionUrl'];
    }

    /**
     * Sets actionUrl
     *
     * @param string|null $actionUrl 活动链接，必须为关联的小程序的页面链接（链接以 alipays 开头），可参考<a href=\"https://opendocs.alipay.com/support/01rb18\"> 小程序scheme链接介绍 </a>
     *
     * @return self
     */
    public function setActionUrl($actionUrl)
    {
        $this->container['actionUrl'] = $actionUrl;

        return $this;
    }

    /**
     * Gets backgroundWord
     *
     * @return string|null
     */
    public function getBackgroundWord()
    {
        return $this->container['backgroundWord'];
    }

    /**
     * Sets backgroundWord
     *
     * @param string|null $backgroundWord 创建banner活动时，可添加底纹推广词，有机会在首页搜索框内展示，提升banner活动曝光机会
     *
     * @return self
     */
    public function setBackgroundWord($backgroundWord)
    {
        $this->container['backgroundWord'] = $backgroundWord;

        return $this;
    }

    /**
     * Gets boxActivityId
     *
     * @return string|null
     */
    public function getBoxActivityId()
    {
        return $this->container['boxActivityId'];
    }

    /**
     * Sets boxActivityId
     *
     * @param string|null $boxActivityId 搜索直达活动id
     *
     * @return self
     */
    public function setBoxActivityId($boxActivityId)
    {
        $this->container['boxActivityId'] = $boxActivityId;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string|null $endTime 活动结束时间，开始时间和结束时间之间不能超过90天
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets materialId
     *
     * @return string|null
     */
    public function getMaterialId()
    {
        return $this->container['materialId'];
    }

    /**
     * Sets materialId
     *
     * @param string|null $materialId 当material_type=\"IMAGE\"时，为图片id；当material_type=\"VIDEO\"时，为视频id。图片id可以通过调用接口alipay.open.file.upload上传图片，获取图片id(bizCode：search_box_banner)。规范详情可查看 <a href=\"https://opendocs.alipay.com/b/03al6f\"> 图片规范 </a>。
     *
     * @return self
     */
    public function setMaterialId($materialId)
    {
        $this->container['materialId'] = $materialId;

        return $this;
    }

    /**
     * Gets materialType
     *
     * @return string|null
     */
    public function getMaterialType()
    {
        return $this->container['materialType'];
    }

    /**
     * Sets materialType
     *
     * @param string|null $materialType IMAGE-图片/VIDEO-视频
     *
     * @return self
     */
    public function setMaterialType($materialType)
    {
        $this->container['materialType'] = $materialType;

        return $this;
    }

    /**
     * Gets merchantId
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     *
     * @param string|null $merchantId 商户id，代运营模式下传入。代运营模式，需要服务商已获得商家\"运营支付宝小程序\"授权。
     *
     * @return self
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string|null $startTime 活动开始时间，开始时间和结束时间之间不能超过90天
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets targetAppid
     *
     * @return string|null
     */
    public function getTargetAppid()
    {
        return $this->container['targetAppid'];
    }

    /**
     * Sets targetAppid
     *
     * @param string|null $targetAppid 跳转应用ID
     *
     * @return self
     */
    public function setTargetAppid($targetAppid)
    {
        $this->container['targetAppid'] = $targetAppid;

        return $this;
    }

    /**
     * Gets targetAppname
     *
     * @return string|null
     */
    public function getTargetAppname()
    {
        return $this->container['targetAppname'];
    }

    /**
     * Sets targetAppname
     *
     * @param string|null $targetAppname 跳转小程序名称
     *
     * @return self
     */
    public function setTargetAppname($targetAppname)
    {
        $this->container['targetAppname'] = $targetAppname;

        return $this;
    }

    /**
     * Gets targetRegions
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryTargetRegion[]|null
     */
    public function getTargetRegions()
    {
        return $this->container['targetRegions'];
    }

    /**
     * Sets targetRegions
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryTargetRegion[]|null $targetRegions 投放目标区域列表
     *
     * @return self
     */
    public function setTargetRegions($targetRegions)
    {
        $this->container['targetRegions'] = $targetRegions;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 活动标题
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets videoInfo
     *
     * @return \Alipay\OpenAPISDK\Model\SearchBoxActivityVideoInfo|null
     */
    public function getVideoInfo()
    {
        return $this->container['videoInfo'];
    }

    /**
     * Sets videoInfo
     *
     * @param \Alipay\OpenAPISDK\Model\SearchBoxActivityVideoInfo|null $videoInfo videoInfo
     *
     * @return self
     */
    public function setVideoInfo($videoInfo)
    {
        $this->container['videoInfo'] = $videoInfo;

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


